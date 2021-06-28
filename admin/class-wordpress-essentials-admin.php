<?php

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://github.com/EmpiricalCodes
 * @since      1.0.0
 *
 * @package    Wordpress_Essentials
 * @subpackage Wordpress_Essentials/admin
 */

 /**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Wordpress_Essentials
 * @subpackage Wordpress_Essentials/admin
 * @author     Emperical Codes <hey@bhanusingh.in>
 */
class Wordpress_Essentials_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Twig instance.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      object    $twig    Single Twigs instance.
	 */
	private $twig;


	/**
	 * Submenu array.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      array    $submenus    Array containing all submenus.
	 */
	private $submenus;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param string $plugin_name The name of this plugin.
	 * @param string $version The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version     = $version;
		$this->intialize_twig();
		$this->intialize_menu_list();
	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wordpress_Essentials_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wordpress_Essentials_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/wordpress-essentials-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wordpress_Essentials_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wordpress_Essentials_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/wordpress-essentials-admin.js', array( 'jquery' ), $this->version, false );

	}

	/**
	 * Initialize twig filesystem and Environment.
	 *
	 * @since    1.0.0
	 */
	private function intialize_twig() {
		$loader = new FilesystemLoader( plugin_dir_path( dirname( __FILE__ ) ) . 'templates' );


		$this->twig = new Environment( $loader,
			array(
				'cache' => plugin_dir_path( dirname( __FILE__ ) ) . 'cache',
				'debug' => true,
			)
		);

		// Enable debugging.
		$this->twig->addExtension( new \Twig\Extension\DebugExtension() );

		$this->twig->addFunction( 
			new \Twig\TwigFunction( 
				'assets',
				function ( $asset ) {
					// implement whatever logic you need to determine the asset path.
					return sprintf( plugin_dir_url( dirname( __FILE__ ) ) . 'admin/assets/images/%s', ltrim( $asset, '/' ) );
				}
			)
		);
	}

	/**
	 * Initialize submenu list.
	 *
	 * @since    1.0.0
	 */
	private function intialize_menu_list() {
		$this->submenus = array(
			'value-a' => 'Value A',
			'value-b' => 'Value B',
		);

	}

	/**
	 * Add all menus for the plugin.
	 *
	 * @since    1.0.0
	 */
	public function create_admin_menu() {
		add_menu_page( 'WordPress Essentials', 'WordPress Essentials', 'manage_options', $this->plugin_name, array( $this, 'add_plugins_settings_page' ), 'dashicons-image-filter', 81 );
	}

	/**
	 * Add Settings Page.
	 *
	 * @since    1.0.0
	 */
	public function add_plugins_settings_page() {
		$foo = array(
			'asdas' => 'asdas',
		);
		echo $this->twig->render( 'index.html.twig', ['foo' => $foo] );
	}


}
