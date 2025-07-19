// Hamburger menu toggle
const hamburger = document.getElementById('hamburger');
const navMenu = document.getElementById('nav-menu');
const navOverlay = document.querySelector('.nav-overlay');

function closeNavMenu() {
    navMenu.classList.remove('open');
    hamburger.classList.remove('active');
    document.body.style.overflow = '';
}

if (hamburger && navMenu) {
    hamburger.addEventListener('click', () => {
        navMenu.classList.toggle('open');
        hamburger.classList.toggle('active');
        if (navMenu.classList.contains('open')) {
            document.body.style.overflow = 'hidden';
        } else {
            document.body.style.overflow = '';
        }
    });
}
if (navOverlay) {
    navOverlay.addEventListener('click', closeNavMenu);
}

// Dropdown toggle for mobile
const dropdowns = document.querySelectorAll('.dropdown');
const dropdownToggles = document.querySelectorAll('.dropdown-toggle');

dropdownToggles.forEach(function(toggle, idx) {
    toggle.addEventListener('click', function(e) {
        if (window.innerWidth <= 768) {
            e.preventDefault();
            // Close all dropdowns except this one
            dropdowns.forEach((d, i) => {
                if (i !== idx) d.classList.remove('open');
            });
            dropdowns[idx].classList.toggle('open');
        }
    });
});
// Close dropdown when clicking outside (mobile)
document.addEventListener('click', function(e) {
    if (window.innerWidth > 768) return;
    let isDropdown = false;
    dropdowns.forEach(d => {
        if (d.contains(e.target)) isDropdown = true;
    });
    if (!isDropdown) {
        dropdowns.forEach(d => d.classList.remove('open'));
    }
});

// Sticky navbar effect (optional, since CSS sticky is used, but can add shadow on scroll)
window.addEventListener('scroll', function() {
    const navbar = document.getElementById('navbar');
    if (window.scrollY > 10) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});

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
