<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desktop Memories | Bawa Computers</title>
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
            <span class="breadcrumb" href="">Home / More / <span class="current">Desktop Memories</span></span>
        </div>
    </div>
            <div class="container">
                <!-- Main Content Layout -->
                <div class="page-layout-centered page-layout">
                    <!-- Sidebar -->
                    <aside class="sidebar">
                        <div class="sidebar-section category">
                            <h3>DESKTOP MEMORIES</h3>
                        </div>
                        <div class="sidebar-section price-range">
                <h4>PRICE RANGE</h4>
                <div class="slider-row">
                    <input type="range" min="0" max="40000" value="0" class="price-slider" id="price-slider">
                    <div class="price-values">
                        <span>0</span>
                        <span id="selected-price">0</span>
                        <span style="float:right">40,000</span>
                    </div>
                </div>
                <button class="btn btn-blue" id="price-go">GO</button>
            </div>
            <div class="sidebar-section brand-filter">
                <h4>BRAND</h4>
                <label><input type="checkbox" class="brand-checkbox" value="Corsair"> Corsair</label>
                <label><input type="checkbox" class="brand-checkbox" value="G.Skill"> G.Skill</label>
                <label><input type="checkbox" class="brand-checkbox" value="Kingston"> Kingston</label>
                <label><input type="checkbox" class="brand-checkbox" value="Crucial"> Crucial</label>
                <label><input type="checkbox" class="brand-checkbox" value="Team Group"> Team Group</label>
                <label><input type="checkbox" class="brand-checkbox" value="ADATA"> ADATA</label>
            </div>
            <div class="sidebar-section capacity-filter">
                <h4>CAPACITY</h4>
                <label><input type="checkbox" class="capacity-checkbox" value="8GB"> 8GB</label>
                <label><input type="checkbox" class="capacity-checkbox" value="16GB"> 16GB</label>
                <label><input type="checkbox" class="capacity-checkbox" value="32GB"> 32GB</label>
                <label><input type="checkbox" class="capacity-checkbox" value="64GB"> 64GB</label>
            </div>
            <div class="sidebar-section speed-filter">
                <h4>SPEED</h4>
                <label><input type="checkbox" class="speed-checkbox" value="DDR4"> DDR4</label>
                <label><input type="checkbox" class="speed-checkbox" value="DDR5"> DDR5</label>
            </div>
        </aside>
        <!-- Main Content -->
        <main class="main-area">
            <h1 class="page-title">Desktop Memories</h1>
            <div class="banner-text">High-performance desktop RAM modules for gaming, content creation, and professional
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
        // Updated Desktop Memories product data with image URLs
        const desktopMemoryProducts = [
            {
                title: 'Lexar DDR4 8GB 3200Bus',
                price: 5800,
                priceDisplay: 'Rs. 5,800',
                stock: 'In Stock',
                img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/3200-1-78721-2200839-200924050452071.jpg',
                capacity: '8GB',
                speed: 'DDR4 3200MHz',
                brand: 'Lexar'
            },
            {
                title: 'Apacer DDR4 16GB (2 x 8GB) 3600MHz with Heatsink',
                price: 9500,
                priceDisplay: 'Rs. 9,500',
                stock: 'In Stock',
                img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/nox-ddr4-black-01-78721-0-210625104532777.png',
                capacity: '16GB (2x8GB)',
                speed: 'DDR4 3600MHz',
                brand: 'Apacer'
            },
            {
                title: 'Lexar DDR4 16GB 3200Bus',
                price: 9500,
                priceDisplay: 'Rs. 9,500',
                stock: 'In Stock',
                img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/1-czone.com.pk-1540-12076-090921064921-78721-2200840-070125114544712.jpg',
                capacity: '16GB',
                speed: 'DDR4 3200MHz',
                brand: 'Lexar'
            },
            {
                title: 'Lexar DDR5 16GB 5600MHz',
                price: 14200,
                priceDisplay: 'Rs. 14,200',
                stock: 'In Stock',
                img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/3af32d32f27d4b8daabc7b6c439182de-2603-2252949-13112401413457-78721-0-200125013117689.png',
                capacity: '16GB',
                speed: 'DDR5 5600MHz',
                brand: 'Lexar'
            },
            {
                title: 'Corsair VENGEANCE® 16GB (1x16GB) DDR5 DRAM 5200MT/s CL40 Memory Kit',
                price: 15000,
                priceDisplay: 'Rs. 15,000',
                stock: 'In Stock',
                img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/515pmcbekfl.-sx679--78721-0-080325072302935.jpg',
                capacity: '16GB (1x16GB)',
                speed: 'DDR5 5200MT/s',
                brand: 'Corsair'
            },
            {
                title: 'APACER DDR5 16GB (2 x 8GB) 5200MHz with Heatsink',
                price: 15000,
                priceDisplay: 'Rs. 15,000',
                stock: 'In Stock',
                img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/nox-ddr5-01-78721-0-210625110440111.png',
                capacity: '16GB (2x8GB)',
                speed: 'DDR5 5200MHz',
                brand: 'Apacer'
            },
            {
                title: 'Lexar DDR4 32GB 3200Bus',
                price: 17000,
                priceDisplay: 'Rs. 17,000',
                stock: 'In Stock',
                img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/3200-21-78721-2200845-200924052921915.jpg',
                capacity: '32GB',
                speed: 'DDR4 3200MHz',
                brand: 'Lexar'
            },
            {
                title: 'Corsair VENGEANCE® RGB 16GB (1x16GB) DDR5 DRAM 5600MT/s CL40 Memory Kit',
                price: 17500,
                priceDisplay: 'Rs. 17,500',
                stock: 'In Stock',
                img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/61d6y9-vu1l.-ac-sl1500--1-1540-17917-010325094600-78721-0-080325110947849.jpg',
                capacity: '16GB (1x16GB)',
                speed: 'DDR5 5600MT/s',
                brand: 'Corsair'
            },
            {
                title: 'Corsair VENGEANCE RGB PRO 16GB (2 x 8GB) DDR4 DRAM 3600MHz C18 Memory Kit',
                price: 18500,
                priceDisplay: 'Rs. 18,500',
                stock: 'In Stock',
                img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/20-czone.com.pk-1540-11500-050521092304-78721-0-080325064541706.jpg',
                capacity: '16GB (2x8GB)',
                speed: 'DDR4 3600MHz',
                brand: 'Corsair'
            },
            {
                title: 'Corsair VENGEANCE® 16GB (2x8GB) DDR5 DRAM 5200MT/s CL40 AMD EXPO & Intel XMP Memory Kit',
                price: 22000,
                priceDisplay: 'Rs. 22,000',
                stock: 'In Stock',
                img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/vengeance-ddr5-grey-amd-01-78721-0-080325090747467.png',
                capacity: '16GB (2x8GB)',
                speed: 'DDR5 5200MT/s',
                brand: 'Corsair'
            },
            {
                title: 'Kingston DDR5 32GB 5600 RAM',
                price: 23000,
                priceDisplay: 'Rs. 23,000',
                stock: 'In Stock',
                img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/ddr5-non-ecc-unbuffered-dimm-2r-x8-1-lg-78721-0-220125090705374.jpg',
                capacity: '32GB',
                speed: 'DDR5 5600MHz',
                brand: 'Kingston'
            },
            {
                title: 'APACER DDR5 32GB (2 x 16GB) 5200MHz RGB with Heatsink',
                price: 25500,
                priceDisplay: 'Rs. 25,500',
                stock: 'In Stock',
                img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/panther-rgb-ddr5-01-78721-0-210625110739028.png',
                capacity: '32GB (2x16GB)',
                speed: 'DDR5 5200MHz',
                brand: 'Apacer'
            },
            {
                title: 'Corsair VENGEANCE® 32GB (1x32GB) DDR5 DRAM 5600MT/s CL40 Memory Kit',
                price: 33500,
                priceDisplay: 'Rs. 33,500',
                stock: 'In Stock',
                img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/vengeance-ddr5-1up-32gb-black-10-78721-0-080325103839851.png',
                capacity: '32GB (1x32GB)',
                speed: 'DDR5 5600MT/s',
                brand: 'Corsair'
            },
            {
                title: 'Corsair VENGEANCE® 32GB (2x16GB) DDR5 DRAM 5600MT/s CL40 AMD EXPO & Intel XMP Memory Kit',
                price: 34000,
                priceDisplay: 'Rs. 34,000',
                stock: 'In Stock',
                img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/1-1540-17074-141024084712-78721-0-080325101609306.jpg',
                capacity: '32GB (2x16GB)',
                speed: 'DDR5 5600MT/s',
                brand: 'Corsair'
            },
            {
                title: 'Corsair VENGEANCE® 32GB (2x16GB) DDR5 DRAM 6000MT/s CL36 Memory Kit',
                price: 35000,
                priceDisplay: 'Rs. 35,000',
                stock: 'In Stock',
                img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/vengeance-ddr5-blk-13-2up-78721-0-080325080455618.png',
                capacity: '32GB (2x16GB)',
                speed: 'DDR5 6000MT/s',
                brand: 'Corsair'
            },
            {
                title: 'Corsair VENGEANCE® 32GB (2x16GB) DDR5 DRAM 6000MT/s CL36 AMD EXPO & Intel XMP Memory Kit',
                price: 35000,
                priceDisplay: 'Rs. 35,000',
                stock: 'In Stock',
                img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/corsair-cmk32gx5m2e6000z36-1536x1536-78721-0-080325102909081.png',
                capacity: '32GB (2x16GB)',
                speed: 'DDR5 6000MT/s',
                brand: 'Corsair'
            },
            {
                title: 'Corsair VENGEANCE® RGB 32GB (2x16GB) DDR5 DRAM 5200MT/s CL40 AMD EXPO & Intel XMP Memory Kit',
                price: 36000,
                priceDisplay: 'Rs. 36,000',
                stock: 'In Stock',
                img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/corsair-cmh32gx5m2b5200z40k-78721-0-080325062539010.png',
                capacity: '32GB (2x16GB)',
                speed: 'DDR5 5200MT/s',
                brand: 'Corsair'
            },
            {
                title: 'Corsair VENGEANCE RGB 32GB (2x16GB) DDR5 DRAM 5600MHz C40 Memory Kit',
                price: 36500,
                priceDisplay: 'Rs. 36,500',
                stock: 'In Stock',
                img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/1-czone.com.pk-1540-14350-090223095113-78721-0-080325064141253.jpg',
                capacity: '32GB (2x16GB)',
                speed: 'DDR5 5600MHz',
                brand: 'Corsair'
            },
            {
                title: 'Corsair VENGEANCE® RGB 32GB (2x16GB) DDR5 DRAM 5600MT/s CL40 Memory Kit',
                price: 36500,
                priceDisplay: 'Rs. 36,500',
                stock: 'In Stock',
                img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/4-czone.com.pk-1540-17075-141024090101-78721-0-080325094849816.jpg',
                capacity: '32GB (2x16GB)',
                speed: 'DDR5 5600MT/s',
                brand: 'Corsair'
            },
            {
                title: 'Corsair VENGEANCE® RGB 32GB (2x16GB) DDR5 DRAM 6000MT/s CL36 AMD EXPO & Intel XMP Memory Kit',
                price: 37500,
                priceDisplay: 'Rs. 37,500',
                stock: 'In Stock',
                img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/copy-copy-4-czone.com.pk-1540-17076-141024085739-78721-0-080325100147635.jpg',
                capacity: '32GB (2x16GB)',
                speed: 'DDR5 6000MT/s',
                brand: 'Corsair'
            }
        ];


        let productsPerPage = 20;
        let currentPage = 1;
        let maxPrice = 0;
        let filteredProducts = desktopMemoryProducts.slice();
        let selectedBrands = [];
        let selectedCapacities = [];
        let selectedSpeeds = [];

        function filterProducts() {
            filteredProducts = desktopMemoryProducts.filter(p => {
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
                <h4 class="product-category">DESKTOP MEMORY</h4>
                <div class="price">${p.priceDisplay}</div>
                <div class="description">
                    High-performance ${p.capacity} desktop memory with ${p.speed} speed for optimal system performance and gaming.
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

        // Capacity filter
        const capacityCheckboxes = document.querySelectorAll('.capacity-checkbox');
        capacityCheckboxes.forEach(cb => {
            cb.addEventListener('change', function () {
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
            cb.addEventListener('change', function () {
                selectedSpeeds = Array.from(speedCheckboxes).filter(c => c.checked).map(c => c.value);
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
            const product = desktopMemoryProducts[productId - 1];
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
            const product = desktopMemoryProducts[productId - 1];
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