<?php
/**
 * Header theme options
 *
 * @package ghumgham
 */

// Add header section.
$wp_customize->add_section(
	'ghumgham_header_section',
	array(
		'title'       => esc_html__( 'Header Section', 'ghumgham' ),
		'description' => esc_html__( 'Header Section options.', 'ghumgham' ),
		'panel'       => 'ghumgham_theme_options_panel',
	)
);

// Add dropdown page for header content title, description.
$wp_customize->add_setting(
	'ghumgham_theme_options[header_page]',
	array(
		'sanitize_callback' => 'absint',
	)
);

$wp_customize->add_control(
	'ghumgham_theme_options[header_page]',
	array(
		'label'       => esc_html__( 'Select page for header content title and description', 'ghumgham' ),
		'description' => esc_html__(
			'Note: Selected page\'s title and description will be used in header content title and description',
			'ghumgham'
		),
		'section'     => 'ghumgham_header_section',
		'type'        => 'dropdown-pages',
	)
);


