<?php
/**
 * @package start
 */
?>


<div class="col-md-8">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
    <h1 class="news-page-heading bold">NEWS</h1>
	
     <!-- .entry-meta --> 
	</header><!-- .entry-header -->

	<div class="entry-content">
    
		<div class="entry-meta">
                <?php 
	 $post = $wp_query->post;
	 if (has_post_thumbnail( $post->ID ) ) { ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'start-med-thumb' );
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

	<footer class="entry-footer">
		<?php /* start_entry_footer(); */ ?> 
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
</div><!-- .col-md-8 -->
<div class="col-md-4">
<h1 class="news-other-heading">OTHER NEWS</h1>
<?php
$newsposts = get_posts( array(
    'posts_per_page' => 6,
	'category'       => 195,
	'exclude'       => $post->ID
) );
 
if ( $newsposts ) {
    foreach ( $newsposts as $post ) :
        setup_postdata( $post ); ?>
        <h1 class="news-other-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
       
    <?php
    endforeach; 
    wp_reset_postdata();
}


?> 
</div><!-- .col-md-4 -->
