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
        <div class="cell large-offset-2 small-offset-1">

            <!-- banner at top of page -->
            <?php 

    if (function_exists('get_field')) {
    $descriptions = get_field('descriptions');

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

			foreach($programs as $program){
				$name = $program['name'];
				$description = $program['description'];
				$button = $program['button'];
				$cost = $program['cost'];
                $program_image = $program['program_image'];
                $ytvideo = $program['ytvideo'];

	?>


            <!-- create boxes to hold page content -->
            <div class="cell large-4 small-10">
                <!-- box cover image -->
                <img src="<?php echo$program_image; ?>" alt="<?php echo $image['alt']; ?>" />

            
                        <!-- Accordion tab title -->
                        <h2>
                            <?php echo$name; ?>
                        </h2>

                        <!-- Accordion tab content -->
                        <div class="coreContent">
                            <p>
                                <?php echo$description; ?>
                            </p>
                            <p>
                                <?php echo$cost; ?>
                            </p>
                            <button class=" button" href="<?php echo$button; ?>">REGISTER NOW</button>

                        </div>
                
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

<div class="grid-x videoContainer1">
    <div class="cell large-10 large-offset-4 small-10 small-offset-1 progVideo">
      
        <?php echo$ytvideo; ?>
      
    </div>
    </div>

    <?php
                

            }
        }
        
        ?>



  </div>
  </div>

    <?php
// imports the footer
get_footer();