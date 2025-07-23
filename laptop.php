<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laptops | Bawa Computers</title>
    <!-- Google Fonts: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" type="image/png" href="images/favicon.jpg">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/new-cards.css">
    <style>
        /* Notification styling */
       
/* Notification Messages */
.notification {
    position: fixed;
    top: 20px;
    right: 20px;
    background: #4CAF50;
    color: white;
    padding: 15px 20px;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    z-index: 10000;
    transform: translateX(400px);
    transition: transform 0.3s ease;
    max-width: 300px;
    font-weight: 500;
    display: flex;
    align-items: center;
    gap: 10px;
}

.notification.show {
    transform: translateX(0);
}

.notification.success {
    background: #4CAF50;
    border-left: 4px solid #45a049;
}

.notification.error {
    background: #f44336;
    border-left: 4px solid #d32f2f;
}

.notification.info {
    background: #2196F3;
    border-left: 4px solid #1976D2;
}

.notification .icon {
    font-size: 18px;
}

.notification .message {
    flex: 1;
}

.notification .close {
    background: none;
    border: none;
    color: white;
    font-size: 18px;
    cursor: pointer;
    padding: 0;
    margin-left: 10px;
}

.notification .close:hover {
    opacity: 0.8;
}

     
    </style>
</head>
<body>
   

    <!-- Top Header -->
    <div class="top-header">
        <div class="container">
            <div class="tagline">Reliable Tech Since 2005</div>
            <div class="account-links">
                <a href="#">My Account</a>
                <a href="../login.php">Login</a>
                <a href="#">Register</a>
            </div>
        </div>
    </div>
    <!-- Main Header -->
    <header class="main-header">
        <div class="container header-flex">
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
            <span class="breadcrumb" href="">Home / <span class="current">Laptops</span></span>
        </div>
    </div>
            <div class="container">
                <!-- Main Content Layout -->
                <div class="page-layout-centered page-layout">
                    <!-- Sidebar -->
        <aside class="sidebar">
            <div class="sidebar-section category">
                <h3>LAPTOPS</h3>
            </div>
            <div class="sidebar-section price-range">
                <h4>PRICE RANGE</h4>
                <div class="slider-row">
                    <input type="range" min="0" max="500000" value="0" class="price-slider" id="price-slider">
                    <div class="price-values">
                        <span>0</span>
                        <span id="selected-price">0</span>
                        <span style="float:right">500,000</span>
                    </div>
                </div>
                <button class="btn btn-blue" id="price-go">GO</button>
            </div>
            <div class="sidebar-section brand-filter">
                <h4>BRAND</h4>
                <label><input type="checkbox" class="brand-checkbox" value="HP"> HP</label>
                <label><input type="checkbox" class="brand-checkbox" value="Dell"> Dell</label>
                <label><input type="checkbox" class="brand-checkbox" value="ThinkPad"> ThinkPad</label>
                <label><input type="checkbox" class="brand-checkbox" value="Lenovo"> Lenovo</label>
                <label><input type="checkbox" class="brand-checkbox" value="Asus"> Asus</label>
            </div>
        </aside>
        <!-- Main Content -->
        <main class="main-area">
            <h1 class="page-title">Laptops</h1>
            <div class="banner-text">Find the best laptops for work, gaming, and everyday use at unbeatable prices.</div>
            <div class="results-bar">
                <span class="results-info" id="results-info">Showing 1-20 of 40</span>
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
        // Product Data
        const laptopProducts = [
            {
                id: 1,
                title: 'Lenovo IdeaPad Slim 3',
                description: 'Intel Core i3 12th Gen, 8GB, 256GB SSD, 15.6" FHD Display, Windows 11 - Arctic Grey',
                price: 106500,
                image: 'https://static.webx.pk/files/78721/Images/lenovo-111-78721-2192356-210924051252647.jpg',
        stock: 'In Stock'
    },
    {
        id: 2,
        title: 'Lenovo IdeaPad Slim 3',
        description: 'Intel Core i3 13th Gen, 8GB, 256GB SSD, 15.6" Display, Free DOS',
        price: 107500,
        image: 'https://images.pexels.com/photos/12882906/pexels-photo-12882906.jpeg?auto=compress&cs=tinysrgb&w=800&h=600&dpr=1.0',
        stock: 'In Stock'
    },
    {
        id: 3,
        title: 'HP 15 FD2158NIA',
        description: 'Intel Core i3 13th Gen, 8GB, 512GB SSD, FHD Display, Natural Silver',
        price: 108500,
        image: 'https://images.pexels.com/photos/812264/pexels-photo-812264.jpeg?auto=compress&cs=tinysrgb&w=800&h=600&dpr=1.0',
        stock: 'In Stock'
    },
    {
        id: 4,
        title: 'HP 15S FQ5009NIA',
        description: 'Intel Core i3 12th Gen, 8GB, 512GB SSD, 15.6" FHD Display, Silver',
        price: 114500,
        image: 'https://static.webx.pk/files/78721/Images/lenovo-ideapad-slim-3-78721-2192358-090924053136814.png',
        stock: 'In Stock'
    },
    {
        id: 5,
        title: 'Lenovo IdeaPad 3',
        description: 'Intel Core i3 12th Gen, 8GB, 512GB SSD, 15.6" Display, Arctic Grey',
        price: 116000,
        image: 'https://static.webx.pk/files/78721/Images/hp-g10-i3-78721-0-210924111837979.png',
        stock: 'In Stock'
    },
    {
        id: 6,
        title: 'Lenovo V15 G4',
        description: 'Intel Core i3 13th Gen, 8GB, 512GB SSD, 15.6" Display, Grey',
        price: 117000,
        image: 'https://static.webx.pk/files/78721/Images/lenovo-ideapad-3-15itl6-core-i5-78721-2192357-090924063743880.png',
        stock: 'In Stock'
    },
    {
        id: 7,
        title: 'Lenovo IdeaPad 3 15ALC6',
        description: 'AMD Ryzen 5 5500U, 8GB, 512GB SSD, 15.6" Display, Win 11',
        price: 121000,
        image: 'https://static.webx.pk/files/78721/Images/copy-1-czone.com.pk-1540-16339-010724072313-78721-0-161224064201124.jpg',
        stock: 'In Stock'
    },
    {
        id: 8,
        title: 'HP 15 FD0043NIA',
        description: 'AMD Ryzen 7 7730U, 8GB, 512GB SSD, 15.6" Display, Silver',
        price: 124000,
        image: 'https://static.webx.pk/files/78721/Images/lenovo-ideapad-3-15itl6-core-i5-78721-2192359-090924053928997.png',
        stock: 'In Stock'
    },
    {
        id: 9,
        title: 'Lenovo IdeaPad 3 15ITL6',
        description: 'Intel Core i5 11th Gen, 8GB, 512GB SSD, 15.6" FHD Display, Arctic Grey',
        price: 124000,
        image: 'https://static.webx.pk/files/78721/Images/11-czone.com.pk-1540-17696-200125124531-78721-0-290125065112570.jpg',
        stock: 'In Stock'
    },
    {
        id: 10,
        title: 'HP 15 FD0011NIA',
        description: 'Intel Core i5 13th Gen, 8GB, 256GB SSD, 15.6" Display, Silver',
        price: 130000,
        image: 'https://static.webx.pk/files/78721/Images/lenovo-111-78721-2192363-210924051449322.jpg',
        stock: 'In Stock'
    },
    {
        id: 11,
        title: 'Lenovo IdeaPad 3 15ITL6',
        description: 'Intel Core i5 11th Gen, 8GB, 512GB SSD, 15.6" Display, Arctic Grey',
        price: 132000,
        image: 'https://static.webx.pk/files/78721/Images/lenovo-111-78721-2192363-210924051449322-78721-0-160725113747769.webp',
        stock: 'In Stock'
    },
    {
        id: 12,
        title: 'Lenovo Ideapad Slim 3 15IRH8',
        description: 'Intel Core i5 13th Gen, 8GB DDR5, 512GB SSD, 15.6" FHD, Intel UHD, DOS, Grey',
        price: 134000,
        image: 'https://static.webx.pk/files/78721/Images/g-9-2-78721-2190735-210924055406324.jpg',
        stock: 'In Stock'
    },
    {
        id: 13,
        title: 'HP 250 G9',
        description: 'Intel Core i5 12th Gen, 8GB DDR4, 256GB SSD, 15.6" FHD, Backlit, FP, Win11, Black',
        price: 134000,
        image: 'https://static.webx.pk/files/78721/Images/51p8zbpatsl.-ac-uf894,1000-ql80--78721-2192361-090924055024698.jpg',
        stock: 'In Stock'
    },
    {
        id: 14,
        title: 'Lenovo Ideapad 3',
        description: 'AMD Ryzen 7 5700U, 8GB DDR4, 512GB SSD, 15.6" FHD Touch, AMD Radeon, Win10, Blue',
        price: 134000,
        image: 'https://static.webx.pk/files/78721/Images/c08672234.png-78721-0-210924113459627.png',
        stock: 'In Stock'
    },
    {
        id: 15,
        title: 'HP 250 G10',
        description: 'Intel Core i5 13th Gen, 8GB DDR4, 512GB SSD, 15.6" FHD, Iris Xe, DOS, Grey',
        price: 142000,
        image: 'https://static.webx.pk/files/78721/Images/hp-dw3004-price-in-pakistan-galaxypk--2-78721-2190732-070924012208224.jpg',
        stock: 'In Stock'
    },
    {
        id: 16,
        title: 'HP 15 DW3004 / 003/ 005NE',
        description: 'Intel Core i5 11th Gen, 8GB DDR4, 256GB SSD, 15.6" FHD, MX350, DOS',
        price: 144000,
        image: 'https://static.webx.pk/files/78721/Images/fd-3005-78721-2190736-210924054932209.jpg',
        stock: 'In Stock'
    },
    {
        id: 17,
        title: 'HP 15 FD0355NIA',
        description: 'Intel Core i5 13th Gen, 8GB DDR4, 512GB SSD, 15.6" FHD, Iris Xe, Backlit, DOS, Silver',
        price: 145000,
        image: 'https://static.webx.pk/files/78721/Images/hp-15-laptop-4059-0-210425082608079-78721-0-230425064449291.jpg',
        stock: 'In Stock'
    },
    {
        id: 18,
        title: 'HP Laptop 15-FD0336TU',
        description: 'Intel Core i5 13th Gen, 8GB DDR4, 512GB SSD, 15.6" FHD, DOS, Natural Silver',
        price: 146000,
        image: 'https://static.webx.pk/files/78721/Images/czone.com.pk-20-1540-18443-130625075047-78721-0-190725095027839.webp',
        stock: 'In Stock'
    },
    {
        id: 19,
        title: 'HP 15-FD0499NIA',
        description: 'Intel Core i5 13th Gen, 8GB DDR4, 512GB SSD, 15.6" FHD, Backlit, DOS, Natural Silver',
        price: 146000,
        image: 'https://static.webx.pk/files/78721/Images/23c1-intel-opp-sebastian-15-ffplus-naturalsilver-nt-hdcam-no-78721-2353348-160425070725692.png',
        stock: 'In Stock'
    },
    {
        id: 20,
        title: 'HP 15-FD0361TU',
        description: 'Intel Core i5 13th Gen, 8GB DDR4, 512GB SSD, 15.6" FHD, Backlit, Win11, Silver',
        price: 148000,
        image: 'https://static.webx.pk/files/78721/Images/hp-15-laptop-4059-0-210425082608079-78721-0-230425064449291.jpg',
        stock: 'In Stock'
    }
];
        // Shopping Cart
        let cart = JSON.parse(localStorage.getItem('cart')) || [];
        
        // Initialize page
        const products = laptopProducts;
        let productsPerPage = 20;
        let currentPage = 1;
        let maxPrice = 0;
        let filteredProducts = products.slice();
        let selectedBrands = [];

        // Format price with Rs. and commas
        function formatPrice(price) {
            return 'Rs. ' + price.toLocaleString();
        }

        // Filter products based on price and brand
        function filterProducts() {
            filteredProducts = products.filter(p => {
                const priceMatch = maxPrice === 0 || p.price <= maxPrice;
                const brandMatch = selectedBrands.length === 0 || 
                    selectedBrands.some(b => p.title.toLowerCase().includes(b.toLowerCase()));
                return priceMatch && brandMatch;
            });
        }

        // Show notification function
        function showNotification(message) {
            console.log('Showing notification:', message); // Debug log
            const notification = document.createElement('div');
            notification.className = 'notification';
            notification.textContent = message;
            document.body.appendChild(notification);
            
            // Force reflow to enable transition
            void notification.offsetWidth;
            
            // Show notification
            notification.classList.add('show');
            
            setTimeout(() => {
                notification.classList.remove('show');
                setTimeout(() => notification.remove(), 300);
            }, 3000);
        }

        // Add to cart function
        function addToCart(productId) {
            const product = products.find(p => p.id === productId);
            if (!product) return;
            
            const existingItem = cart.find(item => item.id === productId);
            
            if (existingItem) {
                existingItem.quantity += 1;
            } else {
                cart.push({
                    id: product.id,
                    title: product.title,
                    price: product.price,
                    image: product.image,
                    quantity: 1
                });
            }
            
            localStorage.setItem('cart', JSON.stringify(cart));
            showNotification(`${product.title} added to cart!`);
        }

        // Toggle wishlist function
        function toggleWishlist(productId) {
            const product = products.find(p => p.id === productId);
            if (product) {
                showNotification(`${product.title} added to wishlist!`);
            }
        }

        // Render products to the page
        function renderProducts(page) {
            const grid = document.getElementById('product-grid');
            grid.innerHTML = '';
            const start = (page-1)*productsPerPage;
            const end = Math.min(start+productsPerPage, filteredProducts.length);
            
            for(let i=start; i<end; i++) {
                const p = filteredProducts[i];
                grid.innerHTML += `
                <div class="product-card" data-id="${p.id}">
                    <div class="card-left">
                        <img src="${p.image || 'https://via.placeholder.com/300x200?text=No+Image'}" alt="${p.title}" />
                    </div>
                    <div class="card-right">
                        <div class="heart-icon" onclick="toggleWishlist(${p.id})">&#10084;</div>
                        <h2 class="product-title">${p.title}</h2>
                        <h4 class="product-category">LAPTOP</h4>
                        <div class="price">${formatPrice(p.price)}</div>
                        <div class="description">${p.description}</div>
                        <div class="product-meta">
                            <span class="stock in-stock">${p.stock}</span>
                        </div>
                        <div class="buttons">
                            <button onclick="addToCart(${p.id})">ADD TO CART</button>
                            <button onclick="addToWishlist(${p.id})">WISHLIST</button>
                        </div>
                    </div>
                </div>`;
            }
            
            // Update results info
            const info = document.getElementById('results-info');
            info.textContent = filteredProducts.length === 0 ? 
                'No products found' : 
                `Showing ${filteredProducts.length === 0 ? 0 : start+1}-${end} of ${filteredProducts.length}`;
        }

        // Render pagination controls
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
            bar.querySelectorAll('.page-item:not(.active):not(.disabled) a').forEach(a => {
                a.onclick = function(e) {
                    e.preventDefault();
                    const text = a.textContent.trim();
                    
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

        // Initialize event listeners
        function initEventListeners() {
            // Price range slider
            const priceSlider = document.getElementById('price-slider');
            const selectedPrice = document.getElementById('selected-price');
            
            priceSlider.addEventListener('input', function() {
                selectedPrice.textContent = formatPrice(parseInt(this.value));
                maxPrice = parseInt(this.value);
                filterProducts();
                currentPage = 1;
                renderProducts(currentPage);
                renderPagination();
            });
            
            // Price Go button
            document.getElementById('price-go').addEventListener('click', function() {
                maxPrice = parseInt(priceSlider.value);
                filterProducts();
                currentPage = 1;
                renderProducts(currentPage);
                renderPagination();
            });
            
            // Brand filter checkboxes
            const brandCheckboxes = document.querySelectorAll('.brand-checkbox');
            brandCheckboxes.forEach(cb => {
                cb.addEventListener('change', function() {
                    selectedBrands = Array.from(brandCheckboxes)
                        .filter(c => c.checked)
                        .map(c => c.value);
                    
                    filterProducts();
                    currentPage = 1;
                    renderProducts(currentPage);
                    renderPagination();
                });
            });
            
            // Results per page dropdown
            document.getElementById('results-per-page').addEventListener('change', function() {
                productsPerPage = parseInt(this.value);
                currentPage = 1;
                renderProducts(currentPage);
                renderPagination();
            });
            
            // Sort By dropdown
            document.getElementById('sort-by').addEventListener('change', function() {
                const sortValue = this.value;
                
                if (sortValue === 'low-high') {
                    filteredProducts.sort((a, b) => a.price - b.price);
                } else if (sortValue === 'high-low') {
                    filteredProducts.sort((a, b) => b.price - a.price);
                } else {
                    // Newest or default sorting
                    filteredProducts.sort((a, b) => b.id - a.id); // Assuming higher IDs are newer
                }
                
                currentPage = 1;
                renderProducts(currentPage);
                renderPagination();
            });
        }

        // Initialize the page
        document.addEventListener('DOMContentLoaded', function() {
            // Format prices in product data
            products.forEach(p => {
                p.priceDisplay = formatPrice(p.price);
            });
            
            filterProducts();
            renderProducts(currentPage);
            renderPagination();
            initEventListeners();
            
            // Test notification after 1 second
            setTimeout(() => {
                showNotification('System ready! Notifications are working.');
            }, 1000);
        });
    </script>
</body>
</html>