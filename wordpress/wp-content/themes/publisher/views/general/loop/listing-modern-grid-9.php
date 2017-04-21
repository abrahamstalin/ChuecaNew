<?php
/**
 * listing-modern-grid-9.php
 *---------------------------
 * Modern grid listing template
 */

// Image Sizes
$item_big_img   = 'publisher-lg';
$item_small_img = 'publisher-mg2';

$block_settings = publisher_get_option( 'listing-modern-grid-9' );

// minor fix
if ( ! isset( $block_settings['item-6-title-limit'] ) ) {
	$block_settings['item-6-title-limit'] = 70;
}

// minor fix
if ( ! isset( $block_settings['item-7-title-limit'] ) ) {
	$block_settings['item-7-title-limit'] = 70;
}

publisher_set_prop( 'show-format-icon', $block_settings['format-icon'] );
publisher_set_prop( 'show-term-badge', $block_settings['term-badge'] );
publisher_set_prop( 'term-badge-count', $block_settings['term-badge-count'] );
publisher_set_prop( 'show-meta', $block_settings['meta']['show'] );

if ( $block_settings['meta']['show'] ) {
	publisher_set_prop( 'hide-meta-author', ! $block_settings['meta']['author'] );
	publisher_set_prop( 'hide-meta-date', ! $block_settings['meta']['date'] );
	publisher_set_prop( 'hide-meta-comment', ! $block_settings['meta']['comment'] );
	publisher_set_prop( 'hide-meta-review', ! $block_settings['meta']['review'] );
}

?>
	<div
		class="listing listing-modern-grid listing-modern-grid-9 clearfix <?php publisher_echo_prop( 'listing-class' ); ?>">
		<div class="mg-col mg-col-1">
			<?php

			if ( publisher_have_posts() ) {
				publisher_the_post();
				publisher_set_prop( 'title-limit', $block_settings['item-1-title-limit'] );
				publisher_set_prop_class( 'listing-item-1', TRUE );
				publisher_set_prop_thumbnail_size( $item_big_img );
				publisher_get_view( 'loop', 'listing-modern-grid-9-item' );
			}

			?>
		</div>
		<div class="mg-col mg-col-2">
			<div class="mg-row mg-row-1 clearfix">
				<div class="item-2-cont">
					<?php

					if ( publisher_have_posts() ) {
						publisher_the_post();
						publisher_set_prop_class( 'listing-item-2', TRUE );
						publisher_set_prop( 'show-meta', FALSE );
						publisher_set_prop( 'title-limit', $block_settings['item-2-title-limit'] );
						publisher_set_prop_thumbnail_size( $item_small_img );
						publisher_get_view( 'loop', 'listing-modern-grid-9-item' );
					}

					?>
				</div>
				<div class="item-3-cont">
					<?php

					if ( publisher_have_posts() ) {
						publisher_the_post();
						publisher_set_prop_class( 'listing-item-3', TRUE );
						publisher_set_prop( 'title-limit', $block_settings['item-3-title-limit'] );
						publisher_set_prop_thumbnail_size( $item_small_img );
						publisher_get_view( 'loop', 'listing-modern-grid-9-item' );
					}

					?>
				</div>
			</div>
			<div class="mg-row mg-row-2 clearfix">
				<div class="item-4-cont">
					<?php

					if ( publisher_have_posts() ) {
						publisher_the_post();
						publisher_set_prop_class( 'listing-item-4', TRUE );
						publisher_set_prop( 'title-limit', $block_settings['item-4-title-limit'] );
						publisher_set_prop_thumbnail_size( $item_small_img );
						publisher_get_view( 'loop', 'listing-modern-grid-9-item' );
					}

					?>
				</div>
				<div class="item-5-cont">
					<?php

					if ( publisher_have_posts() ) {
						publisher_the_post();
						publisher_set_prop_class( 'listing-item-5', TRUE );
						publisher_set_prop( 'title-limit', $block_settings['item-5-title-limit'] );
						publisher_set_prop_thumbnail_size( $item_small_img );
						publisher_get_view( 'loop', 'listing-modern-grid-9-item' );
					}

					?>
				</div>
			</div>
		</div>
		<div class="mg-col mg-col-3">
			<div class="mg-row mg-row-1 clearfix">
				<div class="item-6-cont">
					<?php

					if ( publisher_have_posts() ) {
						publisher_the_post();
						publisher_set_prop_class( 'listing-item-6', TRUE );
						publisher_set_prop( 'title-limit', $block_settings['item-6-title-limit'] );
						publisher_set_prop_thumbnail_size( $item_small_img );
						publisher_get_view( 'loop', 'listing-modern-grid-9-item' );
					}

					?>
				</div>
			</div>
			<div class="mg-row mg-row-2 clearfix">
				<div class="item-7-cont">
					<?php

					if ( publisher_have_posts() ) {
						publisher_the_post();
						publisher_set_prop_class( 'listing-item-7', TRUE );
						publisher_set_prop( 'title-limit', $block_settings['item-7-title-limit'] );
						publisher_set_prop_thumbnail_size( $item_small_img );
						publisher_get_view( 'loop', 'listing-modern-grid-9-item' );
					}

					?>
				</div>
			</div>
		</div>
	</div>
<?php

unset( $block_settings );
unset( $item_big_img );
unset( $item_small_img );
