<?php
/**
 * This file adds functions to the Zoohotel theme.
 *
 * @package zoohotel
 * @author  e-kalmar
 * @license GNU General Public License v2 or later
 * @link
 */

 function admin_load_bootstrap() {
    wp_enqueue_style('mdbootstrap-css', "https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css");

}
add_action('admin_enqueue_scripts', 'admin_load_bootstrap', 10, 1);

function zoohotel_scripts()
{
	// STYLES
	// wp_enqueue_style( 'bootstrap-css', 		'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css' );
	wp_enqueue_style('styles-main', get_stylesheet_uri());
	wp_enqueue_style('pattaya-google-fonts', 'https://fonts.googleapis.com/css2?family=Pattaya&display=swap');
	wp_enqueue_style('font-awesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css");
	wp_enqueue_style('google-fonts', "https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap");
	wp_enqueue_style('mdbootstrap-css', "https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css");
	wp_enqueue_style('pricing-page-css', "https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css");
	wp_enqueue_style('jquery-ui-css', "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css");

	// SCRIPTS
	wp_enqueue_script('jq', 'https://code.jquery.com/jquery-3.6.0.js');
	wp_enqueue_script('jq-ui', 'https://code.jquery.com/ui/1.13.2/jquery-ui.min.js');
	wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js');
	wp_enqueue_script('ion-icons', 'https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js');

	// Put all custom scripts & styles below this line.

	// Gallery page styles/scripts
	if (is_page('gallery')) {
		wp_enqueue_style('gallery_styles', get_template_directory_uri() . '/assets/stylesheets/gallery-page.css');
		wp_enqueue_script('gallery-scripts', get_template_directory_uri() . '/assets/js/gallery-page.js', array(), false);
	}

	// Gallery page styles/scripts
	if (is_page('pricing')) {
		wp_enqueue_style('pricing_style', get_template_directory_uri() . '/assets/stylesheets/pricing-page.css');
	}

	if (is_page('contacts')) {
		wp_enqueue_style('contacts_styles', get_template_directory_uri() . '/assets/stylesheets/contacts-page.css');
	}

	if (is_page('faq')) {
		wp_enqueue_style('contacts_styles', get_template_directory_uri() . '/assets/stylesheets/faq-page.css');
	}

	if (is_front_page()) {
		wp_enqueue_style('home-styles', get_template_directory_uri() . '/assets/stylesheets/home-page.css');
	}

}
add_action('wp_enqueue_scripts', 'zoohotel_scripts', 10, 1);

function add_footer_styles()
{
	wp_enqueue_style('footer_styles', get_template_directory_uri() . '/assets/stylesheets/footer.css');
};
add_action('get_footer', 'add_footer_styles');

function add_header_styles()
{
	wp_enqueue_style('header_styles', get_template_directory_uri() . '/assets/stylesheets/header.css');
};
add_action('get_header', 'add_header_styles', 10, 1);

function add_header_scripts()
{
	wp_enqueue_script('header-js', get_template_directory_uri() . '/assets/js/header.js', array(), false);
	wp_enqueue_script('pricing-page-js', get_template_directory_uri() . '/assets/js/pricing-page.js', array(), false);
};
add_action('wp_head', 'add_header_scripts', );