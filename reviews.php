<?php
/*
Template Name: Review
*/
?>

<?php get_header();?>
<div class="content review">
  <div class="grid">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>

    <h2><?php echo the_title(); ?></h2>

    <?php
    endwhile; else :// end while
    endif; // end if
    ?>
    <?php wp_reset_postdata(); ?>

    <?php
    $custom_query = new WP_Query(array(
    'posts_per_page' => 25,
    'cat' => '4',
    'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1
    ));

    if ( $custom_query->have_posts() ) :
    while ( $custom_query->have_posts() ) : $custom_query->the_post();
    echo '<div class="border content-padding">';
    echo '<div class="col col-1-2">';
    echo '<h3>' . get_the_title() . '</h3>';
    echo '<p>' . the_content() .'</p>';
    echo '</div>';
    echo '<div class="col col-1-2">';
    echo the_post_thumbnail();
    echo '</div></div>';
  endwhile;
  wp_reset_query();
  endif;

  ?>
</div><!--.grid-->
</div><!--.content.review-->


<?php get_footer(); ?>
