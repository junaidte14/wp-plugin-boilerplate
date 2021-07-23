<?php
/**
 * The core plugin class that is used to define internationalization,
 * admin-specific functionality, and public-facing functionality.
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

if (!class_exists("CodoWPPB_Core")){
    class CodoWPPB_Core{

    	public function __construct(){
    		$this->codowppb_init();
		}

		public function codowppb_init(){
			/**        
		    * Load languages.     
		    */
		    if ( function_exists( 'load_plugin_textdomain' ) ){
				load_plugin_textdomain('codowppb', false, CODOWPPB_BASE_DIR . '/languages/');
			}

            //load classes with common functionality
			require_once CODOWPPB_BASE_DIR .'/includes/common/class-codowppb-common.php';
			new CodoWPPB_Common();

			if(is_admin()){
                //load classes with admin-specific functionality
    			require_once CODOWPPB_BASE_DIR .'/includes/admin/class-codowppb-admin.php';
				new CodoWPPB_Admin();
    		}else{
                //load classes with public-facing functionality
    			require_once CODOWPPB_BASE_DIR .'/includes/public/class-codowppb-public.php';
				new CodoWPPB_Public();
    		}
		}
		
	}
}

?>