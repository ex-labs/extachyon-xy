<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

		<!-- /div><-- #content -->

		<!-- Footer -->
		<footer class="pa4 pa5-l bg-near-black white-80 bt b--black-10">
	  	<div class="mb4-l cf">
	  		<div class="fl w-100 pv0 f6 fw6 ttu tracked mb4">
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
	    	<article class="fl w-100 w-50-m w-50-l dib-ns mr4-m mb4 pr2 pr0-ns">
	      		<h4 class="f5 f4-l fw6">Our Mission</h4>
	      		<span class="f4 db white-80" style="padding: 0 5px 0 0;">To be the partner of choice for educational institutions by helping create, build and maintain the most innovative learning environments in education.</span>
	    	</article>
	    	<article class="fl w-100 w-25-m w-25-l dib-ns mr4-m mb4 pl2 pl0-ns">
	      		<h4 class="f5 f4-l fw6">Address</h4>
	      			<span class="f5 f4-l db">
	        			12311 Lupine Lane
	      			</span>
	      			<span class="f5 f4-l di">
	        			Plymouth, Indiana 46563
	      			</span>
	    	</article>
	    	<article class="fl w-100 w-25-m w-25-l dib-ns mr4-m mb4 pl2 pl0-ns">
	      		<h4 class="f5 f4-l fw6">Call</h4>
	      		<a href="tel:5742743236" class="f4 db fw6 pv3 link dim" title="Call us">
	        		(574) 274-3236
	      		</a>
	    	</article>
	  	</div>
	  	<section class="cf mb5" style="display:none;">
	    	<div class="mb4 mb0-ns w-100 w-50-l fr">
	      	<a class="white-80 f3 f2-ns fw6 tl link dim dib pv1 mt2 mb4 mb0-l" href="tel:5742743236" >
	        	(574) 274-3236
	      	</a>
	    	</div>
	    	<div class="mb4 mb0-ns fl w-100 w-50-l" >
	      	<p class="f4 fw6 mb2 f6 mt0">
	        	Sign up for our newsletter.
	      	</p>
	      	<input placeholder="Email Address" class="mw-100 w-100 w5-ns f5 input-reset ba b--black-20 pv3 ph4 border-box">
	      	<input type="submit" class="input-reset w-100 w-auto-ns bg-black-80 white f5 pv2 pv3-ns ph4 ba b--black-80 bg-hover-mid-gray">
	    	</div>
	  	</section>
	  	<div class="dt dt--fixed w-100" >
	    	<div class="dn dtc-ns v-mid">
	      	<p class="f7 white-80 dib pr3 mb3">
	        	Copyright &copy; <?php echo date("Y"); ?> Xyity Inc. 
	      	</p>
	    	</div>
	    	<!-- Social Links -->
	    	<div class="db dtc-ns black-70 tc tr-ns v-mid">
	      	<a href="https://www.facebook.com/" class="link dim dib mr3 white-80" style="color: #4267B2;">
	        	<svg class="db w2 h2" data-icon="facebook" viewBox="0 0 32 32" fill="currentColor">
	          	<title >facebook icon</title>
	          	<path d="M8 12 L13 12 L13 8 C13 2 17 1 24 2 L24 7 C20 7 19 7 19 10 L19 12 L24 12 L23 18 L19 18 L19 30 L13 30 L13 18 L8 18 z"
	          	></path>
	        	</svg>
	      	</a>
	      	<a href="https://twitter.com/" class="link dim dib mr3 white-80" style="color: #1dcaff;">
	        	<svg class="db w2 h2" data-icon="twitter" viewBox="0 0 32 32"
	          	fill="currentColor" >
	          	<title >twitter icon</title>
          	<path d="M2 4 C6 8 10 12 15 11 A6 6 0 0 1 22 4 A6 6 0 0 1 26 6 A8 8 0 0 0 31 4 A8 8 0 0 1 28 8 A8 8 0 0 0 32 7 A8 8 0 0 1 28 11 A18 18 0 0 1 10 30 A18 18 0 0 1 0 27 A12 12 0 0 0 8 24 A8 8 0 0 1 3 20 A8 8 0 0 0 6 19.5 A8 8 0 0 1 0 12 A8 8 0 0 0 3 13 A8 8 0 0 	1 2 4"
	          	></path>
	        	</svg>
	      	</a>
	      	<a href="https://www.linkedin.com/company/" class="link dim dib white-80" style="color:#2867B2;">
	        	<svg class="db w2 h2" x="0px" y="0px" viewBox="0 0 48 48" >
	          	<linearGradient gradientUnits="userSpaceOnUse" x1="23.9995"
	            	y1="0" x2="23.9995" y2="48.0005" >
	            	<stop offset="0" ></stop>
	            	<stop offset="1" ></stop>
	          	</linearGradient>
	          	<path fill="currentColor" d="M48,42c0,3.313-2.687,6-6,6H6c-3.313,0-6-2.687-6-6V6 c0-3.313,2.687-6,6-6h36c3.313,0,6,2.687,6,6V42z"
	          	></path>
	          	<g >
	            	<g >
              	<path fill="#FFFFFF" d="M15.731,11.633c-1.608,0-2.658,1.083-2.625,2.527c-0.033,1.378,1.018,2.494,2.593,2.494 c1.641,0,2.691-1.116,2.691-2.494C18.357,12.716,17.339,11.633,15.731,11.633z M13.237,35.557h4.988V18.508h-4.988V35.557z M31.712,18.748c-1.595,0-3.222-0.329-4.956,2.36h-0.099l-0.087-2.599h-4.417c0.065,1.411,0.074,3.518,0.074,5.52v11.529h4.988 v-9.854c0-0.46,0.065-0.919,0.196-1.248c0.328-0.919,1.149-1.871,2.527-1.871c1.805,0,2.527,1.411,2.527,3.479v9.494h4.988V25.439 	C37.455,20.713,34.993,18.748,31.712,18.748z"
	              	></path>
	            	</g>
	          	</g>
	        	</svg>
	      	</a>
	    	</div>
	  	</div>
	  	<div class="db dn-ns">
	    	<p class="f7 white-80 mt4 tc">
	      	Copyright &copy; Your Company 2019
	    	</p>
	  	</div>
		</footer>
		<!-- End: Footer -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
