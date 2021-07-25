<?php
/**
 * The plugin class that is used to define common plugin functionality.
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

if (!class_exists("CodoWPPB_Common")){
    class CodoWPPB_Common{

    	public function __construct(){
    		add_action('wp_enqueue_scripts', array($this, 'enqueue_common_styles_scripts'));
		}

		//enque common styles and scripts
		public function enqueue_common_styles_scripts(){
			wp_enqueue_style('codowppb-common-style', CODOWPPB_PLUGIN_URL . 'assets/css/codowppb-common.css', array(), CODOWPPB_VERSION, 'all');
			wp_enqueue_script('codowppb-common-script', CODOWPPB_PLUGIN_URL . 'assets/js/codowppb-common.js', array('jquery'), CODOWPPB_VERSION, '');
        }
		
	}

}

?>