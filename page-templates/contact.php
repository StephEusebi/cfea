<?php
/**
 * The template for displaying all pages
 * 
 * Template Name: Contact Page
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

    <div id="primary" class="content-area">
        <main id="main" class="site-main">


		<div class="grid-container"> <!--Main Form Container-->
				<div class="grid-x grid-margin-x grid-margin-y"> <!--grid x container for title-->
				<div class="cell small-12 medium-12 large-12 contactUsTitle">
				
				<?php /* Start the Loop */ ?>
				<?php while(have_posts()) : the_post(); ?>
				<?php the_content();?>
				<?php endwhile; ?>

				</div> <!-- cell container -->	
				</div>
				</div>
			<?php 
			/* get field ACF */
			if (function_exists('get_field')) {
				$form_id = get_field('form_id');
				$form_shortcode = get_field('form_shortcode');
			
				if ($form_id || $form_shortcode) {
					?>    
				<section class="contact-form"> <!-- form  -->
				<div class="grid-container"> <!-- form container -->
				<div class="grid-x grid-margin-x grid-margin-y">
				<div class="cell small-12 medium-12 large-12">
				<?php  echo do_shortcode('[ws_form id="' . $form_id . '" ]') ?>
				</div>
	
				</div><!-- end form container -->
				</div><!--  end form -->
				
				</section>	<!-- end Section -->
				<?php
				}
			}
			
			?>
	



		</main><!-- #main -->

        </div>
        <!-- #primary -->

        <?php
// imports the footer
get_footer();