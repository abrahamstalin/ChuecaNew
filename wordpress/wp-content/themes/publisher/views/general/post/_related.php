<?php
/**
 * _related.php
 *---------------------------
 * Post related posts template
 *
 */

$count               = publisher_get_option( 'post_related_count' );
$type                = publisher_get_option( 'post_related_type' );
$related_args        = publisher_get_related_posts_args( $count, $type );
$author_id           = get_the_author_meta( 'ID' );
$related_posts_query = new WP_Query( $related_args );
$show_author_posts   = publisher_get_option( 'post_related_author_posts' ) === 'show';

publisher_set_query( $related_posts_query );

if ( ! publisher_have_posts() ) {
	publisher_clear_props();
	publisher_clear_query();

	return;
}

$atts = array(
	'paginate'        => 'next_prev',
	'have_pagination' => TRUE,
	'count'           => $count
);

$related_atts = $atts + $related_args;

if ( $show_author_posts ) {
	$mt_rand           = mt_rand();
	$deferred_block_id = 'relatedposts_' . $mt_rand . '_2';
}

?>
<div class="post-related">

	<h4 class="section-heading <?php echo $show_author_posts ? 'multi-tab' : ''; ?>">

		<?php if ( $show_author_posts ) { ?>
			<a href="#relatedposts_<?php echo $mt_rand; // escaped before  ?>_1" class="main-link active"
			   data-toggle="tab">
				<span
					class="h-text related-posts-heading"><?php publisher_translation_echo( 'related_heading' ); ?></span>
			</a>
			<a href="#<?php echo esc_attr( $deferred_block_id ); ?>" class="other-link" data-toggle="tab"
			   data-deferred-event="shown.bs.tab"
			   data-deferred-init="<?php echo esc_attr( $deferred_block_id ); ?>">
				<span
					class="h-text related-posts-heading"><?php publisher_translation_echo( 'this_author_posts' ); ?></span>
			</a>
		<?php } else { ?>
			<span class="h-text related-posts-heading"><?php publisher_translation_echo( 'related_heading' ); ?></span>
		<?php } ?>

	</h4>

	<?php if ( $show_author_posts ) { ?>
	<div class="tab-content">
		<div class="tab-pane bs-tab-anim bs-tab-animated active"
		     id="relatedposts_<?php echo $mt_rand; // escaped before ?>_1">
			<?php } ?>

			<?php

			$atts = array(
				'paginate'        => 'next_prev',
				'have_pagination' => TRUE,
			);

			$view = 'Publisher::fetch_related_posts';
			$type = 'wp_query';

			publisher_theme_pagin_manager()->wrapper_start( $related_atts );

			$block_settings = publisher_get_option( 'blocks-related-posts' );
			publisher_set_prop( 'title-limit', $block_settings['title-limit'] );
			publisher_set_prop( 'show-term-badge', $block_settings['term-badge'] );
			publisher_set_prop( 'term-badge-count', $block_settings['term-badge-count'] );
			publisher_set_prop( 'show-format-icon', $block_settings['format-icon'] );
			publisher_set_prop( 'show-excerpt', FALSE );
			publisher_set_prop( 'show-meta', FALSE );
			publisher_set_prop( 'listing-class', 'columns-3' );
			publisher_set_prop( 'block-customized', TRUE );
			publisher_set_prop_class( 'simple-grid' );
			publisher_get_view( 'loop', 'listing-grid-1' );

			publisher_clear_props();
			publisher_clear_query();

			publisher_theme_pagin_manager()->wrapper_end();
			publisher_theme_pagin_manager()->display_pagination( $related_atts, $related_posts_query, $view, $type );

			if ( $show_author_posts ) { ?>

		</div>

		<div class="tab-pane bs-tab-anim bs-tab-animated bs-deferred-container"
		     id="<?php echo esc_attr( $deferred_block_id ); ?>">
			<?php

			$author_related_atts = array(
				'paginate'        => 'next_prev',
				'have_pagination' => TRUE,
				'count'           => 3,
				'author'          => $author_id,
				'post_type'       => 'post',
			);

			$view = 'Publisher::fetch_other_related_posts';
			$type = 'wp_query';

			publisher_theme_pagin_manager()->wrapper_start( $author_related_atts );
			publisher_theme_pagin_manager()->display_deferred_html( $author_related_atts, $view, $type, $deferred_block_id );
			publisher_theme_pagin_manager()->wrapper_end();

			?>
		</div>
	</div>
<?php } ?>
</div>
