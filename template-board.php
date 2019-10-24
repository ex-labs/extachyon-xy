<?php 

/*
Template Name: The Board
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

	.the_content {
		font-size: 1.5em;
	}

	.site-content-contain a {
		text-decoration: underline;
	}
	
</style>


<?php 

//Board Context

$pagecontent['contents'] = Timber::get_posts();
Timber::render('board-content.twig', $pagecontent);

//echo "<pre>";
//echo print_r($pagecontent);
//echo "</pre>";

$board = array();
$board['board'] = Timber::get_posts(array('post_type' => 'board'));
Timber::render('board-list.twig', $board);

//echo "<pre>";
//echo print_r($board);
//echo "</pre>";

?>


<!-- Footer -->
<?php get_footer(); ?>