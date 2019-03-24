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

				$coaches = new WP_Query($args);

				if($coaches->have_posts() ){ ?>



						<h2 class="text-center"><?php the_title(); ?></h2>
						<div class="grid-x top-space coach-container">
						<div class="large-5">
						
						<div class="coach-image"><?php the_post_thumbnail(); ?></div>
						
				
						</div>
						<div class="large-6 small-11">

						<!-- if the post has content have content -->
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
							the_content();
							endwhile; else: endif;  ?>

						<?php if (function_exists('get_field')) {
								$coach_contact = get_field('coach_contact');

								foreach($coach_contact as $coach_contacts){
									$phone_number = $coach_contacts['phone_number'];
									$location = $coach_contacts['location'];
									$email = $coach_contacts['email'];
								
							?>
							<p><strong>Location:</strong> <?php echo $location; ?></p>
							
							<p><strong>Email:</strong> <?php echo $email; ?></p>
							<p><strong>Phone Number:</strong> <?php echo $phone_number; ?></p>
							
							<?php

								}
							}

							?>
						
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
