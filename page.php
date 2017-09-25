<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package start
 */

get_header(); ?>

	<?php if (get_field('sidebar_placement') == "left") { ?>
    <?php get_sidebar(); ?>
	<?php } ?>
    
	<div id="primary" class="content-area">
		<main id="main" class="site-main col-md-8" role="main">
        <!--<div id="content" class="site-content" col-md-8" role="main">--> 

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php if (get_field('sidebar_placement') == "right") { ?>
    <?php get_sidebar(); ?>
<?php } ?>

<!-- left-sidebar -->

<?php get_footer(); ?>
