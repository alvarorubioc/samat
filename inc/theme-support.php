<?php

if ( ! function_exists( 'samat_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function samat_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on samat, use a find and replace
		 * to change 'samat' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'samat', get_template_directory() . '/languages' );

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

		// Default thumbnail size
		add_image_size( 'img-header', 640, 480, true );
		add_image_size( 'img-card', 400, 300, true );


		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'main-menu' => esc_html__( 'Primary', 'samat' ),
			'footer-menu' => esc_html__( 'Footer', 'samat' ),
		) );

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

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

	}
endif;
add_action( 'after_setup_theme', 'samat_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function samat_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'samat_content_width', 640 );
}
add_action( 'after_setup_theme', 'samat_content_width', 0 );


// Add excerpt to pages
add_post_type_support( 'page', 'excerpt' );

// Add image featured to rss feed
function silocreativo_thumbnails_in_feeds( $content ) {
global $post;
if ( '' != get_the_post_thumbnail() ) {
$content = '<p>' . get_the_post_thumbnail( $post->ID, 'full', array( 'style' => 'max-width: 100%; height: auto;', 'height' => 'auto' ) ) . '</p>' . get_the_excerpt();
}
return $content;
}
add_filter( 'the_excerpt_rss', 'silocreativo_thumbnails_in_feeds' );
