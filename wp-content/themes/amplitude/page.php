<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Amplitude
 */

get_header(); 
$amplitude_show_slideron_static_frontpage 	  		    = get_theme_mod('amplitude_show_slideron_static_frontpage', false);
?>

<?php 
if ( is_front_page() && !is_home() ) {
if($amplitude_show_slideron_static_frontpage != '') {
	for($i=1; $i<=3; $i++) {
	  if( get_theme_mod('amplitude_pageforslider'.$i,false)) {
		$slider_Arr[] = absint( get_theme_mod('amplitude_pageforslider'.$i,true));
	  }
	}
?> 
<div class="slider_section">                
<?php if(!empty($slider_Arr)){ ?>
<div id="slider" class="nivoSlider">
<?php 
$i=1;
$slidequery = new WP_Query( array( 'post_type' => 'page', 'post__in' => $slider_Arr, 'orderby' => 'post__in' ) );
while( $slidequery->have_posts() ) : $slidequery->the_post();
$image = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); 
$thumbnail_id = get_post_thumbnail_id( $post->ID );
$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true); 
?>
<?php if(!empty($image)){ ?>
<img src="<?php echo esc_url( $image ); ?>" title="#slidecaption<?php echo esc_attr( $i ); ?>" alt="<?php echo esc_attr($alt); ?>" />
<?php }else{ ?>
<img src="<?php echo esc_url( get_template_directory_uri() ) ; ?>/images/defaultbodybg.jpg" title="#slidecaption<?php echo esc_attr( $i ); ?>" alt="<?php echo esc_attr($alt); ?>" />
<?php } ?>
<?php $i++; endwhile; ?>
</div>   

<?php 
$j=1;
$slidequery->rewind_posts();
while( $slidequery->have_posts() ) : $slidequery->the_post(); ?>                 
    <div id="slidecaption<?php echo esc_attr( $j ); ?>" class="nivo-html-caption">     
      <div class="custominfo">       
    	<h2><?php the_title(); ?></h2>    	
       </div><!-- .custominfo -->                    
    </div>   
<?php $j++; 
endwhile;
wp_reset_postdata(); ?>  
<div class="clear"></div>  
</div><!--end .slider_section -->     
<?php } ?>
<?php } } ?>


 <div class="content_part_site <?php if( is_front_page() || is_home()  ){ echo 'staticfrontpage'; } ?>">               
                <?php while( have_posts() ) : the_post(); ?>                               
                    <?php get_template_part( 'content', 'page' ); ?>
                    <?php
                        //If comments are open or we have at least one comment, load up the comment template
                        if ( comments_open() || '0' != get_comments_number() )
                            comments_template();
                        ?>                               
                <?php endwhile; ?>                     
        </div><!-- .content_part_site-->   
      <?php if ( !is_front_page() && !is_home() ) { ?>
         <?php get_sidebar();?>
     <?php } ?>  
   
<div class="clear"></div>
<?php get_footer(); ?>