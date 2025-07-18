// Hamburger menu toggle
const hamburger = document.getElementById('hamburger');
const navMenu = document.getElementById('nav-menu');
const navOverlay = document.querySelector('.nav-overlay');

function closeNavMenu() {
    navMenu.classList.remove('open');
    hamburger.classList.remove('active');
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

// Sticky navbar effect (optional, since CSS sticky is used, but can add shadow on scroll)
window.addEventListener('scroll', function() {
    const navbar = document.getElementById('navbar');
    if (window.scrollY > 10) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});
