// Notification System
class NotificationSystem {
    constructor() {
        this.notifications = [];
    }

    show(message, type = 'success', duration = 3000) {
        const notification = document.createElement('div');
        notification.className = `notification ${type}`;
        
        const icon = this.getIcon(type);
        
        notification.innerHTML = `
            <div class="icon">${icon}</div>
            <div class="message">${message}</div>
            <button class="close" onclick="this.parentElement.remove()">&times;</button>
        `;
        
        document.body.appendChild(notification);
        
        // Show notification with animation
        setTimeout(() => {
            notification.classList.add('show');
        }, 100);
        
        // Auto remove after duration
        if (duration > 0) {
            setTimeout(() => {
                this.hide(notification);
            }, duration);
        }
        
        this.notifications.push(notification);
        return notification;
    }

    hide(notification) {
        notification.classList.remove('show');
        setTimeout(() => {
            if (notification.parentElement) {
                notification.remove();
            }
            this.notifications = this.notifications.filter(n => n !== notification);
        }, 300);
    }

    getIcon(type) {
        switch(type) {
            case 'success':
                return '<i class="fas fa-check-circle"></i>';
            case 'error':
                return '<i class="fas fa-exclamation-circle"></i>';
            case 'info':
                return '<i class="fas fa-info-circle"></i>';
            default:
                return '<i class="fas fa-bell"></i>';
        }
    }

    success(message, duration = 3000) {
        return this.show(message, 'success', duration);
    }

    error(message, duration = 4000) {
        return this.show(message, 'error', duration);
    }

    info(message, duration = 3000) {
        return this.show(message, 'info', duration);
    }
}

// Global notification instance
const notifications = new NotificationSystem();

// Cart and Wishlist functions with notifications
function addToCart(product, productName) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    
    // Check if product already exists in cart
    const existingProduct = cart.find(item => item.title === product.title);
    
    if (existingProduct) {
        notifications.error(`${productName} is already in your cart!`);
        return false;
    }
    
    cart.push(product);
    localStorage.setItem('cart', JSON.stringify(cart));
    notifications.success(`${productName} added to cart successfully!`);
    
    // Update cart counter
    if (typeof updateCartCounter === 'function') {
        updateCartCounter();
    }
    
    return true;
}

function removeFromCart(product, productName) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    const initialLength = cart.length;
    
    cart = cart.filter(item => item.title !== product.title);
    
    if (cart.length < initialLength) {
        localStorage.setItem('cart', JSON.stringify(cart));
        notifications.success(`${productName} removed from cart!`);
        
        // Update cart counter
        if (typeof updateCartCounter === 'function') {
            updateCartCounter();
        }
        
        return true;
    } else {
        notifications.error(`Could not remove ${productName} from cart.`);
        return false;
    }
}

function addToWishlist(product, productName) {
    let wishlist = JSON.parse(localStorage.getItem('wishlist')) || [];
    
    // Check if product already exists in wishlist
    const existingProduct = wishlist.find(item => item.title === product.title);
    
    if (existingProduct) {
        notifications.error(`${productName} is already in your wishlist!`);
        return false;
    }
    
    wishlist.push(product);
    localStorage.setItem('wishlist', JSON.stringify(wishlist));
    notifications.success(`${productName} added to wishlist!`);
    
    // Update wishlist counter
    if (typeof updateWishlistCounter === 'function') {
        updateWishlistCounter();
    }
    
    return true;
}

function removeFromWishlist(product, productName) {
    let wishlist = JSON.parse(localStorage.getItem('wishlist')) || [];
    const initialLength = wishlist.length;
    
    wishlist = wishlist.filter(item => item.title !== product.title);
    
    if (wishlist.length < initialLength) {
        localStorage.setItem('wishlist', JSON.stringify(wishlist));
        notifications.success(`${productName} removed from wishlist!`);
        
        // Update wishlist counter
        if (typeof updateWishlistCounter === 'function') {
            updateWishlistCounter();
        }
        
        return true;
    } else {
        notifications.error(`Could not remove ${productName} from wishlist.`);
        return false;
    }
}

function clearCart() {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    if (cart.length > 0) {
        localStorage.removeItem('cart');
        notifications.success('Cart cleared successfully!');
        
        // Update cart counter
        if (typeof updateCartCounter === 'function') {
            updateCartCounter();
        }
        
        return true;
    } else {
        notifications.info('Your cart is already empty.');
        return false;
    }
}

// Enhanced click handlers for cart and wishlist buttons
function setupCartHandlers() {
    document.body.addEventListener('click', function(e) {
        if (e.target.classList.contains('add-to-cart-btn') || 
            e.target.closest('.add-to-cart-btn')) {
            
            const button = e.target.classList.contains('add-to-cart-btn') ? 
                          e.target : e.target.closest('.add-to-cart-btn');
            
            const card = button.closest('.product-card');
            if (!card) return;
            
            const productId = card.getAttribute('data-id');
            if (!productId) return;
            
            // Get product data based on current page
            let product = null;
            let productName = '';
            
            // Try to get product from various product arrays
            if (typeof laptopProducts !== 'undefined' && laptopProducts[parseInt(productId)-1]) {
                product = laptopProducts[parseInt(productId)-1];
                productName = product.title;
            } else if (typeof desktopProducts !== 'undefined' && desktopProducts[parseInt(productId)-1]) {
                product = desktopProducts[parseInt(productId)-1];
                productName = product.title;
            } else if (typeof driveProducts !== 'undefined' && driveProducts[parseInt(productId)-1]) {
                product = driveProducts[parseInt(productId)-1];
                productName = product.title;
            } else if (typeof monitorProducts !== 'undefined' && monitorProducts[parseInt(productId)-1]) {
                product = monitorProducts[parseInt(productId)-1];
                productName = product.title;
            } else if (typeof graphicCardProducts !== 'undefined' && graphicCardProducts[parseInt(productId)-1]) {
                product = graphicCardProducts[parseInt(productId)-1];
                productName = product.title;
            } else if (typeof headphoneProducts !== 'undefined' && headphoneProducts[parseInt(productId)-1]) {
                product = headphoneProducts[parseInt(productId)-1];
                productName = product.title;
            } else if (typeof laptopMemoryProducts !== 'undefined' && laptopMemoryProducts[parseInt(productId)-1]) {
                product = laptopMemoryProducts[parseInt(productId)-1];
                productName = product.title;
            } else if (typeof desktopMemoryProducts !== 'undefined' && desktopMemoryProducts[parseInt(productId)-1]) {
                product = desktopMemoryProducts[parseInt(productId)-1];
                productName = product.title;
            } else if (typeof motherboardProducts !== 'undefined' && motherboardProducts[parseInt(productId)-1]) {
                product = motherboardProducts[parseInt(productId)-1];
                productName = product.title;
            } else if (typeof mouseProducts !== 'undefined' && mouseProducts[parseInt(productId)-1]) {
                product = mouseProducts[parseInt(productId)-1];
                productName = product.title;
            } else if (typeof pcCasingProducts !== 'undefined' && pcCasingProducts[parseInt(productId)-1]) {
                product = pcCasingProducts[parseInt(productId)-1];
                productName = product.title;
            } else if (typeof powerSupplyProducts !== 'undefined' && powerSupplyProducts[parseInt(productId)-1]) {
                product = powerSupplyProducts[parseInt(productId)-1];
                productName = product.title;
            } else if (typeof scannerProducts !== 'undefined' && scannerProducts[parseInt(productId)-1]) {
                product = scannerProducts[parseInt(productId)-1];
                productName = product.title;
            } else if (typeof tvBoxProducts !== 'undefined' && tvBoxProducts[parseInt(productId)-1]) {
                product = tvBoxProducts[parseInt(productId)-1];
                productName = product.title;
            } else if (typeof tonerProducts !== 'undefined' && tonerProducts[parseInt(productId)-1]) {
                product = tonerProducts[parseInt(productId)-1];
                productName = product.title;
            } else if (typeof upsProducts !== 'undefined' && upsProducts[parseInt(productId)-1]) {
                product = upsProducts[parseInt(productId)-1];
                productName = product.title;
            } else if (typeof usedLaptopProducts !== 'undefined' && usedLaptopProducts[parseInt(productId)-1]) {
                product = usedLaptopProducts[parseInt(productId)-1];
                productName = product.title;
            } else if (typeof usedDesktopProducts !== 'undefined' && usedDesktopProducts[parseInt(productId)-1]) {
                product = usedDesktopProducts[parseInt(productId)-1];
                productName = product.title;
            } else if (typeof usedAccessoryProducts !== 'undefined' && usedAccessoryProducts[parseInt(productId)-1]) {
                product = usedAccessoryProducts[parseInt(productId)-1];
                productName = product.title;
            } else if (typeof usedLcdProducts !== 'undefined' && usedLcdProducts[parseInt(productId)-1]) {
                product = usedLcdProducts[parseInt(productId)-1];
                productName = product.title;
            }
            
            if (product) {
                addToCart(product, productName);
            } else {
                notifications.error('Product not found!');
            }
        }
    });
}

function setupWishlistHandlers() {
    document.body.addEventListener('click', function(e) {
        if (e.target.classList.contains('wishlist-btn') || 
            e.target.closest('.wishlist-btn')) {
            
            const button = e.target.classList.contains('wishlist-btn') ? 
                          e.target : e.target.closest('.wishlist-btn');
            
            const card = button.closest('.product-card');
            if (!card) return;
            
            const productId = card.getAttribute('data-id');
            if (!productId) return;
            
            // Get product data based on current page
            let product = null;
            let productName = '';
            
            // Try to get product from various product arrays
            if (typeof laptopProducts !== 'undefined' && laptopProducts[parseInt(productId)-1]) {
                product = laptopProducts[parseInt(productId)-1];
                productName = product.title;
            } else if (typeof desktopProducts !== 'undefined' && desktopProducts[parseInt(productId)-1]) {
                product = desktopProducts[parseInt(productId)-1];
                productName = product.title;
            } else if (typeof driveProducts !== 'undefined' && driveProducts[parseInt(productId)-1]) {
                product = driveProducts[parseInt(productId)-1];
                productName = product.title;
            } else if (typeof monitorProducts !== 'undefined' && monitorProducts[parseInt(productId)-1]) {
                product = monitorProducts[parseInt(productId)-1];
                productName = product.title;
            } else if (typeof graphicCardProducts !== 'undefined' && graphicCardProducts[parseInt(productId)-1]) {
                product = graphicCardProducts[parseInt(productId)-1];
                productName = product.title;
            } else if (typeof headphoneProducts !== 'undefined' && headphoneProducts[parseInt(productId)-1]) {
                product = headphoneProducts[parseInt(productId)-1];
                productName = product.title;
            } else if (typeof laptopMemoryProducts !== 'undefined' && laptopMemoryProducts[parseInt(productId)-1]) {
                product = laptopMemoryProducts[parseInt(productId)-1];
                productName = product.title;
            } else if (typeof desktopMemoryProducts !== 'undefined' && desktopMemoryProducts[parseInt(productId)-1]) {
                product = desktopMemoryProducts[parseInt(productId)-1];
                productName = product.title;
            } else if (typeof motherboardProducts !== 'undefined' && motherboardProducts[parseInt(productId)-1]) {
                product = motherboardProducts[parseInt(productId)-1];
                productName = product.title;
            } else if (typeof mouseProducts !== 'undefined' && mouseProducts[parseInt(productId)-1]) {
                product = mouseProducts[parseInt(productId)-1];
                productName = product.title;
            } else if (typeof pcCasingProducts !== 'undefined' && pcCasingProducts[parseInt(productId)-1]) {
                product = pcCasingProducts[parseInt(productId)-1];
                productName = product.title;
            } else if (typeof powerSupplyProducts !== 'undefined' && powerSupplyProducts[parseInt(productId)-1]) {
                product = powerSupplyProducts[parseInt(productId)-1];
                productName = product.title;
            } else if (typeof scannerProducts !== 'undefined' && scannerProducts[parseInt(productId)-1]) {
                product = scannerProducts[parseInt(productId)-1];
                productName = product.title;
            } else if (typeof tvBoxProducts !== 'undefined' && tvBoxProducts[parseInt(productId)-1]) {
                product = tvBoxProducts[parseInt(productId)-1];
                productName = product.title;
            } else if (typeof tonerProducts !== 'undefined' && tonerProducts[parseInt(productId)-1]) {
                product = tonerProducts[parseInt(productId)-1];
                productName = product.title;
            } else if (typeof upsProducts !== 'undefined' && upsProducts[parseInt(productId)-1]) {
                product = upsProducts[parseInt(productId)-1];
                productName = product.title;
            } else if (typeof usedLaptopProducts !== 'undefined' && usedLaptopProducts[parseInt(productId)-1]) {
                product = usedLaptopProducts[parseInt(productId)-1];
                productName = product.title;
            } else if (typeof usedDesktopProducts !== 'undefined' && usedDesktopProducts[parseInt(productId)-1]) {
                product = usedDesktopProducts[parseInt(productId)-1];
                productName = product.title;
            } else if (typeof usedAccessoryProducts !== 'undefined' && usedAccessoryProducts[parseInt(productId)-1]) {
                product = usedAccessoryProducts[parseInt(productId)-1];
                productName = product.title;
            } else if (typeof usedLcdProducts !== 'undefined' && usedLcdProducts[parseInt(productId)-1]) {
                product = usedLcdProducts[parseInt(productId)-1];
                productName = product.title;
            }
            
            if (product) {
                addToWishlist(product, productName);
            } else {
                notifications.error('Product not found!');
            }
        }
    });
}

// Initialize handlers when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    setupCartHandlers();
    setupWishlistHandlers();
}); 