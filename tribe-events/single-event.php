<?php
/**
 * Single Event Template
 * A single event. This displays the event title, description, meta, and
 * optionally, the Google map for the event.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/single-event.php
 *
 * @package TribeEventsCalendar
 * @version  4.3
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

$events_label_singular = tribe_get_event_label_singular();
$events_label_plural = tribe_get_event_label_plural();

$event_id = get_the_ID();

?>



<div id="primary" class="content-area">
		<main id="main" class="site-main col-md-12" role="main">
<div class="row">
<div class="col-md-7">

    <h1 class="news-page-heading">EVENT</h1>
	 
                
         
	
        <div class="entry-content">
    
		<div class="entry-meta">
 <?php while ( have_posts() ) :  the_post(); ?> 
              
<div class="news-date">
<?php echo tribe_get_start_date( null, false, 'F d, Y' );?>
</div>        
<?php the_title( '<h1 class="news-title">', '</h1>' ); ?>

<div class="news-text"><?php the_content(); ?></div>
<?php endwhile; ?>

    
		</div><!-- .entry-meta -->
	
	 
	 
		
	</div><!-- .entry-content -->

	

   	
	
</div><!-- .col-md-7 -->

<div class="col-md-5">test
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
 

