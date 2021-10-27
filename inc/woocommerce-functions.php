<?php

/**
 * WooCommerce Compatibility File
 *
 * @link https://woocommerce.com/
 *
 * @package restoration-performance
 */

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

    if ($brand == 'UMI Performance') {
        echo '<p class="pt-2 mt-3 mb-2 border-top"><strong>IMPORTANT</strong>: Suspension kits require assembly and can take up to 5-6 weeks to ship, please email us at <a class="font-weight-bold" href="mailto:sales@restorationperformance.com">sales@restorationperformance.com</a> for availability.</p>';
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
   
// cart - remove other shipping options if we have $4.50 shipping

add_filter('woocommerce_package_rates', 'custom_shipping_option', 20, 2 );


    function custom_shipping_option($rates){
        //print_r($rates);
        // unset rates if $4.50 shipping is available or free shipping

        if ( isset( $rates['flexible_shipping_single:4'] ) || isset( $rates['flexible_shipping_single:7']) ) {
            unset( $rates['flexible_shipping_fedex:0:GROUND_HOME_DELIVERY'] );
        }  
        
        // if freight, heavy-freight or free shipping, remove fedex fallback

        if ( isset( $rates['flexible_shipping_single:6'] ) || isset( $rates['flexible_shipping_single:7'] ) || isset( $rates['flexible_shipping_single:9'] ) ) {
            unset( $rates['flexible_shipping_fedex:fallback'] );
        }   

        

        return $rates;
    
    }


        