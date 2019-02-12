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

				<!-- top container holding h1 and buttpn -->
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

				<div class="grid-x grid-padding-x">
					<div class="cell large-3 large-offset-3 text-center">
						<h2>Curis Medina</h2>
						<h3>CEO, CFEA</h3>
						<p>Mini Bio - Awards, Achievements</p>
						<p>Over 15 years experience, nomiated.... how many fitness professionsal he taught</p>
					</div>

					<div class="cell large-6"><img src="/wp-content/themes/cfea/assets/img/headshot.png" alt="head shot of curtis" /></div>

				</div>

			</div> <!-- grid-x end-->

			
		</main><!-- #main -->

	</div><!-- #primary -->

<?php
// imports the footer
get_footer();
