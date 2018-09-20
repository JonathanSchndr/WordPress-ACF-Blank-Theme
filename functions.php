<?php

require_once(get_theme_file_path('/plugins/plugins.php'));

/**
 * JOTT.MEDIA functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package JOTT_MEDIA
 */

if ( ! function_exists( 'jm_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function jm_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on JOTT.MEDIA, use a find and replace
		 * to change 'jm' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'jm', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */

		
		add_image_size( 'hero', 1920);
		add_theme_support( 'post-thumbnails' );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		/**
		 * Register new menu
		 */
		register_nav_menu( 'header-menu', 'Header Menu' );
		register_nav_menu( 'footer-menu', 'Footer Menu' );
	}
endif;
add_action( 'after_setup_theme', 'jm_setup' );

/**
 * Register our sidebars and widgetized areas.
 */
function jm_widgets_init() {

	/**
	 * Register 4x Header-Widgets
	 */
	// for ($i=1; $i < 5; $i++) {
	// 	register_sidebar( array(
	// 		'name'          => 'Header '.$i,
	// 		'id'            => 'Header-'.$i,
	// 		'before_widget' => '<div class="widget">',
	// 		'after_widget'  => '</div>',
	// 		'before_title'  => '<h4>',
	// 		'after_title'   => '</h4>',
	// 	) );
	// }

	/**
	 * Register 4x Footer-Widgets
	 */
	// for ($i=1; $i < 5; $i++) {
	// 	register_sidebar( array(
	// 		'name'          => 'Footer '.$i,
	// 		'id'            => 'footer-'.$i,
	// 		'before_widget' => '<div class="widget">',
	// 		'after_widget'  => '</div>',
	// 		'before_title'  => '<h4>',
	// 		'after_title'   => '</h4>',
	// 	) );
	// }

}
add_action( 'widgets_init', 'jm_widgets_init' );


//MCE Add Backend Styles
function load_custom_fonts($init) {
	$stylesheet_url = get_template_directory_uri().'/assets/css/backend.css';
	if(empty($init['content_css'])) $init['content_css'] = $stylesheet_url;
	else $init['content_css'] = $init['content_css'].','.$stylesheet_url;
	return $init;
}
add_filter('tiny_mce_before_init', 'load_custom_fonts');

/**
 * Enqueue scripts and styles.
 */
function jm_scripts() {

	/** CSS **/
	wp_enqueue_style( 'jm-style', get_stylesheet_uri() );
	wp_enqueue_style( 'jm-fluidable-style', get_template_directory_uri() . '/vendor/fluidable/fluidable.css' );
	wp_enqueue_style( 'jm-animate-style', get_template_directory_uri() . '/vendor/animate.css/animate.min.css' );
	wp_enqueue_style( 'jm-slider-style', get_template_directory_uri() . '/vendor/owl.carousel/dist/assets/owl.carousel.min.css' );
	wp_enqueue_style( 'jm-aos-style', get_template_directory_uri() . '/vendor/aos/dist/aos.css' );
	wp_enqueue_style( 'jm-custom-style', get_template_directory_uri() . '/assets/css/main.css' );

	/** JS **/
	wp_enqueue_script( 'jm-fontawesome-script', '//use.fontawesome.com/releases/v5.3.1/js/all.js' );
	wp_enqueue_script( 'jm-slider-script', get_template_directory_uri() . '/vendor/owl.carousel/dist/owl.carousel.min.js' );
	wp_enqueue_script( 'jm-aos-script', get_template_directory_uri() . '/vendor/aos/dist/aos.js' );
	wp_enqueue_script( 'jm-global-script', get_template_directory_uri() . '/assets/js/global.min.js', array( 'jquery' ) );

	$translation_array = array( 'templateUrl' => get_stylesheet_directory_uri() );
	wp_localize_script( 'jm-global-script', 'wordpress', $translation_array );
}
add_action( 'wp_enqueue_scripts', 'jm_scripts' );

/**
 * Remove search
 */
// function wpb_filter_query( $query, $error = true ) {
// 	if ( is_search() && !is_admin() ) {
// 		$query->is_search = false;
// 		$query->query_vars[s] = false;
// 		$query->query[s] = false;
// 		if ( $error == true )
// 			$query->is_404 = true;
// 	}
// }
// add_action( 'parse_query', 'wpb_filter_query' );

/**
 * Disable support for comments and trackbacks in post types
 */
// function df_disable_comments_post_types_support() {
// 	$post_types = get_post_types();
// 	foreach ($post_types as $post_type) {
// 		if(post_type_supports($post_type, 'comments')) {
// 			remove_post_type_support($post_type, 'comments');
// 			remove_post_type_support($post_type, 'trackbacks');
// 		}
// 	}
// }
// add_action('admin_init', 'df_disable_comments_post_types_support');
// // Close comments on the front-end
// function df_disable_comments_status() {
// 	return false;
// }
// add_filter('comments_open', 'df_disable_comments_status', 20, 2);
// add_filter('pings_open', 'df_disable_comments_status', 20, 2);
// // Hide existing comments
// function df_disable_comments_hide_existing_comments($comments) {
// 	$comments = array();
// 	return $comments;
// }
// add_filter('comments_array', 'df_disable_comments_hide_existing_comments', 10, 2);
// // Remove comments page in menu
// function df_disable_comments_admin_menu() {
// 	remove_menu_page('edit-comments.php');
// }
// add_action('admin_menu', 'df_disable_comments_admin_menu');
// // Redirect any user trying to access comments page
// function df_disable_comments_admin_menu_redirect() {
// 	global $pagenow;
// 	if ($pagenow === 'edit-comments.php') {
// 		wp_redirect(admin_url()); exit;
// 	}
// }
// add_action('admin_init', 'df_disable_comments_admin_menu_redirect');
// // Remove comments metabox from dashboard
// function df_disable_comments_dashboard() {
// 	remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
// }
// add_action('admin_init', 'df_disable_comments_dashboard');
// // Remove comments links from admin bar
// function df_disable_comments_admin_bar() {
// 	if (is_admin_bar_showing()) {
// 		remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
// 	}
// }
// add_action('init', 'df_disable_comments_admin_bar');

// // Remove Archive
// function redirect_to_home( $query ){
// 	if((is_archive() || is_attachment()) && !is_admin()) {
// 		wp_redirect( home_url(), 301 );
// 		exit;
// 	}
// }
// add_action( 'template_redirect', 'redirect_to_home' );

// // Callback function to insert 'styleselect' into the $buttons array
// function my_mce_buttons_2( $buttons ) {
// 	array_unshift( $buttons, 'styleselect' );
// 	return $buttons;
// }
// // Register our callback to the appropriate filter
// add_filter( 'mce_buttons_2', 'my_mce_buttons_2' );
// // Callback function to filter the MCE settings
// function my_mce_before_init_insert_formats( $init_array ) {
// 	// Define the style_formats array
// 	$style_formats = array(
// 		// Each array child is a format with it's own settings
// 		array(
// 			'title' => '2-spaltig',
// 			'classes' => 'format-columns',
// 			'wrapper' => true,
// 			'block' => 'div'
// 		),
// 		array(
// 			'title' => 'Link mit Arrow (groß)',
// 			'selector' => 'a',
// 			'classes' => 'format-button-big'
// 		),
// 		array(
// 			'title' => 'Link mit Arrow (klein)',
// 			'selector' => 'a',
// 			'classes' => 'format-button-small'
// 		)
// 	);
// 	// Insert the array, JSON ENCODED, into 'style_formats'
// 	$init_array['style_formats'] = json_encode( $style_formats );
// 	return $init_array;
// }
// // Attach callback to 'tiny_mce_before_init'
// add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );