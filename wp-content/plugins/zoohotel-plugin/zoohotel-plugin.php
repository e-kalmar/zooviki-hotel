<?php 
/**
 * Plugin Name: Zoohotel booking plugin
 * Description: Pet hotel booking helper
 * Author: e-kalmar
 * Author URI: https://github.com/e-kalmar
 * Version: 1.0.0
 * Text Domain: zoohotel-plugin
 */

class ZooHotelPlugin {


    public function __construct(){
        // Create custom post type
        add_action('init', array($this, 'create_custom_post_type'));

        // Add assets
        add_action('wp_enqueue_scripts', array($this, 'load_assets'));


    }
    public function create_custom_post_type(){

        $args = array(
            'public' => true,
            'has_archive' => true,
            'supports' => array('title'),
            'exclude_from_search' => true,
            'publicly_queryable' => false,
            'capability' => 'manage_options',
            'labels' => array(
                'name' => 'Bookings',
                'singular_name' => 'Booking',


            ),
            'menu_icon' => 'dashicons-calendar',


        );
        register_post_type('zoohotel_plugin', $args);
    }
    public function load_assets(){
        wp_enqueue_style(
            'zoohotel-plugin',
             plugin_dir_url(__FILE__) . 'assets/css/zoohotel-plugin.css',
             array(),
             1,
             'all');
        wp_enqueue_script(
            'zoohotel-plugin',
             plugin_dir_url(__FILE__) . 'assets/js/zoohotel-plugin.js',
             array(),
             1,
             'all');
        wp_enqueue_script( 'wp-util' );

    }
        



  
  



    
}



new ZooHotelPlugin;
 ?>
