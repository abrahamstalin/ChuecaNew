<?php
/***
 *  BetterFramework is BetterStudio framework for themes and plugins.
 *
 *  ______      _   _             ______                                           _
 *  | ___ \    | | | |            |  ___|                                         | |
 *  | |_/ / ___| |_| |_ ___ _ __  | |_ _ __ __ _ _ __ ___   _____      _____  _ __| | __
 *  | ___ \/ _ \ __| __/ _ \ '__| |  _| '__/ _` | '_ ` _ \ / _ \ \ /\ / / _ \| '__| |/ /
 *  | |_/ /  __/ |_| ||  __/ |    | | | | | (_| | | | | | |  __/\ V  V / (_) | |  |   <
 *  \____/ \___|\__|\__\___|_|    \_| |_|  \__,_|_| |_| |_|\___| \_/\_/ \___/|_|  |_|\_\
 *
 *  Copyright © 2017 Better Studio
 *
 *
 *  Our portfolio is here: http://themeforest.net/user/Better-Studio/portfolio
 *
 *  \--> BetterStudio, 2017 <--/
 */


/**
 * Initialize custom functionality to VC
 */
class BF_VC_Extender {


	function __construct() {

		// Check if Visual Composer is installed
		if ( ! defined( 'WPB_VC_VERSION' ) ) {
			return;
		}

		require_once BF_PATH . 'vc-extend/class-bf-vc-shortcode-extender.php';

		require_once BF_PATH . 'vc-extend/class-bf-vc-front-end-generator.php';

		// Make it theme check plugin friendly ;)
		$shortcode_param_add_func = 'vc_add' . '_' . 'shortcode' . '_' . 'param';

		if ( ! function_exists( $shortcode_param_add_func ) ) {
			return;
		}

		call_user_func( $shortcode_param_add_func, 'bf_select', array( $this, 'select_param' ) );
		call_user_func( $shortcode_param_add_func, 'bf_color', array( $this, 'color_param' ) );
		call_user_func( $shortcode_param_add_func, 'bf_background_image', array( $this, 'background_image_param' ) );
		call_user_func( $shortcode_param_add_func, 'bf_media_image', array( $this, 'media_image_param' ) );
		call_user_func( $shortcode_param_add_func, 'bf_image_radio', array( $this, 'image_radio' ) );
		call_user_func( $shortcode_param_add_func, 'bf_info', array( $this, 'info' ) );
		call_user_func( $shortcode_param_add_func, 'bf_slider', array( $this, 'slider_param' ) );
		call_user_func( $shortcode_param_add_func, 'bf_sorter_checkbox', array( $this, 'sorter_checkbox_param' ) );
		call_user_func( $shortcode_param_add_func, 'bf_switch', array( $this, 'switchery' ) );
		call_user_func( $shortcode_param_add_func, 'bf_switchery', array(
			$this,
			'switchery'
		) ); // old. deprecated, fallback
		call_user_func( $shortcode_param_add_func, 'bf_ajax_select', array( $this, 'ajax_param' ) );
		call_user_func( $shortcode_param_add_func, 'bf_icon_select', array( $this, 'icon_select_param' ) );
		call_user_func( $shortcode_param_add_func, 'bf_heading', array( $this, 'heading_param' ) );
		call_user_func( $shortcode_param_add_func, 'bf_term_select', array( $this, 'term_select' ) );
	}


	/**
	 * Convert VC Field option to an BF Field Option
	 *
	 * @param $settings
	 * @param $value
	 *
	 * @return array
	 */
	private function convert_field_option( $settings, $value ) {

		$options = array(
			'name'        => $settings['heading'],
			'id'          => $settings['param_name'],
			'input_name'  => $settings['param_name'],
			'value'       => $value,
			'input_class' => "wpb_vc_param_value wpb-" . $settings['type'] . " " . $settings['param_name'] . ' ' . $settings['type'] . "_field",
		);

		if ( isset( $settings['description'] ) ) {
			$options['desc'] = $settings['description'];
		}

		if ( isset( $settings['input-desc'] ) ) {
			$options['input-desc'] = $settings['input-desc'];
		}

		if ( isset( $settings['deferred-options'] ) ) {
			$options['deferred-options'] = $settings['deferred-options'];
		}

		if ( isset( $settings['options'] ) ) {
			$options['options'] = $settings['options'];
		}

		if ( isset( $settings['section_class'] ) ) {
			$options['section_class'] = $settings['section_class'];
		}


		return $options;
	}


	/**
	 * Adds BF Image Radio Field to Visual Composer
	 *
	 * @param $settings
	 * @param $value
	 *
	 * @return string
	 */
	function image_radio( $settings, $value ) {

		$options = $this->convert_field_option( $settings, $value );

		$options['type'] = 'vc-image_radio';

		$generator = new BF_VC_Front_End_Generator( $options, $settings['param_name'] );

		return $generator->get_field();
	}


	/**
	 * Adds BF Info Field to Visual Composer
	 *
	 * @param $settings
	 * @param $value
	 *
	 * @return string
	 */
	function info( $settings, $value ) {

		$options = $this->convert_field_option( $settings, $value );

		$options['type'] = 'vc-info';

		$options['value'] = $settings['std'];

		if ( isset( $settings['state'] ) ) {
			$options['state'] = $settings['state'];
		}

		if ( isset( $settings['info-type'] ) ) {
			$options['info-type'] = $settings['info-type'];
		}

		$generator = new BF_VC_Front_End_Generator( $options, $settings['param_name'] );

		return $generator->get_field();
	}


	/**
	 * Adds BF Image Radio Field to Visual Composer
	 *
	 * @param $settings
	 * @param $value
	 *
	 * @return string
	 */
	function switchery( $settings, $value ) {

		$options = $this->convert_field_option( $settings, $value );

		$options['type'] = 'vc-switchery';

		if ( isset( $settings['on-label'] ) ) {
			$options['on-label'] = $settings['on-label'];
		}

		if ( isset( $settings['off-label'] ) ) {
			$options['off-label'] = $settings['off-label'];
		}

		$generator = new BF_VC_Front_End_Generator( $options, $settings['param_name'] );

		return $generator->get_field();
	}


	/**
	 * Adds BF Color field to Visual Composer
	 *
	 * @param $settings
	 * @param $value
	 *
	 * @return string
	 */
	function color_param( $settings, $value ) {

		$options = $this->convert_field_option( $settings, $value );

		$options['type'] = 'color';

		$generator = new BF_VC_Front_End_Generator( $options, $settings['param_name'] );

		return $generator->get_field();
	}


	/**
	 * Adds BF Select field to Visual Composer
	 *
	 * @param $settings
	 * @param $value
	 *
	 * @return string
	 */
	function select_param( $settings, $value ) {

		$options = $this->convert_field_option( $settings, $value );

		$options['type'] = 'select';

		if ( isset( $settings['multiple'] ) ) {
			$options['multiple'] = $settings['multiple'];
		}

		$generator = new BF_VC_Front_End_Generator( $options, $settings['param_name'] );

		return $generator->get_field();
	}

	/**
	 * Adds BF Select field to Visual Composer
	 *
	 * @param $settings
	 * @param $value
	 *
	 * @return string
	 */
	function term_select( $settings, $value ) {

		$options = $this->convert_field_option( $settings, $value );

		$options['type'] = 'term_select';

		$generator = new BF_VC_Front_End_Generator( $options, $settings['param_name'] );

		return $generator->get_field();
	}


	/**
	 * Adds BF Ajax field to Visual Composer
	 *
	 * @param $settings
	 * @param $value
	 *
	 * @return string
	 */
	function ajax_param( $settings, $value ) {

		$options = $this->convert_field_option( $settings, $value );

		$options['type'] = 'ajax_select';

		$options['callback'] = $settings['callback'];

		$options['get_name'] = $settings['get_name'];

		if ( isset( $settings['placeholder'] ) ) {
			$options['placeholder'] = $settings['placeholder'];
		}

		$generator = new BF_VC_Front_End_Generator( $options, $settings['param_name'] );

		return $generator->get_field();
	}


	/**
	 * Adds BF Background Image field to Visual Composer
	 *
	 * @param $settings
	 * @param $value
	 *
	 * @return string
	 */
	function background_image_param( $settings, $value ) {

		$options = $this->convert_field_option( $settings, $value );

		$options['type'] = 'background_image';

		if ( isset( $settings['media_title'] ) ) {
			$options['media_title'] = $settings['media_title'];
		}

		if ( isset( $settings['button_text'] ) ) {
			$options['button_text'] = $settings['button_text'];
		}

		if ( isset( $settings['upload_label'] ) ) {
			$options['upload_label'] = $settings['upload_label'];
		}

		if ( isset( $settings['remove_label'] ) ) {
			$options['remove_label'] = $settings['remove_label'];
		}

		$generator = new BF_VC_Front_End_Generator( $options, $value );

		return $generator->get_field();
	}


	/**
	 * Adds BF Background Image field to Visual Composer
	 *
	 * @param $settings
	 * @param $value
	 *
	 * @return string
	 */
	function media_image_param( $settings, $value ) {

		$options = $this->convert_field_option( $settings, $value );

		$options['type'] = 'vc-media_image';

		if ( isset( $settings['upload_label'] ) ) {
			$options['upload_label'] = $settings['upload_label'];
		}

		if ( isset( $settings['remove_label'] ) ) {
			$options['remove_label'] = $settings['remove_label'];
		}

		if ( isset( $settings['media_title'] ) ) {
			$options['media_title'] = $settings['media_title'];
		}

		if ( isset( $settings['media_button'] ) ) {
			$options['media_button'] = $settings['media_button'];
		}

		if ( isset( $settings['data-type'] ) ) {
			$options['data-type'] = $settings['data-type'];
		}

		$generator = new BF_VC_Front_End_Generator( $options, $value );

		return $generator->get_field();
	}


	/**
	 * Adds BF slider field to Visual Composer
	 *
	 * @param $settings
	 * @param $value
	 *
	 * @return string
	 */
	function slider_param( $settings, $value ) {

		$options = $this->convert_field_option( $settings, $value );

		$options['type'] = 'slider';

		if ( isset( $settings['dimension'] ) ) {
			$options['dimension'] = $settings['dimension'];
		}

		if ( isset( $settings['min'] ) ) {
			$options['min'] = $settings['min'];
		}

		if ( isset( $settings['max'] ) ) {
			$options['max'] = $settings['max'];
		}

		if ( isset( $settings['step'] ) ) {
			$options['step'] = $settings['step'];
		}

		$generator = new BF_VC_Front_End_Generator( $options, $value );

		return $generator->get_field();
	}


	/**
	 * Adds BF slider field to Visual Composer
	 *
	 * @param $settings
	 * @param $value
	 *
	 * @return string
	 */
	function sorter_checkbox_param( $settings, $value ) {

		$options = $this->convert_field_option( $settings, $value );

		$options['type'] = 'vc-sorter_checkbox';

		if ( ! is_bool( $value ) && ! empty( $value ) ) {
			$options['value'] = $value;
		} else {
			$options['value'] = $settings['value'];
		}

		$generator = new BF_VC_Front_End_Generator( $options, $value );

		return $generator->get_field();
	}


	/**
	 * Adds BF Background Image field to Visual Composer
	 *
	 * @param $settings
	 * @param $value
	 *
	 * @return string
	 */
	function icon_select_param( $settings, $value ) {

		$options = $this->convert_field_option( $settings, $value );

		$options['type'] = 'icon_select';

		$generator = new BF_VC_Front_End_Generator( $options, $value );

		return $generator->get_field();
	}


	/**
	 * Adds BF Heading field to Visual Composer
	 *
	 * @param $settings
	 * @param $value
	 *
	 * @return string
	 */
	function heading_param( $settings, $value ) {

		$options = $this->convert_field_option( $settings, $value );

		$options['type'] = 'heading';
		if ( isset( $settings['heading'] ) ) {
			$options['title'] = $settings['heading'];
		} elseif ( isset( $options['title'] ) ) {
			$options['title']   = $settings['title'];
			$options['heading'] = $settings['title'];
		}

		$generator = new BF_VC_Front_End_Generator( $options, $value );

		return $generator->get_field();
	}

}
