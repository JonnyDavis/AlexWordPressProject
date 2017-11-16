<?php
/**
 *    The template for displaying the bottom header section in front page.
 *
 * @package    WordPress
 * @subpackage illdy
 */
?>
<?php
$logo_id                   = get_theme_mod( 'custom_logo' );
$logo_image                = wp_get_attachment_image_src( $logo_id, 'full' );
$text_logo                 = get_theme_mod( 'illdy_text_logo', __( 'Illdy', 'illdy' ) );

if ( current_user_can( 'edit_theme_options' ) ) {
	$jumbotron_title       = get_theme_mod( 'illdy_jumbotron_title', __( 'Clean <span class="span-dot">.</span> Slick<span class="span-dot">.</span> Pixel Perfect', 'illdy' ) );
	$entry                 = get_theme_mod( 'illdy_jumbotron_general_entry', __( 'lldy is a great one-page theme, perfect for developers and designers but also for someone who just wants a new website for his business. Try it now!', 'illdy' ) );
	$first_button_title    = get_theme_mod( 'illdy_jumbotron_general_first_button_title', __( 'Learn more', 'illdy' ) );
	$first_button_url      = get_theme_mod( 'illdy_jumbotron_general_first_button_url', esc_url( '#' ) );
	$second_button_title   = get_theme_mod( 'illdy_jumbotron_general_second_button_title', __( 'Download', 'illdy' ) );
	$second_button_url     = get_theme_mod( 'illdy_jumbotron_general_second_button_url', esc_url( '#' ) );
} else {
	$jumbotron_title       = get_theme_mod( 'illdy_jumbotron_title', __( 'Clean <span class="span-dot">.</span> Slick<span class="span-dot">.</span> Pixel Perfect', 'illdy' ) );
	$entry                 = get_theme_mod( 'illdy_jumbotron_general_entry' );
	$first_button_title    = get_theme_mod( 'illdy_jumbotron_general_first_button_title' );
	$first_button_url      = get_theme_mod( 'illdy_jumbotron_general_first_button_url' );
	$second_button_title   = get_theme_mod( 'illdy_jumbotron_general_second_button_title' );
	$second_button_url     = get_theme_mod( 'illdy_jumbotron_general_second_button_url' );
}

if ( $jumbotron_title || $entry || $first_button_title || $second_button_title ) {

	?>
	<div class="bottom-header front-page">
		<div class="container">
			<div class="row">
				<?php if ( $jumbotron_title ) : ?>
					<div class="col-sm-12">
						<?php if ( ! empty( $logo_image ) ) { ?>
							<?php echo '<a href="' . esc_url( home_url() ) . '"><img src="' . esc_url( $logo_image[0] ) . '" /></a>'; ?>
						<?php } else { ?>
							<?php if ( get_option( 'show_on_front' ) == 'page' ) { ?>
								<a href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( $text_logo ); ?>" class="header-logo"><?php echo esc_html( $text_logo ); ?></a>
						<?php } else { // front-page option ?>
							<a href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" class="header-logo"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a>
							<?php } ?>
						<?php } ?>
					</div><!--/.col-sm-12-->
				<?php endif; ?>
				<div class="col-sm-8 col-sm-offset-2">
					<?php if ( $entry ) : ?>
						<div class="section-description"><?php echo do_shortcode( wp_kses_post( $entry ) ); ?></div>
					<?php endif; ?>

				</div><!--/.col-sm-8.col-sm-offset-2-->
			</div><!--/.row-->
		</div><!--/.container-->
	</div><!--/.bottom-header.front-page-->

<?php } ?>
