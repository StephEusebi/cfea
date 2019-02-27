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


<?php 

if (function_exists('get_field')) {
	$programs = get_field('programs');

	foreach($programs as $program){

		$name = $program['name'];
		$description = $program['description'];
		$button = $program['button'];
?>
		<?php

	}
}

?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			
			<h1 class="programsTitle">CURRENT PROGRAMS</h1>

			<p class="programInfo">At CFEA we have a number of different programs to help you reach all of your 
			fitness goals!</p>



			<ul class="accordion plAccordian" data-accordion>
				<li class="accordion-item accordianStyle" data-accordion-item>
					<!-- Accordion tab title -->
					<a href="#" class="accordion-title plAccordianTitle"><?php echo$name; ?></a>

					<!-- Accordion tab content -->
					<div class="accordion-content" data-tab-content>
					<p><?php echo$description; ?></p>
					<a  class="button">Learn More<?php echo$button; ?></a>
					</div>
				</li>
		

			</ul>



			
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
