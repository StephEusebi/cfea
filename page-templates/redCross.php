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
<<<<<<< HEAD
<div class="grid-container">
    <div class="grid-x grid-margin-x">
        <div class="cell large-offset-2 small-offset-1">

            <!-- banner at top of page -->
            <?php 

    if (function_exists('get_field')) {
    $descriptions = get_field('descriptions');

    // pull in the main page description and add the large program banner at the top of the page
    foreach($descriptions as $description){
        $top_desc = $description['top_desc'];
        $program_banner = $description['program_banner'];


                ?>


<!-- BANNER AND TOP DESCRIPTION -->
   <div class="grid-container">
        <div class="grid-x grid-margin-x">

                <!-- banner at top of page -->
                <div class="cell large-12">
                    <img src="<?php echo$program_banner; ?>" alt="corefx banner" id="corefxBanner" />
                </div>
            
                <!-- program description -->
                <div class="cell large-10 small-10 progDesc"><?php echo$top_desc; ?></div>

                <!-- bar added between the description and the courses -->
                <div class="cell small-10 medium-10 large-10 dividerBar"></div>  
        </div>
   
        
=======
>>>>>>> programs5

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
            <div class="grid-x grid-margin-x">
                    <!-- banner at top of page -->
                    <div class="cell large-12">
                        <img src="<?php echo$program_banner; ?>" alt="corefx banner" id="corefxBanner" />
                    </div>
                    <!-- program description -->
                    <div class="cell large-10 small-10 progDesc"><?php echo$top_desc; ?></div>
                    <div class="cell small-10 medium-10 large-10 dividerBar"></div>  
            </div>
    
            
            <?php
            

        }
    }

<<<<<<< HEAD
            // pull in the program name, description, button, cost, program image and video for each of the courses
			foreach($programs as $program){
				$name = $program['name'];
				$description = $program['description'];
				$button = $program['button'];
				$cost = $program['cost'];
                $program_image = $program['program_image'];
                $ytvideo = $program['ytvideo'];
=======
    ?>
    <!-- END OF BANNER AND TOP DESCRIPTION -->
>>>>>>> programs5


        <div class="grid-x grid-margin-x">

<<<<<<< HEAD
            
                        <!-- Accordion tab title -->
                        <div class="cell large-10 small-10 coreContent">
                            <h2>
                                <!-- name of the program -->
                                <?php echo$name; ?>
                            </h2>
                        </div>
                       
                        <div class="cell large-10 small-10 coreContent">
                           
                             <!-- program image -->
                             <img src="<?php echo$program_image; ?>" alt="<?php echo$program_image['alt']; ?>" id="<?php echo$program_image['id']; ?>" />
                             <p id="coreDesc">

                             <!-- program description -->
                                <?php echo$description; ?>
                            </p>
                        </div>

                         <div class="cell large-10 small-10 coreContent">
                            <p>
                                <!-- program cost -->
                                <?php echo$cost; ?>
                            </p>

                            <!-- button to sign up for the program -->
                            <button class="button" href="<?php echo$button; ?>">REGISTER NOW</button>    
                        </div>  

                        <!-- bar added between the different courses -->
                        <div class="cell small-10 medium-10 large-10 dividerBar"></div>                
=======
        <?php 
>>>>>>> programs5

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
                            <div class="cell large-10 small-10 coreContent">
                                <h2>
                                    <?php echo$name; ?>
                                </h2>
                            </div>
                        
                            <div class="cell large-10 small-10 coreContent">
                                <!-- program image -->
                                <img src="<?php echo$program_image; ?>" alt="<?php echo$program_image['alt']; ?>" id="<?php echo$program_image['id']; ?>" />
                                <p id="coreDesc">
                                    <?php echo$description; ?>
                                </p>
                            </div>

                            <div class="cell large-10 small-10 coreContent">
                                <p>
                                    <?php echo$cost; ?>
                                </p>
                                <button class="button" href="<?php echo$button; ?>">REGISTER NOW</button>    
                            </div>  

                            <div class="cell small-10 medium-10 large-10 dividerBar"></div>                

                <?php

            }
        }

        ?>

<<<<<<< HEAD

// pull in the video 
if (function_exists('get_field')) {
$programs = get_field('programs');
=======
        </div>
>>>>>>> programs5

           

            <?php 

<<<<<<< HEAD
<div class="grid-x coreContent">

        <!-- add video -->
    <div class="cell large-10 small-10 progVideo">
      
        <?php echo$ytvideo; ?>
      
    </div>
</div>
=======
    if (function_exists('get_field')) {
    $programs = get_field('programs');
>>>>>>> programs5

        foreach($programs as $program){
            $ytvideo = $program['ytvideo'];
    ?>

        <div class="grid-x coreContent">
            <div class="cell large-10 small-10 progVideo">
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