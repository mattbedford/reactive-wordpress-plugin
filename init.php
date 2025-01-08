<?php

/**
 * Plugin Name: reactive-wordpress
 * Description: Adds global theme support for using React JS in a WordPressy way.
 * Version:     1.2.0
 * Author:      Dev Team
 * Text Domain: reactivewordpress
 * Requires PHP:    8.2
 * License:     GPL v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */



// Load custom Reacft stuff.

function add_custom_React_div() {
    echo "<div>";
    echo "<div id='react-app'>";
    echo "</div>";
    echo "</div>";
}
add_action('wp_footer', 'add_custom_React_div');

function load_custom_react_scripts()
{
    if(is_admin()) return;
    $plugin_url  = plugin_dir_url( __FILE__ );
    wp_enqueue_script('react-wp-app-script',
        $plugin_url . 'build/index.js',
        array('wp-element', 'wp-api-fetch', 'react-jsx-runtime'),
        '1.00',
        true);
    wp_enqueue_style('react-wp-app-style',
        $plugin_url . 'build/index.css');
}
add_action('wp_enqueue_scripts', 'load_custom_react_scripts');