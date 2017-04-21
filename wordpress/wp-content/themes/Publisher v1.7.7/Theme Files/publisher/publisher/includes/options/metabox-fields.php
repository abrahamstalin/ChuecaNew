<?php


/**
 * => Post Options
 */
$fields['_post_options']            = array(
	'name' => __( 'Post', 'publisher' ),
	'id'   => '_post_options',
	'type' => 'tab',
	'icon' => 'bsai-page-text',
);
$fields['bs_featured_image_credit'] = array(
	'name'       => __( 'Featured image credit', 'publisher' ),
	'id'         => 'bs_featured_image_credit',
	'desc'       => __( 'Simple note about featured image credit that will be shown in bottom of featured image.', 'publisher' ),
	'input-desc' => __( 'You can use HTML.', 'publisher' ),
	'type'       => 'editor',
	'lang'       => 'html',
	'min-lines'  => 4,
	'max-lines'  => 6,
);
$fields['_featured_embed_code']     = array(
	'name' => __( 'Featured Video/Audio Code', 'publisher' ),
	'id'   => '_featured_embed_code',
	'desc' => __( 'Paste YouTube, Vimeo or self hosted video URL then player automatically will be generated.', 'publisher' ),
	'type' => 'textarea',
);

$fields['page_layout'] = array(
	'name'             => __( 'Page Layout', 'publisher' ),
	'id'               => 'page_layout',
	'type'             => 'image_radio',
	'section_class'    => 'style-floated-left bordered affect-editor-on-change',
	'desc'             => __( 'Override page layout for this post.', 'publisher' ),
	'deferred-options' => array(
		'callback' => 'publisher_layout_option_list',
		'args'     => array(
			TRUE,
		),
	),
);

// Page template
if ( ! is_admin() || bf_get_admin_current_post_type() !== 'page' ) {
	$fields['post_template']        = array(
		'name'             => __( 'Post template', 'publisher' ),
		'id'               => 'post_template',
		'type'             => 'image_radio',
		'section_class'    => 'style-floated-left bordered',
		'desc'             => __( 'Select default template for post.', 'publisher' ),
		'deferred-options' => array(
			'callback' => 'publisher_get_single_template_option',
			'args'     => array(
				TRUE,
			),
		),
	);
	$fields['_bs_primary_category'] = array(
		'name'       => __( 'Primary Category', 'publisher' ),
		'desc'       => __( 'Select the main category for post to shown in blocks at first.', 'publisher' ),
		'input-desc' => __( 'When you have multiple categories for a post, auto detection chooses one in alphabetical order. These used for show an label above image in listings and breadcrumb.', 'publisher' ),
		'id'         => '_bs_primary_category',
		'type'       => 'select',
		'options'    => array(
			'auto-detect' => __( '-- Auto Detect --', 'publisher' ),
			array(
				'label'   => __( 'Categories', 'publisher' ),
				'options' => array( 'category_walker' => 'category_walker' ),
			)
		)
	);
	$fields['_bs_source_field']     = array(
		'name'            => __( 'Source', 'publisher' ),
		'id'              => 'publisher_cb_blocks_source_field',
		'type'            => 'custom',
		'container_class' => 'source-field',
		'input_callback'  => array(
			'callback' => 'publisher_cb_blocks_source_field',
			'args'     => array(
				array(
					'field' => 'source',
				)
			),
		),
		'desc'            => __( 'This links will appear at the end of the article in the "Source" section.', 'publisher' ),
	);
	$fields['_bs_via_field']        = array(
		'name'            => __( 'Via', 'publisher' ),
		'id'              => 'publisher_cb_blocks_source_field',
		'type'            => 'custom',
		'container_class' => 'source-field',
		'input_callback'  => array(
			'callback' => 'publisher_cb_blocks_source_field',
			'args'     => array(
				array(
					'field' => 'via',
				)
			),
		),
		'desc'            => __( 'This links will appear at the end of the article in the "Via" section.', 'publisher' ),
	);
	$fields['post_related']         = array(
		'name'    => __( 'Related Posts', 'publisher' ),
		'id'      => 'post_related',
		'desc'    => __( 'Enabling this will be adds related posts in in bottom of post content.', 'publisher' ),
		'type'    => 'select',
		'options' => array(
			'default'               => __( '-- Default [ From Theme Panel ] --', 'publisher' ),
			'show'                  => __( 'Show - Simple', 'publisher' ),
			'infinity-related-post' => __( 'Show - Infinity Ajax Load', 'publisher' ),
			'hide'                  => __( 'Hide', 'publisher' ),
		),
	);
}

$fields['post_comments'] = array(
	'name'    => __( 'Comments', 'publisher' ),
	'id'      => 'post_comments',
	'desc'    => __( 'Select to show or hide comments in bottom of post content.', 'publisher' ),
	'type'    => 'select',
	'options' => array(
		'default'        => __( '-- Default [ From Theme Panel ] --', 'publisher' ),
		'show-simple'    => __( 'Show, Normal Comments', 'publisher' ),
		'show-ajaxified' => __( 'Ajax - Show Comments Button', 'publisher' ),
		'hide'           => __( 'Hide', 'publisher' ),
	),
);

$fields['post_breadcrumb'] = array(
	'name'    => __( 'Breadcrumb', 'publisher' ),
	'id'      => 'post_breadcrumb',
	'desc'    => __( 'Select to show or hide breadcrumb..', 'publisher' ),
	'type'    => 'select',
	'options' => array(
		'default' => __( '-- Default [ From Theme Panel ] --', 'publisher' ),
		'show'    => __( 'Show', 'publisher' ),
		'hide'    => __( 'Hide', 'publisher' ),
	),
);

// page fields
if ( ! is_admin() || bf_get_admin_current_post_type() !== 'post' ) {

	$fields['_hide_title']                 = array(
		'name'      => __( 'Hide Page Title?', 'publisher' ),
		'id'        => '_hide_title',
		'type'      => 'switch',
		'on-label'  => __( 'Yes', 'publisher' ),
		'off-label' => __( 'No', 'publisher' ),
		'desc'      => __( 'Enable this for hiding page title', 'publisher' ),
	);
	$fields['_page_simple_in_pagebuilder'] = array(
		'name'    => __( 'Hide Page Title and Footer When Visual Composer Used', 'publisher' ),
		'id'      => '_page_simple_in_pagebuilder',
		'desc'    => __( 'By default theme removes page title and footer when you have used page builder in content of that but you can change it with this option.', 'publisher' ),
		'type'    => 'select',
		'options' => array(
			'default' => __( '-- Default [ From Theme Panel ] --', 'publisher' ),
			'hide'    => __( 'Hide', 'publisher' ),
			'show'    => __( 'Show, Title and Footer', 'publisher' ),
		),
	);
}

if ( ! is_admin() || bf_get_admin_current_post_type() !== 'post' || bf_is_doing_ajax() ) {

	/**
	 * => Header Options
	 */
	$fields['header_options'] = array(
		'name'     => __( 'Header', 'publisher' ),
		'id'       => 'header_options',
		'type'     => 'tab',
		'icon'     => 'bsai-header',
		'ajax-tab' => TRUE
	);
	$fields[]                 = array(
		'name'           => __( 'Header', 'publisher' ),
		'type'           => 'group',
		'state'          => 'open',
		'ajax-tab-field' => 'header_options'
	);
	$fields['header_style']   = array(
		'name'             => __( 'Header Style', 'publisher' ),
		'id'               => 'header_style',
		'desc'             => __( 'Override header style for this page.', 'publisher' ),
		'type'             => 'image_radio',
		'section_class'    => 'style-floated-left bordered',
		'deferred-options' => array(
			'callback' => 'publisher_header_style_option_list',
			'args'     => array(
				TRUE,
			),
		),
		'ajax-tab-field'   => 'header_options'
	);
	$fields['header_layout']  = array(
		'name'           => __( 'Header Boxed', 'publisher' ),
		'id'             => 'header_layout',
		'desc'           => __( 'Select header layout.', 'publisher' ),
		'type'           => 'select',
		'options'        => array(
			'default'    => __( '-- Default --', 'publisher' ),
			'boxed'      => __( 'Boxed header', 'publisher' ),
			'full-width' => __( 'Full width header (Boxed Content)', 'publisher' ),
			'stretched'  => __( 'Full width header (Stretched Content)', 'publisher' ),
		),
		'ajax-tab-field' => 'header_options'
	);
	$fields['main_nav_menu']  = array(
		'name'             => __( 'Main Navigation Menu', 'publisher' ),
		'id'               => 'main_nav_menu',
		'desc'             => __( 'Replace & change main menu for this page.', 'publisher' ),
		'type'             => 'select',
		'deferred-options' => array(
			'callback' => 'bf_get_menus_option',
			'args'     => array(
				TRUE,
				__( '-- Default Main Navigation --', 'publisher' )
			),
		),
		'ajax-tab-field'   => 'header_options'
	);


	/**
	 * -> Logo
	 */
	$fields[]                    = array(
		'name'           => __( 'Page Custom Logo', 'publisher' ),
		'type'           => 'group',
		'state'          => 'open',
		'ajax-tab-field' => 'header_options'
	);
	$fields['logo_image']        = array(
		'name'           => __( 'Logo Image', 'publisher' ),
		'id'             => 'logo_image',
		'desc'           => __( 'You can override default site logo for this page.', 'publisher' ),
		'type'           => 'media_image',
		'media_title'    => __( 'Select or Upload Logo', 'publisher' ),
		'media_button'   => __( 'Select Image', 'publisher' ),
		'upload_label'   => __( 'Upload Logo', 'publisher' ),
		'remove_label'   => __( 'Remove Logo', 'publisher' ),
		'ajax-tab-field' => 'header_options'
	);
	$fields['logo_image_retina'] = array(
		'name'           => __( 'Logo Image Retina (2x)', 'publisher' ),
		'id'             => 'logo_image_retina',
		'desc'           => __( 'You can override default site logo for this page. It requires WP Retina 2x plugin.', 'publisher' ),
		'type'           => 'media_image',
		'media_title'    => __( 'Select or Upload Retina Logo', 'publisher' ),
		'media_button'   => __( 'Select Retina Image', 'publisher' ),
		'upload_label'   => __( 'Upload Retina Logo', 'publisher' ),
		'remove_label'   => __( 'Remove Retina Logo', 'publisher' ),
		'ajax-tab-field' => 'header_options'
	);
	$fields[]                    = array(
		'name'           => __( 'Header Background Style', 'publisher' ),
		'type'           => 'group',
		'state'          => 'close',
		'ajax-tab-field' => 'header_options'
	);
	$fields['header_bg_color']   = array(
		'name'           => __( 'Header Background Color', 'publisher' ),
		'id'             => 'header_bg_color',
		'type'           => 'color',
		'desc'           => __( 'You can change header background color with this option.', 'publisher' ),
		'ajax-tab-field' => 'header_options',
	);
	$fields['header_bg_image']   = array(
		'name'           => __( 'Header Background Image', 'publisher' ),
		'id'             => 'header_bg_image',
		'type'           => 'background_image',
		'upload_label'   => __( 'Upload Image', 'publisher' ),
		'desc'           => __( 'Use light patterns in non-boxed layout. For patterns, use a repeating background. Use photo to fully cover the background with an image. Note that it will override the background color option.', 'publisher' ),
		'ajax-tab-field' => 'header_options',
	);

	$fields[]                        = array(
		'name'           => __( 'Header Padding', 'publisher' ),
		'type'           => 'group',
		'state'          => 'close',
		'ajax-tab-field' => 'header_options'
	);
	$fields['header-padding-help']   = array(
		'name'           => __( 'Warning', 'publisher' ),
		'id'             => 'header-padding-help',
		'type'           => 'info',
		'std'            => __( '<p>Please note following settings <strong>not works</strong> for <strong>Header 5, 6 and 8</strong></p>', 'publisher' ),
		'state'          => 'open',
		'info-type'      => 'warning',
		'section_class'  => 'widefat',
		'ajax-tab-field' => 'header_options',
	);
	$fields['header_top_padding']    = array(
		'name'           => __( 'Header Top Padding', 'publisher' ),
		'id'             => 'header_top_padding',
		'suffix'         => __( 'Pixel', 'publisher' ),
		'desc'           => __( 'In pixels without px, ex: 20. <br>Leave empty for default value.', 'publisher' ),
		'type'           => 'text',
		'ajax-tab-field' => 'header_options'
	);
	$fields['header_bottom_padding'] = array(
		'name'           => __( 'Header Bottom Padding', 'publisher' ),
		'id'             => 'header_bottom_padding',
		'suffix'         => __( 'Pixel', 'publisher' ),
		'desc'           => __( 'In pixels without px, ex: 20. <br>Leave empty for default value. Values lower than 60px will break the style.', 'publisher' ),
		'type'           => 'text',
		'ajax-tab-field' => 'header_options'
	);


	/**
	 * => Footer Options
	 */
	$fields['footer_options'] = array(
		'name'     => __( 'Footer', 'publisher' ),
		'id'       => 'footer_options',
		'type'     => 'tab',
		'icon'     => 'bsai-footer',
		'ajax-tab' => TRUE
	);
	$fields['footer_style']   = array(
		'name'             => __( 'Footer Style', 'publisher' ),
		'id'               => 'footer_style',
		'desc'             => __( 'Override footer style for this page.', 'publisher' ),
		'type'             => 'image_radio',
		'section_class'    => 'style-floated-left bordered',
		'deferred-options' => array(
			'callback' => 'publisher_footer_style_option_list',
			'args'     => array(
				TRUE,
			),
		),
		'ajax-tab-field'   => 'footer_options'
	);
}


/**
 * -> Background
 */
$fields['_background_tab'] = array(
	'name'     => __( 'Background', 'publisher' ),
	'id'       => '_background_tab',
	'type'     => 'tab',
	'icon'     => 'bsai-image',
	'ajax-tab' => TRUE
);
$fields['bg_color']        = array(
	'name'           => __( 'Body Background Color', 'publisher' ),
	'id'             => 'bg_color',
	'type'           => 'color',
	'desc'           => __( 'Setting a body background image below will override it.', 'publisher' ),
	'ajax-tab-field' => '_background_tab'
);
$fields['bg_image']        = array(
	'name'           => __( 'Body Background Image', 'publisher' ),
	'id'             => 'bg_image',
	'type'           => 'background_image',
	'upload_label'   => __( 'Upload Image', 'publisher' ),
	'desc'           => __( 'Use light patterns in non-boxed layout. For patterns, use a repeating background. Use photo to fully cover the background with an image. Note that it will override the background color option.', 'publisher' ),
	'ajax-tab-field' => '_background_tab'
);


/**
 *
 * Adds custom CSS options for metabox
 *
 */
bf_inject_panel_custom_css_fields( $fields, array(
	'loop-css-class' => TRUE
) );
