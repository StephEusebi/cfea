<?php
/**
 * The template for displaying all pages
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
			<!-- main -->
			<div class="grid-x">				

				<!-- group of top banner -->
				<div class="grid-x container-banner">

				<!-- front banner -->
				<img id="front-banner" src="/wp-content/themes/cfea/assets/img/banner2.jpg" alt="front banner of a guy wokring out" />
				
				<!-- TOP container holding h1 and button -->
				<div class="row large-7 small-11 medium-11 front-heading">
				
				<?php 
    
					if( have_rows('buttons') ):
					
						while( have_rows('buttons') ) : the_row();
							
							$button = get_sub_field('button_1');

							$header = $button['heading'];
							$buttontext = $button['buttontext'];
							?>

							<!-- LARGE title -->
							<h2 class="text-center"><?php echo$header; ?></h2>
							
							<!-- LARGE button -->
							<a class="button float-center hide-for-small-only"><h4><?php echo$buttontext; ?></h4></a>


				</div>

				<!-- button that shows only on mibile view -->
				<a class="button button-mobile float-center show-for-small-only"><h4><?php echo$buttontext; ?></h4></a>

			</div>

					<?php

						endwhile;

						endif;

					?>

				<div class="cell logo-container">
					<img src="/wp-content/themes/cfea/assets/img/corefx-logo.png" alt="corefx logo" />
					<img src="/wp-content/themes/cfea/assets/img/tp-logo.png" alt="trigger point logo" />
					<img src="/wp-content/themes/cfea/assets/img/firstaid-logo.png" alt="canadian red cross logo" />
					<img src="/wp-content/themes/cfea/assets/img/canfit-logo.png" alt="canfitpro logo" />
				</div>
				<!-- container for curtis and mini bio -->	
				<div class="grid-container grid-container-padded">	

					<div class="grid-x grid-padding-x align-center">

						<div class="cell large-4 small-12 text-right" >
							<!-- line  -->
							<div class="line"></div>
							
							<?php if (function_exists('get_field')) {
								$about = get_field('about');

								foreach($about as $abouts){
									$name = $abouts['name'];
									$bio = $abouts['bio'];
									$title = $abouts['title'];
									$link_url = $abouts['link_url'];
									$link_text = $abouts['link_text'];
								
							?>
							<p><strong><?php echo$name; ?></strong> | <?php echo$title; ?></p>
							
							<p><?php echo$bio; ?></p>

							<p><a  href="<?php echo $link_url; ?>"><em><?php echo$link_text; ?></em></a></p>
							
							<?php

								}
							}

							?>
						</div>

						<div class="cell large-8 small-12">							
							<!-- image of curtis -->
							<img src="/wp-content/themes/cfea/assets/img/headshot.png" alt="head shot of curtis" style="width: 880px;" />

						</div>
					</div>

				</div><!-- grid-container end-->


				<!-- container for team and mini bio -->	
				<div class="grid-container grid-container-padded top-space">	

					<div class="grid-x grid-padding-x align-center">

						<div class="cell large-8 small-12">							
							<!-- image of team -->
							<img src="/wp-content/themes/cfea/assets/img/group.jpg" alt="head shot of team" style="width: 880px;" />

						</div>

						<div class="cell large-4 small-12" >
							<!-- line  -->
							<div class="line"></div>
							<?php if (function_exists('get_field')) {
								$info_landing = get_field('info_landing');

								foreach($info_landing as $info_landing){
									$title = $info_landing['title'];
									$team_information = $info_landing['team_information'];
									$link_name = $info_landing['link_name'];
									$link_url = $info_landing['link_url'];
								
							?>
							<p><strong><?php echo$title; ?></strong></p>
							
							<p><?php echo$team_information; ?></p>

							<p><a  href="<?php echo $link_url; ?>"><em><?php echo$link_text; ?></em></a></p>
							<?php

									}
								}

							?>
						</div>

					</div>

				</div><!-- grid-container end-->

				<!-- BOTTOM container holding h1 and button -->
				<div class="row large-6 large-offset-3">

					<?php 
						
						if( have_rows('buttons') ):
						
							while( have_rows('buttons') ) : the_row();
								
								$button = get_sub_field('button_2');

								$header = $button['heading'];
								$buttontext = $button['buttontext'];
								?>
									<!-- title -->
									<h1 class="text-center grey top-space"><?php echo$header; ?></h1>
									<!-- button hides on mobile -->
									<a class="button float-center top-space hide-for-small-only"><h4><?php echo$buttontext; ?></h4></a>
									<!-- button shows on mobile -->
									<a class="button button-mobile float-center show-for-small-only"><h4><?php echo$buttontext; ?></h4></a>

									
								<?php
								// var_dump($button);
							endwhile;
						
						endif;
						
					?>

				</div>
			
		</main><!-- #main -->

	</div><!-- #primary -->

<?php
// imports the footer
get_footer();
