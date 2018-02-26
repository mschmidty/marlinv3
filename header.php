<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package marlinv3.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<script>
  // Picture element HTML5 shiv
  document.createElement( "picture" );
</script>

<?php wp_head(); ?>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-44790327-1', 'auto');
    ga('send', 'pageview');
</script>



</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
<div class="content-cover"></div>
	<header id="masthead" class="site-header" role="banner">
		<div class="logo">
			<a href="<?php echo home_url(); ?>"><h1>Durango Shade Company</h1></a>
		</div>
		<nav id="site-navigation" class="main-navigation" role="navigation">
      <a href="#" class="toggle-nav">&#x2261;</a>
      <div class="menu-nav-container">
        <a href="#" class="close-toggle">close</a>
        <h2 class="mobile-nav-header">Navigation</h2>
  			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'Nav', 'container'=> FALSE) ); ?>
      </div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
