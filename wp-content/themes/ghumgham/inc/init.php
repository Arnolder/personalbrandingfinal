<?php
/**
 * Load files
 *
 * @package Ghumgham
 */

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer Addition.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load customizer defaults.
 */
require get_template_directory() . '/inc/customizer/defaults.php';

/**
 * Include core function.
 */
require get_template_directory() . '/inc/core.php';

/**
 * Include theme custom functions.
 */
require get_template_directory() . '/inc/theme-custom-functions.php';

/**
 * Include theme background images.
 */
require get_template_directory() . '/inc/dynamic-styles.php';

/**
 * Include tgm required plaugins functionality.
 */
require get_template_directory() . '/inc/tgm-plugin/tgm-required-plugins.php';

if ( class_exists( 'OCDI_Plugin' ) ) {
	/**
	* Include OCDI plugin demo importer compatibility.
	*/
	require get_template_directory() . '/inc/demo-import.php';
}




/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
