<?php
/**
 * header-style-7.php
 *---------------------------
 * Header style 7 template
 */

?>
	<header <?php publisher_attr( 'header', 'site-header header-style-7 ' . publisher_get_header_layout_class() ); ?>>
		<?php

		// Show Topbar if is active
		if ( publisher_get_option( 'topbar_style' ) != 'hidden' ) {

			// Prints topbar code base the style was selected in panel.
			// Location: "views/general/header/topbar-*.php"
			publisher_get_view( 'header', 'topbar-' . publisher_get_option( 'topbar_style' ) );

		}

		publisher_get_view( 'menu', 'main', 'default' );

		?>
		<div class="header-inner">
			<div class="content-wrap">
				<div class="container">
					<?php publisher_get_view( 'header', '_brand', 'default' ); ?>
				</div>
			</div>
		</div>
	</header><!-- .header -->
<?php

publisher_get_view( 'header', '_mobile-header', 'default' );
