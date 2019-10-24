<?php 

/*
Template Name: Contact
*/

get_header(); ?>

<section class="cf mw9 center">
	<div class="f6 lh-copy fl w-100">
	 	<div class="fl-ns w-100 w-50-l pr3-m pv5">
	  	<h1 class="f4 f1-l lh-title mt0 mb4 mb5-ns tc">
	     	Our Team is dedicated to supporting you.
	  	</h1>
	  	<h2 class="f6 lh-title mt0 mb4 mb5-ns tc">Let Us Know How We Can Help You!</h2>
	 	</div>
	 	<div class="fl-ns w-50-m w-50-l pr3-m pv5 ph5 bg-black-05" style="min-height:700px">
	   	<main class="pa4 black-80">
			<?php echo do_shortcode('[ninja_form id=1]'); ?>
		</main>
	 	</div>
	</div>
</section>


<!-- Footer -->
<?php get_footer(); ?>