<?php
/**
 * bs-instagram.php
 *---------------------------
 * The template to show instagram shortcode/widget
 *
 * [bs-instagram] shortcode
 *
 */

$atts = publisher_get_prop( 'shortcode-bs-instagram-atts' );

$style = '';

if ( $atts['style'] === 'list' ) {

	if ( empty( $atts['photo_count'] ) ) {
		$atts['photo_count'] = 12;
	}

	$style = 'list-photos';
} elseif ( $atts['style'] === '3' ) {

	if ( empty( $atts['photo_count'] ) ) {
		$atts['photo_count'] = 9;
	}

	$style = 'columns-' . $atts['style'];

} elseif ( $atts['style'] === '2-1' ) {

	if ( empty( $atts['photo_count'] ) ) {
		$atts['photo_count'] = 7;
	}

	$style = 'columns-' . $atts['style'];
} elseif ( $atts['style'] === '3-1' ) {

	if ( empty( $atts['photo_count'] ) ) {
		$atts['photo_count'] = 6;
	}

	$style = 'columns-' . $atts['style'];

} elseif ( $atts['style'] === '2' ) {

	if ( empty( $atts['photo_count'] ) ) {
		$atts['photo_count'] = 6;
	}

	$style = 'columns-' . $atts['style'];

} elseif ( $atts['style'] === 'slider' ) {

	if ( empty( $atts['photo_count'] ) ) {
		$atts['photo_count'] = 6;
	}

	$style = 'slider';
}


if ( empty( $atts['photo_count'] ) ) {
	$atts['photo_count'] = 9;
}

if ( empty( $style ) ) {
	$style = 'list';
}

if ( empty( $atts['css-class'] ) ) {
	$atts['css-class'] = '';
}

?>
	<div class="bs-shortcode bs-instagram clearfix <?php echo esc_attr( $atts['css-class'] ); ?>">
		<?php

		bf_shortcode_show_title( $atts ); // show title

		if ( ! empty( $atts['user_id'] ) ) {

			$images_list = publisher_shortcode_instagram_get_data( $atts );

			if ( $images_list != FALSE ) {

				// Show error message
				if ( is_wp_error( $images_list ) ) {

					echo $images_list->get_error_message(); // escaped before

				} // Print images
				else {

					$images_list = array_slice( $images_list, 0, $atts['photo_count'] );

					switch ( $style ) {

						// Simple Grid
						case 'columns-3':
						case 'columns-3-1':
						case 'columns-2':
						case 'columns-2-1':
					case 'list-photos':

						?>
						<ul class="bs-instagram-photo-list <?php echo esc_attr( $style ); ?> clearfix" ><?php

						$in_sidebar = Better_Framework::widget_manager()->get_current_sidebar();

						foreach ( $images_list as $image_id => $image ) {

							switch ( TRUE ) {

								case $style == 'columns-3-1' && $image_id > 0:
								case $in_sidebar && $style == 'columns-3':
									$image_url = $image['images']['thumbnail'];
									break;

								case $style == 'columns-3-1' && $image_id === 0:
								case $style == 'columns-2-1' && $image_id === 0:
								case $in_sidebar && $style == 'columns-2':
									$image_url = $image['images']['small'];
									break;

								default:
									$image_url = $image['images']['large'];

							}

							?>
							<li class="bs-instagram-photo">
								<a href="<?php echo esc_url( $image['link'] ); ?>" target="_blank">
									<img src="<?php echo esc_url( $image_url ); ?>"
									     alt="<?php echo esc_attr( $image['description'] ); ?>"/>
								</a>
							</li>
							<?php
						}

						?></ul><?php
					break;

					// Slider
					case 'slider':

					// Slider ID
					$slider_id = 'inst-slider-' . mt_rand();

					?>
						<div class="better-slider" id="<?php echo esc_attr( $slider_id ); ?>">
							<ul class="slides">
								<?php

								foreach ( $images_list as $image ) {

									?>
									<li class="slide bs-instagram-photo">
										<a href="<?php echo esc_url( $image['link'] ); ?>" target="_blank">
											<img src="<?php echo esc_url( $image['images']['large'] ); ?>"
											     alt="<?php echo esc_attr( $image['description'] ); ?>"/>
										</a>
									</li>
									<?php

								}

								?>
							</ul>
						</div><!-- .better-slider -->
						<script>
							jQuery(window).ready(function () {
								jQuery('#<?php echo esc_attr( $slider_id ); ?>').flexslider({
									namespace: "better-",
									animation: "fade",
									slideshowSpeed: "3500",
									animationSpeed: "400",
									animationLoop: true,
									directionNav: true,
									pauseOnHover: true
								}).find('.better-control-nav').addClass('square');
							});
						</script>
						<?php
						break;
					}
				}
			}

			unset( $images_list );
		}

		?>
	</div><!-- .bs-instagram -->
<?php

unset( $atts );
