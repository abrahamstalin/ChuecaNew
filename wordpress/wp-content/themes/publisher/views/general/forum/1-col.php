<?php
/**
 * 1-col.php
 *---------------------------
 * Single column layout template file.
 *
 */

$container_class = 'container layout-1-col layout-no-sidebar';

if ( publisher_get_header_style() !== 'disable' ) {

	// Shows breadcrumb
	if ( publisher_show_breadcrumb() ) {
		Better_Framework()->breadcrumb()->generate( array(
			'before'       => '<div class="container bf-breadcrumb-container">',
			'after'        => '</div>',
			'custom_class' => 'bc-top-style'
		) );
		$container_class .= ' layout-bc-before';
	}

	// After header Ad
	publisher_show_ad_location( 'header_after', array(
			'container-class' => 'adloc-after-header',
			'before'          => '<div class="container adcontainer">',
			'after'           => '</div>',
		)
	);
}

?>
<div class="content-wrap">
	<main <?php publisher_attr( 'content', '' ); ?>>

		<div class="<?php echo $container_class; ?>">
			<div class="main-section">
				<div class="content-column">
					<?php

					if ( function_exists( 'is_bbpress' ) && ( bbp_is_single_user_edit() || bbp_is_single_user() ) ) {
						publisher_get_view( 'forum/content-user' );
					} else {
						// Prints post and other post type templates
						// Location: "views/general/{posttype}/content.php"
						publisher_get_content_template();
					}

					?>
				</div><!-- .content-column -->
			</div><!-- .main-section -->
		</div><!-- .layout-1-col -->

	</main><!-- main -->
</div><!-- .content-wrap -->
