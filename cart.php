<?php 
include("includes/header.php");
?>

<div class="back">
    <a href="index.php"><img src="./Images/icons/back.png" alt=""></a>
  </div>
  <h2 class="ht">Shopping Cart (<span id="item-count">0</span> Item<span id="item-plural">s</span>)</h2>
  <div class="cart_container">
    <div class="shopping-cart" id="cart-items">
      <!-- Cart items will be dynamically added here -->
    </div>

    <div class="summary">
      <div class="sum-head">
        <div class="sum-kids">
          <p>Subtotal:</p>
          <p>Shipping fee:</p>
          <p>Taxes:</p>
        </div>

        <div class="sum-kid2">
          <p id="subtotal-price" class="price">$0.00</p>
          <p>$10.50</p>
          <p>$0.00</p>
        </div>
      </div>
      <hr />
      <div class="tt-1">
        <p class="total-price">Total: </p>
        <p id="total-price">$0.00</p>
      </div>

      <a href="checkout.html" class="checkout">
        <button class="checkout-btn">Proceed to Checkout</button>
      </a>
      <p class="return-policy1">Free 30-day return with ease</p>
    </div>
  </div>

  <div class="shipping-options">
    <h2 class="so">Shipping Options</h2>
    <div class="options">
      <div class="options-sec">
        <img src="./Images/icons/cargo-truck (2).png" alt="">
        <p>Shipping</p>
        <p class="alble">Available</p>
      </div>
      <div class="options-sec">
        <img src="./Images/icons/car (1).png" alt="">
        <p>Pickup</p>
        <p class="alble">Available</p>
      </div>
      <div class="options-sec">
        <img src="./Images/icons/box (1).png" alt="">
        <p>Delivery</p>
        <p class="alble">Available</p>
      </div>
    </div>
  </div>

  <div class="deal-contents" id="deal-contents">
    <!-- Deal content items will be dynamically added here -->
  </div>

  <div class="advert">
    <div class="fone-logo">
      <img src="./Images/pcs/topsell.png" alt="Top Sell">
    </div>
    <div class="advert-details">
      <h2>Get more on our app</h2>
      <p>Unlock exclusive features, save searches, track inquiries, and more with our app.</p>
      <p>Available on iOS and Android</p>
      <div class="download-option">
        <div class="apple-version">
          <img id="apple" src="./Images/pcs/ap.jpeg" alt="Apple">
        </div>
        <div class="ios-version">
          <img id="google" src="./Images/pcs/gp.jpeg" alt="Google Play">
        </div>
      </div>
    </div>
  </div>

<?php
include("includes/footer.php");