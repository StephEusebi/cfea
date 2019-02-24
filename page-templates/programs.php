<?php
/**
 * The template for displaying all pages
 * 
 * Template Name: Programs Page
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

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<header class="header1">
			<img src="/wp-content/themes/cfea/assets/img/logo.png" alt="cfeaLogo" class="cell large-12 logo1" />
		</header>
			
			<h1>PROGRAMS - landing page</h1>


			<ul class="accordion" data-accordion>
				<li class="accordion-item " data-accordion-item>
					<!-- Accordion tab title -->
					<a href="#" class="accordion-title">COREFX</a>

					<!-- Accordion tab content -->
					<div class="accordion-content" data-tab-content>
					<p>Random info about corefx</p>
					<a href="corefx" class="button">Learn More</a>
					</div>
				</li>
  <!-- ... -->
				<li class="accordion-item " data-accordion-item>
					<!-- Accordion tab title -->
					<a href="#" class="accordion-title">TRIGGERPOINT</a>

					<!-- Accordion tab content -->
					<div class="accordion-content" data-tab-content>
					<p>Random info about triggerpoint</p>
					<a href="/triggerpoint" class="button">Learn More</a>
					</div>
				</li>

				<li class="accordion-item " data-accordion-item>
					<!-- Accordion tab title -->
					<a href="#" class="accordion-title">RED CROSS</a>

					<!-- Accordion tab content -->
					<div class="accordion-content" data-tab-content>
					<p>Random info about red cross</p>
					<a href="redcross.php" class="button">Learn More</a>
					</div>
				</li>

				<li class="accordion-item " data-accordion-item>
					<!-- Accordion tab title -->
					<a href="#" class="accordion-title">VIPR</a>

					<!-- Accordion tab content -->
					<div class="accordion-content" data-tab-content>
					<p>Random info about vipr</p>
					<a href="vipr.php" class="button">Learn More</a>
					</div>
				</li>
			</ul>




			<footer class="footer1"></footer>
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
