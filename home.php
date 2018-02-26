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

      <?php echo $large; ?> 1000w,
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
  ?>

      <?php
      if($homeQuote){
      ?>
      <div class="promotion">
        <p> "<?php echo $homeQuote?>" </p>
        <h5> - <?php echo $homeQuoteAuthor?></h5>
      </div>
      <?php
      }
      elseif($couponTime) {
      ?>
      <div class="promotion">
        <h5> <?php echo $couponTime ?></h5>
        <h3><?php echo $couponAmount ?></h3>
        <h5><?php echo $couponCategory ?></h5>
      </div>
      <?php
      }
      else {

      }
      ?>


</div>

<?php
  $image1 = get_field('image_1');
  $image2 = get_field('image_2');
  $image3 = get_field('image_3');
  $text1 = get_field('text_1');
  $text2 = get_field('text_2');
  $text3 = get_field('text_3');
  $label1 = get_field('label_1');
  $label2 = get_field('label_2');
  $label3 = get_field('label_3');
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
<?php 
echo do_shortcode('[smartslider3 slider=3]');
?>
<?php
  $miscTitleHome  =   get_field('misc_title_home');
  $miscAddInfo =      get_field('misc_add_info');
  $miscImage =        get_field('misc_upload_image');
  $contact1name =     get_field('name_1');
  $contact1number =   get_field('number_1');
  $contact1link =     get_field('link_1');
  $contact1area =     get_field('area_1');
  $contact2name =     get_field('name_2');
  $contact2number =   get_field('number_2');
  $contact2link =     get_field('link_2');
  $contact2area =     get_field('area_2');
 ?>
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
  <div class="contact-home flex">
    <?php if(!empty($contact1name )): ?>
    <div class="flex-item">
      <a href="<?php echo $contact1link ?>"><h3><?php echo $contact1name ?></h3></a>
      <p><strong>Areas Served:</strong> <?php echo $contact1area ?></p>
      <p><strong>Phone:  <?php echo $contact1number ?></strong></p>
    </div>
    <div class="flex-item">
      <a href="<?php echo $contact1link ?>"><h3><?php echo $contact1name ?></h3></a>
      <p><strong>Areas Served:  </strong> <?php echo $contact1area ?></p>
      <p><strong>Phone:  <?php echo $contact1number ?></strong></p>
    </div>
    <?php endif;?>
  </div>
</section>

<?php endwhile; else : ?>
  <p><?php echo ( '<p>Sorry, no posts matched your criteria.</p>' ); ?></p>
<?php endif; ?>

<h2 style="text-align: center;">How it Works</h2>
<?php
  $image4 = get_field('image_4');
  $image5 = get_field('image_5');
  $image6 = get_field('image_6');
  $text4 = get_field('text_4');
  $text5 = get_field('text_5');
  $text6 = get_field('text_6');
  $label4 = get_field('label_4');
  $label5 = get_field('label_5');
  $label6 = get_field('label_6');
?>


<div class="content-padding content content home">
  <div class="grid services">
    <div class="col col-1-3">
      <?php
      if( !empty($image4) ): ?>
        <img src=" <?php echo $image4['url'];?>" alt="<?php echo $image4['alt']; ?>">
      <?php
      endif; ?>
      <h3><?php echo $label4 ?></h3>
      <p><?php echo $text4 ?></p>
    </div>
    <div class="col col-1-3">
      <?php
      if( !empty($image5) ): ?>
        <img src=" <?php echo $image5['url'];?>" alt="<?php echo $image5['alt']; ?>">
      <?php
      endif; ?>
      <h3><?php echo $label5 ?></h3>
      <p><?php echo $text5 ?></p>
    </div>
    <div class="col col-1-3">
      <?php
      if( !empty($image6) ): ?>
        <img src=" <?php echo $image6['url'];?>" alt="<?php echo $image6['alt']; ?>">
      <?php
      endif; ?>
      <h3><?php echo $label6 ?></h3>
      <p><?php echo $text6 ?></p>
    </div>
  </div>
</div>

<hr>
	<div class="content about">
	<div class="grid">

		<?php

			$custom_query = new WP_Query(array(
			'posts_per_page' => 10,
			'cat' => '13',
			'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1
			));

			if ( $custom_query->have_posts() ) :
			while ( $custom_query->have_posts() ) : $custom_query->the_post();
			echo '<div class="col col-1-1">';

			if (has_post_thumbnail()) {
			echo '<div class="about-thumb"><div class="circle">';
			echo the_post_thumbnail();
			echo '</div></div>';
			}

			echo '<h3>' . get_the_title() . '</h3>';
			echo '<p>' . the_content() .'</p>';

			echo '</div>';

			endwhile;
			wp_reset_query();
			endif;

		?>
	</div> <!--.grid-->
</div><!--.content.about-->


<?php get_footer(); ?>
