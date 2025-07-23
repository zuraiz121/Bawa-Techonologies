<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Storage Drives | Bawa Computers</title>
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
            <span class="breadcrumb" href="">Home / <span class="current">Storage Drives</span></span>
        </div>
    </div>
            <div class="container">
                <!-- Main Content Layout -->
                <div class="page-layout-centered page-layout">
                    <!-- Sidebar -->
                    <aside class="sidebar">
                        <div class="sidebar-section category">
                            <h3>STORAGE DRIVES</h3>
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
                <label><input type="checkbox" class="brand-checkbox" value="Samsung"> Samsung</label>
                <label><input type="checkbox" class="brand-checkbox" value="Western Digital"> Western Digital</label>
                <label><input type="checkbox" class="brand-checkbox" value="Seagate"> Seagate</label>
                <label><input type="checkbox" class="brand-checkbox" value="Kingston"> Kingston</label>
                <label><input type="checkbox" class="brand-checkbox" value="Crucial"> Crucial</label>
                <label><input type="checkbox" class="brand-checkbox" value="Toshiba"> Toshiba</label>
            </div>
            <div class="sidebar-section category-filter">
                <h4>DRIVE TYPE</h4>
                <label><input type="checkbox" class="type-checkbox" value="SSD"> SSD</label>
                <label><input type="checkbox" class="type-checkbox" value="HDD"> HDD</label>
                <label><input type="checkbox" class="type-checkbox" value="NVMe"> NVMe SSD</label>
                <label><input type="checkbox" class="type-checkbox" value="External"> External Drives</label>
            </div>
            <div class="sidebar-section capacity-filter">
                <h4>CAPACITY</h4>
                <label><input type="checkbox" class="capacity-checkbox" value="128GB"> 128GB</label>
                <label><input type="checkbox" class="capacity-checkbox" value="256GB"> 256GB</label>
                <label><input type="checkbox" class="capacity-checkbox" value="512GB"> 512GB</label>
                <label><input type="checkbox" class="capacity-checkbox" value="1TB"> 1TB</label>
                <label><input type="checkbox" class="capacity-checkbox" value="2TB"> 2TB</label>
                <label><input type="checkbox" class="capacity-checkbox" value="4TB"> 4TB+</label>
            </div>
        </aside>
        <!-- Main Content -->
        <main class="main-area">
            <h1 class="page-title">Storage Drives</h1>
            <div class="banner-text">High-speed SSDs, reliable HDDs, and external storage solutions for all your data
                needs.</div>
                <div class="results-bar">
                    <span class="results-info" id="results-info">Showing 1-20 of 45</span>
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
                    <li class="page-item"><a href="#">3</a></li>
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
        // Storage Drives product data
        const driveProducts = [
            // Kingston
            {
                title: 'Kingston 4TB FURY Renegade NVMe SSD',
                price: 0,
                priceDisplay: '10000',
                stock: 'In Stock',
                img: 'https://static.webx.pk/files/78721/Images/kingston-ssd-78721-2208899-191124121636612.png',
                type: 'NVMe',
                capacity: '4TB',
                brand: 'Kingston'
            },

            // Seagate
            {
                title: 'Seagate One Touch 14TB',
                price: 0,
                priceDisplay: '25000',
                stock: 'In Stock',
                img: 'https://static.webx.pk/files/78721/Images/1115-78721-2195625-110924063607048.jpg',
                type: 'External',
                capacity: '14TB',
                brand: 'Seagate'
            },

            // Western Digital
            {
                title: 'WD RED 4TB NVME SSD',
                price: 0,
                priceDisplay: '10000',
                stock: 'In Stock',
                img: 'https://static.webx.pk/files/78721/Images/wd-red-ssd-price-in-pakistan-galaxypk-1-78721-2195747-120924063031555.jpg',
                type: 'NVMe',
                capacity: '4TB',
                brand: 'Western Digital'
            },
            {
                title: 'WD RED 2TB NVME SSD',
                price: 0,
                priceDisplay: '5000',
                stock: 'In Stock',
                img: 'https://static.webx.pk/files/78721/Images/sn-700-2-78721-2195746-120924110950986.jpg',
                type: 'NVMe',
                capacity: '2TB',
                brand: 'Western Digital'
            },

            // Lexar
            {
                title: 'Lexar 32GB Micro SD Card',
                price: 1000,
                priceDisplay: 'Rs. 1,000',
                stock: 'In Stock',
                img: 'https://static.webx.pk/files/78721/Images/lexar-memorycard---2-78721-2195663-120924014044573.jpg',
                type: 'External',
                capacity: '32GB',
                brand: 'Lexar'
            },

            // Dahua
            {
                title: 'DAHUA USB 32GB 3.0 DHI-U106',
                price: 1200,
                priceDisplay: 'Rs. 1,200',
                stock: 'In Stock',
                img: 'https://static.webx.pk/files/78721/Images/usb1-thumb-78721-0-250924095505562.png',
                type: 'External',
                capacity: '32GB',
                brand: 'Dahua'
            },

            // SanDisk
            {
                title: 'Sandisk 32GB Micro SD Ultra Card Class 10',
                price: 1300,
                priceDisplay: 'Rs. 1,300',
                stock: 'In Stock',
                img: 'https://static.webx.pk/files/78721/Images/ultra-card-2-78721-2195664-120924014313832.jpg',
                type: 'External',
                capacity: '32GB',
                brand: 'SanDisk'
            },

            {
                title: 'Sandisk Ultra Flair 64GB USB 3.0 USB',
                price: 2000,
                priceDisplay: 'Rs. 2,000',
                stock: 'In Stock',
                img: 'https://static.webx.pk/files/78721/Images/64gb-2-78721-2195661-120924013334037.jpg',
                type: 'External',
                capacity: '64GB',
                brand: 'SanDisk'
            },

            {
                title: 'Sandisk Ultra Flair 128GB USB 3.0 USB',
                price: 3200,
                priceDisplay: 'Rs. 3,200',
                stock: 'In Stock',
                img: 'https://static.webx.pk/files/78721/Images/ktc-product-usb-dtx-64gb-3-lg-78721-0-250924093217482.jpg',
                type: 'External',
                capacity: '128GB',
                brand: 'SanDisk'
            },

            // Kingston (continued)
            {
                title: 'Kingston 64GB Micro SD Card Class10',
                price: 1800,
                priceDisplay: 'Rs. 1,800',
                stock: 'In Stock',
                img: 'https://static.webx.pk/files/78721/Images/copy-copy-copy-61yjkz7mf5l.-sl1100--1540-8581-230919073209-78721-0-250924091145071.jpg',
                type: 'External',
                capacity: '64GB',
                brand: 'Kingston'
            },
            {
                title: 'Kingston 64GB USB Drive 3.2 Exodia',
                price: 1900,
                priceDisplay: 'Rs. 1,900',
                stock: 'In Stock',
                img: 'https://static.webx.pk/files/78721/Images/b06-1-78721-2195643-280924053751128.jpg',
                type: 'External',
                capacity: '64GB',
                brand: 'Kingston'
            },
            {
                title: 'Kingston 128GB USB Drive 3.2 Exodia',
                price: 2800,
                priceDisplay: 'Rs. 2,800',
                stock: 'In Stock',
                img: 'https://static.webx.pk/files/78721/Images/698ea821df26bf4f8dd8037e531caa24-6a0b836b-dc19-4d99-bebb-6b5-78721-2195641-110924011547253.jpg',
                type: 'External',
                capacity: '128GB',
                brand: 'Kingston'
            },
            {
                title: 'Kingston 128GB Micro SD Card Class10',
                price: 2900,
                priceDisplay: 'Rs. 2,900',
                stock: 'In Stock',
                img: 'https://static.webx.pk/files/78721/Images/128gb-1-78721-2195662-120924013714249.jpg',
                type: 'External',
                capacity: '128GB',
                brand: 'Kingston'
            },
            {
                title: 'Kingston 256GB USB Drive 3.2 Exodia',
                price: 5500,
                priceDisplay: 'Rs. 5,500',
                stock: 'In Stock',
                img: 'https://static.webx.pk/files/78721/Images/copy-copy-copy-61yjkz7mf5l.-sl1100--1540-8581-230919073209-78721-0-250924094853661.jpg',
                type: 'External',
                capacity: '256GB',
                brand: 'Kingston'
            },

            // Silicon Power
            {
                title: 'Silicon Power B06 128GB USB 3.0 Blaze',
                price: 2800,
                priceDisplay: 'Rs. 2,800',
                stock: 'In Stock',
                img: 'https://static.webx.pk/files/78721/Images/lexar-1-78721-2195707-120924112054319.jpg',
                type: 'External',
                capacity: '128GB',
                brand: 'Silicon Power'
            },

            // Lexar SSD
            {
                title: 'Lexar 128GB NS100 SATA SSD',
                price: 4000,
                priceDisplay: 'Rs. 4,000',
                stock: 'In Stock',
                img: 'https://static.webx.pk/files/78721/Images/binary-details-7-78721-0-240924115916908.jpg',
                type: 'SSD',
                capacity: '128GB',
                brand: 'Lexar'
            },

            // Kingmax
            {
                title: 'KINGMAX SSD 128GB NVMe M.2',
                price: 4600,
                priceDisplay: 'Rs. 4,600',
                stock: 'In Stock',
                img: 'https://static.webx.pk/files/78721/Images/1024-10-78721-0-190425010826342.png',
                type: 'NVMe',
                capacity: '128GB',
                brand: 'Kingmax'
            },

            // Verbatim
            {
                title: 'Verbatim 256GB Vi550 SATA III 2.5” Internal SSD',
                price: 5000,
                priceDisplay: 'Rs. 5,000',
                stock: 'In Stock',
                img: 'https://static.webx.pk/files/78721/Images/wd-green-ssd-240gb-left.png.wdthumb.1280.1280-78721-0-250924081220559.png',
                type: 'SSD',
                capacity: '256GB',
                brand: 'Verbatim'
            },

            // MSI
            {
                title: 'MSI SPATIUM S270 240GB SATA 2.5"',
                price: 5200,
                priceDisplay: 'Rs. 5,200',
                stock: 'In Stock',
                img: 'https://static.webx.pk/files/78721/Images/698ea821df26bf4f8dd8037e531caa24-6a0b836b-dc19-4d99-bebb-6b5-78721-2195642-110924011550919.jpg',
                type: 'SSD',
                capacity: '240GB',
                brand: 'MSI'
            },

            // WD
            {
                title: 'WD 240GB Green SATA SSD',
                price: 5750,
                priceDisplay: 'Rs. 5,750',
                stock: 'In Stock',
                img: 'https://d2j6dbq0eux0bg.cloudfront.net/images/1107006/3405878547.jpg',
                type: 'SSD',
                capacity: '240GB',
                brand: 'Western Digital'
            }
        ];


        let productsPerPage = 20;
        let currentPage = 1;
        let maxPrice = 0;
        let filteredProducts = driveProducts.slice();
        let selectedBrands = [];
        let selectedTypes = [];
        let selectedCapacities = [];

        function filterProducts() {
            filteredProducts = driveProducts.filter(p => {
                const priceMatch = p.price >= maxPrice;
                const brandMatch = selectedBrands.length === 0 || selectedBrands.includes(p.brand);
                const typeMatch = selectedTypes.length === 0 || selectedTypes.includes(p.type);
                const capacityMatch = selectedCapacities.length === 0 || selectedCapacities.includes(p.capacity);
                return priceMatch && brandMatch && typeMatch && capacityMatch;
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
                <h4 class="product-category">${p.type.toUpperCase()} DRIVE</h4>
                <div class="price">${p.priceDisplay}</div>
                <div class="description">
                    High-quality ${p.type.toLowerCase()} drive with ${p.capacity} capacity for reliable data storage and fast performance.
                </div>
                <div class="product-features">
                    <span class="feature-tag">${p.type}</span>
                    <span class="feature-tag">${p.capacity}</span>
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
            const product = driveProducts[productId - 1];
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
            const product = driveProducts[productId - 1];
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