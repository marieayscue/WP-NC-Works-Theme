<?php
/**
 * start functions and definitions
 *
 * @package start
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'start_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function start_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on start, use a find and replace
	 * to change 'start' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'start', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );
	
	// Add logo support
	add_theme_support( 'custom-logo', array(

	    'width' => 397,

	    'height' => 96,

	    'flex-width' => true,

	    'flex-height' => false,

	) );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	set_post_thumbnail_size( 2500, 450, true );
	add_image_size('start-small-thumb', 150, 150, true);
	add_image_size('news-thumb', 208, 137, true);
	add_image_size('start-med-thumb', 380, 270, true);
	add_image_size('home-slider', 2500, 750, true );
	add_image_size('home-slider2', 1500, 450, true );
	add_image_size('home-slider3', 2000, 700, true );
	add_image_size('home-slider4', 2500, 1500, true );
	
	

	/* Register Menus */
	
	function register_top_menu() {
  register_nav_menu('top-menu',__( 'Top Menu' ));
}
add_action( 'init', 'register_top_menu' );
	
	function register_header_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_header_menu' );

// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'start' ),
	) );


	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );


	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'start_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // start_setup
add_action( 'after_setup_theme', 'start_setup' );



/**
 * Register widget areas.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function start_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'start' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Top', 'start' ),
		'id'            => 'footer-top',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );


	register_sidebar( array(
		'name'          => esc_html__( 'Footer1', 'start' ),
		'id'            => 'footer-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

register_sidebar( array(
		'name'          => esc_html__( 'Footer2', 'start' ),
		'id'            => 'footer-2',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

register_sidebar( array(
		'name'          => esc_html__( 'Footer3', 'start' ),
		'id'            => 'footer-3',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

register_sidebar( array(
		'name'          => esc_html__( 'Footer4', 'start' ),
		'id'            => 'footer-4',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

register_sidebar( array(
		'name'          => esc_html__( 'Footer5', 'start' ),
		'id'            => 'footer-5',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

register_sidebar( array(
		'name'          => esc_html__( 'Footer6', 'start' ),
		'id'            => 'footer-6',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Bottom', 'start' ),
		'id'            => 'footer-bottom',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

}
add_action( 'widgets_init', 'start_widgets_init' );

/* custom */
function my_jquery_enqueue() {
	wp_deregister_script('jquery');
	wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js", false, null);
	wp_enqueue_script('jquery');
}

if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);


/**
 * Enqueue scripts and styles.
 */
function start_scripts() {
	//wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
	
	wp_enqueue_style( 'start-style', get_stylesheet_uri() );

	

	wp_enqueue_script( 'start-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'start-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'start_scripts' );
	

/* old enqueue scripts 
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
	
	wp_enqueue_style( 'start-style', get_stylesheet_uri() );
	
	//wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array(), '1.4' );
	
	//wp_enqueue_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js', array('jquery'), '3.3.4', true );

	wp_enqueue_script( 'start-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'start-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	} 
	
	
}
add_action( 'wp_enqueue_scripts', 'start_scripts' ); // end old enqueue scripts */

/* custom; should go after owl carousel enqueue scripts */
/*function homepage_slider() {
	if(is_front_page()) :
	?>
	<script>
	jQuery(function($) {
		var homeSlider = $('.owl-carousel');
		homeSlider.owlCarousel({
			loop: true,
			items: 1,
			autoplay: true
		});
		$('#home-slider .left').click(function() {
			homeSlider.trigger('prev.owl.carousel');
		});
		$('#home-slider .right').click(function() {
			homeSlider.trigger('next.owl.carousel');
		});
	});
	</script>
	<?php
	endif;
}

add_action('wp_footer', 'homepage_slider'); */

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

// Bootstrap navigation Menus
function bootstrap_mainnav()
{
	
	
	wp_nav_menu( array(
            'menu_id' => 'primary-menu', 
'menu_class' => 'nav navbar-nav navbar-right',
'after' => '<div class="primary-divider-vertical hidden-xs"></div>',
            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
            'walker'            => new wp_bootstrap_navwalker())
	
    );
}

function bootstrap_topnav()
{
	$search_form = '<li><form role="search" method="get" id="header-search" class="search-form" action="'.esc_url( home_url( '/' ) ).'"><input      	type="text" name="s" id="s" class="search-field" /><input type="submit" class="search-submit" value=" " /></form></li>';
	
	$title_bar = '<li style="background: rgb(41, 143, 194);" class="hidden-xs"><a style="color:#ffffff;text-transform:Capitalize;" href="http://www.gastonworks.com" target="_blank">Operated By Gaston County Workforce Development Board</a></li>';
	
	
	wp_nav_menu( array(
            'theme_location'    => 'top-menu',
			'menu_id' => 'top-menu', 
'menu_class' => 'nav navbar-nav navbar-right',
//'after' => '<div class="top-divider-vertical hidden-xs"></div>',
'after' => '<li class="divider"></li>',
'items_wrap' => '<ul id = "%1$s" class = "%2$s"></li>%3$s'.$search_form. $title_bar.'</ul>',
            'walker'            => new wp_bootstrap_navwalker())
    );
	
	
	 

}