<?php
/**
 * 2-col.php
 *---------------------------
 * 2 column layout.
 *
 */

// Generate layout settings
$layout_setting = publisher_get_page_layout_setting();

if ( publisher_get_header_style() !== 'disable' ) {

	// Shows breadcrumb
	if ( publisher_show_breadcrumb() ) {
		Better_Framework()->breadcrumb()->generate( array(
			'before'       => '<div class="container bf-breadcrumb-container">',
			'after'        => '</div>',
			'custom_class' => 'bc-top-style'
		) );
		$layout_setting['container'] .= ' layout-bc-before';
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
	<main <?php publisher_attr( 'content' ); ?>>

		<div class="container <?php echo $layout_setting['container']; ?>">
			<div class="row main-section">
				<?php

				foreach ( $layout_setting['columns'] as $column ) {

					if ( $column['id'] == 'content' ) {
						?>
						<div class="<?php echo $column['class']; ?>">
							<?php publisher_get_view( 'woocommerce', 'loop', 'default' ); ?>
						</div><!-- .content-column -->
						<?php
					} else {
						?>
						<div class="<?php echo $column['class']; ?>">
							<?php

							/**
							 * woocommerce_sidebar hook.
							 *
							 * @hooked woocommerce_get_sidebar - 10
							 */
							do_action( 'woocommerce_sidebar' );

							?>
						</div><!-- .<?php echo $column['id']; ?>-sidebar-column -->
						<?php
					}
				}

				?>
			</div><!-- .main-section -->
		</div><!-- .layout-2-col -->

	</main><!-- main -->
</div><!-- .content-wrap -->
