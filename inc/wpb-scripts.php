<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


/**
 * Enqueue scripts
 */

function wpb_wwa_adding_scripts() {
	wp_enqueue_script( 'jquery-beefup', plugins_url( '../assets/js/jquery.beefup.min.js', __FILE__ ), array('jquery'), '1.1.7', true );
	wp_enqueue_script( 'wpb-wwa-init', plugins_url( '../assets/js/main.js', __FILE__ ), array('jquery'), '1.0', true );
	wp_enqueue_style( 'wpb-wwa-style', plugins_url( '../assets/css/main.css', __FILE__ ), array(), '1.0' );
}
add_action( 'wp_enqueue_scripts', 'wpb_wwa_adding_scripts' ); 