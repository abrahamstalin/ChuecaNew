<?php

if ( ! function_exists( 'publisher_fix_shortcode_vc_style' ) ) {
	/**
	 * Fixes shortcode style for generated style from VC
	 *
	 * @param $atts
	 */
	function publisher_fix_shortcode_vc_style( &$atts ) {

		if ( empty( $atts['css'] ) ) {
			return;
		}

		publisher_general_fix_shortcode_vc_style( $atts ); // general fixes

		if ( empty( $atts['_style_bg_color'] ) ) {
			return;
		}

		bf_add_css( '.' . bf_shortcode_custom_css_class( $atts ) . ' > .section-heading .h-text:after{ background-color: ' . $atts['_style_bg_color'] . '}', TRUE, TRUE );

	}
}// publisher_fix_shortcode_vc_style


if ( ! function_exists( 'publisher_widgets_custom_css' ) ) {
	/**
	 * Widgets Custom css parameters
	 *
	 * @param $fields
	 *
	 * @return array
	 */
	function publisher_widgets_custom_css( $fields ) {

		$fields[] = array(
			'field' => 'bf-widget-title-bg-color',
			array(
				'selector' => array(
					'%%widget-id%% .widget-heading > .h-text',
				),
				'prop'     => array(
					'background' => '%%value%% !important'
				),
			),
		);

		$fields[] = array(
			'field' => 'bf-widget-bg-color',
			array(
				'selector' => array(
					'%%widget-id%%',
					'%%widget-id%% .widget-heading > .h-text:after',
				),
				'prop'     => array(
					'background' => '%%value%%',
				),
			),
		);

		return $fields;
	} // publisher_widgets_custom_css
}