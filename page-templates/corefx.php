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

<div class="grid-container">
    
        
        <!-- banner at top of page -->
        <?php 
        if (function_exists('get_field')) {
        $descriptions = get_field('descriptions');

        foreach($descriptions as $description){
            $top_desc = $description['top_desc'];
            $program_banner = $description['program_banner'];
        ?>


    <!-- BANNER AND TOP DESCRIPTION -->
           
                    <!-- banner at top of page -->
                    <img src="<?php echo$program_banner; ?>" alt="corefx banner" id="corefxBanner" class="large-centered columns" />
                  
                    <!-- program description -->
                    <div class="large-centered columns small-10 progDesc"><?php echo$top_desc; ?></div>
                    <div class="cell small-10 medium-10 large-centered dividerBar"></div>  
           
    
            
            <?php
            

        }
    }

    ?>
    <!-- END OF BANNER AND TOP DESCRIPTION -->


        <div class="grid-x grid-margin-x">

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

                            <!-- Accordion tab title -->
                            <div class="large-centered columns small-10 coreContent">
                                <h2>
                                    <?php echo$name; ?>
                                </h2>
                            </div>
                        
                            <div class="large-centered columns small-10 coreContent">
                                <!-- program image -->
                                <img src="<?php echo $program_image; ?>" alt="<?php echo $program_image['alt']; ?>" id="<?php echo $program_image['id']; ?>" />
                                <p id="coreDesc">
                                    <?php echo$description; ?>
                                </p>
                            </div>

                            <div class="large-centered columns small-10 coreContent">
                                <p>
                                    <?php echo$cost; ?>
                                </p>
                                <button class="button" href="<?php echo$button; ?>">REGISTER NOW</button>    
                            </div>  

                            <div class="cell small-10 medium-10 large-centered dividerBar"></div>                

                <?php

            }
        }

        ?>

        </div>

           

            <?php 

    if (function_exists('get_field')) {
    $programs = get_field('programs');

        foreach($programs as $program){
            $ytvideo = $program['ytvideo'];
    ?>

        <div class="grid-x coreContent">
            <div class="large-centered columns small-10 progVideo">
                <?php echo$ytvideo; ?>
            </div>
        </div>
        <?php
                }
            }
        ?>


 
</div>

    <?php
// imports the footer
get_footer();