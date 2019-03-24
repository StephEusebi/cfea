<?php
/**
 * The template for displaying all pages
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

			<!-- main container-->
			<div class="grid-x">				

				<!-- group of top banner -->
				<div class="grid-x container-banner">

				<!-- START ACF - BANNER_IMAGE -->
				<?php 

					//if there is a acf field get the field 
					if (function_exists('get_field')) {

					// get the ACF named banner_image and name it
					$image = get_field('banner_image');

					// assign the image variable with the image
					$image = $image['image'];

					// if image is not empty - show image
					if(!empty ($image)) {

				?>
				<!-- front banner -->
				<img id="front-banner" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

				<?php }
					// if empty -show civ box
					if(empty ($image)) {
				?>
					<!-- empty div with styles -->
					 <div class="banner-box"></div> 

					 <!-- END if fucntion and if empty -->
					 <?php } } ?>

				<!-- END ACF - BANNER_IMAGE -->

				<!-- TOP container holding h1 and button -->
				<div class="row large-7 small-11 medium-11 front-heading">
				
				<!-- START ACF - CTA -->
				<?php 
					
					// checking to see if the field ctas has rows of data to loop over
					if( have_rows('ctas') ):
					
						while( have_rows('ctas') ) : the_row();

							// getting the first cta
							$cta = get_sub_field('cta_1');

							// assign the variables
							$header = $cta['heading'];
							$button = $cta['button'];

							// if header and button is not empty - show 
							if(!empty ($header) && !empty ($button)) {

							?>

								<!-- LARGE title -->
								<h2 class="text-center"><?php echo $header; ?></h2>
										
								<!-- LARGE button -->
								<a class="button float-center hide-for-small-only"  href="<?php echo $button['link']; ?>" target="<?php echo $button['target']; ?>">
									<h4><?php echo $button['title']; ?></h4>
								</a>


								</div> <!-- END front-heading -->

								<!-- button that shows only on mibile view -->
								<a class="button button-mobile float-center show-for-small-only"  href="<?php echo $button['link']; ?>" target="<?php echo $button['target']; ?>">
									<h4><?php echo $button['title']; ?></h4>
								</a>
						
							<!--END if isn't epmpty  -->
							<?php } ?>

							<?php

							// if header is empty but not button- do not show header show button
							if(empty ($header) && !empty ($button)) { ?>

								<a class="button float-center hide-for-small-only"  href="<?php echo $button['link']; ?>" target="<?php echo $button['target']; ?>">
									<h4><?php echo $button['title']; ?></h4>
								</a>

								</div> <!-- END front-heading -->

								<!-- button that shows only on mibile view -->
								<a class="button button-mobile float-center show-for-small-only"  href="<?php echo $button['link']; ?>" target="<?php echo $button['target']; ?>">
									<h4><?php echo $button['title']; ?></h4>
								</a>

							<!-- END if header empty but not button-->
							<?php	} ?>
							

							<?php
							// if button is empty but not header- show button and do not show header
							if(empty ($button) && !empty ($header)) { ?>

								<h2 class="text-center"><?php echo $header; ?></h2>

							<!-- END if button empty but not header-->
							<?php } ?>

							<?php

								endwhile;

							endif;

							?>
							
						<!-- END ACF - CTA -->

					</div> <!-- END container-banner -->

				<!-- logos and logo container -->
				<div class="cell logo-container">

				<!-- START ACF - LOGOS -->
					<?php 

					//if there is a acf field get the field 
					if(function_exists('get_field')) {

						$logos = get_field('logos');

						foreach($logos as $logo){

							// assign the variables
							$logo_image = $logo['logo_image'];
							$logo_url = $logo['logo_url'];
							
							// if image is not empty and a tage isnt epty - show image
							if(!empty ($logo_image) && !empty($logo_url)) {
							?>

								<!-- logos with a tags-->
								<a href="<?php echo $logo_url['url']; ?>" target="<?php echo $logo_url['target']; ?>" >
									<img src="<?php echo $logo_image['url']; ?>" alt="<?php echo $logo_image['alt']; ?>" />
								</a>

							<!-- END if image isnt empty -->
							<?php } ?>


							<!-- if image isn't empty with an a tag wasn't provided -->
							<?php if(empty ($logo_url)) { ?>

								<!-- display only image -->
								<img class="noA" src="<?php echo $logo_image['url']; ?>" alt="<?php echo $logo_image['alt']; ?>" />

							<!-- END if a tag is empty empty -->	
							<?php } ?>
							
							<!-- END if function and foreach -->
							<?php } } ?>

					<!-- END ACF - LOGOS -->

				</div>  <!-- END logo-container -->
				


				<!-- container for block 1 -->	
				<div class="grid-container grid-container-padded">	

						<!-- START ACF - BLOCK 1 -->
						<?php 

						//if there is a acf field get the field 
						if (function_exists('get_field')) {
								
								// get the ACF named home_page_block_1 and name it
								$home_page_block_1 = get_field('home_page_block_1');

								foreach($home_page_block_1 as $home_page_block_1){
									
									// assign the variables
									$title = $home_page_block_1['title'];
									$info = $home_page_block_1['info'];
									$link_url = $home_page_block_1['link_url'];
									$image = $home_page_block_1['image'];

							// if info and image not empty - show 
							if(!empty ($home_page_block_1) && !empty ($image)) { 
							
							?>

							<div class="grid-x grid-padding-x align-center">

								<div class="cell large-8 medium-12 block_1">	
									<!-- image -->
									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
								
								</div> <!-- END block_1 holding just the image -->

							<div class="cell large-4 small-11 block_1_info">

								<!-- line  -->
								<div class="line"></div>

								<!-- title -->
								<p><strong><?php echo $title; ?></strong></p>

								<!-- info -->
								<p><?php echo $info; ?></p>

								<!-- link -->
								<p><a  href="<?php echo $link_url['link']; ?>" target="<?php echo $link_url['target']; ?>"><?php echo $link_url['title']; ?></a></p>
							
							</div> <!-- END block_1_info -->
							
							<!-- END if block_1 not empty -->
							<?php } ?> 


							<!-- if image empty show content  -->
							<?php if(empty ($image)) { ?>

								<div class="cell large-10 small-11 block_1_info">

									<!-- title -->
									<h1 class="text-center"><?php echo $title; ?></strong></h1>

									<!-- info -->
									<p><?php echo $info; ?></p>

									<!-- link -->
									<p><a  href="<?php echo $link_url['link']; ?>" target="<?php echo $link_url['target']; ?>"><?php echo $link_url['title']; ?></a></p>

								</div> <!-- END block_1_info -->

							<!-- END if no image but content -->
							<?php } ?>

															
							<!-- END if function and foreach -->
							<?php } } ?>

					</div>
					
				<!-- END ACF - BLOCK 1 -->

				</div><!-- END block 1-->

				<!-- container for block 2 -->	
				<div class="grid-container grid-container-padded top-space">	
					
					<!-- START ACF - BLOCK 2 -->

					<div class="grid-x grid-padding-x align-center">

						
							<?php 
							//if there is a acf field get the field 
							if (function_exists('get_field')) {
								
								// get the ACF named home_page_block_1 and name it
								$home_page_block_2 = get_field('home_page_block_2');

								foreach($home_page_block_2 as $home_page_block_2){
									
									// assign the variables
									$title = $home_page_block_2['title'];
									$info = $home_page_block_2['info'];
									$link_url = $home_page_block_2['link_url'];
									$image = $home_page_block_2['image'];	

							
							?>
							 <!-- if info and image not empty - show  -->
							<?php if(!empty ($home_page_block_2) && !empty ($image)) {  ?>

							<div class="cell large-4 small-11 block_2_text text-right" >
								<!-- line  -->
								<div class="line"></div>
								
								<!-- title -->
								<p><strong><?php echo$title; ?></strong></p>

								<!-- information -->
								<p><?php echo$info; ?></p>

								<!-- link -->
								<p><a  href="<?php echo $link_url['link']; ?>" target="<?php echo $link_url['target']; ?>"><?php echo $link_url['title']; ?></a></p>
							
							</div> <!-- END block_2_text -->
							
							<div class="cell large-8 small-12 block_2">							
								<!-- image-->
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
							</div> <!-- END block_2 image-->

							<!-- END if block_2 not empty -->
							<?php } ?> 

							<!-- if image empty show content  -->
							<?php if(empty ($image)) { ?>

								<div class="cell large-12 small-11 block_2_text text-left" >
									<!-- line  -->
									<div class="line"></div>
									
									<!-- title -->
									<h3 class="text-center"><?php echo$title; ?></strong></h3>

									<!-- information -->
									<p><?php echo$info; ?></p>

									<!-- link -->
									<p><a  href="<?php echo $link_url['link']; ?>" target="<?php echo $link_url['target']; ?>"><?php echo $link_url['title']; ?></a></p>
								
								</div> <!-- END block_2_text -->

							<!-- END if image empty -->
							<?php } ?> 


							<!-- END if function and foreach -->
							<?php } } ?>
					
					<!-- START ACF - BLOCK 2 -->
					
					</div>

				</div><!-- END block 2-->

				<!-- BOTTOM container holding h1 and button -->
				<div class="row large-6 large-offset-3">
				<!-- START ACF - CTA -->

					<?php 
						// checking to see if the field ctas has rows of data to loop over
						if( have_rows('ctas') ):
						
							while( have_rows('ctas') ) : the_row();
								
								// getting the second cta
								$cta = get_sub_field('cta_2');

								// assign the variables
								$header = $cta['heading'];
								$button = $cta['button'];
								
								// if header and button is not empty - show 
								if(!empty ($header) && !empty ($button)) {
	
								?>
	
									<!-- LARGE title -->
									<h1 class="text-center grey top-space"><?php echo $header; ?></h1>
											
									<!-- LARGE button -->
									<a class="button float-center hide-for-small-only"  href="<?php echo $button['link']; ?>" target="<?php echo $button['target']; ?>">
										<h4><?php echo $button['title']; ?></h4>
									</a>
		
		
									</div> <!-- END front-heading -->
		
									<!-- button that shows only on mibile view -->
									<a class="button button-mobile float-center show-for-small-only"  href="<?php echo $button['link']; ?>" target="<?php echo $button['target']; ?>">
										<h4><?php echo $button['title']; ?></h4>
									</a>
							
								<!--END if isn't epmpty  -->
								<?php } ?>
	
								<?php
	
								// if header is empty but not button- do not show header show button
								if(empty ($header) && !empty ($button)) { ?>
	
									<a class="button float-center top-space hide-for-small-only"  href="<?php echo $button['link']; ?>" target="<?php echo $button['target']; ?>">
										<h4><?php echo $button['title']; ?></h4>
									</a>
		
									</div> <!-- END front-heading -->
		
									<!-- button that shows only on mibile view -->
									<a class="button button-mobile float-center show-for-small-only"  href="<?php echo $button['link']; ?>" target="<?php echo $button['target']; ?>">
										<h4><?php echo $button['title']; ?></h4>
									</a>
	
								<!-- END if header empty but not button-->
								<?php	} ?>
								
	
								<?php
								// if button is empty but not header- show button and show header
								if(empty ($button) && !empty ($header)) { ?>
	
									<h1 class="text-center grey top-space"><?php echo $header; ?></h1>
	
								<!-- END if button empty but not header-->
								<?php } ?>
	
								<?php
	
									endwhile;
		
								endif;
		
								?>
								
							<!-- END ACF - CTA -->
				</div>

				<!-- post cards -->
				<div class="grid-container top-space">
				<div class="grid-x post-container">
				
				<?php
				

				$args = array( 
					'post_type' => 'coach', 
					'posts_per_page' => 4,
					'meta_query' => array(
						array(
						'key' => '_thumbnail_id',
						'compare' => 'EXISTS'
						)
					) 
				);
				// sets featured image size
				add_image_size( 'coach-size', 400, 400 ); 

				// Coaches Query
				$the_query_choach = new WP_Query( $args );
				
				// The Loop
				// checking to see if no posts were found
				if ( $the_query_choach->have_posts() ) {
					
					while ( $the_query_choach->have_posts() ) {
						$the_query_choach->the_post();
					
				?>
						<!-- cards -->
						<div class="cell post">
							<div class="card card-coach">
								<div class="card-section card-section-coach">

						<?php 

						if ( has_post_thumbnail() ) { // only print out the thumbnail if it actually has one

							the_post_thumbnail( 'coach-size' );

						} else {
							echo '<p>this post does not have a featured image</p>';
						} ?>
								

									<?php echo '<h4>' . get_the_title() . '</h4>';?>


				<!-- START ACF - coach -->
				<?php 

					//if there is a acf field get the field 
					if (function_exists('get_field')) {

					// get the ACF named coach and name it
					$coach_contact = get_field('coach_contact');

					foreach($coach_contact as $coach_contacts){

						// assign variables
						$phone_number = $coach_contacts['phone_number'];
						$location = $coach_contacts['location'];
						$email = $coach_contacts['email'];

					// if contact contant is not empty - show contact contant
					if(!empty ($coach_contact)) {

					?>
					<!-- front banner -->
					<p><?php echo $phone_number; ?></p>

				<!-- END if fucntion and if empty  and foreach-->
				<?php } } } ?>

								</div>
							</div>
						</div>

						<?php
						}
						
						/* Restore original Post Data */
						wp_reset_postdata();
					} else {
						// no posts found
					} ?>
					</div>
				</div>	
							

		</main><!-- #main -->

	</div><!-- #primary -->

<?php
// imports the footer
get_footer();
