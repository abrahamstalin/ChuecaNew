<?php
/**
 * listing-thumbnail-2.php
 *---------------------------
 * Thumbnail listing template
 */

if ( publisher_get_prop( 'show-listing-wrapper', TRUE ) ) {
	?>
	<div class="listing listing-thumbnail listing-tb-2 clearfix <?php publisher_echo_prop( 'listing-class' ); ?>">
	<?php
}

// larger thumbnail size on 1 column and primary sidebar
if ( publisher_get_prop( 'listing-columns' ) == 1 && bf_get_current_sidebar() === 'primary-sidebar' ) {
	publisher_set_prop_thumbnail_size( 'publisher-md' );
}

$block_settings = FALSE;
if ( ! publisher_get_prop( 'block-customized', FALSE ) && publisher_have_posts() ) {

	$block_settings = publisher_get_option( 'listing-thumbnail-2' );

	publisher_set_prop( 'title-limit', $block_settings['title-limit'] );
	publisher_set_prop( 'show-term-badge', $block_settings['term-badge'] );
	publisher_set_prop( 'term-badge-count', $block_settings['term-badge-count'] );
	publisher_set_prop( 'show-format-icon', $block_settings['format-icon'] );
}

while( publisher_have_posts() ) {
	publisher_the_post();
	publisher_get_view( 'loop', 'listing-thumbnail-2-item' );
}

if ( publisher_get_prop( 'show-listing-wrapper', TRUE ) ) {
	?>
	</div>
	<?php
}
