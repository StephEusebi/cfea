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
			
			<h1 class="programsTitle">CURRENT PROGRAMS</h1>

			<p class="programInfo">At CFEA we have a number of different programs to help you reach all of your 
			fitness goals!</p>





			<!-- <ul class="accordion plAccordian" data-accordion>
				<li class="accordion-item accordianStyle" data-accordion-item>
				
					<a href="#" class="accordion-title plAccordianTitle">COREFX</a>

					<div class="accordion-content" data-tab-content>
					<p>COREFX has created new and technologically-advanced training methods so as to connect the disparity 
			between persistent physical activity and authentic physical improvement.</p>
					<a href="corefx" class="button">Learn More</a>
					</div>
				</li>

				<li class="accordion-item accordianStyle" data-accordion-item>
				
					<a href="#" class="accordion-title plAccordianTitle">TRIGGERPOINT</a>

				
					<div class="accordion-content" data-tab-content>
					<p>TriggerPoint Performance is a patented brand that improves life by focusing on 
			energizing people with the radical organization in Myofascial Compression techniques 
			as well as branded goods that conserve, control increase the physical movement of human 
			life-forms.</p>
					<a href="triggerpoint" class="button">Learn More</a>
					</div>
				</li>

				<li class="accordion-item accordianStyle" data-accordion-item>
				
					<a href="#" class="accordion-title plAccordianTitle">CANADIAN RED CROSS</a>

				
					<div class="accordion-content" data-tab-content>
					<p>CPR/AED</p>
					<a href="redcross" class="button">Learn More</a>
					</div>
				</li>

				<li class="accordion-item accordianStyle" data-accordion-item>
				
					<a href="#" class="accordion-title plAccordianTitle">VIPR</a>

				
					<div class="accordion-content" data-tab-content>
					<p>The disparity between movement and power exercises is linked by ViPR. 
			It merges complete body movement with weight, thereby improving the vivacity, implementation along with 
			overhauling the aspirations of customers and sportspeople.</p>
					<a href="vipr" class="button">Learn More</a>
					</div>
				</li>
			</ul> -->
			
		</main><!-- #main -->
	</div><!-- #primary -->


<?php 

if (function_exists('get_field')) {
	$programs = get_field('programs');

	foreach($programs as $program){

		$name = $program['name'];
		$description = $program['description'];
		$button = $program['button'];
?>

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


		<?php

	}
}

?>

	
<?php
get_footer();
