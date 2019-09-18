<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ghumgham
 */

?>

</div><!-- #content -->


<?php
if ( ! empty( ghumgham_theme_options( 'footer_page' ) ) ) {
	$ghumgham_footer_title       = apply_filters( 'the_title', get_post( ghumgham_theme_options( 'footer_page' ) )->post_title );
	$ghumgham_footer_description = apply_filters( 'the_content', get_post( ghumgham_theme_options( 'footer_page' ) )->post_content );
	?>
	<section class="section_information">
		<div class="overlay"></div>
		<div class="container">
			<h2><?php echo wp_kses_post( $ghumgham_footer_title ); ?></h2>
			<?php echo wp_kses_post( $ghumgham_footer_description ); ?>
			<a href="<?php echo esc_url( ghumgham_theme_options( 'footer_button_link' ) ); ?>"><?php echo esc_html( ghumgham_theme_options( 'footer_button_text' ) ); ?></a>
		</div>
	</section>
<?php } ?>



<?php get_template_part( 'template-parts/footer/widgets' ); ?>


<?php get_template_part( 'template-parts/footer/site', 'info' ); ?>



<?php wp_footer(); ?>
</div><!-- #page -->
</body>

</html>
