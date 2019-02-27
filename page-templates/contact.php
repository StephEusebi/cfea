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

			<!-- main -->
			<div class="grid-x">
			<div class="cell small-12 medium-12 large-6 NavText">
		<h1>Contact Us</h1>
		<?php
if(function_exists('get_field')) {
	$contact_form = get_field('contact_form');

	foreach($contact_form as $contact){
		$firstname = $contact['firstname'];
		$emailaddress = $contact['email'];
		$messages = $contact['message'];
		$confirmBox = $contact['confirm'];
		?>

		<label>First Name</label>
		<input class="text-center" <?php echo$firstname; ?> >

		<label>Email</label>
		<input class="text-center" <?php echo$emailaddress; ?> >

		<label>Message</label>
		<textarea rows="8"> <?php echo$messages; ?> </textarea>

		<label>Confirm Box</label>
		<input type="checkbox" class="text-center" <?php echo$confirmBox; ?> >

		<?php
	}
}
?>
		</main><!-- #main -->

	</div><!-- #primary -->

<?php
// imports the footer
get_footer();
