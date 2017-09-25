<?php
/**
 * Template Name: News & Events, No Sidebar
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package start
 */

get_header(); ?>

<div id="primary" class="content-area">
		<main id="main" class="site-main col-md-12" role="main">
<div class="row">
<div class="col-md-7">


<h1 class="news-page-heading">NEWS</h1>
<?php
$newsposts = get_posts( array(
    'posts_per_page' => 6,
	'category'       => 195
) );
 
if ( $newsposts ) {
    foreach ( $newsposts as $post ) :
        setup_postdata( $post ); 
		$lastpostid = $post->ID; ?>
        <div class="row">
	<div class="col-md-5 hidden-xs">
       <?php  if (has_post_thumbnail( $lastpostid ) ) { ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $lastpostid ), 'news-thumb' );
$image = $image[0]; ?>

	<img src="<?php echo $image ?>"/>
	 
<?php } ?>
</div><!-- .col-md-4 -->	
		<div class="col-md-7 nopadding">
        <h1 class="news-other-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <div class="news-excerpt-text hidden-xs"><?php the_excerpt(); ?></div>
        <h1 class="news-read-more"><a href="<?php the_permalink(); ?>">Read more>></a></h1>
        
        </div><!-- .col-md-8 -->
        <div class="col-md-12"><hr style="height:10px;"/></div>
</div><!-- .row -->
    <?php
    endforeach; 
    wp_reset_postdata();
}

//load_more_button() 
?>

</div><!-- .col-md-7 -->

<div class="col-md-5">
<h1 class="news-page-heading">UPCOMING EVENTS</h1>
<div class="col-md-12"  style="border: solid 1px #cccccc; margin-bottom:20px;">

<?php
$eventposts = tribe_get_events( array(
    'posts_per_page' => 6,
	'start_date' => date("Y-m-d"),
	
) );
 
if ( $eventposts ) {
    foreach ( $eventposts as $post ) :
        setup_postdata( $post ); ?>
        <div class="row" style="border-bottom:solid 1px #cccccc;" >
        <div class="col-md-3 col-xs-3 divide" style="height:90px;">
		<h1 class="news-short-date pull-right"><?php echo tribe_get_start_date($post, true, 'd<\b\\r>M'); ?></h1>
        </div>
        
        
        
        <div class="col-md-9 col-xs-9" style="height:90px;">
        <h1 class="news-small-title"><a href="<?php the_permalink(); ?>"><?php echo $post->post_title; ?></a></h1>
        </div>
        </div>
        <!--<hr />-->
    <?php
    endforeach; 
    wp_reset_postdata();
}


?>


</div><!-- .col-md-12 -->

 <div class="event_full_calendar">
<a class="btn btn-primary sharp" href="/events/">VIEW FULL CALENDAR</a>
 </div>
</div><!-- .col-md-5 -->

</div><!-- .row -->
</main><!-- #main -->
	</div><!-- #primary -->
  

<?php get_sidebar(); ?>
<?php get_footer(); ?>
