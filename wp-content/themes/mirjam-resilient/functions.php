<?php
/**
 * Mirjam Resilient
 **/

function mirjamresilient_setup() {
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
add_action( 'after_setup_theme', 'mirjamresilient_setup' );
