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

	<div id="primary" class="content-area aboutContent">
		<main id="main" class="site-main">

	<h1 class="OurTeamtitle">Our Team</h1>

	<div class="grid-x grid-padding-x">
	<div class="cell large-12 ">
	<div id="aboutUsP">
	<h2 id="welcometitle">Welcome to the Canadian Fitness Education Alliance</h2>

<p>Welcome to the Canadian Fitness Education Alliance (known as the CFEA).  We are a leading provider of fitness certification and education in Canada.  Through our professional partnerships, we have certified thousands of Canadian fitness professionals.
Whether you are new to the fitness industry looking for your first job and want to become certified or you are a seasoned veteran looking for advanced certification and continuing education we are here to help you.
The CFEA’s mandate is simple.  To bring together the most recognized education brands in fitness today while giving you an amazing live education experience.  Our award-winning team of highly trained experienced Master Trainers, Instructors and PRO TRAINERS are among the best fitness educators in the industry today!</p>

<h3 id="letUsHelp">Let us help you take your fitness career to the next level!</h3>
</div>
</div>
	</div>

	<div class="grid-x grid-padding-x"><!-- Grid Container Team Cards  -->
	<div class="cell large-12 ourTeam"><!-- Cell Container -->
  <?php 

/* ACF functions */
if (function_exists('get_field')) {
	$team = get_field('team');
/* ACF functions from ACF "team" */
	foreach($team as $team){

		$member_name = $team['member_name']; 
		$member_image = $team['member_image'];
		$member_programs = $team['member_programs'];
		$memeber_location = $team['memeber_location'];
		$member_phone = $team['member_phone'];
		$member_email = $team['member_email'];
?>
		<!-- team members card info -->
		<div class="teamMembers">
			<!-- team members name-->
       		<p class="member_name"><?php echo$member_name;?></p>
	  		 <!-- team members image -->
			 <img class="teamMemberImg" src="<?php echo $member_image['url']; ?>" alt="<?php echo $member_image['alt']; ?>" />
			 <!-- team members programs -->
			 <p  class="member_programs"> <img src="<?php echo get_template_directory_uri() . '/assets/img/listDot.svg'; ?>" class="teamIcons" />	<?php echo$member_programs;?></p>
			<!-- team members location -->
			 <p class="memeber_location"><img src="<?php echo get_template_directory_uri() . '/assets/img/location.svg'; ?>" class="teamIcons" />	 <?php echo$memeber_location;?></p>
			<!-- team members phone number -->
			 <p class="member_phone"> <img src="<?php echo get_template_directory_uri() . '/assets/img/phone.svg'; ?>" class="teamIcons" />	<?php echo$member_phone;?></p>
			 <!-- team members mail -->
			 <p class="member_email"> <img src="<?php echo get_template_directory_uri() . '/assets/img/email.svg'; ?>" class="teamIcons" />	<?php echo$member_email;?></p>


			 
	</div>

		<?php

	}
}

?>
</div>
</div>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
