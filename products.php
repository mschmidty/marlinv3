<?php
/*
Template Name: Products
*/
?>

<?php get_header(); ?>
<div class="content products">
  <div class="grid">
    <h2>Products</h2>
    <div class="products-wrap products flex-parent">

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

                <div id="parent-<?php the_ID(); ?>" class="parent-page flex-child col-3 products-thumb">
                    <a href="<?php the_permalink(); ?>" class= "products-link">
                    <?php
                      $image = get_field('landing_image');
                      $size = 'thumb-img';
                      $landing_image = $image['sizes'][$size];
                    ?>
                    <?php
                    if( !empty($image) ): ?>
                      <img src="<?php echo $landing_image; php?>" alt="<?php echo $landing_image['alt']; php?>" />
                    <?php
                    endif; ?>

                    <h4 class="products-thumb-link"><?php the_title(); ?></h4>
                  <?php if(get_field('landing_blurb')): ?>
                    <p><?php the_field('landing_blurb'); ?></p>
                  <?php endif; ?>
                  </a>
                </div>

              <?php endwhile;

              rewind_posts();  ?>

      <?php endif; ?>

    </div> <!--thumb-area-->


      <?php

      $args = array(
          'post_type'      => 'Services',
          'posts_per_page' => -1,
          'order'          => 'ASC',
          'orderby'        => 'menu_order'
       );


      $parent = new WP_Query( $args );

      if ( $parent->have_posts() ) : ?>
      <header class="entry-header">
        <h1>Services</h1>
      </header>

      <div class="products-wrap products flex-parent">
          <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>

                <div id="parent-<?php the_ID(); ?>" class="parent-page flex-child col-3 products-thumb">
                    <a href="<?php the_permalink(); ?>" class= "products-link">
                    <?php
                      $image = get_field('landing_image');
                      $size = 'thumb-img';
                      $landing_image = $image['sizes'][$size];
                    ?>
                    <?php
                    if( !empty($image) ): ?>
                      <img src="<?php echo $landing_image; php?>" alt="<?php echo $landing_image['alt']; php?>" />
                    <?php
                    endif; ?>

                    <h4 class="products-thumb-link"><?php the_title(); ?></h4>
                  <?php if(get_field('landing_blurb')): ?>
                    <p><?php the_field('landing_blurb'); ?></p>
                  <?php endif; ?>
                  </a>
                </div>

              <?php endwhile;?>

              </div> <!--.products-wrap-->

              <?php wp_reset_postdata(); ?>

      <?php endif; ?>


  </div> <!--grid-->
</div> <!-- content -->

<?php get_footer(); ?>
