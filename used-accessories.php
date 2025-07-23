<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Used Accessories | Bawa Computers</title>
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
            <span class="breadcrumb" href="">Home / Used / <span class="current">Accessories</span></span>
        </div>
    </div>
    <!-- Container -->
    <div class="container">
        
    <!-- Main Content Layout -->
    <div class="page-layout-centered page-layout">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="sidebar-section category">
                <h3>USED ACCESSORIES</h3>
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
                <label><input type="checkbox" class="brand-checkbox" value="Logitech"> Logitech</label>
                <label><input type="checkbox" class="brand-checkbox" value="Razer"> Razer</label>
                <label><input type="checkbox" class="brand-checkbox" value="SteelSeries"> SteelSeries</label>
                <label><input type="checkbox" class="brand-checkbox" value="Corsair"> Corsair</label>
                <label><input type="checkbox" class="brand-checkbox" value="Samsung"> Samsung</label>
                <label><input type="checkbox" class="brand-checkbox" value="LG"> LG</label>
            </div>
            <div class="sidebar-section condition-filter">
                <h4>CONDITION</h4>
                <label><input type="checkbox" class="condition-checkbox" value="Excellent"> Excellent</label>
                <label><input type="checkbox" class="condition-checkbox" value="Good"> Good</label>
                <label><input type="checkbox" class="condition-checkbox" value="Fair"> Fair</label>
                <label><input type="checkbox" class="condition-checkbox" value="Refurbished"> Refurbished</label>
            </div>
            <div class="sidebar-section category-filter">
                <h4>CATEGORY</h4>
                <label><input type="checkbox" class="category-checkbox" value="Mouse"> Mouse</label>
                <label><input type="checkbox" class="category-checkbox" value="Keyboard"> Keyboard</label>
                <label><input type="checkbox" class="category-checkbox" value="Headphones"> Headphones</label>
                <label><input type="checkbox" class="category-checkbox" value="Monitor"> Monitor</label>
                <label><input type="checkbox" class="category-checkbox" value="Webcam"> Webcam</label>
                <label><input type="checkbox" class="category-checkbox" value="Speakers"> Speakers</label>
            </div>
        </aside>
        <!-- Main Content -->
        <main class="main-area">
            <h1 class="page-title">Used Accessories</h1>
            <div class="banner-text">Quality pre-owned computer accessories at affordable prices. All tested and guaranteed.</div>
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
    <!-- End of Main Content Layout -->
    <!-- Footer -->
    <div id="footer"></div>
    <script src="js/script.js"></script>
    <script src="js/include.js"></script>
    <script src="js/notifications.js"></script>
    <script>
// Used Accessories product data
const usedAccessoriesProducts = [
    {
        title: "Used Mouse",
        price: 500,
        priceDisplay: "Rs. 500",
        stock: "In Stock",
        img: "https://static.webx.pk/files/78721/Images/Thumbnails-Large/used-mouse-78721-2198453-140924115210166.jpg",
        type: "Accessory",
        brand: "Generic",
        condition: "Good",
        category: "Peripheral"
    },
    {
        title: "Used 160GB HDD SATA",
        price: 750,
        priceDisplay: "Rs. 750",
        stock: "In Stock",
        img: "https://static.webx.pk/files/78721/Images/Thumbnails-Large/used-160gb-hdd-sata-price-in-pakistan-galaxy--1-78721-2198455-140924115409177.png",
        type: "Accessory",
        brand: "Generic",
        condition: "Good",
        category: "Peripheral"
    },
    {
        title: "Used 2GB DDR3 SOD",
        price: 800,
        priceDisplay: "Rs. 800",
        stock: "In Stock",
        img: "https://static.webx.pk/files/78721/Images/Thumbnails-Large/used-2gb-ddr3-sod-price-in-pakistan-galaxy-1-78721-2198458-140924115701795.jpg",
        type: "Accessory",
        brand: "Generic",
        condition: "Good",
        category: "Peripheral"
    },
    {
        title: "Used 2GB DDR3",
        price: 800,
        priceDisplay: "Rs. 800",
        stock: "In Stock",
        img: "https://static.webx.pk/files/78721/Images/Thumbnails-Large/used-2gb-ddr3-price-in-pakistan-galaxy-1-1-78721-2198456-140924115522891.png",
        type: "Accessory",
        brand: "Generic",
        condition: "Good",
        category: "Peripheral"
    },
    {
        title: "Used Keyboard",
        price: 1000,
        priceDisplay: "Rs. 1,000",
        stock: "In Stock",
        img: "https://static.webx.pk/files/78721/Images/Thumbnails-Large/used-keyboard-78721-2198454-140924115310415.jpg",
        type: "Accessory",
        brand: "Generic",
        condition: "Good",
        category: "Peripheral"
    },
    {
        title: "Used 4GB DDR3",
        price: 1500,
        priceDisplay: "Rs. 1,500",
        stock: "In Stock",
        img: "https://static.webx.pk/files/78721/Images/Thumbnails-Large/used-4gb-ddr3-price-in-pakistan-galaxy-1-78721-2198461-140924120047668.png",
        type: "Accessory",
        brand: "Generic",
        condition: "Good",
        category: "Peripheral"
    },
    {
        title: "Used 250GB HDD 2.5",
        price: 1600,
        priceDisplay: "Rs. 1,600",
        stock: "In Stock",
        img: "https://static.webx.pk/files/78721/Images/Thumbnails-Large/used-250gb-hdd-2.5-price-in-pakistan-galaxy--1-78721-2198459-140924115825703.png",
        type: "Accessory",
        brand: "Generic",
        condition: "Good",
        category: "Peripheral"
    },
    {
        title: "Used 500GB HDD SATA",
        price: 2200,
        priceDisplay: "Rs. 2,200",
        stock: "In Stock",
        img: "https://static.webx.pk/files/78721/Images/Thumbnails-Large/used-500gb-hdd-sata-price-in-pakistan-galaxy--1-78721-2198460-140924115927665.png",
        type: "Accessory",
        brand: "Generic",
        condition: "Good",
        category: "Peripheral"
    },
    {
        title: "Used 4GB DDR4",
        price: 2400,
        priceDisplay: "Rs. 2,400",
        stock: "In Stock",
        img: "https://static.webx.pk/files/78721/Images/Thumbnails-Large/used-4gb-ddr4-price-in-pakistan-galaxy-1-78721-2198462-140924120151544.jpg",
        type: "Accessory",
        brand: "Generic",
        condition: "Good",
        category: "Peripheral"
    },
    {
        title: "Used 500GB HDD 2.5",
        price: 3000,
        priceDisplay: "Rs. 3,000",
        stock: "In Stock",
        img: "https://static.webx.pk/files/78721/Images/Thumbnails-Large/used-500gb-hdd-price-in-pakistan-galaxy-3-78721-2198463-140924120240122.png",
        type: "Accessory",
        brand: "Generic",
        condition: "Good",
        category: "Peripheral"
    },
    {
        title: "Used 8GB DDR3 SOD",
        price: 4000,
        priceDisplay: "Rs. 4,000",
        stock: "In Stock",
        img: "https://static.webx.pk/files/78721/Images/Thumbnails-Large/used-8gb-ddr3-sod-price-in-pakistan-galaxy-1-78721-2198464-140924120320803.jpg",
        type: "Accessory",
        brand: "Generic",
        condition: "Good",
        category: "Peripheral"
    },
    {
        title: "Pullout Laptop 1TB Hard Drive",
        price: 6000,
        priceDisplay: "Rs. 6,000",
        stock: "In Stock",
        img: "https://static.webx.pk/files/78721/Images/Thumbnails-Large/laptophdd-78721-2198467-140924123503692.jpg",
        type: "Accessory",
        brand: "Generic",
        condition: "Good",
        category: "Peripheral"
    },
    {
        title: "Used 16GB DDR4",
        price: 8000,
        priceDisplay: "Rs. 8,000",
        stock: "In Stock",
        img: "https://static.webx.pk/files/78721/Images/Thumbnails-Large/used-16gb-ddr4-price-in-pakistan-galaxy-1-1-78721-2198466-140924123355206.jpg",
        type: "Accessory",
        brand: "Generic",
        condition: "Good",
        category: "Peripheral"
    }
];

let productsPerPage = 20;
let currentPage = 1;
let maxPrice = 0;
let filteredProducts = usedAccessoriesProducts.slice();
let selectedBrands = [];
let selectedConditions = [];
let selectedCategories = [];

function filterProducts() {
    filteredProducts = usedAccessoriesProducts.filter(p => {
        const priceMatch = p.price >= maxPrice;
        const brandMatch = selectedBrands.length === 0 || selectedBrands.includes(p.brand);
        const conditionMatch = selectedConditions.length === 0 || selectedConditions.includes(p.condition);
        const categoryMatch = selectedCategories.length === 0 || selectedCategories.includes(p.category);
        return priceMatch && brandMatch && conditionMatch && categoryMatch;
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
                <h4 class="product-category">USED ACCESSORY</h4>
                <div class="price">${p.priceDisplay}</div>
                <div class="description">
                    Quality ${p.condition.toLowerCase()} used accessory in ${p.category.toLowerCase()} category with excellent functionality.
                </div>
                <div class="product-features">
                    <span class="feature-tag">${p.brand}</span>
                    <span class="feature-tag">${p.condition}</span>
                    <span class="feature-tag">${p.category}</span>
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

// Condition filter
const conditionCheckboxes = document.querySelectorAll('.condition-checkbox');
conditionCheckboxes.forEach(cb => {
    cb.addEventListener('change', function() {
        selectedConditions = Array.from(conditionCheckboxes).filter(c => c.checked).map(c => c.value);
        currentPage = 1;
        filterProducts();
        renderProducts(currentPage);
        renderPagination();
    });
});

// Category filter
const categoryCheckboxes = document.querySelectorAll('.category-checkbox');
categoryCheckboxes.forEach(cb => {
    cb.addEventListener('change', function() {
        selectedCategories = Array.from(categoryCheckboxes).filter(c => c.checked).map(c => c.value);
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
    const product = usedAccessoriesProducts[productId - 1];
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
    const product = usedAccessoriesProducts[productId - 1];
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