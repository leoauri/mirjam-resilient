<?php
namespace Mirjamresilient;
/**
 * Mirjam Resilient
 **/

// Autoload all our class definitions
$classfiles = new \FilesystemIterator( get_stylesheet_directory() . '/classes', \FilesystemIterator::SKIP_DOTS );
foreach ( $classfiles as $file )
{
	/** @noinspection PhpIncludeInspection */
	! $file->isDir() and include $file->getRealPath();
}


function setup() {
	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on VueWP, use a find and replace
	 * to change 'vuewp' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'mirjamresilient', get_template_directory() . '/languages' );

}
add_action( 'after_setup_theme', 'Mirjamresilient\setup' );


function register_menus() {
	register_nav_menus(
		array(
			'navigation-menu' => __( 'Pages Navigation Menu' )
		)
	);
}
add_action( 'init', 'Mirjamresilient\register_menus' );
