<?php
/**
 * The plugin class that is used to define public-facing plugin functionality.
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

if (!class_exists("CodoWPPB_Public")){
    class CodoWPPB_Public{

    	public function __construct(){
    		add_action('wp_enqueue_scripts', array($this, 'enqueue_public_styles_scripts'));
		}

		/**
		 * Enqueue public styles and scripts
		 * 
		 * @since 1.0.0
		 */
		
		public function enqueue_public_styles_scripts(){
			wp_enqueue_style('codowppb-public-style', CODOWPPB_PLUGIN_URL . 'assets/css/codowppb-public.css', array(), CODOWPPB_VERSION, 'all');
			wp_enqueue_script('codowppb-public-script', CODOWPPB_PLUGIN_URL . 'assets/js/codowppb-public.js', array('jquery'), CODOWPPB_VERSION, '');
        }
		
	}
}

?>