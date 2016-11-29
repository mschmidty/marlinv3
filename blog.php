<?php
/*
Template Name: Blog
*/
?>

<?php get_header(); ?>
<div class="content blog">
	<div class="grid">
		<h2>Blog</h2>
		<div class="blog-home">
<?php
	$blog_query = new WP_Query(array(
			'post_type' => 'blog',
			'posts_per_page' => 10
	));

	if($blog_query->have_posts()) :
		while($blog_query->have_posts()) : $blog_query->the_post();
?>
	<div class="blog-module">
		<div class="blog-home-left">
			<?php the_post_thumbnail('thumbnail'); ?>
		</div>
		<div class="blog-home-right">
			<h3><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>

			<p> <?php echo the_excerpt() ?></p>
			<a href="<?php echo get_permalink(); ?>"> Read More...</a>

		</div>
	</div>


<?php
	endwhile;
	endif;
 ?>
 	</div>
 </div> <!--grid-->
</div> <!-- content -->



<?php get_footer(); ?>
