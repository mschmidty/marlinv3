<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package marlinv3.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			if(get_post_type( get_the_ID() ) == 'services' || 'products-new'||'employee_bios'){
				?>
				<h2 class="page-header">Services</h2>
				<?php
				get_template_part('template-parts/content','products_services');
			}else{

				get_template_part( 'template-parts/content', get_post_format() );
			}

			the_post_navigation();

		endwhile; // End of the loop.
		wp_reset_postdata();
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
