<?php
 /*!
Template Name: Programs
Theme URI: cfea theme
Author: Amanda Jackson & Cassie Doyle
Description: CFEA Theme
Version: 1.0.0
License: GNU General Public License v2 or later
License URI: LICENSE
Text Domain: programs
Tags: custom-background, custom-logo, custom-menu, featured-images, threaded-comments, translation-ready
*/

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<h1>THIS IS THE PROGRAMS PAGE</h1>

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
