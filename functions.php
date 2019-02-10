<?php
/**
 * cfea theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Steph_Eusebi
 */

/**
 * Theme Setup
 */
require get_template_directory() . '/inc/setup.php';

 /**
 * Enqueue scripts and styles.
 */


function stepheusebi_scripts() {
	wp_enqueue_style( 'cfea-theme-style', get_stylesheet_uri() );

	// Foundation
	wp_enqueue_script( 'what-input', get_template_directory_uri() . '/js/vendor/what-input.min.js', array('jquery'), '', true );
	wp_enqueue_style( 'foundation-style', get_template_directory_uri() . '/css/vendor/foundation.min.css', array(), 'all' );
	wp_enqueue_script( 'foundation-app', get_template_directory_uri() . '/js/app.js', array('jquery'), '', true );
	wp_enqueue_script( 'foundation', get_template_directory_uri() . '/js/vendor/foundation.min.js', array('jquery'), '', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'stepheusebi_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

