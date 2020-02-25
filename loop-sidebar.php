<?php 
/**
 * @package WordPress
 * @subpackage Baesick-Theme
 */
?>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center">
                <?php get_template_part( 'loop', 'index' ); ?> <!-- the loop -->
            </div>
        
            <div class="col-md-6 text-center">
                <?php get_template_part( 'sidebar', 'index' ); ?> <!-- the Sidebar -->
            </div>
        </div>
    </div>
</div>