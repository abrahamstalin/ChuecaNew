<?php
/**
 * publisher.php
 *---------------------------
 * The Publisher class that handles main functionality of theme.
 *
 */

/**
 * Publisher Theme Class
 */
class Publisher {

	/**
	 * Inner array of objects live instances like generator
	 *
	 * @var array
	 */
	protected static $instances = array();


	/**
	 *
	 */
	function __construct() {

		// Performs the Bf setup
		add_action( 'better-framework/after_setup', array( $this, 'theme_init' ) );

		// Clears BF caches
		add_action( 'after_switch_theme', array( $this, 'after_theme_switch' ) );
		add_action( 'switch_theme', array( $this, 'theme_switch' ) );

		add_action( 'wp_ajax_ajaxified-comments', array( $this, 'handle_ajaxified_comments' ) );
		add_action( 'wp_ajax_nopriv_ajaxified-comments', array( $this, 'handle_ajaxified_comments' ) );

		add_action( 'wp_ajax_ajax-get-post', array( $this, 'handle_ajaxified_load_post' ) );
		add_action( 'wp_ajax_nopriv_ajax-get-post', array( $this, 'handle_ajaxified_load_post' ) );

		add_action( 'wp_ajax_ajaxified-search', array( $this, 'handle_ajaxified_search' ) );
		add_action( 'wp_ajax_nopriv_ajaxified-search', array( $this, 'handle_ajaxified_search' ) );


		/**
		 * Fix for Better AMP Auto update
		 */
		if ( class_exists( 'Better_AMP' ) ) {
			$is_bundled_plugin = ! defined( 'BETTER_AMP_INC' ); // is old better amp plugin?

			if ( $is_bundled_plugin ) {
				add_filter( 'plugins_update_check_locales', array( $this, 'enable_wp2update_better_amp' ), 1 );
			}
		}

	} // __construct


	/**
	 * Callback: delete cache and temp data after theme disabled
	 * action  : switch_theme
	 */
	public function theme_switch() {
		$this->after_theme_switch();

		// Remove theme notices after publisher disabled
		if ( $notices = Better_Framework()->admin_notices()->get_notices() ) {
			delete_option( 'bs-require-plugin-install' );

			foreach ( $notices as $idx => $notice ) {
				if ( isset( $notice['product'] ) && $notice['product'] === 'theme:publisher' ) {
					unset( $notices[ $idx ] );
				}
			}
			Better_Framework()->admin_notices()->set_notices( $notices );
		}
	}

	/**
	 * clears last BF caches for avoiding conflict
	 */
	function after_theme_switch() {

		// Clears BF transients for preventing of happening any problem
		delete_transient( '__better_framework__widgets_css' );
		delete_transient( '__better_framework__panel_css' );
		delete_transient( '__better_framework__menu_css' );
		delete_transient( '__better_framework__terms_css' );
		delete_transient( '__better_framework__final_fe_css' );
		delete_transient( '__better_framework__final_fe_css_version' );
		delete_transient( '__better_framework__backend_css' );

		// Delete all pages css transients
		global $wpdb;
		$wpdb->query( $wpdb->prepare( "DELETE FROM $wpdb->postmeta WHERE meta_key LIKE %s", '_bf_post_css_%' ) );

	} // after_theme_switch

	/**
	 * Callback: a Handler to response comment ajax (deferred) loading
	 * Filter  : wp_ajax_ajaxified-comments
	 *           wp_ajax_nopriv_ajaxified-comments
	 *
	 * todo ajaxify paginated comments
	 */
	public function handle_ajaxified_comments() {
		if ( empty( $_REQUEST['commentPostId'] ) ) {
			return;
		}

		ob_start();

		$post_id = intval( $_REQUEST['commentPostId'] );
		$post    = get_post( $post_id );

		// todo: replace query_posts with WP_Query object
		query_posts( array(
			'p'         => $post->ID,
			'post_type' => $post->post_type,
		) );

		while( have_posts() ) {
			the_post();
			comments_template();
		}

		wp_reset_query();

		$output = ob_get_clean();

		wp_send_json( array(
			'rawHTML' => $output
		) );

	} // handle_ajaxified_comments

	public function handle_ajaxified_load_post() {
		global $withcomments;

		if ( empty( $_REQUEST['post_ID'] ) ) {
			return;
		}
		define( 'PUBLISHER_THEME_AJAXIFIED_LOAD_POST', TRUE );
		$post_id      = intval( $_REQUEST['post_ID'] );
		$related_args = publisher_get_related_posts_args( 1, publisher_get_option( 'post_related_type' ), $post_id );
		$withcomments = TRUE; // enable display post comments

		if ( ! isset( $related_args['post__not_in'] ) ) {
			$related_args['post__not_in'] = array();
		}
		if ( ! empty( $_REQUEST['loaded_posts'] ) && is_array( $_REQUEST['loaded_posts'] ) ) {
			$related_args['post__not_in'] = array_merge(
				$related_args['post__not_in'],
				$_REQUEST['loaded_posts']
			);
			$related_args['post__not_in'] = array_unique( $related_args['post__not_in'] );
		}

		$related_args['post_status'] = 'publish';

		$query = new WP_Query( $related_args );

		publisher_set_query( $query );

		if ( publisher_have_posts() ) {
			ob_start();
			publisher_get_view( 'post', 'content-ajax', 'default' );
			$output = ob_get_clean();
		} else {
			$output = FALSE;
		}

		die( json_encode( array(
			'rawHTML'   => $output,
			'haveNext'  => intval( publisher_get_query()->found_posts ) > 1,
			'permalink' => get_the_permalink(),
			'post_id'   => get_the_ID()
		) ) );

	} // handle_ajaxified_load_post


	/**
	 * Initialize theme
	 */
	function theme_init() {

		// Init VC
		if ( function_exists( 'vc_set_as_theme' ) ) {
			vc_set_as_theme();
		}
		if ( function_exists( 'vc_disable_frontend' ) ) {
			vc_disable_frontend();
		}


		// Init bbPress Support
		self::bbPress();


		/*
		 * Enqueue assets (css, js)
		 */
		add_action( 'wp_enqueue_scripts', array( $this, 'register_assets' ) );
		remove_action( 'wp_head', 'locale_stylesheet' );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

		/*
		 * Featured images settings
		 */
		add_theme_support( 'post-thumbnails' ); // 150x150
		add_image_size( 'publisher-full', 1130, 580, array( 'center', 'center' ) );  // Main Post Image In Full Width
		add_image_size( 'publisher-sm', 210, 136, array( 'center', 'center' ) );  // Main Post Image In Full Width
		add_image_size( 'publisher-md', 357, 210, array( 'center', 'center' ) );  // Main Post Image In Full Width
		add_image_size( 'publisher-lg', 750, 430, array( 'center', 'center' ) );
		add_image_size( 'publisher-tb1', 86, 64, array( 'center', 'center' ) );
		add_image_size( 'publisher-mg2', 279, 220, array( 'center', 'center' ) );
		add_image_size( 'publisher-tall-big', 368, 445, array( 'center', 'center' ) );


		/*
		 * Ads theme image sizes to media uploader
		 */
		add_filter( 'image_size_names_choose', array( $this, 'add_image_size_names_choose' ) );


		/*
		 * Post formats ( All )
		 */
		add_theme_support( 'post-formats', array(
			'video',
			'gallery',
			'audio',
			'aside',
			'image',
			'quote',
			'status',
			'chat',
			'link'
		) );

		/*
		 * This feature enables post and comment RSS feed links to head.
		 */
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Register menus
		 */
		register_nav_menu( 'main-menu', __( 'Main Navigation', 'publisher' ) );
		register_nav_menu( 'resp-menu', __( 'Responsive Navigation', 'publisher' ) );
		register_nav_menu( 'top-menu', __( 'Topbar Menu', 'publisher' ) );
		register_nav_menu( 'footer-menu', __( 'Footer Menu', 'publisher' ) );

		// Sets the content width in pixels, based on the theme's design and stylesheet.
		$GLOBALS['content_width'] = 1170;

		// Implements editor styling
		add_editor_style();

		// Add filters to generating custom menus
		add_filter( 'better-framework/menu/mega/end_lvl', array( $this, 'generate_better_menu' ) );

		// enqueue in header
		add_action( 'wp_head', array( $this, 'wp_head' ) );

		// enqueue in footer
		add_action( 'wp_footer', array( $this, 'wp_footer' ) );

		// add custom classes to body
		add_filter( 'body_class', array( $this, 'filter_body_class' ) );

		// Enqueue admin scripts
		add_action( 'admin_enqueue_scripts', array( $this, 'admin_enqueue' ), 120 );

		// Used for adding order by rand to WP_User_Query
		add_action( 'pre_user_query', array( $this, 'action_pre_user_query' ) );

		/*
		 * Register Sidebars
		 */
		register_sidebar( array(
			'name'          => __( 'Primary Sidebar', 'publisher' ),
			'id'            => 'primary-sidebar',
			'description'   => __( 'Widgets in this area will be shown in the default sidebar.', 'publisher' ),
			'before_title'  => '<h4 class="widget-heading"><span class="h-text">',
			'after_title'   => '</span></h4>',
			'before_widget' => '<div id="%1$s" class="primary-sidebar-widget widget %2$s">',
			'after_widget'  => '</div>'
		) );
		register_sidebar( array(
			'name'          => __( 'Secondary Sidebar', 'publisher' ),
			'id'            => 'secondary-sidebar',
			'description'   => __( 'Widgets in this area will be shown in the secondary small sidebar.', 'publisher' ),
			'before_title'  => '<h4 class="widget-heading"><span class="h-text">',
			'after_title'   => '</span></h4>',
			'before_widget' => '<div id="%1$s" class="secondary-sidebar-widget widget %2$s">',
			'after_widget'  => '</div>'
		) );

		// Footer Larger Sidebars
		register_sidebar( array(
			'name'          => __( 'Footer - Column 1', 'publisher' ),
			'id'            => 'footer-1',
			'description'   => __( 'Widgets in this area will be shown in the footer column 1.', 'publisher' ),
			'before_title'  => '<h5 class="widget-heading"><span class="h-text">',
			'after_title'   => '</span></h5>',
			'before_widget' => '<div id="%1$s" class="footer-widget footer-column-1 widget %2$s">',
			'after_widget'  => '</div>'
		) );
		register_sidebar( array(
			'name'          => __( 'Footer - Column 2', 'publisher' ),
			'id'            => 'footer-2',
			'description'   => __( 'Widgets in this area will be shown in the footer column 2.', 'publisher' ),
			'before_title'  => '<h5 class="widget-heading"><span class="h-text">',
			'after_title'   => '</span></h5>',
			'before_widget' => '<div id="%1$s" class="footer-widget footer-column-2 widget %2$s">',
			'after_widget'  => '</div>'
		) );
		register_sidebar( array(
			'name'          => __( 'Footer - Column 3', 'publisher' ),
			'id'            => 'footer-3',
			'description'   => __( 'Widgets in this area will be shown in the footer column 3.', 'publisher' ),
			'before_title'  => '<h5 class="widget-heading"><span class="h-text">',
			'after_title'   => '</span></h5>',
			'before_widget' => '<div id="%1$s" class="footer-widget footer-column-3 widget %2$s">',
			'after_widget'  => '</div>'
		) );
		register_sidebar( array(
			'name'          => __( 'Footer - Column 4', 'publisher' ),
			'id'            => 'footer-4',
			'description'   => __( 'Widgets in this area will be shown in the footer column 4.', 'publisher' ),
			'before_title'  => '<h5 class="widget-heading"><span class="h-text">',
			'after_title'   => '</span></h5>',
			'before_widget' => '<div id="%1$s" class="footer-widget footer-column-4 widget %2$s">',
			'after_widget'  => '</div>'
		) );

		// Filter WP_Query
		add_action( 'pre_get_posts', array( $this, 'pre_get_posts' ) );

		// Compatibility with Better Facebook Comments
		add_filter( 'better-facebook-comments/js/global-vars', array( $this, 'better_facebook_comments_vars' ) );

		// Compatibility with Better Post Views
		add_filter( 'better-post-views/views/ajax', array( $this, 'better_post_views_ajax' ) );

		// Control post advanced fields
		if ( publisher_get_option( 'advanced_post_fields_excerpt' ) == FALSE || publisher_get_option( 'advanced_post_fields_subtitle' ) == FALSE ) {
			add_filter( 'publisher-theme-core/post-fields/config', array(
				$this,
				'customize_post_advanced_fields'
			), 20 );
		}

	} // theme_init


	/**
	 * Used for retrieving bbPress class of Publisher
	 *
	 * @return Publisher_bbPress|false
	 */
	public static function bbPress() {

		if ( ! class_exists( 'bbpress' ) ) {
			return FALSE;
		}

		if ( isset( self::$instances['bbpress'] ) ) {
			return self::$instances['bbpress'];
		}

		include_once bf_get_theme_dir( 'includes/bbpress/class-publisher-bbpress.php' );

		$generator = apply_filters( 'publisher/bbpress', 'Publisher_bbPress' );

		// if filtered class not exists or not child of Publisher_bbPress class
		if ( ! class_exists( $generator ) || ! is_subclass_of( $generator, 'Publisher_bbPress' ) ) {
			$generator = 'Publisher_bbPress';
		}

		self::$instances['bbpress'] = new $generator;

		return self::$instances['bbpress'];

	}


	/**
	 * Enqueue css and js files
	 *
	 * Action Callback: wp_enqueue_scripts
	 *
	 */
	function register_assets() {

		$theme_version = Better_Framework()->theme()->get( 'Version' );

		bf_enqueue_script( 'element-query' );

		// jquery and bootstrap
		bf_enqueue_script(
			'theme-libs',
			bf_append_suffix( PUBLISHER_THEME_URI . 'js/theme-libs', '.js' ),
			array( 'jquery' ),
			bf_append_suffix( PUBLISHER_THEME_PATH . 'js/theme-libs', '.js' ),
			$theme_version
		);

		// PrettyPhoto
		if ( publisher_get_option( 'light_box_images' ) !== 'disable' ) {
			bf_enqueue_script( 'pretty-photo' );
			bf_enqueue_style( 'pretty-photo' );
		}

		// Theme libraries
		bf_enqueue_script(
			'publisher',
			bf_append_suffix( PUBLISHER_THEME_URI . 'js/theme', '.js' ),
			array( 'jquery' ),
			bf_append_suffix( PUBLISHER_THEME_PATH . 'js/theme', '.js' ),
			$theme_version
		);

		bf_localize_script(
			'publisher',
			'publisher_theme_global_loc',
			apply_filters( 'publisher-theme/localized-items', array(
				'ajax_url'     => admin_url( 'admin-ajax.php' ),
				'loading'      => '<div class="bs-loading"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>',
				'translations' => array(
					'tabs_all'        => publisher_translation_get( 'pretty_tabs_all' ),
					'tabs_more'       => publisher_translation_get( 'pretty_tabs_more' ),
					'lightbox_expand' => publisher_translation_get( 'lightbox_expand' ),
					'lightbox_close'  => publisher_translation_get( 'lightbox_close' ),
				),
				'lightbox'     => array(
					'not_classes' => '',
				),
				'main_menu'    => array(
					'more_menu' => publisher_get_option( 'advanced_collect_more_menu' ) ? 'enable' : 'disable',
				),

			) )
		);


		/**
		 * @see handle_ajaxified_search
		 */
		bf_localize_script(
			'publisher',
			'publisher_theme_ajax_search_loc',
			array(
				'ajax_url'      => admin_url( 'admin-ajax.php' ),
				'previewMarkup' => $this->get_ajax_search_template(),
				'full_width'    => $this->_is_nav_menu_full_width() ? '1' : '0',
			)
		);


		// Theme libraries
		bf_enqueue_style(
			'theme-libs',
			bf_append_suffix( PUBLISHER_THEME_URI . 'css/theme-libs', '.css' ),
			array(),
			bf_append_suffix( PUBLISHER_THEME_PATH . 'css/theme-libs', '.css' ),
			$theme_version
		);

		// Fontawesome
		bf_enqueue_style( 'fontawesome' );

		// If a child theme is active, add the parent theme's style.
		// this is good for performance and cache.
		if ( is_child_theme() ) {

			bf_enqueue_style(
				'publisher',
				bf_append_suffix( PUBLISHER_THEME_URI . 'style', '.css' ),
				array(),
				bf_append_suffix( PUBLISHER_THEME_PATH . 'style', '.css' ),
				$theme_version
			);

			// adds child theme version to the end of url of child theme style file
			// child have not min version
			bf_enqueue_style(
				'publisher-child',
				bf_get_child_theme_uri( 'style.css' ),
				array(),
				bf_get_child_theme_dir( 'style.css' ),
				Better_Framework()->theme( FALSE, TRUE, FALSE )->get( 'Version' )
			);

		} // Core style
		else {
			bf_enqueue_style(
				'publisher',
				bf_append_suffix( PUBLISHER_THEME_URI . 'style', '.css' ),
				array(),
				bf_append_suffix( PUBLISHER_THEME_PATH . 'style', '.css' ),
				$theme_version
			);
		}

		if ( is_rtl() ) {
			bf_enqueue_style(
				'publisher-rtl',
				bf_append_suffix( PUBLISHER_THEME_URI . 'rtl', '.css' ),
				array( 'publisher' ),
				bf_append_suffix( PUBLISHER_THEME_PATH . 'rtl', '.css' ),
				$theme_version
			);
		}

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}

		/** HTML5 Styles for IE from BF */
		wp_enqueue_style( 'bf-html5shiv', bf_get_uri( 'assets/js/html5shiv.min.js' ), array( 'publisher' ), Better_Framework()->version );
		wp_style_add_data( 'bf-html5shiv', 'conditional', 'lt IE 9' );
		wp_enqueue_style( 'bf-respond', bf_get_uri( 'assets/js/respond.min.js' ), array( 'publisher' ), Better_Framework()->version );
		wp_style_add_data( 'bf-respond', 'conditional', 'lt IE 9' );

	} // register_assets

	public function get_ajax_search_template() {

		$suffix = $this->_is_nav_menu_full_width() ? '-full' : '';

		//		$post_types    = get_post_types( array( 'public' => TRUE ) );
		//		if ( isset( $post_types['product'] ) && function_exists( 'WC' ) ) {
		//			return publisher_get_view( 'ahax-search', 'with-products' . $suffix, '', FALSE );
		//		}

		return publisher_get_view( 'ajax-search', 'without-products' . $suffix, '', FALSE );
	}


	protected function _is_nav_menu_full_width() {

		$_check = array(
			'style-1' => '',
			'style-2' => '',
			'style-3' => '',
			'style-4' => '',
			'style-7' => '',
		);

		return isset( $_check[ publisher_get_header_style() ] );
	}


	protected function _get_query_categories( &$wp_query, $taxonomy = 'category', $limit = 4 ) {

		if ( ! $wp_query->posts ) {
			return FALSE;
		}

		$i       = 0;
		$results = array();

		while( count( $results ) < $limit && $i < count( $wp_query->posts ) ) {

			$post = &$wp_query->posts[ $i ];
			$i ++;

			/**
			 * @var WP_Term $_cat
			 */
			$post_cats = get_the_terms( $post->ID, $taxonomy );

			if ( $post_cats && ! is_wp_error( $post_cats ) ) {
				foreach ( $post_cats as $_cat ) {

					if ( count( $results ) > $limit ) {
						break;
					}

					$results[ $_cat->term_id ] = $_cat;
				}
			}

		};

		return $results;
	}


	/**
	 * Callback: a Handler to response  ajax search
	 * Filter  : wp_ajax_ajaxified-search
	 *           wp_ajax_nopriv_ajaxified-search
	 */
	public function handle_ajaxified_search() {

		global $wpdb;

		if ( empty( $_REQUEST['s'] ) || empty( $_REQUEST['sections'] ) ) {
			return;
		}

		if ( isset( $_REQUEST['full_width'] ) ) {
			$is_full_width = filter_var( $_REQUEST['full_width'], FILTER_VALIDATE_BOOLEAN );
		} else {
			$is_full_width = $this->_is_nav_menu_full_width();
		}

		$search     = $wpdb->esc_like( $_REQUEST['s'] );
		$sections   = (array) $_REQUEST['sections'];
		$post_count = $is_full_width ? 6 : 4;
		$post_types = get_post_types( array( 'public' => TRUE ) );

		$filtered_post_types = array_diff_key( //
			$post_types,
			array_flip( array(   // list of post types to remove
				'product',
				'attachment',
			) )
		);


		/**
		 * Get Posts section
		 */
		if ( in_array( 'posts', $sections ) ) {

			$search_post_types = $filtered_post_types;

			// Customize search result content
			switch ( publisher_get_option( 'search_result_content' ) ) {

				case 'post':
					$search_post_types[] = 'post';
					break;

				case 'page':
					$search_post_types[] = 'page';
					break;

				case 'post-page':
					$search_post_types[] = 'post';
					$search_post_types[] = 'page';
					break;

			}// switch

			$q_args = array(
				's'              => $search,
				'post_type'      => $search_post_types,
				'posts_per_page' => $post_count,
				'post_status'    => array( 'publish' ),
			);

			$query = new WP_Query( $q_args );

			publisher_set_query( $query );
			publisher_set_prop( 'show-more-link', $query->found_posts > $post_count );

			if ( $is_full_width ) {
				publisher_set_prop( 'posts-count', 6 );
				publisher_set_prop( 'listing-class', 'columns-2' );
			} else {
				publisher_set_prop( 'posts-count', 3 );
				publisher_set_prop( 'listing-class', 'columns-1' );
			}

			$posts = publisher_get_view( 'loop', 'ajax-search-posts', '', FALSE );

		}


		/**
		 * Get Product section
		 */
		//		if ( in_array( 'products', $sections ) &&
		//		     isset( $post_types['product'] ) &&
		//		     function_exists( 'WC' )
		//		) { // if product post exists & WC enabled
		//			$showposts = 3;
		//
		//			publisher_clear_query();
		//			publisher_clear_props();
		//
		//			$query = new WP_Query( array( 's' => $search, 'post_type' => 'product', 'showposts' => $showposts ) );
		//			publisher_set_query( $query );
		//			publisher_set_prop( 'posts-count', $showposts );
		//			publisher_set_prop( 'hide_heading', TRUE );
		//
		//			add_action( 'woocommerce_shortcode_before_products_loop', function () {
		//
		//			} );
		//			$products = publisher_get_view( 'loop', 'ajax-search-products', '', FALSE );
		//		}


		/**
		 * Choose related categories
		 *
		 * todo: display parent categories if founded cats was less than 3 item
		 */
		if ( in_array( 'categories', $sections ) ) {

			$terms_counter = 0;
			$categories    = '';
			$printed_terms = array();

			foreach ( array( 'search', 'posts' ) as $search_method ) {

				if ( $terms_counter >= 4 ) {
					break;
				}

				if ( $search_method == 'search' ) {
					$search_terms = $this->search_term( $search, 'category', 4 );
				} else {
					if ( ! empty( $query->posts ) ) {
						$search_terms = $this->_get_query_categories( $query );
					} else {
						break;
					}
				}

				foreach ( (array) $search_terms as $s_term ) {

					if ( in_array( $s_term->term_id, $printed_terms ) ) {
						continue;
					} else {
						$printed_terms[] = $s_term->term_id;
					}

					$link = get_term_link( intval( $s_term->term_id ), 'category' );

					if ( ! is_wp_error( $link ) ) {
						$categories .= '<li>';
						$categories .= '<a href="' . esc_url( $link ) . '" class="clean-button clean-button-light">';
						$categories .= '<i class="fa fa-folder-open" aria-hidden="true"></i>';
						$categories .= $s_term->name;
						$categories .= '</a></li>';

						$terms_counter ++;
						if ( $terms_counter >= 4 ) {
							break;
						}

					}

				}

			}


			if ( empty( $categories ) ) {
				$categories = '<div class="align-vertical-center search-404">';
				$categories .= publisher_translation_get( 'search_cat_not_found' );
				$categories .= '</div>';
			} else {
				$categories = '<ul class="post-categories">' . $categories . '</ul>';
			}

		}


		/**
		 * Choose related tags
		 */
		if ( in_array( 'tags', $sections ) ) {

			$terms_counter = 0;
			$tags          = '';
			$printed_terms = array();


			foreach ( array( 'search', 'posts' ) as $search_method ) {

				if ( $terms_counter >= 4 ) {
					break;
				}

				if ( $search_method == 'search' ) {
					$search_terms = $this->search_term( $search, 'post_tag', 4 );
				} else {
					if ( ! empty( $query->posts ) ) {
						$search_terms = $this->_get_query_categories( $query, 'post_tag' );
					} else {
						break;
					}
				}

				foreach ( $search_terms as $s_term ) {

					if ( in_array( $s_term->term_id, $printed_terms ) ) {
						continue;
					} else {
						$printed_terms[] = $s_term->term_id;
					}

					$link = get_term_link( intval( $s_term->term_id ), 'post_tag' );

					if ( ! is_wp_error( $link ) ) {

						$tags .= '<li>';
						$tags .= '<a href="' . esc_url( get_term_link( $s_term, 'post_tag' ) ) . '" class="clean-button clean-button-light">';
						$tags .= '<i class="fa fa-hashtag" aria-hidden="true"></i>';
						$tags .= $s_term->name;
						$tags .= '</a></li>';

						$terms_counter ++;
						if ( $terms_counter >= 4 ) {
							break;
						}

					}
				}

			}

			if ( empty( $tags ) ) {
				$tags = '<div class="align-vertical-center search-404">';
				$tags .= publisher_translation_get( 'search_tag_not_found' );
				$tags .= '</div>';
			} else {
				$tags = '<ul class="post-categories">' . $tags . '</ul>';
			}

		}


		wp_send_json( array(
			'sections' => compact( 'posts', 'more_posts', 'products', 'categories', 'tags' )
		) );

	}


	/**
	 * Search terms by name
	 *
	 * @param string $text
	 * @param string $tax
	 *
	 * @return array|null|object
	 */
	function search_term( $text = '', $tax = 'category', $limit = 4 ) {

		if ( empty( $text ) ) {
			return array();
		}

		global $wpdb;

		$tax_clause = $wpdb->prepare( "AND tt.taxonomy = %s", $tax );

		// Assume already escaped
		$value = '%' . wp_unslash( $text ) . '%';

		return $wpdb->get_results( $wpdb->prepare( "SELECT t.*, tt.* FROM $wpdb->terms AS t INNER JOIN $wpdb->term_taxonomy AS tt ON t.term_id = tt.term_id WHERE t.name LIKE %s", $value ) . " $tax_clause LIMIT $limit" );

	}


	/**
	 *  Enqueue anything in header
	 */
	function wp_head() {

		// Add custom css
		$this->add_panel_custom_css();

		// Site favicon with fallback for old WP versions
		//if ( ! function_exists( 'has_site_icon' ) ) {
		$favicon_16_16 = publisher_get_option( 'favicon_16_16' );
		if ( $favicon_16_16 ) {
			?>
			<link rel="shortcut icon" href="<?php echo esc_url( $favicon_16_16 ); ?>"><?php
		}

		$favicon_57_57 = publisher_get_option( 'favicon_57_57' );
		if ( $favicon_57_57 ) {
			?>
			<link rel="apple-touch-icon" href="<?php echo esc_url( $favicon_57_57 ); ?>"><?php
		}

		$favicon_114_114 = publisher_get_option( 'favicon_114_114' );
		if ( $favicon_114_114 ) {
			?>
			<link rel="apple-touch-icon" sizes="114x114" href="<?php echo esc_url( $favicon_114_114 ); ?>"><?php
		}

		$favicon_72_72 = publisher_get_option( 'favicon_72_72' );
		if ( $favicon_72_72 ) {
			?>
			<link rel="apple-touch-icon" sizes="72x72" href="<?php echo esc_url( $favicon_72_72 ); ?>"><?php
		}

		$favicon_144_144 = publisher_get_option( 'favicon_144_144' );
		if ( $favicon_144_144 ) {
			?>
			<link rel="apple-touch-icon" sizes="144x144" href="<?php echo esc_url( $favicon_144_144 ); ?>"><?php
		}
		//}


		// Header HTML Code
		publisher_echo_option( '_custom_header_code' );

	} // wp_head


	/**
	 * Used for adding theme panels custom css to page
	 */
	function add_panel_custom_css() {

		/**
		 *
		 * Processes and adds custom css codes that are coming from all panels
		 *
		 */
		bf_process_panel_custom_css_code_fields( array(
			'function' => 'publisher_get_option'
		) );


	} // add_panel_custom_css


	/**
	 * Callback: Enqueue anything in footer
	 *
	 * Action: wp_footer
	 */
	function wp_footer() {

		// Footer HTML Code
		publisher_echo_option( '_custom_footer_code' );

	} // wp_footer


	/**
	 *  Enqueue admin scripts
	 */
	function admin_enqueue() {

		$version = Better_Framework::theme()->get( 'Version' );

		wp_enqueue_style( 'jquery-ui', bf_get_theme_uri( 'css/jquery-ui.css' ), array(), $version );
		wp_enqueue_style( 'publisher-admin', bf_get_theme_uri( 'css/admin-style.css' ), array(), $version );
		wp_enqueue_script( 'publisher-admin', bf_get_theme_uri( 'js/theme-admin.js' ), array(
			'jquery-ui-resizable',
			'jquery'
		), $version );

		// Admin custom css code
		bf_add_admin_css( publisher_get_option( '_admin_css_code' ) );

	} // admin_enqueue


	/**
	 * Callback: Customize body classes
	 *
	 * Filter: body_class
	 *
	 * @param $classes
	 *
	 * @return array
	 */
	function filter_body_class( $classes ) {

		// Activates light box
		if ( publisher_get_option( 'light_box_images' ) !== 'disable' ) {
			$classes[] = 'active-light-box';
		}

		// Body top border
		if ( publisher_get_option( 'header_top_border' ) ) {
			$classes[] = 'active-top-line';
		}

		// Body top border
		if ( ! is_rtl() ) {
			$classes[] = 'ltr';
		}

		// Page layout
		$classes[] = 'page-layout-' . publisher_get_page_layout();

		// Page boxed layout
		$classes[] = publisher_get_page_boxed_layout();

		// Activates sticky sidebar
		if ( publisher_get_option( 'sticky_sidebar' ) == 'enable' ) {
			$classes[] = 'active-sticky-sidebar';
		}

		// Activate Sticky Menu
		if ( publisher_get_option( 'menu_sticky' ) != 'no-sticky' ) {
			$classes[] = 'main-menu-sticky' . ( publisher_get_option( 'menu_sticky' ) == 'smart' ? '-smart' : '' );
		}

		// Activate Ajax Search
		if ( publisher_get_option( 'menu_show_search_box' ) == 'show' && publisher_get_option( 'menu_search_type' ) == 'ajax' ) {
			$classes[] = 'active-ajax-search';
		}

		// Infinity load related posts for single posts
		if ( is_singular( 'post' ) && publisher_get_related_post_type() == 'infinity-related-post' ) {
			$classes[] = 'infinity-related-post';
		}

		/**
		 * Processes custom classes that are coming from panels
		 */
		bf_process_panel_custom_css_class_fields( $classes, array(
			'function' => 'publisher_get_option'
		) );

		return $classes;

	} // filter_body_class


	/**
	 * Generate Custom Mega Menu HTML
	 *
	 * @param array $args
	 *
	 * @return string
	 */
	public function generate_better_menu( $args ) {

		publisher_set_prop( 'mega-menu-args', $args );

		switch ( $args['current-item']->mega_menu ) {

			case 'link-3-column':
			case 'link-2-column':
			case 'link-4-column':
				$args['output'] = publisher_get_view( 'menu', 'mega-links-columns', 'general', FALSE );
				break;

			case 'link-list':
				$args['output'] = publisher_get_view( 'menu', 'mega-links-list', 'general', FALSE );
				break;

			case 'grid-posts':
				$args['output'] = publisher_get_view( 'menu', 'mega-grid-posts', 'general', FALSE );
				break;

			case 'tabbed-grid-posts':
				$args['output'] = publisher_get_view( 'menu', 'mega-tabbed-grid-posts', 'general', FALSE );
				break;
		}

		return $args;

	} // generate_better_menu


	/**
	 * Adds random order by feature to WP_User_Query
	 *
	 * Action: pre_user_query
	 *
	 * @param $class
	 *
	 * @return mixed
	 */
	public function action_pre_user_query( $class ) {

		if ( 'rand' == $class->query_vars['orderby'] ) {
			$class->query_orderby = str_replace( 'user_login', 'RAND()', $class->query_orderby );
		}

		return $class;

	} // action_pre_user_query


	/**
	 * Resets typography options to default
	 *
	 * Callback
	 *
	 * @return array
	 */
	public static function reset_typography_options() {

		$lang = bf_get_current_language_option_code();

		$theme_options = get_option( publisher_get_theme_panel_id() . $lang );

		$fields   = Better_Framework()->options()->load_panel_fields( publisher_get_theme_panel_id() );
		$defaults = Better_Framework()->options()->get_panel_std( publisher_get_theme_panel_id() );

		$all_styles = publisher_styles_config();

		$style = publisher_get_style();

		// if items haven't any option config
		if ( ! isset( $all_styles[ $style ] ) ) {
			$std_id = 'std';
		} else {
			$std_id = 'std-' . $style;
		}

		foreach ( (array) $fields as $field_id => $field ) {

			if ( ! isset( $field['reset-typo'] ) || ! $field['reset-typo'] ) {
				unset( $fields[ $field_id ] );
				continue;
			}

			if ( $std_id == 'std' ) {
				$theme_options[ $field['id'] ] = $defaults[ $field['id'] ][ $std_id ];
			} else {
				if ( isset( $defaults[ $field['id'] ][ $std_id ] ) ) {
					$theme_options[ $field['id'] ] = $defaults[ $field['id'] ][ $std_id ];
				} elseif ( isset( $defaults[ $field['id'] ]['std'] ) ) {
					$theme_options[ $field['id'] ] = $defaults[ $field['id'] ]['std'];
				}
			}

			unset( $defaults[ $field_id ] );
		}

		unset( $fields );
		unset( $defaults );

		// Updates option
		update_option( publisher_get_theme_panel_id() . $lang, $theme_options );

		// clear caches
		delete_transient( '__better_framework__panel_css' );
		delete_transient( '__better_framework__final_fe_css' );
		delete_transient( '__better_framework__final_fe_css_version' );

		Better_Framework()->admin_notices()->add_notice( array(
			'msg'         => __( 'Typography options resets to default.', 'publisher' ),
			'notice-icon' => PUBLISHER_THEME_URI . 'images/admin/notice-logo.png',
			'product'     => 'theme:publisher'
		) );

		return array(
			'status'  => 'succeed',
			'msg'     => __( 'Typography resets to default.', 'publisher' ),
			'refresh' => TRUE
		);

	} // reset_typography_options


	/**
	 * Resets blocks settings to default
	 *
	 * Callback
	 *
	 * @return array
	 */
	public static function reset_blocks_options() {

		$lang = bf_get_current_language_option_code();

		$theme_options = get_option( publisher_get_theme_panel_id() . $lang );

		$fields   = Better_Framework()->options()->load_panel_fields( publisher_get_theme_panel_id() );
		$defaults = Better_Framework()->options()->get_panel_std( publisher_get_theme_panel_id() );

		$all_styles = publisher_styles_config();

		$style = publisher_get_style();

		// if items haven't any option config
		if ( ! isset( $all_styles[ $style ] ) ) {
			$std_id = 'std';
		} else {
			$std_id = 'std-' . $style;
		}

		foreach ( (array) $fields as $field ) {
			if ( ! isset( $field['reset-blocks'] ) || ! $field['reset-blocks'] ) {
				continue;
			}

			if ( $std_id == 'std' ) {
				$theme_options[ $field['id'] ] = $defaults[ $field['id'] ][ $std_id ];
			} else {
				if ( isset( $defaults[ $field['id'] ][ $std_id ] ) ) {
					$theme_options[ $field['id'] ] = $defaults[ $field['id'] ][ $std_id ];
				} elseif ( isset( $defaults[ $field['id'] ]['std'] ) ) {
					$theme_options[ $field['id'] ] = $defaults[ $field['id'] ]['std'];
				}
			}
		}

		unset( $fields );
		unset( $defaults );

		// Updates option
		update_option( publisher_get_theme_panel_id() . $lang, $theme_options );

		Better_Framework()->admin_notices()->add_notice( array(
			'msg'         => __( 'Blocks settings resets to default.', 'publisher' ),
			'notice-icon' => PUBLISHER_THEME_URI . 'images/admin/notice-logo.png',
			'product'     => 'theme:publisher'
		) );

		return array(
			'status'  => 'succeed',
			'msg'     => __( 'Blocks options resets to default.', 'publisher' ),
			'refresh' => TRUE
		);

	} // reset_blocks_options


	/**
	 * Resets color options to default
	 *
	 * Callback
	 *
	 * @return array
	 */
	public static function reset_color_options() {

		$lang = bf_get_current_language_option_code();

		$theme_options = get_option( publisher_get_theme_panel_id() . $lang );

		$fields   = Better_Framework()->options()->load_panel_fields( publisher_get_theme_panel_id() );
		$defaults = Better_Framework()->options()->get_panel_std( publisher_get_theme_panel_id() );

		$all_styles = publisher_styles_config();

		$style = publisher_get_style();

		// if items haven't any option config
		if ( ! isset( $all_styles[ $style ] ) ) {
			$std_id = 'std';
		} else {
			$std_id = 'std-' . $style;
		}

		foreach ( (array) $fields as $field_id => $field ) {
			if ( ! isset( $field['reset-color'] ) || ! $field['reset-color'] ) {
				continue;
			}

			if ( $std_id == 'std' ) {
				$theme_options[ $field['id'] ] = $defaults[ $field['id'] ][ $std_id ];
			} else {
				if ( isset( $defaults[ $field['id'] ][ $std_id ] ) ) {
					$theme_options[ $field['id'] ] = $defaults[ $field['id'] ][ $std_id ];
				} elseif ( isset( $defaults[ $field['id'] ]['std'] ) ) {
					$theme_options[ $field['id'] ] = $defaults[ $field['id'] ]['std'];
				}
			}
		}

		unset( $fields );
		unset( $defaults );

		// Updates option
		update_option( publisher_get_theme_panel_id() . $lang, $theme_options );

		// clear caches
		delete_transient( '__better_framework__panel_css' );
		delete_transient( '__better_framework__final_fe_css' );
		delete_transient( '__better_framework__final_fe_css_version' );

		Better_Framework()->admin_notices()->add_notice( array(
			'msg'         => __( 'All color options resets to default.', 'publisher' ),
			'notice-icon' => PUBLISHER_THEME_URI . 'images/admin/notice-logo.png',
			'product'     => 'theme:publisher'
		) );

		return array(
			'status'  => 'succeed',
			'msg'     => __( 'Color options resets to default.', 'publisher' ),
			'refresh' => TRUE
		);

	} // reset_color_options


	/**
	 * Callback: Used for changing WP_Query, specifically for posts per page in archives
	 *
	 * @param   WP_Query $query WP_Query instance
	 */
	function pre_get_posts( $query ) {

		// This is only for front end and main query
		if ( ! is_admin() && $query->is_main_query() ) {

			// Homepage customize query
			if ( $query->is_home() ) {

				// Home posts count
				if ( publisher_get_option( 'home_posts_count' ) != '' ) {
					$query->set( 'posts_per_page', publisher_get_option( 'home_posts_count' ) );
					$query->set( 'paged', bf_get_query_var_paged() );
				}

				// Home category filters
				if ( publisher_get_option( 'home_cat_include' ) != '' ) {
					$query->set( 'cat', publisher_get_option( 'home_cat_include' ) );
				}

				// Home exclude category filters
				if ( publisher_get_option( 'home_cat_exclude' ) != '' ) {
					$query->set( 'category__not_in', publisher_get_option( 'home_cat_exclude' ) );
				}

				// Home tag filters
				if ( publisher_get_option( 'home_tag_include' ) != '' ) {
					$query->set( 'tag__in', publisher_get_option( 'home_tag_include' ) );
				}

			} // Posts per page for categories
			elseif ( $query->get_queried_object_id() > 0 && publisher_is_valid_tax( 'category', $query->get_queried_object() ) ) {

				/**
				 * @type $term WP_Term
				 */
				$term = $query->get_queried_object_id();

				$paged = get_query_var( 'paged' );
				$limit = get_option( 'posts_per_page' );

				// Custom count per category
				if ( bf_get_term_meta( 'term_posts_count', $term, '' ) != '' ) {
					$limit = bf_get_term_meta( 'term_posts_count', $term, '' );

				} // Custom count for all categories
				elseif ( publisher_get_option( 'cat_posts_count' ) != '' && intval( publisher_get_option( 'cat_posts_count' ) ) > 0 ) {
					$limit = publisher_get_option( 'cat_posts_count' );
				}

				$query->set( 'posts_per_page', $limit );

				// exclude first
				$slider_config = publisher_cat_main_slider_config( $term );
				if ( $slider_config['show'] && $slider_config['type'] == 'custom-blocks' && empty( $query->is_feed ) ) {
					if ( $paged > 1 ) {
						$query->set( 'offset', intval( $slider_config['posts'] ) + ( ( $paged - 1 ) * $limit ) );
					} else {
						$query->set( 'offset', intval( $slider_config['posts'] ) );
					}
				}

			} // Posts per page for tags
			elseif ( $query->get_queried_object_id() > 0 && publisher_is_valid_tax( 'tag', $query->get_queried_object() ) ) {

				/**
				 * @type $term WP_Term
				 */
				$term = $query->get_queried_object();

				// Custom count per tag
				if ( bf_get_term_meta( 'term_posts_count', $term, '' ) != '' ) {

					$query->set( 'posts_per_page', bf_get_term_meta( 'term_posts_count', $term, '' ) );
					$query->set( 'paged', bf_get_query_var_paged() );

				} // Custom count for all tags
				elseif ( publisher_get_option( 'tag_posts_count' ) != '' && intval( publisher_get_option( 'tag_posts_count' ) ) > 0 ) {

					$query->set( 'posts_per_page', publisher_get_option( 'tag_posts_count' ) );
					$query->set( 'paged', bf_get_query_var_paged() );

				}

			} // Posts per page for authors
			elseif ( $query->is_author() ) {

				$current_user = $query->query_vars['author_name'];
				$current_user = get_user_by( 'slug', $current_user );

				// Custom count per author
				if ( bf_get_user_meta( 'author_posts_count', $current_user, '' ) != '' && intval( bf_get_user_meta( 'author_posts_count', $current_user, '' ) ) > 0 ) {

					$query->set( 'posts_per_page', bf_get_user_meta( 'author_posts_count', $current_user, '' ) );
					$query->set( 'paged', bf_get_query_var_paged() );

				} // Custom count for all tags
				elseif ( publisher_get_option( 'author_posts_count' ) != '' && intval( publisher_get_option( 'author_posts_count' ) ) > 0 ) {

					$query->set( 'posts_per_page', publisher_get_option( 'author_posts_count' ) );
					$query->set( 'paged', bf_get_query_var_paged() );

				}

			} // Posts per page for search
			elseif ( $query->is_search() ) {

				if ( publisher_get_option( 'search_posts_count' ) != '' && intval( publisher_get_option( 'search_posts_count' ) ) > 0 ) {

					$query->set( 'posts_per_page', publisher_get_option( 'search_posts_count' ) );
					$query->set( 'paged', bf_get_query_var_paged() );

				}

				// Support previous post_types
				$post_type = $query->get( 'post_type' );

				if ( empty( $post_type ) ) {
					$post_type = array();
				} elseif ( is_string( $post_type ) ) {
					$post_type = array(
						$post_type,
					);
				}

				// Customize search result content
				switch ( publisher_get_option( 'search_result_content' ) ) {

					case 'post':
						$post_type[] = 'post';
						break;

					case 'page':
						$post_type[] = 'page';
						break;

					case 'post-page':
						$post_type[] = 'post';
						$post_type[] = 'page';
						break;

				}// switch

				$query->set( 'post_type', $post_type );

			}// is_search

		}// if
	} // pre_get_posts


	/**
	 * Callback: Change Better Facebook Comments text
	 *
	 * Filter: better-facebook-comments/js/global-vars
	 *
	 * @param $vars
	 *
	 * @return mixed
	 */
	function better_facebook_comments_vars( $vars ) {

		$vars['text_0']    = '<i class="fa fa-comments-o"></i> %%NUMBER%%';
		$vars['text_1']    = '<i class="fa fa-comments-o"></i> %%NUMBER%%';
		$vars['text_2']    = '<i class="fa fa-comments-o"></i> %%NUMBER%%';
		$vars['text_more'] = '<i class="fa fa-comments-o"></i> %%NUMBER%%';

		return $vars;
	}


	/**
	 * Adds custom image sizes to WP media uploader
	 *
	 * @param $sizes
	 *
	 * @return array
	 */
	function add_image_size_names_choose( $sizes ) {

		$new_sizes = array(
			'publisher-sm' => __( 'Publisher - Small', 'publisher' ),
			'publisher-md' => __( 'Publisher - Middle', 'publisher' ),
			'publisher-lg' => __( 'Publisher - Large', 'publisher' ),
		);

		$sizes = array_merge( $sizes, $new_sizes );

		return $sizes;

	}


	//
	// BS-Pagination Ajax
	//


	/**
	 * Custom function used to return mega menu posts from bs_pagin ajax
	 */
	public static function bs_pagin_ajax_mega_grid_posts() {
		publisher_get_view( 'menu', 'mega-grid-posts-content' );
	}


	/**
	 * Custom function used to return tabbed mega menu posts from bs_pagin ajax
	 */
	public static function bs_pagin_ajax_tabbed_mega_grid_posts( $res, $wp_query, $view, $type, $atts ) {
		// only display pagination on defer loading [ paged=1 ]
		if ( isset( $atts['cat'] ) ) {
			publisher_set_prop( 'listing-main-term', $atts['cat'] );
		}
		$display_pagination      = ! ( isset( $atts['paged'] ) && $atts['paged'] > 1 );
		$atts['have_pagination'] = ! empty( $atts['paginate'] );

		if ( $display_pagination ) {
			publisher_theme_pagin_manager()->wrapper_start( $atts );
		}
		publisher_get_view( 'menu', 'mega-tabbed-grid-posts-content' );
		if ( $display_pagination ) {
			publisher_theme_pagin_manager()->wrapper_end();
		}

		if ( $display_pagination ) {
			publisher_theme_pagin_manager()->display_pagination( $atts, $wp_query, $view, $type );
		}
	}

	/**
	 * Display related posts
	 * @see path: views/general/post/_related.php
	 *
	 * @param array $atts
	 */
	protected static function _display_related_posts( $atts ) {
		publisher_theme_pagin_manager()->wrapper_start( $atts );

		$block_settings = publisher_get_option( 'blocks-related-posts' );
		publisher_set_prop( 'title-limit', $block_settings['title-limit'] );
		publisher_set_prop( 'show-term-badge', $block_settings['term-badge'] );
		publisher_set_prop( 'term-badge-count', $block_settings['term-badge-count'] );
		publisher_set_prop( 'show-format-icon', $block_settings['format-icon'] );
		publisher_set_prop( 'show-excerpt', FALSE );
		publisher_set_prop( 'show-meta', FALSE );
		publisher_set_prop( 'listing-class', 'columns-3' );
		publisher_set_prop( 'block-customized', TRUE );
		publisher_set_prop_class( 'simple-grid' );
		publisher_get_view( 'loop', 'listing-grid-1' );

		publisher_theme_pagin_manager()->wrapper_end();
	}

	/**
	 * Author related posts ajax deferred loading & pagination handler
	 * @see path: views/general/post/_related.php
	 *
	 * @param array    $res
	 * @param WP_Query $wp_query
	 * @param string   $view
	 * @param string   $type
	 * @param array    $atts
	 */
	public static function fetch_other_related_posts( $res, $wp_query, $view, $type, $atts ) {
		// only display pagination on defer loading [ paged=1 ]
		$display_pagination      = ! ( isset( $atts['paged'] ) && $atts['paged'] > 1 );
		$atts['have_pagination'] = ! empty( $atts['paginate'] );

		if ( $display_pagination ) {
			publisher_theme_pagin_manager()->wrapper_start( $atts );
		}
		self::_display_related_posts( $atts );
		if ( $display_pagination ) {
			publisher_theme_pagin_manager()->wrapper_end();
			publisher_theme_pagin_manager()->display_pagination( $atts, $wp_query, $view, $type );
		}
	}

	/**
	 * Related posts pagination ajax handler
	 * @see path: views/general/post/_related.php
	 *
	 * @param array    $res
	 * @param WP_Query $wp_query
	 * @param string   $view
	 * @param string   $type
	 * @param array    $atts
	 */
	public static function fetch_related_posts( $res, $wp_query, $view, $type, $atts ) {
		self::_display_related_posts( $atts );
	}

	/**
	 * Custom function used to return mega menu posts from bs_pagin ajax
	 */
	public static function bs_pagin_ajax_archive( &$response ) {

		// if request is not valid
		if ( empty( $_REQUEST['query']['query_vars'] ) ) {
			wp_send_json( array( 'error' => __( 'Invalid Request', 'publisher' ) ) );

			return;
		}

		$args = $_REQUEST['query']['query_vars'];

		// Show/hide excerpt
		if ( isset( $_REQUEST['query']['show_excerpt'] ) ) {
			publisher_set_prop( 'show-excerpt', $_REQUEST['query']['show_excerpt'] );
		}

		// update query for current page (paged)
		$args['paged'] = $paged = max( intval( $_REQUEST['current_page'] ), 1 );

		// fix offset of query
		if ( ! empty( $args['offset'] ) ) {
			$args['offset'] = ( max( $paged - 1, 1 ) * intval( $args['posts_per_page'] ) ) + ( $args['offset'] );
		}

		$args['post_status'] = 'publish';

		$wp_query = new WP_Query( $args );
		publisher_set_query( $wp_query );

		// total pages and next page with fix for offset
		if ( ! empty( $args['offset'] ) ) {
			// uses $_REQUEST because $args offset was changed for query fix
			$response['pages']     = bf_get_wp_query_total_pages( $wp_query, $_REQUEST['query']['query_vars']['offset'], $args['posts_per_page'] );
			$response['have_next'] = $response['pages'] > $paged;
			$response['have_prev'] = $paged > 1;
		} else {
			$response['pages']     = $wp_query->max_num_pages;
			$response['have_next'] = $wp_query->max_num_pages > $paged;
			$response['have_prev'] = $paged > 1;
		}

		$response['label'] = publisher_theme_pagin_manager()->get_pagination_label( $paged, $response['pages'] );

		// Add response to .listing for better UX
		if ( isset( $_REQUEST['pagin_type'] ) ) {

			$_check = array(
				'more_btn'          => '',
				'infinity'          => '',
				'more_btn_infinity' => '',
			);

			$listing = publisher_get_page_listing( $wp_query );

			if ( isset( $_check[ $_REQUEST['pagin_type'] ] ) ) {

				$_check = array(
					'listing-mix-4-1' => '',
					'listing-mix-4-2' => '',
					'listing-mix-4-3' => '',
					'listing-mix-4-4' => '',
					'listing-mix-4-5' => '',
					'listing-mix-4-6' => '',
					'listing-mix-4-7' => '',
					'listing-mix-4-8' => '',
				);

				if ( ! isset( $_check[ $listing ] ) ) {
					publisher_set_prop( 'show-listing-wrapper', FALSE );
					$response['add-to']   = '.listing';
					$response['add-type'] = 'append';
				}
			}

			unset( $_check ); // clear memory
		}

		// Prints posts base of listing that was selected in panels.
		// Location: "views/general/loop/listing-*.php"
		publisher_get_view( 'loop', publisher_get_page_listing( $wp_query ) );

	} // bs_pagin_ajax_archive


	/**
	 * Compatibility of Publisher with Better Post Views plugin in ajax callback.
	 *
	 * @param string $count
	 *
	 * @return string
	 */
	function better_post_views_ajax( $count = '' ) {
		return '<i class="fa fa-eye"></i> <b class="number">' . bf_human_number_format( $count ) . '</b>';
	}


	/**
	 * Changes the default config of post advanced fields
	 *
	 * @param $config
	 *
	 * @return mixed
	 */
	function customize_post_advanced_fields( $config ) {

		$config['excerpt']  = publisher_get_option( 'advanced_post_fields_excerpt' );
		$config['subtitle'] = publisher_get_option( 'advanced_post_fields_subtitle' );

		return $config;
	}


	/**
	 * Trick for sending update for lower version number!
	 *
	 * @param $return
	 *
	 * @return mixed
	 */
	public function enable_wp2update_better_amp( $return ) {

		// filter the request params!
		add_filter( 'http_request_args', array( $this, 'make_better_amp_updatable' ), 9, 2 );

		return $return;
	}


	/**
	 * Sends update for v1.1 because we reverted the base version of new plugin is starting from v1.0
	 *
	 * @param $args
	 * @param $url
	 *
	 * @return mixed
	 */
	public function make_better_amp_updatable( $args, $url ) {

		if ( ! preg_match( '#^https?://api.wordpress.org/+plugins/+update-check#i', $url ) ) {
			return $args;
		}

		if ( empty( $args['body']['plugins'] ) ) {
			return $args;
		}

		$plugins = json_decode( $args['body']['plugins'], TRUE );

		if ( isset( $plugins['plugins']['better-amp/better-amp.php'] ) ) {
			$plugins['plugins']['better-amp/better-amp.php']['Version'] = '0.9';
		}

		$args['body']['plugins'] = json_encode( $plugins );

		return $args;
	}

} // Publisher
