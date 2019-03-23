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
							<a class="button float-center hide-for-small-only"  href="<?php echo $button['link']; ?>" target="<?php echo $button['target']; ?>"><h4><?php echo $button['title']; ?></h4></a>
							
							<!--END if isn't epmpty  -->
							<?php } ?>

							<?php
							// if header is empty but not button- do not show header show button
							if(empty ($header) && !empty ($button)) { ?>

							<a class="button float-center hide-for-small-only"  href="<?php echo $button['link']; ?>" target="<?php echo $button['target']; ?>"><h4><?php echo $button['title']; ?></h4></a>

							<!-- END if header empty but not button-->
							<?php	} ?>
							

							<?php
							// if button is empty but not header- show button and do not show header
							if(empty ($button) && !empty ($header)) { ?>

							<h2 class="text-center"><?php echo $header; ?></h2>

							<!-- END if button empty but not header-->
							<?php } ?>
			
				<!-- END ACF - CTA -->
				</div>

				<!-- button that shows only on mibile view -->
				<a class="button button-mobile float-center show-for-small-only"  href="<?php echo $button['link']; ?>" target="<?php echo $button['target']; ?>"><h4><?php echo $button['title']; ?></h4></a>

			</div> <!-- END top banner -->

					<?php

						endwhile;

						endif;

					?>

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
							
							<!-- END if function and foreacher -->
							<?php } } ?>

					<!-- END ACF - LOGOS -->

				</div>  <!-- END logo-container -->
				


				<!-- container for block 1 -->	
				<div class="grid-container grid-container-padded ">	

					<div class="grid-x grid-padding-x align-center">

						<div class="cell large-8 medium-12 block_1">	
							
						<?php if (function_exists('get_field')) {

								$home_page_block_1 = get_field('home_page_block_1');

								foreach($home_page_block_1 as $home_page_block_1){

									$title = $home_page_block_1['title'];
									$info = $home_page_block_1['info'];
									$link_url = $home_page_block_1['link_url'];
									$image = $home_page_block_1['image'];
							?>
							<!-- image -->
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						</div>

						<div class="cell large-4 small-11" >

							<!-- line  -->
							<div class="line"></div>

							<!-- title -->
							<p><strong><?php echo $title; ?></strong></p>

							<!-- info -->
							<p><?php echo $info; ?></p>

							<!-- link -->
							<p><a  href="<?php echo $link_url['link']; ?>" target="<?php echo $link_url['target']; ?>"><?php echo $link_url['title']; ?></a></p>

							<?php

									}
								}

							?>
						</div>

					</div>

				</div><!-- END block 1-->

				<!-- container for block 2 -->	
				<div class="grid-container grid-container-padded top-space">	

					<div class="grid-x grid-padding-x align-center">

						<div class="cell large-4 small-11 block_2_text" >
							<!-- line  -->
							<div class="line"></div>
							
							<?php if (function_exists('get_field')) {

								$home_page_block_2 = get_field('home_page_block_2');

								foreach($home_page_block_2 as $home_page_block_2){

									$title = $home_page_block_2['title'];
									$info = $home_page_block_2['info'];
									$link_url = $home_page_block_2['link_url'];
									$image = $home_page_block_2['image'];	
							?>
							<!-- title -->
							<p><strong><?php echo$title; ?></strong></p>

							<!-- information -->
							<p><?php echo$info; ?></p>

							<!-- link -->
							<p><a  href="<?php echo $link_url['link']; ?>" target="<?php echo $link_url['target']; ?>"><?php echo $link_url['title']; ?></a></p>
							
							<?php

								}
							}

							?>

						</div>
						
						<div class="cell large-8 small-12 block_2">							
							<!-- image-->
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						</div>
					</div>

				</div><!-- END block 2-->

				<!-- BOTTOM container holding h1 and button -->
				<div class="row large-6 large-offset-3">

					<?php 
						
						if( have_rows('ctas') ):
						
							while( have_rows('ctas') ) : the_row();
								
								$cta = get_sub_field('cta_2');

								$header = $cta['heading'];
								$button = $cta['button'];
								?>
									<!-- title -->
									<h1 class="text-center grey top-space "><?php echo $header; ?></h1>
									<!-- button hides on mobile -->
									<a class="button float-center top-space hide-for-small-only"  href="<?php echo $button['link']; ?>" target="<?php echo $button['target']; ?>"><h4><?php echo $button['title']; ?></h4></a>

									<!-- button shows on mobile -->
									<a class="button button-mobile float-center show-for-small-only"  href="<?php echo $button['link']; ?>" target="<?php echo $button['target']; ?>"><h4><?php echo $button['title']; ?></h4></a>



									
								<?php

							endwhile;
						
						endif;
						
					?>

				</div>
			
		</main><!-- #main -->

	</div><!-- #primary -->

<?php
// imports the footer
get_footer();
