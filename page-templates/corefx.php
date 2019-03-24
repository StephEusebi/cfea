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



    <!-- BANNER AND TOP DESCRIPTION -->    
<div class="grid-x grid-margin-x">
        <!-- section at top of page -->
        <?php 
            if (function_exists('get_field')) {
            $descriptions = get_field('descriptions');

        // pull in the advanced custom field content 
        foreach($descriptions as $description){

                       // program banner variable
                        $program_banner = $description['program_banner'];
                         //if a program banner image was provided show it, if not hide it. 
                        if (!empty ($program_banner)) {
                            ?>
                            <!-- banner at top of page -->
                                <div class="large-centered columns large-offset-1 small-centered small-offset-1 small-10">
                                    <img src="<?php echo $program_banner; ?>" alt="corefx banner" id="corefxBanner" class="large-centered columns coreContent" />
                                </div>
                            <?php 
                        }
                    ?>

                    <?php
            // program description variable
            $top_desc = $description['top_desc'];
            //if a top description was provided show it, if not hide it. 
            if (!empty ($top_desc)) {
              
        ?>
          
                    <!-- program description -->
                    <div class="large-centered columns large-offset-1 small-centered small-offset-1 small-10 progDesc"><?php echo $top_desc; ?></div>
                    <!-- dividing bar between programs -->
                    <div class="cell small-10 small-offset-1 medium-10 large-centered dividerBar"></div>  
                <?php 
            }

?>
             </div>
    
            <?php

        }
    }

    ?>
    <!-- END OF BANNER AND TOP DESCRIPTION -->


        <div class="grid-x grid-margin-x boxStyles">

        <?php 
            //get the programs acf
            if (function_exists('get_field')) {
                $programs = get_field('programs');
                $counter = 0;
                foreach($programs as $program){
                   
                    $name = $program['name'];
                   //if a program name was provided show it, if not hide it. 
                    if (!empty ($name)) {
                        ?> 
                        <!-- Accordion tab title -->
                        <div class="large-centered large-offset-1 columns small-10 coreContent">
                            <h2>
                                <?php echo $name; ?>
                            </h2>
                        </div>
                    <?php
                    } 
                    $description = $program['description'];
                    $program_image = $program['program_image'];
                    //if a description or image were provided show what was given, hide the ones not provided. 
                    if (!empty ($description) || !empty ($program_image)) {
                        ?>
                      
                            <div class="large-centered columns large-offset-1 small-10 coreContent">
                                <img align="right" src="<?php echo $program_image; ?>" alt="" class="large-3 progImages1" id="<?php echo $counter; ?>" />
                                <p id="coreDesc" class="large-7 small-10">
                                    <?php echo $description; ?>
                                </p>
                            </div>
                   

                        <?php
                    }

                    $button = $program['button'];
                    $cost = $program['cost'];

                    //if button or cost was provided show it, if not hide the ones not provided. 
                    if (!empty ($button) || !empty ($cost)) {
                       ?>

                            <div class="large-centered columns large-offset-4 small-10 coreContent">
                                <p class="cost">
                                    <!-- program cost -->
                                    <?php echo $cost; ?>
                                </p>
                                <!-- button to go register -->
                                <button class="button" href="<?php echo $button; ?>">REGISTER NOW</button>    
                            </div> 

                            <div class="cell small-10 medium-10 large-centered small-offset-1 dividerBar"></div>      
                       <?php
                    }
        ?>

                                    

                <?php
            // increment for photos
            $counter++;
            }
        }

        ?>

        </div>

            <?php 
                //get the acf content for the video
                if (function_exists('get_field')) {
                $programs = get_field('programs');

                    foreach($programs as $program){
                        $ytvideo = $program['ytvideo'];
                        //if a video link was provided show it, if not hide it. 
                        if (!empty ($ytvideo)) {
                        ?>

                                <div class="grid-x coreContent">
                                    <div class="large-centered columns large-offset-2 small-10 small-offset-1 progVideo">
                                        <!-- program related video -->
                                        <?php echo $ytvideo; ?>
                                    </div>
                                </div>
                    <?php
            }
            ?>

        <?php
                }
            }
        ?>

</div>

    <?php
// imports the footer
get_footer();