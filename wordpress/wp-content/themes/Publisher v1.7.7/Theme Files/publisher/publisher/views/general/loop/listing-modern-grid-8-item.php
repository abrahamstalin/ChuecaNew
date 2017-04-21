<?php
/**
 * listing-modern-grid-8-item.php
 *---------------------------
 * Template of each item in modern listing 8
 *
 */

$img = publisher_get_thumbnail( publisher_get_prop_thumbnail_size( 'publisher-md' ) );

// Creates main term ID that used for custom category color style
$main_term = publisher_get_post_primary_cat();
if ( ! is_wp_error( $main_term ) && is_object( $main_term ) ) {
	$main_term_class = 'main-term-' . $main_term->term_id;
} else {
	$main_term_class = 'main-term-none';
}

?>
	<article <?php publisher_attr( 'post', publisher_get_prop_class() . ' listing-item listing-mg-item listing-mg-8-item listing-mg-type-1 ' . $main_term_class ) ?>>
		<div class="item-content">
			<a class="img-cont" href="<?php publisher_the_permalink(); ?>"
			   title="<?php publisher_the_title_attribute(); ?>"
			   style="background-image: url('<?php echo esc_url( $img['src'] ); ?>')"></a>
			<?php

			if ( publisher_get_prop( 'show-term-badge', TRUE ) ) {
				publisher_cats_badge_code( publisher_get_prop( 'term-badge-count', 1 ), '', FALSE, TRUE, 'floated' );
			}

			if ( publisher_get_prop( 'show-format-icon', TRUE ) ) {
				publisher_format_icon();
			}

			?>
			<div class="content-container">
				<h2 class="title">
					<a href="<?php publisher_the_permalink(); ?>" class="post-url post-title">
						<?php publisher_echo_html_limit_words( publisher_get_the_title(), publisher_get_prop( 'title-limit', - 1 ) ); ?>
					</a>
				</h2>
				<?php

				if ( publisher_get_prop( 'show-meta', TRUE ) ) {
					publisher_loop_meta();
				}

				?>
			</div>
		</div>
	</article>
<?php

$img             = NULL;
$main_term       = NULL;
$main_term_class = NULL;
