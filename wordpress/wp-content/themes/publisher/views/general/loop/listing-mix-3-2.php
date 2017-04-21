<?php
/**
 * listing-mix-3-2.php
 *---------------------------
 * Mix listing 3-2 template
 */

$_posts_count = publisher_get_prop( 'posts-count' );

$block_settings = FALSE;
if ( ! publisher_get_prop( 'block-customized', FALSE ) ) {
	$block_settings = publisher_get_option( 'listing-mix-3-2' );
}

?>
	<div class="listing listing-mix-3-2 clearfix <?php publisher_echo_prop( 'listing-class' ); ?>">
		<div class="row-1">
			<?php

			publisher_set_prop( 'show-excerpt', TRUE );

			if ( publisher_have_posts() ) {
				publisher_set_prop( 'listing-class', 'columns-1' );
				publisher_set_prop( 'posts-count', 1 );

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

				?>
				<div class="listing listing-grid-1 clearfix <?php publisher_echo_prop( 'listing-class' ); ?>">
					<?php

					while( publisher_have_posts() ) {
						publisher_the_post();
						publisher_get_view( 'loop', 'listing-grid-1-item' );
					}

					?>
				</div>
				<?php
			}

			?>
		</div>
		<?php

		if ( ! empty( $_posts_count ) && ( intval( $_posts_count ) - 2 ) > 0 ) {
			publisher_set_prop( 'posts-count', $_posts_count );
		} else {
			publisher_unset_prop( 'posts-count' );
		}

		if ( publisher_have_posts() ) {

			if ( $block_settings ) {

				publisher_set_prop( 'title-limit', $block_settings['small-title-limit'] );
				publisher_set_prop( 'show-meta', FALSE );
				publisher_set_prop( 'show-term-badge', $block_settings['small-term-badge'] );
				publisher_set_prop( 'term-badge-count', $block_settings['small-term-badge-count'] );
				publisher_set_prop( 'show-format-icon', $block_settings['small-format-icon'] );
				publisher_set_prop( 'block-customized', TRUE );
			}

			?>
			<div class="row-2">
				<?php

				publisher_set_prop( 'listing-class', 'columns-2' );
				publisher_get_view( 'loop', 'listing-thumbnail-2' );

				?>
			</div>
			<?php
		}

		?>
	</div>
<?php

unset( $block_settings );
unset( $_posts_count );
