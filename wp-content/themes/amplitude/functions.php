<?php                       
/**
 * Amplitude functions and definitions
 *
 * @package Amplitude
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */

if ( ! function_exists( 'amplitude_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.  
 */
function amplitude_setup() {		
	global $content_width;   
    if ( ! isset( $content_width ) ) {
        $content_width = 670; /* pixels */
    }	

	load_theme_textdomain( 'amplitude', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support('woocommerce');
	add_theme_support('html5');	
	add_theme_support( 'post-thumbnails' );		
	add_theme_support( 'title-tag' );	
	add_theme_support( 'custom-logo', array(
		'height'      => 50,
		'width'       => 250,
		'flex-height' => true,
	) );	
	add_theme_support( 'custom-background', array(
		'default-image'          => get_template_directory_uri().'/images/defaultbodybg.jpg',
		'default-color' => '000000'
	) );
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'amplitude' ),							
	) );
	add_editor_style( 'editor-style.css' );
} 
endif; // amplitude_setup
add_action( 'after_setup_theme', 'amplitude_setup' );
function amplitude_widgets_init() { 	
	
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'amplitude' ),
		'description'   => __( 'Appears on blog page sidebar', 'amplitude' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer Widget 1', 'amplitude' ),
		'description'   => __( 'Appears on footer', 'amplitude' ),
		'id'            => 'site-footer-widget-column-1',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer Widget 2', 'amplitude' ),
		'description'   => __( 'Appears on footer', 'amplitude' ),
		'id'            => 'site-footer-widget-column-2',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer Widget 3', 'amplitude' ),
		'description'   => __( 'Appears on footer', 'amplitude' ),
		'id'            => 'site-footer-widget-column-3',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer Widget 4', 'amplitude' ),
		'description'   => __( 'Appears on footer', 'amplitude' ),
		'id'            => 'site-footer-widget-column-4',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );
	
}
add_action( 'widgets_init', 'amplitude_widgets_init' );


function amplitude_font_url(){
		$font_url = '';		
		/* Translators: If there are any character that are not
		* supported by Merriweather, trsnalate this to off, do not
		* translate into your own language.
		*/
		$merriweather = _x('on','Merriweather:on or off','amplitude');		
		
		/* Translators: If there are any character that are not
		* supported by Assistant, trsnalate this to off, do not
		* translate into your own language.
		*/
		$assistant = _x('on','Assistant:on or off','amplitude');		
		
		
		    if('off' !== $merriweather || 'off' !== $assistant ){
			    $font_family = array();
			
			if('off' !== $merriweather){
				$font_family[] = 'Merriweather:300,400,700';
			}
			
			if('off' !== $assistant){
				$font_family[] = 'Assistant:300,400,700';
			}					
						
			$query_args = array(
				'family'	=> urlencode(implode('|',$font_family)),
			);
			
			$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
		}
		
	return $font_url;
	}


function amplitude_scripts() {
	wp_enqueue_style('amplitude-font', amplitude_font_url(), array());
	wp_enqueue_style( 'amplitude-basic-style', get_stylesheet_uri() );	
	wp_enqueue_style( 'nivo-slider', get_template_directory_uri()."/css/nivo-slider.css" );
	wp_enqueue_style( 'fontawesome-all-style', get_template_directory_uri().'/fontsawesome/css/fontawesome-all.css' );
	wp_enqueue_style( 'amplitude-responsive', get_template_directory_uri()."/css/responsive.css" );
	wp_enqueue_script( 'jquery-nivo-slider', get_template_directory_uri() . '/js/jquery.nivo.slider.js', array('jquery') );
	wp_enqueue_script( 'amplitude-editable', get_template_directory_uri() . '/js/editable.js' );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'amplitude_scripts' );

function amplitude_ie_stylesheet(){
	// Load the Internet Explorer specific stylesheet.
	wp_enqueue_style('amplitude-ie', get_template_directory_uri().'/css/ie.css', array( 'amplitude-style' ), '20190312' );
	wp_style_add_data('amplitude-ie','conditional','lt IE 10');
	
	// Load the Internet Explorer 8 specific stylesheet.
	wp_enqueue_style( 'amplitude-ie8', get_template_directory_uri() . '/css/ie8.css', array( 'amplitude-style' ), '20190312' );
	wp_style_add_data( 'amplitude-ie8', 'conditional', 'lt IE 9' );

	// Load the Internet Explorer 7 specific stylesheet.
	wp_enqueue_style( 'amplitude-ie7', get_template_directory_uri() . '/css/ie7.css', array( 'amplitude-style' ), '20190312' );
	wp_style_add_data( 'amplitude-ie7', 'conditional', 'lt IE 8' );	
	}
add_action('wp_enqueue_scripts','amplitude_ie_stylesheet');

define('amplitude_theme_doc','http://www.gracethemesdemo.com/documentation/amplitude/#homepage-lite','amplitude');
define('amplitude_protheme_url','https://gracethemes.com/themes/full-width-wordpress-theme/','amplitude');
define('amplitude_live_demo','http://gracethemesdemo.com/amplitude/','amplitude');

if ( ! function_exists( 'amplitude_the_custom_logo' ) ) :
/**
 * Displays the optional custom logo.
 *
 * Does nothing if the custom logo is not available.
 *
 */
function amplitude_the_custom_logo() {
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}
}
endif;

/**
 * Customize Pro included.
 */
require_once get_template_directory() . '/customize-pro/example-1/class-customize.php';

//Custom Excerpt length.
function amplitude_excerpt_length( $length ) {
	return 50;
}
add_filter( 'excerpt_length', 'amplitude_excerpt_length', 999 );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom template for about theme.
 */
if ( is_admin() ) { 
require get_template_directory() . '/inc/about-themes.php';
}

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';