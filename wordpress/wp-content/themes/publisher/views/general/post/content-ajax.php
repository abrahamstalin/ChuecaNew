<?php
/**
 * post.php
 *---------------------------
 * The template for displaying posts
 *
 */

publisher_the_post();

$post_format = get_post_format();

$thumbnail_size = 'publisher-lg';
if ( publisher_get_page_layout() == '1-col' ) {
	$thumbnail_size = 'publisher-full';
}

$img = publisher_get_thumbnail( $thumbnail_size );

$post_settings = publisher_get_option( 'post-page-settings' );

$social_share               = publisher_get_option( 'social_share_single' );
$is_top_social_share_active = $social_share == 'show' || $social_share == 'top-bottom';

?>
<div class="ajax-post-content">

	<div class="single-container">
		<article <?php publisher_attr( 'post', 'post single-post-content ' . ( ! empty( $img['src'] ) ? 'has-thumbnail' : '' ) ); ?>>
			<div class="single-featured">
				<?php

				$featured_printed = FALSE;
				$_after_featured  = ''; // temp used to move embed after featured image

				// Gallery Post Format
				if ( $post_format === 'gallery' ) {
					publisher_get_view( 'post', '_gallery' );
					$featured_printed = TRUE;
				} // Video/Audio Post Format
				elseif ( $post_format === 'video' || $post_format === 'audio' ) {

					$embed = bf_auto_embed_content( bf_get_post_meta( '_featured_embed_code' ) );

					if ( $embed['type'] !== 'external-audio' ) {
						$featured_printed = TRUE;
					}

					$_after_featured = do_shortcode( $embed['content'] );
					unset( $embed );
				}

				// Simple Thumbnail
				if ( ! $featured_printed && ! empty( $img['src'] ) ) {
					?>
					<a <?php publisher_attr( 'post-thumbnail-url', '', 'full' ); ?>>
						<img src="<?php echo $img['src']; ?>" alt="<?php the_title_attribute(); ?>">
					</a>
					<?php
				}

				// temp embed code
				echo $_after_featured;

				if ( bf_get_post_meta( 'bs_featured_image_credit' ) != '' ) {
					?>
					<span class="image-credit"><?php bf_echo_post_meta( 'bs_featured_image_credit' ); ?></span>
					<?php
				}

				?>
			</div>

			<div class="post-header-inner">
				<div class="post-header-title">
					<?php

					if ( $post_settings['term'] || $post_settings['format-icon'] ) {
						publisher_cats_badge_code(
							$post_settings['term-count'],
							'',
							$post_settings['format-icon'],
							TRUE,
							'floated',
							$post_settings['term']
						);
					}

					?>
					<h1 class="single-post-title">
						<span <?php publisher_attr( 'post-title' ); ?>><?php the_title(); ?></span>
					</h1>
					<?php

					if ( function_exists( 'publisher_the_subtitle' ) ) {
						publisher_the_subtitle( '<h3 class="post-subtitle">', '</h3>' );
					}

					if ( $post_settings['meta']['show'] ) {
						publisher_set_prop( 'hide-meta-author', ! $post_settings['meta']['author'] );
						publisher_set_prop( 'hide-meta-author-avatar', ! $post_settings['meta']['author_avatar'] );
						publisher_set_prop( 'hide-meta-date', ! $post_settings['meta']['date'] );
						publisher_set_prop( 'hide-meta-views', $is_top_social_share_active || ! $post_settings['meta']['views'] );
						publisher_set_prop( 'hide-meta-comment', $is_top_social_share_active || ! $post_settings['meta']['comment'] );
						publisher_set_prop( 'hide-meta-review', ! $post_settings['meta']['review'] );
						publisher_get_view( 'post', '_meta' );
					}

					?>
				</div>
			</div>
			<?php

			// Social share buttons
			if ( $social_share == 'show' || $social_share == 'top-bottom' ) {
				publisher_listing_social_share( array(
						'type'          => 'single',
						'class'         => 'single-post-share top-share clearfix',
						'show_count'    => publisher_get_option( 'social_share_count' ) !== 'hide',
						'show_views'    => $post_settings['meta']['views'],
						'show_comments' => $post_settings['meta']['comment'],
					)
				);
			}

			?>
			<div <?php publisher_attr( 'post-content', 'clearfix single-post-content' ); ?>>
				<?php publisher_the_content(); ?>
			</div>
			<?php

			// Shows source
			if ( bf_get_post_meta( '_bs_source_url' ) || bf_get_post_meta( '_bs_source_url_2' ) || bf_get_post_meta( '_bs_source_url_3' ) ) {
				publisher_get_view( 'post', '_source', 'default' );
			}

			// Shows via
			if ( bf_get_post_meta( '_bs_via_url' ) || bf_get_post_meta( '_bs_via_url_2' ) || bf_get_post_meta( '_bs_via_url_3' ) ) {
				publisher_get_view( 'post', '_via', 'default' );
			}

			// Shows post tags
			if ( $post_settings['tag'] && publisher_has_tag() ) {
				publisher_get_view( 'post', '_tags', 'default' );
			}

			// Social share buttons
			if ( $social_share == 'bottom' || $social_share == 'top-bottom' ) {
				publisher_listing_social_share( array(
						'type'          => 'single',
						'class'         => 'single-post-share bottom-share clearfix',
						'show_count'    => publisher_get_option( 'social_share_count' ) !== 'hide',
						'show_views'    => $post_settings['meta']['views'],
						'show_comments' => $post_settings['meta']['comment'],
					)
				);
			}

			?>
		</article>
		<?php

		// Author box
		if ( publisher_get_option( 'post_author_box' ) == 'show' ) {
			publisher_get_view( 'post', '_author' );
		}

		?>
	</div>
	<?php

	// Comments and comment form
	publisher_comments_template();

	// After ajaxed post
	publisher_show_ad_location( 'post_ajax_related', array( 'container-class' => 'adloc-ajaxed-related' ) );

	?>
</div>
