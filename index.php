<?php
/**
 * @package WordPress
 * @subpackage Baesick-Theme
 */
 
    get_header();  // the Header

    get_template_part( 'top-bar', 'index' ); // the top-bar
        
    get_template_part( 'menu', 'index' ); // the menu + logo/site title

    get_template_part( 'hero', 'index' ); // the hero
    
    get_template_part( 'main-content', 'index' ); // the main content

    get_template_part( 'cta', 'index' ); // the Call-to-Action

    // ----- REMOVE THIS IF NOT NEEDED ----- //
    get_template_part( 'loop-sidebar', 'index' ); // the loop sidebar section

    get_footer(); // the Footer

?>