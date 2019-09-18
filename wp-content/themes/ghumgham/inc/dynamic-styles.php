<?php
/**
 * Dynamic styles for this theme.
 *
 * This is the template that loads the dynamic styles in header.
 *
 * @package Ghumgham
 */

if ( ! function_exists( 'ghumgham_dynamic_styles' ) ) :

	/**
	 * Dynamic styles for theme.
	 *
	 * @since 1.0.0
	 */
	function ghumgham_dynamic_styles() {
		?>
<style type="text/css">
header.site-header {
	background-image: url(
		<?php
		header_image();
		?>
	);
}

		<?php
		if ( ! empty( ghumgham_theme_options( 'front_about_page' ) ) ) {
			?>
.section_about {
	background-image: url(
			<?php
			echo esc_url( wp_get_attachment_url( get_post_thumbnail_id( ghumgham_theme_options( 'front_about_page' ) ) ) );
			?>
	);
}
		<?php } ?>

		<?php
		if ( ! empty( ghumgham_theme_options( 'front_article_post' ) ) ) {
			?>
.section_blog {
	background-image: url(
			<?php
			echo esc_url( wp_get_attachment_url( get_post_thumbnail_id( ghumgham_theme_options( 'front_article_post' ) ) ) );
			?>
	);
	padding: 100px 0 600px;
}
@media (max-width: 1199px) {
	.section_blog{
		padding: 100px 0 300px;
	}
}
@media (max-width: 991px) {
	.section_blog{
		padding: 100px 0;
	}
}
		<?php } ?>

		<?php
		if ( ! empty( ghumgham_theme_options( 'front_testimonial_page' ) ) ) {
			?>
.section_testimonial {
	background-image: url(
			<?php
			echo esc_url( wp_get_attachment_url( get_post_thumbnail_id( ghumgham_theme_options( 'front_testimonial_page' ) ) ) );
			?>
	);
}
		<?php } ?>

		<?php
		if ( ! empty( ghumgham_theme_options( 'front_guide_page' ) ) ) {
			?>
.section_guide {
	background-image: url(
			<?php
			echo esc_url( wp_get_attachment_url( get_post_thumbnail_id( ghumgham_theme_options( 'front_guide_page' ) ) ) );
			?>
	);
}
		<?php } ?>


		<?php
		if ( ! empty( ghumgham_theme_options( 'footer_page' ) ) ) {
			?>
.section_information {
	background-image: url(
			<?php
			echo esc_url( wp_get_attachment_url( get_post_thumbnail_id( ghumgham_theme_options( 'footer_page' ) ) ) );
			?>
	);
}
		<?php } ?>

		<?php
		if ( ! empty( ghumgham_theme_options( 'footer_widget_background' ) ) ) {
			?>
#footer {
	background-image: url(
			<?php
			echo esc_url( ghumgham_theme_options( 'footer_widget_background' ) );
			?>
	);
	padding: 100px 0 600px;
}
#footer .overlay {
	content: '';
	position: absolute;
	top: 0;
	bottom: 0;
	right: 0;
	left: 0;
	background: linear-gradient(to top, transparent -20%, rgba(255, 255, 255, 1) 60%);
}
@media (max-width: 991px) {
	#footer{
		padding: 100px 0;
	}
	#footer .overlay{
		background: linear-gradient(to top, transparent -40%, rgba(255, 255, 255, 1) 90%);
	}
}
@media (max-width: 576px) {
	#footer{
		padding: 48px 0;
	}
}
		<?php } ?>

</style>
		<?php
	}
endif;
add_action( 'wp_head', 'ghumgham_dynamic_styles' );
