<?php
/**
 * sidebar-secondary.php
 *---------------------------
 * The template for displaying sidebars.
 *
 */
?>
<aside <?php publisher_attr( 'sidebar', '', 'secondary-sidebar' ) ?>>
	<?php dynamic_sidebar( 'secondary-sidebar' ); ?>
</aside>
