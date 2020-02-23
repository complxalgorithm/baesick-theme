<?php 
/**
 * @package WordPress
 * @subpackage Baesick-Theme
 */
?>
<div class="header">  
    <div class="container-fluid">
        <div class="five columns alpha"> 
            <div class="logo">
                <a href="<?php echo home_url(); //make logo a home link?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="site logo" class="main-logo" />
                </a>
            </div>
        </div> 
    
        <div class="offset-by-one omega">

        <!--  the Menu -->
        <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>

        </div>
    </div>
</div> <!--  End blog header -->