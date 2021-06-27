<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/EmpiricalCodes
 * @since      1.0.0
 *
 * @package    Wordpress_Essentials
 * @subpackage Wordpress_Essentials/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wordpress_Essentials
 * @subpackage Wordpress_Essentials/includes
 * @author     Emperical Codes <hey@bhanusingh.in>
 */
class Wordpress_Essentials_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wordpress-essentials',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
