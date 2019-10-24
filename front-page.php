<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header('front'); ?>

	<style>
		.down-box {
    		position: absolute;
    		right: 10%;
    		top: -25px;
    		font-size: 1.2em;
    		padding: 10px 0;
    		background: #00449e;
    		width: 50px;
    		box-shadow: 2px 2px 12px #131f2f;
		}

		.link {
			font-family: 'Montserrat', sans-serif;;
    		font-weight: 800;
		}

		.down-box {
			cursor:pointer;
		}

	</style>

	<script>

		//JS

	</script>

	<section id="feature" class="vh-100 dt w-100 bg-dark-blue">
	  <div class="dtc v-mid white ph3 ph4-l">
	    <h1 class="f2 f2-m f-subheadline-l fw6 tc" style="margin-bottom:0px;" data-aos="fade-up"><?php echo get_field('feature_title') ?></h1>
	    <h2 class="f3 f3-m fw5 tc mw8 center lightest-blue" style="margin-bottom:0px;" data-aos="fade-up"><?php echo get_field('feature_sub_title') ?></h2>
	    <div class="w-100 w-50-l the_content" style="margin:auto;">
	    	<p class="f4 lh-copy measure" data-aos="fade-down">
	     		<?php echo the_content(); ?>
	   		</p>
	   		<p class="f4 lh-copy measure ttu link" data-aos="fade-up">Learn more <a style="text-decoration: underline;" href="<?php echo the_field('feature_link'); ?>">about us</a>
		</div>
	  </div>
	  <div class="down-box white tc" data-aos="fade-down">
	  	<i class="fa fa-long-arrow-down" aria-hidden="true"></i>
	  </div>
	</section>
	<!-- section class="pa3 pa5-ns">
	   
	</section -->
	<section class="cf pa3 pa4-m pa5-l mw9 center mobile-noshow" style="display: none;">
	  <div class="fn fr-l w-100 w-80-l" data-aos="fade-up">
	    <p class="f6" style="font-weight: bold;">
	      Our Services
	    </p>
	    <h1 class="f2 f1-l lh-title mt0 mb4 mb5-ns">
	      Xyity<br class="dn db-ns"> Educational Programs
	    </h1>
	  </div>
	  
	  <!-- Programs Context -->
	  <?php 

	  	$args = array (
			'post_type'	  => 'programs'
		);

	  	$fpprograms = array();
	  	$fpprograms['programs'] = Timber::get_posts($args);
	  	Timber::render('home-programs-grid.twig', $fpprograms);

	  ?>
	  <!-- End: Programs Context -->

	  <img src="http://mrmrs.github.io/photos/u/007.jpg" class="db" alt="iceland" style="display: none;"/>
	</section>

	<!-- Blog Section -->

	<section id="fp-blog" class="fp-blog cf w-100 pv3 f6 ph3-l pa5-l mobile-noshow">
		<div class="fn fr-l w-100 w-80-l" data-aos="fade-up">
	    	<h1 class="f2 f1-l lh-title mt0 mb4 mb5-ns">
	      		Our Voice:<br class="dn db-ns"> Latest Updates
	    	</h1>
	  	</div>
	  	
	  	<!-- Blog Context -->
	  	<?php 

			$context['posts'] = Timber::get_posts('post_type=post');
			Timber::render('home-blog-grid.twig', $context);
			
			//echo "<pre>";
			//echo print_r($context);
			//echo "</pre>";

		?>
		<!-- End: Blog Context -->

	</section>

	<!-- End: Blog Section -->

<?php
get_footer();
