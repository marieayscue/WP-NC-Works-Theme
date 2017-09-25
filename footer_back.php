<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package start
 */
?>

	</div><!-- #content -->


      
 <!-- front page footer -->
         
         <?php if (is_front_page()) { ?>
         <div class="container-fluid" style="background-color:#b4d0e6;padding:0;">
         <div class="container">
         <div class="row">
<div class="col-md-7">


<h1 class="news-page-heading">NEWS</h1>
<?php
$newsposts = get_posts( array(
    'posts_per_page' => 3,
	'category'       => 195
) );
 
if ( $newsposts ) {
    foreach ( $newsposts as $post ) :
        setup_postdata( $post ); 
		$lastpostid = $post->ID; ?>
        <div class="row" style="background-color:#ffffff;padding:10px;">
	<div class="col-md-3 hidden-xs">
       <?php  if (has_post_thumbnail( $lastpostid ) ) { ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $lastpostid ), 'start-small-thumb' );
$image = $image[0]; ?>

	<img src="<?php echo $image ?>"/>
	 
<?php } ?>
</div><!-- .col-md-3 -->	
		
        
        <div class="col-md-9 col-xs-12">
        <h1 class="news-other-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <div class="news-excerpt-text hidden-xs"><?php the_excerpt(); ?> </div>
        <h1 class="news-read-more"><a href="<?php the_permalink(); ?>">Read more>></a></h1>
        
        </div><!-- .col-md-8 -->
         </div><!-- .row -->
         
        
         
         <div class="row">
         <div class="col-md-12" style="height:10px;">
         </div>
         </div>
         
    <?php
    endforeach; 
    wp_reset_postdata();
}


?>

 <div class="row">
         <div class="col-md-12" style="margin-left:18px;margin-top:5px;" >
         <a class="btn btn-sm btn-info sharp outline pull-right" href="/news-events/" role="button">View All News</a>
         </div>
         </div> 
 
</div><!-- .col-md-7 -->

<div class="col-md-5">
<h1 class="news-page-heading">EVENTS</h1>
<div class="col-md-12"  style="border: solid 1px #cccccc; margin-bottom:20px;background-color:#dae7f2;">

<?php
$eventposts = tribe_get_events( array(
    'posts_per_page' => 6,
	
) );
 
if ( $eventposts ) {
    foreach ( $eventposts as $post ) :
        setup_postdata( $post ); ?>
        <div class="row" style="border-bottom:solid 1px #cccccc;" >
        <div class="col-md-3 col-xs-3"   style="border-right:solid 2px #cccccc;height:90px;">
		<h1 class="news-short-date"><?php echo tribe_get_start_date($post, true, 'd<\b\\r>M'); ?></h1>
        </div><!-- .col-md-3 -->
        
        
        <div class="col-md-9 col-xs-9" style="height:90px;">
        <h1 class="news-small-title"><a href="<?php the_permalink(); ?>"><?php echo $post->post_title; ?></a></h1>
        </div><!-- .col-md-9 -->
        </div><!-- .row -->
        <!--<hr />-->
    <?php
    endforeach; 
    wp_reset_postdata();
}


?>


</div><!-- .col-md-12 -->

<div class="row">
         <div class="col-md-12">
<a class="btn btn-sm btn-info sharp outline pull-right" href="/events/" role="button">View All Events</a>
</div>
</div>

</div><!-- .col-md-5 -->

</div><!-- .row -->
</div><!-- .container -->
</div>
          <?php } ?>  
         <!-- end front page footer -->
         

	<footer id="colophon" class="site-footer" role="contentinfo" style="margin:0;">
    
		<div class="container">
  
        
			<div class="site-info">
				<?php dynamic_sidebar( 'footer-top' ); ?>
			</div><!-- .site-info -->
 
<div class="row"> 
<div id="footer-1" class="widget-area col-md-2 hidden-xs" role="complementary">
	<?php dynamic_sidebar( 'footer-1' ); ?>
</div>

<div id="footer-2" class="widget-area col-md-2 hidden-xs" role="complementary">
	<?php dynamic_sidebar( 'footer-2' ); ?>
</div>

<div id="footer-3" class="widget-area col-md-3 hidden-xs" role="complementary">
	<?php dynamic_sidebar( 'footer-3' ); ?>
</div>

<div id="footer-4" class="widget-area col-md-2 hidden-xs" role="complementary">
	<?php dynamic_sidebar( 'footer-4' ); ?>
</div>

<!-- only show on mobile; hide on desktop -->
<div id="footer-5" class="widget-area col-xs-6 visible-xs" role="complementary">
	<img src="/wp-content/uploads/2016/12/facebook_grey.jpg"/>
</div> 

<div id="footer-6" class="widget-area col-md-3 col-xs-6" style="text-align:right" role="complementary">
	<?php dynamic_sidebar( 'footer-5' ); ?>
</div>

<div class="row">
<!-- show on destop; hide on mobile -->
<div id="footer-5" class="widget-area col-md-12 hidden-xs" role="complementary">
	<img src="/wp-content/uploads/2016/12/facebook_grey.jpg"/>
</div> 
</div> 


</div><!--.row-->

<div class="container">
<div class="row">
<div id="footer-bottom" class="widget-area col-md-12" role="complementary">
<?php dynamic_sidebar( 'footer-bottom' ); ?>
</div>
</div>
</div><!-- .row -->

		</div><!-- .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
