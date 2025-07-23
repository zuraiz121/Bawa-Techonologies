<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Order Confirmation | Bawa Computers</title>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" type="image/png" href="images/favicon.jpg">
  <style>
    .confirmation-container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
    }
    
    .confirmation-card {
      background: white;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      text-align: center;
      margin-bottom: 30px;
    }
    
    .success-icon {
      font-size: 64px;
      color: #4CAF50;
      margin-bottom: 20px;
    }
    
    .confirmation-title {
      color: #386489;
      font-size: 2rem;
      margin-bottom: 10px;
    }
    
    .order-id {
      color: #666;
      font-size: 1.1rem;
      margin-bottom: 30px;
    }
    
    .order-details {
      background: white;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      margin-bottom: 30px;
    }
    
    .order-details h3 {
      color: #386489;
      margin-bottom: 20px;
      font-size: 1.2rem;
      border-bottom: 2px solid #e6eef5;
      padding-bottom: 10px;
    }
    
    .detail-section {
      margin-bottom: 25px;
    }
    
    .detail-section h4 {
      color: #444;
      margin-bottom: 10px;
      font-size: 1rem;
    }
    
    .detail-row {
      display: flex;
      justify-content: space-between;
      margin-bottom: 8px;
      padding: 8px 0;
      border-bottom: 1px solid #f0f0f0;
    }
    
    .detail-row:last-child {
      border-bottom: none;
    }
    
    .detail-label {
      font-weight: 600;
      color: #666;
    }
    
    .detail-value {
      color: #444;
    }
    
    .order-items {
      background: white;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      margin-bottom: 30px;
    }
    
    .order-item {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 0;
      border-bottom: 1px solid #f0f0f0;
    }
    
    .order-item:last-child {
      border-bottom: none;
    }
    
    .item-info {
      flex: 1;
    }
    
    .item-name {
      font-weight: 600;
      color: #444;
      margin-bottom: 5px;
    }
    
    .item-price {
      color: #386489;
      font-weight: 600;
    }
    
    .order-total {
      background: #f8f9fa;
      padding: 20px;
      border-radius: 8px;
      margin-top: 20px;
    }
    
    .total-row {
      display: flex;
      justify-content: space-between;
      margin-bottom: 10px;
    }
    
    .total-row.final {
      font-size: 1.2rem;
      font-weight: 700;
      color: #386489;
      border-top: 1px solid #e0e0e0;
      padding-top: 10px;
      margin-top: 10px;
    }
    
    .action-buttons {
      display: flex;
      gap: 15px;
      justify-content: center;
      flex-wrap: wrap;
    }
    
    .action-btn {
      padding: 12px 24px;
      border-radius: 8px;
      text-decoration: none;
      font-weight: 600;
      transition: all 0.3s;
      display: inline-flex;
      align-items: center;
      gap: 8px;
    }
    
    .btn-primary {
      background: #386489;
      color: white;
    }
    
    .btn-primary:hover {
      background: #2d4e6a;
    }
    
    .btn-secondary {
      background: #f5f5f5;
      color: #444;
      border: 2px solid #e0e0e0;
    }
    
    .btn-secondary:hover {
      background: #e0e0e0;
    }
    
    .payment-info {
      background: #e6eef5;
      padding: 20px;
      border-radius: 8px;
      margin-top: 20px;
    }
    
    .payment-info h4 {
      color: #386489;
      margin-bottom: 10px;
    }
    
    @media (max-width: 768px) {
      .confirmation-container {
        padding: 10px;
      }
      
      .confirmation-card,
      .order-details,
      .order-items {
        padding: 20px;
      }
      
      .action-buttons {
        flex-direction: column;
      }
      
      .action-btn {
        justify-content: center;
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
        <a href="cart.php" id="cart-link"><i class="fas fa-shopping-cart"></i></a>
      </div>
    </div>
  </header>
  
  <!-- Navbar -->
  <div id="navbar"></div>
  
  <!-- Order Confirmation Section -->
  <section class="featured-section content-centered">
    <div class="featured-title"><i class="fas fa-check-circle"></i> Order Confirmation</div>
    
    <div id="confirmation-content">
      <!-- Content will be loaded here -->
    </div>
  </section>
  
  <div id="footer"></div>
  
  <script src="js/script.js"></script>
  <script src="js/include.js"></script>
  <script src="js/notifications.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const confirmationContent = document.getElementById('confirmation-content');
      
      // Get order ID from URL
      const urlParams = new URLSearchParams(window.location.search);
      const orderId = urlParams.get('orderId');
      
      if (!orderId) {
        confirmationContent.innerHTML = `
          <div class="confirmation-container">
            <div class="confirmation-card">
              <div class="success-icon">
                <i class="fas fa-exclamation-triangle"></i>
              </div>
              <h2 class="confirmation-title">Order Not Found</h2>
              <p>No order ID provided or order not found.</p>
              <div class="action-buttons">
                <a href="index.html" class="action-btn btn-primary">
                  <i class="fas fa-home"></i> Go to Home
                </a>
              </div>
            </div>
          </div>
        `;
        return;
      }
      
      // Get order details from localStorage
      const orders = JSON.parse(localStorage.getItem('orders')) || [];
      const order = orders.find(o => o.orderId === orderId);
      
      if (!order) {
        confirmationContent.innerHTML = `
          <div class="confirmation-container">
            <div class="confirmation-card">
              <div class="success-icon">
                <i class="fas fa-exclamation-triangle"></i>
              </div>
              <h2 class="confirmation-title">Order Not Found</h2>
              <p>Order with ID ${orderId} was not found.</p>
              <div class="action-buttons">
                <a href="index.html" class="action-btn btn-primary">
                  <i class="fas fa-home"></i> Go to Home
                </a>
              </div>
            </div>
          </div>
        `;
        return;
      }
      
      // Format order date
      const orderDate = new Date(order.orderDate).toLocaleDateString('en-US', {
        year: 'numeric',
        month: 'long',
        day: 'numeric',
        hour: '2-digit',
        minute: '2-digit'
      });
      
      confirmationContent.innerHTML = `
        <div class="confirmation-container">
          <div class="confirmation-card">
            <div class="success-icon">
              <i class="fas fa-check-circle"></i>
            </div>
            <h2 class="confirmation-title">Thank You for Your Order!</h2>
            <p class="order-id">Order ID: <strong>${order.orderId}</strong></p>
            <p>We've received your order and will process it shortly. You'll receive an email confirmation with tracking details.</p>
          </div>
          
          <div class="order-details">
            <h3><i class="fas fa-info-circle"></i> Order Details</h3>
            <div class="detail-section">
              <h4>Customer Information</h4>
              <div class="detail-row">
                <span class="detail-label">Name:</span>
                <span class="detail-value">${order.customer.firstName} ${order.customer.lastName}</span>
              </div>
              <div class="detail-row">
                <span class="detail-label">Email:</span>
                <span class="detail-value">${order.customer.email}</span>
              </div>
              <div class="detail-row">
                <span class="detail-label">Phone:</span>
                <span class="detail-value">${order.customer.phone}</span>
              </div>
            </div>
            
            <div class="detail-section">
              <h4>Shipping Address</h4>
              <div class="detail-row">
                <span class="detail-label">Address:</span>
                <span class="detail-value">${order.shipping.address}</span>
              </div>
              <div class="detail-row">
                <span class="detail-label">City:</span>
                <span class="detail-value">${order.shipping.city}</span>
              </div>
              <div class="detail-row">
                <span class="detail-label">State:</span>
                <span class="detail-value">${order.shipping.state}</span>
              </div>
              <div class="detail-row">
                <span class="detail-label">ZIP Code:</span>
                <span class="detail-value">${order.shipping.zipCode}</span>
              </div>
              <div class="detail-row">
                <span class="detail-label">Country:</span>
                <span class="detail-value">${order.shipping.country}</span>
              </div>
            </div>
            
            <div class="detail-section">
              <h4>Order Information</h4>
              <div class="detail-row">
                <span class="detail-label">Order Date:</span>
                <span class="detail-value">${orderDate}</span>
              </div>
              <div class="detail-row">
                <span class="detail-label">Payment Method:</span>
                <span class="detail-value">${order.payment.method === 'cod' ? 'Cash on Delivery' : 
                                          order.payment.method === 'bank' ? 'Bank Transfer' : 'Credit/Debit Card'}</span>
              </div>
              ${order.notes ? `
                <div class="detail-row">
                  <span class="detail-label">Notes:</span>
                  <span class="detail-value">${order.notes}</span>
                </div>
              ` : ''}
            </div>
          </div>
          
          <div class="order-items">
            <h3><i class="fas fa-shopping-bag"></i> Order Items</h3>
            ${order.items.map(item => `
              <div class="order-item">
                <div class="item-info">
                  <div class="item-name">${item.title}</div>
                  <div class="item-price">${item.price || item.priceDisplay}</div>
                </div>
              </div>
            `).join('')}
            
            <div class="order-total">
              <div class="total-row">
                <span>Subtotal:</span>
                <span>Rs. ${order.totals.subtotal.toLocaleString()}</span>
              </div>
              <div class="total-row">
                <span>Shipping:</span>
                <span>Rs. ${order.totals.shipping.toLocaleString()}</span>
              </div>
              <div class="total-row final">
                <span>Total:</span>
                <span>Rs. ${order.totals.total.toLocaleString()}</span>
              </div>
            </div>
          </div>
          
          <div class="payment-info">
            <h4><i class="fas fa-credit-card"></i> Payment Information</h4>
            ${order.payment.method === 'cod' ? 
              '<p>You will pay cash when your order is delivered. Please have the exact amount ready.</p>' :
              order.payment.method === 'bank' ?
              '<p>Please transfer the total amount to our bank account. You will receive bank details via email.</p>' :
              '<p>Your payment will be processed securely. You will receive a payment confirmation shortly.</p>'
            }
          </div>
          
          <div class="action-buttons">
            <a href="index.html" class="action-btn btn-primary">
              <i class="fas fa-home"></i> Continue Shopping
            </a>
            <a href="#" class="action-btn btn-secondary" onclick="window.print()">
              <i class="fas fa-print"></i> Print Receipt
            </a>
          </div>
        </div>
      `;
    });
  </script>
</body>
</html> 