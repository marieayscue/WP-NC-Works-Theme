<?php
/**
 * Template Name: Success Stories
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package start
 */

get_header(); ?>


<div id="primary" class="content-area">
		<main id="main" class="site-main col-md-12" role="main">
<div class="row">
<div class="col-md-8">

    <h1 class="news-page-heading">SUCCESS STORY</h1>
	<?php
$newsposts = get_posts( array(
    'numberposts' => 1,
	'category'       => 194
) );
if ( $newsposts ) {
	
    foreach ( $newsposts as $post ) :
        setup_postdata( $post ); 
		$lastpostid = $post->ID;
		?>
                
         
	
        <div class="entry-content">
    
		<div class="entry-meta">
              
         <?php 
	
	 if (has_post_thumbnail( $lastpostid ) ) { ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $lastpostid ), 'start-med-thumb' );
$image = $image[0]; ?>
<img src="<?php echo $image ?>" align="right" style="margin-left:10px;margin-bottom:10px;"/>
	 
<?php } ?>	 

<div class="news-date">
			<?php the_date(); ?>
		</div> <!-- .news-date --> 
        <?php the_title( '<div class="news-title">', '</div>' ); ?>
        
			 
	<div class="news-text"><?php the_content(); ?></div>
		<?php
			/* wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'start' ),
				'after'  => '</div>',
			) ); */
		?>
    
		</div><!-- .entry-meta -->
	
	 
	 
		
	</div><!-- .entry-content -->

	

    <?php
    endforeach; 
    wp_reset_postdata();
}


?> 	
	
</div><!-- .col-md-8 -->

<div class="col-md-4">
<h1 class="news-other-heading">OTHER SUCCESSES</h1>
<?php
$successposts = get_posts( array(
    'posts_per_page' => 6,
	'category'       => 194,
	'exclude'       => $lastpostid
) );
 
if ( $successposts ) {
    foreach ( $successposts as $post ) :
        setup_postdata( $post ); 
		?>
        <h1 class="news-other-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <?php
    endforeach; 
    wp_reset_postdata();
}


?> 
</div><!-- .col-md-4 -->
</div><!-- .row -->
</main><!-- #main -->
	</div><!-- #primary -->
  

<?php get_sidebar(); ?>
<?php get_footer(); ?>
