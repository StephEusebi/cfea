<?php
/**
 * The template for displaying all pages
 * 
 * Template Name: TriggerPoint Page
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

			<img src="/wp-content/themes/cfea/assets/img/trigPoint.jpg" alt="triggerPoint logo" class="cell large-12" id="trigLogo" />

			<!-- <h2 class="cell large-12 progHead">TriggerPoint</h2> -->
			<p class="cell large-12 progDesc">TriggerPoint Performance is a patented brand that improves life by focusing on 
			energizing people with the radical organization in Myofascial Compression techniques 
			as well as branded goods that conserve, control increase the physical movement of human 
			life-forms. The goal of TriggerPoint Performance is to discover inventive ways to which 
			people can be inspired to attain the best degree of change using providing medicinal 
			self-care products and teachings. Our aim is to deliver the greatest user-friendly mode 
			of goods, training, and treatment available for anyone who needs a change in lifestyle, 
			enhanced performance or typical good health. We would like people to manage their curative 
			care. Discover more. Have better movement.</p>

			<table class="programTables">
				<tr>
					<th>Certification</th>
					<th>Requirements</th>
					<th>Price</th>
				</tr>
				<tr>
					<td>TriggerPoint Level 1</td>
					<td>No Equipment Required</td>
					<td>$219.00 plus tax</td>
				</tr>
				<tr>
					<td>TriggerPoint Level 1</td>
					<td>TriggerPoint Grid</td>
					<td>$259.00 plus tax</td>
				</tr>
				<tr>
					<td>TriggerPoint Level 2</td>
					<td>No Equipment Required</td>
					<td>$319.00 plus tax</td>
				</tr>
				<tr>
					<td>TriggerPoint Level 2</td>
					<td>TriggerPoint Kit</td>
					<td>$459.00 plus tax</td>
				</tr>
			</table>

		</main><!-- #main -->
	</div><!-- #primary -->

		<div class="large-offset-3 "> 
			<div class="cell large-8 rcVideo">
			<iframe width="798" height="449" src="https://www.youtube.com/embed/GYpCABKHsFw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>

<?php
// imports the footer
get_footer();
