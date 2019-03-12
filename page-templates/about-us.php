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

<<<<<<< HEAD
            <h1 class="entry-title">Our Team</h1>

=======
	<h1 class="entry-title">Our Team</h1>
	<div class="grid-x ">
	<div class="cell large-auto"></div>
>>>>>>> landing
  <?php 

if (function_exists('get_field')) {
	$people = get_field('people');

	foreach($people as $people){

		$member_image = $people['member_image'];
		$member_about = $people['member_about'];
		$member_programs = $people['member_programs'];
		$member_contact = $people['member_contact'];
?>

<<<<<<< HEAD
			<ul class="accordion  aboutAcordian" data-accordion>
=======

<div class="cell large-10">
			<ul class="accordion aboutAcordian" data-accordion>
>>>>>>> landing
        <li>
        <img class="teamImg" src="<?php echo$member_image;?>">
        </li>
				<li class="accordion-item accordianStyle" data-accordion-item>
          <!-- Accordion tab title -->
					<a href="#" class="accordion-title ">About</a>
					<!-- Accordion tab content -->
					<div class="accordion-content" data-tab-content>
          <p><?php echo$member_about;?></p>
        </li>
        <li class="accordion-item accordianStyle" data-accordion-item>
					<!-- Accordion tab title -->
					<a href="#" class="accordion-title ">Programs</a>
					<!-- Accordion tab content -->
					<div class="accordion-content" data-tab-content>
          <p><?php echo$member_programs;?></p>
        </li>
        <li class="accordion-item accordianStyle" data-accordion-item>
					<!-- Accordion tab title -->
					<a href="#" class="accordion-title ">Contact</a>
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
<div class="cell large-auto"></div>

</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();