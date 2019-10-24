<?php 

/*
Template Name: Programs
*/

get_header(); ?>


<style>

	.featimg-bg {
		height: 400px;
    	width: 400px;
		background-size:cover; 
		background-size: cover;
		background-position: center;
		border-radius: 100%;
	}
	
</style>


<?php 

//Child Content/Pages

$args = array (
	'post_parent' => 920,
	'post_type'	  => 'any',
	'numberposts' => -1,
	'post_status' => 'published'
);

$programs = array();
$programs['programs'] = Timber::get_posts($args);
Timber::render('programs-list.twig', $programs);

//echo "<pre>";
//echo print_r($programs);
//echo "</pre>";

?>


<!-- Footer -->
<?php get_footer(); ?>