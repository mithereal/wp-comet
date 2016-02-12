<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://github.com/mithereal
 * @since      1.0.0
 *
 * @package    Comet_Tools
 * @subpackage Comet_Tools/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Comet_Tools
 * @subpackage Comet_Tools/admin
 * @author     Jason Clark <mithereal@gmail.com>
 */
class Comet_Tools_Admin {

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
     * The options name to be used in this plugin
     *
     * @since  	1.0.0
     * @access 	private
     * @var  	string 		$option_name 	Option name of this plugin
     */
    private $option_name = 'comet-tools';

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

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
		 * defined in Comet_Tools_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Comet_Tools_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/comet-tools-admin.css', array(), $this->version, 'all' );

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
		 * defined in Comet_Tools_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Comet_Tools_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/comet-tools-admin.js', array( 'jquery' ), $this->version, false );

	}

    /**
     * Add an options page under the Settings submenu
     *
     * @since  1.0.0
     */
    public function add_options_page() {

        $this->plugin_screen_hook_suffix = add_options_page(
            __( 'Comet Settings', 'comet-settings' ),
            __( 'Comet Import', 'comet-import' ),
            'manage_options',
            $this->plugin_name,
            array( $this, 'display_options_page' )
        );




    }

    /**
     * Render the options page for plugin
     *
     * @since  1.0.0
     */
    public function display_options_page() {
        include_once 'partials/comet-tools-admin-display.php';
    }
    public function register_setting() {
        add_settings_section(
            $this->option_name . '_general',
            __( 'Import', 'comet_tools' ),
            array( $this, 'comet_tools_main_cb' ),
            $this->plugin_name
        );
    }

    public function import_csv() {
        // Handle request then generate response using WP_Ajax_Response
    }

    /**
     * Render the text for the general section
     *
     * @since  1.0.0
     */
    public function comet_tools_main_cb() {
        echo '<p>' . __( '<button id ="comet-import" class="button button-primary" >Import From Comet</button><input type="file" id="comet_csv" style="display: none;"  />', 'comet-tools' ) . '</p>';
    }





}
