<?php
/**
 * The template for displaying all pages
 * 
 * Template Name: Programs Page
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

    <?php 
	if (function_exists('get_field')) {
	$paragraphs = get_field('paragraphs');
    // HEADER PARAGRAPH AND TAGLINE 
	foreach($paragraphs as $paragraph){
		$main_paragraph = $paragraph['main_paragraph'];
        $tag_line = $paragraph['tag_line'];
        // CONDITIONAL STATEMENT - DISPLAY NONE IF NO CONTENT ENTERED
        if(!empty ($main_paragraph) || !empty($tag_line)) {

?>
        <div class="grid-x grid-margin-x boxStyles">
            <div class="large-centered columns small-10 coreContent">
                <!-- PROGRAMS LANDING HEADER -->
                <h1 class="programsTitle">CURRENT PROGRAMS</h1>
            </div>

            <div class="large-centered columns small-10 coreContent">
                <!-- MAIN PARAGRAPH -->
                <p class="programInfo">
                    <?php echo$main_paragraph; ?>
                </p>
                <!-- TAG LINE -->
                <p class="programTag">
                    <?php echo$tag_line; ?>
                </p>

            </div>
        </div>

        <?php
        } // end of conditional - main_paragraph and tag_line
} // end of foreach - paragraphs
} // end of conditional - get_field

?>

            <?php 

if (function_exists('get_field')) {
	$programs = get_field('programs');

	foreach($programs as $program){
		$name = $program['name'];
		$description = $program['description'];
		$button = $program['button'];
        $program_image = $program['program_image'];
        // CONDITIONAL STATEMENT - DISPLAY NONE IF NO CONTENT ENTERED
        if(!empty ($name)) {
?>
                <div class="grid-x grid-margin-x boxStyles">
                    <div class="cell large-10">

                        <ul class="accordion plAccordian" data-accordion data-allow-all-closed="true">
                            <li class="accordion-item accordianStyle" data-accordion-item>
                                <!-- Accordion tab title -->
                                <a href="#" class="accordion-title plAccordianTitle">
                                    <!-- PROGRAM NAME -->
                                    <?php echo$name; ?>
                                </a>

                                <!-- Accordion tab content -->
                                <div class="accordion-content" data-tab-content>
                                    <?php
                                if(!empty ($description) || !empty ($program_image)) {
                                ?>
                                        <!-- PROGRAM IMAGE -->
                                        <img src="<?php echo$program_image; ?>" alt="<?php echo $image['alt']; ?>" class="pLandingBanner" />

                                        <p>
                                            <!-- PROGRAM DESCRIPTION -->
                                            <?php echo$description; ?>
                                        </p>
                                        <!-- BUTTON - LINK TO PROGRAM CONTENT -->
                                        <?php
                                    if(!empty ($button)) {
                                        ?>
                                            <a class="button" href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>">
                                                <?php echo $button['title']; ?>
                                            </a>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <?php
                                } // end of conditional !empty - button
                } // end of conditional !empty - description and program_image
        } // end of conditional !empty - name
	} // end of foreach - programs
} // end of conditional - get_field

?>

                    <?php
// IMPORTS THE FOOTER
get_footer();