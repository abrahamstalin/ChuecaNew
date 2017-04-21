<?php
/**
 * mega-tabbed-grid-posts-content.php
 *---------------------------
 * the content part of mega-tabbed-grid-posts.php
 */

$block_settings = publisher_get_option( 'blocks-mega-menu' );
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
