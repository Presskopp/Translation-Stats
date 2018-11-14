<?php
/**
 * Translation Stats
 *
 * @package      TranslationStats
 * @author       Pedro Mendonça
 * @copyright    2018 Pedro Mendonça
 * @license      GPL2
 *
 * @wordpress-plugin
 * Plugin Name:       Translation Stats
 * Plugin URI:        https://github.com/pedro-mendonca/translation-stats
 * GitHub Plugin URI: https://github.com/pedro-mendonca/translation-stats
 * Description:       Show WordPress.org translation stats in your installed plugins list.
 * Version:           0.7.0
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
require_once dirname( __FILE__ ) . '/includes/class-tstats-main.php';

new TStats_Main();
