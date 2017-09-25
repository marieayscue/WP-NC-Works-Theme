<?php
/**
 * @package start
 */
?>

 
        
        
    
        

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
       
		 
	</header><!-- .entry-header -->
    
   

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'start' ),
				'after'  => '</div>',
			) );
		?>
        
        <!-- left column header -->
      
        <div class="row hidden-xs">
        <div class="col-md-6">
        <!-- left column header is optional. Wrap in if statement to avoid empty divs -->
                 <?php if( get_field('2_col_left_col_header') ): ?>
                <!-- left column header -->
                <div class="two_col_left_col_header home-news-button" style="background-color:<?php the_field('2_col_left_col_header_color'); ?>">
                <?php the_field('2_col_left_col_header'); ?>
                </div><!-- .two_col_left_col_header -->
                 <?php endif; ?>
       </div><!-- .col-md-6 -->
       <!-- right column header -->
        <div class="col-md-6">
        <!-- right column header is optional. Wrap in if statement to avoid empty divs -->
                <?php if( get_field('2_col_right_col_header') ): ?>
                <!-- right column header -->
                <div class="two_col_right_col_header"  
                style="background-color:<?php the_field('2_col_right_col_header_color'); ?>">
                <?php the_field('2_col_right_col_header'); ?>
                </div><!-- .two_col_right_col_header -->
                 <?php endif; ?>
       </div><!-- .col-md-6 -->    
        
        </div><!-- .row -->
        
        
        <div class="row"> 
 				<!-- left column main content and mobile toggle buttons -->
    	   		<div class="col-md-6">
                <!-- if the left column main content is set to collapse on mobile, add a button, and collapse panel with conent -->
                 <?php if (get_field('2_col_left_col_mobile_collapse') == "Yes" ) { ?>
       			<div class="two_col_left_column">
				<a class="btn btn-success sharp visible-xs" data-toggle="collapse" data-target="#collapse-left-col">
				<?php the_field('2_col_left_col_collapse_button'); ?>
                </a>
				<div id="collapse-left-col" class="narrow-results collapse">
				<?php the_field('2_col_left_column'); ?>
    			</div><!-- .narrow-results collapse -->
    			</div><!-- .two_col_left_column -->
   				<?php }
				else { // if the left column main content is NOT set to collapse just display the content
				?>
    			<div class="two_col_left_column">
   				<?php the_field('2_col_left_column'); ?>
    			</div><!-- .two_col_left_column -->
   				 <?php  
				}
				?>
				
				<!-- left column footer --> 
                <!-- left column footer is optional. Wrap in if statement to avoid empty divs --> 
                <?php if( get_field('2_col_left_col_footer') ): ?>             
                <div class="two_col_left_col_footer">
                <?php the_field('2_col_left_col_footer'); ?>
                </div><!-- .two_col_left_col_footer -->
                <?php endif; ?>
				</div><!-- .col-md-6 / end left column -->
                
                <!-- right column -->
    	   		<div class="col-md-6">
                                         
                <!-- if the right column main content is set to collapse on mobile, add a button, collapse panel with conent -->
                 <?php if (get_field('2_col_right_col_mobile_collapse') == "Yes" ) { ?>
       			<div class="two_col_right_column">
				<a class="btn btn-success sharp visible-xs" data-toggle="collapse" data-target="#collapse-right-col">
				<?php the_field('2_col_right_col_collapse_button'); ?>
                </a>
				<div id="collapse-right-col" class="narrow-results collapse">
				<?php the_field('2_col_right_column'); ?>
    			</div><!-- .narrow-results collapse -->
    			</div><!-- .two_col_right_column -->
   				<?php }
				else { // if the right column main content is NOT set to collapse just display the content
				?>
    			<div class="two_col_right_column">
   				<?php the_field('2_col_right_column'); ?>
    			</div><!-- .two_col_right_column -->
   				 <?php  
				}
				?>
				
				<!-- right column footer is optional. Wrap in if statement to avoid empty divs --> 
                <?php if( get_field('2_col_right_col_footer') ): ?>                 
                <div class="two_col_right_col_footer">
                <?php the_field('2_col_right_col_footer'); ?>
                </div><!-- .two_col_right_col_footer -->
                 <?php endif; ?>
				</div><!-- .col-md-6 / end right column -->
                
                
                
                
                
        </div><!-- .row -->
               
     
	</div><!-- .entry-content -->

	
    
</article><!-- #post-## -->


