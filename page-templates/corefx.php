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
    
<div class="grid-x grid-margin-x">
        <!-- banner at top of page -->
        <?php 
        if (function_exists('get_field')) {
        $descriptions = get_field('descriptions');

        foreach($descriptions as $description){
            if (!empty ($top_desc)) {
                $top_desc = $description['top_desc'];
            }
            if (!empty ($program_banner)) {
                $program_banner = $description['program_banner'];
            }
        ?>


    <!-- BANNER AND TOP DESCRIPTION -->
           
                    <!-- banner at top of page -->
                    <div class="large-centered columns large-offset-1 small-centered small-offset-1 small-10">
                    <img src="<?php echo$program_banner; ?>" alt="corefx banner" id="corefxBanner" class="large-centered columns coreContent" />
                  </div>
                    <!-- program description -->
                    <div class="large-centered columns large-offset-1 small-centered small-offset-1 small-10 progDesc"><?php echo$top_desc; ?></div>
                    <div class="cell small-10 small-offset-1 medium-10 large-centered dividerBar"></div>  
             </div>
    
            
            <?php
            

        }
    }

    ?>

    
    <!-- END OF BANNER AND TOP DESCRIPTION -->


        <div class="grid-x grid-margin-x">

        <?php 

            if (function_exists('get_field')) {
                $programs = get_field('programs');
                $counter = 0;
                foreach($programs as $program){
                    if (!empty ($name)) {
                        $name = $program['name'];
                    } 
                    if (!empty ($description)) {
                        $description = $program['description'];
                    }
                    if (!empty ($button)) {
                        $button = $program['button'];
                    }
                    if (!empty ($cost)) {
                        $cost = $program['cost'];
                    }
                    if (!empty ($program_image)) {
                        $program_image = $program['program_image'];
                    }
                    if (!empty ($ytvideo)) {
                        $ytvideo = $program['ytvideo'];
                    }

        ?>







                            <!-- Accordion tab title -->
                            <div class="large-centered columns small-10 coreContent">
                                <h2>
                                    <?php echo$name; ?>
                                </h2>
                            </div>
                        
                            <div class="large-centered columns small-10 coreContent">
                                <!-- program image -->
                                <img src="<?php echo $program_image; ?>" alt="" id="<?php echo $counter; ?>" />
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

                            <div class="cell small-10 medium-10 large-centered small-offset-1 dividerBar"></div>                

                <?php
            $counter++;
            }
        }

        ?>

        </div>

           

            <?php 

    if (function_exists('get_field')) {
    $programs = get_field('programs');

        foreach($programs as $program){
            if (!empty ($ytvideo)) {
                $ytvideo = $program['ytvideo'];
            }
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