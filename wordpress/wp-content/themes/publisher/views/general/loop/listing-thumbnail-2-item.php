<?php
/**
 * listing-thumbnail-2-item.php
 *---------------------------
 * Thumbnail listing item template
 */

// Creates main term ID that used for custom category color style
$main_term = publisher_get_post_primary_cat();
if ( ! is_wp_error( $main_term ) && is_object( $main_term ) ) {
	$main_term_class = 'main-term-' . $main_term->term_id;
} else {
	$main_term_class = 'main-term-none';
}

?>
<article <?php publisher_attr( 'post', publisher_get_prop_class() . ' clearfix listing-item listing-item-thumbnail listing-item-tb-2 ' . $main_term_class ); ?>>
	<div class="item-inner">
		<?php if ( publisher_has_post_thumbnail() ) { ?>
			<div class="featured">
				<?php

				if ( publisher_get_prop( 'show-term-badge', TRUE ) ) {
					publisher_cats_badge_code( publisher_get_prop( 'term-badge-count', 1 ), '', FALSE, TRUE, 'floated' );
				}

				$img = publisher_get_thumbnail( publisher_get_prop_thumbnail_size( 'publisher-sm' ) );

				?>
				<a class="img-holder" href="<?php publisher_the_permalink(); ?>"
				   title="<?php publisher_the_title_attribute(); ?>"
				   style="background-image: url(<?php echo esc_url( $img['src'] ); ?>);"></a>
				<?php

				if ( publisher_get_prop( 'show-format-icon', TRUE ) ) {
					publisher_format_icon();
				}

				publisher_edit_post_link();

				?>
			</div>
		<?php } ?>

		<h2 class="title">
			<a <?php publisher_attr( 'post-url' ); ?>>
				<span <?php publisher_attr( 'post-title' ); ?>>
					<?php publisher_echo_html_limit_words( publisher_get_the_title(), publisher_get_prop( 'title-limit', 60 ) ); ?>
				</span>
			</a>
		</h2>
	</div>
</article>
