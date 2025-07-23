<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Used Desktop PCs | Bawa Computers</title>
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
            <span class="breadcrumb" href="">Home / Used / <span class="current">Desktop PCs</span></span>
        </div>
    </div>
    <!-- Container for main content -->
    <div class="container">
        
    <!-- Main Content Layout -->
    <div class="page-layout-centered page-layout">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="sidebar-section category">
                <h3>USED DESKTOP PCS</h3>
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
                <label><input type="checkbox" class="brand-checkbox" value="HP"> HP</label>
                <label><input type="checkbox" class="brand-checkbox" value="Dell"> Dell</label>
                <label><input type="checkbox" class="brand-checkbox" value="Lenovo"> Lenovo</label>
                <label><input type="checkbox" class="brand-checkbox" value="Asus"> Asus</label>
                <label><input type="checkbox" class="brand-checkbox" value="Custom"> Custom Built</label>
            </div>
            <div class="sidebar-section condition-filter">
                <h4>CONDITION</h4>
                <label><input type="checkbox" class="condition-checkbox" value="Excellent"> Excellent</label>
                <label><input type="checkbox" class="condition-checkbox" value="Good"> Good</label>
                <label><input type="checkbox" class="condition-checkbox" value="Fair"> Fair</label>
                <label><input type="checkbox" class="condition-checkbox" value="Refurbished"> Refurbished</label>
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
            <h1 class="page-title">Used Desktop PCs</h1>
            <div class="banner-text">Affordable pre-owned desktop computers for gaming, work, and home use. All tested and guaranteed.</div>
            <div class="results-bar">
                <span class="results-info" id="results-info">Showing 1-20 of 22</span>
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
// Used Desktop PCs product data
        const usedDesktopProducts = [
    { title: 'Dell Optiplex 390/990/790 Desktop Intel Ci3 2nd Gen', price: 10000, priceDisplay: 'Rs. 10,000', stock: 'In Stock', img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/390-1-78721-2198468-140924073028904.jpg', type: 'Desktop', brand: 'Dell', condition: 'Good', category: 'Business' },
    { title: 'HP Elite 6200/8200 Desktop Intel Ci3 2nd Gen', price: 11000, priceDisplay: 'Rs. 11,000', stock: 'In Stock', img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/hp-1-78721-2198485-140924065636579.jpg', type: 'Desktop', brand: 'HP', condition: 'Good', category: 'Home' },
    { title: 'Dell Optiplex 390/790/990 Desktop Intel Ci5 2nd Gen', price: 12000, priceDisplay: 'Rs. 12,000', stock: 'In Stock', img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/999-00-78721-2198470-140924094040490.jpg', type: 'Desktop', brand: 'Dell', condition: 'Excellent', category: 'Business' },
    { title: 'Dell Optiplex 790/390/990 Tower Intel Ci3 2nd Gen', price: 12000, priceDisplay: 'Rs. 12,000', stock: 'In Stock', img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/dell-1-78721-2198469-140924070214508.jpg', type: 'Desktop', brand: 'Dell', condition: 'Good', category: 'Home' },
    { title: 'Hp Elite 6200 Tower Intel Ci3 2nd Gen', price: 12500, priceDisplay: 'Rs. 12,500', stock: 'In Stock', img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/6200-2-78721-2198486-140924063257507.jpg', type: 'Desktop', brand: 'HP', condition: 'Refurbished', category: 'Home' },
    { title: 'Hp Elite 6300 Tower Intel Ci3 3rd Gen', price: 13000, priceDisplay: 'Rs. 13,000', stock: 'In Stock', img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/6200-2-78721-2198487-140924063525160.jpg', type: 'Desktop', brand: 'HP', condition: 'Excellent', category: 'Business' },
    { title: 'Dell Optiplex 790/390/990 Tower Intel Ci5 2nd Gen', price: 14000, priceDisplay: 'Rs. 14,000', stock: 'In Stock', img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/990-1-78721-2198472-140924074021524.jpg', type: 'Desktop', brand: 'Dell', condition: 'Good', category: 'Workstation' },
    { title: 'Dell Optiplex 3020/7020/9020 SFF Intel Ci3 4th Gen 4GB', price: 14000, priceDisplay: 'Rs. 14,000', stock: 'In Stock', img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/3020-1-78721-2198473-140924074811501.jpg', type: 'Desktop', brand: 'Dell', condition: 'Fair', category: 'Home' },
    { title: 'Dell Optiplex 790 SFF Intel Ci5 2nd Gen', price: 14000, priceDisplay: 'Rs. 14,000', stock: 'Out of Stock', img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/sff790-78721-2198480-140924092555900.jpg', type: 'Desktop', brand: 'Dell', condition: 'Fair', category: 'Business' },
    { title: 'Dell Optiplex 7010 Tower Ci3 3rd 4GB 500GB (Used)', price: 14500, priceDisplay: 'Rs. 14,500', stock: 'In Stock', img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/450-11-78721-2198471-140924093506417.jpg', type: 'Desktop', brand: 'Dell', condition: 'Good', category: 'Workstation' },
    { title: 'Hp Elite 6200 Tower Intel Ci5 2nd Gen', price: 15000, priceDisplay: 'Rs. 15,000', stock: 'In Stock', img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/6200-11-78721-2198488-140924063916978.jpg', type: 'Desktop', brand: 'HP', condition: 'Excellent', category: 'Business' },
    { title: 'Hp ProDesk 600 G1 SFF Intel Ci3 4th Gen', price: 15000, priceDisplay: 'Rs. 15,000', stock: 'In Stock', img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/g1-1-78721-2198489-140924064239746.jpg', type: 'Desktop', brand: 'HP', condition: 'Good', category: 'Home' },
    { title: 'Dell Optiplex 3020/7020 Tower Intel Ci3 4th Gen', price: 16000, priceDisplay: 'Rs. 16,000', stock: 'In Stock', img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/790--2-78721-2198477-140924080345184.jpg', type: 'Desktop', brand: 'Dell', condition: 'Fair', category: 'Gaming' },
    { title: 'Dell Optiplex 3040 SFF Intel Ci3 6th Gen 4GB', price: 16000, priceDisplay: 'Rs. 16,000', stock: 'In Stock', img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/3040-2-78721-2198479-140924092346131.jpg', type: 'Desktop', brand: 'Dell', condition: 'Excellent', category: 'Business' },
    { title: 'Hp Elite 6300 Tower Intel Ci5 3rd Gen', price: 17000, priceDisplay: 'Rs. 17,000', stock: 'In Stock', img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/6200-11-78721-2198490-140924064427899.jpg', type: 'Desktop', brand: 'HP', condition: 'Good', category: 'Workstation' },
    { title: 'Dell Optiplex 3020/7020/9020 SFF Intel Ci5 4th Gen 4GB', price: 17000, priceDisplay: 'Rs. 17,000', stock: 'In Stock', img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/3020-22-78721-2198475-140924075823398.jpg', type: 'Desktop', brand: 'Dell', condition: 'Excellent', category: 'Business' },
    { title: 'Dell Optiplex 7010 Tower Intel Ci5 3rd Gen 4GB', price: 18000, priceDisplay: 'Rs. 18,000', stock: 'In Stock', img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/used-1-78721-2198474-140924075504133.jpg', type: 'Desktop', brand: 'Dell', condition: 'Good', category: 'Home' },
    { title: 'Hp Elite 600/800 Desktop Intel Ci5 4th Gen', price: 18500, priceDisplay: 'Rs. 18,500', stock: 'In Stock', img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/800-2-78721-2198492-140924065012366.jpg', type: 'Desktop', brand: 'HP', condition: 'Excellent', category: 'Business' },
    { title: 'Dell Optiplex 390/790/990 Tower Intel Ci7 2nd Gen', price: 19000, priceDisplay: 'Rs. 19,000', stock: 'In Stock', img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/790--2-78721-2198476-140924080156805.jpg', type: 'Desktop', brand: 'Dell', condition: 'Good', category: 'Gaming' },
    { title: 'Dell Optiplex 3020/7020 Tower Intel Core i7 4770', price: 25000, priceDisplay: 'Rs. 25,000', stock: 'In Stock', img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/3020--222-78721-2198478-140924080803954.jpg', type: 'Desktop', brand: 'Dell', condition: 'Excellent', category: 'Workstation' }
];



let productsPerPage = 20;
let currentPage = 1;
let maxPrice = 0;
let filteredProducts = usedDesktopProducts.slice();
let selectedBrands = [];
let selectedConditions = [];
let selectedCategories = [];

function filterProducts() {
    filteredProducts = usedDesktopProducts.filter(p => {
        const priceMatch = p.price >= maxPrice;
        const brandMatch = selectedBrands.length === 0 || selectedBrands.includes(p.brand);
        const conditionMatch = selectedConditions.length === 0 || selectedConditions.includes(p.condition);
        const categoryMatch = selectedCategories.length === 0 || selectedCategories.includes(p.category);
        return priceMatch && brandMatch && conditionMatch && categoryMatch;
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
                <img src="${p.img || 'https://images.unsplash.com/photo-1593640408182-31c70c8268f5?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80'}" alt="${p.title}" />
            </div>
            <div class="card-right">
                <div class="heart-icon" onclick="toggleWishlist(${i+1})">&#10084;</div>
                <h2 class="product-title">${p.title}</h2>
                <h4 class="product-category">USED DESKTOP PC</h4>
                <div class="price">${p.priceDisplay}</div>
                <div class="description">
                    Quality ${p.condition.toLowerCase()} used desktop PC in ${p.category.toLowerCase()} category with excellent performance.
                </div>
                <div class="product-features">
                    <span class="feature-tag">${p.brand}</span>
                    <span class="feature-tag">${p.condition}</span>
                    <span class="feature-tag">${p.category}</span>
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
    // Update results info
    const info = document.getElementById('results-info');
    if(filteredProducts.length === 0) {
        info.textContent = 'No products found';
    } else {
        info.textContent = `Showing ${filteredProducts.length === 0 ? 0 : start+1}-${end} of ${filteredProducts.length}`;
    }
}

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
    bar.querySelectorAll('.page-item:not(.active):not(.disabled) a').forEach((a, idx, arr) => {
        a.onclick = function(e) {
            e.preventDefault();
            const text = a.textContent.trim();
            const totalPages = Math.max(1, Math.ceil(filteredProducts.length/productsPerPage));
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

// Results per page dropdown
const resultsSelect = document.getElementById('results-per-page');
resultsSelect.addEventListener('change', function() {
    productsPerPage = parseInt(this.value);
    currentPage = 1;
    renderProducts(currentPage);
    renderPagination();
});

// Price range slider
const priceSlider = document.getElementById('price-slider');
const selectedPrice = document.getElementById('selected-price');
priceSlider.addEventListener('input', function() {
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
    cb.addEventListener('change', function() {
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
    cb.addEventListener('change', function() {
        selectedConditions = Array.from(conditionCheckboxes).filter(c => c.checked).map(c => c.value);
        currentPage = 1;
        filterProducts();
        renderProducts(currentPage);
        renderPagination();
    });
});

// Category filter
const categoryCheckboxes = document.querySelectorAll('.category-checkbox');
categoryCheckboxes.forEach(cb => {
    cb.addEventListener('change', function() {
        selectedCategories = Array.from(categoryCheckboxes).filter(c => c.checked).map(c => c.value);
        currentPage = 1;
        filterProducts();
        renderProducts(currentPage);
        renderPagination();
    });
});

// Sort By dropdown
const sortBySelect = document.getElementById('sort-by');
sortBySelect.addEventListener('change', function() {
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
window.addEventListener('DOMContentLoaded', function() {
    priceSlider.value = 0;
    selectedPrice.textContent = '0';
    maxPrice = 0;
    filterProducts();
    currentPage = 1;
    renderProducts(currentPage);
    renderPagination();
});

document.getElementById('price-go').addEventListener('click', function() {
    maxPrice = parseInt(priceSlider.value);
    filterProducts();
    currentPage = 1;
    renderProducts(currentPage);
    renderPagination();
});

// Cart and Wishlist Functions
function addToCart(productId) {
    const product = usedDesktopProducts[productId - 1];
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
    const product = usedDesktopProducts[productId - 1];
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