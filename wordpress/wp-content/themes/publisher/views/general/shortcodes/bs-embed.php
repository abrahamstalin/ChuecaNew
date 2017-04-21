<?php
/**
 * bs-embed.php
 *---------------------------
 * The template to show embed shortcode/widget
 *
 * [bs-embed] shortcode
 */

$atts = publisher_get_prop( 'shortcode-bs-embed-atts' );

if ( empty( $atts['css-class'] ) ) {
	$atts['css-class'] = '';
}


?>
	<div class="bs-shortcode bs-embed clearfix <?php echo esc_attr( $atts['css-class'] ); ?>">
		<?php

		bf_shortcode_show_title( $atts ); // show title

		$embeds_list = explode( "\n", $atts['url'] );

		foreach ( $embeds_list as $embed ) {

			$embed = trim( $embed );

			if ( empty( $embed ) ) {
				continue;
			}

			?>
			<div class="bs-embed-item">
				<?php

				$embed = bf_auto_embed_content( $embed );

				echo do_shortcode( $embed['content'] ); // escaped before

				?>
			</div>
			<?php

		}

		?>
	</div><!-- .bs-embed -->
<?php

unset( $atts );
unset( $embeds_list );
