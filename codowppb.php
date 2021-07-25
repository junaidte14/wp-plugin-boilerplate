<?php

/**
 * The plugin init file
 *
 * @link              https://codoplex.com
 * @since             1.0.0
 * @package           codowppb
 *
 * @wordpress-plugin
 * Plugin Name:       codowppb
 * Plugin URI:        https://codoplex.com
 * Description:       A WordPress plugin boilerplate to get started with WordPress plugin development.
 * Version:           1.0.0
 * Author:            Junaid Hassan
 * Author URI:        https://codoplex.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       codowppb
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/*
|--------------------------------------------------------------------------
| CONSTANTS
|--------------------------------------------------------------------------
*/
if ( ! defined( 'CODOWPPB_VERSION' ) )
	define( 'CODOWPPB_VERSION', '1.0.0' );
if ( ! defined( 'CODOWPPB_NAME' ) )
	define( 'CODOWPPB_NAME', 'codowppb' );

if ( ! defined( 'CODOWPPB_BASE_FILE' ) )
    define( 'CODOWPPB_BASE_FILE', __FILE__ );
if ( ! defined( 'CODOWPPB_BASE_DIR' ) )
    define( 'CODOWPPB_BASE_DIR', dirname( CODOWPPB_BASE_FILE ) );
if ( ! defined( 'CODOWPPB_PLUGIN_URL' ) )
	define( 'CODOWPPB_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
	
/**
 * The code that runs during plugin activation.
 * 
 * @since 1.0.0
 */
function activate_codowppb() {
	require_once CODOWPPB_BASE_DIR . '/includes/admin/class-codowppb-admin.php';
	CodoWPPB_Admin::activate();
}

/**
 * The code that runs during plugin deactivation.
 * 
 * @since 1.0.0
 */
function deactivate_codowppb() {
	require_once CODOWPPB_BASE_DIR . '/includes/admin/class-codowppb-admin.php';
	CodoWPPB_Admin::deactivate();
}

register_activation_hook( __FILE__, 'activate_codowppb' );
register_deactivation_hook( __FILE__, 'deactivate_codowppb' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific functionality, and public-facing functionality.
 * 
 * @since 1.0.0
 */
require CODOWPPB_BASE_DIR . '/includes/class-codowppb.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_codowppb() {
	new CodoWPPB_Core();
}
run_codowppb();
