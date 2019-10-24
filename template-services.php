<?php 

/*
Template Name: Xy Services
*/

get_header(); ?>
	<style>

		.service-item h2 {
			
		}

		.two {
			margin-bottom:20px;
		}

		strong {
    		font-size: 1.3em;
		}
		
	</style>

	<section id="featured-services" class="dt w-100 bg-dark-blue">
		<div class="dtc v-mid white">
			<div class="w-80 pv5 center" style="display:none;"> 
				<?php the_content(); ?>
			</div>
			<!-- Featured Services -->
			<?php 

				//Featured Services
				$featservices = Timber::get_posts(array('post_type' => 'services'));
				$featservcontext['featservices'] = $featservices;
				Timber::render('services-featured.twig', $featservcontext);

				//echo "<pre style='color:#000!important;'>";
				//echo print_r($featservcontext);
				//echo "</pre>";

			?>
			<!-- End: Featured Services -->
		</div>
	</section>
	<!-- XY Solution -->
	<section id="xy-solution" style="display:none;">
		<?php 
		
		//Xy Solutions Content Block
		$xysolution = new Timber\Post(1156);
		$context['contents'] = $xysolution;
		//Timber::render('service-twocolumn.twig', $context);

		?>
	</section>
	<!-- End: Xy Solution -->

	<!-- Services Grid -->
	<section id="all-services">
		<?php
		
		//General Services Grid
		$services = Timber::get_posts(array('post_type' => 'services'));
		$servcontext['services'] = $services;
		Timber::render('services-grid.twig', $servcontext);

		//echo "<pre>";
		//echo print_r($services);
		//echo "<pre>";
		
		?>
	</section>
	<!-- End: Services Grid -->

	<!-- Global CTA -->
	<section id="primaryCTA" class="w-100 bg-yellow black-70" data-aos="fade-up">
		<div class="cta-inner cf mw8 center pv5">
			<div class="fl w-80">
				<h2 class="f2 fw8 black-70" style="margin:unset;">Let's start the conversation</h2>
				<p>Get started today and ensure seemless operations tomorrow</p>
			</div>
			<div class="fl w-20 tr">
				<a class="f6 fw6 link dim ba bw2 ph3 pv2 mb2 dib black-70" href="/contact/">Connect Now</a>
			</div>
		</div>	
	</section>

	<!-- Footer -->
	<?php get_footer(); ?>