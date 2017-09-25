<?php
/**
 * The template used for displaying page content in page_three-column-template.php
 *
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
        
       
        
        <div class="row"> 
 				<!-- left column main content and mobile toggle buttons -->
    	   		<div class="col-md-4">
                 <!-- left column header is optional. Wrap in if statement to avoid empty divs -->
                 <?php if( get_field('3_col_left_col_header') ): ?>
                <!-- left column header -->
                <div class="three_col_left_col_header" style="background-color:<?php the_field('3_col_left_col_header_color'); ?>">
                <?php the_field('3_col_left_col_header'); ?>
                </div><!-- .three_col_left_col_header -->
                 <?php endif; ?>
                <!-- if the left column main content is set to collapse on mobile, add a button, and collapse panel with conent -->
                 <?php if (get_field('3_col_left_col_mobile_collapse') == "Yes" ) { ?>
       			<div class="three_col_left_column">
				<a class="btn btn-success sharp visible-xs" style="color:#ffffff;" data-toggle="collapse" data-target="#collapse-left-col">
				<?php the_field('3_col_left_col_collapse_button'); ?>
                </a>
				<div id="collapse-left-col" class="narrow-results collapse">
				<?php the_field('3_col_left_column'); ?>
    			</div><!-- .narrow-results collapse -->
    			</div><!-- .three_col_left_column -->
   				<?php }
				else { // if the left column main content is NOT set to collapse just display the content
				?>
    			<div class="three_col_left_column">
   				<?php the_field('3_col_left_column'); ?>
    			</div><!-- .three_col_left_column -->
   				 <?php  
				}
				?>
				
				<!-- left column footer --> 
                <!-- left column footer is optional. Wrap in if statement to avoid empty divs --> 
                <?php if( get_field('3_col_left_col_footer') ): ?>             
                <div class="three_col_left_col_footer">
                <?php the_field('3_col_left_col_footer'); ?>
                </div><!-- .three_col_left_col_footer -->
                <?php endif; ?>
				</div><!-- .col-md-4 / end left column -->
                
                
                
                 <!-- middle column -->
    	   		<div class="col-md-4">
                 <!-- middle column header is optional. Wrap in if statement to avoid empty divs -->
                <?php if( get_field('3_col_middle_col_header') ): ?>
                <!-- middle column header -->
                <div class="three_col_middle_col_header"  
                style="background-color:<?php the_field('3_col_middle_col_header_color'); ?>">
                <?php the_field('3_col_middle_col_header'); ?>
                </div><!-- .three_col_middle_col_header -->
                 <?php endif; ?>                        
                <!-- if the middle column main content is set to collapse on mobile, add a button, collapse panel with conent -->
                 <?php if (get_field('3_col_middle_col_mobile_collapse') == "Yes" ) { ?>
       			<div class="three_col_middle_column">
				<a class="btn btn-success sharp visible-xs"  style="color:#ffffff;" data-toggle="collapse" data-target="#collapse-middle-col">
				<?php the_field('3_col_middle_col_collapse_button'); ?>
                </a>
				<div id="collapse-middle-col" class="narrow-results collapse">
				<?php the_field('3_col_middle_column'); ?>
    			</div><!-- .narrow-results collapse -->
    			</div><!-- .three_col_middle_column -->
   				<?php }
				else { // if the middle column main content is NOT set to collapse just display the content
				?>
    			<div class="three_col_middle_column">
   				<?php the_field('3_col_middle_column'); ?>
    			</div><!-- .three_col_middle_column -->
   				 <?php  
				}
				?>
				
				<!-- middle column footer is optional. Wrap in if statement to avoid empty divs --> 
                <?php if( get_field('3_col_middle_col_footer') ): ?>                 
                <div class="three_col_middle_col_footer">
                <?php the_field('3_col_middle_col_footer'); ?>
                </div><!-- .three_col_middle_col_footer -->
                 <?php endif; ?>
				</div><!-- .col-md-4 / end middle column -->
                
                
                
                <!-- right column -->
    	   		<div class="col-md-4">
                <!-- right column header is optional. Wrap in if statement to avoid empty divs -->
                <?php if( get_field('3_col_right_col_header') ): ?>
                <!-- right column header -->
                <div class="three_col_right_col_header"  
                style="background-color:<?php the_field('3_col_right_col_header_color'); ?>">
                <?php the_field('3_col_right_col_header'); ?>
                </div><!-- .three_col_right_col_header -->
                 <?php endif; ?>                         
                <!-- if the right column main content is set to collapse on mobile, add a button, collapse panel with conent -->
                 <?php if (get_field('3_col_right_col_mobile_collapse') == "Yes" ) { ?>
       			<div class="three_col_right_column">
				<a class="btn btn-success sharp visible-xs" style="color:#ffffff;" data-toggle="collapse" data-target="#collapse-right-col">
				<?php the_field('3_col_right_col_collapse_button'); ?>
                </a>
				<div id="collapse-right-col" class="narrow-results collapse">
				<?php the_field('3_col_right_column'); ?>
    			</div><!-- .narrow-results collapse -->
    			</div><!-- .three_col_right_column -->
   				<?php }
				else { // if the right column main content is NOT set to collapse just display the content
				?>
    			<div class="three_col_right_column">
   				<?php the_field('3_col_right_column'); ?>
    			</div><!-- .three_col_right_column -->
   				 <?php  
				}
				?>
				
				<!-- right column footer is optional. Wrap in if statement to avoid empty divs --> 
                <?php if( get_field('3_col_right_col_footer') ): ?>                 
                <div class="three_col_right_col_footer">
                <?php the_field('3_col_right_col_footer'); ?>
                </div><!-- .three_col_right_col_footer -->
                 <?php endif; ?>
				</div><!-- .col-md-4 / end right column -->
                
                
                
                
                
        </div><!-- .row -->
               
     
	</div><!-- .entry-content -->

	
    
</article><!-- #post-## -->


