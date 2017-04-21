<?php

/**
 * => Post Options
 */
$fields['bs_featured_image_credit'] = array(
	'std' => '',
);
$fields['_featured_embed_code']     = array(
	'std' => '',
);

$fields['page_layout'] = array(
	'std' => 'default',
);

// Page template
if ( ! is_admin() || bf_get_admin_current_post_type() !== 'page' ) {
	$fields['post_template']        = array(
		'std' => 'default',
	);
	$fields['_bs_primary_category'] = array(
		'std' => 'auto-detect',
	);
	$fields['_bs_source_name']      = array(
		'std'      => '',
		'save-std' => TRUE,
	);
	$fields['_bs_source_url']       = array(
		'std'      => '',
		'save-std' => TRUE,
	);
	$fields['_bs_source_rel']       = array(
		'std'      => 'nofollow_blank',
		'save-std' => TRUE,
	);
	$fields['_bs_source_name_2']    = array(
		'std'      => '',
		'save-std' => TRUE,
	);
	$fields['_bs_source_url_2']     = array(
		'std'      => '',
		'save-std' => TRUE,
	);
	$fields['_bs_source_rel_2']     = array(
		'std'      => 'nofollow_blank',
		'save-std' => TRUE,
	);
	$fields['_bs_source_name_3']    = array(
		'std'      => '',
		'save-std' => TRUE,
	);
	$fields['_bs_source_url_3']     = array(
		'std'      => '',
		'save-std' => TRUE,
	);
	$fields['_bs_source_rel_3']     = array(
		'std'      => 'nofollow_blank',
		'save-std' => TRUE,
	);
	$fields['_bs_via_name']         = array(
		'std'      => '',
		'save-std' => TRUE,
	);
	$fields['_bs_via_url']          = array(
		'std'      => '',
		'save-std' => TRUE,
	);
	$fields['_bs_via_rel']          = array(
		'std'      => 'nofollow_blank',
		'save-std' => TRUE,
	);
	$fields['_bs_via_name_2']       = array(
		'std'      => '',
		'save-std' => TRUE,
	);
	$fields['_bs_via_url_2']        = array(
		'std'      => '',
		'save-std' => TRUE,
	);
	$fields['_bs_via_rel_2']        = array(
		'std'      => 'nofollow_blank',
		'save-std' => TRUE,
	);
	$fields['_bs_via_name_3']       = array(
		'std'      => '',
		'save-std' => TRUE,
	);
	$fields['_bs_via_url_3']        = array(
		'std'      => '',
		'save-std' => TRUE,
	);
	$fields['_bs_via_rel_3']        = array(
		'std'      => 'nofollow_blank',
		'save-std' => TRUE,
	);
	$fields['post_related']         = array(
		'std' => 'default',
	);
}

$fields['post_comments'] = array(
	'std' => 'default',
);

$fields['post_breadcrumb'] = array(
	'std' => 'default',
);

// page fields
if ( ! is_admin() || bf_get_admin_current_post_type() !== 'post' ) {

	$fields['_hide_title']                 = array(
		'std' => '0',
	);
	$fields['_page_simple_in_pagebuilder'] = array(
		'std' => 'default',
	);
}

if ( ! is_admin() || bf_get_admin_current_post_type() !== 'post' || bf_is_doing_ajax() ) {

	/**
	 * => Header Options
	 */
	$fields['header_style']  = array(
		'std' => 'default',
	);
	$fields['header_layout'] = array(
		'std' => 'default',
	);
	$fields['main_nav_menu'] = array(
		'std' => 'default',
	);

	/**
	 * => Header Background style
	 */
	$fields['header_bg_color'] = array(
		'std' => '',
	);
	$fields['header_bg_image'] = array(
		'std' => '',
	);

	/**
	 * -> Logo
	 */
	$fields['logo_image']            = array(
		'std'      => '',
		'save-std' => FALSE,
	);
	$fields['logo_image_retina']     = array(
		'std'      => '',
		'save-std' => FALSE,
	);
	$fields['header_top_padding']    = array(
		'std' => '',
	);
	$fields['header_bottom_padding'] = array(
		'std' => '',
	);


	/**
	 * => Footer Options
	 */
	$fields['footer_style'] = array(
		'std' => 'default',
	);

}


/**
 * -> Background
 */
$fields['bg_color'] = array(
	'std' => '',
);
$fields['bg_image'] = array(
	'std' => '',
);


/**
 * -> Custom CSS
 */
$fields['_custom_css_code']                  = array(
	'std' => '',
);
$fields['_custom_css_class']                 = array(
	'std' => '',
);
$fields['_loop_css_class']                   = array(
	'std' => '',
);
$fields['_custom_css_desktop_code']          = array(
	'std' => '',
);
$fields['_custom_css_tablet_landscape_code'] = array(
	'std' => '',
);
$fields['_custom_css_tablet_portrait_code']  = array(
	'std' => '',
);
$fields['_custom_css_phones_code']           = array(
	'std' => '',
);
