<?php
/**
 * Everest Hospitality functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Everest_Hospitality
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
function everest_hospitality_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Everest Hospitality, use a find and replace
		* to change 'everest-hospitality' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'everest-hospitality', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'everest-hospitality' ),
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
			'everest_hospitality_custom_background_args',
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
}
add_action( 'after_setup_theme', 'everest_hospitality_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function everest_hospitality_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'everest_hospitality_content_width', 640 );
}
add_action( 'after_setup_theme', 'everest_hospitality_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function everest_hospitality_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'everest-hospitality' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'everest-hospitality' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Widget First', 'everest-hospitality' ),
			'id'            => 'footer-widget-first',
			'description'   => esc_html__( 'Add widgets here.', 'everest-hospitality' ),
			'before_widget' => '<div class="footer-widget"> <div class="space-1"></div><div class="ot-icon-list-wrapper">',
			'after_widget'  => '</div></div>',
			'before_title'  => '<h5 class="footer-title">',
			'after_title'   => '</h5>',
		)
	);
}
add_action( 'widgets_init', 'everest_hospitality_widgets_init' );



/**
 * Enqueue scripts and styles.
 */
function everest_hospitality_scripts() {
	// wp_enqueue_style( 'everest-hospitality-style', get_stylesheet_uri(), array(), _S_VERSION );
	// wp_style_add_data( 'everest-hospitality-style', 'rtl', 'replace' );
	wp_enqueue_style( 'bootstrap',get_template_directory_uri() .'/css/bootstrap.min.css');
	wp_enqueue_style( 'fontawesome',get_template_directory_uri() .'/css/font-awesome.min.css');
	wp_enqueue_style( 'flaticon',get_template_directory_uri() .'/css/flaticon.css');
	wp_enqueue_style( 'owl-carousel',get_template_directory_uri() .'/css/owl.carousel.min.css');
	wp_enqueue_style( 'owl-theme',get_template_directory_uri() .'/css/owl.theme.css');
	wp_enqueue_style( 'lightgallery',get_template_directory_uri() .'/css/lightgallery.css');
	wp_enqueue_style( 'style',get_template_directory_uri() .'/style.css');
	wp_enqueue_style( 'home4',get_template_directory_uri() .'/css/home4.css');
	wp_enqueue_style( 'settings',get_template_directory_uri() .'/plugins/revolution/revolution/css/settings.css');
	wp_enqueue_style( 'navigation',get_template_directory_uri() .'/plugins/revolution/revolution/css/navigation.css');


	wp_enqueue_script( 'jquery-min', get_template_directory_uri() . '/js/jquery.min.js', array(), false, true );
	wp_enqueue_script( 'lightgallery', get_template_directory_uri() . '/js/lightgallery-all.min.js', array(), false, true );
	wp_enqueue_script( 'jquery-isotope', get_template_directory_uri() . '/js/jquery.isotope.min.js', array(), false, true );
	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), false, true );
	wp_enqueue_script( 'easypiechart', get_template_directory_uri() . '/js/easypiechart.min.js', array(), false, true );
	wp_enqueue_script( 'jquery-countdown', get_template_directory_uri() . '/js/jquery.countdown.min.js', array(), false, true );
	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array(), false, true );
	wp_enqueue_script( 'contact', get_template_directory_uri() . '/js/contact.js', array(), false, true );
	wp_enqueue_script( 'tools', get_template_directory_uri() . '/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js', array(), false, true );
	wp_enqueue_script( 'revolution', get_template_directory_uri() . '/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js', array(), false, true );
	wp_enqueue_script( 'plugin', get_template_directory_uri() . '/plugins/revolution/revolution/js/extensions/revolution-plugin.js', array(), false, true );
	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/rev-script-3.js', array(), false, true );

	wp_enqueue_script( 'everest-hospitality-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'everest_hospitality_scripts' );

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
require get_template_directory() . '/inc/navwalker.php';
require get_template_directory() . '/inc/custom-post-type.php';
require get_template_directory() . '/inc/breadcrumb.php';


/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

add_filter('wpcf7_autop_or_not', '__return_false');

add_action( 'init', function() {
	// if ACF Custom Field is not active
	if ( !function_exists( 'acf_add_options_page' ) ) { return; }

	acf_add_options_page ( 
		[
			'page_title' 	=> 'Profile Information',
			'menu_title'	=> 'Profile',
			'menu_slug' 	=> 'profile',
			'capability'	=> 'edit_posts',
			'redirect'		=> false,
			'position'		=> 5,
		]
	);
});



// custom fields in Contact Form 7 for displaying custom message
add_action( 'wpcf7_init', 'custom_submit' );
function custom_submit() {
	wpcf7_add_form_tag( 'custom_submit', 'custom_select_handler' );
}
function custom_select_handler( $tag ) {
    $html = '<button class="wpcf7-form-control has-spinner wpcf7-submit btn-style-seven theme-btn" type="submit">';
    $html .= '<span class="btn-wrap">';
    $html .= '<span class="text-one">Send message</span>';
    $html .= '<span class="text-two">Send message</span>';
    $html .= '</span>';
    $html .= '</button>';

    return $html;

}


// Copyright text
if ( !function_exists('everest_hospitality_copyright_text') ) :
	function everest_hospitality_copyright_text() {
		$copyright = get_field('copyright', 'option');
	
		if ( empty( $copyright ) ) return;
	
		if ( false !== strpos( $copyright, '%copy%' ) ) {
			$copyright = str_replace( '%copy%', '&copy;', $copyright );
		}
	
		if ( false !== strpos( $copyright, '%date%' ) ) {
			$copyright = str_replace( '%date%', date( 'Y' ), $copyright );
		}
	
		if ( false !== strpos( $copyright, '%sitename%' ) ) {
			$copyright = str_replace( '%sitename%', get_bloginfo( 'name' ), $copyright );
		}
	
		return $copyright;
	}
	endif;