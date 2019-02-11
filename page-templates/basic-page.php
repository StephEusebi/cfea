<?php
/**
 * The template for displaying all pages
 * 
 * Template Name: Basic Page
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

		<!-- offest - put everything inside here we don't want max width -->
		<div class="grid-x grid-margin-x">

			<!-- examples text -->
			<div class="cell small-4 large-offset-2  small-offset-2" style="background: orange;">Offset 2 on large</div>
			<div class="cell small-4" style="background: pink;"> second cell with image inside

				<!-- basic example on how to import an image -->
				<!-- the image is localed inside the assets/img folder -->
				<!-- remeber to optimise your image using tinypng.com-->
				<img src="/wp-content/themes/cfea/assets/img/dog.jpg" alt="dog image" />
			</div>

		</div> <!-- offset enf-->


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// imports the footer
get_footer();
