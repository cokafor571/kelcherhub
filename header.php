<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starterpack
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'starterpack' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<nav id="site-navigation" class="main-navigation" role="navigation">

			<?php if ( wp_is_mobile() ) { ?>

				<button class="menu-toggle" aria-controls="mobile-menu" aria-expanded="false">
					<span class="nav-icon menu-top"></span>
					<span class="nav-icon menu-middle"></span>
					<span class="nav-icon menu-bottom"></span>
				</button> 

				<?php the_custom_logo();

				wp_nav_menu( array( 'theme_location' => 'menu-3', 'menu_id' => 'mobile-menu' ) );

			} else {
				wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) );

				the_custom_logo();

				wp_nav_menu( array( 'theme_location' => 'menu-2', 'menu_id' => 'secondary-menu' ) );
			} ?>

		</nav><!-- #site-navigation -->
        
	</header><!-- #masthead -->

	<div id="content" class="site-content">
