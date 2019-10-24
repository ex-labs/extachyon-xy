<?php 

/*
Template Name: About Xy
*/

get_header(); ?>

	<style>
		
	</style>

	<section class="dt w-100 bg-dark-blue">
	  <div class="dtc v-mid white ph3 ph4-l">
	    <div class="w-80 pv6" style="margin:auto;" data-aos="fade-down">
	    	<h1 class="f2 f5-m fw6 tl measure" style="margin-bottom:0px;">Xyity vCTO</h1>
	     		<?php the_content('<p class="f4 lh-copy">', '</p>'); ?>
		</div>
	  </div>
	</section>
	<section id="ourstory">
		<!-- Who We Are Block -->
		<?php

			$whowe = new Timber\Post(1185);
			$context['contents'] = $whowe;
			Timber::render('about-twocolumn.twig', $context);

		
		?>
		<!-- End: Who We Are -->
	</section>
	<section id="benefits">
		<?php

			$benefits = array();
			$benefits['benefits'] = Timber::get_posts(array('post_type' => 'benefits'));
			Timber::render('benefits-grid.twig', $benefits);

		?>
	</section>
	
	<!-- Global CTA -->
	<section id="primaryCTA" class="w-100 bg-yellow black-70" data-aos="fade-up">
		<div class="cta-inner cf mw8 center pv5">
			<div class="fl w-80">
				<h2 class="f2 fw8 black-70" style="margin:unset;">Global Call To Action</h2>
				<p>Get started today and ensure seemless operations tomorrow</p>
			</div>
			<div class="fl w-20 tr">
				<a class="f6 fw6 link dim ba bw2 ph3 pv2 mb2 dib black-70" href="#0">Connect Now</a>
			</div>
		</div>	
	</section>

	<!-- Footer -->
	<?php get_footer(); ?>