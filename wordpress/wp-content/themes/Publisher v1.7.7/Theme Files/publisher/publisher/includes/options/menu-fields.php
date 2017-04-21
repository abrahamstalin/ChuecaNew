<?php
/**
 * menu-fields.php
 *---------------------------
 *
 */


/**
 *
 * Mega Menu
 *
 */
$fields['mega_menu_heading'] = array(
	'id'          => 'mega_menu_heading',
	'type'        => 'group',
	'name'        => __( 'Mega & Sub Menu', 'publisher' ),
	'parent_only' => FALSE,
	'state'       => 'close',
);
$fields['mega_menu']         = array(
	'id'           => 'mega_menu',
	'panel-id'     => publisher_get_theme_panel_id(),
	'name'         => __( 'Mega Menu Type', 'publisher' ),
	'type'         => 'select',
	'class'        => '',
	'default_text' => 'Chose one',
	'list_style'   => 'grid-2-column', // single-row, grid-2-column, grid-3-column
	'width'        => 'wide',
	'parent_only'  => FALSE,
	'options'      => array(
		'disabled'          => __( '-- Disabled --', 'publisher' ),
		'link-list'         => __( 'Horizontal links', 'publisher' ),
		'link-2-column'     => __( '2 Column links', 'publisher' ),
		'link-3-column'     => __( '3 Column links', 'publisher' ),
		'link-4-column'     => __( '4 Column links', 'publisher' ),
		'tabbed-grid-posts' => __( 'Tabbed sub categories with posts', 'publisher' ),
		'grid-posts'        => __( 'Latest posts with image', 'publisher' ),
	),

);
$fields['drop_menu_anim']    = array(
	'id'               => 'drop_menu_anim',
	'panel-id'         => publisher_get_theme_panel_id(),
	'name'             => __( 'Animation', 'publisher' ),
	'type'             => 'select',
	'class'            => '',
	'width'            => 'thin',
	'parent_only'      => FALSE,
	'deferred-options' => array(
		'callback' => 'bf_get_menus_animations_option',
	),
);
$fields['mega_menu_cat']     = array(
	'id'          => 'mega_menu_cat',
	'panel-id'    => publisher_get_theme_panel_id(),
	'name'        => __( 'Mega Menu Category', 'publisher' ),
	'type'        => 'select',
	'class'       => '',
	'width'       => 'thin',
	'parent_only' => FALSE,
	'options'     => array(
		'auto' => __( '-- Auto Detect --', 'publisher' ),
		array(
			'label'   => __( 'Categories', 'publisher' ),
			'options' => array(
				'category_walker' => 'category_walker'
			),
		),
	),
);

/**
 *
 * Menu Icons
 *
 */
$fields['mega_icon_settings'] = array(
	'id'          => 'mega_icon_settings',
	'name'        => __( 'Menu Icon', 'publisher' ),
	'type'        => 'group',
	'state'       => 'close',
	'parent_only' => FALSE,
);
$fields['menu_icon']          = array(
	'id'           => 'menu_icon',
	'panel-id'     => publisher_get_theme_panel_id(),
	'name'         => __( 'Icon', 'publisher' ),
	'type'         => 'icon_select',
	'class'        => '',
	'options'      => array( 'fontawesome' ),
	'default_text' => 'Chose an Icon',
	'width'        => 'thin',
	'list_style'   => 'grid-3-column',
	'parent_only'  => FALSE,
);
$fields['hide_menu_title']    = array(
	'id'          => 'hide_menu_title',
	'panel-id'    => publisher_get_theme_panel_id(),
	'name'        => __( 'Show Only Icon?', 'publisher' ),
	'on-label'    => __( 'Yes', 'publisher' ),
	'off-label'   => __( 'No', 'publisher' ),
	'type'        => 'switch',
	'class'       => '',
	'width'       => 'thin',
	'parent_only' => FALSE,
);


/**
 *
 * Menu Badge
 *
 */
$fields['mega_badge_settings'] = array(
	'id'          => 'mega_badge_settings',
	'panel-id'    => publisher_get_theme_panel_id(),
	'name'        => __( 'Menu Badge', 'publisher' ),
	'type'        => 'group',
	'parent_only' => FALSE,
	'state'       => 'close',
);
$fields['badge_label']         = array(
	'id'          => 'badge_label',
	'panel-id'    => publisher_get_theme_panel_id(),
	'name'        => __( 'Badge Label', 'publisher' ),
	'type'        => 'text',
	'class'       => '',
	'width'       => 'thin',
	'parent_only' => FALSE
);
$fields['badge_position']      = array(
	'id'          => 'badge_position',
	'panel-id'    => publisher_get_theme_panel_id(),
	'name'        => __( 'Badge Position', 'publisher' ),
	'type'        => 'select',
	'class'       => '',
	'width'       => 'thin',
	'parent_only' => FALSE,
	'options'     => array(
		'left'  => __( 'Left', 'publisher' ),
		'right' => __( 'Right', 'publisher' ),
	)
);
$fields['badge_bg_color']      = array(
	'id'          => 'badge_bg_color',
	'panel-id'    => publisher_get_theme_panel_id(),
	'name'        => __( 'Badge Background Color', 'publisher' ),
	'type'        => 'color',
	'class'       => '',
	'width'       => 'thin',
	'parent_only' => FALSE,
	'css'         => array(
		array(
			'selector' => array(
				'%%id%% > a > .better-custom-badge',
			),
			'prop'     => array( 'background-color' => '%%value%% !important' )
		),
		array(
			'selector' => array(
				'%%id%% > a > .better-custom-badge:after',
			),
			'prop'     => array( 'border-top-color' => '%%value%% !important' )
		),
		array(
			'selector' => array(
				'.main-menu .menu .sub-menu %%id%%.menu-badge-left > a >.better-custom-badge:after',
			),
			'prop'     => array( 'border-left-color' => '%%value%% !important' )
		),
		array(
			'selector' => array(
				'.widget.widget_nav_menu .menu %%class%% .better-custom-badge:after',
				'.main-menu .mega-menu %%id%%.menu-badge-right > a > .better-custom-badge:after',
			),
			'prop'     => array( 'border-right-color' => '%%value%% !important' )
		),

	)
);
$fields['badge_font_color']    = array(
	'id'          => 'badge_font_color',
	'panel-id'    => publisher_get_theme_panel_id(),
	'name'        => __( 'Badge Font Color', 'publisher' ),
	'type'        => 'color',
	'class'       => '',
	'width'       => 'thin',
	'parent_only' => FALSE,
	'css'         => array(
		array(
			'selector' => array(
				'%%id%% > a > .better-custom-badge',
			),
			'prop'     => array( 'color' )
		),
	),

);

/**
 *
 * Menu Style
 *
 */
$fields['menu_bg_settings']   = array(
	'id'          => 'menu_bg_settings',
	'name'        => __( 'Sub Menu Background & Padding', 'publisher' ),
	'desc'        => __( 'This options only will affects sub menu and mega menus.', 'publisher' ),
	'type'        => 'group',
	'state'       => 'close',
	'parent_only' => FALSE,
);
$fields['menu_bg_image']      = array(
	'id'          => 'menu_bg_image',
	'panel-id'    => publisher_get_theme_panel_id(),
	'name'        => __( 'Background Image', 'publisher' ),
	'type'        => 'background_image',
	'class'       => '',
	'width'       => 'wide',
	'parent_only' => FALSE,
	'css'         => array(
		array(
			'selector' => array(
				'%%id%% > .mega-menu',
				'%%id%% > .sub-menu',
			),
			'prop'     => array( 'background-image' ),
			'type'     => 'background-image'
		),
	),

);
$fields['menu_bg_color']      = array(
	'id'          => 'menu_bg_color',
	'panel-id'    => publisher_get_theme_panel_id(),
	'name'        => __( 'Background Color', 'publisher' ),
	'type'        => 'color',
	'class'       => '',
	'width'       => 'wide',
	'parent_only' => FALSE,
	'css'         => array(
		array(
			'selector' => array(
				'%%id%% > .mega-menu',
				'%%id%% > .sub-menu',
			),
			'prop'     => array( 'background-color' )
		),
	),

);
$fields['menu_min_height']    = array(
	'id'          => 'menu_min_height',
	'panel-id'    => publisher_get_theme_panel_id(),
	'name'        => __( 'Min Height', 'publisher' ),
	'type'        => 'text',
	'class'       => '',
	'suffix'      => 'px',
	'width'       => 'thin',
	'parent_only' => FALSE,
	'css'         => array(
		array(
			'selector' => array(
				'.main-menu-container %%id%% > .mega-menu',
				'.main-menu-container %%id%% > .sub-menu',
			),
			'prop'     => array( 'min-height' => '%%value%%px' )
		),
	),

);
$fields['menu_padding']       = array(
	'id'          => 'menu_padding',
	'panel-id'    => publisher_get_theme_panel_id(),
	'name'        => __( 'Padding', 'publisher' ),
	'type'        => 'text',
	'class'       => '',
	'width'       => 'thin',
	'parent_only' => FALSE,
	'css'         => array(
		array(
			'selector' => array(
				'.desktop-menu-container %%id%% > .mega-menu',
				'.desktop-menu-container %%id%% > .sub-menu',
			),
			'prop'     => array( 'padding' => '%%value%%' )
		),
	),
);
$fields['menu_resp_settings'] = array(
	'id'          => 'menu_resp_settings',
	'name'        => __( 'Responsive Options', 'publisher' ),
	'desc'        => __( 'You can show or hide menu items in multiple devices.', 'publisher' ),
	'type'        => 'group',
	'state'       => 'close',
	'parent_only' => FALSE,
);
$fields['resp_desktop']       = array(
	'id'          => 'resp_desktop',
	'panel-id'    => publisher_get_theme_panel_id(),
	'name'        => __( 'Show On Desktop', 'publisher' ),
	'type'        => 'select',
	'class'       => '',
	'width'       => 'wide',
	'parent_only' => FALSE,
	'options'     => array(
		'show' => __( 'Show', 'publisher' ),
		'hide' => __( 'Hide', 'publisher' ),
	)
);
$fields['resp_tablet']        = array(
	'id'          => 'resp_tablet',
	'panel-id'    => publisher_get_theme_panel_id(),
	'name'        => __( 'Show On Tablet', 'publisher' ),
	'type'        => 'select',
	'class'       => '',
	'width'       => 'wide',
	'parent_only' => FALSE,
	'options'     => array(
		'show' => __( 'Show', 'publisher' ),
		'hide' => __( 'Hide', 'publisher' ),
	)
);
$fields['resp_mobile']        = array(
	'id'          => 'resp_mobile',
	'panel-id'    => publisher_get_theme_panel_id(),
	'name'        => __( 'Show On Mobile', 'publisher' ),
	'type'        => 'select',
	'class'       => '',
	'width'       => 'wide',
	'parent_only' => FALSE,
	'options'     => array(
		'show' => __( 'Show', 'publisher' ),
		'hide' => __( 'Hide', 'publisher' ),
	)
);
