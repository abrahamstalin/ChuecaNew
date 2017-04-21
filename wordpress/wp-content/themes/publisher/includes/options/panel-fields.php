<?php

$styles = Publisher_Theme_Styles_Manager::get_styles();

/**
 * => Template Options
 */
$fields[]               = array(
	'name' => __( 'General', 'publisher' ),
	'id'   => 'general_settings',
	'type' => 'tab',
	'icon' => 'bsai-global',
);
$fields['style']        = array(
	'name'             => __( 'Pre-defined Styles', 'publisher' ),
	'id'               => 'style',
	'type'             => 'image_select',
	'section_class'    => 'style-floated-left bordered',
	'deferred-options' => array(
		'callback' => 'publisher_styles_config',
	),
	'desc'             => __( 'Select a pre-made style. Actually each style is a theme!', 'publisher' ),
);
$fields['layout_style'] = array(
	'name'          => __( 'Page Boxed Style', 'publisher' ),
	'id'            => 'layout_style',
	'style'         => $styles,
	'save_default'  => FALSE,
	'type'          => 'select',
	'section_class' => 'style-floated-left bordered',
	'desc'          => __( 'Select whether you want a boxed or a full width layout. Default option image shows what default style selected in theme options.', 'publisher' ),
	'options'       => array(
		'full-width' => __( 'Full Width', 'publisher' ),
		'boxed'      => __( 'Boxed', 'publisher' ),
	),
);

$fields[]                       = array(
	'name'  => __( 'Site Width', 'publisher' ),
	'id'    => 'custom_width_heading',
	'type'  => 'group',
	'state' => 'open',
);
$fields['custom_width']         = array(
	'name'           => '',
	'id'             => 'custom_width',
	'type'           => 'custom',
	'input_callback' => 'publisher_cb_custom_width_field',
	'section_class'  => 'full-width-controls',
);
$fields['layout-2-col']         = array(
	'id'    => 'layout-2-col',
	'style' => $styles,
);
$fields['layout-3-col']         = array(
	'id'    => 'layout-3-col',
	'style' => $styles,
);
$fields['layout_columns_space'] = array(
	'name'   => __( 'Columns Gap', 'publisher' ),
	'id'     => 'layout_columns_space',
	'type'   => 'text',
	'style'  => $styles,
	'desc'   => __( 'Enter space between columns.', 'publisher' ),
	'suffix' => __( 'Pixel', 'publisher' ),
);

$fields[]                          = array(
	'name'  => __( 'General', 'publisher' ),
	'type'  => 'group',
	'state' => 'open',
);
$fields['general_layout']          = array(
	'name'             => __( 'Site Layout', 'publisher' ),
	'id'               => 'general_layout',
	'type'             => 'image_radio',
	'section_class'    => 'style-floated-left bordered',
	'desc'             => __( 'Select the layout you want, whether a single column or a 2 column one. It affects every page and the whole layout. This option can be overridden on all sections.', 'publisher' ),
	'deferred-options' => 'publisher_layout_option_list',
);
$fields['general_listing']         = array(
	'name'             => __( 'Site Listing', 'publisher' ),
	'id'               => 'general_listing',
	'style'            => $styles,
	'type'             => 'image_radio',
	'section_class'    => 'style-floated-left bordered',
	'desc'             => __( 'Select general listing of site.', 'publisher' ),
	'deferred-options' => 'publisher_listing_option_list',
);
$fields['general_listing_excerpt'] = array(
	'name'    => __( 'Show Excerpt?', 'publisher' ),
	'id'      => 'general_listing_excerpt',
	'type'    => 'select',
	'desc'    => __( 'Select show or hide post excerpt in listings with excerpt.', 'publisher' ),
	'options' => array(
		'show' => __( 'Yes, Show.', 'publisher' ),
		'hide' => __( 'No.', 'publisher' ),
	)
);
$fields['pagination_type']         = array(
	'name'             => __( 'Pagination', 'publisher' ),
	'id'               => 'pagination_type',
	'type'             => 'select',
	'desc'             => __( 'Select pagination type of site.', 'publisher' ),
	'deferred-options' => 'publisher_pagination_option_list',
);
$fields['back_to_top']             = array(
	'name'    => __( 'Show Back To Top Button', 'publisher' ),
	'id'      => 'back_to_top',
	'type'    => 'select',
	'desc'    => __( 'Select show or hide back to top button.', 'publisher' ),
	'options' => array(
		'show' => __( 'Yes, Show.', 'publisher' ),
		'hide' => __( 'No.', 'publisher' ),
	)
);
$fields['light_box_images']        = array(
	'name'    => __( 'Light Box For Images', 'publisher' ),
	'id'      => 'light_box_images',
	'type'    => 'select',
	'desc'    => __( 'Activate opening images full size in light box.', 'publisher' ),
	'options' => array(
		'enable'  => __( 'Enable', 'publisher' ),
		'disable' => __( 'Disable', 'publisher' ),
	)
);
$fields['sticky_sidebar']          = array(
	'name'    => __( 'Sticky Sidebar', 'publisher' ),
	'id'      => 'sticky_sidebar',
	'type'    => 'select',
	'desc'    => __( 'You can make sidebars sticky with enabling this option.', 'publisher' ),
	'options' => array(
		'enable'  => __( 'Enable', 'publisher' ),
		'disable' => __( 'Disable', 'publisher' ),
	)
);


/**
 * -> Homepage
 **/
$fields[] = array(
	'name'  => __( 'Homepage', 'publisher' ),
	'type'  => 'group',
	'state' => 'close',
);
$fields[] = array(
	'name'      => __( 'Important Note', 'publisher' ),
	'id'        => 'homepage-info',
	'type'      => 'info',
	'std'       => __( '<p>Following options didn\'t work if you selected custom page for front page but this settings will be used for when you have not selected static page for front page and the paginated pages of static homepage.</p>', 'publisher' ),
	'state'     => 'open',
	'info-type' => 'danger',
);

$fields['home_layout']           = array(
	'name'             => __( 'Homepage Layout', 'publisher' ),
	'id'               => 'home_layout',
	'style'            => $styles,
	'type'             => 'image_radio',
	'section_class'    => 'style-floated-left bordered',
	'desc'             => __( 'Override homepage layout.', 'publisher' ),
	'deferred-options' => array(
		'callback' => 'publisher_layout_option_list',
		'args'     => array(
			TRUE
		),
	),
);
$fields['home_listing']          = array(
	'name'             => __( 'Homepage Posts Listing', 'publisher' ),
	'id'               => 'home_listing',
	'style'            => $styles,
	'type'             => 'image_radio',
	'section_class'    => 'style-floated-left bordered',
	'desc'             => __( 'Override homepage listing.', 'publisher' ),
	'deferred-options' => array(
		'callback' => 'publisher_listing_option_list',
		'args'     => array(
			TRUE
		),
	),
);
$fields['home_listing_excerpt']  = array(
	'name'    => __( 'Show Excerpt?', 'publisher' ),
	'id'      => 'home_listing_excerpt',
	'type'    => 'select',
	'desc'    => __( 'Select show or hide post excerpt in listings with excerpt.', 'publisher' ),
	'options' => array(
		'default' => __( '-- Default --', 'publisher' ),
		'show'    => __( 'Yes, Show.', 'publisher' ),
		'hide'    => __( 'No.', 'publisher' ),
	)
);
$fields['home_cat_include']      = array(
	'name'     => __( 'Categories', 'publisher' ),
	'id'       => 'home_cat_include',
	'desc'     => __( 'Show posts associated with certain categories in homepage.', 'publisher' ),
	'type'     => 'select',
	'multiple' => TRUE,
	'options'  => array(
		'' => __( '-- All Posts --', 'publisher' ),
		array(
			'label'   => __( 'Categories', 'publisher' ),
			'options' => array(
				'category_walker' => 'category_walker'
			),
		),
	),
);
$fields['home_cat_exclude']      = array(
	'name'     => __( 'Exclude Categories', 'publisher' ),
	'id'       => 'home_cat_exclude',
	'desc'     => __( 'Exclude showing posts of specific categories in home page.', 'publisher' ),
	'type'     => 'select',
	'multiple' => TRUE,
	'options'  => array(
		'' => __( '-- All Posts [ No Exclude ] --', 'publisher' ),
		array(
			'label'   => __( 'Categories', 'publisher' ),
			'options' => array(
				'category_walker' => 'category_walker'
			),
		),
	),
);
$fields['home_tag_include']      = array(
	'name'        => __( 'Tags', 'publisher' ),
	'id'          => 'home_tag_include',
	'desc'        => __( 'Show posts associated with certain tags in homepage.', 'publisher' ),
	'type'        => 'ajax_select',
	"callback"    => 'BF_Ajax_Select_Callbacks::tags_callback',
	"get_name"    => 'BF_Ajax_Select_Callbacks::tag_name',
	'placeholder' => __( "Search and find tag...", 'publisher' ),
);
$fields['home_custom_post_type'] = array(
	'name'       => __( 'Custom Post Type', 'publisher' ),
	'id'         => 'home_custom_post_type',
	'desc'       => __( 'You can show custom post types in home page by adding them into this field. please don\'t forgot to add "post" to it if you changed this and need to default post type shown also.', 'publisher' ),
	'type'       => 'text',
	'input-desc' => 'Separate by ","',
);
$fields['home_posts_count']      = array(
	'name' => __( 'Number Of Post To Show', 'publisher' ),
	'id'   => 'home_posts_count',
	'desc' => sprintf( __( 'Enter number of posts to show in homepage per page. <br>Default: %s', 'publisher' ), get_option( 'posts_per_page' ) ),
	'type' => 'text',
);
$fields['home_pagination_type']  = array(
	'name'             => __( 'Homepage pagination', 'publisher' ),
	'id'               => 'home_pagination_type',
	'type'             => 'select',
	'desc'             => __( 'Select pagination of homepage.', 'publisher' ),
	'deferred-options' => array(
		'callback' => 'publisher_pagination_option_list',
		'args'     => array(
			TRUE
		),
	),
);

$fields[] = array(
	'type' => 'group_close',
);
$fields[] = array(
	'name'   => __( 'Single Pages', 'publisher' ),
	'type'   => 'heading',
	'layout' => 'style-2',
);

/**
 * -> Posts
 **/
$fields[]                                = array(
	'name'  => __( 'Posts', 'publisher' ),
	'type'  => 'group',
	'state' => 'close',
);
$fields['post_layout']                   = array(
	'name'             => __( 'Posts Page Layout', 'publisher' ),
	'id'               => 'post_layout',
	'style'            => $styles,
	'type'             => 'image_radio',
	'section_class'    => 'style-floated-left bordered',
	'desc'             => __( 'Override posts page layout.', 'publisher' ),
	'deferred-options' => array(
		'callback' => 'publisher_layout_option_list',
		'args'     => array(
			TRUE
		),
	),
);
$fields['post_template']                 = array(
	'name'             => __( 'Single post template', 'publisher' ),
	'id'               => 'post_template',
	'style'            => $styles,
	'type'             => 'image_radio',
	'section_class'    => 'style-floated-left bordered',
	'desc'             => __( 'Select default template for single posts.', 'publisher' ),
	'deferred-options' => array(
		'callback' => 'publisher_get_single_template_option',
	),
);
$fields['post-page-settings']            = array(
	'name'            => __( 'Post Settings', 'publisher' ),
	'desc'            => __( 'You can enable sections you want to show in post page and also you can change the behaviour of them.', 'publisher' ),
	'id'              => 'post-page-settings',
	'container_class' => 'advanced-block-settings post-block-options',
	'type'            => 'custom',
	'input_callback'  => array(
		'callback' => 'publisher_cb_blocks_setting_field',
		'args'     => array(
			array(
				'field' => 'post-page-settings',
			)
		),
	),
);
$fields['post_author_box']               = array(
	'name'    => __( 'Show Author Box', 'publisher' ),
	'id'      => 'post_author_box',
	'desc'    => __( 'Enabling this will be adds post author box to bottom of post content.', 'publisher' ),
	'type'    => 'select',
	'options' => array(
		'show' => __( 'Show', 'publisher' ),
		'hide' => __( 'Hide', 'publisher' ),
	)
);
$fields['post_next_prev']                = array(
	'name'    => __( 'Show Next/Prev Posts Link', 'publisher' ),
	'id'      => 'post_next_prev',
	'desc'    => __( 'Enabling this will be adds Next/Prev posts link to bottom of post.', 'publisher' ),
	'type'    => 'select',
	'options' => array(
		'style-1' => __( 'Show', 'publisher' ),
		'hide'    => __( 'Hide', 'publisher' ),
	)
);
$fields[]                                = array(
	'name' => __( 'Related Posts', 'publisher' ),
	'type' => 'heading',
);
$fields['post_related']                  = array(
	'name'    => __( 'Related Posts', 'publisher' ),
	'id'      => 'post_related',
	'desc'    => __( 'Enabling this will be adds related posts in in bottom of post content.', 'publisher' ),
	'type'    => 'select',
	'options' => array(
		'show'                  => __( 'Show - Simple', 'publisher' ),
		'infinity-related-post' => __( 'Show - Infinity Ajax Load', 'publisher' ),
		'hide'                  => __( 'Hide', 'publisher' ),
	),
);
$fields['post_related_type']             = array(
	'name'    => __( 'Related Posts Algorithm', 'publisher' ),
	'id'      => 'post_related_type',
	'desc'    => __( 'Chose the algorithm of related posts.', 'publisher' ),
	'type'    => 'select',
	'options' => array(
		'cat'            => __( 'by Category', 'publisher' ),
		'tag'            => __( 'by Tag', 'publisher' ),
		'author'         => __( 'by Author', 'publisher' ),
		'cat-tag'        => __( 'by Category & Tag', 'publisher' ),
		'cat-tag-author' => __( 'by Category ,Tag & Author', 'publisher' ),
		'random'         => __( 'Randomly', 'publisher' ),
	),
	'show_on' => array(
		array( 'post_related!=hide' )
	),
);
$fields['post_related_count']            = array(
	'name'    => __( 'Related Posts Count', 'publisher' ),
	'id'      => 'post_related_count',
	'desc'    => __( 'Enter related posts count.', 'publisher' ),
	'type'    => 'text',
	'show_on' => array(
		array( 'post_related=show' )
	),
);
$fields['post_related_author_posts']     = array(
	'name'    => __( 'Related Posts -> More From Author', 'publisher' ),
	'id'      => 'post_related_author_posts',
	'desc'    => __( 'Show/Hide "More From Author" from related posts section.', 'publisher' ),
	'type'    => 'select',
	'options' => array(
		'show' => __( 'Show', 'publisher' ),
		'hide' => __( 'Hide', 'publisher' ),
	),
	'show_on' => array(
		array( 'post_related=show' )
	),
);
$fields[]                                = array(
	'name' => __( 'Comments', 'publisher' ),
	'type' => 'heading',
);
$fields['post_comments']                 = array(
	'name'    => __( 'Show Comments', 'publisher' ),
	'id'      => 'post_comments',
	'desc'    => __( 'Select to show or hide comments in bottom of post content.', 'publisher' ),
	'type'    => 'select',
	'options' => array(
		'show-simple'    => __( 'Show, Normal Comments', 'publisher' ),
		'show-ajaxified' => __( 'Ajax - Show Comments Button', 'publisher' ),
		'hide'           => __( 'Hide', 'publisher' ),
	),
);
$fields['post_comments_form_position']   = array(
	'name'    => __( 'Comment Form Position', 'publisher' ),
	'id'      => 'post_comments_form_position',
	'type'    => 'select',
	'desc'    => __( 'Chose comment form inputs position.', 'publisher' ),
	'options' => array(
		'top'    => __( 'Top of comments list.', 'publisher' ),
		'bottom' => __( 'Bottom of comments list', 'publisher' ),
		'both'   => __( 'Top & Bottom', 'publisher' ),
	),
	'show_on' => array(
		array( 'post_comments!=hide' )
	),
);
$fields['post_comments_form_remove_url'] = array(
	'name'    => __( 'Remove URL Field from Comment Form', 'publisher' ),
	'id'      => 'post_comments_form_remove_url',
	'desc'    => __( 'With enabling this URL will removed from comments form.', 'publisher' ),
	'type'    => 'select',
	'options' => array(
		'yes' => __( 'Yes, Remove it.', 'publisher' ),
		'no'  => __( 'No', 'publisher' ),
	),
	'show_on' => array(
		array( 'post_comments!=hide' )
	),
);


/**
 * -> Page
 **/
$fields[]                             = array(
	'name'  => __( 'Page', 'publisher' ),
	'type'  => 'group',
	'state' => 'close',
);
$fields['page_layout']                = array(
	'name'             => __( 'Static Pages Layout', 'publisher' ),
	'id'               => 'page_layout',
	'style'            => $styles,
	'type'             => 'image_radio',
	'section_class'    => 'style-floated-left bordered',
	'desc'             => __( 'Override static pages layout.', 'publisher' ),
	'deferred-options' => array(
		'callback' => 'publisher_layout_option_list',
		'args'     => array(
			TRUE
		),
	),
);
$fields['page_comments']              = array(
	'name'    => __( 'Show Page Comments', 'publisher' ),
	'id'      => 'page_comments',
	'desc'    => __( 'Select to show or hide comments in bottom of page content.', 'publisher' ),
	'type'    => 'select',
	'options' => array(
		'show-simple'    => __( 'Show, Normal Comments', 'publisher' ),
		'show-ajaxified' => __( 'Ajax - Show Comments Button', 'publisher' ),
		'hide'           => __( 'Hide', 'publisher' ),
	),
);
$fields['page_simple_in_pagebuilder'] = array(
	'name'    => __( 'Hide Page Title and Footer When Visual Composer Used', 'publisher' ),
	'id'      => 'page_simple_in_pagebuilder',
	'desc'    => __( 'By default theme removes page title and footer when you have used page builder in content of that but you can change this behaviour with this option. Also you can override this option in each page edit page.', 'publisher' ),
	'type'    => 'select',
	'options' => array(
		'hide' => __( 'Hide', 'publisher' ),
		'show' => __( 'Show, Title and Footer', 'publisher' ),
	),
);

/**
 * -> Attachment
 **/
$fields[]                            = array(
	'name'  => __( 'Attachment Pages', 'publisher' ),
	'type'  => 'group',
	'state' => 'close',
);
$fields['attachment_layout']         = array(
	'name'             => __( 'Attachment Page Layout', 'publisher' ),
	'id'               => 'attachment_layout',
	'style'            => $styles,
	'type'             => 'image_radio',
	'section_class'    => 'style-floated-left bordered',
	'desc'             => __( 'Change the layout of attachment pages', 'publisher' ),
	'deferred-options' => array(
		'callback' => 'publisher_layout_option_list',
		'args'     => array(
			TRUE
		),
	),
);
$fields['attachment_images_orderby'] = array(
	'name'    => __( 'Sort Images By', 'publisher' ),
	'id'      => 'attachment_images_orderby',
	'type'    => 'select',
	'desc'    => __( 'Change the order of images in attachment page.<br><code>Note:</code> The next/prev links will not work properly if you select the random order.', 'publisher' ),
	'options' => array(
		'menu_order' => __( '-- Default Order --', 'publisher' ),
		'title'      => __( 'Title', 'publisher' ),
		'date'       => __( 'Date', 'publisher' ),
		'modified'   => __( 'Modified Date', 'publisher' ),
		'rand'       => __( 'Random', 'publisher' ),
	)
);
$fields['attachment_images_order']   = array(
	'name'    => __( 'Order Images', 'publisher' ),
	'id'      => 'attachment_images_order',
	'type'    => 'select',
	'desc'    => __( 'Designates the ascending or descending order', 'publisher' ),
	'options' => array(
		'DESC' => __( 'Ascending - order from highest to lowest values.', 'publisher' ),
		'ASC'  => __( 'Descending - order from lowest to highest.', 'publisher' ),
	)
);

$fields[] = array(
	'type' => 'group_close',
);
$fields[] = array(
	'name'   => __( 'Archive Pages', 'publisher' ),
	'type'   => 'heading',
	'layout' => 'style-2',
);

/**
 * -> Categories Archive
 **/
$fields[]                         = array(
	'name'  => __( 'Categories Archive', 'publisher' ),
	'type'  => 'group',
	'state' => 'close',
);
$fields['cat_layout']             = array(
	'name'             => __( 'Categories Archive Page Layout', 'publisher' ),
	'id'               => 'cat_layout',
	'style'            => $styles,
	'type'             => 'image_radio',
	'section_class'    => 'style-floated-left bordered',
	'desc'             => __( 'Override categories archive pages layout. <br>This option can be overridden on each category.', 'publisher' ),
	'deferred-options' => array(
		'callback' => 'publisher_layout_option_list',
		'args'     => array(
			TRUE
		),
	),
);
$fields['cat_listing']            = array(
	'name'             => __( 'Categories Archive Posts Listing', 'publisher' ),
	'id'               => 'cat_listing',
	'style'            => $styles,
	'type'             => 'image_radio',
	'section_class'    => 'style-floated-left bordered',
	'desc'             => __( 'Override page listing for all categories. <br>This option can be overridden on each category.', 'publisher' ),
	'deferred-options' => array(
		'callback' => 'publisher_listing_option_list',
		'args'     => array(
			TRUE
		),
	),
);
$fields['cat_listing_excerpt']    = array(
	'name'    => __( 'Show Excerpt?', 'publisher' ),
	'id'      => 'cat_listing_excerpt',
	'type'    => 'select',
	'desc'    => __( 'Select show or hide post excerpt in listings with excerpt.', 'publisher' ),
	'options' => array(
		'default' => __( '-- Default --', 'publisher' ),
		'show'    => __( 'Yes, Show.', 'publisher' ),
		'hide'    => __( 'No.', 'publisher' ),
	)
);
$fields['cat_posts_count']        = array(
	'name' => __( 'Number Of Post To Show', 'publisher' ),
	'id'   => 'cat_posts_count',
	'desc' => sprintf( __( 'Enter number of posts to show in category archive pages. <br>Default: %s', 'publisher' ), get_option( 'posts_per_page' ) ),
	'type' => 'text',
);
$fields['cat_pagination_type']    = array(
	'name'             => __( 'Category pagination', 'publisher' ),
	'id'               => 'cat_pagination_type',
	'type'             => 'select',
	'desc'             => __( 'Select pagination of all categories.', 'publisher' ),
	'deferred-options' => array(
		'callback' => 'publisher_pagination_option_list',
		'args'     => array(
			TRUE
		),
	),
);
$fields['cat_archive_sub_cats']   = array(
	'name'    => __( 'Show sub categories in category archive title', 'publisher' ),
	'id'      => 'cat_archive_sub_cats',
	'type'    => 'select',
	'desc'    => __( 'Select show or hide category child categories in title of category archive page.', 'publisher' ),
	'options' => array(
		'show' => __( 'Yes, Show.', 'publisher' ),
		'hide' => __( 'No.', 'publisher' ),
	)
);
$fields[]                         = array(
	'name' => __( 'Category Slider', 'publisher' ),
	'type' => 'heading',
);
$fields['cat_slider']             = array(
	'name'             => __( 'Categories Slider Type', 'publisher' ),
	'id'               => 'cat_slider',
	'desc'             => __( 'Select categories top posts blocks or custom "Slider Revolution".', 'publisher' ),
	'style'            => $styles,
	'type'             => 'select',
	'deferred-options' => array(
		'callback' => 'publisher_slider_types_option_list',
	),
);
$fields['cat_top_posts']          = array(
	'name'             => __( 'Categories Top Posts style', 'publisher' ),
	'id'               => 'cat_top_posts',
	'desc'             => __( 'Select top posts style of all categories.', 'publisher' ),
	'style'            => $styles,
	'type'             => 'image_radio',
	'section_class'    => 'style-floated-left bordered',
	'deferred-options' => array(
		'callback' => 'publisher_topposts_option_list',
	),
	'show_on'          => array(
		array( 'cat_slider=custom-blocks' )
	),
);
$fields['cat_top_posts_gradient'] = array(
	'name'          => __( 'Top Posts Overlay Gradient', 'publisher' ),
	'id'            => 'cat_top_posts_gradient',
	'desc'          => __( 'Select top posts overlay style.', 'publisher' ),
	'style'         => $styles,
	'type'          => 'select',
	'section_class' => 'style-floated-left bordered',
	'options'       => array(
		'colored'      => __( 'Colored Gradient', 'publisher' ),
		'colored-anim' => __( 'Animated Gradient', 'publisher' ),
		'simple-gr'    => __( 'Simple Gradient', 'publisher' ),
		'simple'       => __( 'Simple', 'publisher' ),
	),
	'show_on'       => array(
		array( 'cat_slider=custom-blocks' )
	),
);
$fields['cat_rev_slider_item']    = array(
	'name'             => __( 'Categories Top Slider Revolution', 'publisher' ),
	'id'               => 'cat_rev_slider_item',
	'desc'             => __( 'Select a "Slider Revolution" slider for top of categories.', 'publisher' ),
	'style'            => $styles,
	'type'             => 'select',
	'section_class'    => 'style-floated-left bordered',
	'deferred-options' => array(
		'callback' => 'bf_deferred_option_get_rev_sliders',
		'args'     => array(
			array(
				'default' => TRUE
			)
		)
	),
	'show_on'          => array(
		array( 'cat_slider=rev_slider' )
	),
);


/**
 * -> Tags Archive
 **/
$fields[]                      = array(
	'name'  => __( 'Tags Archive', 'publisher' ),
	'type'  => 'group',
	'state' => 'close',
);
$fields['tag_layout']          = array(
	'name'             => __( 'Tags Archive Page Layout', 'publisher' ),
	'id'               => 'tag_layout',
	'style'            => $styles,
	'type'             => 'image_radio',
	'section_class'    => 'style-floated-left bordered',
	'desc'             => __( 'Override tags archive pages layout. <br>This option can be overridden on each tag.', 'publisher' ),
	'deferred-options' => array(
		'callback' => 'publisher_layout_option_list',
		'args'     => array(
			TRUE
		),
	),
);
$fields['tag_listing']         = array(
	'name'             => __( 'Tags Archive Posts Listing', 'publisher' ),
	'id'               => 'tag_listing',
	'style'            => $styles,
	'type'             => 'image_radio',
	'section_class'    => 'style-floated-left bordered',
	'desc'             => __( 'Override page listing for all tags. <br>This option can be overridden on each tag.', 'publisher' ),
	'deferred-options' => array(
		'callback' => 'publisher_listing_option_list',
		'args'     => array(
			TRUE
		),
	),
);
$fields['tag_listing_excerpt'] = array(
	'name'    => __( 'Show Excerpt?', 'publisher' ),
	'id'      => 'tag_listing_excerpt',
	'type'    => 'select',
	'desc'    => __( 'Select show or hide post excerpt in listings with excerpt.', 'publisher' ),
	'options' => array(
		'default' => __( '-- Default --', 'publisher' ),
		'show'    => __( 'Yes, Show.', 'publisher' ),
		'hide'    => __( 'No.', 'publisher' ),
	)
);
$fields['tag_posts_count']     = array(
	'name' => __( 'Number Of Post To Show', 'publisher' ),
	'id'   => 'tag_posts_count',
	'desc' => sprintf( __( 'Enter number of posts to show in category archive pages. <br>Default: %s', 'publisher' ), get_option( 'posts_per_page' ) ),
	'type' => 'text',
);
$fields['tag_pagination_type'] = array(
	'name'             => __( 'Tag pagination', 'publisher' ),
	'id'               => 'tag_pagination_type',
	'type'             => 'select',
	'desc'             => __( 'Select pagination of all tags.', 'publisher' ),
	'deferred-options' => array(
		'callback' => 'publisher_pagination_option_list',
		'args'     => array(
			TRUE
		),
	),
);

/**
 * -> Authors Archive
 **/
$fields[]                         = array(
	'name'  => __( 'Authors Archive', 'publisher' ),
	'type'  => 'group',
	'state' => 'close',
);
$fields['author_layout']          = array(
	'name'             => __( 'Authors Profile Page Layout', 'publisher' ),
	'id'               => 'author_layout',
	'style'            => $styles,
	'type'             => 'image_radio',
	'section_class'    => 'style-floated-left bordered',
	'desc'             => __( 'Override authors profile pages layout. <br>This option can be overridden on each author.', 'publisher' ),
	'deferred-options' => array(
		'callback' => 'publisher_layout_option_list',
		'args'     => array(
			TRUE
		),
	),
);
$fields['author_listing']         = array(
	'name'             => __( 'Authors Profile Posts Listing', 'publisher' ),
	'id'               => 'author_listing',
	'style'            => $styles,
	'type'             => 'image_radio',
	'section_class'    => 'style-floated-left bordered',
	'desc'             => __( 'Override page listing for all authors. <br>This option can be overridden on each author.', 'publisher' ),
	'deferred-options' => array(
		'callback' => 'publisher_listing_option_list',
		'args'     => array(
			TRUE
		),
	),
);
$fields['author_listing_excerpt'] = array(
	'name'    => __( 'Show Excerpt?', 'publisher' ),
	'id'      => 'author_listing_excerpt',
	'type'    => 'select',
	'desc'    => __( 'Select show or hide post excerpt in listings with excerpt.', 'publisher' ),
	'options' => array(
		'default' => __( '-- Default --', 'publisher' ),
		'show'    => __( 'Yes, Show.', 'publisher' ),
		'hide'    => __( 'No.', 'publisher' ),
	)
);
$fields['author_posts_count']     = array(
	'name' => __( 'Number Of Posts To Show', 'publisher' ),
	'id'   => 'author_posts_count',
	'desc' => sprintf( __( 'Leave this empty for default. <br>Default: %s', 'publisher' ), get_option( 'posts_per_page' ) ),
	'type' => 'text',
);
$fields['author_pagination_type'] = array(
	'name'             => __( 'Author pagination', 'publisher' ),
	'id'               => 'author_pagination_type',
	'type'             => 'select',
	'desc'             => __( 'Select pagination of all authors profile.', 'publisher' ),
	'deferred-options' => array(
		'callback' => 'publisher_pagination_option_list',
		'args'     => array(
			TRUE
		),
	),
);

/**
 * -> Search Results Archive
 **/
$fields[]                         = array(
	'name'  => __( 'Search Results Archive', 'publisher' ),
	'type'  => 'group',
	'state' => 'close',
);
$fields['search_layout']          = array(
	'name'             => __( 'Search Page Layout', 'publisher' ),
	'id'               => 'search_layout',
	'style'            => $styles,
	'type'             => 'image_radio',
	'section_class'    => 'style-floated-left bordered',
	'desc'             => __( 'Override search result pages layout.', 'publisher' ),
	'deferred-options' => array(
		'callback' => 'publisher_layout_option_list',
		'args'     => array(
			TRUE
		),
	),
);
$fields['search_listing']         = array(
	'name'             => __( 'Search Result Posts Listing', 'publisher' ),
	'id'               => 'search_listing',
	'style'            => $styles,
	'type'             => 'image_radio',
	'section_class'    => 'style-floated-left bordered',
	'desc'             => __( 'Override search result posts listing.', 'publisher' ),
	'deferred-options' => array(
		'callback' => 'publisher_listing_option_list',
		'args'     => array(
			TRUE
		),
	),
);
$fields['search_listing_excerpt'] = array(
	'name'    => __( 'Show Excerpt?', 'publisher' ),
	'id'      => 'search_listing_excerpt',
	'type'    => 'select',
	'desc'    => __( 'Select show or hide post excerpt in listings with excerpt.', 'publisher' ),
	'options' => array(
		'default' => __( '-- Default --', 'publisher' ),
		'show'    => __( 'Yes, Show.', 'publisher' ),
		'hide'    => __( 'No.', 'publisher' ),
	)
);
$fields['search_menu']            = array(
	'name'             => __( 'Search Page Navigation Menu', 'publisher' ),
	'id'               => 'search_menu',
	'desc'             => __( 'Select which menu displays on search results page.', 'publisher' ),
	'type'             => 'select',
	'deferred-options' => array(
		'callback' => 'bf_get_menus_option',
		'args'     => array(
			TRUE,
			__( '-- Default Main Navigation --', 'publisher' ),
		),
	),
);
$fields['search_result_content']  = array(
	'name'    => __( 'Result Content Type', 'publisher' ),
	'id'      => 'search_result_content',
	'type'    => 'select',
	'desc'    => __( 'Select the type of content to display in search results.', 'publisher' ),
	'options' => array(
		'post' => __( 'Only Posts', 'publisher' ),
		'page' => __( 'Only Pages', 'publisher' ),
		'both' => __( 'Posts and Pages', 'publisher' ),
	)
);
$fields['search_posts_count']     = array(
	'name' => __( 'Number Of Post To Show', 'publisher' ),
	'id'   => 'search_posts_count',
	'desc' => sprintf( __( 'Leave this empty for default. <br>Default: %s', 'publisher' ), get_option( 'posts_per_page' ) ),
	'type' => 'text',
);
$fields['search_pagination_type'] = array(
	'name'             => __( 'Search page pagination', 'publisher' ),
	'id'               => 'search_pagination_type',
	'type'             => 'select',
	'desc'             => __( 'Select pagination of search page.', 'publisher' ),
	'deferred-options' => array(
		'callback' => 'publisher_pagination_option_list',
		'args'     => array(
			TRUE
		),
	),
);


/**
 * -> 404 Page
 **/
$fields[]                   = array(
	'name'  => __( '404 Page', 'publisher' ),
	'type'  => 'group',
	'state' => 'close',
);
$fields['archive_404_menu'] = array(
	'name'             => __( '404 Page Navigation Menu', 'publisher' ),
	'id'               => 'archive_404_menu',
	'desc'             => __( 'Select which menu displays on 404 page.', 'publisher' ),
	'type'             => 'select',
	'deferred-options' => array(
		'callback' => 'bf_get_menus_option',
		'args'     => array(
			TRUE,
			__( '-- Default Main Navigation --', 'publisher' ),
		),
	),
);

$fields[] = array(
	'type' => 'group_close',
);
$fields[] = array(
	'name'   => __( 'Plugin Pages', 'publisher' ),
	'type'   => 'heading',
	'layout' => 'style-2',
);

/**
 * -> WooCommerce
 **/
$fields[]              = array(
	'name'  => __( 'WooCommerce - Shop', 'publisher' ),
	'type'  => 'group',
	'state' => 'close',
);
$fields['shop_layout'] = array(
	'name'             => __( 'Shop Layout', 'publisher' ),
	'id'               => 'shop_layout',
	'desc'             => __( 'Override shop pages layout with this option', 'publisher' ),
	'type'             => 'image_radio',
	'style'            => $styles,
	'section_class'    => 'style-floated-left bordered',
	'deferred-options' => array(
		'callback' => 'publisher_layout_option_list',
		'args'     => array(
			TRUE
		),
	),
);


/**
 * -> bbPress
 **/
$fields[]                 = array(
	'name'  => __( 'bbPress - Forums', 'publisher' ),
	'type'  => 'group',
	'state' => 'close',
);
$fields['bbpress_layout'] = array(
	'name'             => __( 'bbPress Forums Layout', 'publisher' ),
	'id'               => 'bbpress_layout',
	'desc'             => __( 'Override bbPress forum pages layout with this option', 'publisher' ),
	'type'             => 'image_radio',
	'style'            => $styles,
	'section_class'    => 'style-floated-left bordered',
	'deferred-options' => array(
		'callback' => 'publisher_layout_option_list',
		'args'     => array(
			TRUE
		),
	),
);


/**
 * => Header Options
 */
$fields[] = array(
	'name' => __( 'Header', 'publisher' ),
	'id'   => 'header_settings',
	'type' => 'tab',
	'icon' => 'bsai-header'
);

$fields[]                       = array(
	'name'  => __( 'Header', 'publisher' ),
	'type'  => 'group',
	'state' => 'open',
);
$fields['header_layout']        = array(
	'name'    => __( 'Header Layout', 'publisher' ),
	'id'      => 'header_layout',
	'desc'    => __( 'Select header layout.', 'publisher' ),
	'style'   => $styles,
	'type'    => 'select',
	'options' => array(
		'boxed'      => __( 'Boxed header', 'publisher' ),
		'full-width' => __( 'Full width header (Boxed Content)', 'publisher' ),
		'stretched'  => __( 'Full width header (Stretched Content)', 'publisher' ),
	),
);
$fields['header_style']         = array(
	'name'             => __( 'Header Style', 'publisher' ),
	'id'               => 'header_style',
	'desc'             => __( 'Select header style.', 'publisher' ),
	'style'            => $styles,
	'type'             => 'image_radio',
	'section_class'    => 'style-floated-left bordered',
	'deferred-options' => array(
		'callback' => 'publisher_header_style_option_list',
		'args'     => array(
			FALSE,
			FALSE,
		),
	),
);
$fields['menu_sticky']          = array(
	'name'    => __( 'Main Menu Sticky', 'publisher' ),
	'id'      => 'menu_sticky',
	'desc'    => __( 'Enable or disable sticky effect for main menu.', 'publisher' ),
	'style'   => $styles,
	'type'    => 'select',
	'options' => array(
		'smart'     => __( 'Smart Sticky', 'publisher' ),
		'sticky'    => __( 'Simple Sticky', 'publisher' ),
		'no-sticky' => __( 'No Sticky', 'publisher' ),
	),
);
$fields['menu_show_search_box'] = array(
	'name'    => __( 'Show Search Box In Menu', 'publisher' ),
	'id'      => 'menu_show_search_box',
	'desc'    => __( 'Chose to show or hide search form in menu.', 'publisher' ),
	'style'   => $styles,
	'type'    => 'select',
	'options' => array(
		'show' => __( 'Show', 'publisher' ),
		'hide' => __( 'Hide', 'publisher' ),
	),
);
$fields['menu_search_type']     = array(
	'name'    => __( 'Live Search Box?', 'publisher' ),
	'id'      => 'menu_search_type',
	'desc'    => __( 'With enabling this options results of search will load with ajax and shown in header search box.', 'publisher' ),
	'type'    => 'select',
	'options' => array(
		'ajax'   => __( 'Live Search - Ajax', 'publisher' ),
		'simple' => __( 'Simple Form', 'publisher' ),
	),
);
$fields['menu_show_shop_cart']  = array(
	'name'    => __( 'Show Shopping Cart Icon in Menu', 'publisher' ),
	'id'      => 'menu_show_shop_cart',
	'desc'    => __( 'Chose to show or hide shopping cart icon in menu.', 'publisher' ),
	'style'   => $styles,
	'type'    => 'select',
	'options' => array(
		'show' => __( 'Show', 'publisher' ),
		'hide' => __( 'Hide', 'publisher' ),
	),
);


/**
 * -> Logo
 */
$fields[]                    = array(
	'name'  => __( 'Logo', 'publisher' ),
	'type'  => 'group',
	'state' => 'open',
);
$fields['logo_text']         = array(
	'name' => __( 'Text Logo', 'publisher' ),
	'id'   => 'logo_text',
	'desc' => wp_kses( __( 'Enter your site name here for logo text.<br> <code>Tip:</code> Enter site tagline here to add this to logo alt attribute.', 'publisher' ), bf_trans_allowed_html() ),
	'type' => 'text',
);
$fields['logo_image']        = array(
	'name'         => __( 'Site Logo', 'publisher' ),
	'id'           => 'logo_image',
	'desc'         => __( 'By default, a text-based logo is created using your site title. But you can also upload an image-based logo here.', 'publisher' ),
	'type'         => 'media_image',
	'media_title'  => __( 'Select or Upload Logo', 'publisher' ),
	'media_button' => __( 'Select Image', 'publisher' ),
	'upload_label' => __( 'Upload Logo', 'publisher' ),
	'remove_label' => __( 'Remove', 'publisher' ),
);
$fields['logo_image_retina'] = array(
	'name'         => __( 'Site Retina Logo (2x)', 'publisher' ),
	'id'           => 'logo_image_retina',
	'desc'         => __( 'If you want to upload a Retina Image, It\'s Image Size should be exactly double in compare with your normal Logo.', 'publisher' ),
	'type'         => 'media_image',
	'media_title'  => __( 'Select or Upload Retina Logo', 'publisher' ),
	'media_button' => __( 'Select @2x Image', 'publisher' ),
	'upload_label' => __( 'Upload @2x Logo', 'publisher' ),
	'remove_label' => __( 'Remove', 'publisher' ),
);


/**
 * -> Responsive Header
 */
$fields[]                         = array(
	'name'  => __( 'Responsive Header', 'publisher' ),
	'type'  => 'group',
	'state' => 'open',
);
$fields['resp_logo_image']        = array(
	'name'         => __( 'Responsive Header Logo', 'publisher' ),
	'id'           => 'resp_logo_image',
	'desc'         => __( 'By default, a text-based logo is created using your site title. But you can also upload an image-based logo here.', 'publisher' ),
	'type'         => 'media_image',
	'media_title'  => __( 'Select or Upload Logo', 'publisher' ),
	'media_button' => __( 'Select Image', 'publisher' ),
	'upload_label' => __( 'Upload Logo', 'publisher' ),
	'remove_label' => __( 'Remove', 'publisher' ),
);
$fields['resp_logo_image_retina'] = array(
	'name'         => __( 'Responsive Header Retina Logo(2x)', 'publisher' ),
	'id'           => 'resp_logo_image_retina',
	'desc'         => __( 'If you want to upload a Retina Image, It\'s Image Size should be exactly double in compare with your normal Logo.', 'publisher' ),
	'type'         => 'media_image',
	'media_title'  => __( 'Select or Upload Retina Logo', 'publisher' ),
	'media_button' => __( 'Select @2x Image', 'publisher' ),
	'upload_label' => __( 'Upload @2x Logo', 'publisher' ),
	'remove_label' => __( 'Remove', 'publisher' ),
);


/**
 * -> Topbar
 */
$fields[]                           = array(
	'name'  => __( 'Top Bar', 'publisher' ),
	'type'  => 'group',
	'state' => 'open',
);
$fields['topbar_style']             = array(
	'name'          => __( 'Show Top Bar', 'publisher' ),
	'id'            => 'topbar_style',
	'desc'          => __( 'Select top bar style.', 'publisher' ),
	'style'         => $styles,
	'type'          => 'select',
	'section_class' => 'style-floated-left bordered',
	'options'       => array(
		'hidden'  => __( 'Hide Top Bar', 'publisher' ),
		'style-1' => __( 'Style 1', 'publisher' ),
		'style-2' => __( 'Style 2', 'publisher' ),
	),
);
$fields['topbar_show_date']         = array(
	'name'    => __( 'Show Date In Topbar', 'publisher' ),
	'id'      => 'topbar_show_date',
	'desc'    => __( 'Chose to show or hide date in top bar.', 'publisher' ),
	'style'   => $styles,
	'type'    => 'select',
	'options' => array(
		'show' => __( 'Show', 'publisher' ),
		'hide' => __( 'Hide', 'publisher' ),
	),
);
$fields['topbar_show_login']        = array(
	'name'    => __( 'Show Login Button in Topbar', 'publisher' ),
	'id'      => 'topbar_show_login',
	'desc'    => __( 'Chose to show or hide login button in topbar.', 'publisher' ),
	'style'   => $styles,
	'type'    => 'select',
	'options' => array(
		'show' => __( 'Show', 'publisher' ),
		'hide' => __( 'Hide', 'publisher' ),
	),
);
$fields['topbar_show_social_icons'] = array(
	'name'    => __( 'Show Social Icons In Topbar', 'publisher' ),
	'id'      => 'topbar_show_social_icons',
	'desc'    => __( 'Chose to show or hide social icons in header.', 'publisher' ),
	'style'   => $styles,
	'type'    => 'select',
	'options' => array(
		'show' => __( 'Show', 'publisher' ),
		'hide' => __( 'Hide', 'publisher' ),
	),
);
$fields['topbar_show_social_icons'] = array(
	'name'    => __( 'Show Social Icons In Topbar', 'publisher' ),
	'id'      => 'topbar_show_social_icons',
	'desc'    => __( 'Chose to show or hide social icons in header.', 'publisher' ),
	'type'    => 'select',
	'options' => array(
		'show' => __( 'Show', 'publisher' ),
		'hide' => __( 'Hide', 'publisher' ),
	),
);
if ( class_exists( 'Better_Social_Counter' ) && class_exists( 'Better_Social_Counter_Data_Manager' ) ) {
	$fields['topbar_socials'] = array(
		'name'             => __( 'Sort and Active Sites', 'publisher' ),
		'id'               => 'topbar_socials',
		'desc'             => sprintf( __( 'Select & sort sites you will to show them in topbar. <br><br>
For activating site you should enter your information in <a href="%s" target="_blank">Better Social Counter</a> Panel.
', 'publisher' ), get_admin_url( NULL, 'admin.php?page=better-studio/better-social-counter' ) ),
		'type'             => 'sorter_checkbox',
		'deferred-options' => array(
			'callback' => 'publisher_social_counter_options_list_callback',
		),
		'section_class'    => 'better-social-counter-sorter',
	);
} else {
	$fields['social-icons-help'] = array(
		'name'          => __( 'Social Icons Instructions', 'publisher' ),
		'id'            => 'social-icons-help',
		'type'          => 'info',
		'state'         => 'open',
		'std'           => sprintf( __( '<p>For adding social icons in top bar you should first install and active <a href="%s">Better Social Counter</a> plugin.</p>', 'publisher' ), get_admin_url( NULL, 'admin.php?page=bs-product-pages-install-plugin' ) ),
		'info-type'     => 'help',
		'section_class' => 'widefat',
	);
}


/**
 * -> Header Padding
 */
$fields[]                        = array(
	'name'  => __( 'Header Padding', 'publisher' ),
	'type'  => 'group',
	'state' => 'close',
);
$fields[]                        = array(
	'name'          => __( 'Warning', 'publisher' ),
	'id'            => 'header-padding-help',
	'type'          => 'info',
	'std'           => __( '<p>Please note following settings <strong>not works</strong> for <strong>Header 5, 6 and 8</strong></p>', 'publisher' ),
	'state'         => 'open',
	'info-type'     => 'warning',
	'section_class' => 'widefat',
);
$fields['header_top_padding']    = array(
	'name'   => __( 'Header Top Padding', 'publisher' ),
	'id'     => 'header_top_padding',
	'suffix' => __( 'Pixel', 'publisher' ),
	'desc'   => __( 'In pixels without px, ex: 20.', 'publisher' ),
	'type'   => 'text',
	'style'  => $styles,
	'ltr'    => TRUE,
);
$fields['header_bottom_padding'] = array(
	'name'   => __( 'Header Bottom Padding', 'publisher' ),
	'id'     => 'header_bottom_padding',
	'suffix' => __( 'Pixel', 'publisher' ),
	'desc'   => __( 'In pixels without ex: 20.', 'publisher' ),
	'type'   => 'text',
	'style'  => $styles,
	'ltr'    => TRUE,
);


/**
 * =>Share Box
 */
$fields[]                      = array(
	'name' => __( 'Share Box', 'publisher' ),
	'type' => 'tab',
	'icon' => 'bsai-share-alt',
	'id'   => 'share-box-options',
);
$fields['social_share_single'] = array(
	'name'    => __( 'Show Share Box In Single', 'publisher' ),
	'desc'    => __( 'Enabling this will adds share links in posts single page. You can change design and social sites will following options.', 'publisher' ),
	'id'      => 'social_share_single',
	'type'    => 'select',
	'options' => array(
		'show'       => __( 'Show - Top', 'publisher' ),
		'bottom'     => __( 'Show - Bottom', 'publisher' ),
		'top-bottom' => __( 'Show - Top & Bottom', 'publisher' ),
		'hide'       => __( 'Hide', 'publisher' ),
	),
);
$fields['social_share_page']   = array(
	'name'    => __( 'Show Share Box In Pages', 'publisher' ),
	'desc'    => __( 'Enabling this will adds share links in pages. You can change design and social sites will following options.', 'publisher' ),
	'id'      => 'social_share_page',
	'type'    => 'select',
	'options' => array(
		'show' => __( 'Show', 'publisher' ),
		'hide' => __( 'Hide', 'publisher' ),
	),
);
$fields['social_share_count']  = array(
	'name'    => __( 'Show share count?', 'publisher' ),
	'desc'    => __( 'Enabling this will shows post share count in share box.', 'publisher' ),
	'id'      => 'social_share_count',
	'type'    => 'select',
	'options' => array(
		'total'          => __( 'Show, Total share count', 'publisher' ),
		'total-and-site' => __( 'Show, Total share count + Each site count', 'publisher' ),
		'hide'           => __( 'No, Don\'t show.', 'publisher' ),
	),
);
$fields['social_share_sites']  = array(
	'name'             => __( 'Drag and Drop To Sort The Items', 'publisher' ),
	'id'               => 'social_share_sites',
	'desc'             => __( 'Select active social share links and sort them.', 'publisher' ),
	'type'             => 'sorter_checkbox',
	'deferred-options' => array(
		'callback' => 'publisher_social_share_option_list',
	),
	'section_class'    => 'bs-theme-social-share-sorter',
);


/**
 * =>Breadcrumb
 */
$fields[]                             = array(
	'name' => __( 'Breadcrumb', 'publisher' ),
	'type' => 'tab',
	'icon' => 'bsai-link',
	'id'   => 'breadcrumb-options',
);
$fields['breadcrumb']                 = array(
	'name'    => __( 'Show Breadcrumb?', 'publisher' ),
	'desc'    => __( 'Enables you to show the current page and previous pages of this page in header.', 'publisher' ),
	'id'      => 'breadcrumb',
	'type'    => 'select',
	'options' => array(
		'show' => __( 'Show', 'publisher' ),
		'hide' => __( 'Hide', 'publisher' ),
	),
);
$fields['breadcrumb_post_categories'] = array(
	'name'    => __( 'Show post categories?', 'publisher' ),
	'desc'    => __( 'The post categories will shown in breadcrumb before the post.', 'publisher' ),
	'id'      => 'breadcrumb_post_categories',
	'type'    => 'select',
	'options' => array(
		'show' => __( 'Show', 'publisher' ),
		'hide' => __( 'Hide', 'publisher' ),
	),
	'show_on' => array(
		array( 'breadcrumb=show' )
	)
);
$fields['breadcrumb_date_in_post']    = array(
	'name'    => __( 'Show post date in breadcrumb?', 'publisher' ),
	'desc'    => __( 'If your permalink structure has the date then this option will shows the date of post in permalink.', 'publisher' ),
	'id'      => 'breadcrumb_date_in_post',
	'type'    => 'select',
	'options' => array(
		'show' => __( 'Show', 'publisher' ),
		'hide' => __( 'Hide', 'publisher' ),
	),
	'show_on' => array(
		array( 'breadcrumb=show' )
	)
);


/**
 * => Footer Options
 */
$fields[] = array(
	'name' => __( 'Footer', 'publisher' ),
	'id'   => 'footer_settings',
	'type' => 'tab',
	'icon' => 'bsai-footer'
);

$fields['footer_copy1']       = array(
	'name' => __( 'Footer Left Copyright Text', 'publisher' ),
	'desc' => __( 'Enter the copy right text of footer.<br>
You can use following pattern to make replace them with real data:<br><br>
<strong>%%year%%</strong>: Will replcae with current year, ex: 2015<br>
<strong>%%date%%</strong>: Will replcae with current year, ex: 2015<br>
<strong>%%sitename%%</strong>: Will replace with site title.<br>
<strong>%%title%%</strong>: Will replace with site title.<br>
<strong>%%siteurl%%</strong>: Will replace with site homepage url.', 'publisher' ),
	'id'   => 'footer_copy1',
	'type' => 'textarea',
);
$fields['footer_copy2']       = array(
	'name' => __( 'Footer Right Copyright Text', 'publisher' ),
	'desc' => __( 'Enter the copy right text of footer.<br>
You can use following pattern to make replace them with real data:<br><br>
<strong>%%year%%</strong>: Will replcae with current year, ex: 2015<br>
<strong>%%date%%</strong>: Will replcae with current year, ex: 2015<br>
<strong>%%sitename%%</strong>: Will replace with site title.<br>
<strong>%%title%%</strong>: Will replace with site title.<br>
<strong>%%siteurl%%</strong>: Will replace with site homepage url.', 'publisher' ),
	'id'   => 'footer_copy2',
	'type' => 'textarea',
);
$fields['footer_widgets']     = array(
	'name'    => __( 'Show Footer Widgets', 'publisher' ),
	'desc'    => __( 'Choose to show or hide widgets in footer.', 'publisher' ),
	'id'      => 'footer_widgets',
	'style'   => $styles,
	'type'    => 'select',
	'options' => array(
		'4-column' => __( '4 column widgets', 'publisher' ),
		'3-column' => __( '3 column widgets', 'publisher' ),
		'hide'     => __( '-- Hide --', 'publisher' ),
	)
);
$fields[]                     = array(
	'name'  => __( 'Footer Instagram', 'publisher' ),
	'type'  => 'group',
	'state' => 'open',
);
$fields['footer_social_feed'] = array(
	'name'    => __( 'Footer Instagram Style', 'publisher' ),
	'desc'    => __( 'Choose to show or hide instagram in footer.', 'publisher' ),
	'id'      => 'footer_social_feed',
	'style'   => $styles,
	'type'    => 'select',
	'options' => array(
		'hide'    => __( '-- Hide --', 'publisher' ),
		'style-1' => __( 'Style 1', 'publisher' ),
		'style-2' => __( 'Style 2', 'publisher' ),
		'style-3' => __( 'Style 3', 'publisher' ),
	)
);
$fields['footer_instagram']   = array(
	'name' => __( 'Instagram Feeds Username', 'publisher' ),
	'desc' => __( 'Enter your instagram user name if you will to show instagram feed in footer.', 'publisher' ),
	'id'   => 'footer_instagram',
	'ltr'  => TRUE,
	'type' => 'text',
);


$fields[]                = array(
	'name'  => __( 'Footer Social Icons', 'publisher' ),
	'type'  => 'group',
	'state' => 'open',
);
$fields['footer_social'] = array(
	'name'    => __( 'Show Footer Social Icons', 'publisher' ),
	'desc'    => __( 'Chose to show or hide social icons in footer..', 'publisher' ),
	'id'      => 'footer_social',
	'style'   => $styles,
	'type'    => 'select',
	'options' => array(
		'show' => __( 'Show', 'publisher' ),
		'hide' => __( 'Hide', 'publisher' ),
	)
);

if ( class_exists( 'Better_Social_Counter' ) && class_exists( 'Better_Social_Counter_Data_Manager' ) ) {
	$fields['footer_social_sites'] = array(
		'name'             => __( 'Sort and Active Sites', 'publisher' ),
		'id'               => 'footer_social_sites',
		'desc'             =>
			wp_kses( sprintf( __( 'Select sites you will to show them in footer and sort them. <br><br>
For activating sites you should enter your information in <a href="%s" target="_blank">Better Social Counter</a> Panel.
', 'publisher' ), get_admin_url( NULL, 'admin.php?page=better-studio/better-social-counter' ) ), bf_trans_allowed_html() ),
		'type'             => 'sorter_checkbox',
		'deferred-options' => array(
			'callback' => 'publisher_social_counter_options_list_callback',
		),
		'section_class'    => 'better-social-counter-sorter',
	);
} else {
	$fields['footer-social-icons-help'] = array(
		'name'          => __( 'Social Icons Instructions', 'publisher' ),
		'id'            => 'footer-social-icons-help',
		'type'          => 'info',
		'std'           => sprintf( __( '<p>For adding social icons in top bar you should first install and active <a href="%s">Better Social Counter</a> plugin.</p>', 'publisher' ), get_admin_url( NULL, 'admin.php?page=bs-product-pages-install-plugin' ) ),
		'state'         => 'open',
		'info-type'     => 'help',
		'section_class' => 'widefat',
	);
}


/**
 * => Color Options
 */
$fields[]                       = array(
	'name'     => __( 'Color & Style', 'publisher' ),
	'id'       => 'color_settings',
	'type'     => 'tab',
	'icon'     => 'bsai-paint',
	'ajax-tab' => TRUE
);
$fields['reset_color_settings'] = array(
	'name'           => __( 'Reset Color Settings', 'publisher' ),
	'id'             => 'reset_color_settings',
	'type'           => 'ajax_action',
	'button-name'    => '<i class="fa fa-refresh"></i> ' . __( 'Reset Color Settings', 'publisher' ),
	'callback'       => 'Publisher::reset_color_options',
	'confirm'        => __( 'Are you sure for resetting all color settings?', 'publisher' ),
	'desc'           => __( 'This allows you to reset all color settings to default.', 'publisher' ),
	'ajax-tab-field' => 'color_settings',
);
$fields[]                       = array(
	'name'           => __( 'General Colors', 'publisher' ),
	'type'           => 'group',
	'state'          => 'open',
	'ajax-tab-field' => 'color_settings',
);
$fields['theme_color']          = array(
	'name'           => __( 'Theme Highlight Color', 'publisher' ),
	'id'             => 'theme_color',
	'type'           => 'color',
	'style'          => $styles,
	'reset-color'    => TRUE, // to reset in panel
	'desc'           => __( 'It is the contrast color for the theme. It will be used for all links, menu, category overlays, main page and many contrasting elements.', 'publisher' ),
	'ajax-tab-field' => 'color_settings',
);
$fields['site_bg_color']        = array(
	'name'           => __( 'Site Background Color', 'publisher' ),
	'id'             => 'site_bg_color',
	'type'           => 'color',
	'style'          => $styles,
	'reset-color'    => TRUE, // to reset in panel
	'desc'           => __( 'Setting a body background image below will override it.', 'publisher' ),
	'ajax-tab-field' => 'color_settings',
);
$fields['site_bg_image']        = array(
	'name'           => __( 'Body Background Image', 'publisher' ),
	'id'             => 'site_bg_image',
	'type'           => 'background_image',
	'style'          => $styles,
	'reset-color'    => TRUE, // to reset in panel
	'upload_label'   => __( 'Upload Image', 'publisher' ),
	'desc'           => __( 'Use light patterns in non-boxed layout. For patterns, use a repeating background. Use photo to fully cover the background with an image. Note that it will override the background color option.', 'publisher' ),
	'ajax-tab-field' => 'color_settings',
);


/**
 * -> Topbar Colors
 */
$fields[]                     = array(
	'name'           => __( 'Topbar', 'publisher' ),
	'type'           => 'group',
	'state'          => 'open',
	'ajax-tab-field' => 'color_settings',
);
$fields['topbar_date_bg']     = array(
	'name'           => __( 'Topbar Date Background Color', 'publisher' ),
	'id'             => 'topbar_date_bg',
	'type'           => 'color',
	'style'          => $styles,
	'reset-color'    => TRUE, // to reset in panel
	'ajax-tab-field' => 'color_settings',
);
$fields['topbar_date_color']  = array(
	'name'           => __( 'Topbar Date Text Color', 'publisher' ),
	'id'             => 'topbar_date_color',
	'style'          => $styles,
	'type'           => 'color',
	'reset-color'    => TRUE, // to reset in panel
	'ajax-tab-field' => 'color_settings',
);
$fields['topbar_text_color']  = array(
	'name'           => __( 'Topbar Text Color', 'publisher' ),
	'id'             => 'topbar_text_color',
	'style'          => $styles,
	'type'           => 'color',
	'reset-color'    => TRUE, // to reset in panel
	'ajax-tab-field' => 'color_settings',
);
$fields['topbar_text_hcolor'] = array(
	'name'           => __( 'Topbar Text Hover Color', 'publisher' ),
	'id'             => 'topbar_text_hcolor',
	'style'          => $styles,
	'type'           => 'color',
	'reset-color'    => TRUE, // to reset in panel
	'ajax-tab-field' => 'color_settings',
);

$fields['topbar_bg_color']     = array(
	'name'           => __( 'Topbar Background Color', 'publisher' ),
	'id'             => 'topbar_bg_color',
	'style'          => $styles,
	'type'           => 'color',
	'reset-color'    => TRUE, // to reset in panel
	'ajax-tab-field' => 'color_settings',
);
$fields['topbar_border_color'] = array(
	'name'           => __( 'Topbar Bottom Line Color', 'publisher' ),
	'id'             => 'topbar_border_color',
	'type'           => 'color',
	'style'          => $styles,
	'reset-color'    => TRUE, // to reset in panel
	'ajax-tab-field' => 'color_settings',
);

$fields['topbar_icon_text_color']  = array(
	'name'           => __( 'Topbar Social Icon Text Color', 'publisher' ),
	'id'             => 'topbar_icon_text_color',
	'type'           => 'color',
	'style'          => $styles,
	'reset-color'    => TRUE, // to reset in panel
	'ajax-tab-field' => 'color_settings',
);
$fields['topbar_icon_text_hcolor'] = array(
	'name'           => __( 'Topbar Social Icon Text Hover Color', 'publisher' ),
	'id'             => 'topbar_icon_text_hcolor',
	'type'           => 'color',
	'style'          => $styles,
	'reset-color'    => TRUE, // to reset in panel
	'ajax-tab-field' => 'color_settings',
);
$fields['topbar_icon_bg']          = array(
	'name'           => __( 'Topbar Social Icon Background', 'publisher' ),
	'id'             => 'topbar_icon_bg',
	'type'           => 'color',
	'style'          => $styles,
	'reset-color'    => TRUE, // to reset in panel
	'ajax-tab-field' => 'color_settings',
);
$fields['topbar_icon_bg_hover']    = array(
	'name'           => __( 'Topbar Social Icon Mouse Hover Background', 'publisher' ),
	'id'             => 'topbar_icon_bg_hover',
	'type'           => 'color',
	'style'          => $styles,
	'reset-color'    => TRUE, // to reset in panel
	'ajax-tab-field' => 'color_settings',
);


/**
 * -> Header Colors
 */
$fields[]                                = array(
	'name'           => __( 'Header', 'publisher' ),
	'type'           => 'group',
	'state'          => 'open',
	'ajax-tab-field' => 'color_settings',
);
$fields['header_top_border']             = array(
	'name'           => __( 'Show header top line?', 'publisher' ),
	'id'             => 'header_top_border',
	'type'           => 'switch',
	'style'          => $styles,
	'on-label'       => __( 'Yes', 'publisher' ),
	'off-label'      => __( 'No', 'publisher' ),
	'desc'           => __( 'You can hide header border top line with this option', 'publisher' ),
	'ajax-tab-field' => 'color_settings',
);
$fields['header_top_border_color']       = array(
	'name'           => __( 'Header Top Line Color', 'publisher' ),
	'id'             => 'header_top_border_color',
	'type'           => 'color',
	'style'          => $styles,
	'reset-color'    => TRUE, // to reset in panel
	'desc'           => __( 'You can change header top line color with this option.', 'publisher' ),
	'ajax-tab-field' => 'color_settings',
);
$fields['header_menu_btop_color']        = array(
	'name'           => __( 'Main Menu Top Line Color', 'publisher' ),
	'id'             => 'header_menu_btop_color',
	'type'           => 'color',
	'style'          => $styles,
	'reset-color'    => TRUE, // to reset in panel
	'desc'           => __( 'You can change header top & bottom line color with this option.', 'publisher' ),
	'ajax-tab-field' => 'color_settings',
);
$fields['header_menu_st1_bbottom_color'] = array(
	'name'           => __( 'Main Menu Bottom Line Color', 'publisher' ),
	'id'             => 'header_menu_st1_bbottom_color',
	'type'           => 'color',
	'style'          => $styles,
	'show_on'        => array(
		array( 'header_style=style-1' )
	),
	'reset-color'    => TRUE, // to reset in panel
	'desc'           => __( 'You can change header bottom line color with this option.', 'publisher' ),
	'ajax-tab-field' => 'color_settings',
);
$fields['header_menu_st2_bbottom_color'] = array(
	'name'           => __( 'Main Menu Bottom Line Color', 'publisher' ),
	'id'             => 'header_menu_st2_bbottom_color',
	'type'           => 'color',
	'style'          => $styles,
	'show_on'        => array(
		array( 'header_style=style-2' )
	),
	'reset-color'    => TRUE, // to reset in panel
	'desc'           => __( 'You can change header bottom line color with this option.', 'publisher' ),
	'ajax-tab-field' => 'color_settings',
);

$fields['header_menu_st3_bbottom_color'] = array(
	'name'           => __( 'Header Bottom Line Color', 'publisher' ),
	'id'             => 'header_menu_st3_bbottom_color',
	'type'           => 'color',
	'style'          => $styles,
	'show_on'        => array(
		array( 'header_style=style-3' )
	),
	'reset-color'    => TRUE, // to reset in panel
	'desc'           => __( 'You can change header 4 bottom line color with this option.', 'publisher' ),
	'ajax-tab-field' => 'color_settings',
);
$fields['header_menu_st4_bbottom_color'] = array(
	'name'           => __( 'Header Bottom Line Color', 'publisher' ),
	'id'             => 'header_menu_st4_bbottom_color',
	'type'           => 'color',
	'style'          => $styles,
	'show_on'        => array(
		array( 'header_style=style-4' )
	),
	'reset-color'    => TRUE, // to reset in panel
	'desc'           => __( 'You can change header 4 bottom line color with this option.', 'publisher' ),
	'ajax-tab-field' => 'color_settings',
);
$fields['header_menu_st5_bbottom_color'] = array(
	'name'           => __( 'Header 5 Bottom Line Color', 'publisher' ),
	'id'             => 'header_menu_st5_bbottom_color',
	'type'           => 'color',
	'style'          => $styles,
	'show_on'        => array(
		array( 'header_style=style-5' )
	),
	'reset-color'    => TRUE, // to reset in panel
	'desc'           => __( 'You can change header 5 bottom line color with this option.', 'publisher' ),
	'ajax-tab-field' => 'color_settings',
);
$fields['header_menu_st6_bbottom_color'] = array(
	'name'           => __( '6 Header Menu Bottom Line Color', 'publisher' ),
	'id'             => 'header_menu_st6_bbottom_color',
	'type'           => 'color',
	'style'          => $styles,
	'show_on'        => array(
		array( 'header_style=style-6' )
	),
	'reset-color'    => TRUE, // to reset in panel
	'desc'           => __( 'You can change header 6 bottom line color with this option.', 'publisher' ),
	'ajax-tab-field' => 'color_settings',
);
$fields['header_menu_st7_bbottom_color'] = array(
	'name'           => __( 'Header Bottom Line Color', 'publisher' ),
	'id'             => 'header_menu_st7_bbottom_color',
	'type'           => 'color',
	'style'          => $styles,
	'show_on'        => array(
		array( 'header_style=style-7' )
	),
	'reset-color'    => TRUE, // to reset in panel
	'desc'           => __( 'You can change header 7 bottom line color with this option.', 'publisher' ),
	'ajax-tab-field' => 'color_settings',
);
$fields['header_menu_st8_bbottom_color'] = array(
	'name'           => __( 'Header Bottom Line Color', 'publisher' ),
	'id'             => 'header_menu_st8_bbottom_color',
	'type'           => 'color',
	'style'          => $styles,
	'show_on'        => array(
		array( 'header_style=style-8' )
	),
	'reset-color'    => TRUE, // to reset in panel
	'desc'           => __( 'You can change header 8 bottom line color with this option.', 'publisher' ),
	'ajax-tab-field' => 'color_settings',
);

$fields['header_menu_text_color']       = array(
	'name'           => __( 'Main Menu Text Color', 'publisher' ),
	'id'             => 'header_menu_text_color',
	'type'           => 'color',
	'style'          => $styles,
	'reset-color'    => TRUE, // to reset in panel
	'desc'           => __( 'You can change main menu text color with this option.', 'publisher' ),
	'ajax-tab-field' => 'color_settings',
);
$fields['header_menu_text_h_color']     = array(
	'name'           => __( 'Main Menu Text Hover Color', 'publisher' ),
	'id'             => 'header_menu_text_h_color',
	'type'           => 'color',
	'style'          => $styles,
	'reset-color'    => TRUE, // to reset in panel
	'desc'           => __( 'You can change main menu hover color with this option.', 'publisher' ),
	'ajax-tab-field' => 'color_settings',
);
$fields['header_menu_sub_text_h_color'] = array(
	'name'           => __( 'Main Menu -> Sub Menu -> Hover Color', 'publisher' ),
	'id'             => 'header_menu_sub_text_h_color',
	'type'           => 'color',
	'style'          => $styles,
	'reset-color'    => TRUE, // to reset in panel
	'desc'           => __( 'You can change "main menu -> sub menu -> hover color" with this option.', 'publisher' ),
	'ajax-tab-field' => 'color_settings',
);
$fields['header_menu_bg_color']         = array(
	'name'           => __( 'Main Menu Background Color', 'publisher' ),
	'id'             => 'header_menu_bg_color',
	'type'           => 'color',
	'style'          => $styles,
	'reset-color'    => TRUE, // to reset in panel
	'desc'           => __( 'You can change main menu background color with this option.', 'publisher' ),
	'ajax-tab-field' => 'color_settings',
);
$fields['resp_scheme']                  = array(
	'name'           => __( 'Responsive Header Color Scheme', 'publisher' ),
	'id'             => 'resp_scheme',
	'desc'           => __( 'Select responsive header color scheme.', 'publisher' ),
	'style'          => $styles,
	'reset-color'    => TRUE, // to reset in panel
	'type'           => 'image_select',
	'section_class'  => 'style-floated-left bordered',
	'options'        => array(
		'dark'  => array(
			'img'   => bf_get_theme_uri( 'images/options/resp-header-dark.png' ),
			'label' => __( 'Dark Style', 'publisher' ),
		),
		'light' => array(
			'img'   => bf_get_theme_uri( 'images/options/resp-header-light.png' ),
			'label' => __( 'Light Style', 'publisher' ),
		),
	),
	'ajax-tab-field' => 'color_settings',
);
$fields['header_bg_color']              = array(
	'name'           => __( 'Header Background Color', 'publisher' ),
	'id'             => 'header_bg_color',
	'type'           => 'color',
	'reset-color'    => TRUE, // to reset in panel
	'style'          => $styles,
	'desc'           => __( 'You can change header background color with this option.', 'publisher' ),
	'ajax-tab-field' => 'color_settings',
);
$fields['header_bg_image']              = array(
	'name'           => __( 'Header Background Image', 'publisher' ),
	'id'             => 'header_bg_image',
	'type'           => 'background_image',
	'style'          => $styles,
	'reset-color'    => TRUE, // to reset in panel
	'upload_label'   => __( 'Upload Image', 'publisher' ),
	'desc'           => __( 'Use light patterns in non-boxed layout. For patterns, use a repeating background. Use photo to fully cover the background with an image. Note that it will override the background color option.', 'publisher' ),
	'ajax-tab-field' => 'color_settings',
);


/**
 * -> Posts Colors
 */
$fields[]                        = array(
	'name'           => __( 'Posts & Pages Colors', 'publisher' ),
	'type'           => 'group',
	'state'          => 'open',
	'ajax-tab-field' => 'color_settings',
);
$fields['content_a_color']       = array(
	'name'           => __( 'Links Color', 'publisher' ),
	'id'             => 'content_a_color',
	'type'           => 'color',
	'style'          => $styles,
	'reset-color'    => TRUE, // to reset in panel
	'desc'           => __( 'You can change link color with this field.', 'publisher' ),
	'ajax-tab-field' => 'color_settings',
);
$fields['content_a_hover_color'] = array(
	'name'           => __( 'Links Mouse Hover Color', 'publisher' ),
	'id'             => 'content_a_hover_color',
	'type'           => 'color',
	'style'          => $styles,
	'reset-color'    => TRUE, // to reset in panel
	'desc'           => __( 'You can change link mouse hover color with this field.', 'publisher' ),
	'ajax-tab-field' => 'color_settings',
);


/**
 * -> Slider Colors
 */
$fields[]                        = array(
	'name'           => __( 'Category Top Posts', 'publisher' ),
	'type'           => 'group',
	'state'          => 'open',
	'ajax-tab-field' => 'color_settings',
);
$fields['cat_topposts_bg_color'] = array(
	'name'           => __( 'Category Top Posts Style 1 Background Color', 'publisher' ),
	'id'             => 'cat_topposts_bg_color',
	'type'           => 'color',
	'style'          => $styles,
	'reset-color'    => TRUE, // to reset in panel
	'desc'           => __( 'You can change slider background color with this option.', 'publisher' ),
	'ajax-tab-field' => 'color_settings',
);


/**
 * -> Footer Colors
 */
$fields[]                          = array(
	'name'           => __( 'Footer', 'publisher' ),
	'type'           => 'group',
	'state'          => 'open',
	'ajax-tab-field' => 'color_settings',
);
$fields['footer_link_color']       = array(
	'name'           => __( 'Footer Copyright Links Color', 'publisher' ),
	'id'             => 'footer_link_color',
	'type'           => 'color',
	'style'          => $styles,
	'reset-color'    => TRUE, // to reset in panel
	'desc'           => __( 'you can change footer links color with this option.', 'publisher' ),
	'ajax-tab-field' => 'color_settings',
);
$fields['footer_link_hover_color'] = array(
	'name'           => __( 'Footer Copyright Links Hover Color', 'publisher' ),
	'id'             => 'footer_link_hover_color',
	'type'           => 'color',
	'style'          => $styles,
	'reset-color'    => TRUE, // to reset in panel
	'desc'           => __( 'you can change footer links hover color with this option.', 'publisher' ),
	'ajax-tab-field' => 'color_settings',
);
$fields['footer_widgets_text']     = array(
	'name'           => __( 'Footer Widgets Text Color', 'publisher' ),
	'desc'           => __( 'Chose the color of texts in footer widgets! use this with following widgets background color to make texts compatible.', 'publisher' ),
	'id'             => 'footer_widgets_text',
	'style'          => $styles,
	'type'           => 'select',
	'reset-color'    => TRUE, // to reset in panel
	'options'        => array(
		'light-text' => __( 'Light Texts', 'publisher' ),
		'dark-text'  => __( 'Dark Texts', 'publisher' ),
	),
	'ajax-tab-field' => 'color_settings',
);
$fields['footer_widgets_bg_color'] = array(
	'name'           => __( 'Footer Widgets Background Color', 'publisher' ),
	'id'             => 'footer_widgets_bg_color',
	'style'          => $styles,
	'type'           => 'color',
	'reset-color'    => TRUE, // to reset in panel
	'ajax-tab-field' => 'color_settings',
);
$fields['footer_copy_bg_color']    = array(
	'name'           => __( 'Copyright Footer Background Color', 'publisher' ),
	'id'             => 'footer_copy_bg_color',
	'style'          => $styles,
	'type'           => 'color',
	'reset-color'    => TRUE, // to reset in panel
	'ajax-tab-field' => 'color_settings',
);
$fields['footer_social_bg_color']  = array(
	'name'           => __( 'Footer Social Icons Background Color', 'publisher' ),
	'id'             => 'footer_social_bg_color',
	'style'          => $styles,
	'type'           => 'color',
	'reset-color'    => TRUE, // to reset in panel
	'ajax-tab-field' => 'color_settings',
);
$fields['footer_bg_color']         = array(
	'name'           => __( 'Footer Background Color', 'publisher' ),
	'id'             => 'footer_bg_color',
	'type'           => 'color',
	'style'          => $styles,
	'reset-color'    => TRUE, // to reset in panel
	'desc'           => __( 'you can change footer background color with this option.', 'publisher' ),
	'ajax-tab-field' => 'color_settings',
);
$fields['footer_bg_image']         = array(
	'name'           => __( 'Footer Background Image', 'publisher' ),
	'id'             => 'footer_bg_image',
	'type'           => 'background_image',
	'style'          => $styles,
	'reset-color'    => TRUE, // to reset in panel
	'upload_label'   => __( 'Upload Image', 'publisher' ),
	'desc'           => __( 'Use light patterns in non-boxed layout. For patterns, use a repeating background. Use photo to fully cover the background with an image. Note that it will override the background color option.', 'publisher' ),
	'ajax-tab-field' => 'color_settings',
);


/**
 * -> Widgets
 */
$fields[]                        = array(
	'name'           => __( 'Widgets', 'publisher' ),
	'type'           => 'group',
	'state'          => 'open',
	'ajax-tab-field' => 'color_settings',
);
$fields['widget_title_color']    = array(
	'name'           => __( 'Widget Title Text Color', 'publisher' ),
	'id'             => 'widget_title_color',
	'type'           => 'color',
	'style'          => $styles,
	'reset-color'    => TRUE, // to reset in panel
	'desc'           => __( 'You can change color of widgets title with this option.', 'publisher' ),
	'ajax-tab-field' => 'color_settings',
);
$fields['widget_title_bg_color'] = array(
	'name'           => __( 'Widget Title Background Color', 'publisher' ),
	'id'             => 'widget_title_bg_color',
	'type'           => 'color',
	'style'          => $styles,
	'reset-color'    => TRUE, // to reset in panel
	'desc'           => __( 'You can change background color of widgets title with this option.', 'publisher' ),
	'ajax-tab-field' => 'color_settings',
);
$fields['widget_bg_color']       = array(
	'name'           => __( 'Widget Background Color', 'publisher' ),
	'id'             => 'widget_bg_color',
	'type'           => 'color',
	'style'          => $styles,
	'reset-color'    => TRUE, // to reset in panel
	'desc'           => __( 'You can change background color of widgets with this option.', 'publisher' ),
	'ajax-tab-field' => 'color_settings',
);


/**
 * -> Section Headings
 */
$fields[]                         = array(
	'name'           => __( 'Section Headings', 'publisher' ),
	'type'           => 'group',
	'state'          => 'open',
	'ajax-tab-field' => 'color_settings',
);
$fields['section_title_color']    = array(
	'name'           => __( 'Section Title Text Color', 'publisher' ),
	'id'             => 'section_title_color',
	'type'           => 'color',
	'style'          => $styles,
	'reset-color'    => TRUE, // to reset in panel
	'desc'           => __( 'You can change text color of sections title with this option.', 'publisher' ),
	'ajax-tab-field' => 'color_settings',
);
$fields['section_title_bg_color'] = array(
	'name'           => __( 'Section Title Background Color', 'publisher' ),
	'id'             => 'section_title_bg_color',
	'type'           => 'color',
	'style'          => $styles,
	'reset-color'    => TRUE, // to reset in panel
	'desc'           => __( 'You can change background color of sections title with this option.', 'publisher' ),
	'ajax-tab-field' => 'color_settings',
);


/**
 * => Typography Options
 */
$fields[]                      = array(
	'name'     => __( 'Typography', 'publisher' ),
	'id'       => 'typo_settings',
	'type'     => 'tab',
	'icon'     => 'bsai-typography',
	'ajax-tab' => TRUE
);
$fields['reset_typo_settings'] = array(
	'name'           => __( 'Reset Typography settings', 'publisher' ),
	'id'             => 'reset_typo_settings',
	'type'           => 'ajax_action',
	'button-name'    => '<i class="fa fa-refresh"></i> ' . __( 'Reset Typography', 'publisher' ),
	'callback'       => 'Publisher::reset_typography_options',
	'confirm'        => __( 'Are you sure for resetting typography?', 'publisher' ),
	'desc'           => __( 'This allows you to reset all typography fields to default.', 'publisher' ),
	'ajax-tab-field' => 'typo_settings',
);

/**
 * -> General Typography
 *
 * todo recheck the automatic css selectors to delete extra selectors
 */
$fields[]                   = array(
	'name'           => __( 'General Typography', 'publisher' ),
	'type'           => 'group',
	'state'          => 'close',
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_body']        = array(
	'name'           => __( 'Base Font (Body)', 'publisher' ),
	'id'             => 'typo_body',
	'type'           => 'typography',
	'style'          => $styles,
	'desc'           => __( 'Base typography for body that will affect all elements that haven\'t specified typography style. ', 'publisher' ),
	'preview'        => TRUE,
	'preview_tab'    => 'paragraph',
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_meta']        = array(
	'name'           => __( 'Posts Meta', 'publisher' ),
	'id'             => 'typo_meta',
	'type'           => 'typography',
	'style'          => $styles,
	'desc'           => __( 'Typography of posts info in post meta.', 'publisher' ),
	'preview'        => TRUE,
	'preview_tab'    => 'title',
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_meta_author'] = array(
	'name'           => __( 'Posts Meta (Author Name)', 'publisher' ),
	'id'             => 'typo_meta_author',
	'type'           => 'typography',
	'style'          => $styles,
	'desc'           => __( 'Typography of posts info in post meta.', 'publisher' ),
	'preview'        => TRUE,
	'preview_tab'    => 'title',
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);

$fields['typo_badges'] = array(
	'name'           => __( 'Posts Badges', 'publisher' ),
	'id'             => 'typo_badges',
	'type'           => 'typography',
	'style'          => $styles,
	'desc'           => __( 'Typography of category and post format badges.', 'publisher' ),
	'preview'        => TRUE,
	'preview_tab'    => 'title',
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);

$fields[] = array(
	'type'           => 'group_close',
	'ajax-tab-field' => 'typo_settings',
);
$fields[] = array(
	'name'           => __( 'Post Typography', 'publisher' ),
	'type'           => 'heading',
	'layout'         => 'style-2',
	'ajax-tab-field' => 'typo_settings',
);

/**
 * -> Post & Page Typography
 */
$fields[]                  = array(
	'name'           => __( 'Headings (H1-H6) ', 'publisher' ),
	'type'           => 'group',
	'state'          => 'close',
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_heading']    = array(
	'name'           => __( 'Base Heading Typography', 'publisher' ),
	'id'             => 'typo_heading',
	'type'           => 'typography',
	'style'          => $styles,
	'desc'           => __( 'Base heading typography that will be set to all headings (h1,h2 etc) and all titles of sections and pages that must be bolder than other texts.', 'publisher' ),
	'preview'        => TRUE,
	'preview_tab'    => 'title',
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_heading_h1'] = array(
	'name'           => __( 'H1 Font Size & Color', 'publisher' ),
	'id'             => 'typo_heading_h1',
	'type'           => 'custom',
	'input_callback' => array(
		'callback' => 'publisher_cb_heading_typo_fields',
		'args'     => array(
			array(
				'field' => 'h1',
			)
		),
	),
	'style'          => $styles,
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_heading_h2'] = array(
	'name'           => __( 'H2 Font Size & Color', 'publisher' ),
	'id'             => 'typo_heading_h2',
	'type'           => 'custom',
	'input_callback' => array(
		'callback' => 'publisher_cb_heading_typo_fields',
		'args'     => array(
			array(
				'field' => 'h2',
			)
		),
	),
	'style'          => $styles,
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_heading_h3'] = array(
	'name'           => __( 'H3 Font Size & Color', 'publisher' ),
	'id'             => 'typo_heading_h3',
	'type'           => 'custom',
	'input_callback' => array(
		'callback' => 'publisher_cb_heading_typo_fields',
		'args'     => array(
			array(
				'field' => 'h3',
			)
		),
	),
	'style'          => $styles,
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_heading_h4'] = array(
	'name'           => __( 'H4 Font Size & Color', 'publisher' ),
	'id'             => 'typo_heading_h4',
	'type'           => 'custom',
	'input_callback' => array(
		'callback' => 'publisher_cb_heading_typo_fields',
		'args'     => array(
			array(
				'field' => 'h4',
			)
		),
	),
	'style'          => $styles,
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_heading_h5'] = array(
	'name'           => __( 'H5 Font Size & Color', 'publisher' ),
	'id'             => 'typo_heading_h5',
	'type'           => 'custom',
	'input_callback' => array(
		'callback' => 'publisher_cb_heading_typo_fields',
		'args'     => array(
			array(
				'field' => 'h5',
			)
		),
	),
	'style'          => $styles,
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_heading_h6'] = array(
	'name'           => __( 'H6 Font Size & Color', 'publisher' ),
	'id'             => 'typo_heading_h6',
	'type'           => 'custom',
	'input_callback' => array(
		'callback' => 'publisher_cb_heading_typo_fields',
		'args'     => array(
			array(
				'field' => 'h6',
			)
		),
	),
	'style'          => $styles,
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);


/**
 * -> Post & Page Typography
 */
$fields[]                         = array(
	'name'           => __( 'Post & Page', 'publisher' ),
	'type'           => 'group',
	'state'          => 'close',
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_post_heading']      = array(
	'name'           => __( 'Post Title', 'publisher' ),
	'id'             => 'typo_post_heading',
	'type'           => 'typography',
	'style'          => $styles,
	'desc'           => __( 'Typography of post title in single pages.', 'publisher' ),
	'preview'        => TRUE,
	'preview_tab'    => 'title',
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_post_tp1_heading']  = array(
	'name'           => __( 'Post Template 1 Title Font Size', 'publisher' ),
	'id'             => 'typo_post_tp1_heading',
	'type'           => 'text',
	'style'          => $styles,
	'desc'           => __( 'Font size for title of post template 1.', 'publisher' ),
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_post_tp2_heading']  = array(
	'name'           => __( 'Post Template 2 Title Font Size', 'publisher' ),
	'id'             => 'typo_post_tp2_heading',
	'type'           => 'text',
	'style'          => $styles,
	'desc'           => __( 'Font size for title of post template 1.', 'publisher' ),
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_post_tp3_heading']  = array(
	'name'           => __( 'Post Template 3 Title Font Size', 'publisher' ),
	'id'             => 'typo_post_tp3_heading',
	'type'           => 'text',
	'style'          => $styles,
	'desc'           => __( 'Font size for title of post template 1.', 'publisher' ),
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_post_tp4_heading']  = array(
	'name'           => __( 'Post Template 4 Title Font Size', 'publisher' ),
	'id'             => 'typo_post_tp4_heading',
	'type'           => 'text',
	'style'          => $styles,
	'desc'           => __( 'Font size for title of post template 1.', 'publisher' ),
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_post_tp5_heading']  = array(
	'name'           => __( 'Post Template 5 Title Font Size', 'publisher' ),
	'id'             => 'typo_post_tp5_heading',
	'type'           => 'text',
	'style'          => $styles,
	'desc'           => __( 'Font size for title of post template 5.', 'publisher' ),
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_post_tp6_heading']  = array(
	'name'           => __( 'Post Template 6 Title Font Size', 'publisher' ),
	'id'             => 'typo_post_tp6_heading',
	'type'           => 'text',
	'style'          => $styles,
	'desc'           => __( 'Font size for title of post template 5.', 'publisher' ),
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_post_tp7_heading']  = array(
	'name'           => __( 'Post Template 7 Title Font Size', 'publisher' ),
	'id'             => 'typo_post_tp7_heading',
	'type'           => 'text',
	'style'          => $styles,
	'desc'           => __( 'Font size for title of post template 7.', 'publisher' ),
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_post_tp8_heading']  = array(
	'name'           => __( 'Post Template 8 Title Font Size', 'publisher' ),
	'id'             => 'typo_post_tp8_heading',
	'type'           => 'text',
	'style'          => $styles,
	'desc'           => __( 'Font size for title of post template 8.', 'publisher' ),
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_post_tp9_heading']  = array(
	'name'           => __( 'Post Template 9 Title Font Size', 'publisher' ),
	'id'             => 'typo_post_tp9_heading',
	'type'           => 'text',
	'style'          => $styles,
	'desc'           => __( 'Font size for title of post template 9.', 'publisher' ),
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_post_tp10_heading'] = array(
	'name'           => __( 'Post Template 10 Title Font Size', 'publisher' ),
	'id'             => 'typo_post_tp10_heading',
	'type'           => 'text',
	'style'          => $styles,
	'desc'           => __( 'Font size for title of post template 10.', 'publisher' ),
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_post_tp11_heading'] = array(
	'name'           => __( 'Post Template 11 Title Font Size', 'publisher' ),
	'id'             => 'typo_post_tp11_heading',
	'type'           => 'text',
	'style'          => $styles,
	'desc'           => __( 'Font size for title of post template 11.', 'publisher' ),
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_post_tp12_heading'] = array(
	'name'           => __( 'Post Template 12 Title Font Size', 'publisher' ),
	'id'             => 'typo_post_tp12_heading',
	'type'           => 'text',
	'style'          => $styles,
	'desc'           => __( 'Font size for title of post template 12.', 'publisher' ),
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_post_tp13_heading'] = array(
	'name'           => __( 'Post Template 13 Title Font Size', 'publisher' ),
	'id'             => 'typo_post_tp13_heading',
	'type'           => 'text',
	'style'          => $styles,
	'desc'           => __( 'Font size for title of post template 13.', 'publisher' ),
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_post_subtitle']     = array(
	'name'           => __( 'Post Sub Title', 'publisher' ),
	'id'             => 'typo_post_subtitle',
	'type'           => 'typography',
	'style'          => $styles,
	'desc'           => __( 'Typography of post sub title in single pages.', 'publisher' ),
	'preview'        => TRUE,
	'preview_tab'    => 'title',
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_entry_content']     = array(
	'name'           => __( 'Posts & Pages Content', 'publisher' ),
	'id'             => 'typo_entry_content',
	'type'           => 'typography',
	'style'          => $styles,
	'desc'           => __( 'Base typography for content of posts and static pages.', 'publisher' ),
	'preview'        => TRUE,
	'preview_tab'    => 'paragraph',
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_post_summary']      = array(
	'name'           => __( 'Post Summary', 'publisher' ),
	'id'             => 'typo_post_summary',
	'type'           => 'typography',
	'style'          => $styles,
	'desc'           => __( 'Base typography for posts summary in all listings.', 'publisher' ),
	'preview'        => TRUE,
	'preview_tab'    => 'paragraph',
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);

$fields[] = array(
	'type'           => 'group_close',
	'ajax-tab-field' => 'typo_settings',
);
$fields[] = array(
	'name'           => __( 'Header Typography', 'publisher' ),
	'type'           => 'heading',
	'layout'         => 'style-2',
	'ajax-tab-field' => 'typo_settings',
);

/**
 * -> Top Bar
 */
$fields[]                       = array(
	'name'           => __( 'Top Bar', 'publisher' ),
	'type'           => 'group',
	'state'          => 'close',
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_topbar_menu']     = array(
	'name'           => __( 'Topbar Menu Typography', 'publisher' ),
	'id'             => 'typo_topbar_menu',
	'type'           => 'typography',
	'style'          => $styles,
	'preview'        => TRUE,
	'preview_tab'    => 'title',
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_topbar_sub_menu'] = array(
	'name'           => __( 'Topbar Sub Menu Typography', 'publisher' ),
	'id'             => 'typo_topbar_sub_menu',
	'type'           => 'typography',
	'style'          => $styles,
	'preview'        => TRUE,
	'preview_tab'    => 'title',
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_topbar_date']     = array(
	'name'           => __( 'Topbar Date Typography', 'publisher' ),
	'id'             => 'typo_topbar_date',
	'type'           => 'typography',
	'style'          => $styles,
	'preview'        => TRUE,
	'preview_tab'    => 'title',
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);

/**
 * -> Header Typography
 */
$fields[]                      = array(
	'name'           => __( 'Header', 'publisher' ),
	'type'           => 'group',
	'state'          => 'close',
	'ajax-tab-field' => 'typo_settings',
);
$fields['typ_header_logo']     = array(
	'name'           => __( 'Logo Typography', 'publisher' ),
	'id'             => 'typ_header_logo',
	'type'           => 'typography',
	//	'style'          => $styles,
	'preview'        => TRUE,
	'preview_tab'    => 'title',
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);
$fields['typ_header_menu']     = array(
	'name'           => __( 'Menu Typography', 'publisher' ),
	'id'             => 'typ_header_menu',
	'type'           => 'typography',
	'style'          => $styles,
	'preview'        => TRUE,
	'preview_tab'    => 'title',
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);
$fields['typ_header_sub_menu'] = array(
	'name'           => __( 'Sub Menu Typography', 'publisher' ),
	'id'             => 'typ_header_sub_menu',
	'type'           => 'typography',
	'style'          => $styles,
	'preview'        => TRUE,
	'preview_tab'    => 'title',
	'ajax-tab-field' => 'typo_settings',
	'reset-typo'     => TRUE, // to reset in panel
);


$fields[] = array(
	'type'           => 'group_close',
	'ajax-tab-field' => 'typo_settings',
);
$fields[] = array(
	'name'           => __( 'Footer Typography', 'publisher' ),
	'type'           => 'heading',
	'layout'         => 'style-2',
	'ajax-tab-field' => 'typo_settings',
);

/**
 * -> Footer
 */
$fields[]                   = array(
	'name'           => __( 'Footer', 'publisher' ),
	'type'           => 'group',
	'state'          => 'close',
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_footer_menu'] = array(
	'name'           => __( 'Footer Navigation', 'publisher' ),
	'id'             => 'typo_footer_menu',
	'type'           => 'typography',
	'style'          => $styles,
	'preview'        => TRUE,
	'preview_tab'    => 'title',
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_footer_copy'] = array(
	'name'           => __( 'Footer Copyright', 'publisher' ),
	'id'             => 'typo_footer_copy',
	'type'           => 'typography',
	'style'          => $styles,
	'preview'        => TRUE,
	'preview_tab'    => 'title',
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);


$fields[] = array(
	'type'           => 'group_close',
	'ajax-tab-field' => 'typo_settings',
);
$fields[] = array(
	'name'           => __( 'Widget & Block Title Typography', 'publisher' ),
	'type'           => 'heading',
	'layout'         => 'style-2',
	'ajax-tab-field' => 'typo_settings',
);


/**
 * -> Widgets
 */
$fields[]                    = array(
	'name'           => __( 'Widget Title', 'publisher' ),
	'type'           => 'group',
	'state'          => 'close',
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_widget_title'] = array(
	'name'           => __( 'Widget Title', 'publisher' ),
	'id'             => 'typo_widget_title',
	'type'           => 'typography',
	'style'          => $styles,
	'preview'        => TRUE,
	'preview_tab'    => 'title',
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);


/**
 * -> Listings Title
 */
$fields[]                       = array(
	'name'           => __( 'Blocks Title (Visual Composer Blocks and Shortcodes)', 'publisher' ),
	'type'           => 'group',
	'state'          => 'close',
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_section_heading'] = array(
	'name'           => __( 'Listing Heading', 'publisher' ),
	'id'             => 'typo_section_heading',
	'type'           => 'typography',
	'style'          => $styles,
	'preview'        => TRUE,
	'preview_tab'    => 'title',
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);


$fields[] = array(
	'type'           => 'group_close',
	'ajax-tab-field' => 'typo_settings',
);
$fields[] = array(
	'name'           => __( 'Archive Pages', 'publisher' ),
	'type'           => 'heading',
	'layout'         => 'style-2',
	'ajax-tab-field' => 'typo_settings',
);

/**
 * -> Archive Title
 */
$fields[]                         = array(
	'name'           => __( 'Archive Pages Title', 'publisher' ),
	'type'           => 'group',
	'state'          => 'close',
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_archive_title_pre'] = array(
	'name'           => __( 'Archive Pre Title', 'publisher' ),
	'id'             => 'typo_archive_title_pre',
	'type'           => 'typography',
	'style'          => $styles,
	'preview'        => TRUE,
	'preview_tab'    => 'title',
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_archive_title']     = array(
	'name'           => __( 'Archive Title', 'publisher' ),
	'id'             => 'typo_archive_title',
	'type'           => 'typography',
	'style'          => $styles,
	'preview'        => TRUE,
	'preview_tab'    => 'title',
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);


$fields[] = array(
	'type'           => 'group_close',
	'ajax-tab-field' => 'typo_settings',
);
$fields[] = array(
	'name'           => __( 'Block & Listing Typography', 'publisher' ),
	'type'           => 'heading',
	'layout'         => 'style-2',
	'ajax-tab-field' => 'typo_settings',
);

/**
 * -> Classic Listing
 */
$fields[]                               = array(
	'name'           => __( 'Classic Listing', 'publisher' ),
	'type'           => 'group',
	'state'          => 'close',
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_listing_classic_1_title'] = array(
	'name'           => __( 'Classic Listing 1 Heading', 'publisher' ),
	'id'             => 'typo_listing_classic_1_title',
	'type'           => 'typography',
	'style'          => $styles,
	'preview'        => TRUE,
	'preview_tab'    => 'title',
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_listing_classic_2_title'] = array(
	'name'           => __( 'Classic Listing 2 Heading', 'publisher' ),
	'id'             => 'typo_listing_classic_2_title',
	'type'           => 'typography',
	'style'          => $styles,
	'preview'        => TRUE,
	'preview_tab'    => 'title',
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_listing_classic_3_title'] = array(
	'name'           => __( 'Classic Listing 3 Heading', 'publisher' ),
	'id'             => 'typo_listing_classic_3_title',
	'type'           => 'typography',
	'style'          => $styles,
	'preview'        => TRUE,
	'preview_tab'    => 'title',
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);


/**
 * -> Modern Grid Typography
 */
$fields[]                        = array(
	'name'           => __( 'Modern Grid Listing', 'publisher' ),
	'type'           => 'group',
	'state'          => 'close',
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_mg_1_title']       = array(
	'name'           => __( 'Modern Grid 1 Title', 'publisher' ),
	'id'             => 'typo_mg_1_title',
	'type'           => 'typography',
	'style'          => $styles,
	'preview'        => TRUE,
	'preview_tab'    => 'title',
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_mg_2_title']       = array(
	'name'           => __( 'Modern Grid 2 Title', 'publisher' ),
	'id'             => 'typo_mg_2_title',
	'type'           => 'typography',
	'style'          => $styles,
	'preview'        => TRUE,
	'preview_tab'    => 'title',
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_mg_3_title']       = array(
	'name'           => __( 'Modern Grid 3 Title', 'publisher' ),
	'id'             => 'typo_mg_3_title',
	'type'           => 'typography',
	'style'          => $styles,
	'preview'        => TRUE,
	'preview_tab'    => 'title',
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_mg_4_title']       = array(
	'name'           => __( 'Modern Grid 4 Title', 'publisher' ),
	'id'             => 'typo_mg_4_title',
	'type'           => 'typography',
	'style'          => $styles,
	'preview'        => TRUE,
	'preview_tab'    => 'title',
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_mg_5_title_big']   = array(
	'name'           => __( 'Modern Grid 5 - Big item Title', 'publisher' ),
	'id'             => 'typo_mg_5_title_big',
	'type'           => 'typography',
	'style'          => $styles,
	'preview'        => TRUE,
	'preview_tab'    => 'title',
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_mg_5_title_small'] = array(
	'name'           => __( 'Modern Grid 5 - Small item Title', 'publisher' ),
	'id'             => 'typo_mg_5_title_small',
	'type'           => 'typography',
	'style'          => $styles,
	'preview'        => TRUE,
	'preview_tab'    => 'title',
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_mg_6_title']       = array(
	'name'           => __( 'Modern Grid 6 Title', 'publisher' ),
	'id'             => 'typo_mg_6_title',
	'type'           => 'typography',
	'style'          => $styles,
	'preview'        => TRUE,
	'preview_tab'    => 'title',
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_mg_7_title']       = array(
	'name'           => __( 'Modern Grid 7 Title', 'publisher' ),
	'id'             => 'typo_mg_7_title',
	'type'           => 'typography',
	'style'          => $styles,
	'preview'        => TRUE,
	'preview_tab'    => 'title',
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_mg_8_title']       = array(
	'name'           => __( 'Modern Grid 8 Title', 'publisher' ),
	'id'             => 'typo_mg_8_title',
	'type'           => 'typography',
	'style'          => $styles,
	'preview'        => TRUE,
	'preview_tab'    => 'title',
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_mg_9_title']       = array(
	'name'           => __( 'Modern Grid 9 Title', 'publisher' ),
	'id'             => 'typo_mg_9_title',
	'type'           => 'typography',
	'style'          => $styles,
	'preview'        => TRUE,
	'preview_tab'    => 'title',
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_mg_10_title']      = array(
	'name'           => __( 'Modern Grid 10 Title', 'publisher' ),
	'id'             => 'typo_mg_10_title',
	'type'           => 'typography',
	'style'          => $styles,
	'preview'        => TRUE,
	'preview_tab'    => 'title',
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);


/**
 * -> Grid Listing
 */
$fields[]                            = array(
	'name'           => __( 'Grid Listing', 'publisher' ),
	'type'           => 'group',
	'state'          => 'close',
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_listing_grid_1_title'] = array(
	'name'           => __( 'Grid Listing 1 Heading', 'publisher' ),
	'id'             => 'typo_listing_grid_1_title',
	'type'           => 'typography',
	'style'          => $styles,
	'preview'        => TRUE,
	'preview_tab'    => 'title',
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_listing_grid_2_title'] = array(
	'name'           => __( 'Grid Listing 2 Heading', 'publisher' ),
	'id'             => 'typo_listing_grid_2_title',
	'type'           => 'typography',
	'style'          => $styles,
	'preview'        => TRUE,
	'preview_tab'    => 'title',
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);


/**
 * -> Tall Listing
 */
$fields[]                            = array(
	'name'           => __( 'Tall Listing', 'publisher' ),
	'type'           => 'group',
	'state'          => 'close',
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_listing_tall_1_title'] = array(
	'name'           => __( 'Tall Listing 1 Heading', 'publisher' ),
	'id'             => 'typo_listing_tall_1_title',
	'type'           => 'typography',
	'style'          => $styles,
	'preview'        => TRUE,
	'preview_tab'    => 'title',
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_listing_tall_2_title'] = array(
	'name'           => __( 'Tall Listing 2 Heading', 'publisher' ),
	'id'             => 'typo_listing_tall_2_title',
	'type'           => 'typography',
	'style'          => $styles,
	'preview'        => TRUE,
	'preview_tab'    => 'title',
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);


/**
 * -> Sliders
 */
$fields[]                              = array(
	'name'           => __( 'Sliders', 'publisher' ),
	'type'           => 'group',
	'state'          => 'close',
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_listing_slider_1_title'] = array(
	'name'           => __( 'Slider 1 Heading', 'publisher' ),
	'id'             => 'typo_listing_slider_1_title',
	'type'           => 'typography',
	'style'          => $styles,
	'preview'        => TRUE,
	'preview_tab'    => 'title',
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_listing_slider_2_title'] = array(
	'name'           => __( 'Slider 2 Heading', 'publisher' ),
	'id'             => 'typo_listing_slider_2_title',
	'type'           => 'typography',
	'style'          => $styles,
	'preview'        => TRUE,
	'preview_tab'    => 'title',
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_listing_slider_3_title'] = array(
	'name'           => __( 'Slider 3 Heading', 'publisher' ),
	'id'             => 'typo_listing_slider_3_title',
	'type'           => 'typography',
	'style'          => $styles,
	'preview'        => TRUE,
	'preview_tab'    => 'title',
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);


/**
 * -> Boxes
 */
$fields[]                           = array(
	'name'           => __( 'Boxes', 'publisher' ),
	'type'           => 'group',
	'state'          => 'close',
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_listing_box_1_title'] = array(
	'name'           => __( 'Box 1 Heading', 'publisher' ),
	'id'             => 'typo_listing_box_1_title',
	'type'           => 'typography',
	'style'          => $styles,
	'preview'        => TRUE,
	'preview_tab'    => 'title',
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_listing_box_2_title'] = array(
	'name'           => __( 'Box 2 Heading', 'publisher' ),
	'id'             => 'typo_listing_box_2_title',
	'type'           => 'typography',
	'style'          => $styles,
	'preview'        => TRUE,
	'preview_tab'    => 'title',
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_listing_box_3_title'] = array(
	'name'           => __( 'Box 3 Heading', 'publisher' ),
	'id'             => 'typo_listing_box_3_title',
	'type'           => 'typography',
	'style'          => $styles,
	'preview'        => TRUE,
	'preview_tab'    => 'title',
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_listing_box_4_title'] = array(
	'name'           => __( 'Box 4 Heading', 'publisher' ),
	'id'             => 'typo_listing_box_4_title',
	'type'           => 'typography',
	'style'          => $styles,
	'preview'        => TRUE,
	'preview_tab'    => 'title',
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);


/**
 * -> Blog Listing
 */
$fields[]                            = array(
	'name'           => __( 'Blog Listing', 'publisher' ),
	'type'           => 'group',
	'state'          => 'close',
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_listing_blog_1_title'] = array(
	'name'           => __( 'Blog Listing 1, 2 & 3 Heading', 'publisher' ),
	'id'             => 'typo_listing_blog_1_title',
	'type'           => 'typography',
	'style'          => $styles,
	'preview'        => TRUE,
	'preview_tab'    => 'title',
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_listing_blog_5_title'] = array(
	'name'           => __( 'Blog Listing 5 Heading', 'publisher' ),
	'id'             => 'typo_listing_blog_5_title',
	'type'           => 'typography',
	'style'          => $styles,
	'preview'        => TRUE,
	'preview_tab'    => 'title',
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);


/**
 * -> Thumbnail Listing
 */
$fields[]                                 = array(
	'name'           => __( 'Thumbnail Listing', 'publisher' ),
	'type'           => 'group',
	'state'          => 'close',
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_listing_thumbnail_1_title'] = array(
	'name'           => __( 'Thumbnail Listing 1 & 3 Titles', 'publisher' ),
	'id'             => 'typo_listing_thumbnail_1_title',
	'type'           => 'typography',
	'style'          => $styles,
	'preview'        => TRUE,
	'preview_tab'    => 'title',
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_listing_thumbnail_2_title'] = array(
	'name'           => __( 'Thumbnail Listing 2 Titles', 'publisher' ),
	'id'             => 'typo_listing_thumbnail_2_title',
	'type'           => 'typography',
	'style'          => $styles,
	'preview'        => TRUE,
	'preview_tab'    => 'title',
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);


/**
 * -> Text Listing Typography
 */
$fields[]                            = array(
	'name'           => __( 'Text Listing', 'publisher' ),
	'type'           => 'group',
	'state'          => 'close',
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_text_listing_1_title'] = array(
	'name'           => __( 'Text Listing 1 Title', 'publisher' ),
	'id'             => 'typo_text_listing_1_title',
	'type'           => 'typography',
	'style'          => $styles,
	'preview'        => TRUE,
	'preview_tab'    => 'title',
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_text_listing_2_title'] = array(
	'name'           => __( 'Text Listing 2 Title', 'publisher' ),
	'id'             => 'typo_text_listing_2_title',
	'type'           => 'typography',
	'style'          => $styles,
	'preview'        => TRUE,
	'preview_tab'    => 'title',
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);
$fields['typo_text_listing_3_title'] = array(
	'name'           => __( 'Text Listing 3 & 4 Title', 'publisher' ),
	'id'             => 'typo_text_listing_3_title',
	'type'           => 'typography',
	'style'          => $styles,
	'preview'        => TRUE,
	'preview_tab'    => 'title',
	'reset-typo'     => TRUE, // to reset in panel
	'ajax-tab-field' => 'typo_settings',
);


/**
 * => Blocks Options
 */
$fields[] = array(
	'name'     => __( 'Blocks and Listings', 'publisher' ),
	'id'       => 'advanced_listings',
	'type'     => 'tab',
	'icon'     => 'bsai-gear',
	'ajax-tab' => TRUE,
	'badge'    => array(
		'text'  => __( 'New', 'publisher' ),
		'color' => '#62D393'
	)
);

$fields['reset_blocks_settings'] = array(
	'name'           => __( 'Reset Blocks Settings', 'publisher' ),
	'id'             => 'reset_blocks_settings',
	'type'           => 'ajax_action',
	'button-name'    => '<i class="fa fa-refresh"></i> ' . __( 'Reset Blocks Setting', 'publisher' ),
	'callback'       => 'Publisher::reset_blocks_options',
	'confirm'        => __( 'Are you sure for resetting blocks settings to default?', 'publisher' ),
	'desc'           => __( 'This allows you to reset all blocks settings to default.', 'publisher' ),
	'ajax-tab-field' => 'advanced_listings',
);

/**
 * -> Modern Grids
 */
$fields[]                         = array(
	'name'           => __( 'Modern Grid Listings', 'publisher' ),
	'type'           => 'heading',
	'layout'         => 'style-2',
	'ajax-tab-field' => 'advanced_listings',
);
$fields['listing-modern-grid-1']  = array(
	'name'            => '',
	'reset-blocks'    => TRUE,
	'id'              => 'listing-modern-grid-1',
	'section_class'   => 'full-width-controls',
	'container_class' => 'advanced-block-settings have-group',
	'type'            => 'custom',
	'input_callback'  => array(
		'callback' => 'publisher_cb_blocks_setting_field',
		'args'     => array(
			array(
				'field' => 'listing-modern-grid-1',
			)
		),
	),
	'ajax-tab-field'  => 'advanced_listings',
);
$fields['listing-modern-grid-2']  = array(
	'name'            => '',
	'reset-blocks'    => TRUE,
	'id'              => 'listing-modern-grid-2',
	'section_class'   => 'full-width-controls',
	'container_class' => 'advanced-block-settings have-group',
	'type'            => 'custom',
	'input_callback'  => array(
		'callback' => 'publisher_cb_blocks_setting_field',
		'args'     => array(
			array(
				'field' => 'listing-modern-grid-2',
			)
		),
	),
	'ajax-tab-field'  => 'advanced_listings',
);
$fields['listing-modern-grid-3']  = array(
	'name'            => '',
	'reset-blocks'    => TRUE,
	'id'              => 'listing-modern-grid-3',
	'section_class'   => 'full-width-controls',
	'container_class' => 'advanced-block-settings have-group',
	'type'            => 'custom',
	'input_callback'  => array(
		'callback' => 'publisher_cb_blocks_setting_field',
		'args'     => array(
			array(
				'field' => 'listing-modern-grid-3',
			)
		),
	),
	'ajax-tab-field'  => 'advanced_listings',
);
$fields['listing-modern-grid-4']  = array(
	'name'            => '',
	'reset-blocks'    => TRUE,
	'id'              => 'listing-modern-grid-4',
	'section_class'   => 'full-width-controls',
	'container_class' => 'advanced-block-settings have-group',
	'type'            => 'custom',
	'input_callback'  => array(
		'callback' => 'publisher_cb_blocks_setting_field',
		'args'     => array(
			array(
				'field' => 'listing-modern-grid-4',
			)
		),
	),
	'ajax-tab-field'  => 'advanced_listings',
);
$fields['listing-modern-grid-5']  = array(
	'name'            => '',
	'reset-blocks'    => TRUE,
	'id'              => 'listing-modern-grid-5',
	'section_class'   => 'full-width-controls',
	'container_class' => 'advanced-block-settings have-group',
	'type'            => 'custom',
	'input_callback'  => array(
		'callback' => 'publisher_cb_blocks_setting_field',
		'args'     => array(
			array(
				'field' => 'listing-modern-grid-5',
			)
		),
	),
	'ajax-tab-field'  => 'advanced_listings',
);
$fields['listing-modern-grid-6']  = array(
	'name'            => '',
	'reset-blocks'    => TRUE,
	'id'              => 'listing-modern-grid-6',
	'section_class'   => 'full-width-controls',
	'container_class' => 'advanced-block-settings have-group',
	'type'            => 'custom',
	'input_callback'  => array(
		'callback' => 'publisher_cb_blocks_setting_field',
		'args'     => array(
			array(
				'field' => 'listing-modern-grid-6',
			)
		),
	),
	'ajax-tab-field'  => 'advanced_listings',
);
$fields['listing-modern-grid-7']  = array(
	'name'            => '',
	'reset-blocks'    => TRUE,
	'id'              => 'listing-modern-grid-7',
	'section_class'   => 'full-width-controls',
	'container_class' => 'advanced-block-settings have-group',
	'type'            => 'custom',
	'input_callback'  => array(
		'callback' => 'publisher_cb_blocks_setting_field',
		'args'     => array(
			array(
				'field' => 'listing-modern-grid-7',
			)
		),
	),
	'ajax-tab-field'  => 'advanced_listings',
);
$fields['listing-modern-grid-8']  = array(
	'name'            => '',
	'reset-blocks'    => TRUE,
	'id'              => 'listing-modern-grid-8',
	'section_class'   => 'full-width-controls',
	'container_class' => 'advanced-block-settings have-group',
	'type'            => 'custom',
	'input_callback'  => array(
		'callback' => 'publisher_cb_blocks_setting_field',
		'args'     => array(
			array(
				'field' => 'listing-modern-grid-8',
			)
		),
	),
	'ajax-tab-field'  => 'advanced_listings',
);
$fields['listing-modern-grid-9']  = array(
	'name'            => '',
	'reset-blocks'    => TRUE,
	'id'              => 'listing-modern-grid-9',
	'section_class'   => 'full-width-controls',
	'container_class' => 'advanced-block-settings have-group',
	'type'            => 'custom',
	'input_callback'  => array(
		'callback' => 'publisher_cb_blocks_setting_field',
		'args'     => array(
			array(
				'field' => 'listing-modern-grid-9',
			)
		),
	),
	'ajax-tab-field'  => 'advanced_listings',
);
$fields['listing-modern-grid-10'] = array(
	'name'            => '',
	'reset-blocks'    => TRUE,
	'id'              => 'listing-modern-grid-10',
	'section_class'   => 'full-width-controls',
	'container_class' => 'advanced-block-settings have-group',
	'type'            => 'custom',
	'input_callback'  => array(
		'callback' => 'publisher_cb_blocks_setting_field',
		'args'     => array(
			array(
				'field' => 'listing-modern-grid-10',
			)
		),
	),
	'ajax-tab-field'  => 'advanced_listings',
);


/**
 * -> Mix Listings
 */
$fields[]                  = array(
	'type'           => 'group_close',
	'ajax-tab-field' => 'advanced_listings',
);
$fields[]                  = array(
	'name'           => __( 'Mix Listings', 'publisher' ),
	'type'           => 'heading',
	'layout'         => 'style-2',
	'ajax-tab-field' => 'advanced_listings',
);
$fields['listing-mix-1-1'] = array(
	'name'            => '',
	'reset-blocks'    => TRUE,
	'id'              => 'listing-mix-1-1',
	'section_class'   => 'full-width-controls',
	'container_class' => 'advanced-block-settings have-group',
	'type'            => 'custom',
	'input_callback'  => array(
		'callback' => 'publisher_cb_blocks_setting_field',
		'args'     => array(
			array(
				'field' => 'listing-mix-1-1',
			)
		),
	),
	'ajax-tab-field'  => 'advanced_listings',
);
$fields['listing-mix-1-2'] = array(
	'name'            => '',
	'reset-blocks'    => TRUE,
	'id'              => 'listing-mix-1-2',
	'section_class'   => 'full-width-controls',
	'container_class' => 'advanced-block-settings have-group',
	'type'            => 'custom',
	'input_callback'  => array(
		'callback' => 'publisher_cb_blocks_setting_field',
		'args'     => array(
			array(
				'field' => 'listing-mix-1-2',
			)
		),
	),
	'ajax-tab-field'  => 'advanced_listings',
);
$fields['listing-mix-1-3'] = array(
	'name'            => '',
	'reset-blocks'    => TRUE,
	'id'              => 'listing-mix-1-3',
	'section_class'   => 'full-width-controls',
	'container_class' => 'advanced-block-settings have-group',
	'type'            => 'custom',
	'input_callback'  => array(
		'callback' => 'publisher_cb_blocks_setting_field',
		'args'     => array(
			array(
				'field' => 'listing-mix-1-3',
			)
		),
	),
	'ajax-tab-field'  => 'advanced_listings',
);
$fields['listing-mix-1-4'] = array(
	'name'            => '',
	'reset-blocks'    => TRUE,
	'id'              => 'listing-mix-1-4',
	'section_class'   => 'full-width-controls',
	'container_class' => 'advanced-block-settings have-group',
	'type'            => 'custom',
	'input_callback'  => array(
		'callback' => 'publisher_cb_blocks_setting_field',
		'args'     => array(
			array(
				'field' => 'listing-mix-1-4',
			)
		),
	),
	'ajax-tab-field'  => 'advanced_listings',
);
$fields['listing-mix-2-1'] = array(
	'name'            => '',
	'reset-blocks'    => TRUE,
	'id'              => 'listing-mix-2-1',
	'section_class'   => 'full-width-controls',
	'container_class' => 'advanced-block-settings have-group',
	'type'            => 'custom',
	'input_callback'  => array(
		'callback' => 'publisher_cb_blocks_setting_field',
		'args'     => array(
			array(
				'field' => 'listing-mix-2-1',
			)
		),
	),
	'ajax-tab-field'  => 'advanced_listings',
);
$fields['listing-mix-2-2'] = array(
	'name'            => '',
	'reset-blocks'    => TRUE,
	'id'              => 'listing-mix-2-2',
	'section_class'   => 'full-width-controls',
	'container_class' => 'advanced-block-settings have-group',
	'type'            => 'custom',
	'input_callback'  => array(
		'callback' => 'publisher_cb_blocks_setting_field',
		'args'     => array(
			array(
				'field' => 'listing-mix-2-2',
			)
		),
	),
	'ajax-tab-field'  => 'advanced_listings',
);
$fields['listing-mix-3-1'] = array(
	'name'            => '',
	'reset-blocks'    => TRUE,
	'id'              => 'listing-mix-3-1',
	'section_class'   => 'full-width-controls',
	'container_class' => 'advanced-block-settings have-group',
	'type'            => 'custom',
	'input_callback'  => array(
		'callback' => 'publisher_cb_blocks_setting_field',
		'args'     => array(
			array(
				'field' => 'listing-mix-3-1',
			)
		),
	),
	'ajax-tab-field'  => 'advanced_listings',
);
$fields['listing-mix-3-2'] = array(
	'name'            => '',
	'reset-blocks'    => TRUE,
	'id'              => 'listing-mix-3-2',
	'section_class'   => 'full-width-controls',
	'container_class' => 'advanced-block-settings have-group',
	'type'            => 'custom',
	'input_callback'  => array(
		'callback' => 'publisher_cb_blocks_setting_field',
		'args'     => array(
			array(
				'field' => 'listing-mix-3-2',
			)
		),
	),
	'ajax-tab-field'  => 'advanced_listings',
);
$fields['listing-mix-3-3'] = array(
	'name'            => '',
	'reset-blocks'    => TRUE,
	'id'              => 'listing-mix-3-3',
	'section_class'   => 'full-width-controls',
	'container_class' => 'advanced-block-settings have-group',
	'type'            => 'custom',
	'input_callback'  => array(
		'callback' => 'publisher_cb_blocks_setting_field',
		'args'     => array(
			array(
				'field' => 'listing-mix-3-3',
			)
		),
	),
	'ajax-tab-field'  => 'advanced_listings',
);
$fields['listing-mix-3-4'] = array(
	'name'            => '',
	'reset-blocks'    => TRUE,
	'id'              => 'listing-mix-3-4',
	'section_class'   => 'full-width-controls',
	'container_class' => 'advanced-block-settings have-group',
	'type'            => 'custom',
	'input_callback'  => array(
		'callback' => 'publisher_cb_blocks_setting_field',
		'args'     => array(
			array(
				'field' => 'listing-mix-3-4',
			)
		),
	),
	'ajax-tab-field'  => 'advanced_listings',
);
$fields['listing-mix-4-1'] = array(
	'name'            => '',
	'reset-blocks'    => TRUE,
	'id'              => 'listing-mix-4-1',
	'section_class'   => 'full-width-controls',
	'container_class' => 'advanced-block-settings have-group',
	'type'            => 'custom',
	'input_callback'  => array(
		'callback' => 'publisher_cb_blocks_setting_field',
		'args'     => array(
			array(
				'field' => 'listing-mix-4-1',
			)
		),
	),
	'ajax-tab-field'  => 'advanced_listings',
);
$fields['listing-mix-4-2'] = array(
	'name'            => '',
	'reset-blocks'    => TRUE,
	'id'              => 'listing-mix-4-2',
	'section_class'   => 'full-width-controls',
	'container_class' => 'advanced-block-settings have-group',
	'type'            => 'custom',
	'input_callback'  => array(
		'callback' => 'publisher_cb_blocks_setting_field',
		'args'     => array(
			array(
				'field' => 'listing-mix-4-2',
			)
		),
	),
	'ajax-tab-field'  => 'advanced_listings',
);
$fields['listing-mix-4-3'] = array(
	'name'            => '',
	'reset-blocks'    => TRUE,
	'id'              => 'listing-mix-4-3',
	'section_class'   => 'full-width-controls',
	'container_class' => 'advanced-block-settings have-group',
	'type'            => 'custom',
	'input_callback'  => array(
		'callback' => 'publisher_cb_blocks_setting_field',
		'args'     => array(
			array(
				'field' => 'listing-mix-4-3',
			)
		),
	),
	'ajax-tab-field'  => 'advanced_listings',
);
$fields['listing-mix-4-4'] = array(
	'name'            => '',
	'reset-blocks'    => TRUE,
	'id'              => 'listing-mix-4-4',
	'section_class'   => 'full-width-controls',
	'container_class' => 'advanced-block-settings have-group',
	'type'            => 'custom',
	'input_callback'  => array(
		'callback' => 'publisher_cb_blocks_setting_field',
		'args'     => array(
			array(
				'field' => 'listing-mix-4-4',
			)
		),
	),
	'ajax-tab-field'  => 'advanced_listings',
);
$fields['listing-mix-4-5'] = array(
	'name'            => '',
	'reset-blocks'    => TRUE,
	'id'              => 'listing-mix-4-5',
	'section_class'   => 'full-width-controls',
	'container_class' => 'advanced-block-settings have-group',
	'type'            => 'custom',
	'input_callback'  => array(
		'callback' => 'publisher_cb_blocks_setting_field',
		'args'     => array(
			array(
				'field' => 'listing-mix-4-5',
			)
		),
	),
	'ajax-tab-field'  => 'advanced_listings',
);
$fields['listing-mix-4-6'] = array(
	'name'            => '',
	'reset-blocks'    => TRUE,
	'id'              => 'listing-mix-4-6',
	'section_class'   => 'full-width-controls',
	'container_class' => 'advanced-block-settings have-group',
	'type'            => 'custom',
	'input_callback'  => array(
		'callback' => 'publisher_cb_blocks_setting_field',
		'args'     => array(
			array(
				'field' => 'listing-mix-4-6',
			)
		),
	),
	'ajax-tab-field'  => 'advanced_listings',
);
$fields['listing-mix-4-7'] = array(
	'name'            => '',
	'reset-blocks'    => TRUE,
	'id'              => 'listing-mix-4-7',
	'section_class'   => 'full-width-controls',
	'container_class' => 'advanced-block-settings have-group',
	'type'            => 'custom',
	'input_callback'  => array(
		'callback' => 'publisher_cb_blocks_setting_field',
		'args'     => array(
			array(
				'field' => 'listing-mix-4-7',
			)
		),
	),
	'ajax-tab-field'  => 'advanced_listings',
);
$fields['listing-mix-4-8'] = array(
	'name'            => '',
	'reset-blocks'    => TRUE,
	'id'              => 'listing-mix-4-8',
	'section_class'   => 'full-width-controls',
	'container_class' => 'advanced-block-settings have-group',
	'type'            => 'custom',
	'input_callback'  => array(
		'callback' => 'publisher_cb_blocks_setting_field',
		'args'     => array(
			array(
				'field' => 'listing-mix-4-8',
			)
		),
	),
	'ajax-tab-field'  => 'advanced_listings',
);


/**
 * -> Grid Listings
 */
$fields[]                 = array(
	'type'           => 'group_close',
	'ajax-tab-field' => 'advanced_listings',
);
$fields[]                 = array(
	'name'           => __( 'Grid Listings', 'publisher' ),
	'type'           => 'heading',
	'layout'         => 'style-2',
	'ajax-tab-field' => 'advanced_listings',
);
$fields['listing-grid-1'] = array(
	'name'            => '',
	'reset-blocks'    => TRUE,
	'id'              => 'listing-grid-1',
	'section_class'   => 'full-width-controls',
	'container_class' => 'advanced-block-settings have-group',
	'type'            => 'custom',
	'input_callback'  => array(
		'callback' => 'publisher_cb_blocks_setting_field',
		'args'     => array(
			array(
				'field' => 'listing-grid-1',
			)
		),
	),
	'ajax-tab-field'  => 'advanced_listings',
);
$fields['listing-grid-2'] = array(
	'name'            => '',
	'reset-blocks'    => TRUE,
	'id'              => 'listing-grid-2',
	'section_class'   => 'full-width-controls',
	'container_class' => 'advanced-block-settings have-group',
	'type'            => 'custom',
	'input_callback'  => array(
		'callback' => 'publisher_cb_blocks_setting_field',
		'args'     => array(
			array(
				'field' => 'listing-grid-2',
			)
		),
	),
	'ajax-tab-field'  => 'advanced_listings',
);


/**
 * -> Blog Listings
 */
$fields[]                 = array(
	'type'           => 'group_close',
	'ajax-tab-field' => 'advanced_listings',
);
$fields[]                 = array(
	'name'           => __( 'Blog Listings', 'publisher' ),
	'type'           => 'heading',
	'layout'         => 'style-2',
	'ajax-tab-field' => 'advanced_listings',
);
$fields['listing-blog-1'] = array(
	'name'            => '',
	'reset-blocks'    => TRUE,
	'id'              => 'listing-blog-1',
	'section_class'   => 'full-width-controls',
	'container_class' => 'advanced-block-settings have-group',
	'type'            => 'custom',
	'input_callback'  => array(
		'callback' => 'publisher_cb_blocks_setting_field',
		'args'     => array(
			array(
				'field' => 'listing-blog-1',
			)
		),
	),
	'ajax-tab-field'  => 'advanced_listings',
);
$fields['listing-blog-2'] = array(
	'name'            => '',
	'reset-blocks'    => TRUE,
	'id'              => 'listing-blog-2',
	'section_class'   => 'full-width-controls',
	'container_class' => 'advanced-block-settings have-group',
	'type'            => 'custom',
	'input_callback'  => array(
		'callback' => 'publisher_cb_blocks_setting_field',
		'args'     => array(
			array(
				'field' => 'listing-blog-2',
			)
		),
	),
	'ajax-tab-field'  => 'advanced_listings',
);
$fields['listing-blog-3'] = array(
	'name'            => '',
	'reset-blocks'    => TRUE,
	'id'              => 'listing-blog-3',
	'section_class'   => 'full-width-controls',
	'container_class' => 'advanced-block-settings have-group',
	'type'            => 'custom',
	'input_callback'  => array(
		'callback' => 'publisher_cb_blocks_setting_field',
		'args'     => array(
			array(
				'field' => 'listing-blog-3',
			)
		),
	),
	'ajax-tab-field'  => 'advanced_listings',
);
$fields['listing-blog-4'] = array(
	'name'            => '',
	'reset-blocks'    => TRUE,
	'id'              => 'listing-blog-4',
	'section_class'   => 'full-width-controls',
	'container_class' => 'advanced-block-settings have-group',
	'type'            => 'custom',
	'input_callback'  => array(
		'callback' => 'publisher_cb_blocks_setting_field',
		'args'     => array(
			array(
				'field' => 'listing-blog-4',
			)
		),
	),
	'ajax-tab-field'  => 'advanced_listings',
);
$fields['listing-blog-5'] = array(
	'name'            => '',
	'reset-blocks'    => TRUE,
	'id'              => 'listing-blog-5',
	'section_class'   => 'full-width-controls',
	'container_class' => 'advanced-block-settings have-group',
	'type'            => 'custom',
	'input_callback'  => array(
		'callback' => 'publisher_cb_blocks_setting_field',
		'args'     => array(
			array(
				'field' => 'listing-blog-5',
			)
		),
	),
	'ajax-tab-field'  => 'advanced_listings',
);


/**
 * -> Thumbnail Listings Options
 */
$fields[]                      = array(
	'type'           => 'group_close',
	'ajax-tab-field' => 'advanced_listings',
);
$fields[]                      = array(
	'name'           => __( 'Thumbnail Listings', 'publisher' ),
	'type'           => 'heading',
	'layout'         => 'style-2',
	'ajax-tab-field' => 'advanced_listings',
);
$fields['listing-thumbnail-1'] = array(
	'name'            => '',
	'reset-blocks'    => TRUE,
	'id'              => 'listing-thumbnail-1',
	'section_class'   => 'full-width-controls',
	'container_class' => 'advanced-block-settings have-group',
	'type'            => 'custom',
	'input_callback'  => array(
		'callback' => 'publisher_cb_blocks_setting_field',
		'args'     => array(
			array(
				'field' => 'listing-thumbnail-1',
			)
		),
	),
	'ajax-tab-field'  => 'advanced_listings',
);
$fields['listing-thumbnail-2'] = array(
	'name'            => '',
	'reset-blocks'    => TRUE,
	'id'              => 'listing-thumbnail-2',
	'section_class'   => 'full-width-controls',
	'container_class' => 'advanced-block-settings have-group',
	'type'            => 'custom',
	'input_callback'  => array(
		'callback' => 'publisher_cb_blocks_setting_field',
		'args'     => array(
			array(
				'field' => 'listing-thumbnail-2',
			)
		),
	),
	'ajax-tab-field'  => 'advanced_listings',
);
$fields['listing-thumbnail-3'] = array(
	'name'            => '',
	'reset-blocks'    => TRUE,
	'id'              => 'listing-thumbnail-3',
	'section_class'   => 'full-width-controls',
	'container_class' => 'advanced-block-settings have-group',
	'type'            => 'custom',
	'input_callback'  => array(
		'callback' => 'publisher_cb_blocks_setting_field',
		'args'     => array(
			array(
				'field' => 'listing-thumbnail-3',
			)
		),
	),
	'ajax-tab-field'  => 'advanced_listings',
);


/**
 * => Text Listings
 */
$fields[]                 = array(
	'type'           => 'group_close',
	'ajax-tab-field' => 'advanced_listings',
);
$fields[]                 = array(
	'name'           => __( 'Text Listings', 'publisher' ),
	'type'           => 'heading',
	'layout'         => 'style-2',
	'ajax-tab-field' => 'advanced_listings',
);
$fields['listing-text-1'] = array(
	'name'            => '',
	'reset-blocks'    => TRUE,
	'id'              => 'listing-text-1',
	'section_class'   => 'full-width-controls',
	'container_class' => 'advanced-block-settings have-group',
	'type'            => 'custom',
	'input_callback'  => array(
		'callback' => 'publisher_cb_blocks_setting_field',
		'args'     => array(
			array(
				'field' => 'listing-text-1',
			)
		),
	),
	'ajax-tab-field'  => 'advanced_listings',
);
$fields['listing-text-2'] = array(
	'name'            => '',
	'reset-blocks'    => TRUE,
	'id'              => 'listing-text-2',
	'section_class'   => 'full-width-controls',
	'container_class' => 'advanced-block-settings have-group',
	'type'            => 'custom',
	'input_callback'  => array(
		'callback' => 'publisher_cb_blocks_setting_field',
		'args'     => array(
			array(
				'field' => 'listing-text-2',
			)
		),
	),
	'ajax-tab-field'  => 'advanced_listings',
);
$fields['listing-text-3'] = array(
	'name'            => '',
	'reset-blocks'    => TRUE,
	'id'              => 'listing-text-3',
	'section_class'   => 'full-width-controls',
	'container_class' => 'advanced-block-settings have-group',
	'type'            => 'custom',
	'input_callback'  => array(
		'callback' => 'publisher_cb_blocks_setting_field',
		'args'     => array(
			array(
				'field' => 'listing-text-3',
			)
		),
	),
	'ajax-tab-field'  => 'advanced_listings',
);
$fields['listing-text-4'] = array(
	'name'            => '',
	'reset-blocks'    => TRUE,
	'id'              => 'listing-text-4',
	'section_class'   => 'full-width-controls',
	'container_class' => 'advanced-block-settings have-group',
	'type'            => 'custom',
	'input_callback'  => array(
		'callback' => 'publisher_cb_blocks_setting_field',
		'args'     => array(
			array(
				'field' => 'listing-text-4',
			)
		),
	),
	'ajax-tab-field'  => 'advanced_listings',
);


/**
 * -> Classic Listings options
 */
$fields[]                    = array(
	'type'           => 'group_close',
	'ajax-tab-field' => 'advanced_listings',
);
$fields[]                    = array(
	'name'           => __( 'Classic Listings', 'publisher' ),
	'type'           => 'heading',
	'layout'         => 'style-2',
	'ajax-tab-field' => 'advanced_listings',
);
$fields['listing-classic-1'] = array(
	'name'            => '',
	'reset-blocks'    => TRUE,
	'id'              => 'listing-classic-1',
	'section_class'   => 'full-width-controls',
	'container_class' => 'advanced-block-settings have-group',
	'type'            => 'custom',
	'input_callback'  => array(
		'callback' => 'publisher_cb_blocks_setting_field',
		'args'     => array(
			array(
				'field' => 'listing-classic-1',
			)
		),
	),
	'ajax-tab-field'  => 'advanced_listings',
);
$fields['listing-classic-2'] = array(
	'name'            => '',
	'reset-blocks'    => TRUE,
	'id'              => 'listing-classic-2',
	'section_class'   => 'full-width-controls',
	'container_class' => 'advanced-block-settings have-group',
	'type'            => 'custom',
	'input_callback'  => array(
		'callback' => 'publisher_cb_blocks_setting_field',
		'args'     => array(
			array(
				'field' => 'listing-classic-2',
			)
		),
	),
	'ajax-tab-field'  => 'advanced_listings',
);
$fields['listing-classic-3'] = array(
	'name'            => '',
	'reset-blocks'    => TRUE,
	'id'              => 'listing-classic-3',
	'section_class'   => 'full-width-controls',
	'container_class' => 'advanced-block-settings have-group',
	'type'            => 'custom',
	'input_callback'  => array(
		'callback' => 'publisher_cb_blocks_setting_field',
		'args'     => array(
			array(
				'field' => 'listing-classic-3',
			)
		),
	),
	'ajax-tab-field'  => 'advanced_listings',
);


/**
 * => Tall listings
 */
$fields[]                 = array(
	'type'           => 'group_close',
	'ajax-tab-field' => 'advanced_listings',
);
$fields[]                 = array(
	'name'           => __( 'Tall Listings', 'publisher' ),
	'type'           => 'heading',
	'layout'         => 'style-2',
	'ajax-tab-field' => 'advanced_listings',
);
$fields['listing-tall-1'] = array(
	'name'            => '',
	'reset-blocks'    => TRUE,
	'id'              => 'listing-tall-1',
	'section_class'   => 'full-width-controls',
	'container_class' => 'advanced-block-settings have-group',
	'type'            => 'custom',
	'input_callback'  => array(
		'callback' => 'publisher_cb_blocks_setting_field',
		'args'     => array(
			array(
				'field' => 'listing-tall-1',
			)
		),
	),
	'ajax-tab-field'  => 'advanced_listings',
);
$fields['listing-tall-2'] = array(
	'name'            => '',
	'reset-blocks'    => TRUE,
	'id'              => 'listing-tall-2',
	'section_class'   => 'full-width-controls',
	'container_class' => 'advanced-block-settings have-group',
	'type'            => 'custom',
	'input_callback'  => array(
		'callback' => 'publisher_cb_blocks_setting_field',
		'args'     => array(
			array(
				'field' => 'listing-tall-2',
			)
		),
	),
	'ajax-tab-field'  => 'advanced_listings',
);


$fields[] = array(
	'type'           => 'group_close',
	'ajax-tab-field' => 'advanced_listings',
);
$fields[] = array(
	'name'           => __( 'Other', 'publisher' ),
	'type'           => 'heading',
	'layout'         => 'style-2',
	'ajax-tab-field' => 'advanced_listings',
);

/**
 * => Grid Related Posts
 */
$fields['blocks-related-posts'] = array(
	'name'            => '',
	'reset-blocks'    => TRUE,
	'id'              => 'blocks-related-posts',
	'section_class'   => 'full-width-controls',
	'container_class' => 'advanced-block-settings have-group',
	'type'            => 'custom',
	'input_callback'  => array(
		'callback' => 'publisher_cb_blocks_setting_field',
		'args'     => array(
			array(
				'field' => 'blocks-related-posts',
			)
		),
	),
	'ajax-tab-field'  => 'advanced_listings',
);


/**
 * => Mega Menu
 */
$fields['blocks-mega-menu'] = array(
	'name'            => '',
	'reset-blocks'    => TRUE,
	'id'              => 'blocks-mega-menu',
	'section_class'   => 'full-width-controls',
	'container_class' => 'advanced-block-settings have-group',
	'type'            => 'custom',
	'input_callback'  => array(
		'callback' => 'publisher_cb_blocks_setting_field',
		'args'     => array(
			array(
				'field' => 'blocks-mega-menu',
			)
		),
	),
	'ajax-tab-field'  => 'advanced_listings',
);


/**
 * => Default Thumbnail
 */
$fields[]                             = array(
	'name'  => __( 'Default Thumbnail', 'publisher' ),
	'id'    => 'thumbnail_settings',
	'type'  => 'tab',
	'icon'  => 'bsai-image',
	'badge' => array(
		'text'  => __( 'Updated', 'publisher' ),
		'color' => '#2d9ec7'
	)
);
$fields['bsbt_thumbnail_placeholder'] = array(
	'name'      => __( 'Enable Default Thumbnails Placeholder', 'publisher' ),
	'id'        => 'bsbt_thumbnail_placeholder',
	'type'      => 'switch',
	'on-label'  => __( 'Yes', 'publisher' ),
	'off-label' => __( 'No', 'publisher' ),
	'desc'      => __( 'You can set default thumbnail for post that haven\' featured image with enabling this option and uploading default image in following field', 'publisher' ),
);
$fields['bsbt_default_thumbnail']     = array(
	'name'         => __( 'Default Thumbnail Image', 'publisher' ),
	'id'           => 'bsbt_default_thumbnail',
	'data-type'    => 'id',
	'desc'         => __( 'By default, the post thumbnail will be shown but when the post haven\'nt thumbnail then this will be replaced', 'publisher' ),
	'type'         => 'media_image',
	'media_title'  => __( 'Select or Image', 'publisher' ),
	'media_button' => __( 'Select Image', 'publisher' ),
	'upload_label' => __( 'Upload Image', 'publisher' ),
	'remove_label' => __( 'Remove', 'publisher' ),

	'show_on' => array(
		array( 'bsbt_thumbnail_placeholder=1' )
	),
);
$fields['bsbt_thumbnail_first_img']   = array(
	'name'      => __( 'First Image as Post Thumbnail', 'publisher' ),
	'desc'      => __( 'With enabling this options if any post have not thumbnail then theme will shows first content image as post thumbnail.', 'publisher' ),
	'id'        => 'bsbt_thumbnail_first_img',
	'type'      => 'switch',
	'on-label'  => __( 'Yes', 'publisher' ),
	'off-label' => __( 'No', 'publisher' ),
);

/**
 * => Advanced Options
 */
$fields[] = array(
	'name' => __( 'Advanced', 'publisher' ),
	'id'   => 'advanced_settings',
	'type' => 'tab',
	'icon' => 'bsai-gear'
);


// Favicon fallback for old WP versions
//if ( ! function_exists( 'has_site_icon' ) ) {
$fields[]                  = array(
	'name'  => __( 'Favicons', 'publisher' ),
	'id'    => 'favicon_heading',
	'type'  => 'group',
	'state' => 'close',
);
$fields['favicon_16_16']   = array(
	'name'         => __( 'Favicon (16x16)', 'publisher' ),
	'id'           => 'favicon_16_16',
	'type'         => 'media_image',
	'desc'         => __( 'Default Favicon. 16px x 16px', 'publisher' ),
	'media_title'  => __( 'Select or Upload Favicon', 'publisher' ),
	'media_button' => __( 'Select Favicon', 'publisher' ),
	'upload_label' => __( 'Upload Favicon', 'publisher' ),
	'remove_label' => __( 'Remove Favicon', 'publisher' ),
);
$fields['favicon_57_57']   = array(
	'name'         => __( 'Apple iPhone Icon (57x57)', 'publisher' ),
	'id'           => 'favicon_57_57',
	'type'         => 'media_image',
	'desc'         => __( 'Icon for Classic iPhone', 'publisher' ),
	'media_title'  => __( 'Select or Upload Favicon', 'publisher' ),
	'media_button' => __( 'Select Favicon', 'publisher' ),
	'upload_label' => __( 'Upload Favicon', 'publisher' ),
	'remove_label' => __( 'Remove Favicon', 'publisher' ),
);
$fields['favicon_114_114'] = array(
	'name'         => __( 'Apple iPhone Retina Icon (114x114)', 'publisher' ),
	'id'           => 'favicon_114_114',
	'type'         => 'media_image',
	'desc'         => __( 'Icon for Retina iPhone', 'publisher' ),
	'media_title'  => __( 'Select or Upload Favicon', 'publisher' ),
	'media_button' => __( 'Select Favicon', 'publisher' ),
	'upload_label' => __( 'Upload Favicon', 'publisher' ),
	'remove_label' => __( 'Remove Favicon', 'publisher' ),
);
$fields['favicon_72_72']   = array(
	'name'         => __( 'Apple iPad Icon (72x72)', 'publisher' ),
	'id'           => 'favicon_72_72',
	'type'         => 'media_image',
	'desc'         => __( 'Icon for Classic iPad', 'publisher' ),
	'media_title'  => __( 'Select or Upload Favicon', 'publisher' ),
	'media_button' => __( 'Select Favicon', 'publisher' ),
	'upload_label' => __( 'Upload Favicon', 'publisher' ),
	'remove_label' => __( 'Remove Favicon', 'publisher' ),
);
$fields['favicon_144_144'] = array(
	'name'         => __( 'Apple iPad Retina Icon (144x144)', 'publisher' ),
	'id'           => 'favicon_144_144',
	'type'         => 'media_image',
	'desc'         => __( 'Icon for Retina iPad', 'publisher' ),
	'media_title'  => __( 'Select or Upload Favicon', 'publisher' ),
	'media_button' => __( 'Select Favicon', 'publisher' ),
	'upload_label' => __( 'Upload Favicon', 'publisher' ),
	'remove_label' => __( 'Remove Favicon', 'publisher' ),
);
//} // if has_site_icon

$fields[]                                       = array(
	'type' => 'group_close',
);
$fields[]                                       = array(
	'name'   => __( 'Posts', 'publisher' ),
	'type'   => 'heading',
	'layout' => 'style-2',
);
$fields[]                                       = array(
	'name'  => __( 'No Duplicate Posts', 'publisher' ),
	'type'  => 'group',
	'state' => 'close',
);
$fields['bs_remove_duplicate_posts_full']       = array(
	'name'      => __( 'Enable For Whole Site', 'publisher' ),
	'id'        => 'bs_remove_duplicate_posts_full',
	'type'      => 'switch',
	'on-label'  => __( 'Yes', 'publisher' ),
	'off-label' => __( 'No', 'publisher' ),
	'desc'      => __( 'Enabling this feature will remove duplicate posts in whole site.', 'publisher' ),
);
$fields['bs_remove_duplicate_posts']            = array(
	'name'      => __( 'Enable In Homepage', 'publisher' ),
	'id'        => 'bs_remove_duplicate_posts',
	'type'      => 'switch',
	'on-label'  => __( 'Yes', 'publisher' ),
	'off-label' => __( 'No', 'publisher' ),
	'desc'      => __( 'Enabling this feature will remove duplicate posts in home page.', 'publisher' ),
);
$fields['bs_remove_duplicate_posts_categories'] = array(
	'name'      => __( 'Enable In Category Archive Page', 'publisher' ),
	'id'        => 'bs_remove_duplicate_posts_categories',
	'type'      => 'switch',
	'on-label'  => __( 'Yes', 'publisher' ),
	'off-label' => __( 'No', 'publisher' ),
	'desc'      => __( 'Enabling this feature will remove duplicate posts in category archive pages.', 'publisher' ),
);
$fields['bs_remove_duplicate_posts_tags']       = array(
	'name'      => __( 'Enable In Tag Archive Page', 'publisher' ),
	'id'        => 'bs_remove_duplicate_posts_tags',
	'type'      => 'switch',
	'on-label'  => __( 'Yes', 'publisher' ),
	'off-label' => __( 'No', 'publisher' ),
	'desc'      => __( 'Enabling this feature will remove duplicate posts in tag archive pages.', 'publisher' ),
);
$fields[]                                       = array(
	'name'  => __( 'Posts Admin Advanced Fields', 'publisher' ),
	'type'  => 'group',
	'state' => 'close',
);
$fields['advanced_post_fields_subtitle']        = array(
	'name'      => __( 'Subtitle?', 'publisher' ),
	'id'        => 'advanced_post_fields_subtitle',
	'desc'      => __( 'With enabling this feature a new filed will be added to under post title in admin and the subtitle will be shown under posts title in site.', 'publisher' ),
	'type'      => 'switch',
	'on-label'  => __( 'Enable', 'publisher' ),
	'off-label' => __( 'Disable', 'publisher' ),
);
$fields['advanced_post_fields_excerpt']         = array(
	'name'      => __( 'Move excerpt box after post title?', 'publisher' ),
	'id'        => 'advanced_post_fields_excerpt',
	'desc'      => __( 'This feature will move the default excerpt box to bottom of post title. You can edit and create posts quickly with this feature.', 'publisher' ),
	'type'      => 'switch',
	'on-label'  => __( 'Yes, Move', 'publisher' ),
	'off-label' => __( 'No', 'publisher' ),
);
$fields[]                                       = array(
	'name'  => __( 'Editor', 'publisher' ),
	'type'  => 'group',
	'state' => 'close',
);
$fields['advanced_post_editor_sidebars']        = array(
	'name'      => __( 'Show sidebar helpers in posts editor?', 'publisher' ),
	'id'        => 'advanced_post_editor_sidebars',
	'desc'      => __( 'This is an smart feature that shows the location of sidebars in WordPress editor for you.', 'publisher' ),
	'type'      => 'switch',
	'on-label'  => __( 'Yes, Move', 'publisher' ),
	'off-label' => __( 'No', 'publisher' ),
);

$fields[]                                = array(
	'type' => 'group_close',
);
$fields[]                                = array(
	'name'   => __( 'Custom Post Types & Taxonomies', 'publisher' ),
	'type'   => 'heading',
	'layout' => 'style-2',
);
$fields[]                                = array(
	'name'  => __( 'Customize Post and Page Options', 'publisher' ),
	'type'  => 'group',
	'state' => 'close',
);
$fields['advanced_post_options_types']   = array(
	'name'       => __( 'Add Post Options To Other Post Types', 'publisher' ),
	'id'         => 'advanced_post_options_types',
	'desc'       => __( 'Enter custom post types IDs here to adding post meta box to them.', 'publisher' ),
	'input-desc' => __( 'Separate post types with ","', 'publisher' ),
	'type'       => 'text',
	'ltr'        => TRUE
);
$fields[]                                = array(
	'name'  => __( 'Customize Category and Tag Options', 'publisher' ),
	'type'  => 'group',
	'state' => 'close',
);
$fields['advanced_category_options_tax'] = array(
	'name'       => __( 'Add Category Options to Other Taxonomies', 'publisher' ),
	'id'         => 'advanced_category_options_tax',
	'desc'       => __( 'Enter custom taxonomy IDs here to adding category meta box to them.', 'publisher' ),
	'input-desc' => __( 'Separate taxonomies with ","', 'publisher' ),
	'type'       => 'text',
	'ltr'        => TRUE
);
$fields['advanced_tag_options_tax']      = array(
	'name'       => __( 'Add Tag Options to Other Taxonomies', 'publisher' ),
	'id'         => 'advanced_tag_options_tax',
	'desc'       => __( 'Enter custom taxonomy IDs here to adding tag meta box to them.', 'publisher' ),
	'input-desc' => __( 'Separate taxonomies with ","', 'publisher' ),
	'type'       => 'text',
	'ltr'        => TRUE
);

$fields[]                                  = array(
	'type' => 'group_close',
);
$fields[]                                  = array(
	'name'   => __( 'Menu', 'publisher' ),
	'type'   => 'heading',
	'layout' => 'style-2',
);
$fields[]                                  = array(
	'name'  => __( 'Menu Configuration', 'publisher' ),
	'type'  => 'group',
	'state' => 'close',
);
$fields['display_themename_adminbar_menu'] = array(
	'name'      => __( 'Show publisher adminbar menu', 'publisher' ),
	'id'        => 'display_themename_adminbar_menu',
	'desc'      => __( 'You can disable Publisher admibar menu with this option.', 'publisher' ),
	'type'      => 'switch',
	'on-label'  => __( 'Yes, Show', 'publisher' ),
	'off-label' => __( 'No', 'publisher' ),
);
$fields['advanced_collect_more_menu']      = array(
	'name'      => __( 'Collect all extra menu items to "More" in menu?', 'publisher' ),
	'id'        => 'advanced_collect_more_menu',
	'desc'      => __( 'This feature will collect\'s all extra menu items and move them into "More" menu item in end of menu to make sure all menu items will be shown in all screen sizes.', 'publisher' ),
	'type'      => 'switch',
	'on-label'  => __( 'Yes, Collect', 'publisher' ),
	'off-label' => __( 'No', 'publisher' ),
);

$fields[]                                  = array(
	'type' => 'group_close',
);
$fields[]                                  = array(
	'name'   => __( 'Other', 'publisher' ),
	'type'   => 'heading',
	'layout' => 'style-2',
);
$fields[]                                  = array(
	'name'  => __( 'Google Tag Manager', 'publisher' ),
	'type'  => 'group',
	'state' => 'close',
	'desc'  => __( 'Publisher support Google Tag Manager by default and only you need to paste GTM code into following fields. You can find the codes in <a href="https://goo.gl/oNYWyK">GTM Quick Start Guide</a>.', 'publisher' ),
);
$fields['gtm_head']                        = array(
	'name' => __( 'GTM &#x3C;head&#x3E; code', 'publisher' ),
	'id'   => 'gtm_head',
	'desc' => __( 'Enter GTM code that should be appear after &#x3C;head&#x3E; in this field.', 'publisher' ),
	'type' => 'textarea',
);
$fields['gtm_body']                        = array(
	'name' => __( 'GTM &#x3C;body&#x3E; code', 'publisher' ),
	'id'   => 'gtm_body',
	'desc' => __( 'Enter GTM code that should be appear after &#x3C;body&#x3E; in this field.', 'publisher' ),
	'type' => 'textarea',
);


/**
 * => Custom Javascript / CSS
 */
bf_inject_panel_custom_css_fields( $fields, array(
	'advanced-class' => TRUE
) );
$fields[]                  = array(
	'name'           => __( 'Admin Custom CSS', 'publisher' ),
	'type'           => 'group',
	'state'          => 'close',
	'ajax-tab-field' => '_custom_css_settings',
);
$fields['_admin_css_code'] = array(
	'name'           => __( 'Admin Pages CSS Code', 'publisher' ),
	'id'             => '_admin_css_code',
	'type'           => 'editor',
	'section_class'  => 'width-70',
	'lang'           => 'css',
	'desc'           => __( 'You can change admin pages style with adding CSS code into this field.', 'publisher' ),
	'ajax-tab-field' => '_custom_css_settings',
);


/**
 * => Analytics & JS
 */
bf_inject_panel_custom_codes_fields( $fields, array(
	'tab-title'         => __( 'Analytics/Custom Code', 'publisher' ),
	'footer-code-title' => __( 'Google Analytics and JavaScript Codes', 'publisher' ),
	'footer-code-desc'  => __( 'This code will be placed <b>before</b> <code>&lt;/body&gt;</code> tag in html. Please put code inside script tags.', 'publisher' ),
) );


/**
 * => Import & Export
 */
bf_inject_panel_import_export_fields( $fields, array(
	'panel-id'         => publisher_get_theme_panel_id(),
	'export-file-name' => 'publisher-options-backup',
) );
