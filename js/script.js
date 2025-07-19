// Cart and Wishlist counter functionality
// This file handles the counter display for cart and wishlist items

// Wishlist counter functionality
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

// Cart counter functionality
function updateCartCounter() {
    const cartLink = document.getElementById('cart-link');
    if (cartLink) {
        const cart = JSON.parse(localStorage.getItem('cart')) || [];
        const count = cart.length;
        
        // Remove existing counter if any
        const existingCounter = cartLink.querySelector('.cart-counter');
        if (existingCounter) {
            existingCounter.remove();
        }
        
        // Add counter if items exist
        if (count > 0) {
            const counter = document.createElement('span');
            counter.className = 'cart-counter';
            counter.textContent = count;
            counter.style.cssText = `
                position: absolute;
                top: -8px;
                right: -8px;
                background: #386489;
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
            cartLink.style.position = 'relative';
            cartLink.appendChild(counter);
        }
    }
}

// Update counters on page load
document.addEventListener('DOMContentLoaded', function() {
    updateWishlistCounter();
    updateCartCounter();
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
