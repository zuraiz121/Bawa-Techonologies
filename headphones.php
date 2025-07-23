<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Headphones | Bawa Computers</title>
    <!-- Google Fonts: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" type="image/png" href="images/favicon.jpg">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/new-cards.css">
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
    <!-- Breadcrumb -->
    <div class="breadcrumb-bar">
        <div class="container">
            <span class="breadcrumb" href="">Home / More / <span class="current">Headphones</span></span>
        </div>
    </div>
            <div class="container">
                <!-- Main Content Layout -->
                <div class="page-layout-centered page-layout">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="sidebar-section category">
                <h3>HEADPHONES</h3>
            </div>
            <div class="sidebar-section price-range">
                <h4>PRICE RANGE</h4>
                <div class="slider-row">
                    <input type="range" min="0" max="50000" value="0" class="price-slider" id="price-slider">
                    <div class="price-values">
                        <span>0</span>
                        <span id="selected-price">0</span>
                        <span style="float:right">50,000</span>
                    </div>
                </div>
                <button class="btn btn-blue" id="price-go">GO</button>
            </div>
            <div class="sidebar-section brand-filter">
                <h4>BRAND</h4>
                <label><input type="checkbox" class="brand-checkbox" value="Sony"> Sony</label>
                <label><input type="checkbox" class="brand-checkbox" value="Bose"> Bose</label>
                <label><input type="checkbox" class="brand-checkbox" value="Sennheiser"> Sennheiser</label>
                <label><input type="checkbox" class="brand-checkbox" value="Audio-Technica"> Audio-Technica</label>
                <label><input type="checkbox" class="brand-checkbox" value="JBL"> JBL</label>
                <label><input type="checkbox" class="brand-checkbox" value="Beats"> Beats</label>
                <label><input type="checkbox" class="brand-checkbox" value="Logitech"> Logitech</label>
                <label><input type="checkbox" class="brand-checkbox" value="Razer"> Razer</label>
            </div>
            <div class="sidebar-section type-filter">
                <h4>TYPE</h4>
                <label><input type="checkbox" class="type-checkbox" value="Over-Ear"> Over-Ear</label>
                <label><input type="checkbox" class="type-checkbox" value="On-Ear"> On-Ear</label>
                <label><input type="checkbox" class="type-checkbox" value="In-Ear"> In-Ear</label>
                <label><input type="checkbox" class="type-checkbox" value="Wireless"> Wireless</label>
                <label><input type="checkbox" class="type-checkbox" value="Gaming"> Gaming</label>
            </div>
            <div class="sidebar-section feature-filter">
                <h4>FEATURES</h4>
                <label><input type="checkbox" class="feature-checkbox" value="Noise Cancelling"> Noise Cancelling</label>
                <label><input type="checkbox" class="feature-checkbox" value="Bluetooth"> Bluetooth</label>
                <label><input type="checkbox" class="feature-checkbox" value="Microphone"> Microphone</label>
                <label><input type="checkbox" class="feature-checkbox" value="Water Resistant"> Water Resistant</label>
            </div>
        </aside>
        <!-- Main Content -->
        <main class="main-area">
            <h1 class="page-title">Headphones</h1>
            <div class="banner-text">Premium headphones and headsets for music, gaming, and professional audio needs.</div>
            <div class="results-bar">
                <span class="results-info" id="results-info">Showing 1-20 of 32</span>
                <div class="results-controls">
                    <label>Results Per Page
                        <select class="styled-select" id="results-per-page">
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="20" selected>20</option>
                        </select>
                    </label>
                    <label>Sort By
                        <select class="styled-select" id="sort-by">
                            <option value="low-high">Price Low to High</option>
                            <option value="high-low">Price High to Low</option>
                            <option value="newest">Newest</option>
                        </select>
                    </label>
                </div>
            </div>
            <div class="product-grid" id="product-grid">
                <!-- Product cards will be generated by JS -->
            </div>
            <nav class="pagination-bar" id="pagination-bar">
                <ul class="pagination">
                    <li class="page-item disabled" id="prev-page"><a href="#">&laquo; Prev</a></li>
                    <li class="page-item active"><a href="#">1</a></li>
                    <li class="page-item"><a href="#">2</a></li>
                    <li class="page-item" id="next-page"><a href="#">Next &raquo;</a></li>
                </ul>
            </nav>
        </main>
    </div>
</div>
    <!-- Footer -->
    <div id="footer"></div>
    <script src="js/script.js"></script>
    <script src="js/include.js"></script>
    <script src="js/notifications.js"></script>
    <script>

        const headphonesProducts = [
    {
        title: 'Ronin R-29 Handsfree',
        price: 960,
        priceDisplay: 'Rs. 960',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/r-29-1-afdd65cf-9504-4636-b11f-283456871249-78721-0-170625092356368.png',
        type: 'In-Ear',
        features: ['10mm Sound Driver', 'Glossy Finish', 'High-Definition Sound', '112dB Sensitivity', '20Hz – 20kHz Frequency'],
        brand: 'Ronin'
    },
    {
        title: 'Ronin R-9 Type-C High Elastic Wire Handsfree',
        price: 1050,
        priceDisplay: 'Rs. 1,050',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/r-9handsfreeandroid-78721-0-170625075348957.png',
        type: 'In-Ear',
        features: ['10mm Audio Driver', 'Matte Finish', 'Immersive Bass', '118dB Sensitivity', '20Hz – 20kHz Frequency', '1.2m Cable', '3.5mm AUX'],
        brand: 'Ronin'
    },
    {
        title: 'Ronin R-29 Handsfree Type-C',
        price: 1200,
        priceDisplay: 'Rs. 1,200',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/r-29copy-78721-0-170625124209775.png',
        type: 'In-Ear',
        features: ['High-Definition Sound', '112dB Sensitivity', '20Hz – 20kHz Frequency', '1.2m Cable', 'Type-C'],
        brand: 'Ronin'
    },
    {
        title: 'A4Tech MI 10 Stand Mic',
        price: 1750,
        priceDisplay: 'Rs. 1,750',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/mi-1-78721-2200112-200924054342823.jpg',
        type: 'Mic',
        features: [],
        brand: 'A4Tech'
    },
    {
        title: 'Ronin R-007 Gaming Handsfree',
        price: 2050,
        priceDisplay: 'Rs. 2,050',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/007-78721-0-170625090632044.png',
        type: 'Gaming',
        features: ['8D Surround Sound', '122dB Sensitivity', '20Hz – 20kHz Frequency', '1.2m Cable', '3.5mm AUX / Type-C'],
        brand: 'Ronin'
    },
    {
        title: 'Logitech H111 Headphone',
        price: 2450,
        priceDisplay: 'Rs. 2,450',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/h-111-2-78721-2200162-200924065159533.jpg',
        type: 'On-Ear',
        features: [],
        brand: 'Logitech'
    },
    {
        title: 'Ronin R-970 Free Style Wireless Neckband',
        price: 2500,
        priceDisplay: 'Rs. 2,500',
        stock: 'Out of Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/1111-78721-0-170625011623338.png',
        type: 'Neckband',
        features: ['Deep Bass', '10m Range', 'Device Compatibility'],
        brand: 'Ronin'
    },
    {
        title: 'Logitech H110 Headphone',
        price: 2500,
        priceDisplay: 'Rs. 2,500',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/h110-1-78721-2199791-200924063605676.jpg',
        type: 'On-Ear',
        features: [],
        brand: 'Logitech'
    },
    {
        title: 'A4Tech HU 8 USB Stereo Headset',
        price: 2550,
        priceDisplay: 'Rs. 2,550',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/stereo--1-78721-2200111-200924060529626.jpg',
        type: 'Over-Ear',
        features: ['USB', 'Stereo'],
        brand: 'A4Tech'
    },
    {
        title: 'A4Tech HS 5P Headphone With Stick Mic',
        price: 2600,
        priceDisplay: 'Rs. 2,600',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/hs-5-p1-78721-2199735-180924073418906.jpg',
        type: 'Neckband',
        features: ['Noise Cancelling Mic', 'Hook', '3.5mm'],
        brand: 'A4Tech'
    },
    {
        title: 'A4Tech HS 7P Headphone With Mic',
        price: 2900,
        priceDisplay: 'Rs. 2,900',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/hs-790-1-78721-2199736-180924071356368.jpg',
        type: 'Over-Ear',
        features: ['Noise Cancelling Mic', 'Leather Cushions', '3.5mm Plug'],
        brand: 'A4Tech'
    },
    {
        title: 'A4Tech HU 35 USB Headphone With Mic',
        price: 2900,
        priceDisplay: 'Rs. 2,900',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/hu-35-3-78721-2199738-180924074845394.jpg',
        type: 'Over-Ear',
        features: ['Directional Mic', 'Ear Cushions', 'Adjustable Headband'],
        brand: 'A4Tech'
    },
    {
        title: 'Rapoo H100 Wired Stereo Headset',
        price: 2950,
        priceDisplay: 'Rs. 2,950',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/h-100-1-78721-2199799-200924063727387.jpg',
        type: 'Over-Ear',
        features: ['Stereo', 'Wired'],
        brand: 'Rapoo'
    },
    {
        title: 'A4 Tech HS-50 ComfortFit Stereo HeadSet',
        price: 3000,
        priceDisplay: 'Rs. 3,000',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/23-czone.com.pk-1540-507-160421064723-78721-0-060125081414041.jpg',
        type: 'Over-Ear',
        features: ['Noise Cancelling Mic', 'Earphone Hook', 'Comfort Fit'],
        brand: 'A4Tech'
    },
    {
        title: 'A4Tech HS 30i Headphone With Mic',
        price: 3000,
        priceDisplay: 'Rs. 3,000',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/hs-1-78721-2199734-180924071109667.jpg',
        type: 'Over-Ear',
        features: ['Noise Cancelling Mic', 'Flat Cable', 'Extension Cable'],
        brand: 'A4Tech'
    },
    {
        title: 'Redragon H120 Ares Gaming Headset',
        price: 3200,
        priceDisplay: 'Rs. 3,200',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/h-1201-78721-2199807-200924072502990.jpg',
        type: 'Gaming',
        features: [],
        brand: 'Redragon'
    },
    {
        title: 'A4Tech HU 50 USB Headphone With Mic',
        price: 3300,
        priceDisplay: 'Rs. 3,300',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/uuh-1-78721-2199739-200924055110288.jpg',
        type: 'Over-Ear',
        features: ['USB', 'Mic'],
        brand: 'A4Tech'
    },
    {
        title: 'A4Tech FH300U Neon Illuminate USB Stereo Headset',
        price: 3300,
        priceDisplay: 'Rs. 3,300',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/usb-1-78721-2199732-180924070050135.jpg',
        type: 'Over-Ear',
        features: ['LED', '50mm Speaker', 'Metal Headband', 'Omni Mic'],
        brand: 'A4Tech'
    },
    {
        title: 'A4Tech HU 7P USB Headphone With Mic',
        price: 3300,
        priceDisplay: 'Rs. 3,300',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/hu-7p-2-78721-2200110-200924071427912.jpg',
        type: 'Over-Ear',
        features: ['USB', 'Mic'],
        brand: 'A4Tech'
    },
    {
        title: 'A4Tech FH150U Conference Headset',
        price: 3350,
        priceDisplay: 'Rs. 3,350',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/4-czone.com.pk-1540-17468-101224083317-78721-0-060125080532729.jpg',
        type: 'Over-Ear',
        features: ['DSP Stereo', 'Unidirectional Mic', 'Mic Mute'],
        brand: 'A4Tech'
    }
];

// Use centralized product data from data.js
const products = headphonesProducts;
let productsPerPage = 20;
let currentPage = 1;
let maxPrice = 0;
let filteredProducts = products.slice();
let selectedBrands = [];
let selectedTypes = [];
let selectedFeatures = [];

function filterProducts() {
    filteredProducts = products.filter(p => {
        const priceMatch = p.price >= maxPrice;
        const brandMatch = selectedBrands.length === 0 || selectedBrands.includes(p.brand);
        const typeMatch = selectedTypes.length === 0 || selectedTypes.includes(p.type);
        const featureMatch = selectedFeatures.length === 0 || selectedFeatures.some(f => p.features.includes(f));
        return priceMatch && brandMatch && typeMatch && featureMatch;
    });
}

function renderProducts(page) {
    const grid = document.getElementById('product-grid');
    grid.innerHTML = '';
    const start = (page-1)*productsPerPage;
    const end = Math.min(start+productsPerPage, filteredProducts.length);
    for(let i=start; i<end; i++) {
        const p = filteredProducts[i];
        grid.innerHTML += `
        <div class="product-card" data-id="${i+1}">
            <div class="card-left">
                <img src="${p.img || 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80'}" alt="${p.title}" />
            </div>
            <div class="card-right">
                <div class="heart-icon" onclick="toggleWishlist(${i+1})">&#10084;</div>
                <h2 class="product-title">${p.title}</h2>
                <h4 class="product-category">${p.type.toUpperCase()}</h4>
                <div class="price">${p.priceDisplay}</div>
                <div class="description">
                    Premium ${p.type.toLowerCase()} headphones with ${p.features.join(', ').toLowerCase()} features for exceptional audio experience.
                </div>
                <div class="product-features">
                    ${p.features.map(feature => `<span class="feature-tag">${feature}</span>`).join('')}
                </div>
                <div class="product-meta">
                    <span class="stock in-stock">${p.stock}</span>
                </div>
                <div class="buttons">
                    <button onclick="addToCart(${i+1})">ADD TO CART</button>
                    <button onclick="addToWishlist(${i+1})">WISHLIST</button>
                </div>
            </div>
        </div>`;
    }
    if(filteredProducts.length === 0) {
        grid.innerHTML = '<div style="padding:40px;text-align:center;color:#888;">No products found in this price range.</div>';
    }
    // Update results info
    const info = document.getElementById('results-info');
    if(filteredProducts.length === 0) {
        info.textContent = 'No products found';
    } else {
        info.textContent = `Showing ${filteredProducts.length === 0 ? 0 : start+1}-${end} of ${filteredProducts.length}`;
    }
}

function renderPagination() {
    const bar = document.getElementById('pagination-bar');
    const totalPages = Math.max(1, Math.ceil(filteredProducts.length/productsPerPage));
    let html = '<ul class="pagination">';
    html += `<li class="page-item${currentPage===1?' disabled':''}" id="prev-page"><a href="#">&laquo; Prev</a></li>`;
    for(let i=1; i<=totalPages; i++) {
        html += `<li class="page-item${i===currentPage?' active':''}"><a href="#">${i}</a></li>`;
    }
    html += `<li class="page-item${currentPage===totalPages?' disabled':''}" id="next-page"><a href="#">Next &raquo;</a></li>`;
    html += '</ul>';
    bar.innerHTML = html;
    // Add event listeners
    bar.querySelectorAll('.page-item:not(.active):not(.disabled) a').forEach((a, idx, arr) => {
        a.onclick = function(e) {
            e.preventDefault();
            const text = a.textContent.trim();
            const totalPages = Math.max(1, Math.ceil(filteredProducts.length/productsPerPage));
            if(text === '« Prev') {
                if(currentPage > 1) currentPage--;
            } else if(text === 'Next »') {
                if(currentPage < totalPages) currentPage++;
            } else {
                currentPage = parseInt(text);
            }
            renderProducts(currentPage);
            renderPagination();
        };
    });
}

// Results per page dropdown
const resultsSelect = document.getElementById('results-per-page');
resultsSelect.addEventListener('change', function() {
    productsPerPage = parseInt(this.value);
    currentPage = 1;
    renderProducts(currentPage);
    renderPagination();
});

// Price range slider
const priceSlider = document.getElementById('price-slider');
const selectedPrice = document.getElementById('selected-price');
priceSlider.addEventListener('input', function() {
    selectedPrice.textContent = parseInt(this.value).toLocaleString();
    maxPrice = parseInt(this.value);
    filterProducts();
    currentPage = 1;
    renderProducts(currentPage);
    renderPagination();
});

// Brand filter
const brandCheckboxes = document.querySelectorAll('.brand-checkbox');
brandCheckboxes.forEach(cb => {
    cb.addEventListener('change', function() {
        selectedBrands = Array.from(brandCheckboxes).filter(c => c.checked).map(c => c.value);
        currentPage = 1;
        filterProducts();
        renderProducts(currentPage);
        renderPagination();
    });
});

// Type filter
const typeCheckboxes = document.querySelectorAll('.type-checkbox');
typeCheckboxes.forEach(cb => {
    cb.addEventListener('change', function() {
        selectedTypes = Array.from(typeCheckboxes).filter(c => c.checked).map(c => c.value);
        currentPage = 1;
        filterProducts();
        renderProducts(currentPage);
        renderPagination();
    });
});

// Feature filter
const featureCheckboxes = document.querySelectorAll('.feature-checkbox');
featureCheckboxes.forEach(cb => {
    cb.addEventListener('change', function() {
        selectedFeatures = Array.from(featureCheckboxes).filter(c => c.checked).map(c => c.value);
        currentPage = 1;
        filterProducts();
        renderProducts(currentPage);
        renderPagination();
    });
});

// Sort By dropdown
const sortBySelect = document.getElementById('sort-by');
sortBySelect.addEventListener('change', function() {
    const sortValue = this.value;
    if (sortValue === 'low-high') {
        filteredProducts.sort((a, b) => a.price - b.price);
    } else if (sortValue === 'high-low') {
        filteredProducts.sort((a, b) => b.price - a.price);
    }
    currentPage = 1;
    renderProducts(currentPage);
    renderPagination();
});

// On page load
window.addEventListener('DOMContentLoaded', function() {
    priceSlider.value = 0;
    selectedPrice.textContent = '0';
    maxPrice = 0;
    filterProducts();
    currentPage = 1;
    renderProducts(currentPage);
    renderPagination();
});

document.getElementById('price-go').addEventListener('click', function() {
    maxPrice = parseInt(priceSlider.value);
    filterProducts();
    currentPage = 1;
    renderProducts(currentPage);
    renderPagination();
});

// Cart and Wishlist Functions
function addToCart(productId) {
    const product = headphonesProducts[productId - 1];
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
    const product = headphonesProducts[productId - 1];
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
        cartLink.innerHTML = `<i class="fas fa-shopping-cart"></i>${totalItems > 0 ? ` <span style="background: red; color: white; border-radius: 50%; padding: 2px 6px; font-size: 12px;">${totalItems}</span>` : ''}`;
    }
}

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

// Initialize cart counter
updateCartCounter();
</script>
</body>
</html> 