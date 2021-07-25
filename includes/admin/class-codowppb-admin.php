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

		//define functionality which run upon plugin activation
		public static function activate() {
			
		}

		//define functionality which run upon plugin de-activation
		public static function deactivate() {
			
		}

		//enque admin styles and scripts
		public function enqueue_admin_styles_scripts(){
			wp_enqueue_style('codowppb-admin-style', CODOWPPB_PLUGIN_URL . 'assets/css/codowppb-admin.css', array(), CODOWPPB_VERSION, 'all');
			wp_enqueue_script('codowppb-admin-script', CODOWPPB_PLUGIN_URL . 'assets/js/codowppb-admin.js', array('jquery'), CODOWPPB_VERSION, '');
        }
		
	}
}

?>