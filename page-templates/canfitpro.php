<?php
/**
 * The template for displaying all pages
 * 
 * Template Name: canfitpro Page
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
        <div class="large-offset-2 ">

            <!-- banner at top of page -->
            <div class="cell large-8">
                <img src="/wp-content/themes/cfea/assets/img/canfitprologo.png" alt="canfitpro logo" class="cell large-12" id="canfitproLogo" />
            </div>

            <!-- <h2 class="cell large-12 progHead">COREFX</h2> -->
            <div class="grid-x grid-margin-x">
                <p class="cell large-10 progDesc">Canfitpro is the most recognized provider of fitness certification in Canada today. Through our partnership with Allied Education we are able to offer a wide variety canfitpro certification courses including:</p>
                <ul class="cell large-10 progDesc">
                    <li>Personal Trainer Specialist (PTS)</li>
                    <li>Fitness Instructor Specialist (FIS)</li>
                    <li>Healthy Eating & Weight Loss Coach (HWL)</li>
                    <li>Pre & Post Natal Specialist (PFS)</li>
                    <li>First Aid & Cardio Pulmonary Resuscitation (First Aid &CPR)</li>
                </ul>

                <p class="cell large-10 progDesc">Whether you are new to the fitness industry looking to become certified or a seasoned veteran looking for advanced certification and continuing education we can help. </p>

            </div>

        </div>
    </div>

    <?php
// imports the footer
get_footer();