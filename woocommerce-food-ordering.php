<?php
/**
 * Plugin Name: Food ordering
 * Plugin URI: http://sadeconline.com/
 * Description: Food ordering for WooCommerce
 * Version: 1.0.0
 * Author: Wayne Nguyen
 * Author URI: http://sadeconline.com/
 * License: GPL-3.0+
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 * Domain Path: language
 * Text Domain: sadeconline
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} 
/*
 * Check if WooCommerce is active
 */
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
	require_once('inc/class-shipping-init.php');	
}
