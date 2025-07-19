// Dynamically load navbar and footer
const navbarHTML = `<nav class="navbar" id="navbar-main">
  <div class="container nav-flex">
    <ul class="nav-menu" id="nav-menu">
      <li><a href="index.html">Home</a></li>
      <li><a href="laptop.html">Laptops</a></li>
      <li><a href="#">Desktop PCs</a></li>
      <li><a href="#">Drives</a></li>
      <li><a href="#">Moniter</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle">Used <i class="fas fa-angle-double-right dropdown-arrow"></i></a>
        <ul class="dropdown-menu">
          <li><a href="#">Laptops</a></li>
          <li><a href="#">Desktop PCs</a></li>
          <li><a href="#">Accessories</a></li>
          <li><a href="#">LCDs</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle">More <i class="fas fa-angle-right dropdown-arrow"></i></a>
        <ul class="dropdown-menu more-menu">
          <li><a href="#">Graphic Cards</a></li>
          <li><a href="#">Headphones</a></li>
          <li><a href="#">Laptop Memories</a></li>
          <li><a href="#">Desktop Memories</a></li>
          <li><a href="#">Motherboards</a></li>
          <li><a href="#">Mouse</a></li>
          <li><a href="#">PC Casing</a></li>
          <li><a href="#">Power Supply</a></li>
          <li><a href="#">Scanners</a></li>
          <li><a href="#">TV Box</a></li>
          <li><a href="#">Toner Cartridges</a></li>
          <li><a href="#">UPS</a></li>
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
        <li><a href="#">Desktop PCs</a></li>
        <li><a href="#">Drives</a></li>
        <li><a href="#">Moniter</a></li>
        <li><a href="#">Used - Laptops</a></li>
        <li><a href="#">Used - Desktop PCs</a></li>
        <li><a href="#">Used - Accessories</a></li>
        <li><a href="#">Used - LCDs</a></li>
        <li><a href="#">More - Graphic Cards</a></li>
        <li><a href="#">More - Headphones</a></li>
        <li><a href="#">More - Laptop Memories</a></li>
        <li><a href="#">More - Desktop Memories</a></li>
        <li><a href="#">More - Motherboards</a></li>
        <li><a href="#">More - Mouse</a></li>
        <li><a href="#">More - PC Casing</a></li>
        <li><a href="#">More - Power Supply</a></li>
        <li><a href="#">More - Scanners</a></li>
        <li><a href="#">More - TV Box</a></li>
        <li><a href="#">More - Toner Cartridges</a></li>
        <li><a href="#">More - UPS</a></li>
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
      console.log(`Loaded ${url} into ${selector}`);
      
      // Initialize navbar functionality after loading
      if (selector === '#navbar') {
        initializeNavbar();
      }
    })
    .catch(error => {
      console.error(`Error loading ${url}:`, error);
      // Use fallback HTML
      if (selector === '#navbar') {
        document.querySelector(selector).innerHTML = navbarHTML;
        console.log('Using fallback navbar HTML');
        initializeNavbar();
      } else if (selector === '#footer') {
        document.querySelector(selector).innerHTML = footerHTML;
        console.log('Using fallback footer HTML');
      }
    });
}

// Initialize navbar functionality
function initializeNavbar() {
  console.log('Initializing navbar functionality...');
  
  const hamburger = document.getElementById('hamburger');
  const navMenu = document.getElementById('nav-menu');
  const navOverlay = document.querySelector('.nav-overlay');

  function closeNavMenu() {
    if (navMenu) navMenu.classList.remove('open');
    if (hamburger) hamburger.classList.remove('active');
    document.body.style.overflow = '';
  }

  if (hamburger && navMenu) {
    console.log('Hamburger and nav menu found, adding event listeners...');
    hamburger.addEventListener('click', () => {
      console.log('Hamburger clicked!');
      navMenu.classList.toggle('open');
      hamburger.classList.toggle('active');
      if (navMenu.classList.contains('open')) {
        document.body.style.overflow = 'hidden';
      } else {
        document.body.style.overflow = '';
      }
    });
  } else {
    console.log('Hamburger or nav menu not found');
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
  console.log('DOM loaded, checking for navbar and footer elements...');
  
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