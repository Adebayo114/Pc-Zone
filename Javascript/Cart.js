document.addEventListener("DOMContentLoaded", function() {
  const cartItemsContainer = document.getElementById("cart-items");
  const itemCountDisplay = document.getElementById("item-count");
  const subtotalPriceDisplay = document.getElementById("subtotal-price");
  const totalPriceDisplay = document.getElementById("total-price");
  const shippingFee = 10.50;
  let cart = [];

  function updateCartDisplay() {
    cartItemsContainer.innerHTML = ""; // Clear existing items
    let subtotal = 0;

    cart.forEach(item => {
      const itemElement = document.createElement("div");
      itemElement.className = "cart-item";
      itemElement.innerHTML = `
        <p>${item.name}</p>
        <p class="price">$${item.price.toFixed(2)}</p>
      `;
      cartItemsContainer.appendChild(itemElement);
      subtotal += item.price;
    });

    subtotalPriceDisplay.textContent = `$${subtotal.toFixed(2)}`;
    const total = subtotal + shippingFee;
    totalPriceDisplay.textContent = `$${total.toFixed(2)}`;
    itemCountDisplay.textContent = cart.length;
    document.getElementById("item-plural").textContent = cart.length === 1 ? "" : "s";
  }

  function addToCart(name, price) {
    cart.push({ name, price });
    updateCartDisplay();
  }

  // Attach event listeners to each "ADD TO CART" button
  const addButtons = document.querySelectorAll(".cart-btn");
  addButtons.forEach(button => {
    button.addEventListener("click", function(event) {
      const itemElement = event.target.closest(".deal-contents-items");
      const itemName = itemElement.querySelector(".content-text p:first-child").textContent;
      const itemPriceText = itemElement.querySelector(".price").textContent.replace("$", "");
      const itemPrice = parseFloat(itemPriceText);

      addToCart(itemName, itemPrice);
    });
  });
});
