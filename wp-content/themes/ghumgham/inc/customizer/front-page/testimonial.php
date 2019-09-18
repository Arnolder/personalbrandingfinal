<?php
/**
 * Testimonial secttion options
 *
 * @package ghumgham
 */

// Add testimonial section.
$wp_customize->add_section(
	'ghumgham_testimonial_section',
	array(
		'title'       => esc_html__( 'Testimonial Section', 'ghumgham' ),
		'description' => esc_html__( 'Testimonial Section options.', 'ghumgham' ),
		'panel'       => 'ghumgham_front_page_panel',
	)
);

// Add dropdown page for testimonial section heading and background image.
$wp_customize->add_setting(
	'ghumgham_theme_options[front_testimonial_page]',
	array(
		'sanitize_callback' => 'absint',
	)
);

$wp_customize->add_control(
	'ghumgham_theme_options[front_testimonial_page]',
	array(
		'label'       => esc_html__( 'Select page for testimonial section heading and background', 'ghumgham' ),
		'description' => esc_html__(
			'Note: Selected page\'s title and featured image will be used in front page for testimonial section heading and background image',
			'ghumgham'
		),
		'section'     => 'ghumgham_testimonial_section',
		'type'        => 'dropdown-pages',
	)
);

for ( $i = 1; $i <= 6; $i++ ) {
	// Add dropdown page for testimonial section slider.
	$wp_customize->add_setting(
		'ghumgham_theme_options[front_testimonial_slider_' . $i . ']',
		array(
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		'ghumgham_theme_options[front_testimonial_slider_' . $i . ']',
		array(
			/* translators: %d: testimonial page number. */
			'label'       => sprintf( esc_html__( 'Select page for testimonial %d ', 'ghumgham' ), $i ),
			'description' => esc_html__(
				'Note: Selected page\'s title, description and featured image will be used in front page for testinomial section slider',
				'ghumgham'
			),
			'section'     => 'ghumgham_testimonial_section',
			'type'        => 'dropdown-pages',
		)
	);
}
