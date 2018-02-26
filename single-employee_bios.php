<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package marlinv3.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();?>


    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <header class="entry-header">
        <?php
        if ( is_single() ) :
          the_title( '<h2 class="page-header">', '</h2>' );
        else :
          the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
        endif;

        if ( 'post' === get_post_type() ) : ?>
        <div class="entry-meta">
          <?php marlinv3_0_posted_on(); ?>
        </div><!-- .entry-meta -->
        <?php
        endif; ?>
      </header><!-- .entry-header -->

      <div class="entry-content">
					<div class="flex-parent">

						<div class="flex-child col-2">
							<?php
		          the_content( sprintf(
		            /* translators: %s: Name of current post. */
		            wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'marlinv3-0' ), array( 'span' => array( 'class' => array() ) ) ),
		            the_title( '<span class="screen-reader-text">"', '"</span>', false )
		          ) );
		          ?>
						</div>
						<div class="flex-child col-2">
							<?php
		          the_post_thumbnail();
							?>
						</div>
					</div>


          <div class="extra-content-products">
            <?php
            if(get_field('extra_info')):

              the_field('extra_info');

            endif;

            ?>
          </div>
          <?php
          wp_link_pages( array(
            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'marlinv3-0' ),
            'after'  => '</div>',
          ) );
        ?>
    </article>
    <?php
    wp_reset_postdata();
		endwhile; // End of the loop.

		?>
    <?php
    // The Query
		if($post->ID == 1613){
			$args = array(
	      "cat"=> 19
	    );
		}else{
			$args = array(
	      "cat"=> 18
	    );
		}

    $the_query = new WP_Query( $args );

    // The Loop
    if ( $the_query->have_posts() ) {
    ?>
		<h2 class="header-padding">Available Products</h2>
		<div class="product-image-list">

		<?php
    while ( $the_query->have_posts() ) {
      $the_query->the_post();
      ?>
			<a href=" <?php the_permalink(); ?>" class="product-images">
				<div class="post-info">
					<h3><?php the_title(); ?></h3>
				</div>
				<?php the_post_thumbnail('small-thumb-img'); ?>
			</a>

			<?php
    }
    ?>
		</div>
		<?php
    /* Restore original Post Data */
    wp_reset_postdata();
    } else {
    // no posts found
    }
     ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
