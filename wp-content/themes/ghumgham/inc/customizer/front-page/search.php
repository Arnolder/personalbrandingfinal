<?php
/**
 * Search secttion options
 *
 * @package ghumgham
 */

$defaults = ghumgham_get_default_theme_options();

// Add search section.
$wp_customize->add_section(
	'ghumgham_search_section',
	array(
		'title'       => esc_html__( 'Search Section', 'ghumgham' ),
		'description' => esc_html__( 'Search Section options.', 'ghumgham' ),
		'panel'       => 'ghumgham_front_page_panel',
	)
);

// setting search section heading.
$wp_customize->add_setting(
	'ghumgham_theme_options[front_search_heading]',
	array(
		'default'           => $defaults['front_search_heading'],
		'sanitize_callback' => 'sanitize_text_field',
	)
);
$wp_customize->add_control(
	'ghumgham_theme_options[front_search_heading]',
	array(
		'label'       => esc_html__( 'Search Section Heading', 'ghumgham' ),
		'description' => esc_html__(
			'Note: This is the heading that appears above the search on frontpage',
			'ghumgham'
		),
		'section'     => 'ghumgham_search_section',
		'type'        => 'text',
	)
);
