<?php

function modify_jquery() {
	if (!is_admin()) {
	wp_deregister_script('jquery');
	wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.js', false, '1.11.3', true);
	wp_enqueue_script('jquery');
	}
	}
	add_action('init', 'modify_jquery');

/**
 * sertifika functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package sertifika
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
function sertifika_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on sertifika, use a find and replace
		* to change 'sertifika' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'sertifika', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'sertifika' ),
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
			'sertifika_custom_background_args',
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
add_action( 'after_setup_theme', 'sertifika_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function sertifika_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'sertifika_content_width', 640 );
}
add_action( 'after_setup_theme', 'sertifika_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function sertifika_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'sertifika' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'sertifika' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'sertifika_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function sertifika_scripts() {
	wp_enqueue_style( 'sertifika-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'sertifika-style', 'rtl', 'replace' );

	wp_enqueue_script( 'script', get_template_directory_uri() . '/dist/js/main.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'sertifika-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'sertifika-pop-up', get_template_directory_uri() . '/js/popup.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'sertifika-main', get_template_directory_uri() . '/js/main.js', array('jquery'), _S_VERSION, true );

	wp_enqueue_style( 'style', get_template_directory_uri() . '/dist/assets/css/style.min.css' );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sertifika_scripts' );

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


function prefix_add_footer_styles() {
	wp_enqueue_style( 'your-style-id', get_template_directory_uri() . '/dist/assets/css/style.min.css' );
};
add_action( 'get_footer', 'prefix_add_footer_styles' );

add_filter( 'kses_allowed_protocols', 'add_viber_to_allowed_protocols' );

function add_viber_to_allowed_protocols( $protocols ) {
	$protocols[] = 'viber';

	return $protocols;
}


add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 3);
function filter_nav_menu_link_attributes($atts, $item, $args) {
    if ($args->menu === 'Main') {
        $atts['class'] = 'menu__link';

        if ($item->current) {
            $atts['class'] .= ' select__link';
        }
    };

    return $atts;
}



function onwp_is_post_type(string $post_type)
{
	global $post;
	
	if(!$post) return false;

	$original_post_type = get_post_type( $post->ID );

	if($original_post_type === $post_type) return true;

	return false;
}

?>

