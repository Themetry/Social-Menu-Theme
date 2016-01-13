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

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'social-icon-font' => esc_html__( 'Social Icon Font Menu', 'social-menu-theme' ),
	) );

}
endif;
add_action( 'after_setup_theme', 'social_menu_theme_setup' );
