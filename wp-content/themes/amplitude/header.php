<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till
 *
 * @package Amplitude
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php endif; ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php
$amplitude_show_headersocialsection 	  		= get_theme_mod('amplitude_show_headersocialsection', false);
?>
<div id="fullsite_wrapper">
   <div class="header_menupart">
      <div class="container">
         <div class="logo">
			     <?php amplitude_the_custom_logo(); ?>
                  <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
                 <?php $description = get_bloginfo( 'description', 'display' );
                if ( $description || is_customize_preview() ) : ?>
                    <p><?php echo esc_html($description); ?></p>
                <?php endif; ?>
      </div><!-- logo -->
      <div class="hdrrightpart <?php if( $amplitude_show_headersocialsection == '') { ?>hdrrightpart_width<?php } ?>">   
        <div class="toggle">
    	    <a class="toggleMenu" href="#">&nbsp;</a>
        </div><!-- toggle -->
       <div class="sitenav">                   
   	     <?php wp_nav_menu( array('theme_location' => 'primary') ); ?>
      </div><!--.sitenav -->    
     </div><!-- .hdrrightpart-->
    
    <?php if( $amplitude_show_headersocialsection != ''){ ?>          
            <div class="top_social_icons">                                                
                   <?php $amplitude_fblink = get_theme_mod('amplitude_fblink');
                    if( !empty($amplitude_fblink) ){ ?>
                    <a title="facebook" class="fab fa-facebook-f" target="_blank" href="<?php echo esc_url($amplitude_fblink); ?>"></a>
                   <?php } ?>
                
                   <?php $amplitude_twittlink = get_theme_mod('amplitude_twittlink');
                    if( !empty($amplitude_twittlink) ){ ?>
                    <a title="twitter" class="fab fa-twitter" target="_blank" href="<?php echo esc_url($amplitude_twittlink); ?>"></a>
                   <?php } ?>
            
                  <?php $amplitude_gpluslink = get_theme_mod('amplitude_gpluslink');
                    if( !empty($amplitude_gpluslink) ){ ?>
                    <a title="google-plus" class="fab fa-google-plus" target="_blank" href="<?php echo esc_url($amplitude_gpluslink); ?>"></a>
                  <?php }?>
            
                  <?php $amplitude_linkedlink = get_theme_mod('amplitude_linkedlink');
                    if( !empty($amplitude_linkedlink) ){ ?>
                    <a title="linkedin" class="fab fa-linkedin" target="_blank" href="<?php echo esc_url($amplitude_linkedlink); ?>"></a>
                  <?php } ?>                  
             </div><!--end .top_social_icons-->        
      <?php } ?> 
      <div class="clear"></div>
 </div><!-- .container-->       
</div><!-- .header_menupart--> 
<div class="container pageinlayout"> 