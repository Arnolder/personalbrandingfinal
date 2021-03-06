<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Amplitude
 */

get_header(); ?>
        <div class="content_part_site <?php if( get_theme_mod( 'amplitude_hide_sidebar_allsinglepost' ) ) { ?>fullwidth<?php } ?>">
			<?php if ( have_posts() ) : ?>
                <header class="page-header">
                     <?php
						the_archive_title( '<h1 class="entry-title">', '</h1>' );
						the_archive_description( '<div class="taxonomy-description">', '</div>' );
					?> 
                </header><!-- .page-header -->
				<div class="site_posts_column">
					<?php /* Start the Loop */ ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php get_template_part( 'content' ); ?>
                    <?php endwhile; ?>                   
                </div>
                <?php the_posts_pagination(); ?>
            <?php else : ?>
                <?php get_template_part( 'no-results' ); ?>
            <?php endif; ?>
        </div>
        <?php if( get_theme_mod( 'amplitude_hide_sidebar_allsinglepost' ) == '') { ?> 
          		<?php get_sidebar();?>
        	<?php } ?> 
        <div class="clear"></div>
<?php get_footer(); ?>