<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motherboards | Bawa Computers</title>
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
            <span class="breadcrumb" href="">Home / More / <span class="current">Motherboards</span></span>
        </div>
    </div>
            <div class="container">
                <!-- Main Content Layout -->
                <div class="page-layout-centered page-layout">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="sidebar-section category">
                <h3>MOTHERBOARDS</h3>
            </div>
            <div class="sidebar-section price-range">
                <h4>PRICE RANGE</h4>
                <div class="slider-row">
                    <input type="range" min="0" max="100000" value="0" class="price-slider" id="price-slider">
                    <div class="price-values">
                        <span>0</span>
                        <span id="selected-price">0</span>
                        <span style="float:right">100,000</span>
                    </div>
                </div>
                <button class="btn btn-blue" id="price-go">GO</button>
            </div>
            <div class="sidebar-section brand-filter">
                <h4>BRAND</h4>
                <label><input type="checkbox" class="brand-checkbox" value="ASUS"> ASUS</label>
                <label><input type="checkbox" class="brand-checkbox" value="MSI"> MSI</label>
                <label><input type="checkbox" class="brand-checkbox" value="Gigabyte"> Gigabyte</label>
                <label><input type="checkbox" class="brand-checkbox" value="ASRock"> ASRock</label>
                <label><input type="checkbox" class="brand-checkbox" value="Intel"> Intel</label>
            </div>
            <div class="sidebar-section socket-filter">
                <h4>SOCKET</h4>
                <label><input type="checkbox" class="socket-checkbox" value="LGA 1700"> LGA 1700</label>
                <label><input type="checkbox" class="socket-checkbox" value="LGA 1200"> LGA 1200</label>
                <label><input type="checkbox" class="socket-checkbox" value="AM4"> AM4</label>
                <label><input type="checkbox" class="socket-checkbox" value="AM5"> AM5</label>
            </div>
            <div class="sidebar-section chipset-filter">
                <h4>CHIPSET</h4>
                <label><input type="checkbox" class="chipset-checkbox" value="B660"> B660</label>
                <label><input type="checkbox" class="chipset-checkbox" value="B760"> B760</label>
                <label><input type="checkbox" class="chipset-checkbox" value="Z690"> Z690</label>
                <label><input type="checkbox" class="chipset-checkbox" value="Z790"> Z790</label>
                <label><input type="checkbox" class="chipset-checkbox" value="B550"> B550</label>
                <label><input type="checkbox" class="chipset-checkbox" value="X670"> X670</label>
            </div>
        </aside>
        <!-- Main Content -->
        <main class="main-area">
            <h1 class="page-title">Motherboards</h1>
            <div class="banner-text">High-quality motherboards for gaming, content creation, and professional workstations.</div>
            <div class="results-bar">
                <span class="results-info" id="results-info">Showing 1-20 of 28</span>
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
// Motherboards product data
const motherboardProducts = [
    {
        title: 'Gigabyte H610M K DDR4',
        price: 25000,
        priceDisplay: 'Rs. 25,000',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/em510b-removebg-preview.png-78721-0-221124090539652.png',
        brand: 'Gigabyte',
        description: 'Supports Intel® Core™ 14th/13th/12th processors. Dual Channel Non-ECC Unbuffered DDR4, 2 DIMMs. GbE LAN with Bandwidth Management. NVMe PCIe 3.0 x4 M.2.'
    },
    {
        title: 'Asus Prime H510M-K R2.0 Motherboard',
        price: 26000,
        priceDisplay: 'Rs. 26,000',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/8-2.jpg-78721-2200895-190924101357709.png',
        brand: 'ASUS',
        description: 'Intel® LGA 1200 socket: Ready for 11th and 10th Gen Intel® Processors. PCIe 4.0, 32Gbps M.2 slot, 1 Gb Ethernet, USB 3.2 Gen 1. PCH heatsink and Fan Xpert. 5X Protection III.'
    },
    {
        title: 'Gigabyte H610M H V3 DDR4',
        price: 26500,
        priceDisplay: 'Rs. 26,500',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/500-78721-2200896-190924101708127.png',
        brand: 'Gigabyte',
        description: 'Supports Intel® Core™ 14th/13th/12th processors. Dual Channel DDR4, 2 DIMMs. NVMe PCIe 3.0 x4 M.2.'
    },
    {
        title: 'Gigabyte B450M DS3H V3 DDR4',
        price: 26500,
        priceDisplay: 'Rs. 26,500',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/500-23-78721-0-150425114736034.png',
        brand: 'Gigabyte',
        description: 'Supports AMD Ryzen™ 5000/3000/2000/1000 series & Athlon™ Processors. Dual Channel Non-ECC DDR4, 4 DIMMs. PCIe Gen3 x4 M.2 with NVMe & SATA support.'
    },
    {
        title: 'Gigabyte H610M K DDR5',
        price: 27500,
        priceDisplay: 'Rs. 27,500',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/500-78721-0-200625100311175.png',
        brand: 'Gigabyte',
        description: 'Supports Intel® Core™ 14th/13th/12th processors. Dual Channel DDR5, 2 DIMMs. NVMe PCIe 3.0 x4 M.2.'
    },
    {
        title: 'Gigabyte H610M H V2 DDR5',
        price: 27500,
        priceDisplay: 'Rs. 27,500',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/500-3-78721-2200870-190924105707061.png',
        brand: 'Gigabyte',
        description: 'Supports Intel® Core™ 14th/13th/12th processors. Dual Channel Non-ECC DDR5, 2 DIMMs. 4+1+1 Hybrid Digital VRM Design.'
    },
    {
        title: 'EASE EB760M DDR5 LGA1700 Motherboard',
        price: 28000,
        priceDisplay: 'Rs. 28,000',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/500-21-78721-0-080125101329374.png',
        brand: 'EASE',
        description: 'Supports 12th/13th/14th Gen Intel Core/Pentium/Celeron processors. 2x DDR5 slots, 4800MHz up to 64GB. 4x SATA 3.0, Realtek® RTL8125B 2.5Gbps LAN, 6-channel audio.'
    },
    {
        title: 'Gigabyte B760M H DDR4',
        price: 28500,
        priceDisplay: 'Rs. 28,500',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/500-16-78721-0-161124094359371.png',
        brand: 'Gigabyte',
        description: 'Supports Intel® Core™ 14th/13th/12th processors. Hybrid 6+1+1 Digital VRM. Dual DDR4 DIMMs. Dual PCIe 4.0 x4 M.2. PCIe 4.0x16 EZ-Latch Slot.'
    },
    {
        title: 'MSI PRO H610M-E DDR4 Motherboard',
        price: 32500,
        priceDisplay: 'Rs. 32,500',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/3-26-78721-2200894-190924101152748.jpg',
        brand: 'MSI',
        description: 'Supports Intel 12th Gen CPUs. 2x DDR4 3200MHz. M.2 NVMe Slot. Lightning Gen 4 PCIe.'
    },
    {
        title: 'MSI B450M Pro VDH Max',
        price: 32500,
        priceDisplay: 'Rs. 32,500',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/500-19-78721-0-121224011645653.png',
        brand: 'MSI',
        description: 'Supports 1st/2nd/3rd Gen AMD Ryzen™ and Ryzen™ with Radeon™ Vega Graphics. AM4 Socket.'
    },
    {
        title: 'Gigabyte B650M H Motherboard',
        price: 33500,
        priceDisplay: 'Rs. 33,500',
        stock: 'In Stock',
        img: '',
        brand: 'Gigabyte',
        description: 'Supports AMD Ryzen™ 7000/8000/9000 Series. Dual DDR5, 2 DIMMs. 5+2+2 VRM. Dual PCIe 4.0/3.0 M.2.'
    },
    {
        title: 'Gigabyte B650M H Motherboard',
        price: 34000,
        priceDisplay: 'Rs. 34,000',
        stock: 'In Stock',
        img: 'https://static.webx.pk/files/78721/Images/Thumbnails-Large/w692-3-78721-0-120225112846078.png',
        brand: 'Gigabyte',
        description: 'Supports AMD Ryzen™ 7000/8000/9000 Series. Dual DDR5, 2 DIMMs. 5+2+2 VRM. Dual PCIe 4.0/3.0 M.2.'
    }
];

let productsPerPage = 20;
let currentPage = 1;
let maxPrice = 0;
let filteredProducts = motherboardProducts.slice();
let selectedBrands = [];
let selectedSockets = [];
let selectedChipsets = [];

function filterProducts() {
    filteredProducts = motherboardProducts.filter(p => {
        const priceMatch = p.price >= maxPrice;
        const brandMatch = selectedBrands.length === 0 || selectedBrands.includes(p.brand);
        const socketMatch = selectedSockets.length === 0 || selectedSockets.includes(p.socket);
        const chipsetMatch = selectedChipsets.length === 0 || selectedChipsets.includes(p.chipset);
        return priceMatch && brandMatch && socketMatch && chipsetMatch;
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
                <h4 class="product-category">MOTHERBOARD</h4>
                <div class="price">${p.priceDisplay}</div>
                <div class="description">
                    High-quality motherboard with ${p.socket} socket and ${p.chipset} chipset for optimal performance and compatibility.
                </div>
                <div class="product-features">
                    <span class="feature-tag">${p.socket}</span>
                    <span class="feature-tag">${p.chipset}</span>
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

// Socket filter
const socketCheckboxes = document.querySelectorAll('.socket-checkbox');
socketCheckboxes.forEach(cb => {
    cb.addEventListener('change', function() {
        selectedSockets = Array.from(socketCheckboxes).filter(c => c.checked).map(c => c.value);
        currentPage = 1;
        filterProducts();
        renderProducts(currentPage);
        renderPagination();
    });
});

// Chipset filter
const chipsetCheckboxes = document.querySelectorAll('.chipset-checkbox');
chipsetCheckboxes.forEach(cb => {
    cb.addEventListener('change', function() {
        selectedChipsets = Array.from(chipsetCheckboxes).filter(c => c.checked).map(c => c.value);
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
    const product = motherboardProducts[productId - 1];
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
    const product = motherboardProducts[productId - 1];
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