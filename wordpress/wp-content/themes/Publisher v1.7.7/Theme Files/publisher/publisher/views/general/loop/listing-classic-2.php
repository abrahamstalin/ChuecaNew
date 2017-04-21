<?php
/**
 * listing-classic-2.php
 *---------------------------
 * Classic listing 2 template
 *
 */


$columns = publisher_get_prop( 'listing-columns', 1 );

if ( publisher_get_prop( 'show-listing-wrapper', TRUE ) ) {
	?>
	<div class="listing listing-classic listing-classic-2 clearfix <?php publisher_echo_prop( 'listing-class' ); ?> columns-<?php echo esc_attr( $columns ); ?>">
	<?php
}


$block_settings = FALSE;
if ( ! publisher_get_prop( 'block-customized', FALSE ) && publisher_have_posts() ) {

	$block_settings = publisher_get_option( 'listing-classic-2' );

	publisher_set_prop( 'title-limit', $block_settings['title-limit'] );

	switch ( $columns ) {

		case 1:
			publisher_set_prop( 'excerpt-limit', $block_settings['excerpt-limit'] );
			break;

		case 2:
			publisher_set_prop( 'excerpt-limit-2col', $block_settings['excerpt-limit-2col'] );
			break;

		case 3:
			publisher_set_prop( 'excerpt-limit-3col', $block_settings['excerpt-limit-3col'] );
			break;

		default:
			publisher_set_prop( 'excerpt-limit', $block_settings['excerpt-limit'] );

	}

	publisher_set_prop( 'show-term-badge', $block_settings['term-badge'] );
	publisher_set_prop( 'term-badge-count', $block_settings['term-badge-count'] );
	publisher_set_prop( 'show-format-icon', $block_settings['format-icon'] );
	publisher_set_prop( 'show-read-more', $block_settings['read-more'] );
	publisher_set_prop( 'show-meta', $block_settings['meta']['show'] );

	if ( $block_settings['meta']['show'] ) {
		publisher_set_prop( 'hide-meta-author', ! $block_settings['meta']['author'] );
		publisher_set_prop( 'hide-meta-date', ! $block_settings['meta']['date'] );
		publisher_set_prop( 'hide-meta-comment', ! $block_settings['meta']['comment'] );
		publisher_set_prop( 'hide-meta-review', ! $block_settings['meta']['review'] );
	}

	unset( $block_settings );
}


while( publisher_have_posts() ) {
	publisher_the_post();
	publisher_get_view( 'loop', 'listing-classic-2-item' );
}


if ( publisher_get_prop( 'show-listing-wrapper', TRUE ) ) {
	?>
	</div>
	<?php
}

unset( $columns );
