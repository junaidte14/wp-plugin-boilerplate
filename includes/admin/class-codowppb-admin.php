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
			// Action hook to enqueue admin specific styles and scripts
    		add_action('admin_enqueue_scripts', array($this, 'enqueue_admin_styles_scripts'));
			// Action hook to add menu in settings page
			add_action( 'admin_menu', array($this, 'codowppb_admin_menu') );
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

		public function codowppb_admin_menu(){
			add_options_page(
				__( 'CODOWPPB', CODOWPPB_NAME ),
				__( 'CODOWPPB', CODOWPPB_NAME ),
				'manage_options',
				CODOWPPB_NAME,
				array($this, 'display_codowppb_admin_page')
			);
		}
	
		public function display_codowppb_admin_page(){
			require_once CODOWPPB_BASE_DIR . '/includes/admin/partials/codowppb-admin-display.php';
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