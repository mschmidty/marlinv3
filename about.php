<?php
/*
Template Name: About
*/
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<div class="content about">
<div class="grid">
	<h2>About Us</h2>
	<?php
 
    $custom_query = new WP_Query(array(
        'posts_per_page' => 10,
        'cat' => '3',
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
</div>	
</div>	

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>