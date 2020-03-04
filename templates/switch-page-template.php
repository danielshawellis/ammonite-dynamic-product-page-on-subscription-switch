<style scoped media="screen">
  .amdv-subscription-switch-heading {
    text-align: center;
    font-size: 30px;
    line-height: 45px;
  }

  @media screen and (min-width: 768px) {
    .amdv-subscription-switch-ui-container {
      width: 66.67%;
      margin: auto;
    }
  }
</style>

<div class="amdv-subscription-switch-ui-container">
  <div class="woocommerce-notices-wrapper">
    <?php wc_print_notices(); ?>
  </div>
  <div class="amdv-product-page-hidden-add-to-cart-form">
      <?php woocommerce_template_single_add_to_cart(); ?>
  </div>
  <h2 class="amdv-subscription-switch-heading">You Are Only Changing Your Subscription and Not Making a New Order</h2>
  <div class="amdv-product-page-subscription-or-single-container">
    <div class="amdv-product-page-visible" id="amdv-product-page-subscription-container">
      <h5 class="amdv-product-page-how-much-heading">How Many:</h5>
      <form class="" action="index.html" method="post">
  		<button id="amdv-product-how-much-btn-one" class="amdv-product-page-button-clicked amdv-product-page-button-how-much" type="button" name="how-much" value="one-bottle" onclick="amdv_product_page_how_much_btn_click(this.value)">1 Bottle</button>
  		<button id="amdv-product-how-much-btn-two" class="amdv-product-page-button-unclicked amdv-product-page-button-how-much" type="button" name="how-much" value="two-bottles" onclick="amdv_product_page_how_much_btn_click(this.value)">2 Bottles</button>
  		<button id="amdv-product-how-much-btn-three" class="amdv-product-page-button-unclicked amdv-product-page-button-how-much" type="button" name="how-much" value="three-bottles" onclick="amdv_product_page_how_much_btn_click(this.value)">3 Bottles</button>
      </form>
      <h5 class="amdv-product-page-how-often-heading">How Often:</h5>
      <form class="" action="index.html" method="post">
  		<button id="amdv-product-how-often-btn-eight" class="amdv-product-page-button-unclicked amdv-product-page-button-how-often" type="button" name="how-often" value="eight-weeks" onclick="amdv_product_page_how_often_btn_click(this.value)">8 Weeks</button>
  		<button id="amdv-product-how-often-btn-six" class="amdv-product-page-button-clicked amdv-product-page-button-how-often" type="button" name="how-often" value="six-weeks" onclick="amdv_product_page_how_often_btn_click(this.value)">6 Weeks</button>
  		<button id="amdv-product-how-often-btn-four" class="amdv-product-page-button-unclicked amdv-product-page-button-how-often" type="button" name="how-often" value="four-weeks" onclick="amdv_product_page_how_often_btn_click(this.value)">4 Weeks</button>
  		<button id="amdv-product-how-often-btn-three" class="amdv-product-page-button-unclicked amdv-product-page-button-how-often" type="button" name="how-often" value="three-weeks" onclick="amdv_product_page_how_often_btn_click(this.value)">3 Weeks</button>
      </form>
      <input class="amdv-product-page-join-now-button" type="button" name="join-now" value="join now" onclick="amdv_product_page_subscription_submit()">
    </div>
    <div id="amdv-product-page-not-sure-separator-text" class="row amdv-product-page-separator-text-row">
      <div class="col-xs-12">
        <p class="amdv-product-page-text-divider">
          <span>Not Sure?</span>
        </p>
      </div>
    </div>
    <div id="amdv-product-page-not-sure-dropdown" class="row">
      <div class="col-xs-12">
        <h5>Choose Based On Your Dosing</h5>
        <ul>
          <li><strong>¼</strong> dropper 2x / day <strong>1 bottle</strong> lasts <strong>8 weeks</strong></li>
          <li><strong>¼</strong> dropper 3x / day <strong>1 bottle</strong> lasts <strong>6 weeks</strong></li>
          <li><strong>½</strong> dropper 2x / day <strong>1 bottle</strong> lasts <strong>4 weeks</strong></li>
          <li><strong>½</strong> dropper 3x / day <strong>1 bottle</strong> lasts <strong>3 weeks</strong></li>
          <li><strong>1</strong> dropper 2x / day <strong>2 bottles</strong> lasts <strong>4 weeks</strong></li>
          <li><strong>1</strong> dropper 3x / day <strong>3 bottles</strong> lasts <strong>4 weeks</strong></li>
        </ul>
      </div>
    </div>
  </div>
</div>
