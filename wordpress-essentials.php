<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/EmpiricalCodes
 * @since             0.0.1-dev
 * @package           Wordpress_Essentials
 *
 * @wordpress-plugin
 * Plugin Name:       WordPress Essentials
 * Plugin URI:        https://github.com/EmpiricalCodes/wordpress-essentials
 * Description:       WordPress Essentials provides you with clean user-interface to toggle common monotonous tasks that you normally do with adding code in your.
 * Version:           0.0.1-dev
 * Author:            Empirical Codes
 * Author URI:        https://github.com/EmpiricalCodes
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wordpress-essentials
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'WORDPRESS_ESSENTIALS_VERSION', '1.0.0' );

/*
 * Requiring autoload.php file for the proper functioning of the plugin.
 */
if ( ! file_exists( plugin_dir_path( __FILE__ ) . 'vendor/autoload.php' ) && is_admin() ) {
	echo "<div class='notice notice-warning'>
				<p> <b>WordPress Essentials</b> plugin will not work because of missing <code>vendor/autoload.php</code> file. 
				Run <code>composer install</code> to fix this inside <code> ' . plugin_dir_path( __FILE__ ) . '</code> directory.
				</p></div>";
} else {
	require_once plugin_dir_path( __FILE__ ) . 'vendor/autoload.php';
}


/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wordpress-essentials-activator.php
 */
function activate_wordpress_essentials() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wordpress-essentials-activator.php';
	Wordpress_Essentials_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wordpress-essentials-deactivator.php
 */
function deactivate_wordpress_essentials() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wordpress-essentials-deactivator.php';
	Wordpress_Essentials_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wordpress_essentials' );
register_deactivation_hook( __FILE__, 'deactivate_wordpress_essentials' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wordpress-essentials.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wordpress_essentials() {
	$plugin = new Wordpress_Essentials();
	$something = 'Okay';
	$plugin->run();
}
run_wordpress_essentials();
