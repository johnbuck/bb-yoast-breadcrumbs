<?php
/*
Plugin Name: Beaver Builder Yoast Breadcrumbs Module
Plugin URI:
Description: Beaver Builder Yoast Breadcrumbs Module
Author: Pancake Creative
Version:
Author URI:
*/


define( 'BBY_MODULES_DIR', plugin_dir_path( __FILE__ ) );
define( 'BBY_MODULES_URL', plugins_url( '/', __FILE__ ) );

function bby_load_module() {
    if ( class_exists( 'FLBuilder' ) ) {
        require_once 'bb-yoast-breadcrumbs-module/bb-yoast-breadcrumbs-module.php';
    }
}
add_action( 'init', 'bby_load_module' );