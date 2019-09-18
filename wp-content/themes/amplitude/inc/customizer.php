<?php    
/**
 *Amplitude Theme Customizer
 *
 * @package Amplitude
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function amplitude_customize_register( $wp_customize ) {	
	
	function amplitude_sanitize_dropdown_pages( $page_id, $setting ) {
	  // Ensure $input is an absolute integer.
	  $page_id = absint( $page_id );
	
	  // If $page_id is an ID of a published page, return it; otherwise, return the default.
	  return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
	}

	function amplitude_sanitize_checkbox( $checked ) {
		// Boolean check.
		return ( ( isset( $checked ) && true == $checked ) ? true : false );
	}  
		
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	
	 //Panel for section & control
	$wp_customize->add_panel( 'amplitude_panel_area', array(
		'priority' => null,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'Theme Options Panel', 'amplitude' ),		
	) );
	
	$wp_customize->add_setting('amplitude_color_scheme',array(
		'default' => '#d20606',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize,'amplitude_color_scheme',array(
			'label' => __('Site Color Scheme','amplitude'),			
			'description' => __('More color options in PRO Version','amplitude'),
			'section' => 'colors',
			'settings' => 'amplitude_color_scheme'
		))
	);	
	
	
	 //Header social icons
	$wp_customize->add_section('amplitude_headersocialsection',array(
		'title' => __('Top social icons','amplitude'),
		'description' => __( 'Add social icons link here to display icons.', 'amplitude' ),			
		'priority' => null,
		'panel' => 	'amplitude_panel_area', 
	));
	
	$wp_customize->add_setting('amplitude_fblink',array(
		'default' => null,
		'sanitize_callback' => 'esc_url_raw'	
	));
	
	$wp_customize->add_control('amplitude_fblink',array(
		'label' => __('Add facebook link here','amplitude'),
		'section' => 'amplitude_headersocialsection',
		'setting' => 'amplitude_fblink'
	));	
	
	$wp_customize->add_setting('amplitude_twittlink',array(
		'default' => null,
		'sanitize_callback' => 'esc_url_raw'
	));
	
	$wp_customize->add_control('amplitude_twittlink',array(
		'label' => __('Add twitter link here','amplitude'),
		'section' => 'amplitude_headersocialsection',
		'setting' => 'amplitude_twittlink'
	));
	
	$wp_customize->add_setting('amplitude_gpluslink',array(
		'default' => null,
		'sanitize_callback' => 'esc_url_raw'
	));
	
	$wp_customize->add_control('amplitude_gpluslink',array(
		'label' => __('Add google plus link here','amplitude'),
		'section' => 'amplitude_headersocialsection',
		'setting' => 'amplitude_gpluslink'
	));
	
	$wp_customize->add_setting('amplitude_linkedlink',array(
		'default' => null,
		'sanitize_callback' => 'esc_url_raw'
	));
	
	$wp_customize->add_control('amplitude_linkedlink',array(
		'label' => __('Add linkedin link here','amplitude'),
		'section' => 'amplitude_headersocialsection',
		'setting' => 'amplitude_linkedlink'
	));
	
	$wp_customize->add_setting('amplitude_show_headersocialsection',array(
		'default' => false,
		'sanitize_callback' => 'amplitude_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'amplitude_show_headersocialsection', array(
	   'settings' => 'amplitude_show_headersocialsection',
	   'section'   => 'amplitude_headersocialsection',
	   'label'     => __('Check To show This Section','amplitude'),
	   'type'      => 'checkbox'
	 ));//Show Header Social icons box 			
	
	// Slider Section		
	$wp_customize->add_section( 'amplitude_pageslider_sections', array(
		'title' => __('Slider Section', 'amplitude'),
		'priority' => null,
		'description' => __('Default image size for slider is 1366 x 800 pixel.','amplitude'), 
		'panel' => 	'amplitude_panel_area',           			
    ));
	
	$wp_customize->add_setting('amplitude_pageforslider1',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'amplitude_sanitize_dropdown_pages'
	));
	
	$wp_customize->add_control('amplitude_pageforslider1',array(
		'type' => 'dropdown-pages',
		'label' => __('Select page for slide one:','amplitude'),
		'section' => 'amplitude_pageslider_sections'
	));	
	
	$wp_customize->add_setting('amplitude_pageforslider2',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'amplitude_sanitize_dropdown_pages'
	));
	
	$wp_customize->add_control('amplitude_pageforslider2',array(
		'type' => 'dropdown-pages',
		'label' => __('Select page for slide two:','amplitude'),
		'section' => 'amplitude_pageslider_sections'
	));	
	
	$wp_customize->add_setting('amplitude_pageforslider3',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'amplitude_sanitize_dropdown_pages'
	));
	
	$wp_customize->add_control('amplitude_pageforslider3',array(
		'type' => 'dropdown-pages',
		'label' => __('Select page for slide three:','amplitude'),
		'section' => 'amplitude_pageslider_sections'
	));	// Slider Section		
	
	$wp_customize->add_setting('amplitude_show_slideron_static_frontpage',array(
		'default' => false,
		'sanitize_callback' => 'amplitude_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'amplitude_show_slideron_static_frontpage', array(
	    'settings' => 'amplitude_show_slideron_static_frontpage',
	    'section'   => 'amplitude_pageslider_sections',
	     'label'     => __('Check To Show This Section','amplitude'),
	   'type'      => 'checkbox'
	 ));//Show Slider Section	
	 
	 
	 
	// Sidebar Options
	$wp_customize->add_section('amplitude_sidebar_settings', array(
		'title' => __('Sidebar Settings','amplitude'),		
		'priority' => null,
		'panel' => 	'amplitude_panel_area',          
	));	
	
	$wp_customize->add_setting('amplitude_hide_sidebar_homepage_latestpost',array(
		'default' => false,
		'sanitize_callback' => 'amplitude_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'amplitude_hide_sidebar_homepage_latestpost', array(
	   'settings' => 'amplitude_hide_sidebar_homepage_latestpost',
	   'section'   => 'amplitude_sidebar_settings',
	   'label'     => __('Check to hide sidebar from homepage latest post','amplitude'),
	   'type'      => 'checkbox'
	 ));//sidebar options
	 
	 
	 $wp_customize->add_setting('amplitude_hide_sidebar_allsinglepost',array(
		'default' => false,
		'sanitize_callback' => 'amplitude_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'amplitude_hide_sidebar_allsinglepost', array(
	   'settings' => 'amplitude_hide_sidebar_allsinglepost',
	   'section'   => 'amplitude_sidebar_settings',
	   'label'     => __('Check to remove sidebar from single post','amplitude'),
	   'type'      => 'checkbox'
	 ));//single post sidebar options
	 
	 $wp_customize->add_setting('amplitude_hide_features_image_fromblogpost',array(
		'default' => false,
		'sanitize_callback' => 'amplitude_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'amplitude_hide_features_image_fromblogpost', array(
	   'settings' => 'amplitude_hide_features_image_fromblogpost',
	   'section'   => 'amplitude_sidebar_settings',
	   'label'     => __('Check to hide features image from blogpost','amplitude'),
	   'type'      => 'checkbox'
	 ));//remove features image for blog post	
	 
	 $wp_customize->add_setting('amplitude_remove_features_image_fromsinglepost',array(
		'default' => false,
		'sanitize_callback' => 'amplitude_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'amplitude_remove_features_image_fromsinglepost', array(
	   'settings' => 'amplitude_remove_features_image_fromsinglepost',
	   'section'   => 'amplitude_sidebar_settings',
	   'label'     => __('Check to hide features image from single post','amplitude'),
	   'type'      => 'checkbox'
	 ));//remove features image for blog post	 
		 
}
add_action( 'customize_register', 'amplitude_customize_register' );

function amplitude_custom_css(){ 
?>
	<style type="text/css"> 					
        a, .blogpost_layout h2 a:hover,
        #sidebar ul li a:hover,								
        .blogpost_layout h3 a:hover,				
        .blogpost_meta a:hover,
		.logo h1 a:hover,		
        .blogpostmorebtn:hover,
		.top_social_icons a:hover,			
		.sitenav ul li a:hover, 
	    .sitenav ul li.current-menu-item a,
	    .sitenav ul li.current-menu-parent a.parent,
	    .sitenav ul li.current-menu-item ul.sub-menu li a:hover,	           
		.footer-wrapper h2 span,
		.footer-wrapper ul li a:hover, 
		.footer-wrapper ul li.current_page_item a        				
            { color:<?php echo esc_html( get_theme_mod('amplitude_color_scheme','#d20606')); ?>;}					 
            
        .pagination ul li .current, .pagination ul li a:hover,        
        .nivo-controlNav a.active,		
		#commentform input#submit,						
        #sidebar .search-form input.search-submit,				
        .wpcf7 input[type='submit']:hover,				
        nav.pagination .page-numbers.current,
		nav.pagination .page-numbers:hover
		
            { background-color:<?php echo esc_html( get_theme_mod('amplitude_color_scheme','#d20606')); ?>;}
			
		.nivo-caption .slide_more:hover,	
		.tagcloud a:hover,		
		 blockquote,
		.blogpost_date,
		.blogpostmorebtn
            { border-color:<?php echo esc_html( get_theme_mod('amplitude_color_scheme','#d20606')); ?>;}	
			
         	
    </style> 
<?php                                             
}
         
add_action('wp_head','amplitude_custom_css');	 

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function amplitude_customize_preview_js() {
	wp_enqueue_script( 'amplitude_customizer', get_template_directory_uri() . '/js/customize-preview.js', array( 'customize-preview' ), '01052019', true );
}
add_action( 'customize_preview_init', 'amplitude_customize_preview_js' );