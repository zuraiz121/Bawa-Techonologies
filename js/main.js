document.addEventListener('DOMContentLoaded', function() {
  const productList = document.getElementById('product-list');
  if (productList && typeof productsArray !== 'undefined') {
    productList.innerHTML = productsArray.map(product => `
      <div class="product-card" data-id="${product.id}">
        <div class="product-img">
          <img src="${product.img}" alt="${product.name}" style="width:100%;height:auto;border-radius:12px;">
        </div>
        <div class="product-info">
          <h2 class="product-title">${product.name}</h2>
          <div class="product-meta">
            <span class="price">${product.price}</span>
          </div>
          <p class="product-desc">${product.desc}</p>
          <div class="product-actions">
            <a href="product-detail.html?id=${product.id}" class="btn btn-blue">View Product</a>
            <button class="btn btn-blue add-to-cart-btn">Add to Cart</button>
          </div>
        </div>
      </div>
    `).join('');
  }

  // Add to Cart global handler
  document.body.addEventListener('click', function(e) {
    if (e.target.classList.contains('add-to-cart-btn')) {
      const card = e.target.closest('.product-card');
      if (!card) return;
      const productId = card.getAttribute('data-id');
      if (!productId) return;
      const product = productsArray.find(p => String(p.id) === String(productId));
      if (!product) return;
      let cart = JSON.parse(localStorage.getItem('cart')) || [];
      if (!cart.find(item => String(item.id) === String(product.id))) {
        cart.push(product);
        localStorage.setItem('cart', JSON.stringify(cart));
      }
      window.location.href = 'cart.html';
    }
  });
}); 