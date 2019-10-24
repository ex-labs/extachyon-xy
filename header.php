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
<style>

	/** Quick Header Specific Styles Here **/

</style>

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
	  <div class="cover bg-left bg-center-l" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')";> 
	    <div class="bg-black-80 pt6 pb5 pb6-m">
	      <div class="tl mw8 ph3" style="margin:auto;">
	      	<?php the_title( '<h1 class="f2 f1-l fw7 white-90 mb0 lh-title">', '</h1>'); ?>
	        <!-- h1 class="f2 f1-l fw7 white-90 mb0 lh-title">Xyity vCTO Services</h1 -->
	        <h2 class="page-subline fw1 f3 white-80 mt1 mb4"><?php the_field('title_subline'); ?></h2>
	        <!-- a class="f6 no-underline grow dib v-mid bg-blue white ba b--blue ph3 pv2 mb3" href="">Call to Action</a>
	        <span class="dib v-mid ph3 white-70 mb3">or</span>
	        <a class="f6 no-underline grow dib v-mid white ba b--white ph3 pv2 mb3" href="" data-custom-open="modal-1">Trigger Modal</a -->
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
		//echo '<div class="single-featured-image-header">';
		//echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		//echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<div class="site-content-contain">
		<!-- div id="content" class="site-content" -->
