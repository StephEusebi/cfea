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

    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <h1 class="programsTitle">CURRENT PROGRAMS</h1>

			<p class="programInfo">Whether you are new to the fitness industry and are looking to become certified to find you first job or are a seasoned veteran looking for advanced certification and continuing education we are here to help you. The CFEA’s mandate is simple.  To bring together the most recognized education brands in fitness today while giving you an amazing live education experience.  Our award-winning team of highly trained and experienced Master Trainers, Instructors and PRO TRAINERS are among the best fitness educators in the industry today!</p>
			
			<p>Let us help you take your fitness career to the next level!</p>


            <!-- <ul class="accordion plAccordian" data-accordion>
				<li class="accordion-item accordianStyle" data-accordion-item>

					<a href="#" class="accordion-title plAccordianTitle">COREFX</a>

					<div class="accordion-content" data-tab-content>
					<p>COREFX has created new and technologically-advanced training methods so as to connect the disparity 
			between persistent physical activity and authentic physical improvement.</p>
					<a href="corefx" class="button">Learn More</a>
					</div>
				</li>

				<li class="accordion-item accordianStyle" data-accordion-item>

					<a href="#" class="accordion-title plAccordianTitle">TRIGGERPOINT</a>

					<div class="accordion-content" data-tab-content>
					<p>TriggerPoint Performance is a patented brand that improves life by focusing on 
			energizing people with the radical organization in Myofascial Compression techniques 
			as well as branded goods that conserve, control increase the physical movement of human 
			life-forms.</p>
					<a href="triggerpoint" class="button">Learn More</a>
					</div>
				</li>

				<li class="accordion-item accordianStyle" data-accordion-item>

					<a href="#" class="accordion-title plAccordianTitle">CANADIAN RED CROSS</a>

					<div class="accordion-content" data-tab-content>
					<p>CPR/AED</p>
					<a href="redcross" class="button">Learn More</a>
					</div>
				</li>

				<li class="accordion-item accordianStyle" data-accordion-item>

					<a href="#" class="accordion-title plAccordianTitle">VIPR</a>

					<div class="accordion-content" data-tab-content>
					<p>The disparity between movement and power exercises is linked by ViPR. 
			It merges complete body movement with weight, thereby improving the vivacity, implementation along with 
			overhauling the aspirations of customers and sportspeople.</p>
					<a href="vipr" class="button">Learn More</a>
					</div>
				</li>
			</ul> -->

        </main>
        <!-- #main -->
    </div>
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