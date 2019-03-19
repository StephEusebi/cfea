<?php
/**
 * cfea theme Theme Customizer
 *
 * @package cfea
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function cfea_customize_register( $wp_customize ) {

	// social media section
	$wp_customize->add_section (
		'cfea_social_media',
			array(
				'title' =>__('Social Media', 'cfea'),
				'capability' =>__('edit_theme_options', 'cfea'),
			)
	);


	// social media settings
	// faebook
	$wp_customize->add_setting(
		'cfea_facebook_url',
			array(
				'default'=>'https://facebook.com',
				'transport'=>'refresh',
			)
	);

	// instagram
	$wp_customize->add_setting(
		'cfea_instagram_url',
			array(
				'default'=>'https://instagram.com',
				'transport'=>'refresh',
			)
	);

	// twitter
	$wp_customize->add_setting(
		'cfea_twitter_url',
			array(
				'default'=>'https://twitter.com',
				'transport'=>'refresh',
			)
	);
	


	// social media control - access setting
	// facebook
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'cfea_facebook_url',
			array(
				'label' => 'Facebook',
				'type' => 'refresh',
				'section' => 'cfea_social_media'
			)
		)
	);

	// instagram
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'cfea_instagram_url',
			array(
				'label' => 'Instagram',
				'type' => 'refresh',
				'section' => 'cfea_social_media'
			)
		)
	);	

	// twitter
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'cfea_twitter_url',
			array(
				'label' => 'Twitter',
				'type' => 'refresh',
				'section' => 'cfea_social_media'
			)
		)
	);


	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'cfea_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'cfea_customize_partial_blogdescription',
		) );
	}

	// Add Footer Logo Section
	$wp_customize->add_section('cfea_footer',
	array(
		'title' => __('Footer','cfea'),
		'capability' => 'edit_theme_options',
		)
	);

	// adds the setting for the footer contact number
	$wp_customize->add_setting(
		'cfea_footer_contact_number'
	);
	
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'cfea_footer_contact_number',
			array(
				'label'   => __( 'Contact Number', 'cfea' ),
				'section' => 'cfea_footer',
				'type'	  => 'text'
				
			)
		)
	);

	// Add setting for Footer Contact Email 
	$wp_customize->add_setting(
		'cfea_footer_contact_email'
	);
	
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'cfea_footer_contact_email',
			array(
				'label'   => __( 'Contact Email', 'cfea' ),
				'section' => 'cfea_footer',
				'type'	  => 'text'
				
			)
		)
	);

	// Adds setting for Footer Form Name
	$wp_customize->add_setting(
		'cfea_footer_form_name'
	);
	
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'cfea_footer_form_name',
			array(
				'label'   => __( 'Form Name', 'cfea' ),
				'section' => 'cfea_footer',
				'type'	  => 'text'
			)
		)
	);
}
add_action( 'customize_register', 'cfea_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function cfea_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function cfea_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

