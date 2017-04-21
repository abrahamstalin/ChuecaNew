<?php


if ( ! function_exists( 'publisher_cb_blocks_setting_field' ) ) {
	/**
	 * Handy function to getting settings field code
	 */
	function publisher_cb_blocks_setting_field( $args = array() ) {

		$args = bf_merge_args( $args, array(
			'field' => '',
		) );

		$fields      = array();
		$group       = array();
		$group_state = 'close';
		$type        = '';
		$value       = '';

		$meta_field_array = array(
			'author'  => array(
				'id'   => 'author',
				'name' => __( 'Author', 'publisher' ),
				'type' => 'checkbox',
			),
			'date'    => array(
				'id'   => 'date',
				'name' => __( 'Date', 'publisher' ),
				'type' => 'checkbox',
			),
			'comment' => array(
				'id'   => 'comment',
				'name' => __( 'Comments', 'publisher' ),
				'type' => 'checkbox',
			),
			'review'  => array(
				'id'   => 'review',
				'name' => __( 'Review', 'publisher' ),
				'type' => 'checkbox',
			),
		);


		$meta_field_array_views          = $meta_field_array;
		$meta_field_array_views['views'] = array(
			'id'   => 'views',
			'name' => __( 'Views', 'publisher' ),
			'type' => 'checkbox',
		);

		$meta_field_array_views_avatar                  = $meta_field_array_views;
		$meta_field_array_views_avatar['author_avatar'] = array(
			'id'   => 'author_avatar',
			'name' => __( 'Author Avatar', 'publisher' ),
			'type' => 'checkbox',
		);


		switch ( $args['field'] ) {

			case '':
				return '';
				break;


			/**
			 *
			 * Blog listing 1
			 *
			 */
			case 'listing-blog-1':

				$type  = 'option-panel';
				$value = publisher_get_option( $args['field'] );

				$group = array(
					'name'  => __( 'Blog Listing 1', 'publisher' ),
					'state' => $group_state,
					'class' => '',
				);

				$fields = array(
					array(
						'type' => 'img',
						'src'  => PUBLISHER_THEME_URI . 'images/shortcodes/bs-blog-listing-1-big.png',
					),
					array(
						'id'    => 'title-limit',
						'name'  => __( 'Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'    => 'excerpt-limit',
						'name'  => __( 'Excerpt Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'   => 'format-icon',
						'name' => __( 'Post Format Icon', 'publisher' ),
						'type' => 'checkbox',
					),
					array(
						'id'    => 'term-badge',
						'name'  => __( 'Category Badge', 'publisher' ),
						'type'  => 'checkbox',
						'class' => 'aligned',
					),
					array(
						'id'         => 'term-badge-count',
						'name'       => __( 'Count', 'publisher' ),
						'type'       => 'text-count',
						'class'      => 'aligned',
						'related-to' => 'term-badge',
					),
					'meta' => array(
						'id'     => 'meta',
						'name'   => __( 'Post Meta', 'publisher' ),
						'type'   => 'post-meta',
						'fields' => $meta_field_array,
					),
				);
				break;


			/**
			 *
			 * Blog listing 2
			 *
			 */
			case 'listing-blog-2':

				$type  = 'option-panel';
				$value = publisher_get_option( $args['field'] );

				$group = array(
					'name'  => __( 'Blog Listing 2', 'publisher' ),
					'state' => $group_state,
					'class' => '',
				);

				$fields = array(
					array(
						'type' => 'img',
						'src'  => PUBLISHER_THEME_URI . 'images/shortcodes/bs-blog-listing-2-big.png',
					),
					array(
						'id'    => 'title-limit',
						'name'  => __( 'Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'    => 'excerpt-limit',
						'name'  => __( 'Excerpt Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'   => 'format-icon',
						'name' => __( 'Post Format Icon', 'publisher' ),
						'type' => 'checkbox',
					),
					array(
						'id'    => 'term-badge',
						'name'  => __( 'Category Badge', 'publisher' ),
						'type'  => 'checkbox',
						'class' => 'aligned',
					),
					array(
						'id'         => 'term-badge-count',
						'name'       => __( 'Count', 'publisher' ),
						'type'       => 'text-count',
						'class'      => 'aligned',
						'related-to' => 'term-badge',
					),
					'meta' => array(
						'id'     => 'meta',
						'name'   => __( 'Post Meta', 'publisher' ),
						'type'   => 'post-meta',
						'fields' => $meta_field_array,
					),
				);
				break;


			/**
			 *
			 * Blog listing 3
			 *
			 */
			case 'listing-blog-3':

				$type  = 'option-panel';
				$value = publisher_get_option( $args['field'] );

				$group = array(
					'name'  => __( 'Blog Listing 3', 'publisher' ),
					'state' => $group_state,
					'class' => '',
				);

				$fields = array(
					array(
						'type' => 'img',
						'src'  => PUBLISHER_THEME_URI . 'images/shortcodes/bs-blog-listing-3-big.png',
					),
					array(
						'id'    => 'title-limit',
						'name'  => __( 'Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'    => 'excerpt-limit',
						'name'  => __( 'Excerpt Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'   => 'format-icon',
						'name' => __( 'Post Format Icon', 'publisher' ),
						'type' => 'checkbox',
					),
					array(
						'id'    => 'term-badge',
						'name'  => __( 'Category Badge', 'publisher' ),
						'type'  => 'checkbox',
						'class' => 'aligned',
					),
					array(
						'id'         => 'term-badge-count',
						'name'       => __( 'Count', 'publisher' ),
						'type'       => 'text-count',
						'class'      => 'aligned',
						'related-to' => 'term-badge',
					),
					'meta' => array(
						'id'     => 'meta',
						'name'   => __( 'Post Meta', 'publisher' ),
						'type'   => 'post-meta',
						'fields' => $meta_field_array,
					),
				);
				break;


			/**
			 *
			 * Blog listing 4
			 *
			 */
			case 'listing-blog-4':

				$type  = 'option-panel';
				$value = publisher_get_option( $args['field'] );

				$group = array(
					'name'  => __( 'Blog Listing 4', 'publisher' ),
					'state' => $group_state,
					'class' => '',
				);

				$fields = array(
					array(
						'type' => 'img',
						'src'  => PUBLISHER_THEME_URI . 'images/shortcodes/bs-blog-listing-4-big.png',
					),
					array(
						'id'    => 'title-limit',
						'name'  => __( 'Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'    => 'excerpt-limit',
						'name'  => __( 'Excerpt Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'   => 'format-icon',
						'name' => __( 'Post Format Icon', 'publisher' ),
						'type' => 'checkbox',
					),
					array(
						'id'    => 'term-badge',
						'name'  => __( 'Category Badge', 'publisher' ),
						'type'  => 'checkbox',
						'class' => 'aligned',
					),
					array(
						'id'         => 'term-badge-count',
						'name'       => __( 'Count', 'publisher' ),
						'type'       => 'text-count',
						'class'      => 'aligned',
						'related-to' => 'term-badge',
					),
					'meta' => array(
						'id'     => 'meta',
						'name'   => __( 'Post Meta', 'publisher' ),
						'type'   => 'post-meta',
						'fields' => $meta_field_array,
					),
				);
				break;


			/**
			 *
			 * Blog listing 5
			 *
			 */
			case 'listing-blog-5':

				$type  = 'option-panel';
				$value = publisher_get_option( $args['field'] );

				$group = array(
					'name'  => __( 'Blog Listing 5', 'publisher' ),
					'state' => $group_state,
					'class' => '',
				);

				$fields = array(
					array(
						'type' => 'img',
						'src'  => PUBLISHER_THEME_URI . 'images/shortcodes/bs-blog-listing-5-big.png',
					),
					array(
						'id'    => 'title-limit',
						'name'  => __( 'Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'    => 'excerpt-limit',
						'name'  => __( 'Excerpt Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'   => 'format-icon',
						'name' => __( 'Post Format Icon', 'publisher' ),
						'type' => 'checkbox',
					),
					array(
						'id'    => 'term-badge',
						'name'  => __( 'Category Badge', 'publisher' ),
						'type'  => 'checkbox',
						'class' => 'aligned',
					),
					array(
						'id'         => 'term-badge-count',
						'name'       => __( 'Count', 'publisher' ),
						'type'       => 'text-count',
						'class'      => 'aligned',
						'related-to' => 'term-badge',
					),
					'meta' => array(
						'id'     => 'meta',
						'name'   => __( 'Post Meta', 'publisher' ),
						'type'   => 'post-meta',
						'fields' => $meta_field_array,
					),
					array(
						'id'   => 'read-more',
						'name' => __( 'Read More Button', 'publisher' ),
						'type' => 'checkbox',
					),
				);
				break;


			/**
			 *
			 * Classic listing 1
			 *
			 */
			case 'listing-classic-1':

				$type  = 'option-panel';
				$value = publisher_get_option( $args['field'] );

				$group = array(
					'name'  => __( 'Classic Listing 1', 'publisher' ),
					'state' => $group_state,
					'class' => '',
				);

				$fields = array(
					array(
						'type' => 'img',
						'src'  => PUBLISHER_THEME_URI . 'images/shortcodes/bs-classic-listing-1-big.png',
					),
					array(
						'id'    => 'title-limit',
						'name'  => __( 'Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
					),
					array(
						'id'    => 'excerpt-limit',
						'name'  => __( 'Excerpt Length - 1 Column Listing', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
					),
					array(
						'id'    => 'excerpt-limit-2col',
						'name'  => __( 'Excerpt Length - 2 Column Listing', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
					),
					array(
						'id'    => 'excerpt-limit-3col',
						'name'  => __( 'Excerpt Length - 3 Column Listing', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
					),
					array(
						'id'   => 'format-icon',
						'name' => __( 'Post Format Icon', 'publisher' ),
						'type' => 'checkbox',
					),
					array(
						'id'    => 'term-badge',
						'name'  => __( 'Category Badge', 'publisher' ),
						'type'  => 'checkbox',
						'class' => 'aligned',
					),
					array(
						'id'         => 'term-badge-count',
						'name'       => __( 'Count', 'publisher' ),
						'type'       => 'text-count',
						'class'      => 'aligned',
						'related-to' => 'term-badge',
					),
					'meta' => array(
						'id'     => 'meta',
						'name'   => __( 'Post Meta', 'publisher' ),
						'type'   => 'post-meta',
						'fields' => $meta_field_array,
					),
					array(
						'id'   => 'read-more',
						'name' => __( 'Read More Button', 'publisher' ),
						'type' => 'checkbox',
					),
				);
				break;


			/**
			 *
			 * Classic listing 2
			 *
			 */
			case 'listing-classic-2':

				$type  = 'option-panel';
				$value = publisher_get_option( $args['field'] );

				$group = array(
					'name'  => __( 'Classic Listing 2', 'publisher' ),
					'state' => $group_state,
					'class' => '',
				);

				$fields = array(
					array(
						'type' => 'img',
						'src'  => PUBLISHER_THEME_URI . 'images/shortcodes/bs-classic-listing-2-big.png',
					),
					array(
						'id'    => 'title-limit',
						'name'  => __( 'Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
					),
					array(
						'id'    => 'excerpt-limit',
						'name'  => __( 'Excerpt Length - 1 Column Listing', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
					),
					array(
						'id'    => 'excerpt-limit-2col',
						'name'  => __( 'Excerpt Length - 2 Column Listing', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
					),
					array(
						'id'    => 'excerpt-limit-3col',
						'name'  => __( 'Excerpt Length - 3 Column Listing', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
					),
					array(
						'id'   => 'format-icon',
						'name' => __( 'Post Format Icon', 'publisher' ),
						'type' => 'checkbox',
					),
					array(
						'id'    => 'term-badge',
						'name'  => __( 'Category Badge', 'publisher' ),
						'type'  => 'checkbox',
						'class' => 'aligned',
					),
					array(
						'id'         => 'term-badge-count',
						'name'       => __( 'Count', 'publisher' ),
						'type'       => 'text-count',
						'class'      => 'aligned',
						'related-to' => 'term-badge',
					),
					'meta' => array(
						'id'     => 'meta',
						'name'   => __( 'Post Meta', 'publisher' ),
						'type'   => 'post-meta',
						'fields' => $meta_field_array,
					),
					array(
						'id'   => 'read-more',
						'name' => __( 'Read More Button', 'publisher' ),
						'type' => 'checkbox',
					),
				);
				break;


			/**
			 *
			 * Classic listing 3
			 *
			 */
			case 'listing-classic-3':

				$type  = 'option-panel';
				$value = publisher_get_option( $args['field'] );

				$group = array(
					'name'  => __( 'Classic Listing 3', 'publisher' ),
					'state' => $group_state,
					'class' => '',
				);

				$fields = array(
					array(
						'type' => 'img',
						'src'  => PUBLISHER_THEME_URI . 'images/shortcodes/bs-classic-listing-3-big.png',
					),
					array(
						'id'    => 'title-limit',
						'name'  => __( 'Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
					),
					array(
						'id'    => 'excerpt-limit',
						'name'  => __( 'Excerpt Length - 1 Column Listing', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
					),
					array(
						'id'    => 'excerpt-limit-2col',
						'name'  => __( 'Excerpt Length - 2 Column Listing', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
					),
					array(
						'id'    => 'excerpt-limit-3col',
						'name'  => __( 'Excerpt Length - 3 Column Listing', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
					),
					array(
						'id'   => 'format-icon',
						'name' => __( 'Post Format Icon', 'publisher' ),
						'type' => 'checkbox',
					),
					array(
						'id'    => 'term-badge',
						'name'  => __( 'Category Badge', 'publisher' ),
						'type'  => 'checkbox',
						'class' => 'aligned',
					),
					array(
						'id'         => 'term-badge-count',
						'name'       => __( 'Count', 'publisher' ),
						'type'       => 'text-count',
						'class'      => 'aligned',
						'related-to' => 'term-badge',
					),
					'meta' => array(
						'id'     => 'meta',
						'name'   => __( 'Post Meta', 'publisher' ),
						'type'   => 'post-meta',
						'fields' => $meta_field_array,
					),
					array(
						'id'   => 'read-more',
						'name' => __( 'Read More Button', 'publisher' ),
						'type' => 'checkbox',
					),
				);
				break;


			/**
			 *
			 * Grid Listing 1
			 *
			 */
			case 'listing-grid-1':

				$type  = 'option-panel';
				$value = publisher_get_option( $args['field'] );

				$group = array(
					'name'  => __( 'Grid Listing 1', 'publisher' ),
					'state' => $group_state,
					'class' => '',
				);

				$fields = array(
					array(
						'type' => 'img',
						'src'  => PUBLISHER_THEME_URI . 'images/shortcodes/bs-grid-listing-1-big.png',
					),
					array(
						'id'    => 'title-limit',
						'name'  => __( 'Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'    => 'excerpt-limit',
						'name'  => __( 'Excerpt Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'   => 'format-icon',
						'name' => __( 'Post Format Icon', 'publisher' ),
						'type' => 'checkbox',
					),
					array(
						'id'    => 'term-badge',
						'name'  => __( 'Category Badge', 'publisher' ),
						'type'  => 'checkbox',
						'class' => 'aligned',
					),
					array(
						'id'         => 'term-badge-count',
						'name'       => __( 'Count', 'publisher' ),
						'type'       => 'text-count',
						'class'      => 'aligned',
						'related-to' => 'term-badge',
					),
					'meta' => array(
						'id'     => 'meta',
						'name'   => __( 'Post Meta', 'publisher' ),
						'type'   => 'post-meta',
						'fields' => $meta_field_array,
					),
				);
				break;


			/**
			 *
			 * Grid Listing 2
			 *
			 */
			case 'listing-grid-2':

				$type  = 'option-panel';
				$value = publisher_get_option( $args['field'] );

				$group = array(
					'name'  => __( 'Grid Listing 2', 'publisher' ),
					'state' => $group_state,
					'class' => '',
				);

				$fields = array(
					array(
						'type' => 'img',
						'src'  => PUBLISHER_THEME_URI . 'images/shortcodes/bs-grid-listing-2-big.png',
					),
					array(
						'id'    => 'title-limit',
						'name'  => __( 'Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'    => 'excerpt-limit',
						'name'  => __( 'Excerpt Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'   => 'format-icon',
						'name' => __( 'Post Format Icon', 'publisher' ),
						'type' => 'checkbox',
					),
					array(
						'id'    => 'term-badge',
						'name'  => __( 'Category Badge', 'publisher' ),
						'type'  => 'checkbox',
						'class' => 'aligned',
					),
					array(
						'id'         => 'term-badge-count',
						'name'       => __( 'Count', 'publisher' ),
						'type'       => 'text-count',
						'class'      => 'aligned',
						'related-to' => 'term-badge',
					),
					'meta' => array(
						'id'     => 'meta',
						'name'   => __( 'Post Meta', 'publisher' ),
						'type'   => 'post-meta',
						'fields' => $meta_field_array,
					),
				);
				break;


			/**
			 *
			 * Thumbnail listing 1
			 *
			 */
			case 'listing-thumbnail-1':

				$type  = 'option-panel';
				$value = publisher_get_option( $args['field'] );

				$group = array(
					'name'  => __( 'Thumbnail Listing 1', 'publisher' ),
					'state' => $group_state,
					'class' => '',
				);

				$fields = array(
					array(
						'type' => 'img',
						'src'  => PUBLISHER_THEME_URI . 'images/shortcodes/bs-thumbnail-listing-1-big.png',
					),
					array(
						'id'    => 'title-limit',
						'name'  => __( 'Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
					),
					'meta' => array(
						'id'     => 'meta',
						'name'   => __( 'Post Meta', 'publisher' ),
						'type'   => 'post-meta',
						'fields' => $meta_field_array,
					),
				);
				break;


			/**
			 *
			 * Thumbnail listing 2
			 *
			 */
			case 'listing-thumbnail-2':

				$type  = 'option-panel';
				$value = publisher_get_option( $args['field'] );

				$group = array(
					'name'  => __( 'Thumbnail Listing 2', 'publisher' ),
					'state' => $group_state,
					'class' => '',
				);

				$fields = array(
					array(
						'type' => 'img',
						'src'  => PUBLISHER_THEME_URI . 'images/shortcodes/bs-thumbnail-listing-2-big.png',
					),
					array(
						'id'    => 'title-limit',
						'name'  => __( 'Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
					),
					array(
						'id'   => 'format-icon',
						'name' => __( 'Post Format Icon', 'publisher' ),
						'type' => 'checkbox',
					),
					array(
						'id'    => 'term-badge',
						'name'  => __( 'Category Badge', 'publisher' ),
						'type'  => 'checkbox',
						'class' => 'aligned',
					),
					array(
						'id'         => 'term-badge-count',
						'name'       => __( 'Count', 'publisher' ),
						'type'       => 'text-count',
						'class'      => 'aligned',
						'related-to' => 'term-badge',
					),
				);
				break;


			/**
			 *
			 * Thumbnail listing 3
			 *
			 */
			case 'listing-thumbnail-3':

				$type  = 'option-panel';
				$value = publisher_get_option( $args['field'] );

				$group = array(
					'name'  => __( 'Thumbnail Listing 3', 'publisher' ),
					'state' => $group_state,
					'class' => '',
				);

				$fields = array(
					array(
						'type' => 'img',
						'src'  => PUBLISHER_THEME_URI . 'images/shortcodes/bs-thumbnail-listing-3-big.png',
					),
					array(
						'id'    => 'title-limit',
						'name'  => __( 'Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
					),
					'meta' => array(
						'id'     => 'meta',
						'name'   => __( 'Post Meta', 'publisher' ),
						'type'   => 'post-meta',
						'fields' => $meta_field_array,
					),
				);
				break;


			/**
			 *
			 * Modern Grid 1
			 *
			 */
			case 'listing-modern-grid-1':

				$type        = 'option-panel';
				$value       = publisher_get_option( $args['field'] );
				$group_state = 'open';

				$group = array(
					'name'  => __( 'Modern Grid 1', 'publisher' ),
					'state' => $group_state,
					'class' => '',
				);

				$fields = array(
					array(
						'type' => 'img',
						'src'  => PUBLISHER_THEME_URI . 'images/shortcodes/bs-modern-grid-1-big.png',
					),
					array(
						'id'    => 'item-1-title-limit',
						'name'  => __( 'Item 1 - Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
					),
					array(
						'id'    => 'item-2-title-limit',
						'name'  => __( 'Item 2 - Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
					),
					array(
						'id'    => 'item-3-title-limit',
						'name'  => __( 'Item 3 - Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
					),
					array(
						'id'    => 'item-4-title-limit',
						'name'  => __( 'Item 4 - Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
					),
					array(
						'id'   => 'format-icon',
						'name' => __( 'Post Format Icon', 'publisher' ),
						'type' => 'checkbox',
					),
					array(
						'id'    => 'term-badge',
						'name'  => __( 'Category Badge', 'publisher' ),
						'type'  => 'checkbox',
						'class' => 'aligned',
					),
					array(
						'id'         => 'term-badge-count',
						'name'       => __( 'Count', 'publisher' ),
						'type'       => 'text-count',
						'class'      => 'aligned',
						'related-to' => 'term-badge',
					),
					'meta' => array(
						'id'     => 'meta',
						'name'   => __( 'Post Meta', 'publisher' ),
						'type'   => 'post-meta',
						'fields' => $meta_field_array,
					),
				);
				break;


			/**
			 *
			 * Modern Grid 2
			 *
			 */
			case 'listing-modern-grid-2':

				$type  = 'option-panel';
				$value = publisher_get_option( $args['field'] );

				$group = array(
					'name'  => __( 'Modern Grid 2', 'publisher' ),
					'state' => $group_state,
					'class' => '',
				);

				$fields = array(
					array(
						'type' => 'img',
						'src'  => PUBLISHER_THEME_URI . 'images/shortcodes/bs-modern-grid-2-big.png',
					),
					array(
						'id'    => 'item-1-title-limit',
						'name'  => __( 'Item 1 - Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
					),
					array(
						'id'    => 'item-2-title-limit',
						'name'  => __( 'Item 2 - Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
					),
					array(
						'id'    => 'item-3-title-limit',
						'name'  => __( 'Item 3 - Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
					),
					array(
						'id'    => 'item-4-title-limit',
						'name'  => __( 'Item 4 - Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
					),
					array(
						'id'    => 'item-5-title-limit',
						'name'  => __( 'Item 5 - Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
					),
					array(
						'id'   => 'format-icon',
						'name' => __( 'Post Format Icon', 'publisher' ),
						'type' => 'checkbox',
					),
					array(
						'id'    => 'term-badge',
						'name'  => __( 'Category Badge', 'publisher' ),
						'type'  => 'checkbox',
						'class' => 'aligned',
					),
					array(
						'id'         => 'term-badge-count',
						'name'       => __( 'Count', 'publisher' ),
						'type'       => 'text-count',
						'class'      => 'aligned',
						'related-to' => 'term-badge',
					),
					'meta' => array(
						'id'     => 'meta',
						'name'   => __( 'Post Meta', 'publisher' ),
						'type'   => 'post-meta',
						'fields' => $meta_field_array,
					),
				);
				break;


			/**
			 *
			 * Modern Grid 3
			 *
			 */
			case 'listing-modern-grid-3':

				$type  = 'option-panel';
				$value = publisher_get_option( $args['field'] );

				$group = array(
					'name'  => __( 'Modern Grid 3', 'publisher' ),
					'state' => $group_state,
					'class' => '',
				);

				$fields = array(
					array(
						'type' => 'img',
						'src'  => PUBLISHER_THEME_URI . 'images/shortcodes/bs-modern-grid-3-big.png',
					),
					array(
						'id'    => 'title-limit',
						'name'  => __( 'Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
					),
					array(
						'id'   => 'format-icon',
						'name' => __( 'Post Format Icon', 'publisher' ),
						'type' => 'checkbox',
					),
					array(
						'id'    => 'term-badge',
						'name'  => __( 'Category Badge', 'publisher' ),
						'type'  => 'checkbox',
						'class' => 'aligned',
					),
					array(
						'id'         => 'term-badge-count',
						'name'       => __( 'Count', 'publisher' ),
						'type'       => 'text-count',
						'class'      => 'aligned',
						'related-to' => 'term-badge',
					),
					array(
						'id'     => 'meta',
						'name'   => __( 'Post Meta', 'publisher' ),
						'type'   => 'post-meta',
						'fields' => $meta_field_array,
					),
				);
				break;


			/**
			 *
			 * Modern Grid 4
			 *
			 */
			case 'listing-modern-grid-4':

				$type  = 'option-panel';
				$value = publisher_get_option( $args['field'] );

				$group = array(
					'name'  => __( 'Modern Grid 4', 'publisher' ),
					'state' => $group_state,
					'class' => '',
				);

				$fields = array(
					array(
						'type' => 'img',
						'src'  => PUBLISHER_THEME_URI . 'images/shortcodes/bs-modern-grid-4-big.png',
					),
					array(
						'id'    => 'title-limit',
						'name'  => __( 'Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
					),
					array(
						'id'   => 'format-icon',
						'name' => __( 'Post Format Icon', 'publisher' ),
						'type' => 'checkbox',
					),
					array(
						'id'    => 'term-badge',
						'name'  => __( 'Category Badge', 'publisher' ),
						'type'  => 'checkbox',
						'class' => 'aligned',
					),
					array(
						'id'         => 'term-badge-count',
						'name'       => __( 'Count', 'publisher' ),
						'type'       => 'text-count',
						'class'      => 'aligned',
						'related-to' => 'term-badge',
					),
					'meta' => array(
						'id'     => 'meta',
						'name'   => __( 'Post Meta', 'publisher' ),
						'type'   => 'post-meta',
						'fields' => $meta_field_array,
					),
				);
				break;


			/**
			 *
			 * Modern Grid 5
			 *
			 */
			case 'listing-modern-grid-5':

				$type  = 'option-panel';
				$value = publisher_get_option( $args['field'] );

				$group = array(
					'name'  => __( 'Modern Grid 5', 'publisher' ),
					'state' => $group_state,
					'class' => '',
				);

				$fields = array(
					array(
						'type' => 'img',
						'src'  => PUBLISHER_THEME_URI . 'images/shortcodes/bs-modern-grid-5-big.png',
					),
					array(
						'id'    => 'big-title-limit',
						'name'  => __( 'Big Item - Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
					),
					array(
						'id'    => 'small-title-limit',
						'name'  => __( 'Small Items - Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
					),
					array(
						'id'   => 'format-icon',
						'name' => __( 'Post Format Icon', 'publisher' ),
						'type' => 'checkbox',
					),
					array(
						'id'    => 'term-badge',
						'name'  => __( 'Category Badge', 'publisher' ),
						'type'  => 'checkbox',
						'class' => 'aligned',
					),
					array(
						'id'         => 'term-badge-count',
						'name'       => __( 'Count', 'publisher' ),
						'type'       => 'text-count',
						'class'      => 'aligned',
						'related-to' => 'term-badge',
					),
					'meta' => array(
						'id'     => 'meta',
						'name'   => __( 'Post Meta', 'publisher' ),
						'type'   => 'post-meta',
						'fields' => $meta_field_array,
					),
				);
				break;


			/**
			 *
			 * Modern Grid 6
			 *
			 */
			case 'listing-modern-grid-6':

				$type  = 'option-panel';
				$value = publisher_get_option( $args['field'] );

				$group = array(
					'name'  => __( 'Modern Grid 6', 'publisher' ),
					'state' => $group_state,
					'class' => '',
				);

				$fields = array(
					array(
						'type' => 'img',
						'src'  => PUBLISHER_THEME_URI . 'images/shortcodes/bs-modern-grid-6-big.png',
					),
					array(
						'id'    => 'title-limit',
						'name'  => __( 'Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
					),
					array(
						'id'   => 'format-icon',
						'name' => __( 'Post Format Icon', 'publisher' ),
						'type' => 'checkbox',
					),
					array(
						'id'    => 'term-badge',
						'name'  => __( 'Category Badge', 'publisher' ),
						'type'  => 'checkbox',
						'class' => 'aligned',
					),
					array(
						'id'         => 'term-badge-count',
						'name'       => __( 'Count', 'publisher' ),
						'type'       => 'text-count',
						'class'      => 'aligned',
						'related-to' => 'term-badge',
					),
					'meta' => array(
						'id'     => 'meta',
						'name'   => __( 'Post Meta', 'publisher' ),
						'type'   => 'post-meta',
						'fields' => $meta_field_array,
					),
				);
				break;

			/**
			 *
			 * Modern Grid 7
			 *
			 */
			case 'listing-modern-grid-7':

				$type  = 'option-panel';
				$value = publisher_get_option( $args['field'] );

				$group = array(
					'name'  => __( 'Modern Grid 7', 'publisher' ),
					'state' => $group_state,
					'class' => 'extra-indents',
				);

				$fields = array(
					array(
						'type' => 'img',
						'src'  => PUBLISHER_THEME_URI . 'images/shortcodes/bs-modern-grid-7-big.png',
					),
					array(
						'name' => __( 'Big Items', 'publisher' ),
						'type' => 'hr',
					),
					array(
						'id'    => 'big-title-limit',
						'name'  => __( 'Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
					),
					array(
						'id'   => 'big-format-icon',
						'name' => __( 'Post Format Icon', 'publisher' ),
						'type' => 'checkbox',
					),
					array(
						'id'    => 'big-term-badge',
						'name'  => __( 'Category Badge', 'publisher' ),
						'type'  => 'checkbox',
						'class' => 'aligned',
					),
					array(
						'id'         => 'big-term-badge-count',
						'name'       => __( 'Count', 'publisher' ),
						'type'       => 'text-count',
						'class'      => 'aligned',
						'related-to' => 'big-term-badge',
					),
					'big-meta' => array(
						'id'     => 'big-meta',
						'name'   => __( 'Post Meta', 'publisher' ),
						'type'   => 'post-meta',
						'fields' => $meta_field_array,
					),
					array(
						'name' => __( 'Small Items', 'publisher' ),
						'type' => 'hr',
					),
					array(
						'id'    => 'small-title-limit',
						'name'  => __( 'Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'   => 'small-format-icon',
						'name' => __( 'Post Format Icon', 'publisher' ),
						'type' => 'checkbox',
					),
					array(
						'id'    => 'small-term-badge',
						'name'  => __( 'Category Badge', 'publisher' ),
						'type'  => 'checkbox',
						'class' => 'aligned',
					),
					array(
						'id'         => 'small-term-badge-count',
						'name'       => __( 'Count', 'publisher' ),
						'type'       => 'text-count',
						'class'      => 'aligned',
						'related-to' => 'small-term-badge',
					),
					array(
						'id'     => 'small-meta',
						'name'   => __( 'Post Meta', 'publisher' ),
						'type'   => 'post-meta',
						'fields' => $meta_field_array,
					),
				);
				break;


			/**
			 *
			 * Modern Grid 8
			 *
			 */
			case 'listing-modern-grid-8':

				$type        = 'option-panel';
				$value       = publisher_get_option( $args['field'] );
				$group_state = 'close';

				$group = array(
					'name'  => __( 'Modern Grid 8', 'publisher' ),
					'state' => $group_state,
					'class' => '',
				);

				$fields = array(
					array(
						'type' => 'img',
						'src'  => PUBLISHER_THEME_URI . 'images/shortcodes/bs-modern-grid-8-big.png',
					),
					array(
						'id'    => 'item-1-title-limit',
						'name'  => __( 'Item 1 - Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
					),
					array(
						'id'    => 'item-2-title-limit',
						'name'  => __( 'Item 2 - Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
					),
					array(
						'id'    => 'item-3-title-limit',
						'name'  => __( 'Item 3 - Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
					),
					array(
						'id'    => 'item-4-title-limit',
						'name'  => __( 'Item 4 - Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
					),
					array(
						'id'    => 'item-5-title-limit',
						'name'  => __( 'Item 5 - Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
					),
					array(
						'id'    => 'item-6-title-limit',
						'name'  => __( 'Item 6 - Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
					),
					array(
						'id'    => 'item-7-title-limit',
						'name'  => __( 'Item 7 - Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
					),
					array(
						'id'   => 'format-icon',
						'name' => __( 'Post Format Icon', 'publisher' ),
						'type' => 'checkbox',
					),
					array(
						'id'    => 'term-badge',
						'name'  => __( 'Category Badge', 'publisher' ),
						'type'  => 'checkbox',
						'class' => 'aligned',
					),
					array(
						'id'         => 'term-badge-count',
						'name'       => __( 'Count', 'publisher' ),
						'type'       => 'text-count',
						'class'      => 'aligned',
						'related-to' => 'term-badge',
					),
					'meta' => array(
						'id'     => 'meta',
						'name'   => __( 'Post Meta', 'publisher' ),
						'type'   => 'post-meta',
						'fields' => $meta_field_array,
					),
				);
				break;


			/**
			 *
			 * Modern Grid 9
			 *
			 */
			case 'listing-modern-grid-9':

				$type  = 'option-panel';
				$value = publisher_get_option( $args['field'] );

				$group = array(
					'name'  => __( 'Modern Grid 9', 'publisher' ),
					'state' => $group_state,
					'class' => '',
				);

				if ( ! isset( $value['item-6-title-limit'] ) ) {
					$value['item-6-title-limit'] = 70;
				}

				if ( ! isset( $value['item-7-title-limit'] ) ) {
					$value['item-7-title-limit'] = 70;
				}

				$fields = array(
					array(
						'type' => 'img',
						'src'  => PUBLISHER_THEME_URI . 'images/shortcodes/bs-modern-grid-9-big.png',
					),
					array(
						'id'    => 'item-1-title-limit',
						'name'  => __( 'Item 1 - Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
					),
					array(
						'id'    => 'item-2-title-limit',
						'name'  => __( 'Item 2 - Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
					),
					array(
						'id'    => 'item-3-title-limit',
						'name'  => __( 'Item 3 - Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
					),
					array(
						'id'    => 'item-4-title-limit',
						'name'  => __( 'Item 4 - Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
					),
					array(
						'id'    => 'item-5-title-limit',
						'name'  => __( 'Item 5 - Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
					),
					array(
						'id'    => 'item-6-title-limit',
						'name'  => __( 'Item 6 - Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
					),
					array(
						'id'    => 'item-7-title-limit',
						'name'  => __( 'Item 7 - Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
					),
					array(
						'id'   => 'format-icon',
						'name' => __( 'Post Format Icon', 'publisher' ),
						'type' => 'checkbox',
					),
					array(
						'id'    => 'term-badge',
						'name'  => __( 'Category Badge', 'publisher' ),
						'type'  => 'checkbox',
						'class' => 'aligned',
					),
					array(
						'id'         => 'term-badge-count',
						'name'       => __( 'Count', 'publisher' ),
						'type'       => 'text-count',
						'class'      => 'aligned',
						'related-to' => 'term-badge',
					),
					'meta' => array(
						'id'     => 'meta',
						'name'   => __( 'Post Meta', 'publisher' ),
						'type'   => 'post-meta',
						'fields' => $meta_field_array,
					),
				);
				break;

			/**
			 *
			 * Modern Grid 10
			 *
			 */
			case 'listing-modern-grid-10':

				$type  = 'option-panel';
				$value = publisher_get_option( $args['field'] );

				$group = array(
					'name'  => __( 'Modern Grid 10', 'publisher' ),
					'state' => $group_state,
					'class' => '',
				);

				$fields = array(
					array(
						'type' => 'img',
						'src'  => PUBLISHER_THEME_URI . 'images/shortcodes/bs-modern-grid-10-big.png',
					),
					array(
						'name' => __( 'Big Items', 'publisher' ),
						'type' => 'hr',
					),
					array(
						'id'    => 'big-title-limit',
						'name'  => __( 'Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
					),
					array(
						'id'   => 'big-format-icon',
						'name' => __( 'Post Format Icon', 'publisher' ),
						'type' => 'checkbox',
					),
					array(
						'id'    => 'big-term-badge',
						'name'  => __( 'Category Badge', 'publisher' ),
						'type'  => 'checkbox',
						'class' => 'aligned',
					),
					array(
						'id'         => 'big-term-badge-count',
						'name'       => __( 'Count', 'publisher' ),
						'type'       => 'text-count',
						'class'      => 'aligned',
						'related-to' => 'big-term-badge',
					),
					'big-meta' => array(
						'id'     => 'big-meta',
						'name'   => __( 'Post Meta', 'publisher' ),
						'type'   => 'post-meta',
						'fields' => $meta_field_array,
					),
					array(
						'name' => __( 'Small Items', 'publisher' ),
						'type' => 'hr',
					),
					array(
						'id'    => 'small-title-limit',
						'name'  => __( 'Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'   => 'small-format-icon',
						'name' => __( 'Post Format Icon', 'publisher' ),
						'type' => 'checkbox',
					),
					array(
						'id'    => 'small-term-badge',
						'name'  => __( 'Category Badge', 'publisher' ),
						'type'  => 'checkbox',
						'class' => 'aligned',
					),
					array(
						'id'         => 'small-term-badge-count',
						'name'       => __( 'Count', 'publisher' ),
						'type'       => 'text-count',
						'class'      => 'aligned',
						'related-to' => 'small-term-badge',
					),
					array(
						'id'     => 'small-meta',
						'name'   => __( 'Post Meta', 'publisher' ),
						'type'   => 'post-meta',
						'fields' => $meta_field_array,
					),
				);
				break;


			/**
			 *
			 * Tall listing 1
			 *
			 */
			case 'listing-tall-1':

				$type  = 'option-panel';
				$value = publisher_get_option( $args['field'] );

				$group = array(
					'name'  => __( 'Tall Listing 1', 'publisher' ),
					'state' => $group_state,
					'class' => '',
				);

				$fields = array(
					array(
						'type' => 'img',
						'src'  => PUBLISHER_THEME_URI . 'images/shortcodes/bs-tall-1-big.png',
					),
					array(
						'id'    => 'title-limit',
						'name'  => __( 'Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
					),
					array(
						'id'    => 'excerpt-limit',
						'name'  => __( 'Excerpt Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
					),
					array(
						'id'   => 'format-icon',
						'name' => __( 'Post Format Icon', 'publisher' ),
						'type' => 'checkbox',
					),
					array(
						'id'    => 'term-badge',
						'name'  => __( 'Category Badge', 'publisher' ),
						'type'  => 'checkbox',
						'class' => 'aligned',
					),
					array(
						'id'         => 'term-badge-count',
						'name'       => __( 'Count', 'publisher' ),
						'type'       => 'text-count',
						'class'      => 'aligned',
						'related-to' => 'term-badge',
					),
					'meta' => array(
						'id'     => 'meta',
						'name'   => __( 'Post Meta', 'publisher' ),
						'type'   => 'post-meta',
						'fields' => $meta_field_array,
					),
				);
				break;


			/**
			 *
			 * Tall listing 2
			 *
			 */
			case 'listing-tall-2':

				$type  = 'option-panel';
				$value = publisher_get_option( $args['field'] );

				$group = array(
					'name'  => __( 'Tall Listing 2', 'publisher' ),
					'state' => $group_state,
					'class' => '',
				);

				$fields = array(
					array(
						'type' => 'img',
						'src'  => PUBLISHER_THEME_URI . 'images/shortcodes/bs-tall-2-big.png',
					),
					array(
						'id'    => 'title-limit',
						'name'  => __( 'Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
					),
					array(
						'id'    => 'excerpt-limit',
						'name'  => __( 'Excerpt Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
					),
					array(
						'id'   => 'format-icon',
						'name' => __( 'Post Format Icon', 'publisher' ),
						'type' => 'checkbox',
					),
					array(
						'id'    => 'term-badge',
						'name'  => __( 'Category Badge', 'publisher' ),
						'type'  => 'checkbox',
						'class' => 'aligned',
					),
					array(
						'id'         => 'term-badge-count',
						'name'       => __( 'Count', 'publisher' ),
						'type'       => 'text-count',
						'class'      => 'aligned',
						'related-to' => 'term-badge',
					),
					'meta' => array(
						'id'     => 'meta',
						'name'   => __( 'Post Meta', 'publisher' ),
						'type'   => 'post-meta',
						'fields' => $meta_field_array,
					),
				);
				break;


			/**
			 *
			 * Text Listing 1
			 *
			 */
			case 'listing-text-1':

				$type  = 'option-panel';
				$value = publisher_get_option( $args['field'] );

				$group = array(
					'name'  => __( 'Text Listing 1', 'publisher' ),
					'state' => $group_state,
					'class' => '',
				);

				$fields = array(
					array(
						'type' => 'img',
						'src'  => PUBLISHER_THEME_URI . 'images/shortcodes/bs-text-listing-1-big.png',
					),
					array(
						'id'    => 'title-limit',
						'name'  => __( 'Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
					),
					array(
						'id'    => 'term-badge',
						'name'  => __( 'Category Badge', 'publisher' ),
						'type'  => 'checkbox',
						'class' => 'aligned',
					),
					array(
						'id'         => 'term-badge-count',
						'name'       => __( 'Count', 'publisher' ),
						'type'       => 'text-count',
						'class'      => 'aligned',
						'related-to' => 'term-badge',
					),
					'meta' => array(
						'id'     => 'meta',
						'name'   => __( 'Post Meta', 'publisher' ),
						'type'   => 'post-meta',
						'fields' => $meta_field_array,
					),
				);
				break;


			/**
			 *
			 * Text Listing 2
			 *
			 */
			case 'listing-text-2':

				$type  = 'option-panel';
				$value = publisher_get_option( $args['field'] );

				$group = array(
					'name'  => __( 'Text Listing 2', 'publisher' ),
					'state' => $group_state,
					'class' => '',
				);

				$fields = array(
					array(
						'type' => 'img',
						'src'  => PUBLISHER_THEME_URI . 'images/shortcodes/bs-text-listing-2-big.png',
					),
					array(
						'id'    => 'title-limit',
						'name'  => __( 'Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
					),
					'meta' => array(
						'id'     => 'meta',
						'name'   => __( 'Post Meta', 'publisher' ),
						'type'   => 'post-meta',
						'fields' => $meta_field_array,
					),
				);
				break;

			/**
			 *
			 * Text Listing 3
			 *
			 */
			case 'listing-text-3':

				$type  = 'option-panel';
				$value = publisher_get_option( $args['field'] );

				$group = array(
					'name'  => __( 'Text Listing 3', 'publisher' ),
					'state' => $group_state,
					'class' => '',
				);

				$fields = array(
					array(
						'type' => 'img',
						'src'  => PUBLISHER_THEME_URI . 'images/shortcodes/bs-text-listing-3-big.png',
					),
					array(
						'id'    => 'title-limit',
						'name'  => __( 'Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
					),
					array(
						'id'    => 'excerpt-limit',
						'name'  => __( 'Excerpt Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
					),
					'meta' => array(
						'id'     => 'meta',
						'name'   => __( 'Post Meta', 'publisher' ),
						'type'   => 'post-meta',
						'fields' => $meta_field_array,
					),
				);
				break;


			/**
			 *
			 * Text Listing 4
			 *
			 */
			case 'listing-text-4':

				$type  = 'option-panel';
				$value = publisher_get_option( $args['field'] );

				$group = array(
					'name'  => __( 'Text Listing 4', 'publisher' ),
					'state' => $group_state,
					'class' => '',
				);

				$fields = array(
					array(
						'type' => 'img',
						'src'  => PUBLISHER_THEME_URI . 'images/shortcodes/bs-text-listing-4-big.png',
					),
					array(
						'id'    => 'title-limit',
						'name'  => __( 'Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
					),
					array(
						'id'    => 'excerpt-limit',
						'name'  => __( 'Excerpt Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
					),
					array(
						'id'    => 'term-badge',
						'name'  => __( 'Category Badge', 'publisher' ),
						'type'  => 'checkbox',
						'class' => 'aligned',
					),
					array(
						'id'         => 'term-badge-count',
						'name'       => __( 'Count', 'publisher' ),
						'type'       => 'text-count',
						'class'      => 'aligned',
						'related-to' => 'term-badge',
					),
					'meta' => array(
						'id'     => 'meta',
						'name'   => __( 'Post Meta', 'publisher' ),
						'type'   => 'post-meta',
						'fields' => $meta_field_array,
					),
				);
				break;


			case 'listing-mix-1-1':

				$type  = 'option-panel';
				$value = publisher_get_option( $args['field'] );

				$group = array(
					'name'  => __( 'Mix 1', 'publisher' ),
					'state' => $group_state,
					'class' => 'extra-indents',
				);

				$fields = array(
					array(
						'type' => 'img',
						'src'  => PUBLISHER_THEME_URI . 'images/shortcodes/bs-mix-listing-1-1-big.png',
					),
					array(
						'name' => __( 'Big Item ( Left )', 'publisher' ),
						'type' => 'hr',
					),
					array(
						'id'    => 'big-title-limit',
						'name'  => __( 'Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'    => 'big-excerpt-limit',
						'name'  => __( 'Excerpt Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'   => 'big-format-icon',
						'name' => __( 'Post Format Icon', 'publisher' ),
						'type' => 'checkbox',
					),
					array(
						'id'    => 'big-term-badge',
						'name'  => __( 'Category Badge', 'publisher' ),
						'type'  => 'checkbox',
						'class' => 'aligned',
					),
					array(
						'id'         => 'big-term-badge-count',
						'name'       => __( 'Count', 'publisher' ),
						'type'       => 'text-count',
						'class'      => 'aligned',
						'related-to' => 'big-term-badge',
					),
					'big-meta' => array(
						'id'     => 'big-meta',
						'name'   => __( 'Post Meta', 'publisher' ),
						'type'   => 'post-meta',
						'fields' => $meta_field_array,
					),
					array(
						'name' => __( 'Small Items ( Right )', 'publisher' ),
						'type' => 'hr',
					),
					array(
						'id'    => 'small-title-limit',
						'name'  => __( 'Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'     => 'small-meta',
						'name'   => __( 'Post Meta', 'publisher' ),
						'type'   => 'post-meta',
						'fields' => $meta_field_array,
					),
				);
				break;


			case 'listing-mix-1-2':

				$type  = 'option-panel';
				$value = publisher_get_option( $args['field'] );

				$group = array(
					'name'  => __( 'Mix 2', 'publisher' ),
					'state' => $group_state,
					'class' => 'extra-indents',
				);

				$fields = array(
					array(
						'type' => 'img',
						'src'  => PUBLISHER_THEME_URI . 'images/shortcodes/bs-mix-listing-1-2-big.png',
					),
					array(
						'name' => __( 'Big Item ( Left )', 'publisher' ),
						'type' => 'hr',
					),
					array(
						'id'    => 'big-title-limit',
						'name'  => __( 'Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'    => 'big-excerpt-limit',
						'name'  => __( 'Excerpt Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'   => 'big-format-icon',
						'name' => __( 'Post Format Icon', 'publisher' ),
						'type' => 'checkbox',
					),
					array(
						'id'    => 'big-term-badge',
						'name'  => __( 'Category Badge', 'publisher' ),
						'type'  => 'checkbox',
						'class' => 'aligned',
					),
					array(
						'id'         => 'big-term-badge-count',
						'name'       => __( 'Count', 'publisher' ),
						'type'       => 'text-count',
						'class'      => 'aligned',
						'related-to' => 'big-term-badge',
					),
					'big-meta' => array(
						'id'     => 'big-meta',
						'name'   => __( 'Post Meta', 'publisher' ),
						'type'   => 'post-meta',
						'fields' => $meta_field_array,
					),
					array(
						'name' => __( 'Small Items ( Right )', 'publisher' ),
						'type' => 'hr',
					),
					array(
						'id'    => 'small-title-limit',
						'name'  => __( 'Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'   => 'small-format-icon',
						'name' => __( 'Post Format Icon', 'publisher' ),
						'type' => 'checkbox',
					),
					array(
						'id'    => 'small-term-badge',
						'name'  => __( 'Category Badge', 'publisher' ),
						'type'  => 'checkbox',
						'class' => 'aligned',
					),
					array(
						'id'         => 'small-term-badge-count',
						'name'       => __( 'Count', 'publisher' ),
						'type'       => 'text-count',
						'class'      => 'aligned',
						'related-to' => 'small-term-badge',
					),
					array(
						'id'     => 'small-meta',
						'name'   => __( 'Post Meta', 'publisher' ),
						'type'   => 'post-meta',
						'fields' => $meta_field_array,
					),
				);
				break;


			case 'listing-mix-1-3':

				$type  = 'option-panel';
				$value = publisher_get_option( $args['field'] );

				$group = array(
					'name'  => __( 'Mix 3', 'publisher' ),
					'state' => $group_state,
					'class' => 'extra-indents',
				);

				$fields = array(
					array(
						'type' => 'img',
						'src'  => PUBLISHER_THEME_URI . 'images/shortcodes/bs-mix-listing-1-3-big.png',
					),
					array(
						'name' => __( 'Big Item ( Left )', 'publisher' ),
						'type' => 'hr',
					),
					array(
						'id'    => 'big-title-limit',
						'name'  => __( 'Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'    => 'big-excerpt-limit',
						'name'  => __( 'Excerpt Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'   => 'big-format-icon',
						'name' => __( 'Post Format Icon', 'publisher' ),
						'type' => 'checkbox',
					),
					array(
						'id'    => 'big-term-badge',
						'name'  => __( 'Category Badge', 'publisher' ),
						'type'  => 'checkbox',
						'class' => 'aligned',
					),
					array(
						'id'         => 'big-term-badge-count',
						'name'       => __( 'Count', 'publisher' ),
						'type'       => 'text-count',
						'class'      => 'aligned',
						'related-to' => 'big-term-badge',
					),
					'big-meta' => array(
						'id'     => 'big-meta',
						'name'   => __( 'Post Meta', 'publisher' ),
						'type'   => 'post-meta',
						'fields' => $meta_field_array,
					),
					array(
						'name' => __( 'Small Items ( Right )', 'publisher' ),
						'type' => 'hr',
					),
					array(
						'id'    => 'small-title-limit',
						'name'  => __( 'Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'     => 'small-meta',
						'name'   => __( 'Post Meta', 'publisher' ),
						'type'   => 'post-meta',
						'fields' => $meta_field_array,
					),
				);
				break;


			case 'listing-mix-1-4':

				$type  = 'option-panel';
				$value = publisher_get_option( $args['field'] );

				$group = array(
					'name'  => __( 'Mix 4', 'publisher' ),
					'state' => $group_state,
					'class' => 'extra-indents',
				);

				$fields = array(
					array(
						'type' => 'img',
						'src'  => PUBLISHER_THEME_URI . 'images/shortcodes/bs-mix-listing-1-4-big.png',
					),
					array(
						'name' => __( 'Big Item ( Left )', 'publisher' ),
						'type' => 'hr',
					),
					array(
						'id'    => 'big-title-limit',
						'name'  => __( 'Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'    => 'big-excerpt-limit',
						'name'  => __( 'Excerpt Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'   => 'big-format-icon',
						'name' => __( 'Post Format Icon', 'publisher' ),
						'type' => 'checkbox',
					),
					array(
						'id'    => 'big-term-badge',
						'name'  => __( 'Category Badge', 'publisher' ),
						'type'  => 'checkbox',
						'class' => 'aligned',
					),
					array(
						'id'         => 'big-term-badge-count',
						'name'       => __( 'Count', 'publisher' ),
						'type'       => 'text-count',
						'class'      => 'aligned',
						'related-to' => 'big-term-badge',
					),
					'big-meta' => array(
						'id'     => 'big-meta',
						'name'   => __( 'Post Meta', 'publisher' ),
						'type'   => 'post-meta',
						'fields' => $meta_field_array,
					),
					array(
						'name' => __( 'Small Items ( Right )', 'publisher' ),
						'type' => 'hr',
					),
					array(
						'id'    => 'small-title-limit',
						'name'  => __( 'Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'   => 'small-format-icon',
						'name' => __( 'Post Format Icon', 'publisher' ),
						'type' => 'checkbox',
					),
					array(
						'id'    => 'small-term-badge',
						'name'  => __( 'Category Badge', 'publisher' ),
						'type'  => 'checkbox',
						'class' => 'aligned',
					),
					array(
						'id'         => 'small-term-badge-count',
						'name'       => __( 'Count', 'publisher' ),
						'type'       => 'text-count',
						'class'      => 'aligned',
						'related-to' => 'small-term-badge',
					),
				);
				break;


			case 'listing-mix-2-1':

				$type  = 'option-panel';
				$value = publisher_get_option( $args['field'] );

				$group = array(
					'name'  => __( 'Mix 5', 'publisher' ),
					'state' => $group_state,
					'class' => 'extra-indents',
				);

				$fields = array(
					array(
						'type' => 'img',
						'src'  => PUBLISHER_THEME_URI . 'images/shortcodes/bs-mix-listing-2-1-big.png',
					),
					array(
						'name' => __( 'Big Item ( Top )', 'publisher' ),
						'type' => 'hr',
					),
					array(
						'id'    => 'big-title-limit',
						'name'  => __( 'Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'    => 'big-excerpt-limit',
						'name'  => __( 'Excerpt Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'   => 'big-format-icon',
						'name' => __( 'Post Format Icon', 'publisher' ),
						'type' => 'checkbox',
					),
					array(
						'id'    => 'big-term-badge',
						'name'  => __( 'Category Badge', 'publisher' ),
						'type'  => 'checkbox',
						'class' => 'aligned',
					),
					array(
						'id'         => 'big-term-badge-count',
						'name'       => __( 'Count', 'publisher' ),
						'type'       => 'text-count',
						'class'      => 'aligned',
						'related-to' => 'big-term-badge',
					),
					array(
						'id'     => 'big-meta',
						'name'   => __( 'Post Meta', 'publisher' ),
						'type'   => 'post-meta',
						'fields' => $meta_field_array,
					),
					array(
						'name' => __( 'Small Items ( Bottom )', 'publisher' ),
						'type' => 'hr',
					),
					array(
						'id'    => 'small-title-limit',
						'name'  => __( 'Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'     => 'small-meta',
						'name'   => __( 'Post Meta', 'publisher' ),
						'type'   => 'post-meta',
						'fields' => $meta_field_array,
					),
				);
				break;


			case 'listing-mix-2-2':

				$type  = 'option-panel';
				$value = publisher_get_option( $args['field'] );

				$group = array(
					'name'  => __( 'Mix 6', 'publisher' ),
					'state' => $group_state,
					'class' => 'extra-indents',
				);

				$fields = array(
					array(
						'type' => 'img',
						'src'  => PUBLISHER_THEME_URI . 'images/shortcodes/bs-mix-listing-2-2-big.png',
					),
					array(
						'name' => __( 'Big Item ( Top )', 'publisher' ),
						'type' => 'hr',
					),
					array(
						'id'    => 'big-title-limit',
						'name'  => __( 'Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'    => 'big-excerpt-limit',
						'name'  => __( 'Excerpt Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'   => 'big-format-icon',
						'name' => __( 'Post Format Icon', 'publisher' ),
						'type' => 'checkbox',
					),
					array(
						'id'    => 'big-term-badge',
						'name'  => __( 'Category Badge', 'publisher' ),
						'type'  => 'checkbox',
						'class' => 'aligned',
					),
					array(
						'id'         => 'big-term-badge-count',
						'name'       => __( 'Count', 'publisher' ),
						'type'       => 'text-count',
						'class'      => 'aligned',
						'related-to' => 'big-term-badge',
					),
					array(
						'id'     => 'big-meta',
						'name'   => __( 'Post Meta', 'publisher' ),
						'type'   => 'post-meta',
						'fields' => $meta_field_array,
					),
					array(
						'name' => __( 'Small Items ( Bottom )', 'publisher' ),
						'type' => 'hr',
					),
					array(
						'id'    => 'small-title-limit',
						'name'  => __( 'Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'     => 'small-meta',
						'name'   => __( 'Post Meta', 'publisher' ),
						'type'   => 'post-meta',
						'fields' => $meta_field_array,
					),
				);
				break;


			case 'listing-mix-3-1':

				$type  = 'option-panel';
				$value = publisher_get_option( $args['field'] );

				$group = array(
					'name'  => __( 'Mix 7', 'publisher' ),
					'state' => $group_state,
					'class' => 'extra-indents',
				);

				$fields = array(
					array(
						'type' => 'img',
						'src'  => PUBLISHER_THEME_URI . 'images/shortcodes/bs-mix-listing-3-1-big.png',
					),
					array(
						'name' => __( 'Big Item ( Top )', 'publisher' ),
						'type' => 'hr',
					),
					array(
						'id'    => 'big-title-limit',
						'name'  => __( 'Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'    => 'big-excerpt-limit',
						'name'  => __( 'Excerpt Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'   => 'big-format-icon',
						'name' => __( 'Post Format Icon', 'publisher' ),
						'type' => 'checkbox',
					),
					array(
						'id'    => 'big-term-badge',
						'name'  => __( 'Category Badge', 'publisher' ),
						'type'  => 'checkbox',
						'class' => 'aligned',
					),
					array(
						'id'         => 'big-term-badge-count',
						'name'       => __( 'Count', 'publisher' ),
						'type'       => 'text-count',
						'class'      => 'aligned',
						'related-to' => 'big-term-badge',
					),
					array(
						'id'     => 'big-meta',
						'name'   => __( 'Post Meta', 'publisher' ),
						'type'   => 'post-meta',
						'fields' => $meta_field_array,
					),
					array(
						'name' => __( 'Small Items ( Bottom )', 'publisher' ),
						'type' => 'hr',
					),
					array(
						'id'    => 'small-title-limit',
						'name'  => __( 'Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'     => 'small-meta',
						'name'   => __( 'Post Meta', 'publisher' ),
						'type'   => 'post-meta',
						'fields' => $meta_field_array,
					),
				);
				break;


			case 'listing-mix-3-2':

				$type  = 'option-panel';
				$value = publisher_get_option( $args['field'] );

				$group = array(
					'name'  => __( 'Mix 8', 'publisher' ),
					'state' => $group_state,
					'class' => 'extra-indents',
				);

				$fields = array(
					array(
						'type' => 'img',
						'src'  => PUBLISHER_THEME_URI . 'images/shortcodes/bs-mix-listing-3-2-big.png',
					),
					array(
						'name' => __( 'Big Item ( Top )', 'publisher' ),
						'type' => 'hr',
					),
					array(
						'id'    => 'big-title-limit',
						'name'  => __( 'Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'    => 'big-excerpt-limit',
						'name'  => __( 'Excerpt Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'   => 'big-format-icon',
						'name' => __( 'Post Format Icon', 'publisher' ),
						'type' => 'checkbox',
					),
					array(
						'id'    => 'big-term-badge',
						'name'  => __( 'Category Badge', 'publisher' ),
						'type'  => 'checkbox',
						'class' => 'aligned',
					),
					array(
						'id'         => 'big-term-badge-count',
						'name'       => __( 'Count', 'publisher' ),
						'type'       => 'text-count',
						'class'      => 'aligned',
						'related-to' => 'big-term-badge',
					),
					array(
						'id'     => 'big-meta',
						'name'   => __( 'Post Meta', 'publisher' ),
						'type'   => 'post-meta',
						'fields' => $meta_field_array,
					),
					array(
						'name' => __( 'Small Items ( Bottom )', 'publisher' ),
						'type' => 'hr',
					),
					array(
						'id'    => 'small-title-limit',
						'name'  => __( 'Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'   => 'small-format-icon',
						'name' => __( 'Post Format Icon', 'publisher' ),
						'type' => 'checkbox',
					),
					array(
						'id'    => 'small-term-badge',
						'name'  => __( 'Category Badge', 'publisher' ),
						'type'  => 'checkbox',
						'class' => 'aligned',
					),
					array(
						'id'         => 'small-term-badge-count',
						'name'       => __( 'Count', 'publisher' ),
						'type'       => 'text-count',
						'class'      => 'aligned',
						'related-to' => 'small-term-badge',
					),
				);
				break;


			case 'listing-mix-3-3':

				$type  = 'option-panel';
				$value = publisher_get_option( $args['field'] );

				$group = array(
					'name'  => __( 'Mix 9', 'publisher' ),
					'state' => $group_state,
					'class' => 'extra-indents',
				);

				$fields = array(
					array(
						'type' => 'img',
						'src'  => PUBLISHER_THEME_URI . 'images/shortcodes/bs-mix-listing-3-3-big.png',
					),
					array(
						'name' => __( 'Big Item ( Top )', 'publisher' ),
						'type' => 'hr',
					),
					array(
						'id'    => 'big-title-limit',
						'name'  => __( 'Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'    => 'big-excerpt-limit',
						'name'  => __( 'Excerpt Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'   => 'big-format-icon',
						'name' => __( 'Post Format Icon', 'publisher' ),
						'type' => 'checkbox',
					),
					array(
						'id'    => 'big-term-badge',
						'name'  => __( 'Category Badge', 'publisher' ),
						'type'  => 'checkbox',
						'class' => 'aligned',
					),
					array(
						'id'         => 'big-term-badge-count',
						'name'       => __( 'Count', 'publisher' ),
						'type'       => 'text-count',
						'class'      => 'aligned',
						'related-to' => 'big-term-badge',
					),
					array(
						'id'     => 'big-meta',
						'name'   => __( 'Post Meta', 'publisher' ),
						'type'   => 'post-meta',
						'fields' => $meta_field_array,
					),
					array(
						'name' => __( 'Small Items ( Bottom )', 'publisher' ),
						'type' => 'hr',
					),
					array(
						'id'    => 'small-title-limit',
						'name'  => __( 'Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'     => 'small-meta',
						'name'   => __( 'Post Meta', 'publisher' ),
						'type'   => 'post-meta',
						'fields' => $meta_field_array,
					),
				);
				break;

			case 'listing-mix-3-4':

				$type  = 'option-panel';
				$value = publisher_get_option( $args['field'] );

				$group = array(
					'name'  => __( 'Mix 10', 'publisher' ),
					'state' => $group_state,
					'class' => 'extra-indents',
				);

				$fields = array(
					array(
						'type' => 'img',
						'src'  => PUBLISHER_THEME_URI . 'images/shortcodes/bs-mix-listing-3-4-big.png',
					),
					array(
						'name' => __( 'Big Item ( Top )', 'publisher' ),
						'type' => 'hr',
					),
					array(
						'id'    => 'big-title-limit',
						'name'  => __( 'Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'    => 'big-excerpt-limit',
						'name'  => __( 'Excerpt Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'   => 'big-format-icon',
						'name' => __( 'Post Format Icon', 'publisher' ),
						'type' => 'checkbox',
					),
					array(
						'id'    => 'big-term-badge',
						'name'  => __( 'Category Badge', 'publisher' ),
						'type'  => 'checkbox',
						'class' => 'aligned',
					),
					array(
						'id'         => 'big-term-badge-count',
						'name'       => __( 'Count', 'publisher' ),
						'type'       => 'text-count',
						'class'      => 'aligned',
						'related-to' => 'big-term-badge',
					),
					array(
						'id'     => 'big-meta',
						'name'   => __( 'Post Meta', 'publisher' ),
						'type'   => 'post-meta',
						'fields' => $meta_field_array,
					),
					array(
						'name' => __( 'Small Items ( Bottom )', 'publisher' ),
						'type' => 'hr',
					),
					array(
						'id'    => 'small-title-limit',
						'name'  => __( 'Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'     => 'small-meta',
						'name'   => __( 'Post Meta', 'publisher' ),
						'type'   => 'post-meta',
						'fields' => $meta_field_array,
					),
				);
				break;


			case 'listing-mix-4-1':

				$type  = 'option-panel';
				$value = publisher_get_option( $args['field'] );

				$group = array(
					'name'  => __( 'Mix 11', 'publisher' ),
					'state' => $group_state,
					'class' => 'extra-indents',
				);

				$fields = array(
					array(
						'type' => 'img',
						'src'  => PUBLISHER_THEME_URI . 'images/shortcodes/bs-mix-listing-4-1-big.png',
					),
					array(
						'name' => __( 'Big Items', 'publisher' ),
						'type' => 'hr',
					),
					array(
						'id'    => 'big-title-limit',
						'name'  => __( 'Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'    => 'big-excerpt-limit',
						'name'  => __( 'Excerpt Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'   => 'big-format-icon',
						'name' => __( 'Post Format Icon', 'publisher' ),
						'type' => 'checkbox',
					),
					array(
						'id'    => 'big-term-badge',
						'name'  => __( 'Category Badge', 'publisher' ),
						'type'  => 'checkbox',
						'class' => 'aligned',
					),
					array(
						'id'         => 'big-term-badge-count',
						'name'       => __( 'Count', 'publisher' ),
						'type'       => 'text-count',
						'class'      => 'aligned',
						'related-to' => 'big-term-badge',
					),
					array(
						'id'     => 'big-meta',
						'name'   => __( 'Post Meta', 'publisher' ),
						'type'   => 'post-meta',
						'fields' => $meta_field_array,
					),
					array(
						'name' => __( 'Small Items', 'publisher' ),
						'type' => 'hr',
					),
					array(
						'id'    => 'small-title-limit',
						'name'  => __( 'Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'    => 'small-excerpt-limit',
						'name'  => __( 'Excerpt Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'   => 'small-format-icon',
						'name' => __( 'Post Format Icon', 'publisher' ),
						'type' => 'checkbox',
					),
					array(
						'id'    => 'small-term-badge',
						'name'  => __( 'Category Badge', 'publisher' ),
						'type'  => 'checkbox',
						'class' => 'aligned',
					),
					array(
						'id'         => 'small-term-badge-count',
						'name'       => __( 'Count', 'publisher' ),
						'type'       => 'text-count',
						'class'      => 'aligned',
						'related-to' => 'small-term-badge',
					),
					array(
						'id'     => 'small-meta',
						'name'   => __( 'Post Meta', 'publisher' ),
						'type'   => 'post-meta',
						'fields' => $meta_field_array,
					),
				);
				break;


			case 'listing-mix-4-2':

				$type  = 'option-panel';
				$value = publisher_get_option( $args['field'] );

				$group = array(
					'name'  => __( 'Mix 12', 'publisher' ),
					'state' => $group_state,
					'class' => 'extra-indents',
				);

				$fields = array(
					array(
						'type' => 'img',
						'src'  => PUBLISHER_THEME_URI . 'images/shortcodes/bs-mix-listing-4-2-big.png',
					),
					array(
						'name' => __( 'Big Items', 'publisher' ),
						'type' => 'hr',
					),
					array(
						'id'    => 'big-title-limit',
						'name'  => __( 'Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'    => 'big-excerpt-limit',
						'name'  => __( 'Excerpt Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'   => 'big-format-icon',
						'name' => __( 'Post Format Icon', 'publisher' ),
						'type' => 'checkbox',
					),
					array(
						'id'    => 'big-term-badge',
						'name'  => __( 'Category Badge', 'publisher' ),
						'type'  => 'checkbox',
						'class' => 'aligned',
					),
					array(
						'id'         => 'big-term-badge-count',
						'name'       => __( 'Count', 'publisher' ),
						'type'       => 'text-count',
						'class'      => 'aligned',
						'related-to' => 'big-term-badge',
					),
					array(
						'id'     => 'big-meta',
						'name'   => __( 'Post Meta', 'publisher' ),
						'type'   => 'post-meta',
						'fields' => $meta_field_array,
					),
					array(
						'name' => __( 'Small Items', 'publisher' ),
						'type' => 'hr',
					),
					array(
						'id'    => 'small-title-limit',
						'name'  => __( 'Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'    => 'small-excerpt-limit',
						'name'  => __( 'Excerpt Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'   => 'small-format-icon',
						'name' => __( 'Post Format Icon', 'publisher' ),
						'type' => 'checkbox',
					),
					array(
						'id'    => 'small-term-badge',
						'name'  => __( 'Category Badge', 'publisher' ),
						'type'  => 'checkbox',
						'class' => 'aligned',
					),
					array(
						'id'         => 'small-term-badge-count',
						'name'       => __( 'Count', 'publisher' ),
						'type'       => 'text-count',
						'class'      => 'aligned',
						'related-to' => 'small-term-badge',
					),
					array(
						'id'     => 'small-meta',
						'name'   => __( 'Post Meta', 'publisher' ),
						'type'   => 'post-meta',
						'fields' => $meta_field_array,
					),
				);
				break;


			case 'listing-mix-4-3':

				$type  = 'option-panel';
				$value = publisher_get_option( $args['field'] );

				$group = array(
					'name'  => __( 'Mix 13', 'publisher' ),
					'state' => $group_state,
					'class' => 'extra-indents',
				);

				$fields = array(
					array(
						'type' => 'img',
						'src'  => PUBLISHER_THEME_URI . 'images/shortcodes/bs-mix-listing-4-3-big.png',
					),
					array(
						'name' => __( 'Big Items', 'publisher' ),
						'type' => 'hr',
					),
					array(
						'id'    => 'big-title-limit',
						'name'  => __( 'Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'    => 'big-excerpt-limit',
						'name'  => __( 'Excerpt Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'   => 'big-format-icon',
						'name' => __( 'Post Format Icon', 'publisher' ),
						'type' => 'checkbox',
					),
					array(
						'id'    => 'big-term-badge',
						'name'  => __( 'Category Badge', 'publisher' ),
						'type'  => 'checkbox',
						'class' => 'aligned',
					),
					array(
						'id'         => 'big-term-badge-count',
						'name'       => __( 'Count', 'publisher' ),
						'type'       => 'text-count',
						'class'      => 'aligned',
						'related-to' => 'big-term-badge',
					),
					array(
						'id'     => 'big-meta',
						'name'   => __( 'Post Meta', 'publisher' ),
						'type'   => 'post-meta',
						'fields' => $meta_field_array,
					),
					array(
						'name' => __( 'Small Items', 'publisher' ),
						'type' => 'hr',
					),
					array(
						'id'    => 'small-title-limit',
						'name'  => __( 'Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'    => 'small-excerpt-limit',
						'name'  => __( 'Excerpt Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'   => 'small-format-icon',
						'name' => __( 'Post Format Icon', 'publisher' ),
						'type' => 'checkbox',
					),
					array(
						'id'    => 'small-term-badge',
						'name'  => __( 'Category Badge', 'publisher' ),
						'type'  => 'checkbox',
						'class' => 'aligned',
					),
					array(
						'id'         => 'small-term-badge-count',
						'name'       => __( 'Count', 'publisher' ),
						'type'       => 'text-count',
						'class'      => 'aligned',
						'related-to' => 'small-term-badge',
					),
					array(
						'id'     => 'small-meta',
						'name'   => __( 'Post Meta', 'publisher' ),
						'type'   => 'post-meta',
						'fields' => $meta_field_array,
					),
				);
				break;


			case 'listing-mix-4-4':

				$type  = 'option-panel';
				$value = publisher_get_option( $args['field'] );

				$group = array(
					'name'  => __( 'Mix 14', 'publisher' ),
					'state' => $group_state,
					'class' => 'extra-indents',
				);

				$fields = array(
					array(
						'type' => 'img',
						'src'  => PUBLISHER_THEME_URI . 'images/shortcodes/bs-mix-listing-4-4-big.png',
					),
					array(
						'name' => __( 'Big Items', 'publisher' ),
						'type' => 'hr',
					),
					array(
						'id'    => 'big-title-limit',
						'name'  => __( 'Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'    => 'big-excerpt-limit',
						'name'  => __( 'Excerpt Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'   => 'big-format-icon',
						'name' => __( 'Post Format Icon', 'publisher' ),
						'type' => 'checkbox',
					),
					array(
						'id'    => 'big-term-badge',
						'name'  => __( 'Category Badge', 'publisher' ),
						'type'  => 'checkbox',
						'class' => 'aligned',
					),
					array(
						'id'         => 'big-term-badge-count',
						'name'       => __( 'Count', 'publisher' ),
						'type'       => 'text-count',
						'class'      => 'aligned',
						'related-to' => 'big-term-badge',
					),
					array(
						'id'     => 'big-meta',
						'name'   => __( 'Post Meta', 'publisher' ),
						'type'   => 'post-meta',
						'fields' => $meta_field_array,
					),
					array(
						'name' => __( 'Small Items', 'publisher' ),
						'type' => 'hr',
					),
					array(
						'id'    => 'small-title-limit',
						'name'  => __( 'Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'    => 'small-excerpt-limit',
						'name'  => __( 'Excerpt Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'   => 'small-format-icon',
						'name' => __( 'Post Format Icon', 'publisher' ),
						'type' => 'checkbox',
					),
					array(
						'id'    => 'small-term-badge',
						'name'  => __( 'Category Badge', 'publisher' ),
						'type'  => 'checkbox',
						'class' => 'aligned',
					),
					array(
						'id'         => 'small-term-badge-count',
						'name'       => __( 'Count', 'publisher' ),
						'type'       => 'text-count',
						'class'      => 'aligned',
						'related-to' => 'small-term-badge',
					),
					array(
						'id'     => 'small-meta',
						'name'   => __( 'Post Meta', 'publisher' ),
						'type'   => 'post-meta',
						'fields' => $meta_field_array,
					),
				);
				break;


			case 'listing-mix-4-5':

				$type  = 'option-panel';
				$value = publisher_get_option( $args['field'] );

				$group = array(
					'name'  => __( 'Mix 15', 'publisher' ),
					'state' => $group_state,
					'class' => 'extra-indents',
				);

				$fields = array(
					array(
						'type' => 'img',
						'src'  => PUBLISHER_THEME_URI . 'images/shortcodes/bs-mix-listing-4-5-big.png',
					),
					array(
						'name' => __( 'Big Items', 'publisher' ),
						'type' => 'hr',
					),
					array(
						'id'    => 'big-title-limit',
						'name'  => __( 'Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'    => 'big-excerpt-limit',
						'name'  => __( 'Excerpt Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'   => 'big-format-icon',
						'name' => __( 'Post Format Icon', 'publisher' ),
						'type' => 'checkbox',
					),
					array(
						'id'    => 'big-term-badge',
						'name'  => __( 'Category Badge', 'publisher' ),
						'type'  => 'checkbox',
						'class' => 'aligned',
					),
					array(
						'id'         => 'big-term-badge-count',
						'name'       => __( 'Count', 'publisher' ),
						'type'       => 'text-count',
						'class'      => 'aligned',
						'related-to' => 'big-term-badge',
					),
					array(
						'id'     => 'big-meta',
						'name'   => __( 'Post Meta', 'publisher' ),
						'type'   => 'post-meta',
						'fields' => $meta_field_array,
					),
					array(
						'id'   => 'big-read-more',
						'name' => __( 'Read More Button', 'publisher' ),
						'type' => 'checkbox',
					),
					array(
						'name' => __( 'Small Items', 'publisher' ),
						'type' => 'hr',
					),
					array(
						'id'    => 'small-title-limit',
						'name'  => __( 'Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'    => 'small-excerpt-limit',
						'name'  => __( 'Excerpt Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'   => 'small-format-icon',
						'name' => __( 'Post Format Icon', 'publisher' ),
						'type' => 'checkbox',
					),
					array(
						'id'    => 'small-term-badge',
						'name'  => __( 'Category Badge', 'publisher' ),
						'type'  => 'checkbox',
						'class' => 'aligned',
					),
					array(
						'id'         => 'small-term-badge-count',
						'name'       => __( 'Count', 'publisher' ),
						'type'       => 'text-count',
						'class'      => 'aligned',
						'related-to' => 'small-term-badge',
					),
					array(
						'id'     => 'small-meta',
						'name'   => __( 'Post Meta', 'publisher' ),
						'type'   => 'post-meta',
						'fields' => $meta_field_array,
					),
					array(
						'id'   => 'small-read-more',
						'name' => __( 'Read More Button', 'publisher' ),
						'type' => 'checkbox',
					),
				);
				break;

			case 'listing-mix-4-6':

				$type  = 'option-panel';
				$value = publisher_get_option( $args['field'] );

				$group = array(
					'name'  => __( 'Mix 16', 'publisher' ),
					'state' => $group_state,
					'class' => 'extra-indents',
				);

				$fields = array(
					array(
						'type' => 'img',
						'src'  => PUBLISHER_THEME_URI . 'images/shortcodes/bs-mix-listing-4-6-big.png',
					),
					array(
						'name' => __( 'Big Items', 'publisher' ),
						'type' => 'hr',
					),
					array(
						'id'    => 'big-title-limit',
						'name'  => __( 'Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'    => 'big-excerpt-limit',
						'name'  => __( 'Excerpt Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'   => 'big-format-icon',
						'name' => __( 'Post Format Icon', 'publisher' ),
						'type' => 'checkbox',
					),
					array(
						'id'    => 'big-term-badge',
						'name'  => __( 'Category Badge', 'publisher' ),
						'type'  => 'checkbox',
						'class' => 'aligned',
					),
					array(
						'id'         => 'big-term-badge-count',
						'name'       => __( 'Count', 'publisher' ),
						'type'       => 'text-count',
						'class'      => 'aligned',
						'related-to' => 'big-term-badge',
					),
					array(
						'id'     => 'big-meta',
						'name'   => __( 'Post Meta', 'publisher' ),
						'type'   => 'post-meta',
						'fields' => $meta_field_array,
					),
					array(
						'id'   => 'big-read-more',
						'name' => __( 'Read More Button', 'publisher' ),
						'type' => 'checkbox',
					),
					array(
						'name' => __( 'Small Items', 'publisher' ),
						'type' => 'hr',
					),
					array(
						'id'    => 'small-title-limit',
						'name'  => __( 'Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'    => 'small-excerpt-limit',
						'name'  => __( 'Excerpt Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'   => 'small-format-icon',
						'name' => __( 'Post Format Icon', 'publisher' ),
						'type' => 'checkbox',
					),
					array(
						'id'    => 'small-term-badge',
						'name'  => __( 'Category Badge', 'publisher' ),
						'type'  => 'checkbox',
						'class' => 'aligned',
					),
					array(
						'id'         => 'small-term-badge-count',
						'name'       => __( 'Count', 'publisher' ),
						'type'       => 'text-count',
						'class'      => 'aligned',
						'related-to' => 'small-term-badge',
					),
					array(
						'id'     => 'small-meta',
						'name'   => __( 'Post Meta', 'publisher' ),
						'type'   => 'post-meta',
						'fields' => $meta_field_array,
					),
					array(
						'id'   => 'small-read-more',
						'name' => __( 'Read More Button', 'publisher' ),
						'type' => 'checkbox',
					),
				);
				break;


			case 'listing-mix-4-7':

				$type  = 'option-panel';
				$value = publisher_get_option( $args['field'] );

				$group = array(
					'name'  => __( 'Mix 17', 'publisher' ),
					'state' => $group_state,
					'class' => 'extra-indents',
				);

				$fields = array(
					array(
						'type' => 'img',
						'src'  => PUBLISHER_THEME_URI . 'images/shortcodes/bs-mix-listing-4-7-big.png',
					),
					array(
						'name' => __( 'Big Items', 'publisher' ),
						'type' => 'hr',
					),
					array(
						'id'    => 'big-title-limit',
						'name'  => __( 'Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'    => 'big-excerpt-limit',
						'name'  => __( 'Excerpt Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'   => 'big-format-icon',
						'name' => __( 'Post Format Icon', 'publisher' ),
						'type' => 'checkbox',
					),
					array(
						'id'    => 'big-term-badge',
						'name'  => __( 'Category Badge', 'publisher' ),
						'type'  => 'checkbox',
						'class' => 'aligned',
					),
					array(
						'id'         => 'big-term-badge-count',
						'name'       => __( 'Count', 'publisher' ),
						'type'       => 'text-count',
						'class'      => 'aligned',
						'related-to' => 'big-term-badge',
					),
					array(
						'id'     => 'big-meta',
						'name'   => __( 'Post Meta', 'publisher' ),
						'type'   => 'post-meta',
						'fields' => $meta_field_array,
					),
					array(
						'name' => __( 'Small Items', 'publisher' ),
						'type' => 'hr',
					),
					array(
						'id'    => 'small-title-limit',
						'name'  => __( 'Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'    => 'small-excerpt-limit',
						'name'  => __( 'Excerpt Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'   => 'small-format-icon',
						'name' => __( 'Post Format Icon', 'publisher' ),
						'type' => 'checkbox',
					),
					array(
						'id'    => 'small-term-badge',
						'name'  => __( 'Category Badge', 'publisher' ),
						'type'  => 'checkbox',
						'class' => 'aligned',
					),
					array(
						'id'         => 'small-term-badge-count',
						'name'       => __( 'Count', 'publisher' ),
						'type'       => 'text-count',
						'class'      => 'aligned',
						'related-to' => 'small-term-badge',
					),
					array(
						'id'     => 'small-meta',
						'name'   => __( 'Post Meta', 'publisher' ),
						'type'   => 'post-meta',
						'fields' => $meta_field_array,
					),
				);
				break;


			case 'listing-mix-4-8':

				$type  = 'option-panel';
				$value = publisher_get_option( $args['field'] );

				$group = array(
					'name'  => __( 'Mix 18', 'publisher' ),
					'state' => $group_state,
					'class' => 'extra-indents',
				);

				$fields = array(
					array(
						'type' => 'img',
						'src'  => PUBLISHER_THEME_URI . 'images/shortcodes/bs-mix-listing-4-8-big.png',
					),
					array(
						'name' => __( 'Big Items', 'publisher' ),
						'type' => 'hr',
					),
					array(
						'id'    => 'big-title-limit',
						'name'  => __( 'Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'    => 'big-excerpt-limit',
						'name'  => __( 'Excerpt Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'   => 'big-format-icon',
						'name' => __( 'Post Format Icon', 'publisher' ),
						'type' => 'checkbox',
					),
					array(
						'id'    => 'big-term-badge',
						'name'  => __( 'Category Badge', 'publisher' ),
						'type'  => 'checkbox',
						'class' => 'aligned',
					),
					array(
						'id'         => 'big-term-badge-count',
						'name'       => __( 'Count', 'publisher' ),
						'type'       => 'text-count',
						'class'      => 'aligned',
						'related-to' => 'big-term-badge',
					),
					array(
						'id'     => 'big-meta',
						'name'   => __( 'Post Meta', 'publisher' ),
						'type'   => 'post-meta',
						'fields' => $meta_field_array,
					),
					array(
						'id'   => 'big-read-more',
						'name' => __( 'Read More Button', 'publisher' ),
						'type' => 'checkbox',
					),
					array(
						'name' => __( 'Small Items', 'publisher' ),
						'type' => 'hr',
					),
					array(
						'id'    => 'small-title-limit',
						'name'  => __( 'Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'    => 'small-excerpt-limit',
						'name'  => __( 'Excerpt Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
						'class' => 'aligned',
					),
					array(
						'id'   => 'small-format-icon',
						'name' => __( 'Post Format Icon', 'publisher' ),
						'type' => 'checkbox',
					),
					array(
						'id'    => 'small-term-badge',
						'name'  => __( 'Category Badge', 'publisher' ),
						'type'  => 'checkbox',
						'class' => 'aligned',
					),
					array(
						'id'         => 'small-term-badge-count',
						'name'       => __( 'Count', 'publisher' ),
						'type'       => 'text-count',
						'class'      => 'aligned',
						'related-to' => 'small-term-badge',
					),
					array(
						'id'     => 'small-meta',
						'name'   => __( 'Post Meta', 'publisher' ),
						'type'   => 'post-meta',
						'fields' => $meta_field_array,
					),
				);
				break;


			case 'blocks-related-posts':

				$type  = 'option-panel';
				$value = publisher_get_option( $args['field'] );

				$group = array(
					'name'  => __( 'Related Posts', 'publisher' ),
					'state' => $group_state,
				);

				$fields = array(
					array(
						'id'    => 'title-limit',
						'name'  => __( 'Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
					),
					array(
						'id'   => 'format-icon',
						'name' => __( 'Post Format Icon', 'publisher' ),
						'type' => 'checkbox',
					),
					array(
						'id'    => 'term-badge',
						'name'  => __( 'Category Badge', 'publisher' ),
						'type'  => 'checkbox',
						'class' => 'aligned',
					),
					array(
						'id'         => 'term-badge-count',
						'name'       => __( 'Count', 'publisher' ),
						'type'       => 'text-count',
						'class'      => 'aligned',
						'related-to' => 'term-badge',
					),
				);
				break;


			case 'blocks-mega-menu':

				$type  = 'option-panel';
				$value = publisher_get_option( $args['field'] );

				$group = array(
					'name'  => __( 'Mega Menu Posts', 'publisher' ),
					'state' => $group_state,
				);

				$fields = array(
					array(
						'id'    => 'title-limit',
						'name'  => __( 'Title Length', 'publisher' ),
						'type'  => 'text',
						'unite' => __( 'Character', 'publisher' ),
					),
					array(
						'id'   => 'format-icon',
						'name' => __( 'Post Format Icon', 'publisher' ),
						'type' => 'checkbox',
					),
					array(
						'id'    => 'term-badge',
						'name'  => __( 'Category Badge', 'publisher' ),
						'type'  => 'checkbox',
						'class' => 'aligned',
					),
					array(
						'id'         => 'term-badge-count',
						'name'       => __( 'Count', 'publisher' ),
						'type'       => 'text-count',
						'class'      => 'aligned',
						'related-to' => 'term-badge',
					),
				);
				break;


			case 'post-page-settings':

				$type  = 'option-panel';
				$value = publisher_get_option( $args['field'] );
				$group = array();

				if ( ! isset( $value['meta']['date_type'] ) ) {
					$value['meta']['date_type'] = 'one';
				}

				$post_meta_field_array = array(
					'author_avatar' => array(
						'id'   => 'author_avatar',
						'name' => __( 'Author Avatar', 'publisher' ),
						'type' => 'checkbox',
					),
					'author'        => array(
						'id'   => 'author',
						'name' => __( 'Author Name', 'publisher' ),
						'type' => 'checkbox',
					),
					'date'          => array(
						'id'   => 'date',
						'name' => __( 'Date', 'publisher' ),
						'type' => 'checkbox',
					),
					'comment'       => array(
						'id'   => 'comment',
						'name' => __( 'Comments', 'publisher' ),
						'type' => 'checkbox',
					),
					'review'        => array(
						'id'   => 'review',
						'name' => __( 'Review', 'publisher' ),
						'type' => 'checkbox',
					),
					'views'         => array(
						'id'   => 'views',
						'name' => __( 'Views', 'publisher' ),
						'type' => 'checkbox',
					),
				);


				$fields = array(
					array(
						'id'   => 'format-icon',
						'name' => __( 'Post Format Icon', 'publisher' ),
						'type' => 'checkbox',
					),
					array(
						'id'    => 'term',
						'name'  => __( 'Category Badge', 'publisher' ),
						'type'  => 'checkbox',
						'class' => 'aligned',
					),
					array(
						'id'         => 'term-count',
						'name'       => __( 'Count', 'publisher' ),
						'type'       => 'text-count',
						'class'      => 'aligned',
						'related-to' => 'term',
					),
					array(
						'id'     => 'meta',
						'name'   => __( 'Post Info', 'publisher' ),
						'type'   => 'post-meta',
						'fields' => $post_meta_field_array,
					),
					array(
						'id'    => 'tag',
						'name'  => __( 'Tags', 'publisher' ),
						'type'  => 'checkbox',
						'class' => 'aligned',
					),
					array(
						'id'         => 'tag-count',
						'name'       => __( 'Count', 'publisher' ),
						'type'       => 'text-count',
						'class'      => 'aligned',
						'related-to' => 'tag',
						'min'        => '0',
						'max'        => '30',
					),
				);
				break;
		}


		// group open
		if ( ! empty( $group ) ) {
			?>
			<div class="fields-group bf-clearfix collapsible <?php echo esc_attr( $group['state'] ) ?> <?php echo esc_attr( ! empty( $group['class'] ) ? $group['class'] : '' ) ?>">
			<div class="fields-group-title-container"><span
					class="fields-group-title"><?php echo esc_html( $group['name'] ) ?></span><span
					class="collapse-button"><i
						class="fa fa-<?php echo $group['state'] == 'open' ? 'minus' : 'plus'; ?>"></i></span></div>
			<div class="bf-group-inner bf-clearfix" style="<?php echo esc_attr( $group['state'] == 'close' ? 'display:none' : '' ); ?>">
			<?php
		}


		foreach ( $fields as $field ) {

			if ( ! isset( $field['id'] ) ) {
				$field['id'] = '';
			}

			if ( $field['type'] !== 'hr' || $field['type'] !== 'img' ) {
				if ( $type == 'option-panel' ) {
					$field_name = $args['field'] . '[' . $field['id'] . ']';
				} else {
					$field_name = 'bf-metabox-option[better_post_options][' . $args['field'] . '][' . $field['id'] . ']';
				}
			}

			switch ( $field['type'] ) {

				case 'hr':
					?>
					<div class="blocks-hr">
						<span class="title"><?php echo esc_html( $field['name'] ); ?></span>
					</div>
					<?php
					break;

				case 'img':
					?>
					<div
						class="blocks-field blocks-field-img <?php echo ! empty( $field['class'] ) ? esc_attr( $field['class'] ) : ''; ?>">
						<img src="<?php echo esc_attr( $field['src'] ); ?>">
					</div>
					<?php
					break;

				case 'text':
					?>
					<div
						class="blocks-field blocks-field-text <?php echo ! empty( $field['class'] ) ? esc_attr( $field['class'] ) : ''; ?>"
						data-id="<?php echo $field['id']; ?>">
						<label><span class="title"><?php echo esc_html( $field['name'] ); ?></span>
							<input type="text" name="<?php echo esc_attr( $field_name ); ?>"
							       value="<?php echo esc_attr( $value[ $field['id'] ] ); ?>" class="ltr">
							<?php if ( ! empty( $field['unite'] ) ) { ?>
								<div class="unite"><?php echo esc_attr( $field['unite'] ); ?></div>
							<?php } ?>
						</label>
					</div>
					<?php
					break;

				case 'text-count':

					if ( ! isset( $field['class'] ) ) {
						$field['class'] = '';
					}

					if ( isset( $field['related-to'] ) ) {
						$field['class'] .= ' ' . ( $value[ $field['related-to'] ] ? '' : 'disabled' );
					}

					?>
					<div
						class="blocks-field blocks-field-text blocks-field-text-count <?php echo esc_attr( $field['class'] ); ?>"
						<?php echo isset( $field['related-to'] ) ? 'data-related-to="' . $field['related-to'] . '"' : ''; ?>
						data-id="<?php echo $field['id']; ?>">
						<label>
							<input type="number" name="<?php echo esc_attr( $field_name ); ?>"
							       value="<?php echo esc_attr( $value[ $field['id'] ] ); ?>" class="ltr"
							       min="<?php echo isset( $field['min'] ) ? $field['min'] : '1' ?>"
							       max="<?php echo isset( $field['max'] ) ? $field['max'] : '15' ?>">
							<div class="unite"><?php echo esc_attr( $field['name'] ); ?></div>
						</label>
					</div>
					<?php
					break;

				case 'checkbox':
					?>
					<div
						class="blocks-field blocks-field-switch <?php echo ! empty( $field['class'] ) ? esc_attr( $field['class'] ) : ''; ?>"
						data-id="<?php echo $field['id']; ?>">
						<div class="blocks-switch <?php echo $value[ $field['id'] ] ? 'checked' : 'unchecked'; ?>">
							<input name="<?php echo esc_attr( $field_name ); ?>"
							       value="<?php echo esc_attr( $value[ $field['id'] ] ); ?>"
							       type="hidden">
							<span></span>
						</div>
						<span class="title"><?php echo esc_html( $field['name'] ); ?></span>
					</div>
					<?php
					break;

				case 'post-meta':

					?>
					<div
						class="blocks-field blocks-field-text <?php echo ! empty( $field['class'] ) ? esc_attr( $field['class'] ) : ''; ?>"
						data-id="<?php echo $field['id']; ?>">
						<div
							class="blocks-switch aligned <?php echo $value[ $field['id'] ]['show'] ? 'checked' : 'unchecked'; ?>">
							<input name="<?php echo esc_attr( $field_name ); ?>[show]"
							       value="<?php echo esc_attr( $value[ $field['id'] ]['show'] ); ?>"
							       type="hidden">
							<span></span>
						</div>

						<span class="title"><?php echo esc_html( $field['name'] ); ?></span>
						<ul class="meta-sections">
							<?php

							foreach ( $field['fields'] as $_field ) {
								?>
								<li class="<?php echo $value[ $field['id'] ][ $_field['id'] ] ? 'checked-item' : ''; ?>">
									<input type="checkbox"
									       name="<?php echo esc_attr( $field_name ); ?>[<?php echo esc_attr( $_field['id'] ); ?>]"
									       id="<?php echo sanitize_html_class( $field_name . '[' . $_field['id'] . ']' ); ?>"
										<?php $value[ $field['id'] ][ $_field['id'] ] ? checked( 1, 1 ) : ''; ?>
										   class="blocks-checkbox"/>
									<label
										for="<?php echo sanitize_html_class( $field_name . '[' . $_field['id'] . ']' ); ?>"
										class="blocks-label"><?php echo esc_html( $_field['name'] ); ?></label>

									<?php if ( $args['field'] === 'post-page-settings' && $_field['id'] === 'date' ) { ?>
										<div class="bf-select-option-container ">
											<select name="<?php echo esc_attr( $field_name ); ?>[date_type]">
												<option
													value="one" <?php selected( 'one', $value[ $field['id'] ]['date_type'] ); ?>><?php _e( 'Updated or Created', 'publisher' ); ?></option>
												<option
													value="both" <?php selected( 'both', $value[ $field['id'] ]['date_type'] ); ?>><?php _e( 'Updated and Created', 'publisher' ); ?></option>
												<option
													value="created" <?php selected( 'created', $value[ $field['id'] ]['date_type'] ); ?>><?php _e( 'Only Created', 'publisher' ); ?></option>
											</select>
										</div>
										<?php

										unset( $field['fields']['date_type'] );

									} ?>

								</li>

								<?php
							}

							?>
						</ul>
					</div>
					<?php
					break;

			}
		}


		// group close
		if ( ! empty( $group ) ) {
			?>
			</div>
			</div>
			<?php
		}

	}
}


if ( ! function_exists( 'publisher_cb_blocks_source_field' ) ) {
	/**
	 * Handy function to getting correct
	 */
	function publisher_cb_blocks_source_field( $args = array() ) {

		$args = bf_merge_args( $args, array(
			'field' => '',
		) );

		$fields      = array();
		$group       = array();
		$group_state = 'close';
		$type        = '';
		$value       = '';


		switch ( $args['field'] ) {

			case '':
				return '';
				break;


			/**
			 *
			 * Source
			 *
			 */
			case 'source':

				$fields = array(
					array(
						array(
							'id'    => '_bs_source_name',
							'name'  => __( 'Source 1', 'publisher' ),
							'value' => bf_get_post_meta( '_bs_source_name', get_the_ID(), '' ),
							'type'  => 'text',
						),
						array(
							'id'    => '_bs_source_url',
							'name'  => __( 'Link', 'publisher' ),
							'value' => bf_get_post_meta( '_bs_source_url', get_the_ID(), '' ),
							'type'  => 'text',
						),
						array(
							'id'    => '_bs_source_rel',
							'name'  => '',
							'value' => bf_get_post_meta( '_bs_source_rel', get_the_ID(), 'nofollow' ),
							'type'  => 'rel',
						),
					),
					array(
						array(
							'id'    => '_bs_source_name_2',
							'name'  => __( 'Source 2', 'publisher' ),
							'value' => bf_get_post_meta( '_bs_source_name_2', get_the_ID(), '' ),
							'type'  => 'text',
						),
						array(
							'id'    => '_bs_source_url_2',
							'name'  => __( 'Link', 'publisher' ),
							'value' => bf_get_post_meta( '_bs_source_url_2', get_the_ID(), '' ),
							'type'  => 'text',
						),
						array(
							'id'    => '_bs_source_rel_2',
							'name'  => '',
							'value' => bf_get_post_meta( '_bs_source_rel_2', get_the_ID(), 'nofollow' ),
							'type'  => 'rel',
						),
					),
					array(
						array(
							'id'    => '_bs_source_name_3',
							'name'  => __( 'Source 3', 'publisher' ),
							'value' => bf_get_post_meta( '_bs_source_name_3', get_the_ID(), '' ),
							'type'  => 'text',
						),
						array(
							'id'    => '_bs_source_url_3',
							'name'  => __( 'Link', 'publisher' ),
							'value' => bf_get_post_meta( '_bs_source_url_3', get_the_ID(), '' ),
							'type'  => 'text',
						),
						array(
							'id'    => '_bs_source_rel_3',
							'name'  => '',
							'value' => bf_get_post_meta( '_bs_source_rel_3', get_the_ID(), 'nofollow' ),
							'type'  => 'rel',
						),
					),
				);

				break;


			/**
			 *
			 * Via
			 *
			 */
			case 'via':

				$fields = array(
					array(
						array(
							'id'    => '_bs_via_name',
							'name'  => __( 'Via 1', 'publisher' ),
							'value' => bf_get_post_meta( '_bs_via_name', get_the_ID(), '' ),
							'type'  => 'text',
						),
						array(
							'id'    => '_bs_via_url',
							'name'  => __( 'Link', 'publisher' ),
							'value' => bf_get_post_meta( '_bs_via_url', get_the_ID(), '' ),
							'type'  => 'text',
						),
						array(
							'id'    => '_bs_via_rel',
							'name'  => '',
							'value' => bf_get_post_meta( '_bs_via_rel', get_the_ID(), 'nofollow' ),
							'type'  => 'rel',
						),
					),
					array(
						array(
							'id'    => '_bs_via_name_2',
							'name'  => __( 'Via 2', 'publisher' ),
							'value' => bf_get_post_meta( '_bs_via_name_2', get_the_ID(), '' ),
							'type'  => 'text',
						),
						array(
							'id'    => '_bs_via_url_2',
							'name'  => __( 'Link', 'publisher' ),
							'value' => bf_get_post_meta( '_bs_via_url_2', get_the_ID(), '' ),
							'type'  => 'text',
						),
						array(
							'id'    => '_bs_via_rel_2',
							'name'  => '',
							'value' => bf_get_post_meta( '_bs_via_rel_2', get_the_ID(), 'nofollow' ),
							'type'  => 'rel',
						),
					),
					array(
						array(
							'id'    => '_bs_via_name_3',
							'name'  => __( 'Via 3', 'publisher' ),
							'value' => bf_get_post_meta( '_bs_via_name_3', get_the_ID(), '' ),
							'type'  => 'text',
						),
						array(
							'id'    => '_bs_via_url_3',
							'name'  => __( 'Link', 'publisher' ),
							'value' => bf_get_post_meta( '_bs_via_url_3', get_the_ID(), '' ),
							'type'  => 'text',
						),
						array(
							'id'    => '_bs_via_rel_3',
							'name'  => '',
							'value' => bf_get_post_meta( '_bs_via_rel_3', get_the_ID(), 'nofollow' ),
							'type'  => 'rel',
						),
					),
				);

				break;
		}


		$field_name = 'bf-metabox-option[better_post_options][%s]';

		foreach ( $fields as $row ) {

			?>
			<div class="block-source-row bf-clearfix">
				<?php

				foreach ( $row as $field ) {

					switch ( $field['type'] ) {


						case 'text':
							?>
							<div
								class="source-field source-field-text <?php echo ! empty( $field['class'] ) ? esc_attr( $field['class'] ) : ''; ?>">
								<input type="text"
								       name="<?php echo esc_attr( str_replace( '%s', $field['id'], $field_name ) ); ?>"
								       value="<?php echo esc_attr( $field['value'] ); ?>" class="ltr"
								       placeholder="<?php echo esc_attr( $field['name'] ); ?>">
							</div>
							<?php
							break;


						case 'rel':
							?>
							<div
								class="source-field source-field-rel <?php echo ! empty( $field['class'] ) ? esc_attr( $field['class'] ) : ''; ?>">
								<div class="bf-select-option-container ">
									<select
										name="<?php echo esc_attr( str_replace( '%s', $field['id'], $field_name ) ); ?>">
										<option
											value="nofollow_blank" <?php selected( 'nofollow_blank', $field['value'] ); ?>><?php esc_html_e( 'No Follow & Open in new page', 'publisher' ); ?></option>
										<option
											value="nofollow" <?php selected( 'nofollow', $field['value'] ); ?>><?php esc_html_e( 'No Follow & Open in current page', 'publisher' ); ?></option>
										<option
											value="follow_blank" <?php selected( 'follow_blank', $field['value'] ); ?>><?php esc_html_e( 'Follow & Open in new page', 'publisher' ); ?></option>
										<option
											value="follow" <?php selected( 'follow', $field['value'] ); ?>><?php esc_html_e( 'Follow & Open in current page', 'publisher' ); ?></option>
									</select>
								</div>
							</div>
							<?php
							break;


					}


				}

				?>
			</div>
			<?php
		}

	}
}


if ( ! function_exists( 'publisher_cb_custom_width_html_generator' ) ) {
	/**
	 * Width Changer block generator
	 *
	 * @param string $id
	 */
	function publisher_cb_custom_width_html_generator( $id = 'layout-2-col' ) {

		if ( $id === 'layout-2-col' ) {
			$column_count = 2;
		} else {
			$column_count = 3;
		}

		$options = publisher_get_option( $id );

		$width     = isset( $options['width'] ) ? esc_attr( $options['width'] ) : '';
		$content   = isset( $options['content'] ) ? esc_attr( $options['content'] ) : '';
		$primary   = isset( $options['primary'] ) ? esc_attr( $options['primary'] ) : '';
		$secondary = isset( $options['secondary'] ) ? esc_attr( $options['secondary'] ) : '';

		$last_col_width = $width;

		?>
		<div class="resizable-width-container">
			<input type="hidden" class="total-width" name="<?php echo $id ?>[width]"
			       value="<?php echo $width; ?>">
			<input type="hidden" class="col-1-width" name="<?php echo $id ?>[content]"
			       value="<?php echo $content; ?>">
			<input type="hidden" class="col-2-width" name="<?php echo $id ?>[primary]"
			       value="<?php echo $primary; ?>">

			<?php if ( $column_count === 3 ) : ?>
				<input type="hidden" class="col-3-width" name="<?php echo $id ?>[secondary]"
				       value="<?php echo $secondary; ?>">
			<?php endif ?>

			<div class="resizable-width-total-wrapper" data-current-width="<?php echo $width ?>">
				<div class="resizable-width-total-width">
					<span class="resizable-width-arrow resizable-width-left-arrow"></span>
					<span class="resizable-width-total-number"><?php echo $width ?>px</span>
					<span class="resizable-width-arrow resizable-width-right-arrow"></span>
				</div>
			</div>

			<div class="resizable-width-columns-wrapper" data-columns="<?php echo $column_count; ?>"
			     data-total="<?php echo $width ?>">
				<div class="resizable-width-section">
					<div class="resizable-width-columns">
						<div class="resizable-width-column resizable-width-main-column"
						     data-width-prc="<?php echo $content ?>"
						     data-width-px="<?php echo $_px = ceil( $content / 100 * $width );
						     $last_col_width -= $_px; ?>"
						     data-index="1">
						<span class="resizable-width-labels">
							<label class="resizable-width-labels-percentage"><?php echo $content ?>%</label>
							<label
								class="resizable-width-labels-name"><span><img
										src="<?php echo PUBLISHER_THEME_URI, 'images/admin/site-width-content.png'; ?>"/></span></label>
							<label class="resizable-width-labels-px"><?php echo $_px ?>px</label>
						</span>
						</div>

						<div class="resizable-width-column"
						     data-width-prc="<?php echo $primary ?>" data-index="2"
						     data-width-px="<?php if ( $column_count === 3 ) {
							     echo $_px = ceil( $primary / 100 * $width );
							     $last_col_width -= $_px;
						     } else {
							     $_px = $last_col_width;
						     }

						     echo $_px;
						     ?>"
						>
						<span class="resizable-width-labels">
							<label class="resizable-width-labels-percentage"><?php echo $primary ?>%</label>
							<label
								class="resizable-width-labels-name"><span><img
										src="<?php echo PUBLISHER_THEME_URI, 'images/admin/site-width-primary.png'; ?>"/></span></label>
							<label class="resizable-width-labels-px"><?php echo $_px ?>px</label>
						</span>
						</div>

						<?php if ( $column_count === 3 ): ?>
							<div class="resizable-width-column"
							     data-width-prc="<?php echo $secondary ?>"
							     data-width-px="<?php echo $last_col_width; ?>"
							     data-index="3">
						<span class="resizable-width-labels">
							<label class="resizable-width-labels-percentage"><?php echo $secondary ?>%</label>
							<label
								class="resizable-width-labels-name"><span><img
										src="<?php echo PUBLISHER_THEME_URI, 'images/admin/site-width-secondary.png'; ?>"/></span></label>
							<label class="resizable-width-labels-px"><?php echo $last_col_width ?>px</label>
						</span>
							</div>
						<?php endif ?>
					</div>
				</div>
			</div>
		</div>
		<?php
	}
}


if ( ! function_exists( 'publisher_cb_custom_width_field' ) ) {
	/**
	 * Callback for site width changer
	 */
	function publisher_cb_custom_width_field() {
		?>
		<div class="bf-clearfix bf-custom-width-fields-container">
			<div class="bf-custom-width-2-col">
				<?php publisher_cb_custom_width_html_generator( 'layout-2-col' ); ?>
			</div>
			<div class="bf-custom-width-3-col">
				<?php publisher_cb_custom_width_html_generator( 'layout-3-col' ); ?>
				<span class="note">Please note the "Sidebar 2" will removed in screen size between 1000px and 768px and screens smaller than 500px.</span>
			</div>
		</div>
		<?php
	}
}


if ( ! function_exists( 'publisher_cb_heading_typo_fields' ) ) {
	/**
	 * Callback for site width changer
	 *
	 * @param $field array
	 */
	function publisher_cb_heading_typo_fields( $field ) {

		$fields = array();

		switch ( $field['field'] ) {

			case 'h1':
			case 'h2':
			case 'h3':
			case 'h4':
			case 'h5':
			case 'h6':

				$fields = array(
					array(
						'id'    => 'typo_heading_' . $field['field'],
						'type'  => 'text',
						'value' => publisher_get_option( 'typo_heading_' . $field['field'] ),
					),
					array(
						'id'    => 'typo_heading_' . $field['field'] . '_color',
						'type'  => 'color',
						'value' => publisher_get_option( 'typo_heading_' . $field['field'] . '_color' ),
					),
				);

				break;

		}

		?>
		<div class="bf-clearfix bf-typo-heading-fields">
			<?php

			foreach ( $fields as $field ) {

				switch ( $field['type'] ) {

					case 'hr':
						?>
						<div class="blocks-hr">
							<span class="title"><?php echo esc_html( $field['name'] ); ?></span>
						</div>
						<?php
						break;

					case 'img':
						?>
						<div
							class="typo-heading-field typo-heading-field-img <?php echo ! empty( $field['class'] ) ? esc_attr( $field['class'] ) : ''; ?>">
							<img src="<?php echo esc_attr( $field['src'] ); ?>">
						</div>
						<?php
						break;

					case 'text':
						?>
						<div
							class="typo-heading-field typo-heading-field-text <?php echo ! empty( $field['class'] ) ? esc_attr( $field['class'] ) : ''; ?>"
							data-id="<?php echo $field['id']; ?>">
							<label>

								<?php if ( ! empty( $field['name'] ) ) { ?>
									<span class="title"><?php echo esc_html( $field['name'] ); ?></span>
								<?php } ?>

								<input type="text" name="<?php echo $field['id']; ?>"
								       value="<?php echo esc_attr( $field['value'] ); ?>" class="ltr">

								<?php if ( ! empty( $field['unite'] ) ) { ?>
									<div class="unite"><?php echo esc_attr( $field['unite'] ); ?></div>
								<?php } ?>

							</label>
						</div>
						<?php
						break;

					case 'color':
						?>
						<div class="bs-color-picker-wrapper typo-heading-field typo-heading-field-color">
							<div class="bs-color-picker-stripe">
								<a class="wp-color-result" title="Select Color" data-current="Current Color"
								   style="background-color: <?php echo $field['value']; ?>"></a>
							</div>

							<input type="text" name="<?php echo $field['id']; ?>" value="<?php echo $field['value']; ?>"
							       class="bs-color-picker-value">
						</div>
						<?php
						break;

				}
			}

			?>
		</div>
		<?php

	} // publisher_cb_heading_typo_fields
}
