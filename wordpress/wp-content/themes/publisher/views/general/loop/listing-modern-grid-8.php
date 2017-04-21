<?php
/**
 * listing-modern-grid-8.php
 *---------------------------
 * Grid listing template
 */

// Image sizes
$item1_img = 'publisher-lg';
$item2_img = 'publisher-lg';
$item3_img = 'publisher-mg2';
$item4_img = 'publisher-mg2';
$item5_img = 'publisher-tall-big';

$block_settings = publisher_get_option( 'listing-modern-grid-8' );

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
		class="listing listing-modern-grid listing-modern-grid-8 clearfix <?php publisher_echo_prop( 'listing-class' ); ?>">
		<div class="mg-col mg-col-1">
			<?php

			if ( publisher_have_posts() ) {
				publisher_the_post();
				publisher_set_prop( 'title-limit', $block_settings['item-1-title-limit'] );
				publisher_set_prop_class( 'listing-item-1', TRUE );
				publisher_set_prop_thumbnail_size( $item1_img );
				publisher_get_view( 'loop', 'listing-modern-grid-8-item' );
			}

			?>
		</div>
		<div class="mg-col mg-col-2">
			<div class="mg-row mg-row-1">
				<?php

				if ( publisher_have_posts() ) {
					publisher_the_post();
					publisher_set_prop( 'title-limit', $block_settings['item-2-title-limit'] );
					publisher_set_prop_class( 'listing-item-2', TRUE );
					publisher_set_prop_thumbnail_size( $item2_img );
					publisher_get_view( 'loop', 'listing-modern-grid-8-item' );
				}

				?>
			</div>
			<div class="mg-row mg-row-2">
				<div class="item-3-cont">
					<?php

					if ( publisher_have_posts() ) {
						publisher_the_post();
						publisher_set_prop_class( 'listing-item-3', TRUE );
						publisher_set_prop( 'title-limit', $block_settings['item-3-title-limit'] );
						publisher_set_prop( 'show-term-badge', FALSE );
						publisher_set_prop( 'show-meta', FALSE );
						publisher_set_prop_thumbnail_size( $item3_img );
						publisher_get_view( 'loop', 'listing-modern-grid-8-item' );

					}

					?>
				</div>
				<div class="item-4-cont">
					<?php

					if ( publisher_have_posts() ) {
						publisher_the_post();
						publisher_set_prop_class( 'listing-item-4', TRUE );
						publisher_set_prop( 'title-limit', $block_settings['item-3-title-limit'] );
						publisher_set_prop_thumbnail_size( $item4_img );
						publisher_get_view( 'loop', 'listing-modern-grid-8-item' );
					}

					?>
				</div>
			</div>
		</div>
		<div class="mg-col mg-col-3">
			<div class="item-5-cont">
				<?php

				publisher_set_prop( 'title-limit', $block_settings['item-5-title-limit'] );
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

				if ( publisher_have_posts() ) {
					publisher_the_post();
					publisher_set_prop_class( 'listing-item-5', TRUE );
					publisher_set_prop( 'title-limit', $block_settings['item-2-title-limit'] );
					publisher_set_prop_thumbnail_size( $item5_img );
					publisher_get_view( 'loop', 'listing-modern-grid-8-item' );
				}

				?>
			</div>
		</div>
	</div>
<?php

unset( $item1_img );
unset( $item2_img );
unset( $item3_img );
unset( $item4_img );
unset( $item5_img );
unset( $block_settings );
