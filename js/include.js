// Dynamically load navbar and footer
const navbarHTML = `<nav class="navbar" id="navbar-main">
  <div class="container nav-flex">
    <ul class="nav-menu" id="nav-menu">
      <li><a href="index.html">Home</a></li>
      <li><a href="laptop.html">Laptops</a></li>
      <li><a href="desktop-pcs.html">Desktop PCs</a></li>
      <li><a href="drives.html">Drives</a></li>
      <li><a href="monitors.html">Monitor</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle">Used <i class="fas fa-angle-double-right dropdown-arrow"></i></a>
        <ul class="dropdown-menu">
          <li><a href="used-laptops.html">Laptops</a></li>
          <li><a href="used-desktop-pcs.html">Desktop PCs</a></li>
          <li><a href="used-accessories.html">Accessories</a></li>
          <li><a href="used-lcds.html">LCDs</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle">More <i class="fas fa-angle-right dropdown-arrow"></i></a>
        <ul class="dropdown-menu more-menu">
          <li><a href="graphic-cards.html">Graphic Cards</a></li>
          <li><a href="headphones.html">Headphones</a></li>
          <li><a href="laptop-memories.html">Laptop Memories</a></li>
          <li><a href="desktop-memories.html">Desktop Memories</a></li>
          <li><a href="motherboards.html">Motherboards</a></li>
          <li><a href="mouse.html">Mouse</a></li>
          <li><a href="pc-casing.html">PC Casing</a></li>
          <li><a href="power-supply.html">Power Supply</a></li>
          <li><a href="scanners.html">Scanners</a></li>
          <li><a href="tv-box.html">TV Box</a></li>
          <li><a href="toner-cartridges.html">Toner Cartridges</a></li>
          <li><a href="ups.html">UPS</a></li>
        </ul>
      </li>
    </ul>
    <div class="nav-social">
      <a href="wishlist.html" title="Wishlist" id="wishlist-link"><i class="far fa-heart"></i></a>
      <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
      <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
      <a href="#" title="YouTube"><i class="fab fa-youtube"></i></a>
      <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
    </div>
    <div class="hamburger" id="hamburger">
      <span></span><span></span><span></span>
    </div>
  </div>
</nav>
<div class="nav-overlay"></div>`;

const footerHTML = `<footer class="footer">
  <div class="footer-container">
    <div class="footer-col">
      <h4>About Us</h4>
      <p>Bawa Computers is your trusted partner for laptops, desktops, and accessories. We deliver quality tech and reliable service since 2005.</p>
    </div>
    <div class="footer-col">
      <h4>Menu</h4>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="laptop.html">Laptops</a></li>
        <li><a href="desktop-pcs.html">Desktop PCs</a></li>
        <li><a href="drives.html">Drives</a></li>
        <li><a href="monitors.html">Monitor</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h4>Contact Info</h4>
      <ul>
        <li>123 Tech Street, Karachi, Pakistan</li>
        <li>Phone: (021) 123-4567</li>
        <li>Email: info@bawacomputers.com</li>
      </ul>
      <div class="footer-social">
        <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
        <a href="#" title="YouTube"><i class="fab fa-youtube"></i></a>
        <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
      </div>
    </div>
  </div>
  <div class="footer-bottom">&copy; 2024 Bawa Computers. All rights reserved.</div>
</footer>`;

function loadHTML(selector, url) {
  fetch(url)
    .then(res => {
      if (!res.ok) {
        throw new Error(`HTTP error! status: ${res.status}`);
      }
      return res.text();
    })
    .then(html => {
      document.querySelector(selector).innerHTML = html;
      
      // Initialize navbar functionality after loading
      if (selector === '#navbar') {
        initializeNavbar();
      }
    })
    .catch(error => {
      // Use fallback HTML
      if (selector === '#navbar') {
        document.querySelector(selector).innerHTML = navbarHTML;
        initializeNavbar();
      } else if (selector === '#footer') {
        document.querySelector(selector).innerHTML = footerHTML;
      }
    });
}

// Initialize navbar functionality
function initializeNavbar() {
  const hamburger = document.getElementById('hamburger');
  const navMenu = document.getElementById('nav-menu');
  const navOverlay = document.querySelector('.nav-overlay');

  function closeNavMenu() {
    if (navMenu) navMenu.classList.remove('open');
    if (hamburger) hamburger.classList.remove('active');
    document.body.style.overflow = '';
  }

  if (hamburger && navMenu) {
    hamburger.addEventListener('click', () => {
      navMenu.classList.toggle('open');
      hamburger.classList.toggle('active');
      if (navMenu.classList.contains('open')) {
        document.body.style.overflow = 'hidden';
      } else {
        document.body.style.overflow = '';
      }
    });
  }

  if (navOverlay) {
    navOverlay.addEventListener('click', closeNavMenu);
  }

  // Dropdown toggle for mobile
  const dropdowns = document.querySelectorAll('.dropdown');
  const dropdownToggles = document.querySelectorAll('.dropdown-toggle');

  dropdownToggles.forEach(function(toggle, idx) {
    toggle.addEventListener('click', function(e) {
      if (window.innerWidth <= 768) {
        e.preventDefault();
        // Close all dropdowns except this one
        dropdowns.forEach((d, i) => {
          if (i !== idx) d.classList.remove('open');
        });
        dropdowns[idx].classList.toggle('open');
      }
    });
  });

  // Close dropdown when clicking outside (mobile)
  document.addEventListener('click', function(e) {
    if (window.innerWidth > 768) return;
    let isDropdown = false;
    dropdowns.forEach(d => {
      if (d.contains(e.target)) isDropdown = true;
    });
    if (!isDropdown) {
      dropdowns.forEach(d => d.classList.remove('open'));
    }
  });
}

document.addEventListener('DOMContentLoaded', function() {
  const navbarElement = document.getElementById('navbar');
  const footerElement = document.getElementById('footer');
  
  if(navbarElement) {
    console.log('Navbar element found, loading navbar.html...');
    loadHTML('#navbar', 'navbar.html');
  } else {
    console.log('Navbar element not found');
  }
  
  if(footerElement) {
    console.log('Footer element found, loading footer.html...');
    loadHTML('#footer', 'footer.html');
  } else {
    console.log('Footer element not found');
  }
}); 