<?php

// Deactivation hook

if (!function_exists('deactivation_hook')) {
    function deactivation_hook()
    {
        // Clear the permalinks to remove our post type's rules from the database.
        flush_rewrite_rules();
    }
}
