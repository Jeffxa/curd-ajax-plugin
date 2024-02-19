<?php
/*
* Plugin Name: Crud stores
* Description: Crud stores with ajax
* Version: 1.0
* Requires at least: 5.2
* Requires PHP: 7.2
* Author: Jefferson Espinoza
* Author URI: https://jeffersonespinoza.com/
* License: MIT
* License URI: https://choosealicense.com/licenses/mit/
*/


// Activation hook
require 'activation.php';
register_activation_hook(__FILE__, 'create_table_store');

// Deactivation hook
require_once 'deactivation.php';
register_deactivation_hook(__FILE__, 'deactivation_hook');

global $wpdb;

$store_info = array(
    'name'      => 'La chorrera',
    'address'   => 'Panama West',
    'latitud'   => '12.16',
    'longitud'  => '12.09'
);

$tableName = $wpdb->prefix . 'stores';

$wpdb->insert($tableName, $store_info);
