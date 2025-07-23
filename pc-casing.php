<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PC Casing | Bawa Computers</title>
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
            <span class="breadcrumb" href="">Home / More / <span class="current">PC Casing</span></span>
        </div>
    </div>
            <div class="container">
                <!-- Main Content Layout -->
                <div class="page-layout-centered page-layout">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="sidebar-section category">
                <h3>PC CASING</h3>
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
                <label><input type="checkbox" class="brand-checkbox" value="NZXT"> NZXT</label>
                <label><input type="checkbox" class="brand-checkbox" value="Corsair"> Corsair</label>
                <label><input type="checkbox" class="brand-checkbox" value="Phanteks"> Phanteks</label>
                <label><input type="checkbox" class="brand-checkbox" value="Fractal Design"> Fractal Design</label>
                <label><input type="checkbox" class="brand-checkbox" value="Lian Li"> Lian Li</label>
                <label><input type="checkbox" class="brand-checkbox" value="Cooler Master"> Cooler Master</label>
            </div>
            <div class="sidebar-section size-filter">
                <h4>CASE SIZE</h4>
                <label><input type="checkbox" class="size-checkbox" value="Mini ITX"> Mini ITX</label>
                <label><input type="checkbox" class="size-checkbox" value="Micro ATX"> Micro ATX</label>
                <label><input type="checkbox" class="size-checkbox" value="ATX"> ATX</label>
                <label><input type="checkbox" class="size-checkbox" value="E-ATX"> E-ATX</label>
            </div>
            <div class="sidebar-section type-filter">
                <h4>CASE TYPE</h4>
                <label><input type="checkbox" class="type-checkbox" value="Gaming"> Gaming</label>
                <label><input type="checkbox" class="type-checkbox" value="Professional"> Professional</label>
                <label><input type="checkbox" class="type-checkbox" value="Compact"> Compact</label>
                <label><input type="checkbox" class="type-checkbox" value="Full Tower"> Full Tower</label>
            </div>
        </aside>
        <!-- Main Content -->
        <main class="main-area">
            <h1 class="page-title">PC Casing</h1>
            <div class="banner-text">Premium PC cases for gaming, workstation, and custom builds with excellent airflow and cable management.</div>
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
        // PC Casing product data
        const pcCasingProducts = [
            {
                title: 'EASE EM123B Case',
                price: 6100,
                priceDisplay: 'Rs. 6,100',
                stock: 'In Stock',
                img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/ease-em123b-pi-2-300x270-78721-2200947-200924064543979.png',
                size: 'Micro-ATX',
                type: 'Standard',
                brand: 'EASE',
                features: [
                    'Without Fans Pre-installed',
                    'CPU Cooler Height: 160mm',
            'VGA Length: 255mm'
        ]
    },
    {
        title: 'E-DRAGON Casing Cadmus EDG-1017',
        price: 7000,
        priceDisplay: 'Rs. 7,000',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/images-14-78721-2201009-190924010912447.jpg',
        size: 'ATX',
        type: 'Gaming',
        brand: 'E-DRAGON',
        features: [
            'Sleek black design | Tempered glass panel',
            'Supports liquid cooling',
            'Spacious interior | Efficient airflow',
            'Convenient cable management | Front I/O access'
        ]
    },
    {
        title: 'Thunder TGC-144 Archer Casing',
        price: 9200,
        priceDisplay: 'Rs. 9,200',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/thunder-archer-tgc-144-casing-pakistan-78721-2201003-190924010305467.jpeg',
        size: 'ATX',
        type: 'Gaming',
        brand: 'Thunder',
        features: [
            'Supports RGB Strip in front',
            'Tempered-glass side panel',
            'Supports ATX, Micro-ATX, ITX'
        ]
    },
    {
        title: 'Thunder Casing Phoenix TGC-567',
        price: 9200,
        priceDisplay: 'Rs. 9,200',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/4-3-600x600-821-0-270323113114152-78721-2201002-190924010111551.jpg',
        size: 'ATX',
        type: 'Gaming',
        brand: 'Thunder',
        features: [
            'Integrated ARGB lighting',
            'Striking design',
            'Spacious interior for full ATX motherboards'
        ]
    },
    {
        title: 'Thunder T9 Casing Office Mate with PSU',
        price: 10000,
        priceDisplay: 'Rs. 10,000',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/images-13-78721-2201005-190924010520094.jpg',
        size: 'ATX',
        type: 'Office',
        brand: 'Thunder',
        features: [
            'Efficient PSU included',
            'Advanced cooling system',
            'Optimized cable management'
        ]
    },
    {
        title: 'Thunder TGC-A99 Signature Mid Tower Case',
        price: 10000,
        priceDisplay: 'Rs. 10,000',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/thunder-tgc-a99-case-galaxy.pk--78721-2201001-190924125932903.png',
        size: 'Mid Tower',
        type: 'Gaming',
        brand: 'Thunder',
        features: [
            'TGC-AC 99 Front Panel with LED strip',
            'Supports ATX, M-ATX, ITX',
            'Standard ATX PS2 PSU'
        ]
    },
    {
        title: 'Thunder Casing Triumph TGC-414 (Black)',
        price: 10500,
        priceDisplay: 'Rs. 10,500',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/414-1-78721-2201010-190924011029131.jpg',
        size: 'ATX',
        type: 'Gaming',
        brand: 'Thunder',
        features: [
            'Minimalist aesthetic',
            'Tempered glass side panel',
            'Enhanced airflow'
        ]
    },
    {
        title: 'Thunder TGC-A-27W Specs-09 Casing',
        price: 11000,
        priceDisplay: 'Rs. 11,000',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/3-11.jpg-78721-2200942-200924065032778.png',
        size: 'ATX',
        type: 'Gaming',
        brand: 'Thunder',
        features: [
            'Performance-Driven Design',
            'Modern aesthetics',
            'Flexible configuration'
        ]
    },
    {
        title: 'EASE EOC300W Case with Power Supply',
        price: 12000,
        priceDisplay: 'Rs. 12,000',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/1-min-1-78721-2200943-200924063859515.jpg',
        size: 'ATX',
        type: 'Standard',
        brand: 'EASE',
        features: [
            '300W PSU included',
            '20+4 Pins, 1x P8, 1x P6',
            '4x SATA, 2x IDE'
        ]
    },
    {
        title: 'EASE EOC250W Case with PSU',
        price: 12000,
        priceDisplay: 'Rs. 12,000',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/2-13.jpg-78721-2200940-200924063611271.png',
        size: 'ATX',
        type: 'Standard',
        brand: 'EASE',
        features: [
            '250W PSU included',
            '90mm Fan Pre-installed',
            '20+4 pins 300mm | 1.2m Power Cord'
        ]
    },
    {
        title: 'Thunder Black Fox TGC-747 ARGB MicroATX Gaming Case',
        price: 13000,
        priceDisplay: 'Rs. 13,000',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/thunder-black-fox-tgc-747-casing-price-in-pakistan-2-19643-0-78721-0-280924105424838.jpg',
        size: 'Micro-ATX',
        type: 'Gaming',
        brand: 'Thunder',
        features: [
            '3x ARGB Fans',
            'Tempered Glass Front & Side',
            'Max VGA: 340mm | Cooler: 160mm'
        ]
    },
    {
        title: 'EASE EC141B Tempered Glass ATX Gaming Case',
        price: 13000,
        priceDisplay: 'Rs. 13,000',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/ease-ec141b-pi-1-78721-2200941-200924063739645.jpg',
        size: 'ATX',
        type: 'Gaming',
        brand: 'EASE',
        features: [
            '1x Non-RGB Fan Pre-installed',
            'Up to 360mm Radiator',
            'GPU Clearance: 380mm'
        ]
    },
    {
        title: 'EASE EC123B Tempered Glass Gaming Case',
        price: 13500,
        priceDisplay: 'Rs. 13,500',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/ease-ec123b-pi-1-3-78721-2200946-200924064431373.png',
        size: 'Micro-ATX',
        type: 'Gaming',
        brand: 'EASE',
        features: [
            '3x ARGB Fans',
            'CPU Cooler Height: 165mm',
            'VGA Length: 400mm'
        ]
    },
    {
        title: 'Gamdias Athena E1 Elite ATX Micro Tower Gaming Case',
        price: 15000,
        priceDisplay: 'Rs. 15,000',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/gamdias-athena-e1-elite-atx-micro-tower-gaming-case-price-in-78721-2200957-190924020841990.png',
        size: 'ATX/Micro-ATX',
        type: 'Gaming',
        brand: 'Gamdias',
        features: [
            '1x ARGB + 1x Black Fan',
            'Mesh Front Panel',
            'Sync with 5V ARGB MB'
        ]
    },
    {
        title: 'Thunder TGC-900 Crush Casing',
        price: 15500,
        priceDisplay: 'Rs. 15,500',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/4-3-600x600-821-0-280323091704906-78721-2201008-190924010758977.jpg',
        size: 'ATX',
        type: 'Gaming',
        brand: 'Thunder',
        features: [
            'Tempered glass side panel',
            'Supports multiple cooling options',
            'Ample storage & airflow'
        ]
    },
    {
        title: 'Cooler Master CM CMP 320 Mini Tower Case',
        price: 17000,
        priceDisplay: 'Rs. 17,000',
        stock: 'On Order Only',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/cooler-master-cmp-320-casing-price-in-pakistan-2-19643-20993-78721-2200931-200924071450061.jpg',
        size: 'Mini Tower',
        type: 'Gaming',
        brand: 'Cooler Master',
        features: [
            '2x 120mm ARGB Fans',
            'Mesh Geode Front Panel',
            'PSU Cover & Full Black Coating'
        ]
    },
    {
        title: 'EASE EC144B Tempered Glass ATX Gaming Case',
        price: 17500,
        priceDisplay: 'Rs. 17,500',
        stock: 'In Stock',
        img: '',
        size: 'ATX',
        type: 'Gaming',
        brand: 'EASE',
        features: [
            '4x ARGB Fans',
            'Up to 360mm Radiator',
            'ABS Plastic + Metal Mesh'
        ]
    },
    {
        title: 'Thunder Scar Gaming Case',
        price: 17500,
        priceDisplay: 'Rs. 17,500',
        stock: 'In Stock',
        img: '',
        size: 'ATX',
        type: 'Gaming',
        brand: 'Thunder',
        features: [
            'Front mesh for airflow',
            'Smoked tempered-glass side panel',
            'Optimized for cooling'
        ]
    },
    {
        title: 'Gamdias Mars M2 M-ATX Micro Tower Gaming Case',
        price: 17500,
        priceDisplay: 'Rs. 17,500',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/gamdias-mars-m2-m-atx-micro-tower-gaming-case-1-argb-fan-78721-2200956-190924020950083.jpg',
        size: 'Micro-ATX',
        type: 'Gaming',
        brand: 'Gamdias',
        features: [
            'Modern metal design',
            '120mm ARGB Trio Rings Fan',
            '5V ARGB Sync & Side Panel I/O'
        ]
    },
    {
        title: 'Corsair 480T Airflow Tempered Glass Mid-Tower Case, Black',
        price: 18000,
        priceDisplay: 'Rs. 18,000',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/480t-01-78721-2200939-200924063456233.png',
        size: 'Mid Tower',
        type: 'Gaming',
        brand: 'Corsair',
        features: [
            'High Airflow Front Panel',
            'Tool-Free Side Panel',
            'Supports up to 360mm Radiator'
        ]
    }
];


let productsPerPage = 20;
let currentPage = 1;
let maxPrice = 0;
let filteredProducts = pcCasingProducts.slice();
let selectedBrands = [];
let selectedSizes = [];
let selectedTypes = [];

function filterProducts() {
    filteredProducts = pcCasingProducts.filter(p => {
        const priceMatch = p.price >= maxPrice;
        const brandMatch = selectedBrands.length === 0 || selectedBrands.includes(p.brand);
        const sizeMatch = selectedSizes.length === 0 || selectedSizes.includes(p.size);
        const typeMatch = selectedTypes.length === 0 || selectedTypes.includes(p.type);
        return priceMatch && brandMatch && sizeMatch && typeMatch;
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
                <h4 class="product-category">PC CASING</h4>
                <div class="price">${p.priceDisplay}</div>
                <div class="description">
                    High-quality ${p.type.toLowerCase()} PC case with ${p.size} size for optimal airflow and component compatibility.
                </div>
                <div class="product-features">
                    <span class="feature-tag">${p.size}</span>
                    <span class="feature-tag">${p.type}</span>
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

// Size filter
const sizeCheckboxes = document.querySelectorAll('.size-checkbox');
sizeCheckboxes.forEach(cb => {
    cb.addEventListener('change', function() {
        selectedSizes = Array.from(sizeCheckboxes).filter(c => c.checked).map(c => c.value);
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
    const product = pcCasingProducts[productId - 1];
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
    const product = pcCasingProducts[productId - 1];
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