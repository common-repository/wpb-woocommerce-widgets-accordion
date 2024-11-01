<?php
/**
 * Plugin Name:       WPB Widgets Accordion for WooCommerce
 * Plugin URI:        https://wpbean.com/downloads/wpb-woocommerce-widgets-accordion
 * Description:       WPB WooCommerce Widgets Accordion
 * Version:           1.0.4
 * Author:            wpbean
 * Author URI:        https://wpbean.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wpb-woocommerce-widgets-accordion
 * Domain Path:       /languages
 *
 * WC requires at least: 4.0
 * WC tested up to: 5.9.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;



/**
 * Define Text Domain
 */

function wpb_wwa_textdomain() {
	load_plugin_textdomain( 'wpb-woocommerce-widgets-accordion', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}
add_action( 'init', 'wpb_wwa_textdomain' );



/**
 * Require Files
 */

require_once dirname( __FILE__ ) . '/inc/wpb-functions.php';
require_once dirname( __FILE__ ) . '/inc/wpb-scripts.php';