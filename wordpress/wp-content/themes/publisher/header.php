<?php
/**
 * header.php
 *---------------------------
 * The template for displaying the header.
 *
 */

// Prints all codes before <body> tag.
// Location: "views/general/header/_common.php"
publisher_get_view( 'header', '_common', 'general' );

// Activates duplicate posts removal temporarily for not counting posts inside mega menu
publisher_set_global( 'disable-duplicate-posts', TRUE );

?>
	<div class="main-wrap">
<?php

if ( publisher_get_header_style() !== 'disable' ) {
	// Prints header code base the style was selected in panel.
	// Location: "views/general/header/header-*.php"
	publisher_get_view( 'header', 'header-' . publisher_get_header_style() );
}

// Deactivates duplicate posts removal temporarily
publisher_unset_global( 'disable-duplicate-posts' );
