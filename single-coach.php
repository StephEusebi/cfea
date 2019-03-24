<?php
/**
 * The template for displaying all coaches posts
 * Template Name: Coach Template
 * Template Post Type: coach, post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package cfea
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="grid-container">

				<?php

				// query for coaches
				$args = array(
					'post_type' => 'coach',
				);

				// Coaches Query
				$coaches = new WP_Query($args);

				// if has posts
				if($coaches->have_posts() ){ ?>

						<h2 class="text-center"><?php the_title(); ?></h2>
						<div class="grid-x top-space coach-container">
							
						 <!-- if featured image is not empty - show -->
						 <?php if(!empty (has_post_thumbnail() ) ) { ?>

							<div class="large-5">
								<!-- palce the featured image -->
								<?php the_post_thumbnail(); ?>

							</div>

							<!-- set the class of the next div -->
							<div class="large-6 small-11">

						<!-- END if featured image is not empty -->
						 <?php } else { ?> 

							<!-- set the class of the next div  -->
							<div class="large-10 small-11"> <?php  } ?>
						

						<!-- if the post has content -->
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
							// getting the content
							the_content();
						
							endwhile; else: endif;  ?>
						
						<!-- if there is a acf field get the field  -->
						<?php if (function_exists('get_field')) {
								
								// get the ACF named coach_contact and declare it
								$coach_contact = get_field('coach_contact');

								foreach($coach_contact as $coach_contacts){
									// declare variables
									$phone_number = $coach_contacts['phone_number'];
									$location = $coach_contacts['location'];
									$email = $coach_contacts['email'];

								// if conact info is not empty - show 
								if(!empty ($coach_contact) ) {
								
							?>
							<!-- location -->
							<p><strong>Location:</strong> <?php echo $location; ?></p>
							<!-- email -->
							<p><strong>Email:</strong> <?php echo $email; ?></p>
							<!-- phone number -->
							<p><strong>Phone Number:</strong> <?php echo $phone_number; ?></p>
								
							<!-- ends if contact info not empty -->
							<?php }  ?>

							<!-- ends if fuction excists and foreach -->
							<?php } } ?>
						<!-- cta button -->
						<div class="button coach-button" href="/calendar/"><h5>Train with me!</h5></div>
						
						<?php
						
					}

					wp_reset_postdata();
				

				?>
				</div>
			</div><!-- .grid-x -->
			</div><!-- .grid-container -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
