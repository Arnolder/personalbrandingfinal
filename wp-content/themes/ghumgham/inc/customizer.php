<?php
/**
 * Ghumgham Theme Customizer
 *
 * @package ghumgham
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function ghumgham_customize_register( $wp_customize ) {

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'ghumgham_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'ghumgham_customize_partial_blogdescription',
			)
		);
	}

		// load custom control dropdown taxonomy.
		require get_template_directory() . '/inc/customizer/custom-controls/class-ghumgham-dropdown-posts-control.php';

		// load custom control dropdown posts.
		require get_template_directory() . '/inc/customizer/custom-controls/class-ghumgham-dropdown-taxonomies-control.php';

		// Add panel for common theme options.
		$wp_customize->add_panel(
			'ghumgham_theme_options_panel',
			array(
				'title'       => esc_html__( 'Ghumgham Theme Options', 'ghumgham' ),
				'description' => esc_html__( 'Ghumgham Theme Options.', 'ghumgham' ),
				'priority'    => 150,
			)
		);

		// load destination color picker option.
		require get_template_directory() . '/inc/customizer/theme-options/destination-color.php';

		// load header option.
		require get_template_directory() . '/inc/customizer/theme-options/header.php';

		// load footer option.
		require get_template_directory() . '/inc/customizer/theme-options/footer.php';

		// Add panel for front page theme options.
		$wp_customize->add_panel(
			'ghumgham_front_page_panel',
			array(
				'title'       => esc_html__( 'Ghumgham Front Page Options', 'ghumgham' ),
				'description' => esc_html__( 'Front Page Theme Options.', 'ghumgham' ),
				'priority'    => 140,
			)
		);

		// load search section option.
		require get_template_directory() . '/inc/customizer/front-page/search.php';

		// load featured destination option.
		require get_template_directory() . '/inc/customizer/front-page/destination.php';

		// load about us option.
		require get_template_directory() . '/inc/customizer/front-page/about.php';

		// load articles option.
		require get_template_directory() . '/inc/customizer/front-page/articles.php';

		// load testimonial option.
		require get_template_directory() . '/inc/customizer/front-page/testimonial.php';

		// load partners option.
		require get_template_directory() . '/inc/customizer/front-page/partners.php';

		// load guide option.
		require get_template_directory() . '/inc/customizer/front-page/guide.php';

}
add_action( 'customize_register', 'ghumgham_customize_register' );

/*
 * Load customizer sanitization functions.
 */
require get_template_directory() . '/inc/customizer/sanitize.php';

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function ghumgham_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function ghumgham_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function ghumgham_customize_preview_js() {
	wp_enqueue_script( 'ghumgham-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'ghumgham_customize_preview_js' );
