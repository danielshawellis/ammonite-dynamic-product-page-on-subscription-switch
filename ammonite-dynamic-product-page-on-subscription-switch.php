<?php
/**
 * Plugin Name:       Ammonite Dynamic Product Page On Subscription Switch
 * Description:       Dynamically displays a different template for subscription switches on "Hero's Choice Tincture" product page. This plugin depends on the Ammonite Custom plugin.
 * Author:            Daniel Ellis
 * Author URI:        https://danielellisdevelopment.com/
 */

/**
 * DOCUMENTATION:
 * -Dependencies:
 *  -This plugin depends upon the function "amdv_product_page_subscription_submit()" within the file ammonite-custom.js within the Ammonite Custom plugin.
 * -Functionality:
 *  -This plugin checks if the page is a single product with ID of 2978 (Hero's Choice Tincture) and if the URL contains the string "switch-subscription".
 *  -If both of the above conditions are true, it replaces the Hero's Choice Tincture product page with a new template.
 *  -This template contains a UI that depends on a script in the Ammonite Custom plugin to interact with a hidden default WooCommerce Add To Cart interface.
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
      // Change targeted product ID below
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
