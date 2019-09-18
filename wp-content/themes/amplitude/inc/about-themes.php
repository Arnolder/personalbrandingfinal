<?php
/**
 *Amplitude About Theme
 *
 * @package Amplitude
 */

//about theme info
add_action( 'admin_menu', 'amplitude_abouttheme' );
function amplitude_abouttheme() {    	
	add_theme_page( __('About Theme Info', 'amplitude'), __('About Theme Info', 'amplitude'), 'edit_theme_options', 'amplitude_guide', 'amplitude_mostrar_guide');   
} 

//Info of the theme
function amplitude_mostrar_guide() { 	
?>
<div class="wrap-GT">
	<div class="gt-left">
   		   <div class="heading-gt">
			  <h3><?php esc_html_e('About Theme Info', 'amplitude'); ?></h3>
		   </div>
          <p><?php esc_html_e('Amplitude is a clean, creative and truly stunning full width WordPress theme that is specially designed to create full screen websites. This theme is a reliable platform for building a visually stimulating and delightful websites across a wide range of businesses. It equally functional as a portfolio theme that helps to improve your full-screen business website.','amplitude'); ?></p>
<div class="heading-gt"> <?php esc_html_e('Theme Features', 'amplitude'); ?></div>
 

<div class="col-2">
  <h4><?php esc_html_e('Theme Customizer', 'amplitude'); ?></h4>
  <div class="description"><?php esc_html_e('The built-in customizer panel quickly change aspects of the design and display changes live before saving them.', 'amplitude'); ?></div>
</div>

<div class="col-2">
  <h4><?php esc_html_e('Responsive Ready', 'amplitude'); ?></h4>
  <div class="description"><?php esc_html_e('The themes layout will automatically adjust and fit on any screen resolution and looks great on any device. Fully optimized for iPhone and iPad.', 'amplitude'); ?></div>
</div>

<div class="col-2">
<h4><?php esc_html_e('Cross Browser Compatible', 'amplitude'); ?></h4>
<div class="description"><?php esc_html_e('Our themes are tested in all mordern web browsers and compatible with the latest version including Chrome,Firefox, Safari, Opera, IE11 and above.', 'amplitude'); ?></div>
</div>

<div class="col-2">
<h4><?php esc_html_e('E-commerce', 'amplitude'); ?></h4>
<div class="description"><?php esc_html_e('Fully compatible with WooCommerce plugin. Just install the plugin and turn your site into a full featured online shop and start selling products.', 'amplitude'); ?></div>
</div>
<hr />  
</div><!-- .gt-left -->
	
<div class="gt-right">			
        <div>				
            <a href="<?php echo esc_url( amplitude_live_demo ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'amplitude'); ?></a> |            
            <a href="<?php echo esc_url( amplitude_theme_doc ); ?>" target="_blank"><?php esc_html_e('Documentation', 'amplitude'); ?></a>
        </div>		
</div><!-- .gt-right-->
<div class="clear"></div>
</div><!-- .wrap-GT -->
<?php } ?>