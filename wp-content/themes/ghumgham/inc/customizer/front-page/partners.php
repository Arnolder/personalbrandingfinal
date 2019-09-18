<?php
/**
 * Our partners secttion options
 *
 * @package ghumgham
 */

// Add partners section.
$wp_customize->add_section(
	'ghumgham_partner_section',
	array(
		'title'       => esc_html__( 'Partners Section', 'ghumgham' ),
		'description' => esc_html__( 'Partners Section options.', 'ghumgham' ),
		'panel'       => 'ghumgham_front_page_panel',
	)
);

// Add dropdown page for partners section heading and description.
$wp_customize->add_setting(
	'ghumgham_theme_options[front_partner_page]',
	array(
		'sanitize_callback' => 'absint',
	)
);

$wp_customize->add_control(
	'ghumgham_theme_options[front_partner_page]',
	array(
		'label'       => esc_html__( 'Select page for partners section heading and description', 'ghumgham' ),
		'description' => esc_html__(
			'Note: Selected page\'s title and description will be used in front page for partners section heading and description',
			'ghumgham'
		),
		'section'     => 'ghumgham_partner_section',
		'type'        => 'dropdown-pages',
	)
);

for ( $i = 1; $i <= 12; $i++ ) {
	// Add dropdown page for partners section image slider.
	$wp_customize->add_setting(
		'ghumgham_theme_options[front_partner_slider_' . $i . ']',
		array(
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		'ghumgham_theme_options[front_partner_slider_' . $i . ']',
		array(
			/* translators: %d: partner page number. */
			'label'       => sprintf( esc_html__( 'Select page for partner %d ', 'ghumgham' ), $i ),
			'description' => esc_html__(
				'Note: Selected page\'s featured image will be used in front page for partners section slider',
				'ghumgham'
			),
			'section'     => 'ghumgham_partner_section',
			'type'        => 'dropdown-pages',
		)
	);
}
