<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package start
 */

/*if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}*/
?>

<div id="secondary" class="widget-area col-md-4" role="complementary">
<?php if( is_page()) { ?>
 
 <!-- display above main sidebar content -->
  <?php if( get_field('above_main_sidebar_content') ): ?>
  <div class="row">
    <div class="above-main-sidebar-content col-md-12 col-xs-12">
    <?php the_field('above_main_sidebar_content'); ?>
    </div>
  </div>
  <?php endif; ?>
  
  <!-- display main sidebar -->
  <div class="main-sidebar" style="background-color:<?php the_field('main_sidebar_background_color'); ?>;">
  <!-- display main sidebar header -->
  <?php if( get_field('main_sidebar_header') ): ?>
  <div class="row">
    <div class="main-sidebar-header col-md-12 col-xs-12">
    <?php the_field('main_sidebar_header'); ?>
   </div>
  </div>
  <?php endif; ?>
 
 
 <?php if (get_field('main_sidebar_mobile_collapse') == "Yes" ) { ?>
 <div class="row">
   <div class="main-sidebar-content col-md-12 col-xs-12">
	<a class="btn btn-success sharp visible-xs" data-toggle="collapse" data-target="#collapse-sidebar">
	<?php the_field ('main_sidebar_mobile_collapse_button'); ?></a>
	<div id="collapse-sidebar" class="narrow-results collapse">
	<?php the_field('main_sidebar_content'); ?>
    </div>
  </div>
  </div>
   
	<?php }
	else {
	?>
    <div class="row">
    <div class="main-sidebar-content col-md-12 col-xs-12">
   	<?php the_field('main_sidebar_content'); ?>
   </div>
   </div>
    <?php  
}
	?>
    </div>
     
    <?php if( get_field('below_main_sidebar_content') ): ?>
    <div class="row">
    <div class="below-main-sidebar-content col-md-12 col-xs-12" >
    <?php the_field('below_main_sidebar_content'); ?>
    </div>
    </div>
    <?php endif; ?>
 
 
 
<?php } ?>
<?php if( ! is_page()) { ?>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
<?php } ?>
</div><!-- #secondary -->
