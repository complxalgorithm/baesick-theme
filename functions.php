<?php
/**
 * @package WordPress
 * @subpackage Baesick-Theme
 */

//Drag and drop menu support
register_nav_menu( 'primary', 'Primary Menu' );
//This theme uses post thumbnails
add_theme_support( 'post-thumbnails' );
//Apply do_shortcode() to widgets so that shortcodes will be executed in widgets
add_filter( 'widget_text', 'do_shortcode' );

//Widget support for a right sidebar
register_sidebar( array(
	'name' => 'Right Sidebar',
	'id' => 'right-sidebar',
	'description' => 'Widgets in this area will be shown on the right-hand side.',
	'before_widget' => '<div id="%1$s">',
	'after_widget'  => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>'
));

//Widget support for the footer
register_sidebar( array(
	'name' => 'Footer Sidebar',
	'id' => 'footer-sidebar',
	'description' => 'Widgets in this area will be shown in the footer.',
	'before_widget' => '<div id="%1$s">',
	'after_widget'  => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>'
));

//Enqueue_styles
if ( ! function_exists( 'Wps_load_styles' ) ) {
function Wps_load_styles() {
    
    // skeleton
	wp_register_style( 'skeleton-style', get_template_directory_uri() . '/style.css');
	wp_register_style( 'skeleton-base', get_template_directory_uri() . '/stylesheets/base.css' );

	wp_enqueue_style( 'skeleton-base' );
	wp_enqueue_style( 'skeleton-style' );
    
    // bootstrap
    wp_register_style( 'bootstrap-base', get_template_directory_uri() . '/stylesheets/base-styles.css' );
    wp_register_style( 'bootstrap-custom', get_template_directory_uri() . '/stylesheets/custom-styles.css' );
    
    wp_enqueue_style( 'boostrap-base' );
    wp_enqueue_style( 'boostrap-custom' );

}
add_action('wp_enqueue_scripts', 'Wps_load_styles');
} // endif
