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

		<div class="grid-x grid-padding-x"><!-- Grid Container WYSIWYG TEXT -->
		<div class="cell large-12 aboutText"><!-- Cell Container -->
		
		<?php /* Start the Loop */ ?>
<?php while(have_posts()) : the_post(); ?>
<?php the_content();?>
<?php endwhile; ?>

		</div><!-- Grid Container WYSIWYG TEXT END -->
		</div><!-- Cell Container END -->

	<div class="grid-x grid-padding-x"><!-- Grid Container Team Cards -->
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
</div> <!-- Cell Container END -->
</div> <!--Grid Container Team Cards END -->


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
