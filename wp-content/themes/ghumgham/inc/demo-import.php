<?php
/**
 * Demo Import.
 *
 * This is the template that includes all the files from theme demo.
 *
 * @package Ghumgham
 */


/**
 *
 * Automatically assign "Front page", "Posts page" and menu locations after the importer is done
 */
function ghumgham_ocdi_after_import_setup() {
	// Assign menus to their locations.
	$main_menu = get_term_by( 'name', 'Primary Menu', 'nav_menu' );

	set_theme_mod(
		'nav_menu_locations',
		array(
			'menu-1' => $main_menu->term_id,
		)
	);

	// Assign front page and posts page (blog page).
	$front_page_id = get_page_by_title( 'Home' );
	$blog_page_id  = get_page_by_title( 'Blog' );

	update_option( 'show_on_front', 'page' );
	update_option( 'page_on_front', $front_page_id->ID );
	update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'ghumgham_ocdi_after_import_setup' );

// Disable the ProteusThemes branding notice after successful demo import.
add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );
