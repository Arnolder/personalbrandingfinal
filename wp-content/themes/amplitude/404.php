<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Amplitude
 */

get_header(); ?>

        <div class="content_part_site">
            <header class="page-header">
                <h1 class="entry-title"><?php esc_html_e( '404 Not Found', 'amplitude' ); ?></h1>                
            </header><!-- .page-header -->
            <div class="page-content">
                <p><?php esc_html_e( 'Looks like you have taken a wrong turn.....<br />Don\'t worry... it happens to the best of us.', 'amplitude' ); ?></p>  
            </div><!-- .page-content -->
        </div>
        <?php get_sidebar();?>       
        <div class="clear"></div>
<?php get_footer(); ?>