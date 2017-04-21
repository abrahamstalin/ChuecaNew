<?php
/**
 * single.php
 *---------------------------
 * The template for displaying posts
 *
 */

get_header();

the_post();

// Prints content with layout that is selected in panels.
// Location: "views/general/post/style-*.php"
publisher_get_view( 'post', publisher_get_single_template() );

get_footer();
