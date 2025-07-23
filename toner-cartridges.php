<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Toner Cartridges | Bawa Computers</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="icon" type="image/png" href="images/favicon.jpg" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/new-cards.css" />
</head>

<body>
    <!-- Header -->
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

    <header class="main-header">
        <div class="container header-flex">
            <img src="images/favicon.jpg" style="width: 50px; height: 50px;" alt="Bawa Computers Logo" class="logo-img">
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <div class="logo">Bawa Computers</div>
            <div class="search-bar">
                <input type="text" placeholder="Search products..." />
                <button><i class="fas fa-search"></i></button>
            </div>
            <div class="cart-icon">
                <a href="cart.php" id="cart-link"><i class="fas fa-shopping-cart"></i></a>
            </div>
        </div>
    </header>

    <div id="navbar"></div>

    <!-- Breadcrumb -->
    <div class="breadcrumb-bar">
        <div class="container">
            <span class="breadcrumb">Home / More / <span class="current">Toner Cartridges</span></span>
        </div>
    </div>
        <div class="container">
            <!-- Page Layout -->
            <div class="page-layout-centered page-layout">
        <aside class="sidebar">
            <div class="sidebar-section category">
                <h3>TONER CARTRIDGES</h3>
            </div>
            
            <div class="sidebar-section price-range">
                <h4>PRICE RANGE</h4>
                <div class="slider-row">
                    <input type="range" min="0" max="25000" value="0" class="price-slider" id="price-slider" />
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
                <label><input type="checkbox" class="brand-checkbox" value="HP" /> HP</label>
                <label><input type="checkbox" class="brand-checkbox" value="Canon" /> Canon</label>
                <label><input type="checkbox" class="brand-checkbox" value="Brother" /> Brother</label>
                <label><input type="checkbox" class="brand-checkbox" value="Samsung" /> Samsung</label>
                <label><input type="checkbox" class="brand-checkbox" value="Xerox" /> Xerox</label>
            </div>
            
            <div class="sidebar-section color-filter">
                <h4>COLOR</h4>
                <label><input type="checkbox" class="color-checkbox" value="Black" /> Black</label>
                <label><input type="checkbox" class="color-checkbox" value="Cyan" /> Cyan</label>
                <label><input type="checkbox" class="color-checkbox" value="Magenta" /> Magenta</label>
                <label><input type="checkbox" class="color-checkbox" value="Yellow" /> Yellow</label>
            </div>
            
            <div class="sidebar-section type-filter">
                <h4>TYPE</h4>
                <label><input type="checkbox" class="type-checkbox" value="Original" /> Original</label>
                <label><input type="checkbox" class="type-checkbox" value="Compatible" /> Compatible</label>
                <label><input type="checkbox" class="type-checkbox" value="Refilled" /> Refilled</label>
            </div>
        </aside>
        
        <main class="main-area">
            <h1 class="page-title">Toner Cartridges</h1>
            <div class="banner-text">High-quality toner cartridges for laser printers and copiers.</div>
            
            <div class="results-bar">
                <span class="results-info" id="results-info">Showing 1-20 of 18</span>
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
            
            <div class="product-grid" id="product-grid"></div>
            
            <nav class="pagination-bar" id="pagination-bar"></nav>
        </main>
    </div>
    
</div>
    <div id="footer"></div>
    
    <!-- External JS -->
    <script src="js/include.js"></script>
    <script src="js/notifications.js"></script>
    
    
    <script>
        const tonerProducts = [
            {
                title: 'Pantum DO-412K Drum Unit',
                price: 12500,
                priceDisplay: 'Rs. 12,500',
                stock: 'In Stock',
                brand: 'Pantum',
                capacity: '12000 pages',
                tonerCartridge: 'TL-412HK',
                type: 'Drum Unit',
                image: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/pa-31-1-78721-0-200125070034370.png'
            },
            {
                title: 'HP Toner 17A Black',
                price: 13500,
                priceDisplay: 'Rs. 13,500',
                stock: 'In Stock',
                brand: 'HP',
                color: 'Black',
                pages: '1600',
                type: 'Original',
                image: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/17a-2-78721-2193122-140924013648399.jpg'
            },
            {
                title: 'Pantum TL-5120XEV Original Toner Cartridge',
                price: 19500,
                priceDisplay: 'Rs. 19,500',
                stock: 'In Stock',
                brand: 'Pantum',
                type: 'Original',
                features: [
                    'High-quality assurance',
                    'All-in-one cartridge design',
                    'Low waste powder',
                    'Odorless printing',
                    'Health and environment friendly'
                ],
                image: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/pantum-78721-2193127-160924120618091.jpg'
            },
            {
                title: 'HP Toner 85A',
                price: 20000,
                priceDisplay: 'Rs. 20,000',
                stock: 'In Stock',
                brand: 'HP',
                pages: '1600',
                type: 'Original',
                image: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/hp-85-a-2-78721-2193121-140924013345986.jpg'
            },
            {
                title: 'HP Toner 26A',
                price: 37500,
                priceDisplay: 'Rs. 37,500',
                stock: 'In Stock',
                brand: 'HP',
                pages: '3100',
                type: 'Original',
                image: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/26a-1-78721-2193123-140924015927259.jpg'
            }
        ];

        let productsPerPage = 20;
        let currentPage = 1;
        let maxPrice = 0;
        let filteredProducts = tonerProducts.slice();
        let selectedBrands = [];
        let selectedColors = [];
        let selectedTypes = [];

        function filterProducts() {
            filteredProducts = tonerProducts.filter(p => {
                const priceMatch = p.price <= maxPrice;
                const brandMatch = selectedBrands.length === 0 || selectedBrands.includes(p.brand);
                const colorMatch = selectedColors.length === 0 || selectedColors.includes(p.color);
                const typeMatch = selectedTypes.length === 0 || selectedTypes.includes(p.type);
                return priceMatch && brandMatch && colorMatch && typeMatch;
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
          <img src="${p.image || 'https://via.placeholder.com/150'}" alt="${p.title}" />
        </div>
        <div class="card-right">
          <div class="heart-icon" onclick="toggleWishlist(${i + 1}, event)">&#10084;</div>
          <h2 class="product-title">${p.title}</h2>
          <h4 class="product-category">TONER CARTRIDGE</h4>
          <div class="price">${p.priceDisplay}</div>
          <div class="description">
            High-quality ${(p.type ?? 'Standard').toLowerCase()} ${(p.color ?? 'Black').toLowerCase()} toner cartridge for ${p.brand} printers with excellent print quality.
          </div>
          <div class="product-features">
            <span class="feature-tag">${p.brand}</span>
            <span class="feature-tag">${p.color ?? 'Black'}</span>
            <span class="feature-tag">${p.type}</span>
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

            const info = document.getElementById('results-info');
            if (filteredProducts.length === 0) {
                info.textContent = 'No products found';
            } else {
                info.textContent = `Showing ${start + 1}-${end} of ${filteredProducts.length}`;
            }
        }

        function renderPagination() {
            const bar = document.getElementById('pagination-bar');
            const totalPages = Math.max(1, Math.ceil(filteredProducts.length / productsPerPage));
            let html = '<ul class="pagination">';
            html += `<li class="page-item${currentPage === 1 ? ' disabled' : ''}"><a href="#">« Prev</a></li>`;

            for (let i = 1; i <= totalPages; i++) {
                html += `<li class="page-item${i === currentPage ? ' active' : ''}"><a href="#">${i}</a></li>`;
            }

            html += `<li class="page-item${currentPage === totalPages ? ' disabled' : ''}"><a href="#">Next »</a></li>`;
            html += '</ul>';
            bar.innerHTML = html;

            bar.querySelectorAll('.page-item:not(.disabled) a').forEach((a) => {
                a.onclick = function (e) {
                    e.preventDefault();
                    const text = a.textContent.trim();
                    const totalPages = Math.ceil(filteredProducts.length / productsPerPage);

                    if (text === '« Prev') currentPage = Math.max(1, currentPage - 1);
                    else if (text === 'Next »') currentPage = Math.min(totalPages, currentPage + 1);
                    else currentPage = parseInt(text);

                    renderProducts(currentPage);
                    renderPagination();
                };
            });
        }

        document.getElementById('results-per-page').addEventListener('change', function () {
            productsPerPage = parseInt(this.value);
            currentPage = 1;
            renderProducts(currentPage);
            renderPagination();
        });

        document.getElementById('price-slider').addEventListener('input', function () {
            const value = parseInt(this.value);
            document.getElementById('selected-price').textContent = value.toLocaleString();
        });

        document.getElementById('price-go').addEventListener('click', function () {
            maxPrice = parseInt(document.getElementById('price-slider').value);
            filterProducts();
            currentPage = 1;
            renderProducts(currentPage);
            renderPagination();
        });

        document.querySelectorAll('.brand-checkbox').forEach(cb => {
            cb.addEventListener('change', () => {
                selectedBrands = Array.from(document.querySelectorAll('.brand-checkbox:checked')).map(cb => cb.value);
                filterProducts(); currentPage = 1; renderProducts(currentPage); renderPagination();
            });
        });

        document.querySelectorAll('.color-checkbox').forEach(cb => {
            cb.addEventListener('change', () => {
                selectedColors = Array.from(document.querySelectorAll('.color-checkbox:checked')).map(cb => cb.value);
                filterProducts(); currentPage = 1; renderProducts(currentPage); renderPagination();
            });
        });

        document.querySelectorAll('.type-checkbox').forEach(cb => {
            cb.addEventListener('change', () => {
                selectedTypes = Array.from(document.querySelectorAll('.type-checkbox:checked')).map(cb => cb.value);
                filterProducts(); currentPage = 1; renderProducts(currentPage); renderPagination();
            });
        });

        document.getElementById('sort-by').addEventListener('change', function () {
            const sort = this.value;
            if (sort === 'low-high') filteredProducts.sort((a, b) => a.price - b.price);
            else if (sort === 'high-low') filteredProducts.sort((a, b) => b.price - a.price);
            else if (sort === 'newest') filteredProducts = filteredProducts.slice().reverse(); // basic newest sort
            currentPage = 1;
            renderProducts(currentPage);
            renderPagination();
        });

        // CART, WISHLIST, NOTIFICATION

        function addToCart(productId) {
            const product = tonerProducts[productId - 1];
            if (!product) return;

            let cart = JSON.parse(localStorage.getItem('cart') || '[]');
            const existing = cart.find(item => item.id === productId);

            if (existing) {
                existing.quantity += 1;
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
            showNotification('Product added to cart!', 'success');
            updateCartCounter();
        }

        function addToWishlist(productId) {
            const product = tonerProducts[productId - 1];
            if (!product) return;

            let wishlist = JSON.parse(localStorage.getItem('wishlist') || '[]');
            const exists = wishlist.find(item => item.id === productId);

            if (!exists) {
                wishlist.push({
                    id: productId,
                    title: product.title,
                    price: product.price,
                    priceDisplay: product.priceDisplay
                });
                localStorage.setItem('wishlist', JSON.stringify(wishlist));
                showNotification('Added to wishlist!', 'success');
            } else {
                showNotification('Already in wishlist', 'info');
            }
        }

        function toggleWishlist(productId, event) {
            const heart = event.target;
            heart.classList.toggle('active');

            let wishlist = JSON.parse(localStorage.getItem('wishlist') || '[]');
            const exists = wishlist.find(item => item.id === productId);

            if (!exists) {
                addToWishlist(productId);
            } else {
                wishlist = wishlist.filter(item => item.id !== productId);
                localStorage.setItem('wishlist', JSON.stringify(wishlist));
                showNotification('Removed from wishlist!', 'info');
            }
        }

        function updateCartCounter() {
            const cart = JSON.parse(localStorage.getItem('cart') || '[]');
            const total = cart.reduce((sum, item) => sum + item.quantity, 0);
            const cartLink = document.getElementById('cart-link');
            cartLink.innerHTML = `<i class="fas fa-shopping-cart"></i>${total > 0 ? ` <span style="background:red;color:white;border-radius:50%;padding:2px 6px;font-size:12px;">${total}</span>` : ''}`;
        }

        function showNotification(msg, type = 'info') {
            const notif = document.createElement('div');
            notif.className = `notification ${type}`;
            notif.innerHTML = `
    <div class="icon">${type === 'success' ? '✓' : type === 'error' ? '✗' : 'ℹ'}</div>
    <div class="message">${msg}</div>
    <div class="close" onclick="this.parentElement.remove()">×</div>
  `;
            document.body.appendChild(notif);
            setTimeout(() => notif.classList.add('show'), 100);
            setTimeout(() => {
                notif.classList.remove('show');
                setTimeout(() => notif.remove(), 300);
            }, 3000);
        }

        // INIT
        window.addEventListener('DOMContentLoaded', () => {
            maxPrice = 25000;
            document.getElementById('price-slider').value = maxPrice;
            document.getElementById('selected-price').textContent = maxPrice.toLocaleString();
            filterProducts();
            renderProducts(currentPage);
            renderPagination();
            updateCartCounter();
        });
    </script>


</body>

</html>