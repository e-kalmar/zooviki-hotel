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
  public function delete($id)
  {
    if ( $id && is_user_logged_in() ) {
      global $wpdb;
      $table_name = $wpdb->prefix . "zoohotel_services";

      $wpdb->delete( 
        $table_name, 
        array(
          'id' => $id,
        )
      );

      return wp_send_json('Deleted');
    }
  }
}