<?php
/*
Template Name: Products
*/
?>

<?php get_header(); ?>
<div class="content products">

  <div class="grid">
    <h2>Products</h2>
    <div class="products-wrap">

      <?php

      $args = array(
          'post_type'      => 'page',
          'posts_per_page' => -1,
          'post_parent'    => $post->ID,
          'order'          => 'ASC',
          'orderby'        => 'menu_order'
       );


      $parent = new WP_Query( $args );

      if ( $parent->have_posts() ) : ?>

          <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>

              <div id="parent-<?php the_ID(); ?>" class="parent-page col col-1-3">

                  <h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>

                  <p><?php the_excerpt(); ?></p>

              </div>

          <?php endwhile; ?>

      <?php endif; ?>
    </div> <!--thumb-area-->

  </div> <!--grid-->
</div> <!-- content -->

<?php get_footer(); ?>
