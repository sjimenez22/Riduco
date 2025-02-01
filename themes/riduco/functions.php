<?php

/**
 * Riduco functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Riduco
 */

/**
 * Include global files
 */
$includes = [
	'inc/post-type.php',
	'inc/lib.php'
];

foreach ($includes as $file) {
	if (!$filepath = locate_template($file)) {
		trigger_error(sprintf(__('Error locating %s for inclusion', 'riduco'), $file), E_USER_ERROR);
	}
	require_once $filepath;
}
unset($file, $filepath);

if (! defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function riduco_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Riduco, use a find and replace
		* to change 'riduco' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('riduco', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'riduco'),
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
			'riduco_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

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
add_action('after_setup_theme', 'riduco_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function riduco_content_width()
{
	$GLOBALS['content_width'] = apply_filters('riduco_content_width', 640);
}
add_action('after_setup_theme', 'riduco_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function riduco_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'riduco'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'riduco'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'riduco_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function riduco_scripts()
{
	wp_enqueue_style('riduco-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('riduco-style', 'rtl', 'replace');

	wp_enqueue_style('splide-css', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css', array(), '4.1.4');

	wp_enqueue_script('riduco-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array(), '5.3.3', true);

	wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);

	wp_enqueue_script('splide-js', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js', array(), '4.1.4', true);

	if (is_page_template('templates/nuestra-historia.php')) {
		wp_enqueue_script('history-js', get_template_directory_uri() . '/js/history.js', array(), '1.0.0', true);
	}

	if (is_page_template('templates/inyeccion.php')) {
		wp_enqueue_script('injection-js', get_template_directory_uri() . '/js/injection.js', array(), '1.0.0', true);
	}

	if (is_page_template('templates/moldes.php')) {
		wp_enqueue_script('moldes-js', get_template_directory_uri() . '/js/moldes.js', array(), '1.0.0', true);
	}

	if (is_page_template('templates/extrusion-y-peletizado.php')) {
		wp_enqueue_script('extrusion-js', get_template_directory_uri() . '/js/extrusion.js', array(), '1.0.0', true);
	}

	if (is_page_template('templates/productos.php')) {
		wp_enqueue_script('products-js', get_template_directory_uri() . '/js/products.js', array(), '1.0.0', true);
	}

	wp_localize_script(
		'main-js',
		'ajax_bones',
		[
			'ajaxurl' => admin_url('admin-ajax.php'),
			'nonce' => wp_create_nonce('ajax_nonce'),
			'site_url' => site_url()
		]
	);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'riduco_scripts');

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
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

function cc_mime_types($mimes)
{
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function reescribir_urls_productos()
{
	add_rewrite_rule(
		'^productos/page/([0-9]+)/?$',
		'index.php?pagename=productos&paged=$matches[1]',
		'top'
	);
}
add_action('init', 'reescribir_urls_productos');
