<?php
/*
Plugin Name: QuickTags Demo
Plugin URI: 
Description: 
Version: 1.0
Author: Sohan
Author URI: https://sohan.co
License: GPLv2 or later
Text Domain: quicktags-demo
Domain Path: /languages/
*/

function qtsd_assets ( $screen ) {
    if ( 'post.php' == $screen ) {
        wp_enqueue_scripts( 'qtsd-main-js', plugin_dir_url( __FILE__ )."/assets/js/qt.js" );
    }
}
add_action( 'admin_enqueue_scripts', 'qtsd_assets' );