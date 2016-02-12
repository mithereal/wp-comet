<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://github.com/mithereal
 * @since             1.0.0
 * @package           Comet_Tools
 *
 * @wordpress-plugin
 * Plugin Name:       Comet 
 * Plugin URI:        https://github.com/mithereal/wp-comet
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Jason Clark
 * Author URI:        http://github.com/mithereal
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       comet-tools
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-comet-tools-activator.php
 */
function activate_comet_tools() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-comet-tools-activator.php';
	Comet_Tools_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-comet-tools-deactivator.php
 */
function deactivate_comet_tools() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-comet-tools-deactivator.php';
	Comet_Tools_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_comet_tools' );
register_deactivation_hook( __FILE__, 'deactivate_comet_tools' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-comet-tools.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_comet_tools() {

	$plugin = new Comet_Tools();
	$plugin->run();

}

run_comet_tools();