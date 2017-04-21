<?php
/**
 * listing-thumbnail-1.php
 *---------------------------
 * Thumbnail listing template
 */

if ( publisher_get_prop( 'show-listing-wrapper', TRUE ) ) {
	?>
	<div class="listing listing-thumbnail listing-tb-1 clearfix <?php publisher_echo_prop( 'listing-class' ); ?>">
	<?php
}


$block_settings = FALSE;
if ( ! publisher_get_prop( 'block-customized', FALSE ) && publisher_have_posts() ) {

	$block_settings = publisher_get_option( 'listing-thumbnail-1' );

	publisher_set_prop( 'title-limit', $block_settings['title-limit'] );
	publisher_set_prop( 'show-meta', $block_settings['meta']['show'] );

	if ( $block_settings['meta']['show'] ) {
		publisher_set_prop( 'hide-meta-author', empty( $block_settings['meta']['author'] ) );
		publisher_set_prop( 'hide-meta-date', empty( $block_settings['meta']['date'] ) );
		publisher_set_prop( 'hide-meta-comment', empty( $block_settings['meta']['comment'] ) );
		publisher_set_prop( 'hide-meta-review', empty( $block_settings['meta']['review'] ) );
	}
}

while( publisher_have_posts() ) {
	publisher_the_post();
	publisher_get_view( 'loop', 'listing-thumbnail-1-item' );
}

if ( publisher_get_prop( 'show-listing-wrapper', TRUE ) ) {
	?>
	</div>
	<?php
}

unset( $block_settings );
