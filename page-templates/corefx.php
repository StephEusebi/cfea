<?php
/**
 * The template for displaying all pages
 * 
 * Template Name: COREFX Page
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

		<header class="header1">
			<img src="/wp-content/themes/cfea/assets/img/logo.png" alt="cfeaLogo" class="cell large-12 logo1" />
		</header>

			<img src="/wp-content/themes/cfea/assets/img/corefx.jpg" alt="corefx logo" class="cell large-12" id="corefxLogo" />

			<!-- <h2 class="cell large-12 progHead">COREFX</h2> -->
			<p class="cell large-12 progDesc">COREFX asserts itself when it comes to fitness and training equipment. It is a guarantee 
			to the best. For athletes looking to release their greatest capabilities and get motivated 
			to prominence, it is the best answer. The trailblazing COREFX peak-performing lines of products 
			that have undergone real life controlled tests are purposefully created to take peak performance 
			to another level by delivering the most all-embracing area of strength and training tools.</p>

			<p class="cell large-12 progDesc">COREFX has created new and technologically-advanced training methods so as to connect the disparity 
			between persistent physical activity and authentic physical improvement. This permits athletes to 
			exploit the full extensive possibilities of the company’s whole range of products. To complement 
			athletes’ unrestrained commitment to exercise, COREFX has created a mutually beneficial connection 
			between equipment and training. This is the genuine mystery behind attaining your Inner Strength.</p>

		<table class="programTables">
				<tr>
					<th>Certification</th>
					<th>Requirements</th>
					<th>Price</th>
				</tr>
				<tr>
					<td>COREFX Level 1</td>
					<td>No Equipment Required</td>
					<td>$259.00 plus tax</td>
				</tr>
				<tr>
					<td>COREFX Workshop</td>
					<td>Grit and Gut Workshop</td>
					<td>$59.00 plus tax</td>
				</tr>
				<tr>
					<td>COREFX Workshop</td>
					<td>Power Play</td>
					<td>$59.00 plus tax</td>
				</tr>
			</table>

			<footer class="footer1"></footer>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// imports the footer
get_footer();
