<?php
/**
 * The plugin class that is used to define admin-specific plugin functionality.
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

if (!class_exists("CodoWPPB_Admin")){
    class CodoWPPB_Admin{

    	public function __construct(){
    		add_action('admin_enqueue_scripts', array($this, 'enqueue_admin_styles_scripts'));
		}

		/**
		 * Define functionality which run upon plugin activation
		 * 
		 * @since 1.0.0
		 */

		public static function activate() {
			
		}

		/**
		 * Define functionality which run upon plugin de-activation
		 * 
		 * @since 1.0.0
		 */
		
		public static function deactivate() {
			
		}

		/**
		 * Enqueue admin styles and scripts
		 * 
		 * @since 1.0.0
		 */

		public function enqueue_admin_styles_scripts(){
			wp_enqueue_style('codowppb-admin-style', CODOWPPB_PLUGIN_URL . 'assets/css/codowppb-admin.css', array(), CODOWPPB_VERSION, 'all');
			wp_enqueue_script('codowppb-admin-script', CODOWPPB_PLUGIN_URL . 'assets/js/codowppb-admin.js', array('jquery'), CODOWPPB_VERSION, '');
        }
		
	}
}

?>