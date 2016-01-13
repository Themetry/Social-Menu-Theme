<?php
/**
 * Social Menu Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Social_Menu_Theme
 */

if ( ! function_exists( 'social_menu_theme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function social_menu_theme_setup() {

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'social-icon-font' => esc_html__( 'Social Icon Font Menu', 'social-menu-theme' ),
	) );

}
endif;
add_action( 'after_setup_theme', 'social_menu_theme_setup' );

/**
 * Enqueue scripts and styles.
 */
function social_menu_theme_scripts() {
	wp_enqueue_style( 'social-menu-theme-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'social_menu_theme_scripts' );
