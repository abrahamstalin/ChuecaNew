<?php

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
					'%%widget-id%% .widget-heading .h-text',
				),
				'prop'     => array(
					'background-color' => '%%value%% !important'
				),
			),
		);

		return $fields;
	} // publisher_widgets_custom_css
}
