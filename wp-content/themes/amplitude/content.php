<?php
/**
 * @package Amplitude
 */
?>
 <div class="blogpost_layout">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>  
        <?php if( get_theme_mod( 'amplitude_hide_features_image_fromblogpost' ) == '') { ?> 
        <?php if (has_post_thumbnail() ){ ?>
			<div class="blogpost_imagebx">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
			</div>
		<?php } }  ?>
        
        <?php if ( 'post' == get_post_type() ) : ?>
            <div class="blogpost_date"><?php echo esc_html( get_the_date() ); ?></div><!-- blogpost_date -->   
        <?php endif; ?>  
          
          
        <?php if ( is_search() || !is_single() ) : // Only display Excerpts for Search ?>
        <div class="entry-summary">            
            <header class="entry-header">           
            <h3><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
            <?php if ( 'post' == get_post_type() ) : ?>
                <div class="blogpost_meta">
                  <div class="blogpost_author"><i class="fas fa-user"></i>                  
				  <?php printf(
				      esc_html( get_the_author() )
			        ); ?>
                    </div><!-- .post-author--> 
                    <span class="blogpost_cat"> <i class="far fa-folder-open"></i> <?php the_category( __( ', ', 'amplitude' ));?></span>               
                   <div class="blogpost_comment"><i class="far fa-comments"></i> <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a></div>                  
                    
                </div><!-- blogpost_meta -->
            <?php endif; ?>
        </header><!-- .entry-header -->   
        
           	<?php the_excerpt(); ?>   
            <a class="blogpostmorebtn" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read More', 'amplitude' ); ?></a> 
                     
        </div><!-- .entry-summary -->
        <?php else : ?>
        <div class="entry-content">
            <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'amplitude' ) ); ?>
            <?php
                wp_link_pages( array(
                    'before' => '<div class="page-links">' . __( 'Pages:', 'amplitude' ),
                    'after'  => '</div>',
                ) );
            ?>
        </div><!-- .entry-content -->
        <?php endif; ?>
        <div class="clear"></div>
    </article><!-- #post-## -->
</div>