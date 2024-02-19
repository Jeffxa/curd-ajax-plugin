<?php

// Uninstall hook

// if uninstall.php is not called by wordpress, die

if (!defined('WP_UNINSTALL_PLUGIN')) {
    die('You do not haver permission for this action');
}

$crudStores = 'crud-stores';

delete_options($crudStores);


if (!function_exists('drop_table_store')) {

    function drop_table_store()
    {
        global $wpdb;

        $tableName = $wpdb->prefix . "stores";

        $sql = "DROP TABLE $tableName";
        $wpdb->query($sql);

        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    }
}
