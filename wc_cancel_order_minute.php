<?php

/**
 * Plugin Name: WooCommerce Cancel Order Minute
 * Description: This plugin will make woocommerce will attempt to cancel pending order every minute.
 * Version: 1.0.0
 * Author: Wan Zulkarnain
 * Author URI: http://www.wanzul.net

 * WC requires at least: 6.0.0
 * WC tested up to: 7.0.0
 *
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

define('WAN_WC_CANCEL_ORDER_MINUTE', 1); // DEFAULT: 1 minute

add_filter( 'woocommerce_cancel_unpaid_orders_interval_minutes', 'wan_wc_cancel_order_minute' );

function wan_wc_cancel_order_minute($minute){
  // ignore the minute set by Hold Stock (Minutes)
  return WAN_WC_CANCEL_ORDER_MINUTE;
}
