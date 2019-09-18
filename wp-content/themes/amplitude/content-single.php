<?php
/**
 * @package Amplitude
 */
?>
<div class="blogpost_layout">
<article id="post-<?php the_ID(); ?>" <?php post_class('single-post'); ?>> 	


		<?php if( get_theme_mod( 'amplitude_remove_features_image_fromsinglepost' ) == '') { ?> 
	  	 <?php if (has_post_thumbnail() ){ ?>
			<div class="blogpost_imagebx singlepostimg">
            <?php the_post_thumbnail(); ?>
			</div>
		<?php }}  ?>  
        
        <?php if ( 'post' == get_post_type() ) : ?>
            <div class="blogpost_date"><?php echo esc_html( get_the_date() ); ?></div><!-- blogpost_date -->   
        <?php endif; ?>  
           	   

    <div class="entry-content">	    
       <header class="entry-header">           
            <?php the_title( '<h3 class="single-title">', '</h3>' ); ?>
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
        <?php the_content(); ?>
        <?php
        wp_link_pages( array(
            'before' => '<div class="page-links">' . __( 'Pages:', 'amplitude' ),
            'after'  => '</div>',
        ) );
        ?>
        <div class="blogpost_meta">          
            <div class="blog_posttag"><?php the_tags(); ?> </div>
            <div class="clear"></div>
        </div><!-- blogpost_meta -->
    </div><!-- .entry-content -->

</article>
</div><!-- .blogpost_layout-->