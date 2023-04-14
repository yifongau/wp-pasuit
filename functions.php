<?php
/**
 * pasuit functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package pasuit
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
function pasuit_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on pasuit, use a find and replace
		* to change 'pasuit' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'pasuit', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'pasuit' ),
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
			'pasuit_custom_background_args',
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
add_action( 'after_setup_theme', 'pasuit_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function pasuit_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'pasuit_content_width', 640 );
}
add_action( 'after_setup_theme', 'pasuit_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function pasuit_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'pasuit' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'pasuit' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'pasuit_widgets_init' );

/**
 * Enqueue scripts and styles.
 */

//$debug = get_template_directory_uri() . 'parsa/theme/plugins/bootstrap/bootstrap.min.css';
//echo $debug;



function pasuit_scripts() {
  // dependencies
  wp_enqueue_style('themify', get_template_directory_uri() . '/plugins/themify-icons/themify-icons.css');

  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/plugins/bootstrap/bootstrap.min.css', array(), null);
  wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/plugins/bootstrap/bootstrap.min.js', array('jquery') );
  wp_enqueue_script( 'parsa_jquery', get_template_directory_uri() . '/plugins/jQuery/jquery.min.js' );

  wp_enqueue_style('slick', get_template_directory_uri() . '/plugins/slick/slick.css');
  wp_enqueue_script('slick-js', get_template_directory_uri() . '/plugins/slick/slick.min.js');


  wp_enqueue_script( 'masonry-js', get_template_directory_uri() . '/plugins/masonry/masonry.js' );
  wp_enqueue_script( 'smooth-scroll-js', get_template_directory_uri() . '/plugins/smooth-scroll/smooth-scroll.js' );
  wp_enqueue_script( 'headroom-js', get_template_directory_uri() . '/plugins/headroom/headroom.js' );


  // loads main style.css
  wp_enqueue_style( 'pasuit-style', get_stylesheet_uri(), array('bootstrap', 'slick', 'themify'), null);

	wp_enqueue_script( 'pasuit-navigation', get_template_directory_uri() . '/js/navigation.js', array(), );
	wp_enqueue_script( 'parsa-js', get_template_directory_uri() . '/js/script.js', array(), );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'pasuit_scripts' );

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

/**
 * Load in-house pasuit.nl functions.
 */

$theme_root = get_template_directory();
$functions_dir = "$theme_root/functions";

$functions = new DirectoryIterator($functions_dir);

foreach ($functions as $file) {
	if (!$file->isDot()) {
		require_once "$functions_dir/$file";
  }
}

unset($file);
