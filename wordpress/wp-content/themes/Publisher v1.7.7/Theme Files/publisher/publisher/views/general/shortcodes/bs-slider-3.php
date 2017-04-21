<?php
/**
 * bs-slider-3.php
 *---------------------------
 * The template to show slider 3 shortcode
 *
 * [bs-slider-3] shortcode
 *
 */

$atts = publisher_get_prop( 'bs-slider-3' );

// Slider ID
$slider_id = 'slider-' . mt_rand();

if ( empty( $atts['animation'] ) ) {
	$atts['animation'] = 'slide';
}

if ( empty( $atts['slideshow_speed'] ) ) {
	$atts['slideshow_speed'] = 7000;
}

if ( empty( $atts['animation_speed'] ) ) {
	$atts['animation_speed'] = 600;
}

$class = '';

?>
	<div class="bs-shortcode bs-slider bs-slider-3 clearfix">

		<div class="better-slider" id="<?php echo esc_attr( $slider_id ); ?>"
		     data-slideshowSpeed="<?php echo esc_attr( $atts['animation'] ); ?>"
		     data-animation="<?php echo esc_attr( $atts['slideshow_speed'] ); ?>"
		     data-animationSpeed="<?php echo esc_attr( $atts['animation_speed'] ); ?>">
			<ul class="slides">
				<?php

				publisher_set_prop( 'hide-meta-author-if-review', TRUE ); // hide author to make space for reviews

				while( publisher_have_posts() ) {

					publisher_the_post();

					// Creates main term ID that used for custom category color style
					$main_term = publisher_get_post_primary_cat();
					if ( ! is_wp_error( $main_term ) && is_object( $main_term ) ) {
						$main_term_class = 'main-term-' . $main_term->term_id;
					} else {
						$main_term_class = 'main-term-none';
					}

					$img = publisher_get_thumbnail( publisher_get_prop_thumbnail_size( 'publisher-full' ) );

					if ( ! empty( $img['src'] ) ) {
						$class .= ' has-post-thumbnail';
					} else {
						$class .= ' has-not-post-thumbnail';
					}

					$permalink = get_permalink();

					?>
					<li class="slide bs-slider-item bs-slider-3-item <?php echo $class; ?>">
						<div class="item-content">
							<a class="img-cont" href="<?php echo $permalink; ?>"
							   style="background-image: url('<?php echo $img['src']; ?>')"></a>
							<?php

							publisher_format_icon();

							?>
							<div class="content-container">
								<?php

								if ( publisher_get_prop( 'show-term-badge', TRUE ) ) {
									publisher_cats_badge_code( 1, '', FALSE, TRUE, 'floated' );
								}

								?>
								<h2 class="title">
									<a class="post-url post-title" href="<?php echo $permalink; ?>">
										<?php publisher_echo_html_limit_words( get_the_title(), publisher_get_prop( 'title-limit', - 1 ) ); ?>
									</a>
								</h2>
								<?php

								if ( publisher_get_prop( 'show-meta', TRUE ) ) {
									publisher_get_view( 'loop', '_meta' );
								}

								?>
								<a class="read-more"
								   href="<?php echo $permalink; ?>"><?php publisher_translation_echo( 'continue_reading' ); ?></a>
							</div>
						</div>
					</li>
					<?php
				}
				?>

			</ul>
		</div>
	</div>
<?php

unset( $atts );
unset( $slider_id );
unset( $class );
unset( $main_term );
unset( $main_term_class );
unset( $img );
