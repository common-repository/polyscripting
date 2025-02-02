<?php

/*
Plugin Name: Polyscripting
Plugin URI: http://github
Description: A brief description of the Plugin.
Version: 1.0
Author: bluegaston
License:
Copyright (c) 2020 Polyverse Corporation
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


// Make sure we don't expose any info if called directly

//if ( !function_exists( 'add_action' ) ) {
//    echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
//    exit;
//}

define( 'POLYSCRIPT_VERSION', '1.0.0' );
define( 'POLYSCRIPT__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

register_activation_hook( __FILE__, array( 'Polyscript', 'plugin_activation' ) );


require_once( POLYSCRIPT__PLUGIN_DIR . 'class.polyscript.php' );

if ( is_admin() ) {
    require_once( POLYSCRIPT__PLUGIN_DIR . 'polyscriptingstate.php' );
    add_action( 'init', array( 'PolyscriptingState', 'init' ) );
}

add_action( 'init', array( 'Polyscript', 'init' ) );


