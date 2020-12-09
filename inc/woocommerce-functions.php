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

add_action( 'woocommerce_single_product_summary', 'dakota_digital_discount_message', 11, 0 ); 

// define the woocommerce_before_add_to_cart_form callback 
function dakota_digital_discount_message() { 
    global $product;
    $id = $product->get_id();
    $brand = get_brand_name($id);
    $shipping_class= $product->get_shipping_class();
    
    if ($brand == 'Dakota Digital') {
        echo '<p class="font-weight-bold pt-2 mt-3 mb-2 text-center text-md-left border-top" style="color: #ef9020; font-size: 1.5em;">SAVE 5% MORE IN CART!</p>';
        echo '<p><strong>IMPORTANT</strong>: Gauge sets require assembly and can take up to 4-6 weeks to ship, please email us at <a class="font-weight-bold" href="mailto:sales@restorationperformance.com">sales@restorationperformance.com</a> for availability.</p>';
    }

    if ($brand == 'Goodmark' && $shipping_class == 'goodmark-freight') {
        echo '<p class="font-weight-bold pt-2 mt-3 mb-2 text-center text-md-left border-top" style="color: #000; font-size: 1.25em;">GOODMARK FREIGHT ORDERS SHIP FOR $150</p>';
        echo '<p>Save money on shipping! Freight orders ship for $150 to a commercial or residential address!</p>';
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
    
        