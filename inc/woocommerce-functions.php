<?php

/**
 * WooCommerce Compatibility File
 *
 * @link https://woocommerce.com/
 *
 * @package restoration-performance
 */

 //order number

add_filter( 'woocommerce_order_number', 'rp_change_woocommerce_order_number' );

function rp_change_woocommerce_order_number( $order_id ) {
    $prefix = 'RP-';
    $new_order_id = $prefix . $order_id;
    return $new_order_id;
}