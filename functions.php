<?php
/**
 * My First WordPress Theme functions and definitions
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function myfirstwp_setup() {
	/*
	 * Make theme available for translation.
	 * If you're building a theme based on Twenty Seventeen, use a find and replace
	 * to change 'myfirstwp' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'myfirstwp' );

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

	add_image_size( 'myfirstwp-featured-image', 190, 130, true );

	add_image_size( 'myfirstwp-thumbnail-avatar', 130, 130, true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'global' => __( 'Global Menu', 'myfirstwp' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
add_action( 'after_setup_theme', 'myfirstwp_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function myfirstwp_content_width() {

	$content_width = 1080;

	/**
	 * Filter My First WordPress content width of the theme.
	 *
	 * @since My First WordPress 1.0
	 *
	 * @param $content_width integer
	 */
	$GLOBALS['content_width'] = apply_filters( 'myfirstwp_content_width', $content_width );
}
add_action( 'after_setup_theme', 'myfirstwp_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function myfirstwp_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'myfirstwp' ),
		'id'            => 'sidebar',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'myfirstwp' ),
		'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="box-heading box-heading-sidebar">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer', 'myfirstwp' ),
		'id'            => 'footer',
		'description'   => __( 'Add widgets here to appear in your footer.', 'myfirstwp' ),
		'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="box-heading box-heading-footer">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'myfirstwp_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function myfirstwp_scripts() {

	// Theme stylesheet.
	wp_enqueue_style( 'myfirstwp-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'myfirstwp_scripts' );

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function myfirstwp_customize_register( $wp_customize ) {

	/**
	 * Theme options.
	 */
	$wp_customize->add_section( 'theme_options', array(
		'title'    => __( 'Theme Options', 'myfirstwp' ),
		'priority' => 130, // Before Additional CSS.
	) );

	// Create a setting and control for each of the sections available in the theme.
	for ( $i = 1; $i <= 5; $i++ ) {
		$wp_customize->add_setting( 'panel_' . $i, array(
			'default'           => false,
			'sanitize_callback' => 'absint',
			'transport'         => 'postMessage',
		) );

		$wp_customize->add_control( 'panel_' . $i, array(
			/* translators: %d is the front page section number */
			'label'           => sprintf( __( 'Front Page Section %d Content', 'myfirstwp' ), $i ),
			'description'     => ( 1 !== $i ? '' : __( 'Select pages to feature in each area from the dropdowns. Add an image to a section by setting a featured image in the page editor. Empty sections will not be displayed.', 'myfirstwp' ) ),
			'section'         => 'theme_options',
			'type'            => 'dropdown-pages',
			'allow_addition'  => true,
			'active_callback' => 'myfirstwp_is_static_front_page',
		) );

		$wp_customize->selective_refresh->add_partial( 'panel_' . $i, array(
			'selector'            => '#panel' . $i,
			'container_inclusive' => true,
		) );
	}
}
add_action( 'customize_register', 'myfirstwp_customize_register' );

/**
 * Return whether we're previewing the front page and it's a static page.
 */
function myfirstwp_is_static_front_page() {
	return ( is_front_page() && ! is_home() );
}
