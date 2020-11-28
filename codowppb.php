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

if ( ! defined( 'codowppb_BASE_FILE' ) )
    define( 'codowppb_BASE_FILE', __FILE__ );
if ( ! defined( 'codowppb_BASE_DIR' ) )
    define( 'codowppb_BASE_DIR', dirname( codowppb_BASE_FILE ) );
if ( ! defined( 'codowppb_PLUGIN_URL' ) )
	define( 'codowppb_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
	
/**
 * The code that runs during plugin activation.
 */
function activate_codowppb() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-codowppb-activator.php';
	Codowppb_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 */
function deactivate_codowppb() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-codowppb-deactivator.php';
	Codowppb_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_codowppb' );
register_deactivation_hook( __FILE__, 'deactivate_codowppb' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-codowppb.php';

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

	$plugin = new Codowppb();
	$plugin->run();

}
run_codowppb();
