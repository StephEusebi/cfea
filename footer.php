<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cfea
 */

?>
	<!-- links to fontawesome for the social media icons, phone icon, and email icon -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
	
		<div class="grid-x">

			<!-- logo grid -->
			<div class="cell large-2 medium-2 small-12 logo">
				<!-- logo img -->
				<img src="/wp-content/themes/cfea/assets/img/cfea_logo.png" alt="CFEA Logo" />

			</div>

			<!-- footer navagation grid -->
			<div class="cell large-6 medium-6 small-12 footerNav">
				
				<!-- php call for the footer nav -->
				<?php
					wp_nav_menu( array(
						'theme_location' => 'footer_nav',
						'menu_id'        => 'footer-menu',
					) );
				?>

				<!-- h2 tag for the program title -->
				<h2>Programs</h2>

				<!-- php call for the program nav -->
				<?php
					wp_nav_menu( array(
						'theme_location' => 'program_nav',
						'menu_id'        => 'program-menu',
					) );
				?>

				<!-- div for group the contact info together -->
				<div class="contactInfo">
					<!-- phone number -->
					<p><i class="fas fa-phone"></i> 1-800-993-1521</p>

					<!-- email -->
					<p> <i class="fas fa-envelope"></i> liveeducation@cfea.ca</p>
				</div>
			
			</div>

			<!-- socialmedia and news letter form grid -->
			<div class="cell large-4 medium-4 small-12 socialMedia">
	
				<!-- news letter form -->
				<div class="newsLetterForm">

					<!-- title of form -->
					<h2>Subscribe for a CFEA Newsletter</h2>
					
					<?php echo do_shortcode('[ws_form id="3"]'); ?>

				</div>

				<!-- social media icons and links -->
				<div class="socialMediaIcons">


				<!-- customizer for social media -->

				<!-- facebook -->
				<?php 
					if(get_theme_mod( 'cfea_facebook_url' )) { ?>

						<a target="_blank" href="<?php echo get_theme_mod ('cfea_facebook_url') ?> " ><i class="fab fa-facebook-square fbIcon"></i></a>

						<?php
					
					}
				?>
				<!-- instagram -->
				<?php 
					if(get_theme_mod( 'cfea_instagram_url' )) { ?>

						<a target="_blank" href="<?php echo get_theme_mod ('cfea_instagram_url') ?> " ><i class="fab fa-instagram instagramIcon"></i></a>

						<?php
					
					}
				?>

				<!-- twitter -->

				<?php 
					if(get_theme_mod( 'cfea_twitter_url' )) { ?>

						<a target="_blank" href="<?php echo get_theme_mod ('cfea_twitter_url') ?> " ><i class="fab fa-twitter twitterIcon"></i></a>

						<?php
					
					}
				?>
				 
				</div>

			</div>

		</div>

	</footer><!-- #colophon -->

	</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
