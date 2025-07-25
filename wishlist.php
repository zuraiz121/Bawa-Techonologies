<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wishlist | Bawa Computers</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/new-cards.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
  <section class="featured-section content-center">
    <div class="featured-title"><i class="fas fa-heart"></i> My Wishlist</div>
    <div id="wishlist-items" style="min-height:200px;text-align:center;color:#888;font-size:1.2rem;padding:40px 0;">
      Your wishlist is empty.
    </div>
  </section>
  <div id="footer"></div>
  <script src="js/data.js"></script>
  <script src="js/cart-wishlist.js"></script>
  <script src="js/include.js"></script>
  <script src="js/notifications.js"></script>
  <script>
    // Render wishlist items from localStorage
    document.addEventListener('DOMContentLoaded', function() {
      const wishlistDiv = document.getElementById('wishlist-items');
      let wishlist = JSON.parse(localStorage.getItem('wishlist')) || [];
      
      if (wishlist.length === 0) {
        wishlistDiv.innerHTML = 'Your wishlist is empty.';
      } else {
        wishlistDiv.innerHTML = wishlist.map(item => `
          <div class="product-card" style="max-width:800px;margin:24px auto;">
            <div class="card-left">
              <img src="${item.img || 'https://images.unsplash.com/photo-1593640408182-31c70c8268f5?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80'}" alt="${item.name || item.title}" />
            </div>
            <div class="card-right">
              <div class="heart-icon active">&#10084;</div>
              <h2 class="product-title">${item.name || item.title}</h2>
              <h4 class="product-category">WISHLIST ITEM</h4>
              <div class="price">${item.price || item.priceDisplay}</div>
              <div class="description">
                ${item.desc || 'Quality product added to your wishlist for future purchase.'}
              </div>
              <div class="product-features">
                <span class="feature-tag">Wishlist</span>
                <span class="feature-tag">Available</span>
              </div>
              <div class="product-meta">
                <span class="stock in-stock">In Stock</span>
              </div>
              <div class="buttons">
                <button class="btn-primary add-to-cart-from-wishlist" data-title="${item.title}">ADD TO CART</button>
                <button class="remove-from-wishlist" data-title="${item.title}">REMOVE</button>
              </div>
            </div>
          </div>
        `).join('');
        
        // Remove from wishlist functionality with notifications
        document.querySelectorAll('.remove-from-wishlist').forEach(btn => {
          btn.addEventListener('click', function() {
            const productTitle = this.getAttribute('data-title');
            const product = wishlist.find(p => p.title === productTitle);
            
            if (product) {
              removeFromWishlist(product, productTitle);
              // Remove from display
              this.closest('.product-card').style.opacity = '0.5';
              setTimeout(() => {
                location.reload();
              }, 1000);
            } else {
              notifications.error('Could not remove product from wishlist.');
            }
          });
        });
        
        // Add to cart from wishlist functionality
        document.querySelectorAll('.add-to-cart-from-wishlist').forEach(btn => {
          btn.addEventListener('click', function() {
            const productTitle = this.getAttribute('data-title');
            const product = wishlist.find(p => p.title === productTitle);
            
            if (product) {
              if (addToCart(product, productTitle)) {
                // Remove from wishlist after adding to cart
                removeFromWishlist(product, productTitle);
                setTimeout(() => {
                  location.reload();
                }, 1500);
              }
            } else {
              notifications.error('Could not add product to cart.');
            }
          });
        });
      }
    });
  </script>
</body>
</html> 