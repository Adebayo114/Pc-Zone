// JavaScript for Checkout Page

document.addEventListener('DOMContentLoaded', () => {
    // Sample items (replace with your actual items or fetch from a database)
    const cartItems = [
      { id: 1, name: "Sample Item 1", price: 100, quantity: 1, image: "path/to/item-image1.png" },
      { id: 2, name: "Sample Item 2", price: 150, quantity: 1, image: "path/to/item-image2.png" }
    ];
  
    // Function to update total
    function updateTotal() {
      const subtotalElement = document.querySelector('.sum-kid3 p:nth-child(1)');
      const shippingFeeElement = document.querySelector('.sum-kid3 p:nth-child(2)');
      const totalElement = document.querySelector('.t6');
  
      const shippingFee = 10.50; // Fixed shipping fee
      const subtotal = cartItems.reduce((acc, item) => acc + item.price * item.quantity, 0);
      const total = subtotal + shippingFee;
  
      // Update DOM
      subtotalElement.textContent = `$${subtotal.toFixed(2)}`;
      shippingFeeElement.textContent = `$${shippingFee.toFixed(2)}`;
      totalElement.textContent = `$${total.toFixed(2)}`;
    }
  
    // Function to handle item quantity change
    function handleQuantityChange(itemId, newQuantity) {
      const item = cartItems.find((item) => item.id === itemId);
      if (item) {
        item.quantity = newQuantity;
        updateTotal();
      }
    }
  
    // Attach event listeners to quantity selectors
    cartItems.forEach((item) => {
      const itemElement = document.querySelector(`#item-${item.id} .quantity-selector`);
      if (itemElement) {
        itemElement.addEventListener('change', (e) => {
          const newQuantity = parseInt(e.target.value, 10);
          handleQuantityChange(item.id, newQuantity);
        });
      }
    });
  
    // Form validation on submit
    const checkoutForm = document.querySelector('.form-main');
    checkoutForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const firstName = document.getElementById('name').value.trim();
      const lastName = document.getElementById('lname').value.trim();
      const email = document.getElementById('email').value.trim();
      const phone = document.getElementById('pn').value.trim();
      const address = document.getElementById('add').value.trim();
      const city = document.getElementById('cty').value.trim();
      const state = document.getElementById('pro').value.trim();
      const country = document.getElementById('ctry').value.trim();
      const postalCode = document.getElementById('pst').value.trim();
  
      if (!firstName || !lastName || !email || !phone || !address || !city || !state || !country || !postalCode) {
        alert('Please fill in all required fields.');
      } else {
        // Proceed to payment if all fields are valid
        alert('Proceeding to payment...');
        window.location.href = 'checkout2.html'; // Redirect to payment page
      }
    });
  
    // Call updateTotal initially to display total
    updateTotal();
  });
  