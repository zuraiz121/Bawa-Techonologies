<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Checkout | Bawa Computers</title>
  <link rel="stylesheet" href="css/style.css"/>
  <link rel="stylesheet" href="css/new-cards.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
  <link rel="icon" type="image/png" href="images/favicon.jpg"/>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet"/>
  <style>
    /* Keep all your existing styles here – unchanged */
  </style>
</head>
<body>
  <script>
    alert('Payment method will be added soon');
  </script>

  <!-- Header Section -->
  <div class="top-header">
    <div class="container">
      <div class="tagline">Reliable Tech Since 2005</div>
      <div class="account-links">
        <a href="#">My Account</a>
        <a href="#">Login</a>
        <a href="#">Register</a>
      </div>
    </div>
  </div>

  <header class="main-header">
    <div class="container header-flex">
      <img src="images/favicon.jpg" style="width: 50px; height: 50px;" alt="Logo" />
      <div class="logo">Bawa Computers</div>
      <div class="search-bar">
        <input type="text" placeholder="Search products..." />
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="cart-icon">
        <a href="cart.php"><i class="fas fa-shopping-cart"></i></a>
      </div>
    </div>
  </header>

  <div id="navbar"></div>

  <!-- Checkout Section -->
  <section class="featured-section content-centered">
    <div class="featured-title"><i class="fas fa-credit-card"></i> Checkout</div>
    <div id="checkout-content"></div>
  </section>

  <div id="footer"></div>

  <script src="js/data.js"></script>
  <script src="js/cart-wishlist.js"></script>
  <script src="js/include.js"></script>
  <script src="js/notifications.js"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const checkoutContent = document.getElementById('checkout-content');
      const cart = JSON.parse(localStorage.getItem('cart')) || [];

      if (cart.length === 0) {
        checkoutContent.innerHTML = `
          <div class="empty-cart">
            <i class="fas fa-shopping-cart"></i>
            <h3>Your cart is empty</h3>
            <p>Add some products to your cart before proceeding to checkout.</p>
            <a href="index.html" class="btn btn-blue" style="margin-top: 20px;">Continue Shopping</a>
          </div>
        `;
        return;
      }

      // ✅ Subtotal Calculation (includes quantity)
      const subtotal = cart.reduce((sum, item) => {
        const quantity = parseInt(item.quantity || 1, 10);
        const price = parseFloat(
          (item.price || item.priceDisplay || '0').replace(/[^\d.]/g, '')
        );
        return sum + price * quantity;
      }, 0);

      const shipping = 500;
      const total = subtotal + shipping;

      // ✅ Dynamic Checkout Template
      checkoutContent.innerHTML = `
        <div class="checkout-container">
          <div class="checkout-form">
            <form id="checkout-form">
              <!-- Customer Info -->
              <div class="form-section">
                <h3><i class="fas fa-user"></i> Customer Information</h3>
                <div class="form-row">
                  <div class="form-group">
                    <label for="firstName">First Name *</label>
                    <input type="text" id="firstName" name="firstName" required />
                  </div>
                  <div class="form-group">
                    <label for="lastName">Last Name *</label>
                    <input type="text" id="lastName" name="lastName" required />
                  </div>
                </div>
                <div class="form-group">
                  <label for="email">Email *</label>
                  <input type="email" id="email" name="email" required />
                </div>
                <div class="form-group">
                  <label for="phone">Phone *</label>
                  <input type="tel" id="phone" name="phone" required />
                </div>
              </div>

              <!-- Shipping -->
              <div class="form-section">
                <h3><i class="fas fa-shipping-fast"></i> Shipping Address</h3>
                <div class="form-group">
                  <label for="address">Address *</label>
                  <input type="text" id="address" name="address" required />
                </div>
                <div class="form-row">
                  <div class="form-group">
                    <label for="city">City *</label>
                    <input type="text" id="city" name="city" required />
                  </div>
                  <div class="form-group">
                    <label for="state">State *</label>
                    <input type="text" id="state" name="state" required />
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group">
                    <label for="zipCode">ZIP Code *</label>
                    <input type="text" id="zipCode" name="zipCode" required />
                  </div>
                  <div class="form-group">
                    <label for="country">Country *</label>
                    <select id="country" name="country" required>
                      <option value="">Select Country</option>
                      <option value="Pakistan">Pakistan</option>
                      <option value="USA">United States</option>
                      <option value="UK">United Kingdom</option>
                      <option value="Canada">Canada</option>
                      <option value="Australia">Australia</option>
                    </select>
                  </div>
                </div>
              </div>

              <!-- Payment -->
              <div class="form-section">
                <h3><i class="fas fa-credit-card"></i> Payment Method</h3>
                <div class="payment-methods">
                  <div class="payment-method" data-method="cod">
                    <i class="fas fa-money-bill-wave"></i> Cash on Delivery
                  </div>
                  <div class="payment-method" data-method="bank">
                    <i class="fas fa-university"></i> Bank Transfer
                  </div>
                  <div class="payment-method" data-method="card">
                    <i class="fas fa-credit-card"></i> Credit/Debit Card
                  </div>
                </div>
                <input type="hidden" id="paymentMethod" name="paymentMethod" required />
              </div>

              <!-- Notes -->
              <div class="form-section">
                <h3><i class="fas fa-sticky-note"></i> Notes</h3>
                <div class="form-group">
                  <label for="notes">Order Notes (Optional)</label>
                  <textarea id="notes" name="notes" rows="3"></textarea>
                </div>
              </div>
            </form>
          </div>

          <!-- ✅ Order Summary -->
          <div class="order-summary">
            <h3><i class="fas fa-receipt"></i> Order Summary</h3>

            ${cart.map(item => {
              const quantity = parseInt(item.quantity || 1, 10);
              const price = parseFloat((item.price || item.priceDisplay || '0').replace(/[^\d.]/g, ''));
              const itemTotal = price * quantity;
              return `
                <div class="product-card" style="max-width:100%;margin:12px 0;">
                  <div class="card-left">
                    <img src="${item.img || 'https://via.placeholder.com/150'}" alt="${item.title}" />
                  </div>
                  <div class="card-right">
                    <h2 class="product-title">${item.title}</h2>
                    <h4 class="product-category">Checkout Item</h4>
                    <div class="price">Rs. ${itemTotal.toLocaleString()}</div>
                    <div class="product-features">
                      <span class="feature-tag">Qty: ${quantity}</span>
                    </div>
                  </div>
                </div>
              `;
            }).join('')}

            <div class="order-total">
              <div class="total-row"><span>Subtotal:</span><span>Rs. ${subtotal.toLocaleString()}</span></div>
              <div class="total-row"><span>Shipping:</span><span>Rs. ${shipping.toLocaleString()}</span></div>
              <div class="total-row final"><span>Total:</span><span>Rs. ${total.toLocaleString()}</span></div>
            </div>

            <button type="button" id="place-order-btn" class="checkout-btn">
              <i class="fas fa-lock"></i> Place Order
            </button>
          </div>
        </div>
      `;

      // Payment method selection
      document.querySelectorAll('.payment-method').forEach(method => {
        method.addEventListener('click', function () {
          document.querySelectorAll('.payment-method').forEach(m => m.classList.remove('selected'));
          this.classList.add('selected');
          document.getElementById('paymentMethod').value = this.dataset.method;
        });
      });

      // Place order button
      document.getElementById('place-order-btn').addEventListener('click', function () {
        const form = document.getElementById('checkout-form');
        if (!form.checkValidity()) {
          form.reportValidity();
          return;
        }
        if (!document.getElementById('paymentMethod').value) {
          notifications.error('Please select a payment method.');
          return;
        }

        const formData = new FormData(form);
        const order = {
          customer: {
            firstName: formData.get('firstName'),
            lastName: formData.get('lastName'),
            email: formData.get('email'),
            phone: formData.get('phone')
          },
          shipping: {
            address: formData.get('address'),
            city: formData.get('city'),
            state: formData.get('state'),
            zipCode: formData.get('zipCode'),
            country: formData.get('country')
          },
          payment: {
            method: formData.get('paymentMethod')
          },
          notes: formData.get('notes'),
          items: cart,
          totals: { subtotal, shipping, total },
          orderDate: new Date().toISOString(),
          orderId: 'ORD-' + Date.now()
        };

        this.disabled = true;
        this.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Processing...';

        setTimeout(() => {
          const orders = JSON.parse(localStorage.getItem('orders')) || [];
          orders.push(order);
          localStorage.setItem('orders', JSON.stringify(orders));
          localStorage.removeItem('cart');
          if (typeof updateCartCounter === 'function') updateCartCounter();
          notifications.success('Order placed! Order ID: ' + order.orderId);
          setTimeout(() => {
            window.location.href = 'order-confirmation.html?orderId=' + order.orderId;
          }, 2000);
        }, 2000);
      });
    });
  </script>
</body>
</html>
