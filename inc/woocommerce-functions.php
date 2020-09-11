<?php

/**
 * WooCommerce Compatibility File
 *
 * @link https://woocommerce.com/
 *
 * @package restoration-performance
 */

 //order number

add_filter( 'woocommerce_order_number', 'change_woocommerce_order_number' );

function change_woocommerce_order_number( $order_id ) {
    $prefix = 'RP-';
    $new_order_id = $prefix . $order_id;
    return $new_order_id;
}

// dakota digital 5% message

add_action( 'woocommerce_before_add_to_cart_form', 'action_woocommerce_before_add_to_cart_form', 10, 0 ); 

// define the woocommerce_before_add_to_cart_form callback 
function action_woocommerce_before_add_to_cart_form() { 
    global $product;
    $id = $product->get_id();
    $brand = get_brand_name($id);
    
    if ($brand == 'Dakota Digital') {
        echo '<p class="font-weight-bold" style="color: #ef9020;">SAVE 5% MORE WHEN ADDED TO CART</p>';
    }
    
}; 
        