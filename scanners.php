<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scanners | Bawa Computers</title>
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
            <span class="breadcrumb" href="">Home / More / <span class="current">Scanners</span></span>
        </div>
    </div>
            <div class="container">

    <!-- Main Content Layout -->
    <div class="page-layout-centered page-layout">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="sidebar-section category">
                <h3>SCANNERS</h3>
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
                <label><input type="checkbox" class="brand-checkbox" value="Canon"> Canon</label>
                <label><input type="checkbox" class="brand-checkbox" value="Epson"> Epson</label>
                <label><input type="checkbox" class="brand-checkbox" value="HP"> HP</label>
                <label><input type="checkbox" class="brand-checkbox" value="Brother"> Brother</label>
                <label><input type="checkbox" class="brand-checkbox" value="Fujitsu"> Fujitsu</label>
                <label><input type="checkbox" class="brand-checkbox" value="Plustek"> Plustek</label>
            </div>
            <div class="sidebar-section type-filter">
                <h4>SCANNER TYPE</h4>
                <label><input type="checkbox" class="type-checkbox" value="Flatbed"> Flatbed</label>
                <label><input type="checkbox" class="type-checkbox" value="Document"> Document</label>
                <label><input type="checkbox" class="type-checkbox" value="Photo"> Photo</label>
                <label><input type="checkbox" class="type-checkbox" value="Portable"> Portable</label>
            </div>
            <div class="sidebar-section resolution-filter">
                <h4>RESOLUTION</h4>
                <label><input type="checkbox" class="resolution-checkbox" value="1200 DPI"> 1200 DPI</label>
                <label><input type="checkbox" class="resolution-checkbox" value="2400 DPI"> 2400 DPI</label>
                <label><input type="checkbox" class="resolution-checkbox" value="4800 DPI"> 4800 DPI</label>
                <label><input type="checkbox" class="resolution-checkbox" value="9600 DPI"> 9600 DPI</label>
            </div>
        </aside>
        <!-- Main Content -->
        <main class="main-area">
            <h1 class="page-title">Scanners</h1>
            <div class="banner-text">High-quality document and photo scanners for home, office, and professional use.</div>
            <div class="results-bar">
                <span class="results-info" id="results-info">Showing 1-20 of 24</span>
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
// Scanners product data
const scannerProducts = [
    {
        title: 'Posspro PBS-4410W Wireless Barcode Scanner',
        price: null,
        priceDisplay: 'Price Low - High',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/20230624070142-pbs-4410w-78721-0-230625104312727.png',
        brand: 'Posspro',
        description: 'Comfortable & Natural. Economic & Durable. 1D, 2D Barcode Reader. Support Scan Barcode From Screen.'
    },
    {
        title: 'POSPRO ECONO SERIES PBS-QR1000 2D Barcode Scanner with Stand',
        price: 6000,
        priceDisplay: 'Rs. 6,000',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/20240305031843-untitled-design---2024-03-05t131624.734-78721-0-230625100723755.png',
        brand: 'POSPRO',
        description: 'Connectivity: USB (Plug & Play). Barcode Types: 1D & 2D (QR Code, PDF417, Data Matrix, etc.). Durable and ergonomic design.'
    },
    {
        title: 'POSPRO PBS-5000 2D Desktop Barcode Scanner',
        price: 13000,
        priceDisplay: 'Rs. 13,000',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/20230624065311-pbs-5000-posexp-2-78721-0-230625113956116.png',
        brand: 'POSPRO',
        description: 'Quickly Scan Various Barcodes. Supports 1D & 2D paper & screen barcodes. Multiple keyboard language support. Reads Small High-Density Barcodes.'
    },
    {
        title: 'Canon CanoScan LiDE 300',
        price: 19000,
        priceDisplay: 'Rs. 19,000',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/canon-2-78721-2193120-180924105843776.jpg',
        brand: 'Canon',
        description: 'Optical resolution 2400 x 2400dpi. Max Doc Size A4. Scan speed approx. 10 sec (A4, 300dpi, Colour).'
    },
    {
        title: 'Plustek OpticSlim 2610 Plus Flatbed A4',
        price: 25500,
        priceDisplay: 'Rs. 25,500',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/2610-2-78721-2193105-180924120031306.jpg',
        brand: 'Plustek',
        description: 'Scan Speed: 12–15 sec (Color, 300 dpi, A4). Resolution: 1200 x 1200 dpi. Action Buttons: Copy, OCR, Email, PDF. USB 2.0.'
    },
    {
        title: 'Plustek Mobile Office S602',
        price: 31000,
        priceDisplay: 'Rs. 31,000',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/s602-1-78721-2193106-180924120150036.jpg',
        brand: 'Plustek',
        description: 'Resolution: 1200 dpi. Max Scan Size: 4.1 x 19.7". Scan Speed: 5.5 sec (Color A6). USB Powered. Supports Searchable PDF.'
    },
    {
        title: 'CZUR Lens Pro Document Scanner',
        price: 45500,
        priceDisplay: 'Rs. 45,500',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/lines-2-78721-2193101-180924114859265.jpg',
        brand: 'CZUR',
        description: '12MP Sensor. Resolution: 4032 x 3024 / 330 DPI. Scan Speed: 1 Sec/Page. Scan Area: A4. Output: PDF, Word, Excel.'
    },
    {
        title: 'CZUR Shine 800 Pro Smart Scanner',
        price: 62500,
        priceDisplay: 'Rs. 62,500',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/800-pro-3-78721-2193096-180924110847036.jpg',
        brand: 'CZUR',
        description: '8MP Sensor. Resolution: 3280 x 2460 / 270 DPI. Scan Speed: 1 Sec/Page. Output: PDF. Scan Area: A4.'
    },
    {
        title: 'Plustek MobileOffice AD480 Sheet Feed A4 Scanner',
        price: 72000,
        priceDisplay: 'Rs. 72,000',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/ad-480-1-78721-2193109-180924112625971.jpg',
        brand: 'Plustek',
        description: 'Scan Speed: 20 ppm / 40 ipm (Color). Resolution: 600 dpi. Max Size: 8.5 x 36”. Duplex, 20-Sheet ADF, 1500 Sheets/day.'
    },
    {
        title: 'Plustek SmartOffice PS286 Plus',
        price: 72500,
        priceDisplay: 'Rs. 72,500',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/ps286-plus-1-78721-2193110-180924115644625.jpg',
        brand: 'Plustek',
        description: '25 ppm / 50 ipm (Gray). Resolution: 600 dpi. Max Size: 8.66 x 51”. 50-Sheet ADF. PDF, BCR, E-Mail, Copy support.'
    },
    {
        title: 'Plustek SmartOffice PS30D Scanner',
        price: 78000,
        priceDisplay: 'Rs. 78,000',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/ps-30d-1-78721-2193112-180924113220695.jpg',
        brand: 'Plustek',
        description: '30 ppm / 60 ipm. 50-Sheet ADF. Scans plastic cards. Searchable PDF, Word, Excel. Up to 3000 pages daily volume.'
    },
    {
        title: 'HP ScanJet Pro 2600 F1 Flatbed Scanner',
        price: 85000,
        priceDisplay: 'Rs. 85,000',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/2600-2-78721-2193103-180924122833778.jpg',
        brand: 'HP',
        description: 'High-Speed Document & Photo Scanning. Two-sided scanning. USB 2.0. Modern practical design.'
    },
    {
        title: 'CZUR Shine Ultra Book & Document Scanner',
        price: 87000,
        priceDisplay: 'Rs. 87,000',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/ultra-shine-2-78721-2193099-180924114543905.jpg',
        brand: 'CZUR',
        description: '13MP CMOS sensor. A3 & A4 Scanning. DPI: A4≈340；A3≈245. For books up to 30mm thick.'
    },
    {
        title: 'Plustek Secure Scan X-Cube',
        price: 87500,
        priceDisplay: 'Rs. 87,500',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/cube-1-78721-2193119-180924110134275.jpg',
        brand: 'Plustek',
        description: '5MP CMOS. ID Card Scanner. Dual Sensors. Scan Speed: 2 sec. SDK Supported. USB 2.0.'
    },
    {
        title: 'Plustek SmartOffice PL3060 ADF Scanner',
        price: 88000,
        priceDisplay: 'Rs. 88,000',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/pl3060-1-78721-2193114-180924113638856.jpg',
        brand: 'Plustek',
        description: 'Flatbed. 32 ppm / 64 ipm (Color/Grayscale, 200 dpi, A4). 48-bit color input. High-speed duplex scanning.'
    },
    {
        title: 'Plustek OpticSlim 1180 Flatbed A3',
        price: 101000,
        priceDisplay: 'Rs. 101,000',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/optic-slim-2-78721-2193111-180924115455848.jpg',
        brand: 'Plustek',
        description: 'A3 Size: 11.69” x 17”. LED Light. One-Touch Button Operation. No warm-up required.'
    },
    {
        title: 'Plustek SmartOffice PL4080 Flatbed A4',
        price: 106500,
        priceDisplay: 'Rs. 106,500',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/pl4080-1-78721-2193115-180924113012534.jpg',
        brand: 'Plustek',
        description: 'Scan Speed: 40 ppm / 80 ipm Color. 1200 dpi (HW). Duplex Supported. USB Interface. 50-sheet ADF.'
    },
    {
        title: 'CZUR Aura Smart Portable Book & Document Scanner',
        price: 110500,
        priceDisplay: 'Rs. 110,500',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/scaneer-1-78721-2193100-180924111104569.jpg',
        brand: 'CZUR',
        description: 'Resolution: 4320×3240. DPI: 240. Scanning Range: A3 (books) / A4. Speed: ~2 sec/page. No pre-scan time.'
    },
    {
        title: 'Plustek SmartOffice PS3140U Sheet Feed A4',
        price: 122500,
        priceDisplay: 'Rs. 122,500',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/ps310-1-78721-2193116-180924110405144.jpg',
        brand: 'Plustek',
        description: 'Scan Speed: 40 ppm/80 ipm. Resolution: 600 dpi. ADF Capacity: 100 sheets. USB 2.0.'
    },
    {
        title: 'HP Scanjet Pro 3500 F1 Flatbed Scanner',
        price: 135000,
        priceDisplay: 'Rs. 135,000',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/3500-1-78721-2193102-180924120556792.jpg',
        brand: 'HP',
        description: 'Scanner Type: Flatbed, ADF. Daily Duty: 3,000 pages. 48-bit internal, 24-bit external. 256 grayscale levels.'
    }
];



let productsPerPage = 20;
let currentPage = 1;
let maxPrice = 0;
let filteredProducts = scannerProducts.slice();
let selectedBrands = [];
let selectedTypes = [];
let selectedResolutions = [];

function filterProducts() {
    filteredProducts = scannerProducts.filter(p => {
        const priceMatch = (p.price || 0) >= maxPrice;
        const brandMatch = selectedBrands.length === 0 || selectedBrands.includes(p.brand);
        const typeMatch = selectedTypes.length === 0 || (p.type && selectedTypes.includes(p.type));
        const resolutionMatch = selectedResolutions.length === 0 || (p.resolution && selectedResolutions.includes(p.resolution));
        return priceMatch && brandMatch && typeMatch && resolutionMatch;
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
                <img src="${p.img || 'https://images.unsplash.com/photo-1593640408182-31c70c8268f5?auto=format&fit=crop&w=800&q=80'}" alt="${p.title}" />
            </div>
            <div class="card-right">
                <div class="heart-icon" onclick="toggleWishlist(${i+1})">&#10084;</div>
                <h2 class="product-title">${p.title}</h2>
                <h4 class="product-category">SCANNER</h4>
                <div class="price">${p.priceDisplay}</div>
                <div class="description">
                    High-quality ${p.type ? p.type.toLowerCase() : 'document'} scanner with ${p.resolution || 'standard'} resolution for professional document and image scanning.
                </div>
                <div class="product-features">
                    ${p.type ? `<span class="feature-tag">${p.type}</span>` : ''}
                    ${p.resolution ? `<span class="feature-tag">${p.resolution}</span>` : ''}
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

    const info = document.getElementById('results-info');
    if(filteredProducts.length === 0) {
        info.textContent = 'No products found';
    } else {
        info.textContent = `Showing ${start+1}-${end} of ${filteredProducts.length}`;
    }
}

function renderPagination() {
    const bar = document.getElementById('pagination-bar');
    const totalPages = Math.max(1, Math.ceil(filteredProducts.length / productsPerPage));
    let html = '<ul class="pagination">';
    html += `<li class="page-item${currentPage === 1 ? ' disabled' : ''}" id="prev-page"><a href="#">&laquo; Prev</a></li>`;
    for(let i = 1; i <= totalPages; i++) {
        html += `<li class="page-item${i === currentPage ? ' active' : ''}"><a href="#">${i}</a></li>`;
    }
    html += `<li class="page-item${currentPage === totalPages ? ' disabled' : ''}" id="next-page"><a href="#">Next &raquo;</a></li>`;
    html += '</ul>';
    bar.innerHTML = html;

    bar.querySelectorAll('.page-item:not(.active):not(.disabled) a').forEach(a => {
        a.onclick = function(e) {
            e.preventDefault();
            const text = a.textContent.trim();
            if (text === '« Prev') {
                if (currentPage > 1) currentPage--;
            } else if (text === 'Next »') {
                const totalPages = Math.ceil(filteredProducts.length / productsPerPage);
                if (currentPage < totalPages) currentPage++;
            } else {
                currentPage = parseInt(text);
            }
            renderProducts(currentPage);
            renderPagination();
        };
    });
}

// Filters
document.getElementById('results-per-page').addEventListener('change', function() {
    productsPerPage = parseInt(this.value);
    currentPage = 1;
    renderProducts(currentPage);
    renderPagination();
});

document.getElementById('price-slider').addEventListener('input', function() {
    document.getElementById('selected-price').textContent = parseInt(this.value).toLocaleString();
    maxPrice = parseInt(this.value);
    filterProducts();
    currentPage = 1;
    renderProducts(currentPage);
    renderPagination();
});

document.getElementById('price-go').addEventListener('click', function() {
    maxPrice = parseInt(document.getElementById('price-slider').value);
    filterProducts();
    currentPage = 1;
    renderProducts(currentPage);
    renderPagination();
});

document.querySelectorAll('.brand-checkbox').forEach(cb => {
    cb.addEventListener('change', function() {
        selectedBrands = Array.from(document.querySelectorAll('.brand-checkbox')).filter(c => c.checked).map(c => c.value);
        filterProducts();
        renderProducts(currentPage = 1);
        renderPagination();
    });
});

document.querySelectorAll('.type-checkbox').forEach(cb => {
    cb.addEventListener('change', function() {
        selectedTypes = Array.from(document.querySelectorAll('.type-checkbox')).filter(c => c.checked).map(c => c.value);
        filterProducts();
        renderProducts(currentPage = 1);
        renderPagination();
    });
});

document.querySelectorAll('.resolution-checkbox').forEach(cb => {
    cb.addEventListener('change', function() {
        selectedResolutions = Array.from(document.querySelectorAll('.resolution-checkbox')).filter(c => c.checked).map(c => c.value);
        filterProducts();
        renderProducts(currentPage = 1);
        renderPagination();
    });
});

// Sorting
document.getElementById('sort-by').addEventListener('change', function() {
    const val = this.value;
    if (val === 'low-high') {
        filteredProducts.sort((a, b) => (a.price || 0) - (b.price || 0));
    } else if (val === 'high-low') {
        filteredProducts.sort((a, b) => (b.price || 0) - (a.price || 0));
    }
    currentPage = 1;
    renderProducts(currentPage);
    renderPagination();
});

// On page load
window.addEventListener('DOMContentLoaded', function() {
    document.getElementById('price-slider').value = 0;
    document.getElementById('selected-price').textContent = '0';
    maxPrice = 0;
    filterProducts();
    renderProducts(currentPage);
    renderPagination();
});

// Cart and Wishlist Functions
function addToCart(productId) {
    const product = scannerProducts[productId - 1];
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
    const product = scannerProducts[productId - 1];
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

    let wishlist = JSON.parse(localStorage.getItem('wishlist') || '[]');
    if (heartIcon.classList.contains('active')) {
        addToWishlist(productId);
    } else {
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

updateCartCounter();
</script>
</body>
</html> 