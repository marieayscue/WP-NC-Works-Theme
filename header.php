<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package start
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--<script src="http://gastoncareers.cai-dev.com/js/bootstrap-hover-dropdown.min.js"></script>-->
<script src="https://use.typekit.net/gpa7kur.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'start' ); ?></a>


	<header id="masthead" class="site-header container" role="banner">
 <?php 
$search_form = '<li><form role="search" method="get" id="header-search" class="search-form hidden-xs" action="'.esc_url( home_url( '/' ) ).'"><input      	type="text" name="s" id="s" class="search-field" /><input type="submit" class="search-submit" value=" " /></form></li>';
	
	$title_bar = '<li style="background: rgb(41, 143, 194);" class="hidden-xs"><a style="color:#ffffff;text-transform:Capitalize;" href="http://www.gastonworks.com" target="_blank">Operated By Gaston County Workforce Development Board</a></li>';
?>

<!-- logo and navigation -->

 <nav class="navbar navbar-default">
     <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	<!-- logo  -->
<div class="site-branding">
      <?php if ( has_custom_logo() ) {

					the_custom_logo();

				} else { ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
<?php } ?>
</div>

	<!-- end logo -->
    </div><!--.navbar-header -->

    <div class="collapse navbar-collapse" id="myNavbar">

<div id="topnavbar">
<?php wp_nav_menu( array( 'theme_location' => 'top-menu', 
'menu_id' => 'top-menu', 
'menu_class' => 'nav navbar-nav navbar-right',
'after' => '<div class="top-divider-vertical hidden-xs"></div>',
'items_wrap' => '<ul id = "%1$s" class = "%2$s"></li>%3$s'.$search_form. $title_bar.'</ul>',

) ); ?>	
     
</div><!-- #topnavbar -->

<div id="mainnavbar">


<?php
						// output searchform-header.php
						// output primary menu location
						wp_nav_menu( array( 
							'menu_id' => 'primary-menu', 
							/*'menu_class' => 'nav-menu nav-menu--primary' ,*/
							'menu_class' => 'nav navbar-nav navbar-right',
							//'after' => '<div class="primary-divider-vertical hidden-xs"></div>',
							//'walker'            => new wp_bootstrap_navwalker()
							'container_class' => 'nav-menu nav-menu--primary'
							//'container_class' => 'menu-primary-menu-container'
						) ); 
					?>


</div><!-- #mainnavbar -->

     
</div><!--#myNavbar-->
</nav>

<!-- end navigation -->


	</header><!-- #masthead -->
  
<div class="visible-xs" style="width:100%;background: rgb(41, 143, 194);text-align:center;vertical-align: middle;height:30px;padding-top:10px;font-size:10px;">
<a style="color:#ffffff;text-transform:Capitalize;" href="http://www.gastonworks.com" target="_blank">Operated By Gaston County Workforce Development Board</a> 
</div>  
    
 <!-- display carousel or featured image, depending on the page -->   
 <?php 
 if (is_page()) {
	 if ( is_front_page()) { 
	 
 ?>


<!-- carousel -->

<!-- ACF carousel -->

<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
  
<!-- Overlay -->
  
<div class="overlay"></div>

  
<!-- Indicators -->
  
<!--<ol class="carousel-indicators">
    
<li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
    
<li data-target="#bs-carousel" data-slide-to="1"></li>
    
</ol>
 --> 
  
<!-- Wrapper for slides -->
  
<div class="carousel-inner">

<?php
		$i =0;
		while(have_rows('slider')): the_row();
  		//vars
//$image = "";
  		$image = wp_get_attachment_image_src( get_sub_field( 'image' ), 'home-slider4' );
		$image = $image[0];
//echo $image;
  		$text =  get_sub_field('text');
  		$button_text =  get_sub_field('button_text');
		$button_link =  get_sub_field('button_link');
		
  	?>
    
<div class="item slides <?php if ($i===0): echo('active'); endif; ?>">
      
<div class="slide-<?php echo ($i) ?>"></div>
      
<div class="hero">        
        
<hgroup>
            
<h1><?php echo ($text); ?></h1>        
            
</hgroup>       
        
<div class="home-news-button">

<?php if (get_sub_field('open_link_in_new_window')=='yes') { ?>
<a class="btn btn-default sharp outline" href="<?php echo ($button_link); ?>" target="_blank" role="button" >
<?php }
else {

  ?>
<a class="btn btn-default sharp outline" href="<?php echo ($button_link); ?>" role="button" >
<?php }  ?>
<?php echo ($button_text); ?></a>
	      </div>
</div>    
</div>

    
<?php
	$i++;
	 endwhile; ?>  
 

 <a class="left carousel-control" href="#bs-carousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#bs-carousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>

</div> 




</div>

<!-- end ACF carousel -->


<!-- hard coded carousel -->


<!-- end hard coded carousel -->


<!-- end carousel -->

	 <?php
     } //end if ( is_front_page())
	 else { //if this is not the front page

         $url = $_SERVER['REQUEST_URI'];
		// echo $url;
  		 global $post;
    		 $post_slug= $post->post_name;
		// echo $post_slug;

		if ( has_post_thumbnail() ) { //if this is not the front page and it has a featured image attached ?>

			
<div class="featured-image-overlay">
			<div class="featured-image">
         
			<?php the_post_thumbnail(); ?>

			</div>
</div>



			

         <div class="container">  
         <h1 class="featured-image-title"><?php the_field('featured_image_title'); ?></h1>
           <h1 class="featured-image-text"><?php the_field('featured_image_text'); ?></h1>
        </div>
            
		<?php 
		} //end if this is not the front page and it has a featured image attached
         
          /*     if ($post_slug == 'events' )   { //if the post is in the news category
			$pageid = 1799;
		}
		
		if ( has_post_thumbnail($pageid) ) { //if the post has a featured image attached  ?>
<div class="featured-image-overlay">
			<div style="featured-image">
			<?php echo get_the_post_thumbnail($pageid); ?>
			</div>
</div>
			
            <?php $title = get_the_title($pageid); ?>
			<h1 class="featured-image-title"><?php the_field('featured_image_title',$pageid ) ?></h1>
		<?php 
		}*/
	 
	} //end if this is not the front page
 } // if (is_page())
 
 else { //if it is a post
		 
        
        if (in_category( 'news' ) )  { //if the post is in the news category
			$pageid = 1799;
		}
		if (in_category( 'success-stories' ) )  { //if the post is in the success stories category
			$pageid = 16;
		}
		if ( has_post_thumbnail($pageid) ) { //if the post has a featured image attached  ?>
<div class="featured-image-overlay">
			<div style="featured-image">
			<?php echo get_the_post_thumbnail($pageid); ?>
			</div>
</div>
			
            <?php $title = get_the_title($pageid); ?>
			<h1 class="featured-image-title"><?php the_field('featured_image_title',$pageid ) ?></h1>
		<?php 
		}
 } // end page or post check
		?>
		
		
 <div class="row visible-xs">		 
  <div class="col-md-12">
        <!-- left column header is optional. Wrap in if statement to avoid empty divs -->
                 <?php if( get_field('2_col_left_col_header') ): ?>
                <!-- left column header -->
                <div class="two_col_left_col_header home-news-button" style="background-color:<?php the_field('2_col_left_col_header_color'); ?>">
                <?php the_field('2_col_left_col_header'); ?>
                </div><!-- .two_col_left_col_header -->
                 <?php endif; ?>
       </div><!-- .col-md-6 -->
       <!-- right column header -->
        <div class="col-md-12">
        <!-- right column header is optional. Wrap in if statement to avoid empty divs -->
                <?php if( get_field('2_col_right_col_header') ): ?>
                <!-- right column header -->
                <div class="two_col_right_col_header"  
                style="background-color:<?php the_field('2_col_right_col_header_color'); ?>">
                <?php the_field('2_col_right_col_header'); ?>
                </div><!-- .two_col_right_col_header -->
                 <?php endif; ?>
       </div><!-- .col-md-6 -->   
	</div>	

	<div id="content" class="site-content container">
    
     