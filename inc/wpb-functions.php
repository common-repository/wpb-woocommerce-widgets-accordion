<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

function wpb_wwa_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'WPB Widgets Accordion', 'wpb-woocommerce-widgets-accordion' ),
		'id'            => 'wpb-widgets-accordion-1',
		'description'   => esc_html__( 'Add widgets here. It will be shown as a accordion of your widgets. ( Widgets title is required. )', 'wpb-woocommerce-widgets-accordion' ),
		'before_widget' => '<div id="%1$s" class="wpb-accordion-widget wpb-accordion-sidebar %2$s">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h3 class="wpb-accordion-widget-title">',
		'after_title'   => '</h3><div class="wpb-accordion-widget-content">',
	) );
}
add_action( 'widgets_init', 'wpb_wwa_widgets_init' );



/**
 * Add Widgets Accordion ShortCode
 */

add_shortcode( 'wpb-widgets-accordion', 'wpb_wwa_widgets_accordion_shortcode' );

if( !function_exists('wpb_wwa_widgets_accordion_shortcode') ){
	function wpb_wwa_widgets_accordion_shortcode( $atts ) {

		extract( shortcode_atts(
			array(
				'sidebar' 			=> 'wpb-widgets-accordion-1',
				'style' 			=> 'style-1', // style-1
			), $atts )
		);

		ob_start();
		

		if ( is_active_sidebar( $sidebar ) ) {
			echo '<div class="wpb-widgets-accordion wpb-widgets-accordion-'. esc_attr( $style ) .'">';
			dynamic_sidebar( $sidebar );
			echo '</div>';
		}

		return ob_get_clean();
	}
}