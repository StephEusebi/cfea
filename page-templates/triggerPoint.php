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

    <?php 

    if (function_exists('get_field')) {
    $descriptions = get_field('descriptions');

    foreach($descriptions as $description){
        $top_desc = $description['top_desc'];
        $program_banner = $description['program_banner'];
   

?>


        <div class="large-offset-2 small-offset-1">

            <!-- banner at top of page -->
            <div class="cell large-12">
                <img src="<?php echo$program_banner; ?>" alt="triggerPoint banner" id="trigBanner" />
            </div>

            <!-- program description -->
            <div class="grid-x grid-margin-x">

<!-- program description -->
<div class="cell large-10 small-10 progDesc"><?php echo$top_desc; ?>
</div>

</div>

            <?php
            

        }
    }
    
?>

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
                $ytvideo = $program['ytvideo'];

	?>

                    <!-- group of smaller boxes for workshop -->
                    <div class="cell large-5 small-10">

                        <img src="<?php echo$program_image; ?>" alt="<?php echo $image['alt']; ?>" />

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

        <?php 

if (function_exists('get_field')) {
$programs = get_field('programs');

    foreach($programs as $program){
     
        $ytvideo = $program['ytvideo'];

?>

<div class="cell large-8 large-offset-4 small-10 small-offset-1 progVideo">
      
        <?php echo$ytvideo; ?>
      
    </div>

    <?php
                

            }
        }
        
        ?>



        <!-- insert video -->
        <!-- <div class="large-offset-3 ">
            <div class="cell large-8 rcVideo">
                <iframe width="798" height="449" src="https://www.youtube.com/embed/GYpCABKHsFw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div> -->

        <!-- bottom page logo -->
        <!-- <div class="cell large-8">
            <img src="/wp-content/themes/cfea/assets/img/trigPoint.jpg" alt="triggerPoint logo" class="cell large-12" id="trigLogo2" />
        </div>
    </div> -->

    <?php
// imports the footer
get_footer();