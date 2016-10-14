<?php

// update_option( 'siteurl', 'http://localhost:8080/' );
// update_option( 'home', 'http://localhost:8080/' );

/**
 * MovementMedia functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package MovementMedia
 */

if ( ! function_exists( 'movementmedia_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function movementmedia_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on MovementMedia, use a find and replace
	 * to change 'movementmedia' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'movementmedia', get_template_directory() . '/languages' );

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
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'movementmedia' ),
		'footer-menu' => esc_html__( 'Footer Menu', 'movementmedia' )
		)
	);

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

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'movementmedia_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}

// ACF theme options
	acf_add_options_page( array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));

endif;
add_action( 'after_setup_theme', 'movementmedia_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function movementmedia_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'movementmedia_content_width', 640 );
}
add_action( 'after_setup_theme', 'movementmedia_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function movementmedia_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'movementmedia' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'movementmedia' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
// 	register_sidebar( array(
// 		'name' => 'Footer Sidebar 1',
// 		'id' => 'footer-sidebar-1',
// 		'description' => 'Appears in the footer area',
// 		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
// 		'after_widget' => '</aside>',
// 		'before_title' => '<h3 class="widget-title">',
// 		'after_title' => '</h3>',
// 	) );
}
add_action( 'widgets_init', 'movementmedia_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function movementmedia_scripts() {
	wp_enqueue_style( 'movementmedia-style', get_stylesheet_uri() );

	wp_enqueue_script( 'movementmedia-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'movementmedia-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_register_script('app.bundle.js', home_url() . '/wp-content/themes/movementmedia/js/app.bundle.js', array( 'jquery', 'jquery-ui-core', 'jquery-ui-accordion' ));
	wp_enqueue_script('app.bundle.js');

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'movementmedia_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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
