<?php
/**
 * The template for displaying all pages
 * 
 * Template Name: Calendar Page
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

		<div class="grid-x">
			<div class="cell large-12 medium-12 small-12 calendar">
				<?php
                // shortcode for erins vesion and server version
                    // echo do_shortcode('[MEC id="270"][MEC id="277"]');

                    // shortcode for steph's local copy 
                    echo do_shortcode('[MEC id="356"][MEC id="363"]');

				?>
			</div>
		</div>

        </main>
        <!-- #main -->
    </div>
    <!-- #primary -->

    <?php
// imports the footer
get_footer();