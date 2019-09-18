<?php
/**
 * Customizer default options
 *
 * @package Themesmandu
 * @subpackage Ghumgham
 * @since Ghumgham 1.0.0
 * @return array An array of default values
 */

if ( ! function_exists( 'ghumgham_get_default_theme_options' ) ) :

	/**
	 * Get default theme options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Default theme options.
	 */
	function ghumgham_get_default_theme_options() {

		$defaults = array();

		// search Section.
		$defaults['front_search_heading'] = __( 'Search your Destination', 'ghumgham' );

		// about Section.
		$defaults['front_about_heading'] = __( 'GET TO KNOW', 'ghumgham' );

		// article Section.
		$defaults['front_article_heading'] = __( 'World Travellers articles', 'ghumgham' );

		// footer section.
		$defaults['footer_button_text']    = __( 'LEARN MORE', 'ghumgham' );
		$defaults['footer_button_link']    = home_url();
		$defaults['footer_copyright_text'] = __( 'Your copyright appears here', 'ghumgham' );

		// Pass through filter.
		$defaults = apply_filters( 'ghumgham_get_default_theme_options', $defaults );
		return $defaults;
	}

endif;
