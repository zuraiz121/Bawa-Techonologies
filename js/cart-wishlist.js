// Consolidated Cart and Wishlist Functions
// This file contains all cart and wishlist functionality used across the website

// Cart Functions
function addToCart(productId, productArray = null) {
    // Determine which product array to use based on context
    let products = productArray;
    if (!products) {
        // Try to find the appropriate product array based on current page
        if (typeof laptopProducts !== 'undefined') products = laptopProducts;
        else if (typeof desktopPCProducts !== 'undefined') products = desktopPCProducts;
        else if (typeof monitorProducts !== 'undefined') products = monitorProducts;
        else if (typeof graphicCardProducts !== 'undefined') products = graphicCardProducts;
        else if (typeof headphoneProducts !== 'undefined') products = headphoneProducts;
        else if (typeof mouseProducts !== 'undefined') products = mouseProducts;
        else if (typeof motherboardProducts !== 'undefined') products = motherboardProducts;
        else if (typeof laptopMemoryProducts !== 'undefined') products = laptopMemoryProducts;
        else if (typeof desktopMemoryProducts !== 'undefined') products = desktopMemoryProducts;
        else if (typeof driveProducts !== 'undefined') products = driveProducts;
        else if (typeof pcCasingProducts !== 'undefined') products = pcCasingProducts;
        else if (typeof powerSupplyProducts !== 'undefined') products = powerSupplyProducts;
        else if (typeof scannerProducts !== 'undefined') products = scannerProducts;
        else if (typeof tvBoxProducts !== 'undefined') products = tvBoxProducts;
        else if (typeof tonerCartridgeProducts !== 'undefined') products = tonerCartridgeProducts;
        else if (typeof upsProducts !== 'undefined') products = upsProducts;
        else if (typeof usedLaptopProducts !== 'undefined') products = usedLaptopProducts;
        else if (typeof usedDesktopProducts !== 'undefined') products = usedDesktopProducts;
        else if (typeof usedAccessoriesProducts !== 'undefined') products = usedAccessoriesProducts;
        else if (typeof usedLCDProducts !== 'undefined') products = usedLCDProducts;
        else if (typeof productsArray !== 'undefined') products = productsArray;
    }

    const product = products[productId - 1];
    if (product) {
        let cart = JSON.parse(localStorage.getItem('cart') || '[]');
        const existingItem = cart.find(item => item.id === productId);
        
        if (existingItem) {
            existingItem.quantity += 1;
        } else {
            cart.push({
                id: productId,
                title: product.title || product.name,
                price: product.price,
                priceDisplay: product.priceDisplay || product.price,
                quantity: 1
            });
        }
        
        localStorage.setItem('cart', JSON.stringify(cart));
        showNotification('Product added to cart successfully!', 'success');
        updateCartCounter();
    }
}

function removeFromCart(productTitle) {
    let cart = JSON.parse(localStorage.getItem('cart') || '[]');
    cart = cart.filter(item => item.title !== productTitle);
    localStorage.setItem('cart', JSON.stringify(cart));
    showNotification('Product removed from cart!', 'info');
    updateCartCounter();
}

// Wishlist Functions
function addToWishlist(productId, productArray = null) {
    // Determine which product array to use based on context
    let products = productArray;
    if (!products) {
        // Try to find the appropriate product array based on current page
        if (typeof laptopProducts !== 'undefined') products = laptopProducts;
        else if (typeof desktopPCProducts !== 'undefined') products = desktopPCProducts;
        else if (typeof monitorProducts !== 'undefined') products = monitorProducts;
        else if (typeof graphicCardProducts !== 'undefined') products = graphicCardProducts;
        else if (typeof headphoneProducts !== 'undefined') products = headphoneProducts;
        else if (typeof mouseProducts !== 'undefined') products = mouseProducts;
        else if (typeof motherboardProducts !== 'undefined') products = motherboardProducts;
        else if (typeof laptopMemoryProducts !== 'undefined') products = laptopMemoryProducts;
        else if (typeof desktopMemoryProducts !== 'undefined') products = desktopMemoryProducts;
        else if (typeof driveProducts !== 'undefined') products = driveProducts;
        else if (typeof pcCasingProducts !== 'undefined') products = pcCasingProducts;
        else if (typeof powerSupplyProducts !== 'undefined') products = powerSupplyProducts;
        else if (typeof scannerProducts !== 'undefined') products = scannerProducts;
        else if (typeof tvBoxProducts !== 'undefined') products = tvBoxProducts;
        else if (typeof tonerCartridgeProducts !== 'undefined') products = tonerCartridgeProducts;
        else if (typeof upsProducts !== 'undefined') products = upsProducts;
        else if (typeof usedLaptopProducts !== 'undefined') products = usedLaptopProducts;
        else if (typeof usedDesktopProducts !== 'undefined') products = usedDesktopProducts;
        else if (typeof usedAccessoriesProducts !== 'undefined') products = usedAccessoriesProducts;
        else if (typeof usedLCDProducts !== 'undefined') products = usedLCDProducts;
        else if (typeof productsArray !== 'undefined') products = productsArray;
    }

    const product = products[productId - 1];
    if (product) {
        let wishlist = JSON.parse(localStorage.getItem('wishlist') || '[]');
        const existingItem = wishlist.find(item => item.id === productId);
        
        if (!existingItem) {
            wishlist.push({
                id: productId,
                title: product.title || product.name,
                price: product.price,
                priceDisplay: product.priceDisplay || product.price
            });
            localStorage.setItem('wishlist', JSON.stringify(wishlist));
            showNotification('Product added to wishlist!', 'success');
        } else {
            showNotification('Product already in wishlist!', 'info');
        }
    }
}

function removeFromWishlist(productTitle) {
    let wishlist = JSON.parse(localStorage.getItem('wishlist') || '[]');
    wishlist = wishlist.filter(item => item.title !== productTitle);
    localStorage.setItem('wishlist', JSON.stringify(wishlist));
    showNotification('Product removed from wishlist!', 'info');
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

// Counter Functions
function updateCartCounter() {
    const cart = JSON.parse(localStorage.getItem('cart') || '[]');
    const totalItems = cart.reduce((sum, item) => sum + (item.quantity || 1), 0);
    const cartLink = document.getElementById('cart-link');
    if (cartLink) {
        cartLink.innerHTML = `<i class="fas fa-shopping-cart"></i>${totalItems > 0 ? ` <span style="background: red; color: white; border-radius: 50%; padding: 2px 6px; font-size: 12px;">${totalItems}</span>` : ''}`;
    }
}

function updateWishlistCounter() {
    const wishlistLink = document.getElementById('wishlist-link');
    if (wishlistLink) {
        const wishlist = JSON.parse(localStorage.getItem('wishlist')) || [];
        const count = wishlist.length;
        
        // Remove existing counter if any
        const existingCounter = wishlistLink.querySelector('.wishlist-counter');
        if (existingCounter) {
            existingCounter.remove();
        }
        
        // Add counter if items exist
        if (count > 0) {
            const counter = document.createElement('span');
            counter.className = 'wishlist-counter';
            counter.textContent = count;
            counter.style.cssText = `
                position: absolute;
                top: -8px;
                right: -8px;
                background: #ff4757;
                color: white;
                border-radius: 50%;
                width: 18px;
                height: 18px;
                font-size: 11px;
                display: flex;
                align-items: center;
                justify-content: center;
                font-weight: bold;
            `;
            wishlistLink.style.position = 'relative';
            wishlistLink.appendChild(counter);
        }
    }
}

// Notification Function
function showNotification(message, type = 'info') {
    const notification = document.createElement('div');
    notification.className = `notification ${type}`;
    notification.innerHTML = `
        <div class="icon">${type === 'success' ? '✓' : type === 'error' ? '✗' : 'ℹ'}</div>
        <div class="message">${message}</div>
        <div class="close" onclick="this.parentElement.remove()">×</div>
    `;
    document.body.appendChild(notification);
    
    setTimeout(() => {
        notification.classList.add('show');
    }, 100);
    
    setTimeout(() => {
        notification.classList.remove('show');
        setTimeout(() => notification.remove(), 300);
    }, 3000);
}

// Initialize counters on page load
document.addEventListener('DOMContentLoaded', function() {
    updateCartCounter();
    updateWishlistCounter();
});

// Listen for storage changes to update counters
window.addEventListener('storage', function(e) {
    if (e.key === 'wishlist') {
        updateWishlistCounter();
    }
    if (e.key === 'cart') {
        updateCartCounter();
    }
}); 