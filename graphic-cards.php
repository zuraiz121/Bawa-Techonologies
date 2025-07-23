<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graphics Cards | Bawa Computers</title>
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
            <span class="breadcrumb" href="">Home / More / <span class="current">Graphics Cards</span></span>
        </div>
    </div>
    <div class="container">
    <!-- Main Content Layout -->
    <div class="page-layout-centered page-layout">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="sidebar-section category">
                <h3>GRAPHICS CARDS</h3>
            </div>
            <div class="sidebar-section price-range">
                <h4>PRICE RANGE</h4>
                <div class="slider-row">
                    <input type="range" min="0" max="300000" value="0" class="price-slider" id="price-slider">
                    <div class="price-values">
                        <span>0</span>
                        <span id="selected-price">0</span>
                        <span style="float:right">300,000</span>
                    </div>
                </div>
                <button class="btn btn-blue" id="price-go">GO</button>
            </div>
            <div class="sidebar-section brand-filter">
                <h4>BRAND</h4>
                <label><input type="checkbox" class="brand-checkbox" value="NVIDIA"> NVIDIA</label>
                <label><input type="checkbox" class="brand-checkbox" value="AMD"> AMD</label>
                <label><input type="checkbox" class="brand-checkbox" value="ASUS"> ASUS</label>
                <label><input type="checkbox" class="brand-checkbox" value="MSI"> MSI</label>
                <label><input type="checkbox" class="brand-checkbox" value="Gigabyte"> Gigabyte</label>
                <label><input type="checkbox" class="brand-checkbox" value="Zotac"> Zotac</label>
            </div>
            <div class="sidebar-section series-filter">
                <h4>SERIES</h4>
                <label><input type="checkbox" class="series-checkbox" value="RTX 40"> RTX 40 Series</label>
                <label><input type="checkbox" class="series-checkbox" value="RTX 30"> RTX 30 Series</label>
                <label><input type="checkbox" class="series-checkbox" value="GTX 16"> GTX 16 Series</label>
                <label><input type="checkbox" class="series-checkbox" value="RX 7000"> RX 7000 Series</label>
                <label><input type="checkbox" class="series-checkbox" value="RX 6000"> RX 6000 Series</label>
            </div>
            <div class="sidebar-section memory-filter">
                <h4>MEMORY</h4>
                <label><input type="checkbox" class="memory-checkbox" value="4GB"> 4GB</label>
                <label><input type="checkbox" class="memory-checkbox" value="6GB"> 6GB</label>
                <label><input type="checkbox" class="memory-checkbox" value="8GB"> 8GB</label>
                <label><input type="checkbox" class="memory-checkbox" value="12GB"> 12GB</label>
                <label><input type="checkbox" class="memory-checkbox" value="16GB"> 16GB</label>
                <label><input type="checkbox" class="memory-checkbox" value="24GB"> 24GB</label>
            </div>
        </aside>
        <!-- Main Content -->
        <main class="main-area">
            <h1 class="page-title">Graphics Cards</h1>
            <div class="banner-text">High-performance graphics cards for gaming, content creation, and professional
                workstations.</div>
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
    <script src="js/script.js"></script>
    <script src="js/include.js"></script>
    <script src="js/notifications.js"></script>
    <script>
        // Graphics Cards product data
        const graphicsCardProducts = [
            { title: 'Ninja Nvidia GeForce GT 730 4GB DDR3', price: 18000, priceDisplay: 'Rs. 18,000', stock: 'In Stock', img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/gt-730-1-78721-2199709-160924092300314.jpg', series: 'GT 700', memory: '4GB', brand: 'Ninja' },
            { title: 'EASE E730 GeForce GT730 4GB GDDR5', price: 21000, priceDisplay: 'Rs. 21,000', stock: 'In Stock', img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/ease-gt730-graphic-card-pi-3-300x254-78721-0-221124100816893.png', series: 'GT 700', memory: '4GB', brand: 'EASE' },
            { title: 'EASE E740 GeForce GT740 4GB GDDR5', price: 22000, priceDisplay: 'Rs. 22,000', stock: 'In Stock', img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/ease-e740-graphic-card-pi-24-78721-0-221124101245049.jpg', series: 'GT 700', memory: '4GB', brand: 'EASE' },
            { title: 'Asus AMD VGA PH-RX550-4G-EVO', price: 44500, priceDisplay: 'Rs. 44,500', stock: 'In Stock', img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/3qfmhvjzxtpubrff-setting-xxx-0-90-end-1000-78721-0-070425115051764.png', series: 'RX 500', memory: '4GB', brand: 'ASUS' },
            { title: 'Inno3D GeForce GTX 1650 GDDR6 4GB TWIN X2 OC', price: 59000, priceDisplay: 'Rs. 59,000', stock: 'In Stock', img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/fan-1-78721-2200070-160924090844980.jpg', series: 'GTX 16', memory: '4GB', brand: 'Inno3D' },
            { title: 'EASE E305e GeForce RTX 3050 6GB DDR6', price: 60000, priceDisplay: 'Rs. 60,000', stock: 'In Stock', img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/1-2-78721-0-221124095158843.jpg', series: 'RTX 30', memory: '6GB', brand: 'EASE' },
            { title: 'EASE E305 GeForce RTX 3050 8GB DDR6', price: 74000, priceDisplay: 'Rs. 74,000', stock: 'In Stock', img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/rtx-3050-1-78721-2199698-160924092453086.jpg', series: 'RTX 30', memory: '8GB', brand: 'EASE' },
            { title: 'ASUS Dual GeForce RTX 3050 V2 OC Edition 8GB GDDR6', price: 80000, priceDisplay: 'Rs. 80,000', stock: 'In Stock', img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/asus-dual-geforce-rtx-3050-v2-8gb-gddr6-graphics-card-1-1-78721-0-070425113310309.png', series: 'RTX 30', memory: '8GB', brand: 'ASUS' },
            { title: 'Inno3D GeForce RTX 3050 GDDR6 8GB TWIN X2 OC', price: 96500, priceDisplay: 'Rs. 96,500', stock: 'In Stock', img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/rtx-1-78721-2200071-160924091010286.jpg', series: 'RTX 30', memory: '8GB', brand: 'Inno3D' },
            { title: 'ZOTAC GAMING GeForce RTX 5060 SOLO 8GB GDDR7', price: 110000, priceDisplay: 'Rs. 110,000', stock: 'Out of Stock', img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/zt-b50600g-10m-image01-78721-0-230625015431794.jpg', series: 'RTX 50', memory: '8GB', brand: 'ZOTAC' },
            { title: 'Gigabyte Radeon RX 9060 XT GAMING OC 8GB GDDR6', price: 112000, priceDisplay: 'Rs. 112,000', stock: 'In Stock', img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/images-2-78721-0-200625121825970.jpg', series: 'RX 9000', memory: '8GB', brand: 'Gigabyte' },
            { title: 'Gigabyte GeForce RTX 5060 Windforce Max OC 8GB GDDR7', price: 115000, priceDisplay: 'Rs. 115,000', stock: 'In Stock', img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/1000-5-78721-0-150725073729763.webp', series: 'RTX 50', memory: '8GB', brand: 'Gigabyte' },
            { title: 'PNY GeForce RTX 4060Ti 8GB VERTO Overclocked Dual Fan DLSS 3', price: 150000, priceDisplay: 'Rs. 150,000', stock: 'In Stock', img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/en-catalog-list-23h11-67ar9k85mv-78721-0-250625064549991.jpg', series: 'RTX 40', memory: '8GB', brand: 'PNY' },
            { title: 'PNY GeForce RTX 4060Ti 16GB VERTO Dual Fan DLSS 3', price: 163000, priceDisplay: 'Rs. 163,000', stock: 'In Stock', img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/61s-znfruql.-ac-sl1000--78721-0-250625070241972.jpg', series: 'RTX 40', memory: '16GB', brand: 'PNY' },
            { title: 'Gigabyte GeForce RTX 5060Ti Gaming OC 16GB GDDR7', price: 180000, priceDisplay: 'Rs. 180,000', stock: 'In Stock', img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/1000-6-78721-0-150725074942231.webp', series: 'RTX 50', memory: '16GB', brand: 'Gigabyte' },
            { title: 'PNY GeForce RTX 4070 SUPER 12GB VERTO Overclocked DLSS 3', price: 210000, priceDisplay: 'Rs. 210,000', stock: 'In Stock', img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/images-59-78721-0-250625071203022.jpg', series: 'RTX 40', memory: '12GB', brand: 'PNY' },
            { title: 'MSI GeForce RTX 4070 VENTUS 2X 12G OC', price: 222000, priceDisplay: 'Rs. 222,000', stock: 'In Stock', img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/4070-1-78721-2199706-160924093921002.jpg', series: 'RTX 40', memory: '12GB', brand: 'MSI' },
            { title: 'ZOTAC GAMING GeForce RTX 5070 12GB SOLID', price: 245000, priceDisplay: 'Rs. 245,000', stock: 'In Stock', img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/zt-b50700d-10p-image01-78721-0-300425083229912.jpg', series: 'RTX 50', memory: '12GB', brand: 'ZOTAC' },
            { title: 'ZOTAC GAMING GeForce RTX 5070 AMP White Edition 12GB GDDR7', price: 250000, priceDisplay: 'Rs. 250,000', stock: 'In Stock', img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/zt-b50700fq-10p-image02-78721-0-300425094818178.jpg', series: 'RTX 50', memory: '12GB', brand: 'ZOTAC' },
            { title: 'Gigabyte GeForce RTX 5070Ti Windforce OC SFF 16GB GDDR7', price: 305000, priceDisplay: 'Rs. 305,000', stock: 'In Stock', img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/1000-7-78721-0-150725080905850.webp', series: 'RTX 50', memory: '16GB', brand: 'Gigabyte' }
        ];

        let productsPerPage = 20;
        let currentPage = 1;
        let maxPrice = 0;
        let filteredProducts = graphicsCardProducts.slice();
        let selectedBrands = [];
        let selectedSeries = [];
        let selectedMemories = [];

        function filterProducts() {
            filteredProducts = graphicsCardProducts.filter(p => {
                const priceMatch = p.price >= maxPrice;
                const brandMatch = selectedBrands.length === 0 || selectedBrands.includes(p.brand);
                const seriesMatch = selectedSeries.length === 0 || selectedSeries.includes(p.series);
                const memoryMatch = selectedMemories.length === 0 || selectedMemories.includes(p.memory);
                return priceMatch && brandMatch && seriesMatch && memoryMatch;
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
                <h4 class="product-category">GRAPHICS CARD</h4>
                <div class="price">${p.priceDisplay}</div>
                <div class="description">
                    High-performance ${p.series} graphics card with ${p.memory} memory for exceptional gaming and professional graphics work.
                </div>
                <div class="product-features">
                    <span class="feature-tag">${p.series}</span>
                    <span class="feature-tag">${p.memory}</span>
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

        // Series filter
        const seriesCheckboxes = document.querySelectorAll('.series-checkbox');
        seriesCheckboxes.forEach(cb => {
            cb.addEventListener('change', function () {
                selectedSeries = Array.from(seriesCheckboxes).filter(c => c.checked).map(c => c.value);
                currentPage = 1;
                filterProducts();
                renderProducts(currentPage);
                renderPagination();
            });
        });

        // Memory filter
        const memoryCheckboxes = document.querySelectorAll('.memory-checkbox');
        memoryCheckboxes.forEach(cb => {
            cb.addEventListener('change', function () {
                selectedMemories = Array.from(memoryCheckboxes).filter(c => c.checked).map(c => c.value);
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
            const product = graphicsCardProducts[productId - 1];
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
            const product = graphicsCardProducts[productId - 1];
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