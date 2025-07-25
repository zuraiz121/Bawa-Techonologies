<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Details | Bawa Computers</title>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" type="image/png" href="images/favicon.jpg">
  <style>
     :root {
            --primary-blue: #32658a;
            --dark-gray: #3a3a3a;
            --hover-accent: #0099ff;
            --light-gray-bg: #e0e0e0;
        }
          /* Footer */
          .footer {
            background: var(--dark-gray);
            color: #fff;
            padding: 48px 0 24px 0;
            margin-top: 60px;
        }
        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
            justify-content: space-between;
            padding: 0 16px;
        }
        .footer-col {
            flex: 1 1 220px;
            min-width: 180px;
        }
        .footer-col h4 {
            font-size: 1.1rem;
            font-weight: 700;
            margin-bottom: 18px;
            color: #fff;
        }
        .footer-col ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .footer-col ul li {
            margin-bottom: 10px;
        }
        .footer-col ul li a {
            color: #fff;
            text-decoration: none;
            transition: color 0.2s;
        }
        .footer-col ul li a:hover {
            color: var(--hover-accent);
        }
        .footer-social {
            margin-top: 18px;
        }
        .footer-social a {
            color: #fff;
            font-size: 1.3rem;
            margin-right: 18px;
            transition: color 0.2s;
        }
        .footer-social a:hover {
            color: var(--hover-accent);
        }
        .footer-bottom {
            text-align: center;
            color: #bbb;
            font-size: 0.98rem;
            margin-top: 32px;
        }
        /* Responsive */
        @media (max-width: 1024px) {
            .product-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .footer-container {
                flex-direction: column;
                gap: 24px;
            }
        }
        @media (max-width: 600px) {
            .carousel-content h1 {
                font-size: 1.4rem;
            }
            .carousel-content p {
                font-size: 1rem;
            }
            .carousel-content {
                padding: 18px 6px;
            }
            .product-grid {
                grid-template-columns: 1fr;
                gap: 18px;
            }
            .footer-container {
                padding: 0 6px;
            }
        }
  </style>
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
            <a href="#"><i class="fas fa-shopping-cart"></i></a>
        </div>
    </div>
</header>
<!-- Navbar -->
<div id="navbar"></div>
<div class="nav-overlay"></div>
  <section class="featured-section content-centered">
    <div class="featured-title">Product Details</div>
    <div id="product-detail"></div>
  </section>
    <!-- Footer -->
        <div id="footer"></div>
    <script src="js/data.js"></script>
    <script src="js/include.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const params = new URLSearchParams(window.location.search);
      const id = params.get('id');
      const product = productsArray.find(p => String(p.id) === String(id));
      const detailDiv = document.getElementById('product-detail');
      if (product) {
        detailDiv.innerHTML = `
          <div class="product-card" style="max-width:600px;margin:0 auto;">
            <div class="product-img">
              <img src="${product.img}" alt="${product.name}" style="width:100%;height:auto;border-radius:12px;">
            </div>
            <div class="product-info">
              <h2 class="product-title">${product.name}</h2>
              <div class="product-meta">
                <span class="price">${product.price}</span>
              </div>
              <p class="product-desc">${product.desc}</p>
              <div class="product-specs" style="margin:16px 0;">
                <strong>Specifications:</strong><br>${product.specs}
              </div>
              <button class="btn btn-blue" id="add-to-cart-btn" style="margin-top:16px;">Add to Cart</button>
            </div>
          </div>
        `;
        setTimeout(function() {
          const addToCartBtn = document.getElementById('add-to-cart-btn');
          if (addToCartBtn) {
            // Check if already in cart
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            if (cart.find(item => String(item.id) === String(product.id))) {
              addToCartBtn.textContent = 'Added!';
              addToCartBtn.disabled = true;
            }
            addToCartBtn.addEventListener('click', function() {
              let cart = JSON.parse(localStorage.getItem('cart')) || [];
              if (!cart.find(item => String(item.id) === String(product.id))) {
                cart.push(product);
                localStorage.setItem('cart', JSON.stringify(cart));
                addToCartBtn.textContent = 'Added!';
                addToCartBtn.disabled = true;
                setTimeout(() => {
                  window.location.href = 'cart.php';
                }, 600);
              } else {
                window.location.href = 'cart.php';
              }
            });
          }
        }, 0);
      } else {
        detailDiv.innerHTML = '<div style="text-align:center;color:#888;font-size:1.3rem;padding:40px 0;">Product Not Found</div>';
      }
    });
  </script>
</body>
</html> 