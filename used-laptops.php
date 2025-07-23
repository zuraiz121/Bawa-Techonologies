<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Used Laptops | Bawa Computers</title>
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
            <span class="breadcrumb" href="">Home / Used / <span class="current">Laptops</span></span>
        </div>
    </div>
   
    <div class="container">
        
    <!-- Main Content Layout -->
    <div class="page-layout-centered page-layout">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="sidebar-section category">
                <h3>USED LAPTOPS</h3>
            </div>
            <div class="sidebar-section price-range">
                <h4>PRICE RANGE</h4>
                <div class="slider-row">
                    <input type="range" min="0" max="200000" value="0" class="price-slider" id="price-slider">
                    <div class="price-values">
                        <span>0</span>
                        <span id="selected-price">0</span>
                        <span style="float:right">200,000</span>
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
            <div class="sidebar-section condition-filter">
                <h4>CONDITION</h4>
                <label><input type="checkbox" class="condition-checkbox" value="Excellent"> Excellent</label>
                <label><input type="checkbox" class="condition-checkbox" value="Good"> Good</label>
                <label><input type="checkbox" class="condition-checkbox" value="Fair"> Fair</label>
                <label><input type="checkbox" class="condition-checkbox" value="Refurbished"> Refurbished</label>
            </div>
            <div class="sidebar-section year-filter">
                <h4>YEAR</h4>
                <label><input type="checkbox" class="year-checkbox" value="2023"> 2023</label>
                <label><input type="checkbox" class="year-checkbox" value="2022"> 2022</label>
                <label><input type="checkbox" class="year-checkbox" value="2021"> 2021</label>
                <label><input type="checkbox" class="year-checkbox" value="2020"> 2020</label>
                <label><input type="checkbox" class="year-checkbox" value="2019"> 2019</label>
            </div>
        </aside>
        <!-- Main Content -->
        <main class="main-area">
            <h1 class="page-title">Used Laptops</h1>
            <div class="banner-text">Quality pre-owned laptops at affordable prices. All used laptops are tested and
                come with warranty.</div>
            <div class="results-bar">
                <span class="results-info" id="results-info">Showing 1-20 of 25</span>
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
        // Used Laptops product data
        const usedLaptopProducts = [
            {
                title: "Lenovo Thinkpad T420 Ci5 2nd 4GB 250GB 14",
                price: 20000,
                priceDisplay: "Rs. 20,000",
                stock: "Out of Stock",
                img: "https://static.webx.pk/files/78721/Images/t420-1-78721-2198553-140924095337188.jpg",
                condition: "Good",
                year: "2011",
                brand: "Lenovo"
            },
            {
                title: "Dell Latitude E6420 Ci5 2nd 4GB 250GB 14",
                price: 21000,
                priceDisplay: "Rs. 21,000",
                stock: "In Stock",
                img: "https://static.webx.pk/files/78721/Images/6420-1-78721-2198502-140924104840633.jpg",
                condition: "Good",
                year: "2011",
                brand: "Dell"
            },
            {
                title: "Lenovo Thinkpad T520 Ci5 2nd 4GB 250GB 15.6",
                price: 23000,
                priceDisplay: "Rs. 23,000",
                stock: "Out of Stock",
                img: "https://static.webx.pk/files/78721/Images/t520-2-78721-2198554-140924095621420.jpg",
                condition: "Good",
                year: "2011",
                brand: "Lenovo"
            },
            {
                title: "Dell Latitude E6420 Ci7 2nd 4GB 250GB 14",
                price: 24000,
                priceDisplay: "Rs. 24,000",
                stock: "In Stock",
                img: "https://static.webx.pk/files/78721/Images/6420-11-78721-2198503-140924115002005.jpg",
                condition: "Good",
                year: "2011",
                brand: "Dell"
            },
            {
                title: "Lenovo Thinkpad T430 Ci5 3rd 4GB 500GB 14",
                price: 26000,
                priceDisplay: "Rs. 26,000",
                stock: "Out of Stock",
                img: "https://static.webx.pk/files/78721/Images/t430-1-78721-2198559-140924101301526.jpg",
                condition: "Good",
                year: "2012",
                brand: "Lenovo"
            },
            {
                title: "Dell Latitude E5440 Ci3 4th 4GB 500GB 14",
                price: 27500,
                priceDisplay: "Rs. 27,500",
                stock: "In Stock",
                img: "https://static.webx.pk/files/78721/Images/e5450-1-78721-2198521-140924011653684.jpg",
                condition: "Good",
                year: "2013",
                brand: "Dell"
            },
            {
                title: "HP Probook 640 G1 Ci5 4th 4GB 500GB 14",
                price: 29500,
                priceDisplay: "Rs. 29,500",
                stock: "In Stock",
                img: "https://static.webx.pk/files/78721/Images/640-111-78721-2198531-140924114535962.jpg",
                condition: "Good",
                year: "2013",
                brand: "HP"
            },
            {
                title: "Dell Latitude E6440 Ci5 4th 4GB 500GB 14",
                price: 30000,
                priceDisplay: "Rs. 30,000",
                stock: "On Order Only",
                img: "https://static.webx.pk/files/78721/Images/6440-2-78721-2198506-140924115710242.jpg",
                condition: "Good",
                year: "2013",
                brand: "Dell"
            },
            {
                title: "Lenovo Thinkpad T430 Ci5 3rd 8GB 256GB 14",
                price: 31500,
                priceDisplay: "Rs. 31,500",
                stock: "Out of Stock",
                img: "https://static.webx.pk/files/78721/Images/t430-11-78721-2198562-140924103237887.jpg",
                condition: "Good",
                year: "2012",
                brand: "Lenovo"
            },
            {
                title: "Lenovo Thinkpad T540P Ci5 4th 4GB 500GB 15.6",
                price: 32000,
                priceDisplay: "Rs. 32,000",
                stock: "In Stock",
                img: "https://static.webx.pk/files/78721/Images/t520-3-78721-2198555-140924100309713.jpg",
                condition: "Good",
                year: "2013",
                brand: "Lenovo"
            },
            {
                title: "HP Probook 650 G1 Ci5 4th 4GB 500GB 15.6",
                price: 35000,
                priceDisplay: "Rs. 35,000",
                stock: "In Stock",
                img: "https://static.webx.pk/files/78721/Images/650-11-78721-2198542-140924113336153.jpg",
                condition: "Good",
                year: "2013",
                brand: "HP"
            },
            {
                title: "Lenovo Thinkpad T540P Ci5 4th 4GB 256GB 15.6",
                price: 35000,
                priceDisplay: "Rs. 35,000",
                stock: "In Stock",
                img: "https://static.webx.pk/files/78721/Images/t540-2-78721-2198556-140924095951866.jpg",
                condition: "Good",
                year: "2013",
                brand: "Lenovo"
            },
            {
                title: "HP Elitebook 840 G2 Ci5 5th 4GB 500GB 14",
                price: 36000,
                priceDisplay: "Rs. 36,000",
                stock: "On Order Only",
                img: "https://static.webx.pk/files/78721/Images/840-g2-1-78721-2198532-140924125220305.jpg",
                condition: "Good",
                year: "2014",
                brand: "HP"
            },
            {
                title: "Lenovo Thinkpad T540P Ci5 4th 8GB 256GB 15.6",
                price: 36500,
                priceDisplay: "Rs. 36,500",
                stock: "In Stock",
                img: "https://static.webx.pk/files/78721/Images/15.-6-78721-2198557-210924091141381.jpg",
                condition: "Good",
                year: "2013",
                brand: "Lenovo"
            },
            {
                title: "Dell Latitude E7450 Ci5 5th 4GB 500GB 14",
                price: 37000,
                priceDisplay: "Rs. 37,000",
                stock: "In Stock",
                img: "https://static.webx.pk/files/78721/Images/5570-78721-2198507-140924110535669.jpg",
                condition: "Good",
                year: "2014",
                brand: "Dell"
            },
            {
                title: "Dell Latitude E7270 Ci5 6th 8GB 256GB 12.5",
                price: 38500,
                priceDisplay: "Rs. 38,500",
                stock: "In Stock",
                img: "https://static.webx.pk/files/78721/Images/7270-1-78721-2198508-140924110413758.jpg",
                condition: "Good",
                year: "2015",
                brand: "Dell"
            },
            {
                title: "Dell Latitude E5470 Ci5 6th 8GB 256GB 14",
                price: 39500,
                priceDisplay: "Rs. 39,500",
                stock: "In Stock",
                img: "https://static.webx.pk/files/78721/Images/5470-11-78721-2198517-140924010544451.jpg",
                condition: "Good",
                year: "2015",
                brand: "Dell"
            },
            {
                title: "Dell Latitude E3490 Ci3 7th Gen 8GB 128GB 320GB 14",
                price: 40000,
                priceDisplay: "Rs. 40,000",
                stock: "In Stock",
                img: "https://static.webx.pk/files/78721/Images/3450-11-78721-2198519-140924011049304.jpg",
                condition: "Good",
                year: "2016",
                brand: "Dell"
            },
            {
                title: "Lenovo Thinkpad T460 Ci5 6th 8GB 256GB 14",
                price: 40000,
                priceDisplay: "Rs. 40,000",
                stock: "In Stock",
                img: "https://static.webx.pk/files/78721/Images/t560-2-78721-2198558-140924101101605.jpg",
                condition: "Good",
                year: "2015",
                brand: "Lenovo"
            },
            {
                title: "HP Probook 640 G2 Ci5 6th 8GB 256GB 14",
                price: 40000,
                priceDisplay: "Rs. 40,000",
                stock: "On Order Only",
                img: "https://static.webx.pk/files/78721/Images/640-1-78721-2198534-140924111618049.jpg",
                condition: "Good",
                year: "2015",
                brand: "HP"
            }
        ];

        let productsPerPage = 20;
        let currentPage = 1;
        let maxPrice = 0;
        let filteredProducts = usedLaptopProducts.slice();
        let selectedBrands = [];
        let selectedConditions = [];
        let selectedYears = [];

        function filterProducts() {
            filteredProducts = usedLaptopProducts.filter(p => {
                const priceMatch = p.price >= maxPrice;
                const brandMatch = selectedBrands.length === 0 || selectedBrands.includes(p.brand);
                const conditionMatch = selectedConditions.length === 0 || selectedConditions.includes(p.condition);
                const yearMatch = selectedYears.length === 0 || selectedYears.includes(p.year);
                return priceMatch && brandMatch && conditionMatch && yearMatch;
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
                <h4 class="product-category">USED LAPTOP</h4>
                <div class="price">${p.priceDisplay}</div>
                <div class="description">
                    Quality ${p.condition.toLowerCase()} used laptop from ${p.year} with excellent performance and value.
                </div>
                <div class="product-features">
                    <span class="feature-tag">${p.brand}</span>
                    <span class="feature-tag">${p.condition}</span>
                    <span class="feature-tag">${p.year}</span>
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

        // Condition filter
        const conditionCheckboxes = document.querySelectorAll('.condition-checkbox');
        conditionCheckboxes.forEach(cb => {
            cb.addEventListener('change', function () {
                selectedConditions = Array.from(conditionCheckboxes).filter(c => c.checked).map(c => c.value);
                currentPage = 1;
                filterProducts();
                renderProducts(currentPage);
                renderPagination();
            });
        });

        // Year filter
        const yearCheckboxes = document.querySelectorAll('.year-checkbox');
        yearCheckboxes.forEach(cb => {
            cb.addEventListener('change', function () {
                selectedYears = Array.from(yearCheckboxes).filter(c => c.checked).map(c => c.value);
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
            const product = usedLaptopProducts[productId - 1];
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
            const product = usedLaptopProducts[productId - 1];
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