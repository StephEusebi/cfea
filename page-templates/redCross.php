<?php
/**
 * The template for displaying all pages
 * 
 * Template Name: RedCross Page
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
					<img src="/wp-content/themes/cfea/assets/img/crcLogo.jpg" alt="red cross logo" class="cell large-12" id="redCrossLogo" />
				</div>

				<div class="grid-x grid-margin-x">
					<p class="cell large-10 progDesc">Duration: Level A: 4 hours, Level C: 5 hours, Level HCP: 6 hours</p>
					<p class="cell large-10 progDesc">Lecture series on mouth-to-mouth resuscitation (CPR) offers the needed expertise to identify and act 
						in response to cardiac crisis and suffocation for babies, children and adults subject to the type of CPR 
						chosen. The training also comprises the utilization of automated external defibrillator (AED) as well as 
						guidance that is appropriate for place of work or broad appeal. In addition, there are cutting-edge CPR 
						recommendations.
					</p>
	
				</div>

				<div class="grid-x grid-margin-x">
					<div class="cell large-5 ">

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



						<img src="<?php echo$program_image; ?>" alt="<?php echo $image['alt']; ?>" />
						
							
						<ul class="accordion plAccordian" data-accordion>
							<li class="accordion-item accordianStyle" data-accordion-item>
								<!-- Accordion tab title -->
								<a href="#" class="accordion-title pRCAccordianTitle"><?php echo$name; ?></a>

								<!-- Accordion tab content -->
								<div class="accordion-content" data-tab-content>
								<p><?php echo$description; ?></p>
								<p><?php echo$cost; ?></p>
								<button  class=" button">REGISTER NOW<?php echo$button; ?></button>

								</div>
							</li>
						</ul>
						
					
<!-- 
					<div class="cell large-5 programBox">
					<table>
						<tr>
							<td>CPR C with AED</td>
							<td>$55.00 plus tax</td>
						</tr>
					</table>
					<button class="programButton button">SIGN UP NOW</button>
					</div>

					<div class="cell large-5 programBox">
					<table>
						<tr>
							<td>Emergency First Aid and CPR with AED</td>
							<td>$75.00 plus tax</td>
						</tr>
					</table>
					<button class="programButton button">SIGN UP NOW</button>
					</div>

					<div class="cell large-5 programBox">
					<table>
						<tr>
							<td>Standard First Aid and CPR with AED</td>
							<td>$115.00 plus tax</td>
						</tr>
					</table>
					<button class="programButton button">SIGN UP NOW</button>
					</div>

					</div> -->
			
			
	



		<?php

	}
}

?>

</div>
			
			</div>
</div>

<?php
// imports the footer
get_footer();
