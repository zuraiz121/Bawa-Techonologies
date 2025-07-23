<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desktop PCs | Bawa Computers</title>
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
            <span class="breadcrumb" href="">Home / <span class="current">Desktop PCs</span></span>
        </div>
    </div>
            <div class="container">
                <!-- Main Content Layout -->
                <div class="page-layout-centered page-layout">
                    <!-- Sidebar -->
                    <aside class="sidebar">
                        <div class="sidebar-section category">
                            <h3>DESKTOP PCS</h3>
                        </div>
                        <div class="sidebar-section price-range">
                            <h4>PRICE RANGE</h4>
                            <div class="slider-row">
                                <input type="range" min="0" max="800000" value="0" class="price-slider" id="price-slider">
                    <div class="price-values">
                        <span>0</span>
                        <span id="selected-price">0</span>
                        <span style="float:right">800,000</span>
                    </div>
                </div>
                <button class="btn btn-blue" id="price-go">GO</button>
            </div>
            <div class="sidebar-section brand-filter">
                <h4>BRAND</h4>
                <label><input type="checkbox" class="brand-checkbox" value="HP"> HP</label>
                <label><input type="checkbox" class="brand-checkbox" value="Dell"> Dell</label>
                <label><input type="checkbox" class="brand-checkbox" value="Lenovo"> Lenovo</label>
                <label><input type="checkbox" class="brand-checkbox" value="Asus"> Asus</label>
                <label><input type="checkbox" class="brand-checkbox" value="Custom"> Custom Built</label>
            </div>
            <div class="sidebar-section category-filter">
                <h4>CATEGORY</h4>
                <label><input type="checkbox" class="category-checkbox" value="Gaming"> Gaming PCs</label>
                <label><input type="checkbox" class="category-checkbox" value="Business"> Business PCs</label>
                <label><input type="checkbox" class="category-checkbox" value="Home"> Home PCs</label>
                <label><input type="checkbox" class="category-checkbox" value="Workstation"> Workstations</label>
            </div>
        </aside>
        <!-- Main Content -->
        <main class="main-area">
            <h1 class="page-title">Desktop PCs</h1>
            <div class="banner-text">High-performance desktop computers for gaming, work, and everyday computing needs.
                </div>
                <div class="results-bar">
                    <span class="results-info" id="results-info">Showing 1-20 of 35</span>
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
    <script src="js/cart-wishlist.js"></script>
    <script src="js/include.js"></script>
    <script src="js/notifications.js"></script>
    <script>
        const desktopPCProducts = [
            { title: 'Dell Vostro 3000 Tower', price: 108000, priceDisplay: 'Rs. 108,000', stock: 'In Stock', img: 'https://static.webx.pk/files/78721/Images/bf154190-42a6-4be1-a781-6987434e8628-1-1800x1800-78721-0-150425092259790.jpg', category: 'Business' },
            { title: 'HP Pavilion TP01', price: 110000, priceDisplay: 'Rs. 110,000', stock: 'In Stock', img: 'http://static.webx.pk/files/78721/Images/045-1-78721-2195203-100924123410218.jpg', category: 'Gaming' },
            { title: 'HP 290 Tower G9', price: 115000, priceDisplay: 'Rs. 115,000', stock: 'In Stock', img: 'https://static.webx.pk/files/78721/Images/czone.com.pk-39-1540-18422-050625115313-78721-0-140625102218300.jpg', category: 'Home' },
            { title: 'Asus ExpertCenter D5', price: 118000, priceDisplay: 'Rs. 118,000', stock: 'In Stock', img: 'https://static.webx.pk/files/78721/Images/web.whatsapp-8-78721-2194413-161224014714692.jpg', category: 'Business' },
            { title: 'HP Pavilion TP01-1105y', price: 140000, priceDisplay: 'Rs. 140,000', stock: 'In Stock', img: 'https://static.webx.pk/files/78721/Images/1130-1-78721-2195204-100924123223785.jpg', category: 'Home' },
            { title: 'Dell OptiPlex 7000MT', price: 144000, priceDisplay: 'Rs. 144,000', stock: 'In Stock', img: 'https://static.webx.pk/files/78721/Images/desktop-optiplex-7010-mt-black-gallery-4-78721-0-150425091122572.png', category: 'Business' },
            { title: 'Asus ExpertCenter D500MD', price: 150000, priceDisplay: 'Rs. 150,000', stock: 'In Stock', img: 'https://static.webx.pk/files/78721/Images/unnamed-28-78721-0-060525104403260.png', category: 'Business' },
            { title: 'HP Pavilion TP01-2105L', price: 160000, priceDisplay: 'Rs. 160,000', stock: 'In Stock', img: 'https://static.webx.pk/files/78721/Images/2010-11-78721-2195205-100924123646058.png', category: 'Gaming' },
            { title: 'HP Pavilion TP01-2040L', price: 160000, priceDisplay: 'Rs. 160,000', stock: 'In Stock', img: 'https://static.webx.pk/files/78721/Images/2010-11-78721-2195206-100924123747895.png', category: 'Gaming' },
            { title: 'Dell Vostro 3000 Tower (i5)', price: 160000, priceDisplay: 'Rs. 160,000', stock: 'In Stock', img: 'https://static.webx.pk/files/78721/Images/dv3020-csy-00030lf-bl-noodd-nomcr-78721-2194625-100924060846719.jpg', category: 'Business' },
            { title: 'Lenovo ThinkCentre Neo 50t G4', price: 165000, priceDisplay: 'Rs. 165,000', stock: 'In Stock', img: 'https://static.webx.pk/files/78721/Images/15-czone.com.pk-1540-17404-261124121031-78721-2247610-171224105150601.jpg', category: 'Business' },
            { title: 'HP Pavilion TP01-2040L (i7)', price: 165000, priceDisplay: 'Rs. 165,000', stock: 'In Stock', img: 'https://static.webx.pk/files/78721/Images/1130-1-78721-2195207-100924124054549.jpg', category: 'Gaming' },
            { title: 'HP Pavilion TP01-2003D', price: 165000, priceDisplay: 'Rs. 165,000', stock: 'In Stock', img: 'https://static.webx.pk/files/78721/Images/1130-1-78721-2195208-100924124218833.jpg', category: 'Gaming' },
            { title: 'HP Pavilion TP01-2040D', price: 165000, priceDisplay: 'Rs. 165,000', stock: 'In Stock', img: 'https://static.webx.pk/files/78721/Images/1130-1-78721-2195209-100924124248511.jpg', category: 'Home' },
            { title: 'HP Pavilion TP01-2034D', price: 175000, priceDisplay: 'Rs. 175,000', stock: 'In Stock', img: 'https://static.webx.pk/files/78721/Images/1130-1-78721-2195210-100924124356308.jpg', category: 'Home' },
            { title: 'HP Victus TE01-0034D', price: 180000, priceDisplay: 'Rs. 180,000', stock: 'In Stock', img: 'https://static.webx.pk/files/78721/Images/hp-victus-15l-price-in-pakistan--3-78721-2195211-100924074234893.jpg', category: 'Gaming' },
            { title: 'HP Victus TE01-2003D', price: 185000, priceDisplay: 'Rs. 185,000', stock: 'In Stock', img: 'https://static.webx.pk/files/78721/Images/hp-victus-15l-price-in-pakitan-galaxypk---2-78721-2195212-100924080638400.jpg', category: 'Gaming' },
            { title: 'Apple Mac Mini M2 (16GB)', price: 185500, priceDisplay: 'Rs. 185,500', stock: 'In Stock', img: 'https://static.webx.pk/files/78721/Images/as-images.apple-47-78721-0-191224075302195.jpg', category: 'Home' },
            { title: 'HP Pavilion TP01-2004D', price: 189000, priceDisplay: 'Rs. 189,000', stock: 'In Stock', img: 'https://static.webx.pk/files/78721/Images/1130-1-78721-2195213-100924124508964.jpg', category: 'Gaming' },
            { title: 'Asus ExpertCenter D500MD (i7)', price: 195000, priceDisplay: 'Rs. 195,000', stock: 'In Stock', img: 'https://static.webx.pk/files/78721/Images/unnamed-31-78721-2365034-060525105838928.png', category: 'Business' }
        ];

        // Use centralized product data from data.js
        const products = desktopPCProducts;
        let productsPerPage = 20;
        let currentPage = 1;
        let maxPrice = 0;
        let filteredProducts = products.slice();
        let selectedBrands = [];
        let selectedCategories = [];

        function filterProducts() {
            filteredProducts = products.filter(p => {
                const priceMatch = p.price >= maxPrice;
                const brandMatch = selectedBrands.length === 0 || selectedBrands.some(b => p.title.toLowerCase().includes(b.toLowerCase()));
                const categoryMatch = selectedCategories.length === 0 || selectedCategories.includes(p.category);
                return priceMatch && brandMatch && categoryMatch;
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
                <img src="${p.img || 'https://images.unsplash.com/photo-1593640408182-31c70c8268f5?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80'}" alt="${p.title}" />
            </div>
            <div class="card-right">
                <div class="heart-icon" onclick="toggleWishlist(${i + 1})">&#10084;</div>
                <h2 class="product-title">${p.title}</h2>
                <h4 class="product-category">${p.category.toUpperCase()}</h4>
                <div class="price">${p.priceDisplay}</div>
                <div class="description">
                    High-performance desktop computer perfect for ${p.category.toLowerCase()} use with advanced features and reliable performance.
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

        // Category filter
        const categoryCheckboxes = document.querySelectorAll('.category-checkbox');
        categoryCheckboxes.forEach(cb => {
            cb.addEventListener('change', function () {
                selectedCategories = Array.from(categoryCheckboxes).filter(c => c.checked).map(c => c.value);
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
            const product = desktopPCProducts[productId - 1];
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
            const product = desktopPCProducts[productId - 1];
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