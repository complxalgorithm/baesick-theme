<?php
/**
 * @package WordPress
 * @subpackage Baesick-Theme
 */
 
    get_header();  //the Header

    get_template_part( 'top-bar', 'index' ); // the top-bar
        
    get_template_part( 'menu', 'index' ); // the menu + logo/site title

    get_template_part( 'hero', 'index' ); // the hero
    
    get_template_part( 'main-content', 'index' ); // the main content

    get_template_part( 'sidebar', 'index' ); // the Sidebar
            
    get_footer(); //the Footer 
   
?>                        
           
