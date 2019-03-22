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
	
		<!-- footer container -->
		<div class="grid-x">
			<!-- container for all content in the footer -->
			<div class="cell large-12 medium-12 small-12">
				<!-- logo div -->
				<div class="logo">
					<?php
						if ( has_custom_logo() ) {
							echo get_custom_logo();
						}else{
							echo 'no logo';
						}
					?>
				</div>
				<!-- navagation div -->
				<div class="footerNav">
					<!-- php call for the footer nav -->
					<?php
						wp_nav_menu( array(
							'theme_location' => 'footer_nav',
							'menu_id'        => 'footer-menu',
						) );
					?>
					<!-- php call for the program nav -->
					<?php
						wp_nav_menu( array(
							'theme_location' => 'program_nav',
							'menu_id'        => 'program-menu',
						) );
					?>
				</div>
				<!-- div the contact information -->
				<div class="contactInfo">
					<!-- customizer for the phone number -->
					<?php
						if ( get_theme_mod( 'cfea_footer_contact_number' ) ) : ?>
						<p><i class="fas fa-phone"></i><?php echo get_theme_mod( 'cfea_footer_contact_number' );
					?>
						</p>
					<?php
						else :
					?>
						<!-- shows up if no number is put in the footer customizer -->
						<p>CFEA Contact Number</p>
					<?php 
						endif;
					?>
					<!-- customizer for the email -->
					<?php
						if ( get_theme_mod( 'cfea_footer_contact_email' ) ) : ?>
						<p> <i class="fas fa-envelope"></i><?php echo get_theme_mod( 'cfea_footer_contact_email' ); 
					?>
						</p>
					<?php
						else :
					?>
						<!-- shows up if no email is put in the footer customizer -->
						<p>CFEA Contact Email</p>
					<?php 
						endif; 
					?>
				</div>
				<!-- social media icons div -->
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
				</div><!-- closes the social media div -->
			</div><!-- closes the main footer div -->
		</div><!-- closes the grid-x div -->
	</footer><!-- #colophon -->
	</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
