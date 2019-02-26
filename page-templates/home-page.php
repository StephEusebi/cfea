<?php
/**
 * The template for displaying all pages
 * 
 * Template Name: Home Page
 * Template Post Type: page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cfea
 */

// imports the header
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<!-- main -->
			<div class="grid-x">

				<!-- TOP container holding h1 and buttpn -->
				<div class="row large-6 large-offset-3">

					<!-- title -->
					<h1 class="text-center blue top-space">A leading provider of fitness certification and education in Canada</h1>

					<!-- button with button class because it links to internal pages -->
					<a class="button float-center top-space" href="#"><h4>Get Cerfied Today!</h4></a>

				</div>
			

				<!-- group of images -->
				<div class="grid-x medium-up-2 large-up-4 bottom-space top-space home-images-4">
					<div class="cell corefx"><img src="/wp-content/themes/cfea/assets/img/corefx-logo.png" alt="corefx logo" /></div>
					<div class="cell trigger"><img src="/wp-content/themes/cfea/assets/img/tp-logo.png" alt="trigger point logo" /></div>
					<div class="cell firstaid"><img src="/wp-content/themes/cfea/assets/img/firstaid-logo.png" alt="canadian red cross logo" /></div>
					<div class="cell vipr"><img src="/wp-content/themes/cfea/assets/img/vipr-logo.png" alt="vipr logo" /></div>
				</div>



				<!-- container for curtis and mini bio -->	
				<div class="grid-container grid-container-padded">	

					<div class="grid-x grid-padding-x align-center">

						<div class="cell large-4 small-12 text-right" >
							<!-- line  -->
							<div style="width: 100%; height: 0.3rem; background-color: #0a415e; margin-bottom: 1rem;"></div>
							<p><strong>Curtis Medina</strong> | Certified Fitness ... | CEO, CFEA</p>
							
							<p>Mini Bio - Awards, Achievements<br>
							Over 15 years experience, nomiated.... how many fitness professionsal he taught
							<br>Why work with him?</p>

							<p><a href="#" target="_blank"><em>Get Certified with Curtis</em></a></p>

						</div>

						<div class="cell large-8 small-12">							
							<!-- image of curtis -->
							<img src="/wp-content/themes/cfea/assets/img/headshot.png" alt="head shot of curtis" style="width: 880px;" />

						</div>
					</div>

				</div><!-- grid-container end-->


				<!-- container for team and mini bio -->	
				<div class="grid-container grid-container-padded top-space">	

					<div class="grid-x grid-padding-x align-center">

						<div class="cell large-8 small-12">							
							<!-- image of team -->
							<img src="/wp-content/themes/cfea/assets/img/group.jpg" alt="head shot of team" style="width: 880px;" />

						</div>

						<div class="cell large-4 small-12" >
							<!-- line  -->
							<div style="width: 100%; height: 0.3rem; background-color: #0a415e; margin-bottom: 1rem;"></div>
							<p><strong>Team info</strong></p>
							
							<p>team and program info</p>
							<p>more team and program info. have about 4-5 lines of text and a all to action</p>

							<p>more team and program info. have about 4-5 lines of text and a all to action more team and program info. have about 4-5 lines of text and a all to action</p>
							<p><a href="#" target="_blank"><em>Get Certified!</em></a></p>

						</div>

					</div>

				</div><!-- grid-container end-->

				<!-- BOTTOM container holding h1 and button -->
				<div class="row large-6 large-offset-3">

					<!-- title -->
					<h1 class="text-center blue top-space">Become certified in some of the most popular programs to date!</h1>

					<!-- button with button class because it links to internal pages -->
					<a class="button float-center top-space" href="#"><h4>Get Certified Today!</h4></a>

				</div>


			
		</main><!-- #main -->

	</div><!-- #primary -->

<?php
// imports the footer
get_footer();
