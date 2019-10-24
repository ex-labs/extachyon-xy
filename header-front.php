<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<nav class="dt w-100 center"> 
		<div class="dt w-100 mw8 center">
	    <div class="dtc w4 v-mid pa3">
            <!-- WP get logo -->
            <?php
            // Get Logo
            the_custom_logo();
            // Get Site Name if no Logo
            if (!has_custom_logo()) {
            	?>
            	<h1><?php bloginfo('name'); ?></h1>
            	<?php
            }
            ?>
	    </div>
	    <!-- need to add dynamic nav -->
	    <div class="dtc v-mid tr pa3">
	    <div id="mobile-nav" class="mobile-nav pv2">
	    	<i class="fa fa-bars" aria-hidden="true"></i>
	    </div>
	    <?php
			wp_nav_menu(
					array(
						'theme_location' => 'top',
						'menu_id'        => 'top-menu',
					)
				);
			?>
	   	</div>
	   </div>
	</nav>
	<header class="sans-serif">
	  <div class="cover bg-left bg-center-l"> <!-- style="background-image: url(http://mrmrs.github.io/photos/u/011.jpg)" --> 
	    <div class="bg-black-80 pt5 pt6-m pt7-l pb5 pb6-m pb6-l">
	       
	      <div class="tc-l ph3">
	      	<div class="vimeo-wrapper">
        		<!-- iframe src="https://player.vimeo.com/video/314196600?background=1&autoplay=1&loop=1&byline=0&title=0&mute=1" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe -->
        		<video autoplay loop muted>
        			<source src="<?php echo get_field('feature_video'); ?>">
        		</video>
      		</div>
	        <h1 class="f2 f1-l fw7 white-90 mb0 lh-title" data-aos="fade-down">K-12 Technology Leaders</h1>
	        <h2 class="fw1 f3 white-80 mb4" data-aos="fade-down">If you can envision it, we can implement it.</h2>
	        <div data-aos="fade-up">
	        	<a class="f6 no-underline grow dib v-mid bg-blue white ba b--blue ph3 pv2 mb3" href="https://calendly.com/mike-sumpter-xyity" target="_blank">Schedule an Appointment</a>
	        	<span class="dib v-mid ph3 white-70 mb3">or</span>
	        	<a class="f6 no-underline grow dib v-mid white ba b--white ph3 pv2 mb3" href="/contact" data-custom-open="modal-1">Contact Us</a>
	        </div>
	      </div>
	    </div>
	  </div> 
	</header>

	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">
