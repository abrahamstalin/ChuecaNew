<?php

$fields['layout-2-col'] = array(
	'css'              => array(
		'callback' => 'publisher_cb_css_generator_layout_2_col'
	),
	'css-echo-default' => TRUE,
);

$fields['layout-3-col'] = array(
	'css'              => array(
		'callback' => 'publisher_cb_css_generator_layout_3_col'
	),
	'css-echo-default' => TRUE,
);

$fields['layout_columns_space'] = array(
	'css'              => array(
		'callback' => 'publisher_cb_css_generator_columns_space'
	),
	'css-echo-default' => TRUE,
);

$fields['header_top_padding'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.site-header.header-style-1 .header-inner',
							1 => '.site-header.header-style-2 .header-inner',
							2 => '.site-header.header-style-3 .header-inner',
							3 => '.site-header.header-style-4 .header-inner',
							4 => '.site-header.header-style-7 .header-inner',
						),
					'prop'     =>
						array(
							'padding-top' => '%%value%%px',
						),
				),
		),
	'css-echo-default' => FALSE,
);

$fields['header_bottom_padding'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.site-header.header-style-1 .header-inner',
							1 => '.site-header.header-style-2 .header-inner',
							2 => '.site-header.header-style-3 .header-inner',
							3 => '.site-header.header-style-4 .header-inner',
							4 => '.site-header.header-style-7 .header-inner',
						),
					'prop'     =>
						array(
							'padding-bottom' => '%%value%%px',
						),
				),
		),
	'css-echo-default' => FALSE,
);

$fields['theme_color'] = array(
	'css'              => include PUBLISHER_THEME_PATH . 'includes/options/panel-css-theme_color.php',
	'css-echo-default' => TRUE,
);

$fields['site_bg_color'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => 'body',
							1 => 'body.boxed',
						),
					'prop'     =>
						array(
							'background-color' => '%%value%%',
						),
				),
		),
	'css-echo-default' => FALSE,
);

$fields['site_bg_image'] = array(
	'css' =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => 'body',
						),
					'prop'     =>
						array(
							0 => 'background-image',
						),
					'type'     => 'background-image',
				),
		),
);

$fields['topbar_date_bg'] = array(
	'css' =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.topbar .topbar-date.topbar-date',
						),
					'prop'     =>
						array(
							'background-color' => '%%value%% !important',
						),
				),
		),
);

$fields['topbar_date_color'] = array(
	'css' =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.topbar .topbar-date.topbar-date',
						),
					'prop'     =>
						array(
							'color' => '%%value%% !important',
						),
				),
		),
);

$fields['topbar_text_color'] = array(
	'css' =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.site-header .top-menu.menu > li > a',
							1 => '.topbar .better-newsticker ul.news-list li a',
							2 => '.topbar .better-newsticker .control-nav span',
							3 => '.topbar .topbar-sign-in',
						),
					'prop'     =>
						array(
							'color' => '%%value%%',
						),
				),
		),
);

$fields['topbar_text_hcolor'] = array(
	'css' =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.site-header .top-menu.menu > li:hover > a',
							1 => '.site-header .top-menu.menu .sub-menu > li:hover > a',
							2 => '.topbar .better-newsticker ul.news-list li a',
							3 => '.topbar .topbar-sign-in:hover',
						),
					'prop'     =>
						array(
							'color' => '%%value%% !important',
						),
				),
		),
);

$fields['topbar_bg_color'] = array(
	'css' =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.site-header.full-width .topbar',
						),
					'prop'     =>
						array(
							'background-color' => '%%value%%',
						),
				),
			1 =>
				array(
					'selector' =>
						array(
							0 => '.site-header.boxed .topbar .topbar-inner',
						),
					'prop'     =>
						array(
							'background-color' => '%%value%%; padding-left:15px; padding-right:15px',
						),
				),
		),
);

$fields['topbar_border_color'] = array(
	'css' =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.site-header.full-width .topbar',
							1 => '.site-header.boxed .topbar .topbar-inner',
						),
					'prop'     =>
						array(
							'border-color' => '%%value%%',
						),
				),
		),
);

$fields['topbar_icon_text_color'] = array(
	'css' =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.topbar .better-social-counter.style-button .social-item .item-icon',
						),
					'prop'     =>
						array(
							'color' => '%%value%%',
						),
				),
		),
);

$fields['topbar_icon_text_hcolor'] = array(
	'css' =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.topbar .better-social-counter.style-button .social-item:hover .item-icon',
						),
					'prop'     =>
						array(
							'color' => '%%value%%',
						),
				),
		),
);

$fields['topbar_icon_bg'] = array(
	'css' =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.topbar .better-social-counter.style-button .social-item .item-icon',
						),
					'prop'     =>
						array(
							'background' => '%%value%%',
						),
				),
		),
);

$fields['topbar_icon_bg_hover'] = array(
	'css' =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.topbar .better-social-counter.style-button .social-item:hover .item-icon',
						),
					'prop'     =>
						array(
							'background' => '%%value%%',
						),
				),
		),
);

$fields['header_top_border_color'] = array(
	'css' =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => 'body.active-top-line .main-wrap',
						),
					'prop'     =>
						array(
							'border-color' => '%%value%% !important',
						),
				),
		),
);

$fields['header_menu_btop_color'] = array(
	'css' =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.site-header.boxed .main-menu-wrapper .main-menu-container',
							1 => '.site-header.full-width .main-menu-wrapper',
						),
					'prop'     =>
						array(
							'border-top-color' => '%%value%%',
						),
				),
		),
);

$fields['header_menu_st1_bbottom_color'] = array(
	'css' =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.site-header.header-style-1.boxed .main-menu-wrapper .main-menu-container',
							1 => '.site-header.header-style-1.full-width .main-menu-wrapper',
							2 => '.site-header.header-style-1 .better-pinning-block.pinned.main-menu-wrapper .main-menu-container',
						),
					'prop'     =>
						array(
							'border-bottom-color' => '%%value%% !important',
						),
				),
		),
);

$fields['header_menu_st2_bbottom_color'] = array(
	'css' =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.site-header.header-style-2.boxed .main-menu-wrapper .main-menu-container',
							1 => '.site-header.header-style-2.full-width .main-menu-wrapper',
							2 => '.site-header.header-style-2 .better-pinning-block.pinned.main-menu-wrapper .main-menu-container',
						),
					'prop'     =>
						array(
							'border-bottom-color' => '%%value%% !important',
						),
				),
		),
);

$fields['header_menu_st3_bbottom_color'] = array(
	'css' =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.site-header.header-style-3.boxed .main-menu-container',
							1 => '.site-header.full-width.header-style-3 .main-menu-wrapper',
						),
					'prop'     =>
						array(
							'border-bottom-color' => '%%value%% !important',
						),
				),
		),
);

$fields['header_menu_st4_bbottom_color'] = array(
	'css' =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.site-header.header-style-4.boxed .main-menu-container',
							1 => ' .site-header.full-width.header-style-4 .main-menu-wrapper',
						),
					'prop'     =>
						array(
							'border-bottom-color' => '%%value%% !important',
						),
				),
		),
);

$fields['header_menu_st5_bbottom_color'] = array(
	'css' =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.site-header.header-style-5.boxed .header-inner',
							1 => '.site-header.header-style-5.full-width',
							2 => '.site-header.header-style-5.full-width > .bs-pinning-wrapper > .content-wrap.pinned',
						),
					'prop'     =>
						array(
							'border-bottom-color' => '%%value%%',
						),
				),
		),
);

$fields['header_menu_st6_bbottom_color'] = array(
	'css' =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.site-header.header-style-6.boxed .header-inner',
							1 => '.site-header.header-style-6.full-width',
							2 => '.site-header.header-style-6.full-width > .bs-pinning-wrapper > .content-wrap.pinned',
						),
					'prop'     =>
						array(
							'border-bottom-color' => '%%value%%',
						),
				),
		),
);

$fields['header_menu_st7_bbottom_color'] = array(
	'css' =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.site-header.header-style-7.boxed .main-menu-container',
							1 => ' .site-header.full-width.header-style-7 .main-menu-wrapper',
						),
					'prop'     =>
						array(
							'border-bottom-color' => '%%value%% !important',
						),
				),
		),
);

$fields['header_menu_st8_bbottom_color'] = array(
	'css' =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.site-header.header-style-8.boxed .header-inner',
							1 => '.site-header.header-style-8.full-width',
							2 => '.site-header.header-style-8.full-width > .bs-pinning-wrapper > .content-wrap.pinned',
						),
					'prop'     =>
						array(
							'border-bottom-color' => '%%value%%',
						),
				),
		),
);

$fields['header_menu_text_color'] = array(
	'css' =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.site-header .shop-cart-container .cart-handler',
							1 => '.site-header .search-container .search-handler',
							2 => '.site-header .main-menu > li > a',
							3 => '.site-header .search-container .search-box .search-form .search-field',
						),
					'prop'     =>
						array(
							'color' => '%%value%%',
						),
				),
		),
);

$fields['header_menu_text_h_color'] = array(
	'css' =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.site-header .shop-cart-container:hover .cart-handler',
							1 => '.site-header .search-container:hover .search-handler',
							2 => '.site-header .main-menu > li:hover > a',
							3 => '.site-header .main-menu > li > a:hover',
						),
					'prop'     =>
						array(
							'color' => '%%value%%',
						),
				),
			1 =>
				array(
					'selector' =>
						array(
							0 => '.main-menu.menu > li:hover > a:before',
							1 => '.main-menu.menu .sub-menu li.current-menu-item:hover > a',
							2 => '.main-menu.menu .sub-menu > li:hover > a',
						),
					'prop'     =>
						array(
							'background-color' => '%%value%%',
						),
				),
		),
);

$fields['header_menu_sub_text_h_color'] = array(
	'css' =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => 'body .main-menu.menu .sub-menu li.current-menu-item:hover > a',
							1 => 'body .main-menu.menu .sub-menu > li:hover > a',
						),
					'prop'     =>
						array(
							'background-color' => '%%value%%',
						),
				),
		),
);

$fields['header_menu_bg_color'] = array(
	'css' =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0  => '.site-header.boxed.header-style-1 .main-menu-wrapper .main-menu-container',
							1  => '.site-header.full-width.header-style-1 .main-menu-wrapper',
							2  => '.bspw-header-style-1 > .bs-pinning-block.pinned.main-menu-wrapper .main-menu-container',
							3  => '.site-header.boxed.header-style-2 .main-menu-wrapper .main-menu-container',
							4  => '.site-header.full-width.header-style-2 .main-menu-wrapper',
							5  => '.bspw-header-style-2 > .bs-pinning-block.pinned.main-menu-wrapper .main-menu-container',
							6  => '.site-header.boxed.header-style-3 .main-menu-wrapper .main-menu-container',
							7  => '.site-header.full-width.header-style-3 .main-menu-wrapper',
							8  => '.bspw-header-style-3 > .bs-pinning-block.pinned.main-menu-wrapper .main-menu-container',
							9  => '.site-header.boxed.header-style-4 .main-menu-wrapper .main-menu-container',
							10 => '.site-header.full-width.header-style-4 .main-menu-wrapper',
							11 => '.bspw-header-style-4 > .bs-pinning-block.pinned.main-menu-wrapper .main-menu-container',
							12 => '.site-header.boxed.header-style-7 .main-menu-wrapper .main-menu-container',
							13 => '.site-header.full-width.header-style-7 .main-menu-wrapper',
							14 => '.bspw-header-style-7 > .bs-pinning-block.pinned.main-menu-wrapper .main-menu-container',
						),
					'prop'     =>
						array(
							'background-color' => '%%value%%',
						),
				),
			1 =>
				array(
					'selector' =>
						array(
							1 => '.site-header.header-style-5 .header-inner',
							4 => '.site-header.header-style-6 .header-inner',
							5 => '.site-header.header-style-8 .header-inner',
						),
					'prop'     =>
						array(
							'background-color' => '%%value%%',
						),
				),
		),
);

$fields['header_bg_color'] = array(
	'css' =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0  => '.site-header.header-style-1',
							1  => '.site-header.header-style-2',
							2  => '.site-header.header-style-3',
							3  => '.site-header.header-style-4',
							4  => '.site-header.header-style-5.full-width',
							5  => '.site-header.header-style-5.boxed > .content-wrap > .container',
							6  => '.site-header.header-style-5 .bs-pinning-wrapper.bspw-header-style-5 > .bs-pinning-block',
							7  => '.site-header.header-style-6.full-width',
							8  => '.site-header.header-style-6.boxed > .content-wrap > .container',
							9  => '.site-header.header-style-6 .bs-pinning-wrapper.bspw-header-style-6 > .bs-pinning-block',
							10 => '.site-header.header-style-7',
							11 => '.site-header.header-style-8.full-width',
							12 => '.site-header.header-style-8.boxed > .content-wrap > .container',
							13 => '.site-header.header-style-8 .bs-pinning-wrapper.bspw-header-style-8 > .bs-pinning-block',
						),
					'prop'     =>
						array(
							'background-color' => '%%value%%',
						),
				),
		),
);

$fields['header_bg_image'] = array(
	'css' =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0  => '.site-header.header-style-1',
							1  => '.site-header.header-style-2',
							2  => '.site-header.header-style-3',
							3  => '.site-header.header-style-4',
							4  => '.site-header.header-style-5.full-width',
							5  => '.site-header.header-style-5.boxed > .content-wrap > .container',
							6  => '.site-header.header-style-5 .bs-pinning-wrapper.bspw-header-style-5 > .bs-pinning-block',
							7  => '.site-header.header-style-6.full-width',
							8  => '.site-header.header-style-6.boxed > .content-wrap > .container',
							9  => '.site-header.header-style-6 .bs-pinning-wrapper.bspw-header-style-6 > .bs-pinning-block',
							10 => '.site-header.header-style-7',
							11 => '.site-header.header-style-8.full-width',
							12 => '.site-header.header-style-8.boxed > .content-wrap > .container',
							13 => '.site-header.header-style-8 .bs-pinning-wrapper.bspw-header-style-8 > .bs-pinning-block',
						),
					'prop'     =>
						array(
							0 => 'background-image',
						),
					'type'     => 'background-image',
				),
		),
);

$fields['content_a_color'] = array(
	'css' =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.single-post-content .entry-content a',
							1 => '.single-page-simple-content .entry-content a',
							2 => '.bbp-reply-content a',
						),
					'prop'     =>
						array(
							'color' => '%%value%% !important',
						),
				),
		),
);

$fields['content_a_hover_color'] = array(
	'css' =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.single-post-content .entry-content a:hover',
							1 => '.single-page-simple-content .entry-content a:hover',
							2 => '.bbp-reply-content a:hover',
						),
					'prop'     =>
						array(
							'color' => '%%value%% !important',
						),
				),
		),
);

$fields['cat_topposts_bg_color'] = array(
	'css' =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0  => '.slider-style-15-container .listing-mg-5-item-big .content-container',
							1  => '.slider-style-15-container',
							2  => '.slider-style-13-container',
							3  => '.slider-style-11-container',
							4  => '.slider-style-9-container',
							5  => '.slider-style-7-container',
							6  => '.slider-style-4-container.slider-container-1col',
							7  => '.slider-style-3-container',
							8  => '.slider-style-5-container',
							9  => '.slider-style-2-container.slider-container-1col',
							10 => '.slider-style-1-container',
							11 => '.slider-style-17-container',
							12 => '.slider-style-19-container',
							13 => '.slider-style-20-container',
							14 => '.slider-style-21-container',
						),
					'prop'     =>
						array(
							'background-color' => '%%value%% !important; margin-bottom: 0',
						),
				),
			1 =>
				array(
					'selector' =>
						array(
							0  => '.bf-breadcrumb.bc-before-slider-style-1',
							1  => '.bf-breadcrumb.bc-before-slider-style-3',
							2  => '.bf-breadcrumb.bc-before-slider-style-5',
							3  => '.bf-breadcrumb.bc-before-slider-style-7',
							4  => '.bf-breadcrumb.bc-before-slider-style-9',
							5  => '.bf-breadcrumb.bc-before-slider-style-11',
							6  => '.bf-breadcrumb.bc-before-slider-style-13',
							7  => '.bf-breadcrumb.bc-before-slider-style-15',
							8  => '.bf-breadcrumb.bc-before-slider-style-17',
							9  => '.bf-breadcrumb.bc-before-slider-style-19',
							10 => '.bf-breadcrumb.bc-before-slider-style-20',
							11 => '.bf-breadcrumb.bc-before-slider-style-21',
						),
					'prop'     =>
						array(
							'background-color' => '%%value%% !important',
						),
				),
		),
);

$fields['footer_link_color'] = array(
	'css' =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => 'ul.menu.footer-menu li > a',
							1 => '.site-footer .copy-2 a',
							2 => '.site-footer .copy-2',
							3 => '.site-footer .copy-1 a',
							4 => '.site-footer .copy-1',
						),
					'prop'     =>
						array(
							'color' => '%%value%%',
						),
				),
		),
);

$fields['footer_link_hover_color'] = array(
	'css' =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => 'ul.menu.footer-menu li > a:hover',
							1 => '.site-footer .copy-2 a:hover',
							2 => '.site-footer .copy-1 a:hover',
						),
					'prop'     =>
						array(
							'color' => '%%value%%',
						),
				),
		),
);

$fields['footer_widgets_bg_color'] = array(
	'css' =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.site-footer .footer-widgets',
						),
					'prop'     =>
						array(
							'background-color' => '%%value%%',
						),
				),
		),
);

$fields['footer_copy_bg_color'] = array(
	'css' =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.site-footer .copy-footer',
						),
					'prop'     =>
						array(
							'background-color' => '%%value%%',
						),
				),
		),
);

$fields['footer_social_bg_color'] = array(
	'css' =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.site-footer .footer-social-icons',
						),
					'prop'     =>
						array(
							'background-color' => '%%value%%',
						),
				),
		),
);

$fields['footer_bg_color'] = array(
	'css' =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.site-footer',
						),
					'prop'     =>
						array(
							'background-color' => '%%value%%',
						),
				),
		),
);

$fields['footer_bg_image'] = array(
	'css' =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.site-footer',
						),
					'prop'     =>
						array(
							0 => 'background-image',
						),
					'type'     => 'background-image',
				),
		),
);

$fields['widget_title_bg_color'] = array(
	'css' =>
		array(
			/*0 =>
				array(
					'selector' =>
						array(
							// 0 removed
							1 => '.widget .widget-heading > .h-text',
						),
					'prop'     =>
						array(
							'color' => '%%value%%',
						),
				),*/
			1 =>
				array(
					'selector' =>
						array(
							0 => '.widget .widget-heading:after',
						),
					'prop'     =>
						array(
							'background-color' => '%%value%%',
						),
				),

		),
);

$fields['widget_title_color'] = array(
	'css' =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.widget .widget-heading > .h-text',
						),
					'prop'     =>
						array(
							'color' => '%%value%%',
						),
				),
		),
);

$fields['widget_bg_color'] = array(
	'css' =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.sidebar-column .widget',
						),
					'prop'     =>
						array(
							'background' => '%%value%%; padding: 20px',
						),
				),
		),
);

$fields['section_title_bg_color'] = array(
	'css' =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							// 0 removed
							// 1 removed
							2 => '.section-heading.multi-tab:after',
							3 => '.section-heading:after',
							// 4 removed
							// 5 removed
							// 6 removed
						),
					'prop'     =>
						array(
							'background-color' => '%%value%%',
						),
				),
			/*1 =>
				array(
					'selector' =>
						array(
							0 => '.bs-pretty-tabs-container:hover .bs-pretty-tabs-more.other-link .h-text',
							1 => '.section-heading .bs-pretty-tabs-more.other-link:hover .h-text.h-text',
							2 => '.section-heading.multi-tab .main-link.active .h-text',
							3 => '.section-heading.multi-tab .active > .h-text',
							4 => '.section-heading .h-text',
						),
					'prop'     =>
						array(
							'color' => '%%value%%',
						),
				),
			2 =>
				array(
					'selector' =>
						array(
							1 => '.section-heading.multi-tab .active > .h-text',
							2 => '.section-heading.multi-tab .main-link:hover .h-text',
							3 => '.section-heading .other-link:hover .h-text',
						),
					'prop'     =>
						array(
							'color' => '%%value%% !important',
						),
				),*/

		),
);

$fields['section_title_color'] = array(
	'css' =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							1 => '.bs-pretty-tabs-container:hover .bs-pretty-tabs-more.other-link .h-text.h-text',
							3 => '.section-heading.multi-tab .main-link.active .h-text.h-text',
							4 => '.section-heading.multi-tab .active > .h-text',
							5 => '.section-heading .other-link:hover .h-text',
							6 => '.section-heading.multi-tab .main-link:hover .h-text',
						),
					'prop'     =>
						array(
							'color' => '%%value%% !important',
						),
				),
			1 =>
				array(
					'selector' =>
						array(
							0 => '.section-heading .h-text',
						),
					'prop'     =>
						array(
							'color' => '%%value%%',
						),
				),

		),
);

$fields['typo_body'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' => 'body, .btn-bs-pagination',
					'type'     => 'font',
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_meta'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.post-meta',
							1 => '.post-meta a',
						),
					'type'     => 'font',
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_meta_author'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.post-meta .post-author',
						),
					'type'     => 'font',
					'exclude'  => array(
						'color'
					),
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_badges'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.term-badges .format-badge',
							1 => '.term-badges .term-badge',
							2 => '.main-menu .term-badges a',
						),
					'type'     => 'font',
				),
		),
	'css-echo-default' => TRUE,
);


$fields['typo_heading'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0  => '.heading-typo',
							1  => 'h1,h2,h3,h4,h5,h6',
							27 => '.h1,.h2,.h3,.h4,.h5,.h6',
							28 => '.heading-1,.heading-2,.heading-3,.heading-4,.heading-5,.heading-6',
							2  => '.header .site-branding .logo',
							3  => '.search-form input[type="submit"]',
							4  => '.widget.widget_categories ul li',
							5  => '.widget.widget_archive ul li',
							6  => '.widget.widget_nav_menu ul.menu',
							7  => '.widget.widget_pages ul li',
							8  => '.widget.widget_recent_entries li a',
							9  => '.widget .tagcloud a',
							10 => '.widget.widget_calendar table caption',
							11 => '.widget.widget_rss li .rsswidget',
							12 => '.listing-widget .listing-item .title',
							13 => 'button,html input[type="button"],input[type="reset"],input[type="submit"],input[type="button"]',
							14 => '.pagination',
							15 => '.site-footer .footer-social-icons .better-social-counter.style-name .social-item',
							16 => '.section-heading .h-text',
							17 => '.entry-terms a',
							18 => '.single-container .post-share a',
							19 => '.comment-list .comment-meta .comment-author',
							20 => '.comments-wrap .comments-nav',
							21 => '.main-slider .content-container .read-more',
							22 => 'a.read-more',
							23 => '.single-page-content > .post-share li',
							24 => '.single-container > .post-share li',
							25 => '.better-newsticker .heading',
							26 => '.better-newsticker ul.news-list li a',
							// 27 reserved
							// 28 reserved
						),
					'type'     => 'font',
				),
			1 =>
				array(
					'selector' =>
						array(
							0 => '.better-gcs-result .gsc-result .gs-title',
						),
					'type'     => 'font',
					'filter'   =>
						array(
							0 =>
								array(
									'type'      => 'class',
									'condition' => 'Better_GCS',
								),
						),
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_heading_h1'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => 'h1',
							1 => '.h1',
							2 => '.heading-1',
						),
					'prop'     =>
						array(
							'font-size' => '%%value%%',
						),
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_heading_h1_color'] = array(
	'css' =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => 'h1',
							1 => '.h1',
							2 => '.heading-1',
						),
					'prop'     =>
						array(
							'color' => '%%value%%',
						),
				),
		),
);

$fields['typo_heading_h2'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => 'h2',
							1 => '.h2',
							2 => '.heading-2',
						),
					'prop'     =>
						array(
							'font-size' => '%%value%%',
						),
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_heading_h2_color'] = array(
	'css' =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => 'h2',
							1 => '.h2',
							2 => '.heading-2',
						),
					'prop'     =>
						array(
							'color' => '%%value%%',
						),
				),
		),
);

$fields['typo_heading_h3'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => 'h3',
							1 => '.h3',
							2 => '.heading-3',
						),
					'prop'     =>
						array(
							'font-size' => '%%value%%',
						),
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_heading_h3_color'] = array(
	'css' =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => 'h3',
							1 => '.h3',
							2 => '.heading-3',
						),
					'prop'     =>
						array(
							'color' => '%%value%%',
						),
				),
		),
);

$fields['typo_heading_h4'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => 'h4',
							1 => '.h4',
							2 => '.heading-4',
						),
					'prop'     =>
						array(
							'font-size' => '%%value%%',
						),
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_heading_h4_color'] = array(
	'css' =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => 'h4',
							1 => '.h4',
							2 => '.heading-4',
						),
					'prop'     =>
						array(
							'color' => '%%value%%',
						),
				),
		),
);

$fields['typo_heading_h5'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => 'h5',
							1 => '.h5',
							2 => '.heading-5',
						),
					'prop'     =>
						array(
							'font-size' => '%%value%%',
						),
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_heading_h5_color'] = array(
	'css' =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => 'h5',
							1 => '.h5',
							2 => '.heading-5',
						),
					'prop'     =>
						array(
							'color' => '%%value%%',
						),
				),
		),
);

$fields['typo_heading_h6'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => 'h6',
							1 => '.h6',
							2 => '.heading-6',
						),
					'prop'     =>
						array(
							'font-size' => '%%value%%',
						),
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_heading_h6_color'] = array(
	'css' =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => 'h6',
							1 => '.h6',
							2 => '.heading-6',
						),
					'prop'     =>
						array(
							'color' => '%%value%%',
						),
				),
		),
);

$fields['typo_post_heading'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.single-post-title',
						),
					'type'     => 'font',
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_post_tp1_heading'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.post-template-1 .single-post-title',
						),
					'prop'     =>
						array(
							'font-size' => '%%value%%',
						),
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_post_tp2_heading'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.post-tp-2-header .single-post-title',
						),
					'prop'     =>
						array(
							'font-size' => '%%value%%',
						),
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_post_tp3_heading'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.post-tp-3-header .single-post-title',
						),
					'prop'     =>
						array(
							'font-size' => '%%value%%',
						),
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_post_tp4_heading'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.post-tp-4-header .single-post-title',
						),
					'prop'     =>
						array(
							'font-size' => '%%value%%',
						),
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_post_tp5_heading'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.post-tp-5-header .single-post-title',
						),
					'prop'     =>
						array(
							'font-size' => '%%value%%',
						),
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_post_tp6_heading'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.post-template-6 .single-post-title',
						),
					'prop'     =>
						array(
							'font-size' => '%%value%%',
						),
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_post_tp7_heading'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.post-tp-7-header .single-post-title',
						),
					'prop'     =>
						array(
							'font-size' => '%%value%%',
						),
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_post_tp8_heading'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.post-template-8 .single-post-title',
						),
					'prop'     =>
						array(
							'font-size' => '%%value%%',
						),
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_post_tp9_heading'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.post-template-9 .single-post-title',
						),
					'prop'     =>
						array(
							'font-size' => '%%value%%',
						),
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_post_tp10_heading'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.post-template-10 .single-post-title',
							1 => '.ajax-post-content .single-post-title.single-post-title',
						),
					'prop'     =>
						array(
							'font-size' => '%%value%%',
						),
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_post_tp11_heading'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.post-tp-11-header .single-post-title',
						),
					'prop'     =>
						array(
							'font-size' => '%%value%%',
						),
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_post_tp12_heading'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.post-tp-12-header .single-post-title',
						),
					'prop'     =>
						array(
							'font-size' => '%%value%%',
						),
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_post_tp13_heading'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.post-template-13 .single-post-title',
						),
					'prop'     =>
						array(
							'font-size' => '%%value%%',
						),
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_post_subtitle'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' => '.post-subtitle',
					'type'     => 'font',
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_entry_content'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' => '.entry-content',
					'type'     => 'font',
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_post_summary'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' => '.post-summary',
					'type'     => 'font',
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typ_header_logo'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' => '.site-header .site-branding .logo.text-logo',
					'type'     => 'font',
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typ_header_menu'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.main-menu li > a',
							1 => '.main-menu li',
						),
					'type'     => 'font',
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typ_header_sub_menu'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.main-menu.menu .sub-menu > li > a',
							1 => '.main-menu.menu .sub-menu > li',
							2 => '.responsive-header .menu-container .resp-menu li > a',
							3 => '.responsive-header .menu-container .resp-menu li',
							4 => '.mega-menu.mega-type-link-list .mega-links li > a',
							5 => 'ul.sub-menu.bs-pretty-tabs-elements .mega-menu.mega-type-link .mega-links > li > a',
						),
					'type'     => 'font',
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_topbar_menu'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.top-menu.menu > li > a',
							1 => '.top-menu.menu > li > a:hover',
							2 => '.top-menu.menu > li',
							3 => '.topbar .topbar-sign-in',
						),
					'type'     => 'font',
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_topbar_sub_menu'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.top-menu.menu .sub-menu > li > a',
							1 => '.top-menu.menu .sub-menu > li',
						),
					'type'     => 'font',
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_topbar_date'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.topbar .topbar-date',
						),
					'type'     => 'font',
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_archive_title_pre'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.archive-title .pre-title',
						),
					'type'     => 'font',
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_archive_title'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.archive-title .page-heading',
						),
					'type'     => 'font',
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_listing_classic_1_title'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.listing-item-classic-1 .title',
						),
					'type'     => 'font',
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_listing_classic_2_title'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.listing-item-classic-2 .title',
						),
					'type'     => 'font',
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_listing_classic_3_title'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.listing-item-classic-3 .title',
						),
					'type'     => 'font',
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_mg_1_title'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.listing-mg-1-item .content-container',
							1 => '.listing-mg-1-item .title',
						),
					'type'     => 'font',
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_mg_2_title'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.listing-mg-2-item .content-container',
							1 => '.listing-mg-2-item .title',
						),
					'type'     => 'font',
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_mg_3_title'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.listing-mg-3-item .content-container',
							1 => '.listing-mg-3-item .title',
						),
					'type'     => 'font',
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_mg_4_title'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.listing-mg-4-item .content-container',
							1 => '.listing-mg-4-item .title',
						),
					'type'     => 'font',
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_mg_5_title_big'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.listing-mg-5-item-big .title',
						),
					'type'     => 'font',
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_mg_5_title_small'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.listing-mg-5-item-small .title',
						),
					'type'     => 'font',
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_mg_6_title'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.listing-mg-6-item .content-container',
							1 => '.listing-mg-6-item .title',
						),
					'type'     => 'font',
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_mg_7_title'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.listing-mg-7-item .content-container',
							1 => '.listing-mg-7-item .title',
						),
					'type'     => 'font',
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_mg_8_title'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.listing-mg-8-item .content-container',
							1 => '.listing-mg-8-item .title',
						),
					'type'     => 'font',
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_mg_9_title'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.listing-mg-9-item .content-container',
							1 => '.listing-mg-9-item .title',
						),
					'type'     => 'font',
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_mg_10_title'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.listing-mg-10-item .content-container',
							1 => '.listing-mg-10-item .title',
						),
					'type'     => 'font',
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_listing_grid_1_title'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.listing-item-grid-1 .title',
						),
					'type'     => 'font',
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_listing_grid_2_title'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.listing-item-grid-2 .title',
						),
					'type'     => 'font',
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_listing_tall_1_title'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.listing-item-tall-1 .title',
						),
					'type'     => 'font',
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_listing_tall_2_title'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.listing-item-tall-2 .title',
						),
					'type'     => 'font',
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_listing_slider_1_title'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.bs-slider-1-item .title',
						),
					'type'     => 'font',
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_listing_slider_2_title'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.bs-slider-2-item .title',
						),
					'type'     => 'font',
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_listing_slider_3_title'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.bs-slider-3-item .title',
						),
					'type'     => 'font',
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_listing_box_1_title'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.bs-box-1 .box-title',
						),
					'type'     => 'font',
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_listing_box_2_title'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.bs-box-2 .box-title',
						),
					'type'     => 'font',
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_listing_box_3_title'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.bs-box-3 .box-title',
						),
					'type'     => 'font',
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_listing_box_4_title'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.bs-box-4 .box-title',
						),
					'type'     => 'font',
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_listing_blog_1_title'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.listing-item-blog-1 > .title',
							1 => '.listing-item-blog-2 > .title',
							2 => '.listing-item-blog-3 > .title',
						),
					'type'     => 'font',
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_listing_blog_5_title'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.listing-item-blog-5 > .title',
						),
					'type'     => 'font',
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_listing_thumbnail_1_title'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.listing-item-tb-3 .title',
							1 => '.listing-item-tb-1 .title',
						),
					'type'     => 'font',
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_listing_thumbnail_2_title'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.listing-item-tb-2 .title',
						),
					'type'     => 'font',
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_text_listing_1_title'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.listing-item-text-1 .title',
						),
					'type'     => 'font',
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_text_listing_2_title'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.listing-item-text-2 .title',
						),
					'type'     => 'font',
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_text_listing_3_title'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.listing-item-text-3 .title',
							1 => '.listing-item-text-4 .title',
						),
					'type'     => 'font',
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_widget_title'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.widget .widget-heading',
						),
					'type'     => 'font',
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_section_heading'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.section-heading .h-text',
						),
					'type'     => 'font',
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_footer_menu'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.site-footer .copy-footer .menu',
						),
					'type'     => 'font',
				),
		),
	'css-echo-default' => TRUE,
);

$fields['typo_footer_copy'] = array(
	'css'              =>
		array(
			0 =>
				array(
					'selector' =>
						array(
							0 => '.site-footer .copy-footer .container',
						),
					'type'     => 'font',
				),
		),
	'css-echo-default' => TRUE,
);
