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
        // Set default timezone
        date_default_timezone_set('Europe/Sofia');

        // Create custom post type
        add_action('init', array($this, 'create_custom_post_type'));

        // Add assets
        add_action('wp_enqueue_scripts', array($this, 'load_assets'));

        // Register REST API
        add_action('rest_api_init', array($this, 'register_rest_api'));
    }

    public function create_custom_post_type(){

        $args = array(
            'public' => true,
            'has_archive' => true,
            'supports' => array('title','custom-fields'),
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
        wp_enqueue_style('zoohotel-plugin', plugin_dir_url(__FILE__) . 'assets/css/zoohotel-plugin.css', array(), 1, 'all');
        wp_enqueue_script('zoohotel-plugin', plugin_dir_url(__FILE__) . 'assets/js/zoohotel-plugin.js', array(), 1, 'all');
        wp_enqueue_script('wp-util');
    }

    public function register_rest_api(){
        register_rest_route('zoohotel-plugin', 'submit-booking-form', array(
            'methods' => 'POST',
            'callback' => array($this, 'handle_booking_form'),
        ));
    }

    public function handle_booking_form($data){
        $headers = $data->get_headers();
        $params = $data->get_params();
        $nonce = $headers['x_wp_nonce'][0];

        
        if(!wp_verify_nonce($nonce, 'wp_rest')){
            return new WP_REST_Response("Message not sent", 422);
        }

        $postarr = array(
            'post_type'   => 'zoohotel_plugin',
            'post_title'  => 'Booking form - ' . ' ' . date("Y/m/d") . ' - ' . date("h:i:sa"),
            'post_status' => 'publish',
            'post_id'     => 'id',
        );

        $post_id = wp_insert_post($postarr);

        foreach ($params as $label => $value) {
            add_post_meta($post_id,$label,$value);
        }

        if($post_id){
            return new WP_REST_Response('SUCCESS', 200);
        }
    }
}

/* Store an instance of the plugin in the $GLOBALS collection. Otherwise the object will be stored as 'orphaned object'
* REFS:
*   An orphaned object is one that cannot be found in the directory tree.
*   File system objects can become orphaned when the directories that referenced them are damaged.
*/
$GLOBALS['zoohotel-plugin'] = new ZooHotelPlugin();