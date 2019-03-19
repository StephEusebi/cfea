<?php
/**
 * The template for displaying all pages
 * 
 * Template Name: RedCross Page
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
        $program_logo = $description['program_logo'];
   

?>


    <div class="large-10 large-offset-2 small-12 small-offset-1">

        <!-- main logo -->
        <div class="cell large-8 small-12">
        <img src="<?php echo$program_logo; ?>" alt="program logo" id="redCrossLogo"/>    
        </div>

        <div class="grid-x grid-margin-x">

            <!-- program description -->
            <div class="cell large-10 small-10 progDesc"><?php echo$top_desc; ?>
            </div>

        </div>

        <?php
            

        }
    }
    
?>

         <!-- <img src="/wp-content/themes/cfea/assets/img/crcLogo.jpg" alt="red cross logo" class="cell large-12 small-12" id="redCrossLogo" /> -->

       <!-- Lecture series on mouth-to-mouth resuscitation (CPR) offers the needed expertise to identify and act in response to cardiac crisis and suffocation for babies, children and adults subject to the type of CPR chosen. The training also comprises the utilization of automated external defibrillator (AED) as well as guidance that is appropriate for place of work or broad appeal. In addition, there are cutting-edge CPR recommendations. -->



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
            <div class="cell large-5 small-10">
                <!-- box cover image -->
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



 

    <!--        </div>-->
    <!-- insert video -->
    <!-- <div class="large-offset-3 ">
            <div class="cell large-8 rcVideo">
                <iframe width="798" height="449" src="https://www.youtube.com/embed/oZOrRJJt5Tk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div> -->






    <?php
// imports the footer
get_footer();
