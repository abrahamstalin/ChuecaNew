<?php
/**
 * listing-text-1.php
 *---------------------------
 * Text listing template
 */

if ( publisher_get_prop( 'show-listing-wrapper', TRUE ) ) {
	?>
	<div class="listing listing-text listing-text-1 clearfix <?php publisher_echo_prop( 'listing-class' ); ?>">
	<?php
}

$block_settings = FALSE;
if ( ! publisher_get_prop( 'block-customized', FALSE ) && publisher_have_posts() ) {

	$block_settings = publisher_get_option( 'listing-text-1' );

	publisher_set_prop( 'title-limit', $block_settings['title-limit'] );
	publisher_set_prop( 'show-term-badge', $block_settings['term-badge'] );
	publisher_set_prop( 'term-badge-count', $block_settings['term-badge-count'] );
	publisher_set_prop( 'show-meta', $block_settings['meta']['show'] );

	if ( $block_settings['meta']['show'] ) {
		publisher_set_prop( 'hide-meta-author', empty( $block_settings['meta']['author'] ) );
		publisher_set_prop( 'hide-meta-date', empty( $block_settings['meta']['date'] ) );
		publisher_set_prop( 'hide-meta-comment', empty( $block_settings['meta']['comment'] ) );
		publisher_set_prop( 'hide-meta-review', empty( $block_settings['meta']['review'] ) );
		publisher_set_prop( 'hide-meta-author-if-review', TRUE );
	}

} else {
	publisher_set_prop( 'hide-meta-author-if-review', TRUE );
}

while( publisher_have_posts() ) {
	publisher_the_post();
	publisher_get_view( 'loop', 'listing-text-1-item' );
}

if ( publisher_get_prop( 'show-listing-wrapper', TRUE ) ) {
	?>
	</div>
	<?php
}

unset( $block_settings );
