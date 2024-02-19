<?php

if (!function_exists('create_table_store')) {
    function create_table_store()
    {
        global $wpdb;

        $charsetCollate = $wpdb->get_charset_collate();

        // Dynamic prefix table
        $tableName = $wpdb->prefix . "stores";

        // Create data table
        $wpdb->query(
            "CREATE TABLE IF NOT EXISTS $tableName(
            id INT(11) NOT NULL AUTO_INCREMENT,
            name VARCHAR(150) NOT NULL,
            address TEXT NOT NULL,
            latitud DOUBLE NOT NULL,
            longitud DOUBLE NOT NULL,
            PRIMARY KEY(id))$charsetCollate;"
        );

        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    }
}
