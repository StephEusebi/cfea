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

				<?php
					if ( get_theme_mod( 'cfea_footer_logo' ) ) : ?>
 
						<img src="<?php echo get_theme_mod( 'cfea_footer_logo' ); ?>">
 
				<?php
				else : ?>
 
				<p>CFEA Logo</p>
 
				<?php endif; ?>

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
					<?php
					if ( get_theme_mod( 'cfea_footer_contact_number' ) ) : ?>
						<p><i class="fas fa-phone"></i><?php echo get_theme_mod( 'cfea_footer_contact_number' ); ?></p>
					
					<?php
					else : ?>
 
					<p>CFEA Contact Number</p>
 
					<?php endif; ?>

					<!-- email -->
					<?php
					if ( get_theme_mod( 'cfea_footer_contact_email' ) ) : ?>
						<p> <i class="fas fa-envelope"></i><?php echo get_theme_mod( 'cfea_footer_contact_email' ); ?></p>
					
					<?php
					else : ?>
 
					<p>CFEA Contact Email</p>
 
					<?php endif; ?>
				</div>

				<!-- social media icons and links -->
				<div class="socialMediaIcons">

					<!-- facebook icon -->
					<a href="https://www.facebook.com/cfealive/?fref=ts" target="_blank"><i class="fab fa-facebook-square fbIcon"></i></a>

					<!-- twitter icon -->
					<a href="https://twitter.com/TheCFEA" target="_blank"><i class="fab fa-twitter twitterIcon"></i></a>

					<!-- instagram icon -->
					<a href="https://www.instagram.com/cfealiveeducation/" target="_blank"><i class="fab fa-instagram instagramIcon"></i></a>
				</div>

			
			</div>

			<!-- socialmedia and news letter form grid -->
			<div class="cell large-4 medium-4 small-12 socialMedia">
	
				<!-- news letter form -->
				<div class="newsLetterForm">

					<!-- title of form -->
					<?php
					if ( get_theme_mod( 'cfea_footer_form_name' ) ) : ?>
						<h2><?php echo get_theme_mod( 'cfea_footer_form_name' ); ?></h2>
					
					<?php
					else : ?>
 
					<p>CFEA Form Name</p>
 
					<?php endif; ?>
					
					<?php echo do_shortcode('[ws_form id="3"]'); ?>

				</div>


			</div>

		</div>

	</footer><!-- #colophon -->

	</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
