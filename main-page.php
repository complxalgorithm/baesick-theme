<?php
/**
 * Template Name: Main Page Template
 * Description: The default page template
 *
 * @package WordPress
 * @subpackage Baesick-Theme
 */

get_header(); 
get_template_part( 'top-bar', 'index' );
get_template_part( 'menu', 'index' ); //the  menu + logo/site title ?>

    <div class="sixteen columns alpha">
		<div id="primary" class="full-width">
			<div id="content">

				<?php the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
					<header class="entry-header">
						<h1 class="entry-title"><?php the_title(); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( 'before=<div class="page-link">' . __( 'Pages:', 'WP-Skeleton' ) . '&after=</div>' ); ?>
						<?php edit_post_link( __( 'Edit', 'themename' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-<?php the_ID(); ?> -->

				<?php comments_template( '', true ); ?>

			</div><!-- #content -->
		</div><!-- #primary -->
    </div>
                
<?php get_footer(); ?>