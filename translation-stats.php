<?php
/**
 * Plugin Name:       Translation Stats
 * Plugin URI:        https://github.com/pedro-mendonca/translation-stats
 * GitHub Plugin URI: https://github.com/pedro-mendonca/translation-stats
 * Description:       Show WordPress.org translation stats in your installed plugins list.
 * Version:           0.6.4
 * Author:            Pedro Mendonça
 * Author URI:        https://pedromendonca.pt
 * License:           GPL2
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       translation-stats
 * Domain Path:       /languages
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Include class-files used by our plugin.
require_once( dirname( __FILE__ ) . '/includes/class-translation-stats.php' );
require_once( dirname( __FILE__ ) . '/includes/class-translation-stats-options.php' );

new Translation_Stats;
