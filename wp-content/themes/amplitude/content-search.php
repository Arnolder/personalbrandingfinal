<?php
/**
 * The template used for displaying content search.php
 * @package Amplitude
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <?php if (has_post_thumbnail() ){ ?>
			<div class="blogpost_imagebx">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
			</div>
		<?php } ?>

    <div class="entry-content">	
    <header class="entry-header">
        <?php the_title( '<h3 class="single-title">', '</h3>' ); ?>
    </header><!-- .entry-header -->    
         <div class="blogpost_meta">         
            <div class="blogpost_cat"><i class="far fa-clock"></i><?php echo esc_html( get_the_date() ); ?></div><!-- blogpost_cat -->            
           <div class="blogpost_author">
           <i class="fas fa-user"></i>                  
				  <?php printf(
				      esc_html( get_the_author() )
			        ); ?>
                    </div><!-- .post-author-->                   
                      <span class="blogpost_cat"> <i class="far fa-folder-open"></i> <?php the_category( __( ', ', 'amplitude' ));?></span>                   
                    <div class="blogpost_comment"><i class="far fa-comments"></i> <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a></div>  
    </div><!-- blogpost_meta -->  
    	
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
   
    <footer class="footer-infometa">
      <?php edit_post_link( __( 'Edit', 'amplitude' ), '<span class="edit-link">', '</span>' ); ?>
    </footer><!-- .footer-infometa -->
</article>