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


if ( ! function_exists( 'bf_get_option' ) ) {
	/**
	 * Get an option from the database (cached) or the default value provided
	 * by the options setup.
	 *
	 * @param   string $key       Option ID
	 * @param   string $panel_key Panel ID
	 * @param   string $lang      Language
	 *
	 * @return  mixed|null
	 */
	function bf_get_option( $key, $panel_key = '', $lang = NULL ) {

		if ( empty( $panel_key ) ) {
			return NULL;
		}

		static $lang_full;

		// create lang id and cache it
		if ( $lang_full ) {

			// Prepare Language
			if ( is_null( $lang ) || $lang == 'en' || $lang == 'none' ) {
				$lang_full = bf_get_current_lang();
			}

			if ( $lang == 'en' || $lang == 'none' || $lang == 'all' ) {
				$lang_full = '';
			} else {
				$lang_full = '_' . $lang;
			}
		}


		// init value if not before
		if ( ! isset( BF_Options::$values[ $panel_key ] ) ) {

			$saved_value = get_option( $panel_key . $lang_full );

			if ( ! empty( $lang_full ) && $saved_value == FALSE ) {
				$saved_value = get_option( $panel_key );
			}

			BF_Options::$values[ $panel_key ] = $saved_value;
		}


		// return saved value
		if ( isset( BF_Options::$values[ $panel_key ][ $key ] ) ) {

			return BF_Options::$values[ $panel_key ][ $key ];
		}

		// init panel std values
		BF_Options::get_panel_std( $panel_key );

		// if std is not defined for field
		if ( ! isset( BF_Options::$panel_std[ $panel_key ][ $key ] ) ) {
			//			bf_var_dump_exit( 'here', $panel_key, $key, BF_Options::$panel_std[ $panel_key ] );

			return NULL;
		}

		// just simple force for repeater default!
		if ( isset( BF_Options::$panel_std[ $panel_key ][ $key ]['default'] ) ) {
			BF_Options::$updated_panels[ $panel_key ] = $panel_key;

			return BF_Options::$values[ $panel_key ][ $key ] = BF_Options::$panel_std[ $panel_key ][ $key ]['default'];
		}

		// std id
		$std_id = BF_Options::get_panel_std_id( $panel_key, $lang );

		// detect std value
		if ( isset( BF_Options::$panel_std[ $panel_key ][ $key ][ $std_id ] ) ) {
			BF_Options::$updated_panels[ $panel_key ] = $panel_key;

			return BF_Options::$values[ $panel_key ][ $key ] = BF_Options::$panel_std[ $panel_key ][ $key ][ $std_id ];
		} elseif ( isset( BF_Options::$panel_std[ $panel_key ][ $key ]['std'] ) ) {
			BF_Options::$updated_panels[ $panel_key ] = $panel_key;

			return BF_Options::$values[ $panel_key ][ $key ] = BF_Options::$panel_std[ $panel_key ][ $key ]['std'];
		} else {
			return NULL;
		}

	} // bf_get_option
} // if


if ( ! function_exists( 'bf_echo_option' ) ) {
	/**
	 * echo an option from the database (cached) or the default value provided
	 * by the options setup.
	 *
	 * Uses bf_get_option function.
	 *
	 * @param   string $key       Option ID
	 * @param   string $panel_key Panel ID
	 * @param   string $lang      Language
	 *
	 * @return  mixed|null
	 */
	function bf_echo_option( $key, $panel_key = '', $lang = NULL ) {
		echo bf_get_option( $key, $panel_key, $lang ); // escaped before in saving inside option!
	} // bf_echo_option
} // if


if ( ! function_exists( 'bf_set_option' ) ) {
	/**
	 * Used to change option only in cache
	 *
	 * @param   string  $key       Option ID
	 * @param   complex $value     Value
	 * @param   string  $panel_key Panel ID
	 * @param   string  $lang      Language
	 *
	 * @return mixed|null
	 */
	function bf_set_option( $key, $value, $panel_key = '', $lang = NULL ) {

		if ( empty( $panel_key ) ) {
			$panel_key = Better_Framework::options()->get_theme_panel_id();
		}

		// Prepare Language
		if ( is_null( $lang ) || $lang == 'en' || $lang == 'none' ) {
			$lang = bf_get_current_lang();
		}

		if ( $lang == 'en' || $lang == 'none' || $lang == 'all' ) {
			$_lang = '';
		} else {
			$_lang = '_' . $lang;
		}

		Better_Framework::options()->cache[ $panel_key . $_lang ][ $key ] = $value;

	} // bf_set_option
} // if


if ( ! function_exists( 'bf_get_panel_default_style' ) ) {
	/**
	 * Handy function to get panels default style field id
	 *
	 * @param string $panel_id
	 *
	 * @return string
	 */
	function bf_get_panel_default_style( $panel_id = '' ) {
		return 'default';
	}
}


if ( ! function_exists( 'bf_main_option' ) ) {
	/**
	 * Get wordpress  option
	 *
	 * @param string $option      Name of option to retrieve. Expected to not be SQL-escaped.
	 * @param mixed  $default     Optional. Default value to return if the option does not exist.
	 * @param bool   $is_autoload Optional. is the option autoload?
	 *
	 * @see get_option
	 * @return mixed Value set for the option.
	 */
	function bf_main_option( $option, $default = FALSE, $is_autoload = TRUE ) {
		if ( $is_autoload ) {
			$alloptions = wp_load_alloptions();

			if ( isset( $alloptions[ $option ] ) ) {
				return $alloptions[ $option ];
			} else {
				$value = wp_cache_get( $option, 'options' );
				if ( $value !== FALSE ) {
					return $value;
				}
			}

			return $default;
		}

		return get_option( $option, $default );
	}
}
