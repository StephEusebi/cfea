<?php
/**
 * The template for displaying all pages
 * 
 * Template Name: RedCross Page
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

			<img src="/wp-content/themes/cfea/assets/img/crcLogo.jpg" alt="red cross logo" class="cell large-12" id="redCrossLogo" />

			<!-- <h2 class="cell large-12 progHead">Canadian Red Cross</h2> -->
			<p class="cell large-12 progDesc">Duration: Level A: 4 hours, Level C: 5 hours, Level HCP: 6 hours</p>
			<p class="cell large-12 progDesc">Lecture series on mouth-to-mouth resuscitation (CPR) offers the needed expertise to identify and act 
			in response to cardiac crisis and suffocation for babies, children and adults subject to the type of CPR 
			chosen. The training also comprises the utilization of automated external defibrillator (AED) as well as 
			guidance that is appropriate for place of work or broad appeal. In addition, there are cutting-edge CPR 
			recommendations.</p>

			<div class="grid-x grid-margin-x">

  				<div class="cell large-6 programBox">
					<table>
						<tr>
							<td>CPR A with AED</td>
							<td>$49.00 plus tax</td>
						</tr>
					</table>
					<button class="programButton">SIGN UP NOW</button>
				</div>

  				<div class="cell large-6 programBox">
				  <table>
						<tr>
							<td>CPR C with AED</td>
							<td>$55.00 plus tax</td>
						</tr>
					</table>
					<button class="programButton">SIGN UP NOW</button>
				</div>

  				<div class="cell large-6 programBox">
				  <table>
						<tr>
							<td>Emergency First Aid and CPR with AED</td>
							<td>$75.00 plus tax</td>
						</tr>
					</table>
					<button class="programButton">SIGN UP NOW</button>
				</div>

				<div class="cell large-6 programBox">
				  <table>
						<tr>
							<td>Standard First Aid and CPR with AED</td>
							<td>$115.00 plus tax</td>
						</tr>
					</table>
					<button class="programButton">SIGN UP NOW</button>
				</div>

			</div>

			<!-- <table class="programTables">
				<tr>
					<th>Certification</th>
					<th>Details</th>
					<th>Price</th>
				</tr>
				<tr>
					<td>Canadian Red Cross</td>
					<td>CPR A with AED</td>
					<td>$49.00 plus tax</td>
				</tr>
				<tr>
					<td>Canadian Red Cross</td>
					<td>CPR C with AED</td>
					<td>$55.00 plus tax</td>
				</tr>
				<tr>
					<td>Canadian Red Cross</td>
					<td>Emergency First Aid and CPR with AED</td>
					<td>$75.00 plus tax</td>
				</tr>
				<tr>
					<td>Canadian Red Cross</td>
					<td>Standard First Aid and CPR with AED</td>
					<td>$115.00 plus tax</td>
				</tr>
			</table> -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// imports the footer
get_footer();
