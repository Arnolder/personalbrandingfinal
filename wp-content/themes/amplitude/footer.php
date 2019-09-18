<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Amplitude
 */
?>
</div><!-- .container-->  
<div class="footer-wrapper"> 
    <?php if ( !is_front_page() && !is_home() ) { ?>
      <div class="container">           
          <?php if ( is_active_sidebar( 'site-footer-widget-column-1' ) ) : ?>
                <div class="widget-column-1">  
                    <?php dynamic_sidebar( 'site-footer-widget-column-1' ); ?>
                </div>
           <?php endif; ?>
          
          <?php if ( is_active_sidebar( 'site-footer-widget-column-2' ) ) : ?>
                <div class="widget-column-2">  
                    <?php dynamic_sidebar( 'site-footer-widget-column-2' ); ?>
                </div>
           <?php endif; ?>
           
           <?php if ( is_active_sidebar( 'site-footer-widget-column-3' ) ) : ?>
                <div class="widget-column-3">  
                    <?php dynamic_sidebar( 'site-footer-widget-column-3' ); ?>
                </div>
           <?php endif; ?> 
           
           <?php if ( is_active_sidebar( 'site-footer-widget-column-4' ) ) : ?>
                <div class="widget-column-4">  
                    <?php dynamic_sidebar( 'site-footer-widget-column-4' ); ?>
                </div>
           <?php endif; ?>           
           
           <div class="clear"></div>
      </div><!--end .container-->                    
      <?php } ?>
      
      <div class="footer_copywrapper <?php if( !is_front_page() || is_home()  ){ echo 'innerpage-copywrapper'; } ?>"> 
            <div class="container">
                <div class="wp_powerd_by">
				  <?php bloginfo('name'); ?> | <?php esc_html_e('Proudly Powered by WordPress','amplitude'); ?>  
                </div>                 
                <div class="clear"></div>
             </div><!--end .container-->             
        </div><!--end .footer_copywrapper-->   
        
    </div><!--end #footer-wrapper-->              
</div><!--#end fullsite_wrapper-->

<?php wp_footer(); ?>
</body>
</html>