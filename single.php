<?php
/**
 * @package WordPress
 * @subpackage Baesick-Theme
 * This is the default page template
 */
 get_header();
?>
<?php while ( have_posts() ) : the_post(); ?>

<div class="page-hero-section">
    <div class="container">
        <h1 class="page-header"><?php the_title_attribute(); ?></h1>
    </div>
</div>
<div class="page-info">
    <div class="container">
        <main class="page" role="main">
            <div class="bcrumb-nav">
                <?php if( function_exists('yoast-breadcrumb') )
                    { yoast_breadcrumb('<p class="bcrumb">', '</p>'); } ?>
            </div>
            <article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
                <?php the_post_thumbnail(); ?>
                <?php the_content(); ?>
                <?php edit_post_link(); ?>
            </article>
        </main>
    </div>
</div>
<?php endwhile; ?>
<?php get_footer(); ?>