<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Power Supply | Bawa Computers</title>
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
            <span class="breadcrumb" href="">Home / More / <span class="current">Power Supply</span></span>
        </div>
    </div>
            <div class="container">
                <!-- Main Content Layout -->
                <div class="page-layout-centered page-layout">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="sidebar-section category">
                <h3>POWER SUPPLY</h3>
            </div>
            <div class="sidebar-section price-range">
                <h4>PRICE RANGE</h4>
                <div class="slider-row">
                    <input type="range" min="0" max="80000" value="0" class="price-slider" id="price-slider">
                    <div class="price-values">
                        <span>0</span>
                        <span id="selected-price">0</span>
                        <span style="float:right">80,000</span>
                    </div>
                </div>
                <button class="btn btn-blue" id="price-go">GO</button>
            </div>
            <div class="sidebar-section brand-filter">
                <h4>BRAND</h4>
                <label><input type="checkbox" class="brand-checkbox" value="Corsair"> Corsair</label>
                <label><input type="checkbox" class="brand-checkbox" value="EVGA"> EVGA</label>
                <label><input type="checkbox" class="brand-checkbox" value="Seasonic"> Seasonic</label>
                <label><input type="checkbox" class="brand-checkbox" value="be quiet!"> be quiet!</label>
                <label><input type="checkbox" class="brand-checkbox" value="Cooler Master"> Cooler Master</label>
                <label><input type="checkbox" class="brand-checkbox" value="Thermaltake"> Thermaltake</label>
            </div>
            <div class="sidebar-section wattage-filter">
                <h4>WATTAGE</h4>
                <label><input type="checkbox" class="wattage-checkbox" value="450-550W"> 450-550W</label>
                <label><input type="checkbox" class="wattage-checkbox" value="600-750W"> 600-750W</label>
                <label><input type="checkbox" class="wattage-checkbox" value="800-1000W"> 800-1000W</label>
                <label><input type="checkbox" class="wattage-checkbox" value="1000W+"> 1000W+</label>
            </div>
            <div class="sidebar-section efficiency-filter">
                <h4>EFFICIENCY</h4>
                <label><input type="checkbox" class="efficiency-checkbox" value="80+ Bronze"> 80+ Bronze</label>
                <label><input type="checkbox" class="efficiency-checkbox" value="80+ Silver"> 80+ Silver</label>
                <label><input type="checkbox" class="efficiency-checkbox" value="80+ Gold"> 80+ Gold</label>
                <label><input type="checkbox" class="efficiency-checkbox" value="80+ Platinum"> 80+ Platinum</label>
                <label><input type="checkbox" class="efficiency-checkbox" value="80+ Titanium"> 80+ Titanium</label>
            </div>
        </aside>
        <!-- Main Content -->
        <main class="main-area">
            <h1 class="page-title">Power Supply</h1>
            <div class="banner-text">High-quality power supplies for gaming rigs, workstations, and server builds with excellent efficiency ratings.</div>
            <div class="results-bar">
                <span class="results-info" id="results-info">Showing 1-20 of 28</span>
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
        // Power Supply product data
        const powerSupplyProducts = [
            {
                title: 'EASE EB500 Watt 80 Plus Bronze',
                price: 7500,
        priceDisplay: 'Rs. 7,500',
        stock: 'In Stock',
        wattage: '500W',
        efficiency: '80+ Bronze',
        brand: 'EASE',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/ease-eb500-bronze-psu-price-in-pakistan-2-19643-0-0611240708-78721-0-221124072344428.png'
    },
    {
        title: 'E-Dragon Draco 600W Power Supply',
        price: 9000,
        priceDisplay: 'Rs. 9,000',
        stock: 'In Stock',
        wattage: '600W',
        efficiency: 'N/A',
        brand: 'E-Dragon',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/img-4365-removebg-preview.png-78721-0-010225094304825.png'
    },
    {
        title: 'EASE EB550 Watt 80 Plus Bronze',
        price: 9100,
        priceDisplay: 'Rs. 9,100',
        stock: 'In Stock',
        wattage: '550W',
        efficiency: '80+ Bronze',
        brand: 'EASE',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/eb-550-2-78721-2200978-190924015713641.jpg'
    },
    {
        title: 'EASE EB550 Watt PRO 80 Plus Bronze',
        price: 9500,
        priceDisplay: 'Rs. 9,500',
        stock: 'In Stock',
        wattage: '550W',
        efficiency: '80+ Bronze',
        brand: 'EASE',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/eb-505-1-78721-2200981-190924124435996.jpg'
    },
    {
        title: 'EASE EB650 Watt 80 Plus Bronze',
        price: 11000,
        priceDisplay: 'Rs. 11,000',
        stock: 'In Stock',
        wattage: '650W',
        efficiency: '80+ Bronze',
        brand: 'EASE',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/eb-650-1-78721-2200979-190924015420076.jpg'
    },
    {
        title: 'Thunder Gaming PSU-650 Watt TGS-650 Non-Modular Bronze Series',
        price: 11800,
        priceDisplay: 'Rs. 11,800',
        stock: 'In Stock',
        wattage: '650W',
        efficiency: '80+ Bronze',
        brand: 'Thunder',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/thundeer-1-78721-2201020-190924115204797.jpg'
    },
    {
        title: 'Gamdias Kratos E1-500 500 Watt 80 Plus',
        price: 13000,
        priceDisplay: 'Rs. 13,000',
        stock: 'In Stock',
        wattage: '500W',
        efficiency: '80+',
        brand: 'Gamdias',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/e1-500-1-78721-2200983-190924125250544.jpg'
    },
    {
        title: 'EASE EB650 Watt PRO 80 Plus Bronze',
        price: 13500,
        priceDisplay: 'Rs. 13,500',
        stock: 'In Stock',
        wattage: '650W',
        efficiency: '80+ Bronze',
        brand: 'EASE',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/pro-78721-2200980-190924015543080.jpg'
    },
    {
        title: 'Gamdias Kratos E1-600 600 Watt 80 Plus',
        price: 14000,
        priceDisplay: 'Rs. 14,000',
        stock: 'In Stock',
        wattage: '600W',
        efficiency: '80+',
        brand: 'Gamdias',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/e1-11-78721-2200984-190924124655535.jpg'
    },
    {
        title: 'EASE EB800 Watt 80 Plus Bronze',
        price: 15499,
        priceDisplay: 'Rs. 15,499',
        stock: 'In Stock',
        wattage: '800W',
        efficiency: '80+ Bronze',
        brand: 'EASE',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/ease-eb800-bronze-psu-price-in-pakistan-1-19643-2247609-0611-78721-0-221124072743962.png'
    },
    {
        title: 'Gigabyte P550B 550 Watt 80 Plus',
        price: 16500,
        priceDisplay: 'Rs. 16,500',
        stock: 'In Stock',
        wattage: '550W',
        efficiency: '80+ Bronze',
        brand: 'Gigabyte',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/650-v1-78721-2200989-190924012922250.jpg'
    },
    {
        title: 'Gamdias Kratos M1-600B 600 Watt 80 Plus',
        price: 17500,
        priceDisplay: 'Rs. 17,500',
        stock: 'In Stock',
        wattage: '600W',
        efficiency: '80+ Bronze',
        brand: 'Gamdias',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/m1-78721-2200985-190924010029589.jpg'
    },
    {
        title: 'Corsair CX Series CX550 - 550 Watt 80 PLUS Bronze ATX',
        price: 17990,
        priceDisplay: 'Rs. 17,990',
        stock: 'In Stock',
        wattage: '550W',
        efficiency: '80+ Bronze',
        brand: 'Corsair',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/17-czone.com.pk-1540-15646-190124074121-78721-0-231124073800431.jpg'
    },
    {
        title: 'Thermaltake Smart BX1 650W Bronze',
        price: 18000,
        priceDisplay: 'Rs. 18,000',
        stock: 'In Stock',
        wattage: '650W',
        efficiency: '80+ Bronze',
        brand: 'Thermaltake',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/bx1-2-78721-2201017-190924115802199.jpg'
    },
    {
        title: 'Thunder TGS-750G FULL Modular Gold Series',
        price: 19000,
        priceDisplay: 'Rs. 19,000',
        stock: 'In Stock',
        wattage: '750W',
        efficiency: '80+ Gold',
        brand: 'Thunder',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/750-2-78721-2201018-190924115621904.jpg'
    },
    {
        title: 'Corsair CX Series CX650 – 650 Watt 80 PLUS Bronze ATX',
        price: 20500,
        priceDisplay: 'Rs. 20,500',
        stock: 'In Stock',
        wattage: '650W',
        efficiency: '80+ Bronze',
        brand: 'Corsair',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/cx650-01-78721-0-100325063300947.png'
    },
    {
        title: 'Thermaltake Smart Pro RGB 650W Bronze',
        price: 21000,
        priceDisplay: 'Rs. 21,000',
        stock: 'In Stock',
        wattage: '650W',
        efficiency: '80+ Bronze',
        brand: 'Thermaltake',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/650-12-78721-2201016-190924115935657.jpg'
    },
    {
        title: 'Gigabyte P650G 650 Watt 80 Plus',
        price: 22000,
        priceDisplay: 'Rs. 22,000',
        stock: 'In Stock',
        wattage: '650W',
        efficiency: '80+ Gold',
        brand: 'Gigabyte',
        img:'https://static.webx.pk/files/78721/Images/Thumbnails-Large/2000-2-78721-0-201124010020947.png'
},
{
title: 'Gamdias Kratos M1-750B 750 Watt 80 Plus',
price: 22000,
priceDisplay: 'Rs. 22,000',
stock: 'In Stock',
wattage: '750W',
efficiency: '80+ Bronze',
brand: 'Gamdias',
img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/750-111-78721-2200987-190924124855822.jpg'
},
{
title: 'Corsair CX Series CX750 – 750 Watt 80 PLUS Bronze ATX',
price: 22500,
priceDisplay: 'Rs. 22,500',
stock: 'In Stock',
wattage: '750W',
efficiency: '80+ Bronze',
brand: 'Corsair',
img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/33-czone.com.pk-1540-17607-100125113036-78721-0-100325063712733.jpg'
}
];

let productsPerPage = 20;
let currentPage = 1;
let maxPrice = 0;
let filteredProducts = powerSupplyProducts.slice();
let selectedBrands = [];
let selectedWattages = [];
let selectedEfficiencies = [];

function filterProducts() {
    filteredProducts = powerSupplyProducts.filter(p => {
        const priceMatch = p.price >= maxPrice;
        const brandMatch = selectedBrands.length === 0 || selectedBrands.includes(p.brand);
        const wattageMatch = selectedWattages.length === 0 || selectedWattages.includes(p.wattage);
        const efficiencyMatch = selectedEfficiencies.length === 0 || selectedEfficiencies.includes(p.efficiency);
        return priceMatch && brandMatch && wattageMatch && efficiencyMatch;
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
                <img src="${p.img || 'https://images.unsplash.com/photo-1593640408182-31c70c8268f5?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80'}" alt="${p.title}" />
            </div>
            <div class="card-right">
                <div class="heart-icon" onclick="toggleWishlist(${i+1})">&#10084;</div>
                <h2 class="product-title">${p.title}</h2>
                <h4 class="product-category">POWER SUPPLY</h4>
                <div class="price">${p.priceDisplay}</div>
                <div class="description">
                    High-quality ${p.wattage} power supply with ${p.efficiency} efficiency for reliable and stable power delivery.
                </div>
                <div class="product-features">
                    <span class="feature-tag">${p.wattage}</span>
                    <span class="feature-tag">${p.efficiency}</span>
                    <span class="feature-tag">${p.brand}</span>
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

// Wattage filter
const wattageCheckboxes = document.querySelectorAll('.wattage-checkbox');
wattageCheckboxes.forEach(cb => {
    cb.addEventListener('change', function() {
        selectedWattages = Array.from(wattageCheckboxes).filter(c => c.checked).map(c => c.value);
        currentPage = 1;
        filterProducts();
        renderProducts(currentPage);
        renderPagination();
    });
});

// Efficiency filter
const efficiencyCheckboxes = document.querySelectorAll('.efficiency-checkbox');
efficiencyCheckboxes.forEach(cb => {
    cb.addEventListener('change', function() {
        selectedEfficiencies = Array.from(efficiencyCheckboxes).filter(c => c.checked).map(c => c.value);
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
    const product = powerSupplyProducts[productId - 1];
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
    const product = powerSupplyProducts[productId - 1];
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