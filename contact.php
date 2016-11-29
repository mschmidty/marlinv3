<?php
/*
Template Name: contact
*/
?>

<?php get_header(); ?>
<div class="content contact">
	<div class="grid">
	<h2>Contact</h2>
	<?php
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$contact = new WP_Query(array(
	'post_type' => 'contact',
	'posts_per_page' => 25,
	'paged' => $paged
	));



	if ( $contact->have_posts() ) :
	while ( $contact->have_posts() ) : $contact->the_post();?>
	<?php
	$image = get_field('image');
	$size = 'thumb-img';
	$name = get_field('name');
	$area = get_field('employee_area');
	$phone = get_field('phone');
	$email = get_field('email');

	?>
		<div class="contact-module">
			<div class="contact-home-left">
				<img src="<?php echo $thumb; ?>" alt="<?php $image['alt']; ?>">
			</div>
			<div class="contact-home-right">
				<h3><?php echo $name; ?></h3>
				<p><strong>Areas Served:</strong> <?php echo $area; ?></p>
				<p><strong>Phone:</strong> <?php echo $phone; ?></p>
				<p><strong>Email:</strong> <?php echo $email; ?></p>
				<p> <?php echo the_content() ?></p>
			</div>

		</div> <!--module-->
	<?php
	endwhile;
	endif;
	?>
	</div> <!--grid-->
</div> <!--content-->
<?php get_footer(); ?>
