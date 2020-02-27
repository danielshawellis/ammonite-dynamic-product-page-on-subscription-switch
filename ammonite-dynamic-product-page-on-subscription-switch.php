<?php
/**
 * Plugin Name:       Ammonite Dynamic Product Page On Subscription Switch
 * Description:       Adds two enclosing shortcodes ([amdv-sub-switch-dynamic-product-normal][/...] and [amdv-sub-switch-dynamic-product-switch][/...]) to dynamically display different content for normal product page views and subscription switches.
 * Version:           1.0.0
 * Author:            Daniel Ellis
 * Author URI:        https://danielellisdevelopment.com/
 */

/*
  Basic Security
*/
if ( ! defined( 'ABSPATH' ) ) {
  die;
}

/*
  Plugin Base Class
*/
if ( !class_exists( 'Ammonite_Dynamic_Product_Page_On_Subscription_Switch' ) ) {
  class Ammonite_Dynamic_Product_Page_On_Subscription_Switch {
    // Add class methods here
    public static function add_normal_case_shortcode() {
      // Use [amdv-sub-switch-dynamic-product-normal][/...] to call this shortcode
      add_shortcode( 'amdv-sub-switch-dynamic-product-normal', array( 'Ammonite_Dynamic_Product_Page_On_Subscription_Switch', 'normal_case_shortcode_callback' ) );
    }

    public static function normal_case_shortcode_callback( $atts , $content = null ) {
      if ( !strpos( $_SERVER['REQUEST_URI'], 'switch-subscription' ) ) {
        return $content;
      }
    }

    public static function add_switch_case_shortcode() {
      // Use [amdv-sub-switch-dynamic-product-switch][/...] to call this shortcode
      add_shortcode( 'amdv-sub-switch-dynamic-product-switch', array( 'Ammonite_Dynamic_Product_Page_On_Subscription_Switch', 'switch_case_shortcode_callback' ) );
    }

    public static function switch_case_shortcode_callback( $atts , $content = null ) {
      if ( strpos( $_SERVER['REQUEST_URI'], 'switch-subscription' ) ) {
        return $content;
      }
    }
  }

  // Call methods on load here
  Ammonite_Dynamic_Product_Page_On_Subscription_Switch::add_normal_case_shortcode();
  Ammonite_Dynamic_Product_Page_On_Subscription_Switch::add_switch_case_shortcode();
}
