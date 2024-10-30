<?php
/**
 * The WordPress Plugin Boilerplate.
 *
 * A foundation off of which to build well-documented WordPress plugins that
 * also follow WordPress Coding Standards and PHP best practices.
 *
 * @package   wix_Monetization
 * @author    Ahmed Rageh <admin@wix.cx>
 * @license   GPL-2.0+
 * @link      https://wix.cx
 * @copyright 2016 wix.cx
 *
 * @wordpress-plugin
 * Plugin Name:       wix Monetization
 * Plugin URI:        http://wordpress.org/plugins/wix-website-monetization
 * Description:       wix way to monetize your traffic
 * Version:           1.1.5
 * Author:            wix Team
 * Author URI:        https://wix.cx
 * Text Domain:       en
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

require_once( plugin_dir_path( __FILE__ ) . 'class-wix-monetization.php' );
require_once( plugin_dir_path( __FILE__ ) . 'class-wix-monetization-admin.php' );

if( !class_exists( 'WP_Http' ) )
    include_once( ABSPATH . WPINC. '/class-http.php' );

/*
 * Register hooks that are fired when the plugin is activated or deactivated.
 * When the plugin is deleted, the uninstall.php file is loaded.
 *
 */
register_activation_hook( __FILE__, array( 'wix_Monetization', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'wix_Monetization', 'deactivate' ) );

add_action( 'plugins_loaded', array( 'wix_Monetization', 'get_instance' ) );
add_action( 'plugins_loaded', array( 'wix_Monetization_Admin', 'get_instance' ) );
