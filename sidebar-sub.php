<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starterpack
 */

if ( ! is_active_sidebar( 'sidebar-4' ) ) {
	return;
}
?>

<aside id="page-sub-footer" class="widget-area sub-footer-sidebar" role="complementary">
	<?php dynamic_sidebar( 'sidebar-4' ); ?>
</aside><!-- #secondary -->