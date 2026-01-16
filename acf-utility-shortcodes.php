<?php
/*
 * Plugin Name: ACF Utility Shortcodes
 * Plugin URI:  https://github.com/HarshZavare/acf-utility-shortcodes
 * Description: Utility shortcodes for displaying ACF fields with optional post ID support.
 * Version:     1.0.0
 * Author:      Harsh Zavare
 * License:     GPL v2 or later
 * Text Domain: acf-utility-shortcodes
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'ACF_UTIL_PATH', plugin_dir_path( __FILE__ ) );

require_once ACF_UTIL_PATH . 'includes/class-acf-shortcodes.php';
require_once plugin_dir_path( __FILE__ ) . 'includes/acf-text-shortcode.php';

