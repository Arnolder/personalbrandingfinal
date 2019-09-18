<?php
/**
 * Destination color selector
 *
 * @package ghumgham
 */

if ( class_exists( 'WP_Travel' ) ) {
	// Destination section color selector.
	$wp_customize->add_section(
		'ghumgham_destination_color',
		array(
			'title'       => esc_html__( 'Destination Color Select', 'ghumgham' ),
			'description' => esc_html__( 'Destination Section Color Selector.', 'ghumgham' ),
			'panel'       => 'ghumgham_theme_options_panel',
		)
	);

	// Destination color picker settings.
	$tax_args     = array(
		'hierarchical' => 0,
		'taxonomy'     => 'travel_locations',
	);
	$destinations = get_categories( $tax_args );
	foreach ( $destinations as $destination ) {
		$wp_customize->add_setting(
			'ghumgham_theme_options[destination_color_' . $destination->term_id . ']',
			array(
				'default'           => '#8ead10',
				'sanitize_callback' => 'sanitize_hex_color',
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'ghumgham_theme_options[destination_color_' . $destination->term_id . ']',
				array(
					'label'   => $destination->name,
					'section' => 'ghumgham_destination_color',
				)
			)
		);
	}
}
