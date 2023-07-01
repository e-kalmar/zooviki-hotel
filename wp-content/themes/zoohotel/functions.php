<?php
/**
 * This file adds functions to the Zoohotel theme.
 *
 * @package zoohotel
 * @author  Ivaylo Ganchev & Martin Duchev
 * @license GNU General Public License v2 or later
 * @link
 */
function zoohotel_scripts() {
	// STYLES
	wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css');
	wp_enqueue_style( 'styles-main', get_stylesheet_uri() );
	wp_enqueue_style( 'pattaya-google-fonts', 'https://fonts.googleapis.com/css2?family=Pattaya&display=swap', array(), wp_get_theme()->get( 'Version' ));
	wp_enqueue_style( 'styles-footer', get_theme_file_path() . '/assets/stylesheets/footer.css' );

	// SCRIPTS
	wp_enqueue_script( 'header-js', get_template_directory_uri() . '/assets/js/header.js', array(), false );

	// CDNs
	wp_enqueue_script( "jq", "https://code.jquery.com/jquery-3.7.0.min.js" );
	wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js' );
	wp_enqueue_script( 'ion-icons-esm', "https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js" );
	wp_enqueue_script( 'ion-icons', "https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js" );
}
add_action( 'wp_enqueue_scripts', 'zoohotel_scripts', 10, 1 );

function add_footer_styles() {
	wp_enqueue_style( 'footer_styles', get_template_directory_uri() . '/assets/stylesheets/footer.css' );
};
add_action( 'get_footer', 'add_footer_styles' );