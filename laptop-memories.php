<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laptop Memories | Bawa Computers</title>
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
            <span class="breadcrumb" href="">Home / More / <span class="current">Laptop Memories</span></span>
        </div>
    </div>
            <div class="container">
                <!-- Main Content Layout -->
                <div class="page-layout-centered page-layout">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="sidebar-section category">
                <h3>LAPTOP MEMORIES</h3>
            </div>
            <div class="sidebar-section price-range">
                <h4>PRICE RANGE</h4>
                <div class="slider-row">
                    <input type="range" min="0" max="25000" value="0" class="price-slider" id="price-slider">
                    <div class="price-values">
                        <span>0</span>
                        <span id="selected-price">0</span>
                        <span style="float:right">25,000</span>
                    </div>
                </div>
                <button class="btn btn-blue" id="price-go">GO</button>
            </div>
            <div class="sidebar-section brand-filter">
                <h4>BRAND</h4>
                <label><input type="checkbox" class="brand-checkbox" value="Kingston"> Kingston</label>
                <label><input type="checkbox" class="brand-checkbox" value="Crucial"> Crucial</label>
                <label><input type="checkbox" class="brand-checkbox" value="Corsair"> Corsair</label>
                <label><input type="checkbox" class="brand-checkbox" value="Samsung"> Samsung</label>
                <label><input type="checkbox" class="brand-checkbox" value="G.Skill"> G.Skill</label>
                <label><input type="checkbox" class="brand-checkbox" value="Team Group"> Team Group</label>
            </div>
            <div class="sidebar-section capacity-filter">
                <h4>CAPACITY</h4>
                <label><input type="checkbox" class="capacity-checkbox" value="4GB"> 4GB</label>
                <label><input type="checkbox" class="capacity-checkbox" value="8GB"> 8GB</label>
                <label><input type="checkbox" class="capacity-checkbox" value="16GB"> 16GB</label>
                <label><input type="checkbox" class="capacity-checkbox" value="32GB"> 32GB</label>
            </div>
            <div class="sidebar-section speed-filter">
                <h4>SPEED</h4>
                <label><input type="checkbox" class="speed-checkbox" value="DDR3"> DDR3</label>
                <label><input type="checkbox" class="speed-checkbox" value="DDR4"> DDR4</label>
                <label><input type="checkbox" class="speed-checkbox" value="DDR5"> DDR5</label>
            </div>
        </aside>
        <!-- Main Content -->
        <main class="main-area">
            <h1 class="page-title">Laptop Memories</h1>
            <div class="banner-text">High-performance laptop RAM modules for faster computing and better multitasking.</div>
            <div class="results-bar">
                <span class="results-info" id="results-info">Showing 1-20 of 30</span>
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
        // Laptop Memories product data
        const laptopMemoryProducts = [
            {
                title: 'Kingston 8GB DDR4 2666MHz',
                price: 5500,
                priceDisplay: 'Rs. 5,500',
                stock: 'In Stock',
                img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/13-czone.com.pk-1540-7356-160923081653-78721-0-100425013012493.jpg',
                capacity: '8GB',
                speed: '2666MHz DDR4',
                brand: 'Kingston',
                features: [
                    'Memory speeds up to 2666MHz',
                    'Build your own PC',
                    'Improve Performance'
        ]
    },
    {
        title: 'Kingston DDR4 8GB 3200Bus',
        price: 5800,
        priceDisplay: 'Rs. 5,800',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/1-czone.com.pk-1540-14957-030823095902-78721-0-100425012315033.jpg',
        capacity: '8GB',
        speed: '3200MT/s (PC4-25600)',
        brand: 'Kingston',
        features: [
            'CAS Latency: CL22',
            'Module Type: SODIMM',
            'Error Check: Non-ECC'
        ]
    },
    {
        title: 'Lexar DDR4 8GB 3200Bus SOD',
        price: 5800,
        priceDisplay: 'Rs. 5,800',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/lexar-ddr4-8gb-3200bus-sod-galaxy.pk--78721-2200830-160924111142256.png',
        capacity: '8GB',
        speed: '3200MHz DDR4',
        brand: 'Lexar',
        features: [
            'Powerful. Colorful. Optimal.',
            'Speed up your gameplay with quicker response time',
            'Sync and customize your RGB lighting effects',
            'Supports XMP 2.0'
        ]
    },
    {
        title: 'Kingston 16GB DDR4 3200MT/s',
        price: 9500,
        priceDisplay: 'Rs. 9,500',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/13-czone.com.pk-1540-7356-160923081653-78721-0-100425013500661.jpg',
        capacity: '16GB',
        speed: '3200MT/s DDR4',
        brand: 'Kingston',
        features: [
            'Memory Technology: DDR4 RAM'
        ]
    },
    {
        title: 'Lexar DDR4 16GB 3200Bus SOD',
        price: 9500,
        priceDisplay: 'Rs. 9,500',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/lexar-ddr4-8gb-3200bus-sod-galaxy.pk--78721-2200831-160924111317638.png',
        capacity: '16GB',
        speed: '3200MHz DDR4',
        brand: 'Lexar',
        features: [
            'Improve your computer’s performance',
            'High speed DDR4 memory',
            'Easy to install',
            'Lifetime limited warranty'
        ]
    },
    {
        title: 'Lexar DDR5 16GB 5600MHz SOD',
        price: 14000,
        priceDisplay: 'Rs. 14,000',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/1-1540-17196-311024084533-78721-0-200125012145576.jpg',
        capacity: '16GB',
        speed: '5600MHz DDR5',
        brand: 'Lexar',
        features: [
            'SO-DIMM',
            '1.1 Volts'
        ]
    },
    {
        title: 'Kingston 16GB DDR5 5600MT/s',
        price: 14000,
        priceDisplay: 'Rs. 14,000',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/28-czone.com.pk-1540-17339-181124115242-78721-0-100425013805964.jpg',
        capacity: '16GB',
        speed: '5600MT/s DDR5',
        brand: 'Kingston'
    },
    {
        title: 'Lexar DDR4 32GB 3200Bus SOD',
        price: 17000,
        priceDisplay: 'Rs. 17,000',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/lexar-ddr4-8gb-3200bus-sod-galaxy.pk--78721-2200832-160924111742859.png',
        capacity: '32GB',
        speed: '3200MHz DDR4',
        brand: 'Lexar',
        features: [
            'High-speed performance',
            'Multitask with ease',
            'Simple Install',
            '1.2V'
        ]
    },
    {
        title: 'APACER DDR5 32GB 5600Bus SOD',
        price: 22500,
        priceDisplay: 'Rs. 22,500',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/ddr5-sodimm2-78721-0-090725105616858.webp',
        capacity: '32GB',
        speed: '5600MHz DDR5',
        brand: 'APACER',
        features: [
            'Uses original high-quality next-generation DDR5 DRAM ICs',
            'Equipped with power management IC (PMIC) (5V)',
            'On-die ECC error correction mechanism improves reliability'
        ]
    }
];


let productsPerPage = 20;
let currentPage = 1;
let maxPrice = 0;
let filteredProducts = laptopMemoryProducts.slice();
let selectedBrands = [];
let selectedCapacities = [];
let selectedSpeeds = [];

function filterProducts() {
    filteredProducts = laptopMemoryProducts.filter(p => {
        const priceMatch = p.price >= maxPrice;
        const brandMatch = selectedBrands.length === 0 || selectedBrands.includes(p.brand);
        const capacityMatch = selectedCapacities.length === 0 || selectedCapacities.includes(p.capacity);
        const speedMatch = selectedSpeeds.length === 0 || selectedSpeeds.includes(p.speed);
        return priceMatch && brandMatch && capacityMatch && speedMatch;
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
                <h4 class="product-category">LAPTOP MEMORY</h4>
                <div class="price">${p.priceDisplay}</div>
                <div class="description">
                    High-performance ${p.capacity} laptop memory with ${p.speed} speed for enhanced system performance and multitasking.
                </div>
                <div class="product-features">
                    <span class="feature-tag">${p.capacity}</span>
                    <span class="feature-tag">${p.speed}</span>
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

// Capacity filter
const capacityCheckboxes = document.querySelectorAll('.capacity-checkbox');
capacityCheckboxes.forEach(cb => {
    cb.addEventListener('change', function() {
        selectedCapacities = Array.from(capacityCheckboxes).filter(c => c.checked).map(c => c.value);
        currentPage = 1;
        filterProducts();
        renderProducts(currentPage);
        renderPagination();
    });
});

// Speed filter
const speedCheckboxes = document.querySelectorAll('.speed-checkbox');
speedCheckboxes.forEach(cb => {
    cb.addEventListener('change', function() {
        selectedSpeeds = Array.from(speedCheckboxes).filter(c => c.checked).map(c => c.value);
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
    const product = laptopMemoryProducts[productId - 1];
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
    const product = laptopMemoryProducts[productId - 1];
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