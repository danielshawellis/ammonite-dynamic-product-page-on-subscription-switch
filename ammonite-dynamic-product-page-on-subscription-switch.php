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
    public static function dynamically_load_content( $content ) {
      if ( is_single( 2978 ) && is_product() && strpos( $_SERVER['REQUEST_URI'], 'switch-subscription' ) ) {
        include( 'templates/switch-page-template.php' );
      } else {
        return $content;
      }
    }
  }

  // Call methods on load here
  add_filter( 'the_content', array( 'Ammonite_Dynamic_Product_Page_On_Subscription_Switch', 'dynamically_load_content' ) );
}
