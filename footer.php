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
			<div class="cell large-2 medium-4 small-4 logo">
				<!-- logo img -->
				<img src="/wp-content/themes/cfea/assets/img/cfea_logo.png" alt="CFEA Logo" />

			</div>

			<!-- footer navagation grid -->
			<div class="cell large-6 medium-4 small-4 footerNav">
				
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
			<div class="cell large-4 medium-4 small-4 socialMedia">
	
				<!-- news letter form -->
				<form class="newsLetterForm">

					<!-- title of form -->
					<h2>Subscribe for a weekly Newsletter</h2>
					
					<!-- first and last name input for form -->
					<div class="nameInput">
						<p>First & Last Name:</p>
						<input type="text" size="4" name="firstAndLastName" placeholder="First & Last Name">
					</div>

					<!-- email input for form -->
					<div class="emailInput">
						<p>Email:</p>
						<input type="text" size="4" name="email" placeholder="Email">
					</div>

					<!-- check box to make sure they know they are subscribing to emails -->
					<input class="checkBox" type="checkbox">
					<p class="checkBoxLabel">By clicking subscribe you agree to CFEA's terms and conditions.</p>
					
					<!-- submit button -->
					<input class="submitButton" type="submit" value="Subscribe">

				</form>

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

		</div>

	</footer><!-- #colophon -->

	</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
