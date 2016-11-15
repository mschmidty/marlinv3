<?php
/*
Template Name: Home Page
*/

get_header();
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="banner-image">

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

  <?php
    $homeQuote = get_field('home_quote');
    $homeQuoteAuthor = get_field('home_quote_author');

    $couponTime = get_field('coupon_time');
    $couponAmount = get_field('coupon_amount');
    $couponCategory = get_field('coupon_category');

    $miscTitleHome  = get_field('misc_title_home');
    $miscAddInfo = get_field('misc_add_info');
    $miscImage = get_field('misc_upload_image');
  ?>
  <div class="promotion">
      <?php
      if($homeQuote){
      ?>
      <p> "<?php echo $homeQuote?>" </p>
      <h5> - <?php echo $homeQuoteAuthor?></h5>
      <?php
      }
      else {
      ?>
      <h5> <?php echo $couponTime ?></h5>
      <h3><?php echo $couponAmount ?></h3>
      <h5><?php echo $couponCategory ?></h5>
      <?php
      } ?>

  </div>
</div>


<?php
  $image1 = get_field('image_1');
  $image2 = get_field('image_2');
  $image3 = get_field('image_1');
  $text1 = get_field('text_1');
  $text2 = get_field('text_2');
  $text3 = get_field('text_1');
  $label1 = get_field('label_1');
  $label2 = get_field('label_2');
  $label3 = get_field('label_1');

?>


<div class="content-padding content content home">
  <div class="grid services">
    <div class="col col-1-3">
      <?php
      if( !empty($image1) ): ?>
        <img src=" <?php echo $image1['url'];?>" alt="<?php echo $image1['alt']; ?>">
      <?php
      endif; ?>
      <h3><?php echo $label1 ?></h3>
      <p><?php echo $text1 ?></p>
    </div>
    <div class="col col-1-3">
      <?php
      if( !empty($image2) ): ?>
        <img src=" <?php echo $image2['url'];?>" alt="<?php echo $image2['alt']; ?>">
      <?php
      endif; ?>
      <h3><?php echo $label2 ?></h3>
      <p><?php echo $text2 ?></p>
    </div>
    <div class="col col-1-3">
      <?php
      if( !empty($image3) ): ?>
        <img src=" <?php echo $image3['url'];?>" alt="<?php echo $image3['alt']; ?>">
      <?php
      endif; ?>
      <h3><?php echo $label3 ?></h3>
      <p><?php echo $text3 ?></p>
    </div>
  </div>
</div>

<hr>

<section class="home-misc-section">
  <div class="home-misc-head">
      <h3><?php echo $miscTitleHome ?></h3>
      <p><?php echo $miscAddInfo ?></p>
  </div>
  <?php
      if(!empty($miscImage)):
      echo '<img src="' . $miscImage['url'] . '"alt="' .$miscImage['alt'] . '"/>';
      endif;
  ?>
</section>

<?php endwhile; else : ?>
  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<hr>

<!-- rewind-->
<?php rewind_posts(); ?>

<?php $cause_query = new WP_Query( array(
        'post_type' => 'cause',
        'posts_per_page' => 1
    )); ?>
<?php
if ($cause_query->have_posts() ) :
while($cause_query->have_posts()) : $cause_query->the_post(); ?>
    <?php
    $causeTitle = get_the_title();
    $causeLink  = get_field('cause_link');
    $causeLogo = get_field('cause_logo');
    $causeDescription = get_field('cause_description');
    ?>
    <div class="cause-wrap">
        <h3 class="cause-title"> <?php echo $causeTitle ?> </h3>
        <a href="<?php echo $causeLink ?> ">
            <div class="cause-image">
                <?php
                if(!empty($causeLogo)):
                echo '<img src="' . $causeLogo['url'] . '"alt="' . $cuaseLogo['alt'] . '"/>';
                endif; ?>
            </div>
        </a>
        <p><?php echo $causeDescription ?></p>
    </div>
<?php endwhile; endif; ?>


<?php get_footer(); ?>
