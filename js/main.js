// Main JavaScript functionality for the website
// Handles product rendering and cart functionality

document.addEventListener('DOMContentLoaded', function() {
    // Initialize product list if it exists
    initializeProductList();
    
    // Initialize cart functionality
    initializeCartHandlers();
});

// Initialize product list rendering
function initializeProductList() {
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
                        <button class="btn btn-blue add-to-cart-btn" data-id="${product.id}">Add to Cart</button>
                    </div>
                </div>
            </div>
        `).join('');
    }
}

// Initialize cart functionality
function initializeCartHandlers() {
    document.body.addEventListener('click', function(e) {
        if (e.target.classList.contains('add-to-cart-btn')) {
            handleAddToCart(e);
        }
    });
}

// Handle add to cart functionality
function handleAddToCart(e) {
    const button = e.target;
    const productId = button.getAttribute('data-id');
    
    if (!productId) return;
    
    const product = productsArray.find(p => String(p.id) === String(productId));
    if (!product) return;
    
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    
    // Check if product already exists in cart
    const existingProduct = cart.find(item => String(item.id) === String(product.id));
    if (existingProduct) {
        if (typeof notifications !== 'undefined') {
            notifications.error(`${product.name} is already in your cart!`);
        }
        return;
    }
    
    // Add product to cart
    cart.push(product);
    localStorage.setItem('cart', JSON.stringify(cart));
    
    // Show success message
    if (typeof notifications !== 'undefined') {
        notifications.success(`${product.name} added to cart successfully!`);
    }
    
    // Update cart counter if function exists
    if (typeof updateCartCounter === 'function') {
        updateCartCounter();
    }
} 