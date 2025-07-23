<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mouse | Bawa Computers</title>
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
            <span class="breadcrumb" href="">Home / More / <span class="current">Mouse</span></span>
        </div>
    </div>
            <div class="container">
                <!-- Main Content Layout -->
                <div class="page-layout-centered page-layout">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="sidebar-section category">
                <h3>MOUSE</h3>
            </div>
            <div class="sidebar-section price-range">
                <h4>PRICE RANGE</h4>
                <div class="slider-row">
                    <input type="range" min="0" max="15000" value="0" class="price-slider" id="price-slider">
                    <div class="price-values">
                        <span>0</span>
                        <span id="selected-price">0</span>
                        <span style="float:right">15,000</span>
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
                <label><input type="checkbox" class="brand-checkbox" value="HyperX"> HyperX</label>
                <label><input type="checkbox" class="brand-checkbox" value="ASUS"> ASUS</label>
            </div>
            <div class="sidebar-section type-filter">
                <h4>TYPE</h4>
                <label><input type="checkbox" class="type-checkbox" value="Gaming"> Gaming</label>
                <label><input type="checkbox" class="type-checkbox" value="Wireless"> Wireless</label>
                <label><input type="checkbox" class="type-checkbox" value="Wired"> Wired</label>
                <label><input type="checkbox" class="type-checkbox" value="Office"> Office</label>
            </div>
            <div class="sidebar-section dpi-filter">
                <h4>DPI RANGE</h4>
                <label><input type="checkbox" class="dpi-checkbox" value="Up to 3200"> Up to 3200</label>
                <label><input type="checkbox" class="dpi-checkbox" value="3200-8000"> 3200-8000</label>
                <label><input type="checkbox" class="dpi-checkbox" value="8000-16000"> 8000-16000</label>
                <label><input type="checkbox" class="dpi-checkbox" value="16000+"> 16000+</label>
            </div>
        </aside>
        <!-- Main Content -->
        <main class="main-area">
            <h1 class="page-title">Mouse</h1>
            <div class="banner-text">High-performance gaming mice and precision office mice for every need.</div>
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
        // Mouse product data
        const mouseProducts = [
            { title: 'EASE EM100 Wired Optical USB Mouse', price: 700, priceDisplay: 'Rs. 700', stock: 'In Stock', type: 'Wired', brand: 'EASE', img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/usb-11-78721-2201181-190924080139185.jpg' },
            { title: 'EASE EM110 Wired USB Mouse', price: 850, priceDisplay: 'Rs. 850', stock: 'In Stock', type: 'Wired', brand: 'EASE', img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/em-110-1-78721-2201182-190924101550447.jpg' },
            { title: 'Rapoo N200 Optical Wired Mouse', price: 900, priceDisplay: 'Rs. 900', stock: 'In Stock', type: 'Wired', brand: 'Rapoo', img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/n200-1-78721-2201166-190924111013885.jpg' },
            { title: 'Logitech B100 Optical Mouse', price: 950, priceDisplay: 'Rs. 950', stock: 'In Stock', type: 'Wired', brand: 'Logitech', img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/b-100-1-78721-2201120-190924105439614.jpg' },
            { title: 'Rapoo N100C Type-C Wired Optical Mouse', price: 1000, priceDisplay: 'Rs. 1,000', stock: 'In Stock', type: 'Wired', brand: 'Rapoo', img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/n-100-c-1-78721-2201191-190924093206210.jpg' },
            { title: 'A4Tech OP720S Optical Mouse', price: 1050, priceDisplay: 'Rs. 1,050', stock: 'In Stock', type: 'Wired', brand: 'A4Tech', img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/op72os-1-78721-2201143-190924094141376.jpg' },
            { title: 'Rapoo N1200 Silent Optical Wired Mouse', price: 1100, priceDisplay: 'Rs. 1,100', stock: 'In Stock', type: 'Wired', brand: 'Rapoo', img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/n-1200-1-78721-2201167-190924104523176.jpg' },
            { title: 'A4Tech OP330S Silent Optical Wired Mouse', price: 1100, priceDisplay: 'Rs. 1,100', stock: 'In Stock', type: 'Wired', brand: 'A4Tech', img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/op35os-1-78721-2201160-190924113805405.jpg' },
            { title: 'Rapoo N500 Wired silent Optical Mouse', price: 1500, priceDisplay: 'Rs. 1,500', stock: 'In Stock', type: 'Wired', brand: 'Rapoo', img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/n-500-1-78721-2201190-190924102534003.jpg' },
            { title: 'EASE EGM100 Pro Gaming Mouse', price: 1500, priceDisplay: 'Rs. 1,500', stock: 'In Stock', type: 'Gaming', brand: 'EASE', img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/egm-100-1-78721-2201186-190924094905800.jpg' },
            { title: 'EASE EM200 Wireless Mouse', price: 1600, priceDisplay: 'Rs. 1,600', stock: 'In Stock', type: 'Wireless', brand: 'EASE', img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/em-200-1-78721-2201180-190924091424812.jpg' },
            { title: 'EASE EM210 USB Wireless Mouse', price: 1800, priceDisplay: 'Rs. 1,800', stock: 'In Stock', type: 'Wireless', brand: 'EASE', img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/em210-1-78721-2201185-190924091648386.jpg' },
            { title: 'A4Tech G3-280NS 2.4G Optical Wireless Mouse', price: 1850, priceDisplay: 'Rs. 1,850', stock: 'In Stock', type: 'Wireless', brand: 'A4Tech', img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/46-czone.com.pk-1540-15053-180823100315-78721-0-140125073457898.jpg' },
            { title: 'A4Tech G3-300NS 2.4G Optical Wireless Mouse', price: 1850, priceDisplay: 'Rs. 1,850', stock: 'In Stock', type: 'Wireless', brand: 'A4Tech', img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/g3-2-78721-2201146-190924100734668.jpg' },
            { title: 'A4Tech G3-330NS Wireless Mouse', price: 1850, priceDisplay: 'Rs. 1,850', stock: 'In Stock', type: 'Wireless', brand: 'A4Tech', img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/g3-22-78721-2201173-190924101941066.jpg' },
            { title: 'A4Tech G3 200NS Wireless Mouse', price: 1850, priceDisplay: 'Rs. 1,850', stock: 'In Stock', type: 'Wireless', brand: 'A4Tech', img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/200ns-2-78721-2201145-190924110849794.jpg' },
            { title: 'Rapoo B20 Silent Wireless Optical Mouse', price: 2000, priceDisplay: 'Rs. 2,000', stock: 'In Stock', type: 'Wireless', brand: 'Rapoo', img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/b-20-11-78721-2201192-190924095029764.jpg' },
            { title: 'Rapoo B30 Silent Wireless Optical Mouse', price: 2100, priceDisplay: 'Rs. 2,100', stock: 'In Stock', type: 'Wireless', brand: 'Rapoo', img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/b300-1-78721-2201193-190924075511486.jpg' },
            { title: 'Rapoo 1620 Wireless Optical Mouse', price: 2100, priceDisplay: 'Rs. 2,100', stock: 'In Stock', type: 'Wireless', brand: 'Rapoo', img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/1620-2-78721-2201161-190924113544003.jpg' },
            { title: 'A4Tech FG12s Optical Wireless Mouse - White', price: 2200, priceDisplay: 'Rs. 2,200', stock: 'In Stock', type: 'Wireless', brand: 'A4Tech', img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/57-czone.com.pk-1540-15991-130524114539-78721-0-140125072605971.jpg' }
        ];

        let productsPerPage = 20;
        let currentPage = 1;
        let maxPrice = 0;
        let filteredProducts = mouseProducts.slice();
        let selectedBrands = [];
        let selectedTypes = [];
        let selectedDpis = [];

        function filterProducts() {
            filteredProducts = mouseProducts.filter(p => {
                const priceMatch = p.price >= maxPrice;
                const brandMatch = selectedBrands.length === 0 || selectedBrands.includes(p.brand);
                const typeMatch = selectedTypes.length === 0 || selectedTypes.includes(p.type);
                const dpiMatch = selectedDpis.length === 0 || selectedDpis.includes(p.dpi);
                return priceMatch && brandMatch && typeMatch && dpiMatch;
            });
        }

        function renderProducts(page) {
            const grid = document.getElementById('product-grid');
            grid.innerHTML = '';
            const start = (page - 1) * productsPerPage;
            const end = Math.min(start + productsPerPage, filteredProducts.length);
            for (let i = start; i < end; i++) {
                const p = filteredProducts[i];
                grid.innerHTML += `
        <div class="product-card" data-id="${i + 1}">
            <div class="card-left">
                <img src="${p.img || 'https://images.unsplash.com/photo-1527864550417-7fd91fc51a46?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80'}" alt="${p.title}" />
            </div>
            <div class="card-right">
                <div class="heart-icon" onclick="toggleWishlist(${i + 1})">&#10084;</div>
                <h2 class="product-title">${p.title}</h2>
                <h4 class="product-category">${p.type.toUpperCase()} MOUSE</h4>
                <div class="price">${p.priceDisplay}</div>
                <div class="description">
                    High-precision ${p.type.toLowerCase()} mouse with ${p.dpi} DPI for accurate tracking and smooth performance.
                </div>
                <div class="product-features">
                    <span class="feature-tag">${p.type}</span>
                    <span class="feature-tag">${p.dpi} DPI</span>
                    <span class="feature-tag">${p.brand}</span>
                </div>
                <div class="product-meta">
                    <span class="stock in-stock">${p.stock}</span>
                </div>
                <div class="buttons">
                    <button onclick="addToCart(${i + 1})">ADD TO CART</button>
                    <button onclick="addToWishlist(${i + 1})">WISHLIST</button>
                </div>
            </div>
        </div>`;
            }
            if (filteredProducts.length === 0) {
                grid.innerHTML = '<div style="padding:40px;text-align:center;color:#888;">No products found in this price range.</div>';
            }
            // Update results info
            const info = document.getElementById('results-info');
            if (filteredProducts.length === 0) {
                info.textContent = 'No products found';
            } else {
                info.textContent = `Showing ${filteredProducts.length === 0 ? 0 : start + 1}-${end} of ${filteredProducts.length}`;
            }
        }

        function renderPagination() {
            const bar = document.getElementById('pagination-bar');
            const totalPages = Math.max(1, Math.ceil(filteredProducts.length / productsPerPage));
            let html = '<ul class="pagination">';
            html += `<li class="page-item${currentPage === 1 ? ' disabled' : ''}" id="prev-page"><a href="#">&laquo; Prev</a></li>`;
            for (let i = 1; i <= totalPages; i++) {
                html += `<li class="page-item${i === currentPage ? ' active' : ''}"><a href="#">${i}</a></li>`;
            }
            html += `<li class="page-item${currentPage === totalPages ? ' disabled' : ''}" id="next-page"><a href="#">Next &raquo;</a></li>`;
            html += '</ul>';
            bar.innerHTML = html;
            // Add event listeners
            bar.querySelectorAll('.page-item:not(.active):not(.disabled) a').forEach((a, idx, arr) => {
                a.onclick = function (e) {
                    e.preventDefault();
                    const text = a.textContent.trim();
                    const totalPages = Math.max(1, Math.ceil(filteredProducts.length / productsPerPage));
                    if (text === '« Prev') {
                        if (currentPage > 1) currentPage--;
                    } else if (text === 'Next »') {
                        if (currentPage < totalPages) currentPage++;
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
        resultsSelect.addEventListener('change', function () {
            productsPerPage = parseInt(this.value);
            currentPage = 1;
            renderProducts(currentPage);
            renderPagination();
        });

        // Price range slider
        const priceSlider = document.getElementById('price-slider');
        const selectedPrice = document.getElementById('selected-price');
        priceSlider.addEventListener('input', function () {
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
            cb.addEventListener('change', function () {
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
            cb.addEventListener('change', function () {
                selectedTypes = Array.from(typeCheckboxes).filter(c => c.checked).map(c => c.value);
                currentPage = 1;
                filterProducts();
                renderProducts(currentPage);
                renderPagination();
            });
        });

        // DPI filter
        const dpiCheckboxes = document.querySelectorAll('.dpi-checkbox');
        dpiCheckboxes.forEach(cb => {
            cb.addEventListener('change', function () {
                selectedDpis = Array.from(dpiCheckboxes).filter(c => c.checked).map(c => c.value);
                currentPage = 1;
                filterProducts();
                renderProducts(currentPage);
                renderPagination();
            });
        });

        // Sort By dropdown
        const sortBySelect = document.getElementById('sort-by');
        sortBySelect.addEventListener('change', function () {
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
        window.addEventListener('DOMContentLoaded', function () {
            priceSlider.value = 0;
            selectedPrice.textContent = '0';
            maxPrice = 0;
            filterProducts();
            currentPage = 1;
            renderProducts(currentPage);
            renderPagination();
        });

        document.getElementById('price-go').addEventListener('click', function () {
            maxPrice = parseInt(priceSlider.value);
            filterProducts();
            currentPage = 1;
            renderProducts(currentPage);
            renderPagination();
        });

        // Cart and Wishlist Functions
        function addToCart(productId) {
            const product = mouseProducts[productId - 1];
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
            const product = mouseProducts[productId - 1];
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