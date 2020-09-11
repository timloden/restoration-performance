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

add_action( 'woocommerce_before_add_to_cart_form', 'dakota_digital_discount_message', 10, 0 ); 

// define the woocommerce_before_add_to_cart_form callback 
function dakota_digital_discount_message() { 
    global $product;
    $id = $product->get_id();
    $brand = get_brand_name($id);
    
    if ($brand == 'Dakota Digital') {
        echo '<p class="font-weight-bold" style="color: #ef9020;">SAVE 5% MORE WHEN ADDED TO CART</p>';
    }
    
}; 

// Goodmark CBP message

add_action( 'woocommerce_after_single_product', 'goodmark_cbp_product_message', 10, 0 ); 

// define the woocommerce_before_add_to_cart_form callback 
function goodmark_cbp_product_message() { 
    global $product;
    $id = $product->get_id();
    $brand = get_brand_name($id);
    
    if ($brand == 'Goodmark') {
        echo '<div class="alert alert-primary text-center">Looking for more body parts? <a class="font-weight-bold" style="color: #000;" href="https://classicbodyparts.com/">Checkout Classic Body Parts for more classic car body parts</a>!</div>';
    }
    
}; 
    
        