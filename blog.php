<?php
/*
Template Name: Blog
*/
?>

<?php get_header(); ?>
<div class="content blog">

		<h2 class="page-header">Blog</h2>
		<div class="blog-home">
<?php
	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

	$wp_query = new WP_Query(array(
			'post_type' => 'blog',
			'posts_per_page' => -1,
			'paged'=> $paged

	));

	if($wp_query->have_posts()) :
		while($wp_query->have_posts()) : $wp_query->the_post();
?>
	<a href="<?php the_permalink(); ?>"  class="blog-module">
		<div class="blog-home-left">
			<?php the_post_thumbnail('thumbnail'); ?>
		</div>
		<div class="blog-home-right">
			<h3><?php the_title(); ?></h3>

			<?php echo the_excerpt() ?>

			<h5>Read More</h5>


		</div>
	</a>


<?php

	endwhile;


	endif;

 ?>
 	</div>

</div> <!-- content -->



<?php get_footer(); ?>
