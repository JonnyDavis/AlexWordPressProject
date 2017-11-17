<?php
/**
 *  The template for dispalying the page.
 *
 *  @package WordPress
 *  @subpackage illdy
 */


$query_args = array(
			'post_type' => 'about',
			'posts_per_page' => 10,
			'orderby' => 'meta_value_num'
		);

$result = new WP_Query( $query_args );



?>



<?php get_header(); ?>
<div class="container">
	<div class="row">
		<?php if ( is_active_sidebar( 'page-sidebar' ) ) { ?>
		<div class="col-sm-8">
			<?php } else { ?>
			<div class="col-sm-12">
				<?php } ?>
			<section id="blog">
			<?php do_action( 'illdy_above_content_after_header' ); ?>
				<?php
				if ( $result->have_posts() ) :
					while ( $result->have_posts() ) :
						$result->the_post();
						get_template_part( 'template-parts/content-products', get_post_format() );
					endwhile;
					wp_reset_query();
				else :
					get_template_part( 'template-parts/content', 'none' );
				endif;
				?>
				<?php do_action( 'illdy_after_content_above_footer' ); ?>				

				
			</section><!--/#blog-->
		</div><!--/.col-sm-7-->
		<?php if ( is_active_sidebar( 'page-sidebar' ) ) { ?>
			<div class="col-sm-4">
				<div id="sidebar">
					<?php dynamic_sidebar( 'page-sidebar' ); ?>
				</div>
			</div>
		<?php } ?>
	</div><!--/.row-->
</div><!--/.container-->
<?php get_footer(); ?>





