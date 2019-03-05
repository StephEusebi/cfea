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
<h1 class="entry-title">About Us</h1>

<div class="grid-x aboutUs">
<div class="cell large-auto"></div>
  <div class="cell large-10">
    <h3 class="alignCenter">Welcome to the Canadian Fitness Education Alliance</h3>
    <p> 
Welcome to the Canadian Fitness Education Alliance (known as the CFEA).  We are a leading provider of fitness certification and education in Canada.  Through our professional partnerships, we have certified thousands of Canadian fitness professionals.
Whether you are new to the fitness industry looking for your first job and want to become certified or you are a seasoned veteran looking for advanced certification and continuing education we are here to help you.
<br>
The CFEA’s mandate is simple.  To bring together the most recognized education brands in fitness today while giving you an amazing live education experience.  Our award-winning team of highly trained experienced Master Trainers, Instructors and PRO TRAINERS are among the best fitness educators in the industry today!
</p>
<h5 class="alignCenter">Let us help you take your fitness career to the next level!</h3>
</div>
<div class="cell large-auto"></div>
</div>

<h1 class="entry-title">Our Team</h1>
<div class="grid-x large-offset-1">
<?php 

if (function_exists('get_field')) {
	$people = get_field('people');

	foreach($people as $people){

		$member_image = $people['member_image'];
		$member_about = $people['member_about'];
		$member_programs = $people['member_programs'];
		$member_contact = $people['member_contact'];
?>

    <!-- create boxes to hold page content -->
        <div class="cell large-3 memberAbout">
					<!-- box cover image -->
          <img src="<?php echo$member_image; ?>" alt="<?php echo $image['alt']; ?>" class="memberImage"/>
          					
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
	</div>

<?php
get_footer();
