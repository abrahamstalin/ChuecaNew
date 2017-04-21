<?php
/**
 * listing-text-4.php
 *---------------------------
 * Text listing template
 */

if ( publisher_get_prop( 'show-listing-wrapper', TRUE ) ) {
	?>
	<div class="listing listing-text listing-text-4 clearfix <?php publisher_echo_prop( 'listing-class' ); ?>">
	<?php
}

publisher_set_prop( 'show-excerpt', publisher_get_prop( 'show-excerpt', FALSE ) );

$block_settings = FALSE;
if ( ! publisher_get_prop( 'block-customized', FALSE ) && publisher_have_posts() ) {

	$block_settings = publisher_get_option( 'listing-text-4' );

	publisher_set_prop( 'title-limit', $block_settings['title-limit'] );
	publisher_set_prop( 'excerpt-limit', $block_settings['excerpt-limit'] );
	publisher_set_prop( 'show-term-badge', $block_settings['term-badge'] );
	publisher_set_prop( 'term-badge-count', $block_settings['term-badge-count'] );
	publisher_set_prop( 'show-meta', $block_settings['meta']['show'] );

	if ( $block_settings['meta']['show'] ) {
		publisher_set_prop( 'hide-meta-author', ! $block_settings['meta']['author'] );
		publisher_set_prop( 'hide-meta-date', ! $block_settings['meta']['date'] );
		publisher_set_prop( 'hide-meta-comment', ! $block_settings['meta']['comment'] );
		publisher_set_prop( 'hide-meta-review', ! $block_settings['meta']['review'] );
	}
}

while( publisher_have_posts() ) {
	publisher_the_post();
	publisher_get_view( 'loop', 'listing-text-4-item' );
}

if ( publisher_get_prop( 'show-listing-wrapper', TRUE ) ) {
	?>
	</div>
	<?php
}

unset( $block_settings );
