<?php
/**
 * listing-text-1-item.php
 *---------------------------
 * Text listing item template
 *
 */

// Creates main term ID that used for custom category color style
$main_term = publisher_get_post_primary_cat();
if ( ! is_wp_error( $main_term ) && is_object( $main_term ) ) {
	$class = 'main-term-' . $main_term->term_id;
} else {
	$class = 'main-term-none';
}

if ( ! publisher_get_prop( 'show-meta', TRUE ) ) {
	$class .= ' no-meta';
}

?>
	<article <?php publisher_attr( 'post', publisher_get_prop_class() . ' listing-item listing-item-text listing-item-text-1 ' . $class ); ?>>
		<div class="item-inner">
			<?php

			if ( publisher_get_prop( 'show-term-badge', TRUE ) ) {
				publisher_cats_badge_code( publisher_get_prop( 'term-badge-count', 1 ), '', FALSE, TRUE, 'floated' );
			}

			?>
			<h2 class="title">
				<a href="<?php publisher_the_permalink(); ?>" class="post-title post-url">
					<?php publisher_echo_html_limit_words( publisher_get_the_title(), publisher_get_prop( 'title-limit', 70 ) ); ?>
				</a>
			</h2>
			<?php

			if ( publisher_get_prop( 'show-meta', TRUE ) ) {
				publisher_loop_meta();
			}

			?>
		</div>
	</article>
<?php

$main_term = NULL;
$class     = NULL;
