// Batch update script for remaining pages
// This script will help identify and update the remaining pages

const remainingPages = [
    'mouse.html',
    'motherboards.html', 
    'laptop-memories.html',
    'desktop-memories.html',
    'drives.html',
    'pc-casing.html',
    'power-supply.html',
    'scanners.html',
    'tv-box.html',
    'toner-cartridges.html',
    'ups.html',
    'used-laptops.html',
    'used-desktop-pcs.html',
    'used-accessories.html',
    'used-lcds.html'
];

console.log('Remaining pages to update:');
remainingPages.forEach((page, index) => {
    console.log(`${index + 1}. ${page}`);
});

console.log('\nFor each page, you need to:');
console.log('1. Add CSS link: <link rel="stylesheet" href="css/new-cards.css">');
console.log('2. Update renderProducts function with new card structure');
console.log('3. Replace old cart handler with new cart/wishlist functions');
console.log('4. Add updateCartCounter() initialization');

// Template for new renderProducts function:
const newRenderProductsTemplate = `
function renderProducts(page) {
    const grid = document.getElementById('product-grid');
    grid.innerHTML = '';
    const start = (page-1)*productsPerPage;
    const end = Math.min(start+productsPerPage, filteredProducts.length);
    for(let i=start; i<end; i++) {
        const p = filteredProducts[i];
        grid.innerHTML += \`
        <div class="product-card" data-id="\${i+1}">
            <div class="card-left">
                <img src="\${p.img || 'https://images.unsplash.com/photo-1593640408182-31c70c8268f5?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80'}" alt="\${p.title}" />
            </div>
            <div class="card-right">
                <div class="heart-icon" onclick="toggleWishlist(\${i+1})">&#10084;</div>
                <h2 class="product-title">\${p.title}</h2>
                <h4 class="product-category">PRODUCT CATEGORY</h4>
                <div class="price">\${p.priceDisplay}</div>
                <div class="description">
                    Product description here...
                </div>
                <div class="product-meta">
                    <span class="stock in-stock">\${p.stock}</span>
                </div>
                <div class="buttons">
                    <a href="product-detail.html?id=\${i+1}&type=product-type" class="btn-primary">VIEW PRODUCT</a>
                    <button onclick="addToCart(\${i+1})">ADD TO CART</button>
                    <button onclick="addToWishlist(\${i+1})">WISHLIST</button>
                </div>
            </div>
        </div>\`;
    }
    if(filteredProducts.length === 0) {
        grid.innerHTML = '<div style="padding:40px;text-align:center;color:#888;">No products found in this price range.</div>';
    }
    // Update results info
    const info = document.getElementById('results-info');
    if(filteredProducts.length === 0) {
        info.textContent = 'No products found';
    } else {
        info.textContent = \`Showing \${filteredProducts.length === 0 ? 0 : start+1}-\${end} of \${filteredProducts.length}\`;
    }
}
`;

// Template for cart and wishlist functions:
const cartWishlistTemplate = `
// Cart and Wishlist Functions
function addToCart(productId) {
    const product = products[productId - 1];
    if (product) {
        let cart = JSON.parse(localStorage.getItem('cart') || '[]');
        const existingItem = cart.find(item => item.id === productId);
        
        if (existingItem) {
            existingItem.quantity += 1;
        } else {
            cart.push({
                id: productId,
                title: product.title,
                price: product.price,
                priceDisplay: product.priceDisplay,
                quantity: 1
            });
        }
        
        localStorage.setItem('cart', JSON.stringify(cart));
        showNotification('Product added to cart successfully!', 'success');
        updateCartCounter();
    }
}

function addToWishlist(productId) {
    const product = products[productId - 1];
    if (product) {
        let wishlist = JSON.parse(localStorage.getItem('wishlist') || '[]');
        const existingItem = wishlist.find(item => item.id === productId);
        
        if (!existingItem) {
            wishlist.push({
                id: productId,
                title: product.title,
                price: product.price,
                priceDisplay: product.priceDisplay
            });
            localStorage.setItem('wishlist', JSON.stringify(wishlist));
            showNotification('Product added to wishlist!', 'success');
        } else {
            showNotification('Product already in wishlist!', 'info');
        }
    }
}

function toggleWishlist(productId) {
    const heartIcon = event.target;
    heartIcon.classList.toggle('active');
    
    if (heartIcon.classList.contains('active')) {
        addToWishlist(productId);
    } else {
        // Remove from wishlist
        let wishlist = JSON.parse(localStorage.getItem('wishlist') || '[]');
        wishlist = wishlist.filter(item => item.id !== productId);
        localStorage.setItem('wishlist', JSON.stringify(wishlist));
        showNotification('Product removed from wishlist!', 'info');
    }
}

function updateCartCounter() {
    const cart = JSON.parse(localStorage.getItem('cart') || '[]');
    const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
    const cartLink = document.getElementById('cart-link');
    if (cartLink) {
        cartLink.innerHTML = \`<i class="fas fa-shopping-cart"></i>\${totalItems > 0 ? \` <span style="background: red; color: white; border-radius: 50%; padding: 2px 6px; font-size: 12px;">\${totalItems}</span>\` : ''}\`;
    }
}

function showNotification(message, type = 'info') {
    const notification = document.createElement('div');
    notification.className = \`notification \${type}\`;
    notification.innerHTML = \`
        <div class="icon">\${type === 'success' ? '✓' : type === 'error' ? '✗' : 'ℹ'}</div>
        <div class="message">\${message}</div>
        <div class="close" onclick="this.parentElement.remove()">×</div>
    \`;
    document.body.appendChild(notification);
    
    setTimeout(() => {
        notification.classList.add('show');
    }, 100);
    
    setTimeout(() => {
        notification.classList.remove('show');
        setTimeout(() => notification.remove(), 300);
    }, 3000);
}

// Initialize cart counter
updateCartCounter();
`;

console.log('\nTemplates ready for copy-paste!'); 