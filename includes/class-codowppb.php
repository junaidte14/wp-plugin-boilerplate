<?php
/**
 * The core plugin class that is used to define internationalization,
 * admin-specific functionality, and public-facing functionality.
 * 
 * @since 1.0.0
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
		    * Load languages
			*
			* @since 1.0.0
		    */
		    if ( function_exists( 'load_plugin_textdomain' ) ){
				load_plugin_textdomain('codowppb', false, CODOWPPB_BASE_DIR . '/languages/');
			}

			/**
			 * Load classes with common functionality
			 * 
			 * @since 1.0.0
			 */
            
			require_once CODOWPPB_BASE_DIR .'/includes/common/class-codowppb-common.php';
			new CodoWPPB_Common();

			if(is_admin()){
				/**
				 * Load classes with admin-specific functionality
				 * 
				 * @since 1.0.0
				 */
                
    			require_once CODOWPPB_BASE_DIR .'/includes/admin/class-codowppb-admin.php';
				new CodoWPPB_Admin();
    		}else{
				/**
				 * Load classes with public-facing functionality
				 * 
				 * @since 1.0.0
				 */
                
    			require_once CODOWPPB_BASE_DIR .'/includes/public/class-codowppb-public.php';
				new CodoWPPB_Public();
    		}
		}
		
	}
}

?>