<?php
/*
Template Name: Home Page
*/

get_header();
?>
<div class="banner-image">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <?php

       $image = get_field('banner_image');
       $sizeLarge = 'large-img';
       $sizeMedium = 'medium-img';
       $sizeSmall = 'small-img';
       $large = $image['sizes'][$sizeLarge];
       $medium = $image['sizes'][$sizeMedium];
       $small = $image['sizes'][$sizeSmall];

      ?>
      <?php if( !empty($image) ): ?>

       <img sizes="100vw"
       srcset="

           <?php echo $large; ?> 100w,
           <?php echo $medium; ?> 700w,
           <?php echo $small; ?> 500w"

       alt="<?php echo $image['alt']; ?>">
     <?php endif ?>

   <?php endwhile; else : ?>
     <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
   <?php endif; ?>


</div>
<?php get_footer(); ?>
