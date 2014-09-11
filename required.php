<?php

/*
Plugin Name: Required HTML5 Polyfill
Plugin URI: http://coolestguidesontheplanet.com/
Description: Required Attribute for form/input validation for older browsers/ios
Author: Neil Gee
Version: 1.0.0
Author URI:http://coolestguidesontheplanet.com
License:           GPL-2.0+
License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
*/

// If called direct, refuse
if ( ! defined( 'ABSPATH' ) ) {
	die;
}

//Script-tac-ulous -> Script Registration and Enqueue
function ng_required_scripts() {

	wp_register_script ( 'required' , plugins_url( '/js/required.min.js',  __FILE__), '', '0.9.0', true );	

	wp_enqueue_script( 'required' );
}

add_action( 'wp_enqueue_scripts', 'ng_required_scripts' );

//Inline JS to initiate
function ng_required_init() {
	echo "<script>jQuery(document).ready(function ($) {
    $('form').h5Validate();
});</script>";
}

add_action( 'wp_footer','ng_required_init', 50 );