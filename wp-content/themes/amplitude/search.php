<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Amplitude
 */

get_header(); ?>
        <div class="content_part_site">
            <div class="site_posts_column">
				<?php if ( have_posts() ) : ?>
                     <header>
                        <h1 class="entry-title"><?php /* translators: %s: search term */ 
						printf( esc_attr__( 'Search Results for: %s', 'amplitude' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
                    </header>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php get_template_part( 'content', 'search' ); ?>
                    <?php endwhile; ?>
                    <?php the_posts_pagination(); ?>
                <?php else : ?>
                    <?php get_template_part( 'no-results' ); ?>
                <?php endif; ?>                  
            </div><!-- site_posts_column -->
        </div>      
       <?php get_sidebar();?>       
        <div class="clear"></div>
<?php get_footer(); ?>