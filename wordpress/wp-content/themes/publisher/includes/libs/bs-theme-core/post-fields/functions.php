<?php
/***
 *  BetterStudio Themes Core.
 *
 *  ______  _____   _____ _                           _____
 *  | ___ \/  ___| |_   _| |                         /  __ \
 *  | |_/ /\ `--.    | | | |__   ___ _ __ ___   ___  | /  \/ ___  _ __ ___
 *  | ___ \ `--. \   | | | '_ \ / _ \ '_ ` _ \ / _ \ | |    / _ \| '__/ _ \
 *  | |_/ //\__/ /   | | | | | |  __/ | | | | |  __/ | \__/\ (_) | | |  __/
 *  \____/ \____/    \_/ |_| |_|\___|_| |_| |_|\___|  \____/\___/|_|  \___|
 *
 *  Copyright © 2017 Better Studio
 *
 *
 *  Our portfolio is here: http://themeforest.net/user/Better-Studio/portfolio
 *
 *  \--> BetterStudio, 2017 <--/
 */


if ( ! function_exists( 'publisher_the_subtitle' ) ) {
	/**
	 * Prints the subtitle of post
	 *
	 * @param string $before
	 * @param string $after
	 */
	function publisher_the_subtitle( $before = '', $after = '' ) {
		$subtitle = publisher_get_subtitle();

		if ( ! empty( $subtitle ) ) {
			echo $before, $subtitle, $after;
		}
	}
}


if ( ! function_exists( 'publisher_get_subtitle' ) ) {
	/**
	 * Returns the subtitle of post.
	 *
	 * @return mixed|void
	 */
	function publisher_get_subtitle() {

		static $meta_id;

		if ( is_null( $meta_id ) ) {
			$meta_id = Publisher_Theme_Post_Fields::Run()->subtitle_meta_id;
		}

		$subtitle = bf_get_post_meta( $meta_id, NULL, '' );

		// Fallback for "WP Subtitle" plugin field
		if ( empty( $subtitle ) ) {
			$subtitle = bf_get_post_meta( 'wps_subtitle', NULL, '' );
		}

		return $subtitle;
	}
}
