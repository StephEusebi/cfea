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
				<div class="row large-8 large-offset-2">

					<!-- title -->
					<h1 class="text-center blue">A leading provider of fitness certification and education in Canada</h1>

					<!-- button with button class because it links to internal pages -->
					<a class="button float-center top-space" href="#">Get Cerfied Today!</a>

				</div>

				<!-- holding images -->
				<div class="grid-x medium-up-2 large-up-4 bottom-space top-space">
					<div class="cell corefx"><img src="/wp-content/themes/cfea/assets/img/corefx-logo.png" alt="corefx logo" /></div>
					<div class="cell trigger"><img src="/wp-content/themes/cfea/assets/img/tp-logo.png" alt="trigger point logo" /></div>
					<div class="cell firstaid"><img src="/wp-content/themes/cfea/assets/img/firstaid-logo.png" alt="canadian red cross logo" /></div>
					<div class="cell vipr"><img src="/wp-content/themes/cfea/assets/img/vipr-logo.png" alt="vipr logo" /></div>
				</div>

			</div> <!-- offset end-->

			
		</main><!-- #main -->

	</div><!-- #primary -->

<?php
// imports the footer
get_footer();
