<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cart | Bawa Computers</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/new-cards.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- favicon  -->
  <link rel="icon" type="image/png" href="images/favicon.jpg">
</head>
<body>
 <!-- Top Header -->
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
<!-- Main Header -->
<header class="main-header">
    <div class="container header-flex">
      <img src="images/favicon.jpg" style="width: 50px; height: 50px;" alt="Bawa Computers Logo" class="logo-img">
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        <div class="logo">Bawa Computers</div>
        <div class="search-bar">
            <input type="text" placeholder="Search products...">
            <button><i class="fas fa-search"></i></button>
        </div>
        <div class="cart-icon">
            <a href="cart.php" id="cart-link"><i class="fas fa-shopping-cart"></i></a>
        </div>
    </div>
</header>
<!-- Navbar -->
<div id="navbar"></div>
  <section class="featured-section content-centered">
    <div class="featured-title"><i class="fas fa-shopping-cart"></i> My Cart</div>
    <div id="cart-items" style="min-height:200px;text-align:center;color:#888;font-size:1.2rem;padding:40px 0;">
      Your cart is empty.
    </div>
    <div id="cart-actions" style="text-align:center;margin-top:20px;display:none;">
      <button class="btn btn-gray" id="clear-cart-btn" style="margin:0 10px;">
        <i class="fas fa-trash"></i> Clear Cart
      </button>
      <a href="checkout.php">
      <button class="btn btn-blue" id="checkout-btn" style="margin:0 10px;">
        <i class="fas fa-credit-card"></i> 
          Checkout

          </button>
        </a>
    </div>
  </section>
  <div id="footer"></div>
  <script src="js/data.js"></script>
  <script src="js/cart-wishlist.js"></script>
  <script src="js/include.js"></script>
  <script src="js/notifications.js"></script>
  <script>
    // Render cart items from localStorage
    document.addEventListener('DOMContentLoaded', function() {
      const cartDiv = document.getElementById('cart-items');
      const cartActions = document.getElementById('cart-actions');
      let cart = JSON.parse(localStorage.getItem('cart')) || [];
      
      function renderCart() {
        if (cart.length === 0) {
          cartDiv.innerHTML = 'Your cart is empty.';
          cartActions.style.display = 'none';
        } else {
          cartDiv.innerHTML = cart.map(item => `
            <div class="product-card" style="max-width:800px;margin:24px auto;">
              <div class="card-left">
                <img src="${item.img || 'https://images.unsplash.com/photo-1593640408182-31c70c8268f5?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80'}" alt="${item.name || item.title}" />
              </div>
              <div class="card-right">
                <div class="heart-icon">&#10084;</div>
                <h2 class="product-title">${item.name || item.title}</h2>
                <h4 class="product-category">CART ITEM</h4>
                <div class="price">${item.price || item.priceDisplay}</div>
                <div class="description">
                  ${item.desc || 'Quality product added to your cart for purchase.'}
                </div>
                <div class="product-features">
                  <span class="feature-tag">Cart</span>
                  <span class="feature-tag">Qty: ${item.quantity || 1}</span>
                </div>
                <div class="product-meta">
                  <span class="stock in-stock">In Stock</span>
                </div>
                <div class="buttons">
                  <button class="remove-from-cart" data-title="${item.title}">REMOVE FROM CART</button>
                </div>
              </div>
            </div>
          `).join('');
          cartActions.style.display = 'block';
          
          // Remove from cart functionality with notifications
          document.querySelectorAll('.remove-from-cart').forEach(btn => {
            btn.addEventListener('click', function() {
              const productTitle = this.getAttribute('data-title');
              const product = cart.find(p => p.title === productTitle);
              
              if (product) {
                removeFromCart(product, productTitle);
                // Remove from display
                this.closest('.product-card').style.opacity = '0.5';
                setTimeout(() => {
                  location.reload();
                }, 1000);
              } else {
                notifications.error('Could not remove product from cart.');
              }
            });
          });
        }
      }
      
      renderCart();
      
      // Clear cart functionality
      document.getElementById('clear-cart-btn').addEventListener('click', function() {
        if (cart.length > 0) {
          if (confirm('Are you sure you want to clear your entire cart?')) {
            localStorage.removeItem('cart');
            cart = [];
            notifications.success('Cart cleared successfully!');
            setTimeout(() => {
              location.reload();
            }, 1000);
          }
        } else {
          notifications.info('Your cart is already empty.');
        }
      });
      
      // Checkout functionality
      document.getElementById('checkout-btn').addEventListener('click', function() {
        if (cart.length > 0) {
          window.location.href = 'checkout.php';
        } else {
          notifications.error('Your cart is empty!');
        }
      });
    });
  </script>
</body>
</html> 