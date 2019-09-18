<?php
/**
 * Footer theme options
 *
 * @package ghumgham
 */

$defaults = ghumgham_get_default_theme_options();
// Add footer section.
$wp_customize->add_section(
	'ghumgham_footer_section',
	array(
		'title'       => esc_html__( 'Footer Section', 'ghumgham' ),
		'description' => esc_html__( 'Footer Section options.', 'ghumgham' ),
		'panel'       => 'ghumgham_theme_options_panel',
	)
);

// Add dropdown page for footer section heading, description and background image.
$wp_customize->add_setting(
	'ghumgham_theme_options[footer_page]',
	array(
		'sanitize_callback' => 'absint',
	)
);

$wp_customize->add_control(
	'ghumgham_theme_options[footer_page]',
	array(
		'label'       => esc_html__( 'Select page for footer section heading, description and background image', 'ghumgham' ),
		'description' => esc_html__(
			'Note: Selected page\'s title, description and featured image will be used in footer section heading, description and background image',
			'ghumgham'
		),
		'section'     => 'ghumgham_footer_section',
		'type'        => 'dropdown-pages',
	)
);

// setting footer buttion text.
$wp_customize->add_setting(
	'ghumgham_theme_options[footer_button_text]',
	array(
		'default'           => $defaults['footer_button_text'],
		'sanitize_callback' => 'wp_kses_post',
	)
);
$wp_customize->add_control(
	'ghumgham_theme_options[footer_button_text]',
	array(
		'label'   => esc_html__( 'Footer Section Button Text', 'ghumgham' ),
		'section' => 'ghumgham_footer_section',
		'type'    => 'text',
	)
);

// setting footer buttion link.
$wp_customize->add_setting(
	'ghumgham_theme_options[footer_button_link]',
	array(
		'default'           => $defaults['footer_button_link'],
		'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control(
	'ghumgham_theme_options[footer_button_link]',
	array(
		'label'   => esc_html__( 'Footer Section Button Link', 'ghumgham' ),
		'section' => 'ghumgham_footer_section',
		'type'    => 'url',
	)
);

// setting footer widget area background image.
$wp_customize->add_setting(
	'ghumgham_theme_options[footer_widget_background]',
	array(
		'sanitize_callback' => 'ghumgham_sanitize_image',
	)
);

$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'ghumgham_theme_options[footer_widget_background]',
		array(
			'label'         => esc_html__( 'Select footer widget area background image', 'ghumgham' ),
			'description'   => esc_html__( 'This image will appear in footer widgets background', 'ghumgham' ),
			'section'       => 'ghumgham_footer_section',
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

// setting footer copyright text.
$wp_customize->add_setting(
	'ghumgham_theme_options[footer_copyright_text]',
	array(
		'default'           => $defaults['footer_copyright_text'],
		'sanitize_callback' => 'wp_kses_post',
	)
);
$wp_customize->add_control(
	'ghumgham_theme_options[footer_copyright_text]',
	array(
		'label'       => esc_html__( 'Footer Copyright Text', 'ghumgham' ),
		'description' => esc_html__( 'This text will appear before &copy; on footer copyright section', 'ghumgham' ),
		'section'     => 'ghumgham_footer_section',
		'type'        => 'textarea',
	)
);
