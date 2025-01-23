<?php
/**
 * MFYAH 2024 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package MFYAH_2024
 */

if ( ! defined( 'MFYAH_2024_VERSION' ) ) {
	/*
	 * Set the theme’s version number.
	 *
	 * This is used primarily for cache busting. If you use `npm run bundle`
	 * to create your production build, the value below will be replaced in the
	 * generated zip file with a timestamp, converted to base 36.
	 */
	define( 'MFYAH_2024_VERSION', '1.0.2' );
}

if ( ! defined( 'MFYAH_2024_TYPOGRAPHY_CLASSES' ) ) {
	/*
	 * Set Tailwind Typography classes for the front end, block editor and
	 * classic editor using the constant below.
	 *
	 * For the front end, these classes are added by the `mfyah_2024_content_class`
	 * function. You will see that function used everywhere an `entry-content`
	 * or `page-content` class has been added to a wrapper element.
	 *
	 * For the block editor, these classes are converted to a JavaScript array
	 * and then used by the `./javascript/block-editor.js` file, which adds
	 * them to the appropriate elements in the block editor (and adds them
	 * again when they’re removed.)
	 *
	 * For the classic editor (and anything using TinyMCE, like Advanced Custom
	 * Fields), these classes are added to TinyMCE’s body class when it
	 * initializes.
	 */
	define(
		'MFYAH_2024_TYPOGRAPHY_CLASSES',
		'prose prose-neutral max-w-none prose-a:text-primary'
	);
}

if ( ! function_exists( 'mfyah_2024_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function mfyah_2024_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on MFYAH 2024, use a find and replace
		 * to change 'mfyah-2024' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'mfyah-2024', get_template_directory() . '/languages' );

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

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'menu-1' => __( 'Primary', 'mfyah-2024' ),
				'menu-2' => __( 'Footer Menu 1', 'mfyah-2024' ),
				'menu-3' => __( 'Footer Menu 2', 'mfyah-2024' ),
				'menu-4' => __( 'Footer Menu 3', 'mfyah-2024' ),
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

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' );
		add_editor_style( 'style-editor-extra.css' );

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Remove support for block templates.
		remove_theme_support( 'block-templates' );
	}
endif;
add_action( 'after_setup_theme', 'mfyah_2024_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mfyah_2024_widgets_init() {
	
	register_sidebar(
		array(
			'name'          => __( 'Sidebar Home', 'mediablog2024' ),
			'id'            => 'sidebar-2',
			'description'   => __( 'Add widgets here to appear in home sidebar.', 'mfyah-2024' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">', 
			'after_title'   => '</h2>',
		),
	);
	register_sidebar(
		array(
			'name'          => __( 'Sidebar Post', 'mfyah-2024' ),
			'id'            => 'sidebar-3',
			'description'   => __( 'Add widgets here to appear in single post sidebar.', 'mfyah-2024' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		),
	);
	register_sidebar(
		array(
			'name'          => __( 'Sidebar Page', 'mfyah-2024' ),
			'id'            => 'sidebar-4',
			'description'   => __( 'Add widgets here to appear in single page sidebar.', 'mfyah-2024' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		),
	);
	register_sidebar(
		array(
			'name'          => __( 'Sidebar Search', 'mfyah-2024' ),
			'id'            => 'sidebar-5',
			'description'   => __( 'This sidebar displays a minimal search box only.', 'mfyah-2024' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		),
	);
	register_sidebar(
		array(
			'name'          => __( 'Sidebar Footer 1', 'mfyah-2024' ),
			'id'            => 'footer-1',
			'description'   => __( 'This sidebar is displayed at the footer.', 'mfyah-2024' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		),
	);
	register_sidebar(
		array(
			'name'          => __( 'Sidebar Footer 2', 'mfyah-2024' ),
			'id'            => 'footer-2',
			'description'   => __( 'This sidebar is displayed at the footer.', 'mfyah-2024' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		),
	);
	register_sidebar(
		array(
			'name'          => __( 'Sidebar Footer 3', 'mfyah-2024' ),
			'id'            => 'footer-3',
			'description'   => __( 'This sidebar is displayed at the footer.', 'mfyah-2024' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		),
	);
	register_sidebar(
		array(
			'name'          => __( 'Sidebar Footer 4', 'mediablog2024' ),
			'id'            => 'footer-4',
			'description'   => __( 'This sidebar is displayed at the footer.', 'mediablog2024' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		),
	);

}
add_action( 'widgets_init', 'mfyah_2024_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function mfyah_2024_scripts() {
	wp_enqueue_style( 'mfyah-2024-style', get_stylesheet_uri(), array(), MFYAH_2024_VERSION );
	wp_enqueue_script( 'mfyah-2024-script', get_template_directory_uri() . '/js/script.min.js', array(), MFYAH_2024_VERSION, true );
	wp_enqueue_script( 'mfyah-2024-cookie-warning', get_template_directory_uri() . '/js/cookie-warning-banner.min.js', array(), MFYAH_2024_VERSION, true );
	wp_enqueue_style( 'boxicons', 'https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	} elseif ( is_page('Donate')) {
		wp_enqueue_script( 'mfyah-2024-donation-widget', get_template_directory_uri() . '/js/donation-widget.min.js', array(), MFYAH_2024_VERSION, true );
	}

}
add_action( 'wp_enqueue_scripts', 'mfyah_2024_scripts' );

/**
 * Enqueue the block editor script.
 */
function mfyah_2024_enqueue_block_editor_script() {
	if ( is_admin() ) {
		wp_enqueue_script(
			'mfyah-2024-editor',
			get_template_directory_uri() . '/js/block-editor.min.js',
			array(
				'wp-blocks',
				'wp-edit-post',
			),
			MFYAH_2024_VERSION,
			true
		);
		wp_add_inline_script( 'mfyah-2024-editor', "tailwindTypographyClasses = '" . esc_attr( MFYAH_2024_TYPOGRAPHY_CLASSES ) . "'.split(' ');", 'before' );
	}
}
add_action( 'enqueue_block_assets', 'mfyah_2024_enqueue_block_editor_script' );

/**
 * Add the Tailwind Typography classes to TinyMCE.
 *
 * @param array $settings TinyMCE settings.
 * @return array
 */
function mfyah_2024_tinymce_add_class( $settings ) {
	$settings['body_class'] = MFYAH_2024_TYPOGRAPHY_CLASSES;
	return $settings;
}
add_filter( 'tiny_mce_before_init', 'mfyah_2024_tinymce_add_class' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Custom filters for MFYAH2024 theme
 */
require get_template_directory() . '/inc/mfyah-2024-custom-functions.php';