<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Social_Menu_Theme
 */
?>
<!doctype html>
<html>
	<head>
		<?php wp_head(); ?>
	</head>
	<body>
		<?php 
			if ( has_nav_menu( 'social-icon-font' ) ) :
				wp_nav_menu( array(
					'theme_location'  => 'social-icon-font',
					'depth'           => 1,
					'link_before'     => '<span class="screen-reader-text">',
					'link_after'      => '</span>',
					'container_class' => 'social-icon-font',
				) );
			endif;
		?>

	<?php wp_footer(); ?>
	</body>
</html>
