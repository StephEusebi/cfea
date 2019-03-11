<?php
/**
 * The template for displaying all pages
 * 
 * Template Name: ViPR Page
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
            <div class="cell large-8">
                <img src="/wp-content/themes/cfea/assets/img/viprBan2.png" alt="vipr banner" id="viprBanner" />
            </div>

            <!-- <img src="/wp-content/themes/cfea/assets/img/vipr.jpg" alt="vipr logo" class="cell large-12" id="viprLogo" /> -->

            <div class="grid-x grid-margin-x">
                <!-- <h2 class="cell large-12 progHead">ViPR</h2> -->
                <p class="cell large-10 small-10 progDesc">The disparity between movement and power exercises is linked by ViPR. It merges complete body movement with weight, thereby improving the vivacity, implementation along with overhauling the aspirations of customers and sportspeople. ViPR ushers in a new perception in fitness and athletic training – Loaded Movement Training.</p>

                <p class="cell large-10 small-10 progDesc">ViPR was stimulated by farm youngsters who moved with weights on a daily basis and who were more powerful than any other contender in athletics. Using ViPR, we can turn out farm-toughened physique everywhere, sans setting foot on a farm, without having to carry out any hard work in an entertaining, harmless and efficient style.</p>

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
                                $ytvideo = $program['ytvideo'];

					?>

                    <!-- group of smaller boxes for workshop -->
                    <div class="cell large-10 small-10">

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




        <!-- <div class="large-offset-3 ">
            <div class="cell large-8 rcVideo">
                <iframe width="798" height="449" src="https://www.youtube.com/embed/AWVC2cQqRqo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div> -->

    <!-- </div> -->
    <?php
// imports the footer
get_footer();