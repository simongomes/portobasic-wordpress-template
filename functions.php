<?php
/**
 * portobasic functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package portobasic
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function portobasic_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on portobasic, use a find and replace
		* to change 'portobasic' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'portobasic', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'portobasic' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'portobasic_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);

	if (!is_admin()) {
		add_filter('show_admin_bar', '__return_false');
	}
}
add_action( 'after_setup_theme', 'portobasic_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function portobasic_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'portobasic_content_width', 640 );
}
add_action( 'after_setup_theme', 'portobasic_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function portobasic_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'portobasic' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'portobasic' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'portobasic_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function portobasic_scripts() {
	// Enqueue styles
	wp_enqueue_style('portobasic-style-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), _S_VERSION);
	wp_enqueue_style('portobasic-style-animate', get_template_directory_uri() . '/assets/css/animate.min.css', array(), _S_VERSION);
	wp_enqueue_style('portobasic-style-fontawesome', get_template_directory_uri() . '/assets/css/fontawesome.min.css', array(), _S_VERSION);
	wp_enqueue_style('portobasic-style-all', get_template_directory_uri() . '/assets/css/all.min.css', array(), _S_VERSION);
	wp_enqueue_style('portobasic-style-odometer', get_template_directory_uri() . '/assets/css/odometer.min.css', array(), _S_VERSION);
	wp_enqueue_style('portobasic-style-meanmenu', get_template_directory_uri() . '/assets/css/meanmenu.css', array(), _S_VERSION);
	wp_enqueue_style('portobasic-style-swipper', get_template_directory_uri() . '/assets/css/swipper.css', array(), _S_VERSION);

	wp_enqueue_style( 'portobasic-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'portobasic-style', 'rtl', 'replace' );

	wp_enqueue_script( 'portobasic-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Enqueue scripts
	wp_enqueue_script('portobasic-script-jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('portobasic-script-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('portobasic-script-swipper', get_template_directory_uri() . '/assets/js/swipper-bundle.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('portobasic-script-meanmenu', get_template_directory_uri() . '/assets/js/jquery.meanmenu.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('portobasic-script-wow', get_template_directory_uri() . '/assets/js/wow.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('portobasic-script-odometer', get_template_directory_uri() . '/assets/js/odometer.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('portobasic-script-appear', get_template_directory_uri() . '/assets/js/appear.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('portobasic-script-main', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true);

	
}
add_action( 'wp_enqueue_scripts', 'portobasic_scripts' );

// Disable default block styles
function remove_wp_block_library_css(){
    wp_dequeue_style('wp-block-library'); // Core block library
    wp_dequeue_style('wp-block-library-theme'); // Default theme styles
    wp_dequeue_style('global-styles'); // Theme.json global styles
}
add_action('wp_enqueue_scripts', 'remove_wp_block_library_css', 100);

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

