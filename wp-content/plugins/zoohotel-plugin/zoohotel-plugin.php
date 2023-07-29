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
    private $ROOM_TYPES;
    private $all_guests;

    public function __construct(){
    $this->all_guests = array();
    $this->ROOM_TYPES = array();


    // set i to total number of room types
    for ($i=0; $i <6; $i++) {
        array_push($this->all_guests,array());
        foreach ($this->get_bookings_by_room_type($i+1) as $value) {
            array_push($this->all_guests[$i],array(
                get_post_meta($value,'checkin-date')[0],
                get_post_meta($value,'checkout-date')[0],
                get_post_meta($value,'first-name')[0] . ' ' . get_post_meta($value,'last-name')[0],
                get_post_meta($value,'client-phone')[0],
                get_post_meta($value,'client-address')[0],
                get_post_meta($value,'pet-name')[0],
                get_post_meta($value,'pet-name')[0],
                get_post_meta($value,'pet-age')[0],
                get_post_meta($value,'uuid')[0],
                get_post_meta($value,'status')[0],
            ));
        }
        if(!empty($this->all_guests[$i])){
        array_push($this->ROOM_TYPES,
        array(
            'Room Type '. strval($i+1),
            $this->all_guests[$i]

        ));
    }
    }

        // array_push($this->ROOM_TYPES,
        //     array(
        //         "Room Type 1",
        //         $this->all_guests[0]

        // ),
        //     array(
        //         "Room Type 2",
        //         $this->all_guests[1]
        //     ),
        //     array(
        //         "Room Type 3",
        //         $this->all_guests[2]
        //     ),
        // );


        // $this->ROOM_TYPES =array(
        // //     array(
        // //         "Room Type 1",
        // //         $this->room_type1_guests

        // //     ),
        // //     array(
        // //         "Room Type 2",
        // //         array(
        // //             array("2023-07-28", "Alice Johnson", "111-222-3333", "789 Elm St", "Luna", "Poodle", "4", "1"),
        // //         )
        // //     ),
        // //     // Add more headers and data as needed
        // // );


        // Set default timezone
        date_default_timezone_set('Europe/Sofia');

        // Create custom post type
        add_action('init', array($this, 'create_custom_post_type'));

        // Add assets
        add_action('wp_enqueue_scripts', array($this, 'load_assets'));

        // Register REST API
        add_action('rest_api_init', array($this, 'register_rest_api'));

        // Add sub menu page to the plugin
        add_action('admin_menu', array($this, 'add_rooms_sub_menu'));

    }


    public function get_bookings_by_room_type($room_type){
        $args = array(
            'post_type'  => 'zoohotel_plugin',
            'meta_query' => array(
                array(
                    'key'   => 'room-type',
                    'value' => $room_type,
                )
            )
        );
        $result = get_posts($args);
        $IDs = array();

         foreach ($result as $key => $value) {
            array_push($IDs,$value->ID);
        }
         return $IDs;
    }

    public function get_booking_by_uuid($uuid){
        $args = array(
            'post_type'  => 'zoohotel_plugin',
            'meta_query' => array(
                array(
                    'key'   => 'uuid',
                    'value' => $uuid,
                )
            )
        );
        $result = get_posts($args);
        $IDs = array();

         foreach ($result as $key => $value) {
            array_push($IDs,$value->ID);
        }
         return $IDs;
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

    public function add_rooms_sub_menu()
    {
        add_submenu_page(
        'edit.php?post_type=zoohotel_plugin',
        'Manage Rooms',
        'Rooms',
        'manage_options',
        'manage_rooms',
        array($this,'view_rooms'),
        '0');
    }
    public function view_rooms(){

        ?>
        <style>
         /* Style for the dropdown button */
         .collapsible-btn {
            background-color: #f2f2f2;
            color: black;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 16px;
        }

        /* Style for the active dropdown button */
        .active {
            background-color: #ccc;
        }

        /* Style for the collapsible content (hidden by default) */
        .collapsible-content {
            display: none;
            overflow: hidden;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        /* Add some space for the button */
        td:last-child {
            padding-right: 20px;
        }

        .actions{
            display:flex;
            flex-direction: column;
            gap:10px;
        }
    </style>


        <?php



foreach ($this->ROOM_TYPES as $table) {
    $header = $table[0];
    $data = $table[1];
    echo '<button class="collapsible-btn">' . $header . '</button>';
    echo '<div class="collapsible-content">';
    echo '<table>';
    echo '<tr>';
    echo '<th>Пристигане</th>';
    echo '<th>Заминаване</th>';
    echo '<th>Име</th>';
    echo '<th>Телефон</th>';
    echo '<th>Адрес</th>';
    echo '<th>Име на любмец</th>';
    echo '<th>Порода</th>';
    echo '<th>Възраст</th>';
    echo '<th>ID</th>';
    echo '<th>Статус</th>';
    echo '<th>Действия</th>';
    echo '</tr>';

    foreach ($data as $row) {
        echo '<tr>';
        foreach ($row as $key=>$value) {

            echo '<td>' . $value . '</td>';
        }


        $currentID = $this->get_booking_by_uuid($row[8])[0];
        echo '<td><form method="post">';
        echo '<input name="uuid" hidden value="'. $row[8] . '"></input>';
        echo '<div class="actions">';
        echo '<button  class="btn btn-success" type="submit" name="confirm-btn">Потвърди</button>';
        echo '<a href='. get_site_url() . '/wp-admin/post.php?post='.$currentID.'&action=edit class="btn btn-warning" name="edit-btn">Промени</a>';
        echo '<button  class="btn btn-primary" type="submit" name="checkout-btn">Check-out</button>';
        echo '<button  class="btn btn-danger" type="submit" name="delete-btn" >Изтрий</button>';
        echo '</div>';
        echo '</form></td>';

        echo '</tr>';
    }
        if(isset($_POST['confirm-btn'])){
            $this->confirmBooking($_POST['uuid']);
        };
        if(isset($_POST['checkout-btn'])){
            $this->checkoutRoom($_POST['uuid']);
        };
        if(isset($_POST['delete-btn'])){
            $this->deleteBooking($_POST['uuid']);
        };

        echo '</table>';
        echo '</div>';
    }

    }


    public function confirmBooking($uuid){
        $post = $this->get_booking_by_uuid($uuid)[0];
        update_post_meta($post,'status','Confimred');
        echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='. get_site_url() .'/wp-admin/edit.php?post_type=zoohotel_plugin&page=manage_rooms">';


    }
    public function checkoutRoom($uuid){
        $post = $this->get_booking_by_uuid($uuid)[0];
        update_post_meta($post,'status','Checked-out');
        echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='. get_site_url() .'/wp-admin/edit.php?post_type=zoohotel_plugin&page=manage_rooms">';

    }

    public function deleteBooking($uuid){
        $post = $this->get_booking_by_uuid($uuid)[0];
        wp_trash_post($post);
        echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='. get_site_url() .'/wp-admin/edit.php?post_type=zoohotel_plugin&page=manage_rooms">';

    }

    public function load_assets(){
        if (is_page('pricing')) {
            wp_enqueue_style('zoohotel-plugin', plugin_dir_url(__FILE__) . 'assets/css/zoohotel-plugin.css', array(), 1, 'all');
            wp_enqueue_script('zoohotel-plugin', plugin_dir_url(__FILE__) . 'assets/js/zoohotel-plugin.js', array(), 1, 'all');
            wp_enqueue_script('wp-util');
        }
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
        $uuid = uniqid("");

        if(!wp_verify_nonce($nonce, 'wp_rest')){
            return new WP_REST_Response("Message not sent", 422);
        }

        $postarr = array(
            'post_type'   => 'zoohotel_plugin',
            'post_title'  => 'Booking form - ' . ' ' . date("Y/m/d") . ' - ' . date("h:i:sa") . ' - ' . $uuid,
            'post_status' => 'publish',
            'post_id'     => 'id',
        );

        $post_id = wp_insert_post($postarr);

        foreach ($params as $label => $value) {
            add_post_meta($post_id,$label,$value);
        }
        add_post_meta($post_id,"uuid",$uuid,true);
        add_post_meta($post_id,"status","Pending");
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

?>
<script>
document.addEventListener("DOMContentLoaded", () => {
    let collapsibleBtns = document.querySelectorAll('.collapsible-btn');
for (let i = 0; i < collapsibleBtns.length; i++) {
    console.log(collapsibleBtns[i]);
    collapsibleBtns[i].addEventListener('click', function() {
        this.classList.toggle('active');
        const content = this.nextElementSibling;
        if (content.style.display === 'block') {
            content.style.display = 'none';
        } else {
            content.style.display = 'block';
        }
    });
}

});




function confirmData() {
    // Add your code here to handle the confirm button click
    // For example, you can submit the form or perform some other action
    // This function will be called when the "Confirm" button is clicked
    // You can access the relevant row data here if needed
}
</script>
<?php
