<?php
/*
Template Name: Products Children
*/
?>
<?php get_header(); ?>
<div class="content review products-single">
	<div class="grid">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<h2><?php the_title(); ?></h2>
		<div class="content-padding">
			<div class="col col-1-2">
				<?php the_content(); ?>
			</div>
			<div class="col col-1-2">
				<?php the_post_thumbnail(); ?>
			</div>
		</div>
		<?php endwhile; ?>
	</div>
</div>
<div class="extra-content-products">
	<?php the_field('extra_info') ?>
</div>
<?php get_footer(); ?>
