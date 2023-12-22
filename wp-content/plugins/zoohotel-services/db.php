<?php
class ZoohotelServicePluginEntity
{
  /**
   * Create table on ZoohotelServicePlugin activation
   * @return void
   */
  public function index()
  {
    global $wpdb;
    $table_name = $wpdb->prefix . "zoohotel_services";
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
      id MEDIUMINT(9) NOT NULL AUTO_INCREMENT,
      created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ,
      updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
      service VARCHAR(250) NOT NULL,
      price DOUBLE(10,2) NOT NULL,
      description VARCHAR(250) DEFAULT '' NULL,
      category MEDIUMINT(9) DEFAULT 1 NULL,
      PRIMARY KEY  (id)
    ) $charset_collate;";
    
    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql );
  }

  public function ajax_hooks_callstack()
  {
    // DELETE SERVICE AJAX
    add_action( 'wp_ajax_delete', array($this, 'delete_service') );
    add_action( 'wp_ajax_nopriv_delete', array($this, 'delete_service') );

    // UPDATE SERVICE AJAX
    add_action( 'wp_ajax_update', array($this, 'update_service') );
    add_action( 'wp_ajax_nopriv_update', array($this, 'update_service') );
  }

  /**
   * Drop tables on ZoohotelServicePlugin deactivation
   * @return void
   */
  public function drop()
  {
    global $wpdb;
    $table_name = $wpdb->prefix . "zoohotel_services";
    $sql = "DROP TABLE IF EXISTS $table_name";
    $wpdb->query($sql);
  }

  /**
   * Create row in ZoohotelServicePlugin db table
   * @return void
   */
  public function store($service = '', $price = '', $description = '', $category = 1)
  {
    global $wpdb;
    $table_name = $wpdb->prefix . "zoohotel_services";

    $wpdb->insert( 
      $table_name, 
      array( 
        'service' => $service,
        'price' => $price,
        'description' => $description,
        'category' => $category,
      ) 
    );
  }

  /**
   * Delete row in ZoohotelServicePlugin db table
   * @return void
   */
  public function delete_service()
  {
    $id = $_POST["id"];

    if ( $id && is_user_logged_in() ) {
      global $wpdb;
      $table_name = $wpdb->prefix . "zoohotel_services";

      $wpdb->delete( 
        $table_name, 
        array(
          'id' => $id,
        )
      );

      $response["status"] = 200;
      $response["flashMessage"] = "Услугата е изтрита успешно";
      $response["service_id"] = $id;

      wp_send_json($response);
      wp_die();
    }
  }

  /**
   * Update row in ZoohotelServicePlugin db table
   * @return void
   */
  public function update_service()
  {
    $id = $_POST["id"];

    if ( $id && is_user_logged_in() ) {

      global $wpdb;
      $table_name   = $wpdb->prefix . "zoohotel_services";
      $service      = $_POST["service"];
      $price        = $_POST["price"];
      $description  = $_POST["description"];
      $category     = $_POST["category"];
      $wpdb->update( 
        $table_name, 
        array(
          'service'     => $service,
          'price'       => $price,
          'description' => $description,
          'category'    => $category,
        ),
        array('id' => $id), // Where clause
      );

      $response["status"] = 200;
      $response["flashMessage"] = "Услугата е обновена успешно";
      $response["service_id"] = $id;

      wp_send_json($response);
      wp_die();
    }
  }
}