<?php
/**
 * About secttion options
 *
 * @package ghumgham
 */

$defaults = ghumgham_get_default_theme_options();

// Add about section.
$wp_customize->add_section(
	'ghumgham_about_section',
	array(
		'title'       => esc_html__( 'About Section', 'ghumgham' ),
		'description' => esc_html__( 'About Section options.', 'ghumgham' ),
		'panel'       => 'ghumgham_front_page_panel',
	)
);

// setting about section heading.
$wp_customize->add_setting(
	'ghumgham_theme_options[front_about_heading]',
	array(
		'default'           => $defaults['front_about_heading'],
		'sanitize_callback' => 'sanitize_text_field',
	)
);
$wp_customize->add_control(
	'ghumgham_theme_options[front_about_heading]',
	array(
		'label'       => esc_html__( 'About Section Heading', 'ghumgham' ),
		'description' => esc_html__(
			'Note: This is extra heading that appears above the selected page heading',
			'ghumgham'
		),
		'section'     => 'ghumgham_about_section',
		'type'        => 'text',
	)
);

// Add dropdown page for about section heading and description.
$wp_customize->add_setting(
	'ghumgham_theme_options[front_about_page]',
	array(
		'sanitize_callback' => 'absint',
	)
);

$wp_customize->add_control(
	'ghumgham_theme_options[front_about_page]',
	array(
		'label'       => esc_html__( 'Select page for about section heading, description and background image', 'ghumgham' ),
		'description' => esc_html__(
			'Note: Selected page\'s title, description and features image will be used in front page for about section heading, description and background image',
			'ghumgham'
		),
		'section'     => 'ghumgham_about_section',
		'type'        => 'dropdown-pages',
	)
);

for ( $i = 1; $i <= 3; $i++ ) {
	// setting front page about images.
	$wp_customize->add_setting(
		'ghumgham_theme_options[front_about_image_' . $i . ']',
		array(
			'sanitize_callback' => 'ghumgham_sanitize_image',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'ghumgham_theme_options[front_about_image_' . $i . ']',
			array(
				/* translators: %d: about image number. */
				'label'         => sprintf( __( 'Select About Image %d', 'ghumgham' ), $i ),
				'description'   => esc_html__( 'This image will appear in about section image album', 'ghumgham' ),
				'section'       => 'ghumgham_about_section',
				'button_labels' => array( // Optional.
					'select'       => __( 'Select Image', 'ghumgham' ),
					'change'       => __( 'Change Image', 'ghumgham' ),
					'remove'       => __( 'Remove', 'ghumgham' ),
					'default'      => __( 'Default', 'ghumgham' ),
					'placeholder'  => __( 'No image selected', 'ghumgham' ),
					'frame_title'  => __( 'Select Image', 'ghumgham' ),
					'frame_button' => __( 'Choose Image', 'ghumgham' ),
				),
			)
		)
	);
}
