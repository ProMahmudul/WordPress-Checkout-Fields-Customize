<?php

add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );
 
function custom_override_checkout_fields( $fields ) {
    //unset($fields['billing']['billing_first_name']);
    unset($fields['billing']['billing_last_name']);
    unset($fields['billing']['billing_company']);
    //unset($fields['billing']['billing_address_1']);
    unset($fields['billing']['billing_address_2']);
    unset($fields['billing']['billing_city']);
    unset($fields['billing']['billing_postcode']);
    //unset($fields['billing']['billing_country']);
    //unset($fields['billing']['billing_state']);
    //unset($fields['billing']['billing_phone']);
    //unset($fields['order']['order_comments']);
    unset($fields['billing']['billing_address_2']);
    unset($fields['billing']['billing_postcode']);
    unset($fields['billing']['billing_company']);
    unset($fields['billing']['billing_last_name']);
    //unset($fields['billing']['billing_email']);
    unset($fields['billing']['billing_city']);
    return $fields;
}

add_filter( 'woocommerce_billing_fields' , 'custom_required_override_checkout_fields' );

function custom_required_override_checkout_fields( $fields ) {
	$fields['billing_email']['required'] = false;
  	return $fields;
}

add_filter( 'woocommerce_checkout_fields' , 'custom_rename_override_checkout_fields' );

function custom_rename_override_checkout_fields( $fields ) {
    $fields['billing']['billing_first_name']['label'] = 'Full Name';
	$fields['billing']['billing_first_name']['placeholder'] = 'Your Full Name';
	$fields['billing']['billing_email']['placeholder'] = 'Your Email';
	$fields['billing']['billing_phone']['placeholder'] = 'Your Phone Number';
    return $fields;
}

add_filter( 'woocommerce_default_address_fields' , 'override_default_address_fields' );
function override_default_address_fields( $address_fields ) {
	$address_fields['address_1']['label'] = 'Address';
	$address_fields['address_1']['placeholder'] = 'Your Address';
	return $address_fields;
}
