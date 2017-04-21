<?php


/**
 * => Style
 */
$fields[]                       = array(
	'name' => __( 'Style', 'publisher' ),
	'id'   => 'tab_style',
	'type' => 'tab',
	'icon' => 'bsai-paint',
);
$fields['page_layout']          = array(
	'name'             => __( 'Page Layout', 'publisher' ),
	'id'               => 'page_layout',
	'type'             => 'image_radio',
	'section_class'    => 'style-floated-left bordered',
	'desc'             => __( 'Select and override page layout for this tag.', 'publisher' ),
	'deferred-options' => array(
		'callback' => 'publisher_layout_option_list',
		'args'     => array(
			TRUE,
		),
	),
);
$fields['page_listing']         = array(
	'name'             => __( 'Posts Listing', 'publisher' ),
	'id'               => 'page_listing',
	'type'             => 'image_radio',
	'section_class'    => 'style-floated-left bordered',
	'desc'             => __( 'Select and override posts listing for this tag.', 'publisher' ),
	'deferred-options' => array(
		'callback' => 'publisher_listing_option_list',
		'args'     => array(
			TRUE,
		),
	),
);
$fields['page_listing_excerpt'] = array(
	'name'    => __( 'Show Excerpt?', 'publisher' ),
	'id'      => 'page_listing_excerpt',
	'type'    => 'select',
	'desc'    => __( 'Select show or hide post excerpt in listings with excerpt.', 'publisher' ),
	'options' => array(
		'default' => __( '-- Default --', 'publisher' ),
		'show'    => __( 'Yes, Show.', 'publisher' ),
		'hide'    => __( 'No.', 'publisher' ),
	)
);
$fields['term_posts_count']     = array(
	'name' => __( 'Number of Post to Show', 'publisher' ),
	'id'   => 'term_posts_count',
	'desc' => wp_kses( sprintf( __( 'Leave this empty for default. <br>Default: %s', 'publisher' ), publisher_get_option( 'tag_posts_count' ) != '' ? publisher_get_option( 'tag_posts_count' ) : get_option( 'posts_per_page' ) ), bf_trans_allowed_html() ),
	'type' => 'text',
);
$fields['term_pagination_type'] = array(
	'name'             => __( 'Tag pagination', 'publisher' ),
	'id'               => 'term_pagination_type',
	'type'             => 'select',
	'desc'             => __( 'Select pagination of this tag.', 'publisher' ),
	'deferred-options' => array(
		'callback' => 'publisher_pagination_option_list',
		'args'     => array(
			TRUE,
		),
	),
);

/**
 * => Title
 */
$fields[]                        = array(
	'name' => __( 'Title', 'publisher' ),
	'id'   => 'tab_title',
	'type' => 'tab',
	'icon' => 'bsai-title',
);
$fields['term_custom_pre_title'] = array(
	'name' => __( 'Custom Pre Title', 'publisher' ),
	'id'   => 'term_custom_pre_title',
	'type' => 'text',
	'desc' => __( 'Customize tag pre title with this option for making tag page more specific.', 'publisher' ),
);
$fields['term_custom_title']     = array(
	'name' => __( 'Custom Tag Title', 'publisher' ),
	'id'   => 'term_custom_title',
	'type' => 'text',
	'desc' => __( 'Change tag title or leave empty for default title', 'publisher' ),
);
$fields['hide_term_title']       = array(
	'name'      => __( 'Hide Tag Title', 'publisher' ),
	'id'        => 'hide_term_title',
	'type'      => 'switch',
	'on-label'  => __( 'Yes', 'publisher' ),
	'off-label' => __( 'No', 'publisher' ),
	'desc'      => __( 'Enable this for hiding tag title', 'publisher' ),
);
$fields['hide_term_description'] = array(
	'name'      => __( 'Hide Tag Description', 'publisher' ),
	'id'        => 'hide_term_description',
	'type'      => 'switch',
	'on-label'  => __( 'Yes', 'publisher' ),
	'off-label' => __( 'No', 'publisher' ),
	'desc'      => __( 'Enable this for hiding tag description', 'publisher' ),
);


/**
 *
 * Adds custom CSS options for metabox
 *
 */
bf_inject_panel_custom_css_fields( $fields );