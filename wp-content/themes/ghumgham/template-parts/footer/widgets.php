<?php
/**
 * Footer widgets
 *
 * @package Ghumgham
 */

$active = array();
for ( $i = 1; $i <= 4; $i++ ) {
	if ( is_active_sidebar( 'footer-' . $i ) ) {
		$active[] = $i;
	}
}

if ( 0 === count( $active ) ) {
	return;
}
?>
<footer id="footer">
<div class="overlay"></div>
	<div class="container">
		<div id="footer-widgets" class="row">
			<?php foreach ( $active as $ghumgham_id ) : ?>
			<div class="col-lg-3 col-sm-6">
				<?php dynamic_sidebar( 'footer-' . $ghumgham_id ); ?>
			</div>
			<?php endforeach; ?>
		</div><!-- #footer-widgets -->
	</div>
	<button class="up-btn" id="up-btn" title="<?php echo esc_html( __( 'Go to top', 'ghumgham' ) ); ?>" style="display: block;"><i class="fas fa-chevron-up"></i></button>
</footer>
