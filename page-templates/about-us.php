<?php
/**
 * The template for displaying About Us
* Template Name: About Us Page
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

	<h1 class="OurTeamtitle">Our Team</h1>

	<div id="aboutUsP">
	<h2 id="welcometitle">Welcome to the Canadian Fitness Education Alliance</h2>

<p>Welcome to the Canadian Fitness Education Alliance (known as the CFEA).  We are a leading provider of fitness certification and education in Canada.  Through our professional partnerships, we have certified thousands of Canadian fitness professionals.
Whether you are new to the fitness industry looking for your first job and want to become certified or you are a seasoned veteran looking for advanced certification and continuing education we are here to help you.
The CFEA’s mandate is simple.  To bring together the most recognized education brands in fitness today while giving you an amazing live education experience.  Our award-winning team of highly trained experienced Master Trainers, Instructors and PRO TRAINERS are among the best fitness educators in the industry today!</p>

<h3 id="letUsHelp">Let us help you take your fitness career to the next level!</h3>


	</div>

	<div class="grid-container centerAccordians">
	<div class="grid-x grid-padding-x ">

  <?php 

if (function_exists('get_field')) {
	$people = get_field('people');

	foreach($people as $people){

		$member_image = $people['member_image'];
		$member_about = $people['member_about'];
		$member_programs = $people['member_programs'];
		$member_contact = $people['member_contact'];
?>


<div class="cell large-12">
			<ul class="accordion aboutAcordian" data-accordion data-allow-all-closed="true">
        <li>
        <img class="teamImg" src="<?php echo$member_image;?>">
        </li>
				<li class="accordion-item accordianStyle" data-accordion-item>
          <!-- Accordion tab title -->
					<a href="#" class="accordion-title plAccordianTitle"><p><?php echo$member_about;?></p></a>
					<!-- Accordion tab content -->
					<div class="accordion-content" data-tab-content>
          <p><?php echo$member_about;?></p>
        </li>
        <li class="accordion-item accordianStyle" data-accordion-item>
					<!-- Accordion tab title -->
					<a href="#" class="accordion-title plAccordianTitle">Programs</a>
					<!-- Accordion tab content -->
					<div class="accordion-content" data-tab-content>
          <p><?php echo$member_programs;?></p>
        </li>
        <li class="accordion-item accordianStyle" data-accordion-item>
					<!-- Accordion tab title -->
					<a href="#" class="accordion-title plAccordianTitle">Contact</a>
					<!-- Accordion tab content -->
					<div class="accordion-content" data-tab-content>
          <p><?php echo$member_contact;?></p>
        </li>
		
			</ul>

		<?php

	}
}

?>
</div>
</div>

</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
