<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitors | Bawa Computers</title>
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
            <span class="breadcrumb" href="">Home / <span class="current">Monitors</span></span>
        </div>
    </div>
            <div class="container">
                <!-- Main Content Layout -->
                <div class="page-layout-centered page-layout">
                    <!-- Sidebar -->
                    <aside class="sidebar">
                        <div class="sidebar-section category">
                            <h3>MONITORS</h3>
                        </div>
                        <div class="sidebar-section price-range">
                            <h4>PRICE RANGE</h4>
                            <div class="slider-row">
                                <input type="range" min="0" max="150000" value="0" class="price-slider" id="price-slider">
                                <div class="price-values">
                                    <span>0</span>
                                    <span id="selected-price">0</span>
                                    <span style="float:right">150,000</span>
                                </div>
                            </div>
                            <button class="btn btn-blue" id="price-go">GO</button>
                        </div>
                        <div class="sidebar-section brand-filter">
                <h4>BRAND</h4>
                <label><input type="checkbox" class="brand-checkbox" value="Samsung"> Samsung</label>
                <label><input type="checkbox" class="brand-checkbox" value="LG"> LG</label>
                <label><input type="checkbox" class="brand-checkbox" value="Dell"> Dell</label>
                <label><input type="checkbox" class="brand-checkbox" value="HP"> HP</label>
                <label><input type="checkbox" class="brand-checkbox" value="Asus"> Asus</label>
                <label><input type="checkbox" class="brand-checkbox" value="Acer"> Acer</label>
                <label><input type="checkbox" class="brand-checkbox" value="BenQ"> BenQ</label>
            </div>
            <div class="sidebar-section category-filter">
                <h4>MONITOR TYPE</h4>
                <label><input type="checkbox" class="type-checkbox" value="Gaming"> Gaming</label>
                <label><input type="checkbox" class="type-checkbox" value="Business"> Business</label>
                <label><input type="checkbox" class="type-checkbox" value="Professional"> Professional</label>
                <label><input type="checkbox" class="type-checkbox" value="Curved"> Curved</label>
                <label><input type="checkbox" class="type-checkbox" value="Ultrawide"> Ultrawide</label>
            </div>
            <div class="sidebar-section size-filter">
                <h4>SCREEN SIZE</h4>
                <label><input type="checkbox" class="size-checkbox" value="24"> 24"</label>
                <label><input type="checkbox" class="size-checkbox" value="27"> 27"</label>
                <label><input type="checkbox" class="size-checkbox" value="32"> 32"</label>
                <label><input type="checkbox" class="size-checkbox" value="34"> 34"</label>
                <label><input type="checkbox" class="size-checkbox" value="49"> 49"</label>
            </div>
        </aside>
        <!-- Main Content -->
        <main class="main-area">
            <h1 class="page-title">Monitors</h1>
            <div class="banner-text">High-quality displays for gaming, work, and entertainment with stunning visuals and
                smooth performance.</div>
                <div class="results-bar">
                    <span class="results-info" id="results-info">Showing 1-20 of 38</span>
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

        const monitorProducts = [
            { title: 'EASE O19I10 19" Full HD Monitor', price: 24000, priceDisplay: 'Rs. 24,000', stock: 'In Stock', brand: 'EASE', size: '19"', type: 'Office', img: 'https://static.webx.pk/files/78721/Images/ease-o19i10-19-full-hd-monitor-1-78721-2192800-110924074744813.jpg' },
            { title: 'Samsung LS19A330NHMXUE 19″ Flat Monitor', price: 26000, priceDisplay: 'Rs. 26,000', stock: 'On Order Only', brand: 'Samsung', size: '19"', type: 'Essential', img: 'https://static.webx.pk/files/78721/Images/samsung-19-inch-flat-led-monitor-1366x768-with-hdmi-1-78721-0-181224082845621.png' },
            { title: 'Samsung LS19A330NHMXZN 19" Flat Monitor', price: 27000, priceDisplay: 'Rs. 27,000', stock: 'In Stock', brand: 'Samsung', size: '19"', type: 'HD', img: 'https://static.webx.pk/files/78721/Images/africa-en-s33a-482532-ls19a330nhmxzn-538685137-conv-78721-2192834-120924073522933.png' },
            { title: 'Dell E2020H 20" LCD Monitor', price: 27500, priceDisplay: 'Rs. 27,500', stock: 'In Stock', brand: 'Dell', size: '20"', type: 'Business', img: 'https://static.webx.pk/files/78721/Images/dell-e2020h-20-lcd-monitor-1-78721-2192816-110924060920471.jpg' },
            { title: 'EASE O24I10 24" Full HD Monitor', price: 30000, priceDisplay: 'Rs. 30,000', stock: 'In Stock', brand: 'EASE', size: '24"', type: 'Office', img: 'https://static.webx.pk/files/78721/Images/ease-024i10-24-full-hd-monitor-1-78721-2192802-120924022629896.jpg' },
            { title: 'Samsung LS24C360EAMXUE 24" Curved Monitor', price: 32500, priceDisplay: 'Rs. 32,500', stock: 'In Stock', brand: 'Samsung', size: '24"', type: 'Curved', img: 'https://static.webx.pk/files/78721/Images/11-4012-2115837-220624103348642-78721-0-081024092427680.jpg' },
            { title: 'Viewsonic VA2215-H 22" FHD Monitor', price: 32500, priceDisplay: 'Rs. 32,500', stock: 'In Stock', brand: 'Viewsonic', size: '22"', type: 'Adaptive Sync', img: 'https://static.webx.pk/files/78721/Images/viewsonic-va2215-h-22-75hz-fhd-adaptive-sync-monitor-1-78721-2192840-120924031114719.jpg' },
            { title: 'Viewsonic VA2432-H 24" Frameless IPS Monitor', price: 34400, priceDisplay: 'Rs. 34,400', stock: 'In Stock', brand: 'Viewsonic', size: '24"', type: 'Frameless', img: 'https://static.webx.pk/files/78721/Images/gpg-23-mon-va2432-h-prdp-f01-pc-l-78721-2192841-110725014328593.webp' },
            { title: 'Asus VA24EHFR 23.8” FHD 100HZ Monitor', price: 35000, priceDisplay: 'Rs. 35,000', stock: 'In Stock', brand: 'Asus', size: '23.8"', type: 'IPS', img: 'https://static.webx.pk/files/78721/Images/fwebp-4-78721-0-261024093732617.png' },
            { title: 'EASE G24I18 24″ IPS Gaming Monitor', price: 35500, priceDisplay: 'Rs. 35,500', stock: 'In Stock', brand: 'EASE', size: '24"', type: 'Gaming', img: 'https://static.webx.pk/files/78721/Images/3-2-300x300-78721-0-180425103930379.jpg' },
            { title: 'HikVision DS-D5027FN 27" FHD Borderless Monitor', price: 35500, priceDisplay: 'Rs. 35,500', stock: 'In Stock', brand: 'HikVision', size: '27"', type: 'Borderless', img: 'https://static.webx.pk/files/78721/Images/hikvision-ds-d5027fn-27-fhd-borderless-led-monitor-1-78721-2192806-120924024212025.jpg' },
            { title: 'MSI Pro MP241X 24" Business Monitor', price: 35500, priceDisplay: 'Rs. 35,500', stock: 'In Stock', brand: 'MSI', size: '24"', type: 'Productivity', img: 'https://static.webx.pk/files/78721/Images/msi-pro-mp241x-3-78721-2192808-120924023855126.jpg' },
            { title: 'Asus VA249HG 24" FHD IPS 120Hz Monitor', price: 36000, priceDisplay: 'Rs. 36,000', stock: 'In Stock', brand: 'Asus', size: '24"', type: 'IPS', img: 'https://static.webx.pk/files/78721/Images/3-2-300x300-78721-0-180425103930379.jpg' },
            { title: 'EASE G24I20 24" FHD 200Hz Gaming Monitor', price: 38000, priceDisplay: 'Rs. 38,000', stock: 'In Stock', brand: 'EASE', size: '24"', type: 'Gaming', img: 'https://static.webx.pk/files/78721/Images/fwebp-35-78721-0-060525113935466.png' },
            { title: 'EASE O27I10 27" IPS Office Monitor', price: 40000, priceDisplay: 'Rs. 40,000', stock: 'In Stock', brand: 'EASE', size: '27"', type: 'Office', img: 'https://static.webx.pk/files/78721/Images/ease-g-24-inch-fhd-200mhz-1ms-gaming-monitor-2-300x300-78721-0-180425104609983.jpg' },
            { title: 'HP V24v G5 23.8" FHD Monitor', price: 40000, priceDisplay: 'Rs. 40,000', stock: 'In Stock', brand: 'HP', size: '23.8"', type: 'Business', img: 'https://static.webx.pk/files/78721/Images/o27i10-4-1-300x300-78721-0-180425110124955.png' },
            { title: 'ViewSonic VX2480-SHDJ 24" Entertainment Monitor', price: 40000, priceDisplay: 'Rs. 40,000', stock: 'In Stock', brand: 'ViewSonic', size: '24"', type: 'Entertainment', img: 'https://static.webx.pk/files/78721/Images/greco-ocean-24-jetblack-coreset-scrnss-front-m1552021-78721-0-190425014142909.png' },
            { title: 'Dell SE2422H 24" FHD 75Hz Monitor', price: 40000, priceDisplay: 'Rs. 40,000', stock: 'In Stock', brand: 'Dell', size: '24"', type: 'Office', img: 'https://static.webx.pk/files/78721/Images/vx2480-shdj-f01-281-29-pc-l-78721-0-300625105054273.png' },
            { title: 'Samsung LS27C310EAMXZN 27" Essential Monitor', price: 42000, priceDisplay: 'Rs. 42,000', stock: 'On Order Only', brand: 'Samsung', size: '27"', type: 'Essential', img: 'https://static.webx.pk/files/78721/Images/dell-se2422h-24-fhd-75hz-office-monitor-1-78721-2192818-110924061527958.jpg' },
            { title: 'Viewsonic VA2732-H 27" IPS Monitor', price: 42500, priceDisplay: 'Rs. 42,500', stock: 'In Stock', brand: 'Viewsonic', size: '27"', type: 'IPS', img: 'https://static.webx.pk/files/78721/Images/viewsonic-va2732-h-27-ips-monitor-1-78721-2192843-120924030435651.png' },
        ];

        // Use centralized product data from data.js
        const products = monitorProducts;
        let productsPerPage = 20;
        let currentPage = 1;
        let maxPrice = 0;
        let filteredProducts = products.slice();
        let selectedBrands = [];
        let selectedTypes = [];
        let selectedSizes = [];

        function filterProducts() {
            filteredProducts = products.filter(p => {
                const priceMatch = p.price >= maxPrice;
                const brandMatch = selectedBrands.length === 0 || selectedBrands.includes(p.brand);
                const typeMatch = selectedTypes.length === 0 || selectedTypes.includes(p.type);
                const sizeMatch = selectedSizes.length === 0 || selectedSizes.includes(p.size);
                return priceMatch && brandMatch && typeMatch && sizeMatch;
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
                <img src="${p.img || 'https://images.unsplash.com/photo-1527443224154-c4a3942d3acf?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80'}" alt="${p.title}" />
            </div>
            <div class="card-right">
                <div class="heart-icon" onclick="toggleWishlist(${i + 1})">&#10084;</div>
                <h2 class="product-title">${p.title}</h2>
                <h4 class="product-category">${p.type.toUpperCase()} MONITOR</h4>
                <div class="price">${p.priceDisplay}</div>
                <div class="description">
                    High-quality ${p.size}" ${p.type.toLowerCase()} monitor with stunning display and advanced features for ${p.type.toLowerCase()} use.
                </div>
                <div class="product-features">
                    <span class="feature-tag">${p.size}" Display</span>
                    <span class="feature-tag">${p.type}</span>
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

        // Size filter
        const sizeCheckboxes = document.querySelectorAll('.size-checkbox');
        sizeCheckboxes.forEach(cb => {
            cb.addEventListener('change', function () {
                selectedSizes = Array.from(sizeCheckboxes).filter(c => c.checked).map(c => c.value);
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
            const product = monitorProducts[productId - 1];
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
            const product = monitorProducts[productId - 1];
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