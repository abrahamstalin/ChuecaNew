<?php
/**
 * listing-thumbnail-1-item.php
 *---------------------------
 * Thumbnail listing item template
 */

$img = publisher_get_thumbnail( publisher_get_prop_thumbnail_size( 'publisher-tb1' ), get_the_ID(), FALSE );

// Creates main term ID that used for custom category color style
$main_term = publisher_get_post_primary_cat();
if ( ! is_wp_error( $main_term ) && is_object( $main_term ) ) {
	$main_term_class = 'main-term-' . $main_term->term_id;
} else {
	$main_term_class = 'main-term-none';
}

?>
	<article <?php publisher_attr( 'post', publisher_get_prop_class() . ' clearfix listing-item listing-item-thumbnail listing-item-tb-1 ' . $main_term_class ); ?>>
		<?php if ( ! empty( $img['src'] ) ) { ?>
			<div class="featured">
				<a class="img-holder" href="<?php publisher_the_permalink(); ?>"
				   title="<?php publisher_the_title_attribute(); ?>"
				   style="background-image: url(<?php echo $img['src']; ?>);"></a>
				<?php publisher_edit_post_link(); ?>
			</div>
		<?php } ?>
		<h2 class="title">
			<a href="<?php publisher_the_permalink(); ?>" class="post-url post-title">
				<?php publisher_echo_html_limit_words( publisher_get_the_title(), publisher_get_prop( 'title-limit', 60 ) ); ?>
			</a>
		</h2>
		<?php

		if ( publisher_get_prop( 'show-meta', TRUE ) ) {
			publisher_loop_meta();
		}

		?>
	</article>
<?php

$img             = NULL;
$main_term       = NULL;
$main_term_class = NULL;
