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

<h1 class="entry-title">Our Team</h1>

<?php 

if (function_exists('get_field')) {
	$people = get_field('people');

	foreach($people as $people){

		$member_image = $people['member_image'];
		$member_about = $people['member_about'];
		$member_programs = $people['member_programs'];
		$member_contact = $people['member_contact'];
?>


<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<div class="grid-container aboutAcordian">
          <div class="grid-x">
            <div class="cell small-3">
				<!--MEMBER IMAGE---------->
       <img src=" <?php echo$member_image; ?>">

			<ul class="accordion" data-accordion >
  <li class="accordion-item is-active" data-accordion-item>
    <a href="#" class="accordion-title">About</a>
    <div class="accordion-content" data-tab-content>
    <!--MEMBER ABOUT---------->
    <?php echo$member_about; ?>
    </div>
  </li>
  <li class="accordion-item" data-accordion-item>
    <a href="#" class="accordion-title">Programs</a>
    <div class="accordion-content" data-tab-content>
    <!--MEMBER  PROGRAMS---------->
    <?php echo$member_programs; ?>
	</div>
  </li>
  <li class="accordion-item" data-accordion-item>
    <a href="#" class="accordion-title">Contact</a>
    <div class="accordion-content" data-tab-content>
    <!--MEMBER CONTACT---------->
    <?php echo$member_contact; ?>
	</div>
  </li>
</ul>	
			
	</div>




		<?php

	}
}

?>

        

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
