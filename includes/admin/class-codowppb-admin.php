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
    		
		}

		//define functionality which run upon plugin activation
		public static function activate() {
			
		}

		//define functionality which run upon plugin de-activation
		public static function deactivate() {
			
		}
		
	}
}

?>