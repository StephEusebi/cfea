<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cfea
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet"> 
	<link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header">


	<div class="grid-x grid-margin-x">
          <div class="cell small-12 med- large-6">
		<!-- Logo Image -->
		<div class="logoImg"><img src="/wp-content/themes/cfea/assets/img/logo.png" alt="logo" /></div>

		  </div>
		  <!--Menu (thats opens to accordion)-->
          <div class="cell small-12 med-6 large-6">
		
			<div class="title-bar Nav" data-responsive-toggle="example-animated-menu" data-hide-for="medium">
  			<button class="menu-icon" type="button" data-toggle></button>
 			 <div class="title-bar-title"></div>
			</div>

			<!--links to primary menu-->
			<div class="top-bar" id="example-animated-menu" data-animate="hinge-in-from-top hinge-out-from-top">
  <div class="top-bar-left">
    <ul class="dropdown menu" data-dropdown-menu>
	<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
    </ul>
  </div>
</div>

		  </div>
        </div>



		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<?php
			else :
				?>
				<?php
			endif;
			$cfea_description = get_bloginfo( 'description', 'display' );
			if ( $cfea_description || is_customize_preview() ) :
				?>
			<?php endif; ?>
		</div>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
