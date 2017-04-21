<?php
/**
 * listing-modern-grid-6.php
 *---------------------------
 * Grid listing template
 */

// Image sizes
$item1_img = 'publisher-lg';
$item2_img = 'publisher-lg';
$item3_img = 'publisher-mg2';
$item4_img = 'publisher-mg2';


$block_settings = FALSE;
if ( ! publisher_get_prop( 'block-customized', FALSE ) && publisher_have_posts() ) {

	$block_settings = publisher_get_option( 'listing-modern-grid-6' );

	publisher_set_prop( 'title-limit', $block_settings['title-limit'] );
	publisher_set_prop( 'show-term-badge', $block_settings['term-badge'] );
	publisher_set_prop( 'term-badge-count', $block_settings['term-badge-count'] );
	publisher_set_prop( 'show-format-icon', $block_settings['format-icon'] );
	publisher_set_prop( 'show-meta', $block_settings['meta']['show'] );

	if ( $block_settings['meta']['show'] ) {
		publisher_set_prop( 'hide-meta-author', ! $block_settings['meta']['author'] );
		publisher_set_prop( 'hide-meta-date', ! $block_settings['meta']['date'] );
		publisher_set_prop( 'hide-meta-comment', ! $block_settings['meta']['comment'] );
		publisher_set_prop( 'hide-meta-review', ! $block_settings['meta']['review'] );
	}
}

?>
	<div
		class="listing listing-modern-grid listing-modern-grid-6 clearfix <?php publisher_echo_prop( 'listing-class' ); ?>">
		<?php

		$col_1 = '';
		$col_2 = '';

		while( publisher_have_posts() ) {

			if ( publisher_have_posts() ) {
				publisher_the_post();
				publisher_set_prop_class( 'listing-item-1', TRUE );
				publisher_set_prop_thumbnail_size( $item1_img );
				$col_1 .= publisher_get_view( 'loop', 'listing-modern-grid-6-item', '', FALSE );
			}

			if ( publisher_have_posts() ) {
				publisher_the_post();
				publisher_set_prop_class( 'listing-item-2', TRUE );
				publisher_set_prop_thumbnail_size( $item1_img );
				$col_2 .= publisher_get_view( 'loop', 'listing-modern-grid-6-item', '', FALSE );
			}

		}

		?>
		<div class="mg-col mg-col-1">
			<?php

			echo $col_1; // escaped before

			?>
		</div>
		<div class="mg-col mg-col-2">
			<?php

			echo $col_2; // escaped before

			?>
		</div>
	</div>
<?php

unset( $item1_img );
unset( $item2_img );
unset( $item3_img );
unset( $item4_img );
unset( $block_settings );
unset( $col_1 );
unset( $col_2 );
