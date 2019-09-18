<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Amplitude
 */

get_header(); ?>
        <div class="content_part_site <?php if( get_theme_mod( 'amplitude_hide_sidebar_allsinglepost' ) ) { ?>fullwidth<?php } ?>">            
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'content', 'single' ); ?>
                    <?php the_post_navigation(); ?>
                    <div class="clear"></div>
                    <?php
                    // If comments are open or we have at least one comment, load up the comment template
                    if ( comments_open() || '0' != get_comments_number() )
                    	comments_template();
                    ?>
                <?php endwhile; // end of the loop. ?>                  
         </div>       
           <?php if( get_theme_mod( 'amplitude_hide_sidebar_allsinglepost' ) == '') { ?> 
          		<?php get_sidebar();?>
        	<?php } ?>       
        <div class="clear"></div>
<?php get_footer(); ?>