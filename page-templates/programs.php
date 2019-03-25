<?php
/**
 * The template for displaying all pages
 * 
 * Template Name: Programs Page
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

get_header();

?>

<?php 
	if (function_exists('get_field')) {
	$paragraphs = get_field('paragraphs');

	foreach($paragraphs as $paragraph){
		$main_paragraph = $paragraph['main_paragraph'];
        $tag_line = $paragraph['tag_line'];
        if(!empty ($main_paragraph) || !empty($paragraph)) {
	
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <h1 class="programsTitle">CURRENT PROGRAMS</h1>

	<div class="grid-x grid-margin-x large-offset-2">

		<div class="cell large-10">

					<p class="programInfo">
						<?php echo$main_paragraph; ?> 
					</p>
					
					<p class="programTag">
						<?php echo$tag_line; ?>
					</p>

			</div>
		</div>
			<!-- Whether you are new to the fitness industry and are looking to become certified to find you first job or are a seasoned veteran looking for advanced certification and continuing education we are here to help you. The CFEA’s mandate is simple.  To bring together the most recognized education brands in fitness today while giving you an amazing live education experience.  Our award-winning team of highly trained and experienced Master Trainers, Instructors and PRO TRAINERS are among the best fitness educators in the industry today! -->

			<!-- Let us help you take your fitness career to the next level! -->


        </main>
        <!-- #main -->
	</div>
	
	<?php
        }
}
}

?>
    <!-- #primary -->

    <?php 

if (function_exists('get_field')) {
	$programs = get_field('programs');

	foreach($programs as $program){
		$name = $program['name'];
		$description = $program['description'];
		$button = $program['button'];
		$program_image = $program['program_image'];
?>
        <div class="grid-x grid-margin-x large-offset-2">

            <div class="cell large-10">

                <ul class="accordion plAccordian" data-accordion data-allow-all-closed="true">
                    <li class="accordion-item accordianStyle" data-accordion-item>
                        <!-- Accordion tab title -->
                        <a href="#" class="accordion-title plAccordianTitle">
                            <?php echo$name; ?>
                        </a>

                        <!-- Accordion tab content -->
                        <div class="accordion-content" data-tab-content>
						<div class="cell large-10">
						<img src="<?php echo$program_image; ?>" alt="<?php echo $image['alt']; ?>" class="pLandingBanner" />
            </div>
                            <p>
                                <?php echo$description; ?>
                            </p>
                            <a class="button" href="<?php echo$button; ?>">Learn More</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <?php

	}
}

?>

            <?php
get_footer();