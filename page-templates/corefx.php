<?php
/**
 * The template for displaying all pages
 * 
 * Template Name: COREFX Page
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
<div class="grid-x grid-margin-x">
			<div class="large-offset-2">
			
				<div class="cell large-8">
				<img src="/wp-content/themes/cfea/assets/img/corefx.jpg" alt="corefx logo" class="cell large-12" id="corefxLogo" />
				</div>

				<div class="grid-x grid-margin-x">
			
					<p class="cell large-10 progDesc">COREFX asserts itself when it comes to fitness and training equipment. It is a guarantee 
						to the best. For athletes looking to release their greatest capabilities and get motivated 
						to prominence, it is the best answer. The trailblazing COREFX peak-performing lines of products 
						that have undergone real life controlled tests are purposefully created to take peak performance 
						to another level by delivering the most all-embracing area of strength and training tools.
					</p>

					<p class="cell large-10 progDesc">COREFX has created new and technologically-advanced training methods so as to connect the disparity 
						between persistent physical activity and authentic physical improvement. This permits athletes to 
						exploit the full extensive possibilities of the company’s whole range of products. To complement 
						athletes’ unrestrained commitment to exercise, COREFX has created a mutually beneficial connection 
						between equipment and training. This is the genuine mystery behind attaining your Inner Strength.
					</p>



	
				</div>

				<div class="grid-x grid-margin-x coreBox">
				
			

<?php 

if (function_exists('get_field')) {
	$programs = get_field('programs');

	foreach($programs as $program){
		$name = $program['name'];
		$description = $program['description'];
		$button = $program['button'];
		$cost = $program['cost'];
		$program_image = $program['program_image'];
		
?>

<div class="cell large-3 ">
		
						<img src="<?php echo$program_image; ?>" alt="<?php echo $image['alt']; ?>" class="rcImg"/>
						
							
						<ul class="accordion plAccordian" data-accordion data-allow-all-closed="true">
							<li class="accordion-item accordianStyle" data-accordion-item>
								<!-- Accordion tab title -->
								<a href="#" class="accordion-title pRCAccordianTitle"><?php echo$name; ?></a>

								<!-- Accordion tab content -->
								<div class="accordion-content" data-tab-content>
								<p><?php echo$description; ?></p>
								<p><?php echo$cost; ?></p>
								<button  class=" button" href="<?php echo$button; ?>">REGISTER NOW</button>

								</div>
							</li>
						</ul>
						</div>		
					

		<?php

	}
}

?>


		</div>
	</div>

		<div class="large-offset-3 "> 
			<div class="cell large-8 rcVideo">
			<iframe width="798" height="449" src="https://www.youtube.com/embed/WoD34_HXxCc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>

		

</div>

<?php
// imports the footer
get_footer();



