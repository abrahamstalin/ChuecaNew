<?php
/**
 * listing-mix-1-2.php
 *---------------------------
 * Mix listing 1-2 template
 *
 */

$block_settings = FALSE;
if ( ! publisher_get_prop( 'block-customized', FALSE ) ) {
	$block_settings = publisher_get_option( 'listing-mix-1-2' );
}

?>
	<div class="listing listing-mix-1-2 clearfix <?php publisher_echo_prop( 'listing-class' ); ?>">
		<div class="column-1">
			<?php

			if ( publisher_have_posts() ) {

				if ( $block_settings ) {

					publisher_set_prop( 'title-limit', $block_settings['big-title-limit'] );
					publisher_set_prop( 'excerpt-limit', $block_settings['big-excerpt-limit'] );
					publisher_set_prop( 'show-term-badge', $block_settings['big-term-badge'] );
					publisher_set_prop( 'term-badge-count', $block_settings['big-term-badge-count'] );
					publisher_set_prop( 'show-format-icon', $block_settings['big-format-icon'] );
					publisher_set_prop( 'show-meta', $block_settings['big-meta']['show'] );

					if ( $block_settings['big-meta']['show'] ) {
						publisher_set_prop( 'hide-meta-author', empty( $block_settings['big-meta']['author'] ) );
						publisher_set_prop( 'hide-meta-date', empty( $block_settings['big-meta']['date'] ) );
						publisher_set_prop( 'hide-meta-comment', empty( $block_settings['big-meta']['comment'] ) );
						publisher_set_prop( 'hide-meta-review', empty( $block_settings['big-meta']['review'] ) );
					}

				}

				publisher_the_post();
				publisher_get_view( 'loop', 'listing-grid-1-item' );
			}

			?>
		</div>
		<div class="column-2">
			<?php

			if ( publisher_have_posts() ) {

				if ( $block_settings ) {

					publisher_set_prop( 'title-limit', $block_settings['small-title-limit'] );
					publisher_set_prop( 'show-term-badge', $block_settings['small-term-badge'] );
					publisher_set_prop( 'term-badge-count', $block_settings['small-term-badge-count'] );
					publisher_set_prop( 'show-format-icon', $block_settings['small-format-icon'] );
					publisher_set_prop( 'show-meta', FALSE );
					publisher_set_prop( 'block-customized', TRUE );

				} else {
					publisher_set_prop( 'show-meta', FALSE );
				}

				publisher_set_prop( 'listing-class', 'columns-2' );
				publisher_get_view( 'loop', 'listing-thumbnail-2' );
			}

			?>
		</div>
	</div>
<?php

unset( $block_settings );
