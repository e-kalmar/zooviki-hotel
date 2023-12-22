<?php
/**
 * Plugin Name: Zoohotel Services
 * Plugin URI: https://github.com/e-kalmar
 * Plugin slug: 
 * Author: e-kalmar
 * Description: From here the user will be able to update/delete or create new services for the zoohotel
 * Version: 1.0.0
 * Plugin URI: https://github.com/e-kalmar
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class ZoohotelServicePlugin
{
  public function __construct()
  {
    if ( !is_admin() ) return;
    $this->get_db_hooks();

    add_action( 'admin_menu', array($this, 'plugin_menu_inclusion') ); // create admin menu
    add_action( 'admin_enqueue_scripts', array($this, 'enqueue_plugin_assets') ); // hook scripts to plugin

    // Handle POST request on submit
    add_action('wp_ajax_add_service', array($this, 'add_service'));

    register_activation_hook(__FILE__, function() {
      // Migrate DB on activation TODO: Add seeder function
      require_once(__DIR__ . '/db.php');
      $db = new ZoohotelServicePluginEntity();
      return $db->index();
    });

    // Delete table on deactivation
    register_deactivation_hook(__FILE__, function() {
      require_once(__DIR__ . '/db.php');
      $db = new ZoohotelServicePluginEntity();
      return $db->drop();
    });
  }

  /**
   * Attach admin menu to access the plugin
   * @return void
   */
  public function plugin_menu_inclusion()
  {
    add_menu_page( 
      'Services',
      'Услуги',
      'manage_options',
      'services',
      array($this, 'on_enter'),
    );
  }

  public function get_db_hooks()
  {
    require_once(__DIR__ . '/db.php');
    $db = new ZoohotelServicePluginEntity();
    return $db->ajax_hooks_callstack();
  }

  /**
   * Do stuff when you enter the plguin view
   * @return void
   */
  public function on_enter()
  {
    require_once('templates/page-table.php');
  }

  /**
   * Register and enqueue a custom stylesheet in the WordPress admin.
   * @return void
   */
  public function enqueue_plugin_assets( $hook )
  {
    // Load assets conditionally
    if ( $hook != 'toplevel_page_services' ) {
      return null;
    }

    // STYLES
    wp_enqueue_style( 'services_plugin_admin_custom_styles', plugin_dir_url( __FILE__ ) . '/assets/style.css', array(), '1.0.0' );

    // SCRIPTS
    wp_enqueue_script( 'services_plugin_admin_custom_scripts', plugin_dir_url( __FILE__ ) . '/assets/main.js');
    wp_enqueue_script('services_plugin_admin_jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js');

    wp_localize_script( 
      'services_plugin_admin_custom_scripts', 
      'queries',
      array( 
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
      )
    );
  }

  /**
   * Form POST Handler
   * @return mixed
   */
  public function add_service()
  {
    if ( empty($_POST) || !is_user_logged_in() ) {
      return new WP_Error(
        'rest_not_logged_in',
        __( 'You are not currently logged in.' ),
        array( 'status' => 401 )
      );
    }

    $service = $_POST['service'];
    $price   = intval($_POST['price']);
    $descr   = $_POST['description'];
    $cat     = $_POST['category'];

    require_once(__DIR__ . '/db.php');
    $db = new ZoohotelServicePluginEntity();
    $db->store($service, $price, $descr, $cat);

    // Redirect to plugin's page
    $url = admin_url('admin.php?page=services');
    wp_redirect($url); 
  }
}

// Instantiate the plugin
$_GLOBAL['zoohotel_services'] = new ZoohotelServicePlugin();