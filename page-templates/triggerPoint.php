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

    <div class="grid-x grid-margin-x">
        <div class="large-offset-2 small-offset-1">

            <!-- banner at top of page -->
            <div class="cell large-12">
                <img src="/wp-content/themes/cfea/assets/img/triggerpointbanner.png" alt="triggerPoint banner" id="trigBanner" />
            </div>

            <!-- program description -->
            <div class="grid-x grid-margin-x">

                <p class="cell large-10 progDesc small-10">TriggerPoint Performance is a patented brand that improves life by focusing on energizing people with the radical organization in Myofascial Compression techniques as well as branded goods that conserve, control increase the physical movement of human life-forms. The goal of TriggerPoint Performance is to discover inventive ways to which people can be inspired to attain the best degree of change using providing medicinal self-care products and teachings. Our aim is to deliver the greatest user-friendly mode of goods, training, and treatment available for anyone who needs a change in lifestyle, enhanced performance or typical good health. We would like people to manage their curative care. Discover more. Have better movement.
                </p>

            </div>

            <div class="grid-x grid-margin-x ">

                <?php 

		if (function_exists('get_field')) {
			$programs = get_field('programs');

			foreach($programs as $program){
				$name = $program['name'];
				$description = $program['description'];
				$button = $program['button'];
				$cost = $program['cost'];
				$program_image = $program['program_image'];

	?>

                    <!-- group of smaller boxes for workshop -->
                    <div class="cell large-5 small-10">

                        <img src="<?php echo$program_image; ?>" alt="<?php echo $image['alt']; ?>" class="rcImg" />

                        <ul class="accordion plAccordian" data-accordion data-allow-all-closed="true">
                            <li class="accordion-item accordianStyle" data-accordion-item>
                                <!-- Accordion tab title -->
                                <a href="#" class="accordion-title pRCAccordianTitle">
                                    <?php echo$name; ?>
                                </a>

                                <!-- Accordion tab content -->
                                <div class="accordion-content" data-tab-content>
                                    <p>
                                        <?php echo$description; ?>
                                    </p>
                                    <p>
                                        <?php echo$cost; ?>
                                    </p>
                                    <button class=" button" href="<?php echo$button; ?>">REGISTER NOW</button>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <?php

		}
	}

	?>

            </div>
        </div>

        <!-- insert video -->
        <div class="large-offset-3 ">
            <div class="cell large-8 rcVideo">
                <iframe width="798" height="449" src="https://www.youtube.com/embed/GYpCABKHsFw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>

        <!-- bottom page logo -->
        <div class="cell large-8">
            <img src="/wp-content/themes/cfea/assets/img/trigPoint.jpg" alt="triggerPoint logo" class="cell large-12" id="trigLogo2" />
        </div>
    </div>

    <?php
// imports the footer
get_footer();