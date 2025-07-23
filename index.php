<?php
include "config.php";
session_start();
// if(!$_SESSION['email'])
// {
//     header("location:login.php");
// }

if (isset($_POST['btn_logout'])) {
    session_destroy();
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bawa Computers | Landing Page</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- Google Fonts: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <!-- Font Awesome for social icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" type="image/png" href="images/favicon.jpg">
    <style>
        :root {
            --primary-blue: #32658a;
            --dark-gray: #3a3a3a;
            --hover-accent: #0099ff;
            --light-gray-bg: #e0e0e0;
        }

        html,
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', Arial, sans-serif;
            background: var(--light-gray-bg);
            color: var(--dark-gray);
        }

        .hero-carousel {
            width: 100%;
            min-height: 60vh;
            position: relative;
            overflow: hidden;
            background: #222;
            margin: 0;
            padding: 0;
        }

        .carousel-slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 0.7s;
            display: flex;
            align-items: center;
            justify-content: center;
            background-size: cover;
            background-position: center;
        }

        .carousel-slide.active {
            opacity: 1;
            z-index: 1;
        }

        .carousel-content {
            background: rgba(50, 101, 138, 0.65);
            color: #fff;
            padding: 40px 32px;
            border-radius: 18px;
            text-align: center;
            max-width: 600px;
            margin: 0 auto;
        }

        .carousel-content h1 {
            font-size: 2.5rem;
            margin: 0 0 16px 0;
            font-weight: 700;
        }

        .carousel-content p {
            font-size: 1.2rem;
            margin-bottom: 28px;
        }

        .carousel-content .cta-btn {
            background: var(--hover-accent);
            color: #fff;
            border: none;
            padding: 14px 38px;
            font-size: 1.1rem;
            border-radius: 30px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
        }

        .carousel-content .cta-btn:hover {
            background: #fff;
            color: var(--primary-blue);
        }

        .carousel-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(50, 101, 138, 0.8);
            color: #fff;
            border: none;
            font-size: 2rem;
            border-radius: 50%;
            width: 48px;
            height: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 2;
            transition: all 0.3s ease;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        }

        .carousel-arrow:hover {
            background: var(--hover-accent);
        }

        .carousel-arrow.prev {
            left: 30px;
        }

        .carousel-arrow.next {
            right: 30px;
        }

        .carousel-dots {
            position: absolute;
            left: 50%;
            bottom: 30px;
            transform: translateX(-50%);
            display: flex;
            gap: 12px;
            z-index: 3;
        }

        .carousel-dot {
            width: 14px;
            height: 14px;
            border-radius: 50%;
            background: #fff;
            border: 2px solid var(--primary-blue);
            cursor: pointer;
            opacity: 0.7;
            transition: background 0.2s, border 0.2s;
        }

        .carousel-dot.active {
            background: var(--hover-accent);
            border-color: var(--hover-accent);
            opacity: 1;
        }

        .buy-btn {
            background: var(--primary-blue);
            color: #fff;
            border: none;
            padding: 10px 28px;
            border-radius: 24px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
        }

        .buy-btn:hover {
            background: var(--hover-accent);
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-blue);
            text-align: center;
            margin-bottom: 40px;
        }

        .product-card {
            width: 100%;
            position: relative;
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            transition: transform 0.4s ease, box-shadow 0.4s ease;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 10px;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
        }

        .product-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: linear-gradient(45deg, #18181B, #27272A);
            color: white;
            padding: 6px 12px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 1px;
            text-transform: uppercase;
            border-radius: 12px;
            z-index: 10;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .product-tilt-effect {
            overflow: hidden;
            transform-style: preserve-3d;
            perspective: 1000px;
        }

        .product-image {
            height: 200px;
            overflow: hidden;
            position: relative;
        }

        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.8s cubic-bezier(0.19, 1, 0.22, 1);
        }

        .product-card:hover .product-image img {
            transform: scale(1.05);
        }

        .product-info {
            padding: 20px;
            position: relative;
        }

        .product-category {
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 1px;
            text-transform: uppercase;
            color: #71717A;
            margin-bottom: 8px;
        }

        .product-title {
            font-size: 18px;
            font-weight: 700;
            color: #18181B;
            margin: 0 0 12px 0;
            letter-spacing: -0.5px;
            line-height: 1.2;
        }

        .product-description p {
            font-size: 13px;
            color: #52525B;
            line-height: 1.5;
            margin-bottom: 15px;
        }

        .product-features {
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
            margin-bottom: 15px;
        }

        .feature {
            font-size: 10px;
            background-color: #F4F4F5;
            color: #71717A;
            padding: 3px 8px;
            border-radius: 10px;
            font-weight: 500;
        }

        .product-bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .product-price {
            display: flex;
            flex-direction: column;
        }

        .price-was {
            font-size: 12px;
            text-decoration: line-through;
            color: #A1A1AA;
            margin-bottom: 2px;
        }

        .price-now {
            font-size: 18px;
            font-weight: 700;
            color: #18181B;
        }

        .product-button {
            background: linear-gradient(45deg, #18181B, #27272A);
            color: white;
            border: none;
            border-radius: 12px;
            padding: 8px 14px;
            font-size: 12px;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 6px;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
        }

        .product-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            transition: all 0.6s ease;
        }

        .product-button:hover {
            background: linear-gradient(45deg, #27272A, #3F3F46);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .product-button:hover::before {
            left: 100%;
        }

        .button-icon {
            transition: transform 0.3s ease;
        }

        .product-button:hover .button-icon {
            transform: rotate(-10deg) scale(1.1);
        }

        .product-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-top: 1px solid #F4F4F5;
            padding-top: 12px;
        }

        .product-rating {
            display: flex;
            align-items: center;
            gap: 2px;
        }

        .rating-count {
            margin-left: 6px;
            font-size: 11px;
            color: #71717A;
        }

        .product-stock {
            font-size: 11px;
            font-weight: 600;
            color: #22C55E;
        }

        /* Featured Sections */
        .featured-headphones-section,
        .featured-laptops-section,
        .featured-desktops-section,
        .featured-accessories-section,
        .featured-monitors-section {
            max-width: 1400px;
            margin: 60px auto;
            padding: 0 20px;
        }

        .headphones-grid,
        .laptops-grid,
        .desktops-grid,
        .accessories-grid,
        .monitors-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 80px !important;
            margin-bottom: 40px;
        }

        /* Responsive Design */
        @media (max-width: 1200px) {

            .headphones-grid,
            .laptops-grid,
            .desktops-grid,
            .accessories-grid,
            .monitors-grid {
                grid-template-columns: repeat(3, 1fr);
                gap: 60px !important;
            }
        }

        @media (max-width: 1024px) {

            .headphones-grid,
            .laptops-grid,
            .desktops-grid,
            .accessories-grid,
            .monitors-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 35px !important;
            }

            .product-image {
                height: 180px;
            }

            .product-info {
                padding: 16px;
            }

            .product-title {
                font-size: 16px;
            }
        }

        @media (max-width: 768px) {

            .headphones-grid,
            .laptops-grid,
            .desktops-grid,
            .accessories-grid,
            .monitors-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 30px !important;
            }

            .section-title {
                font-size: 2rem;
                margin-bottom: 30px;
            }

            .product-image {
                height: 160px;
            }

            .product-info {
                padding: 14px;
            }

            .product-title {
                font-size: 15px;
            }

            .price-now {
                font-size: 16px;
            }
        }

        @media (max-width: 480px) {

            .headphones-grid,
            .laptops-grid,
            .desktops-grid,
            .accessories-grid,
            .monitors-grid {
                grid-template-columns: 1fr;
                gap: 40px !important;
            }

            .product-card {
                max-width: 320px;
                margin: 0 auto;
            }

            .product-image {
                height: 200px;
            }

            .product-bottom {
                flex-direction: column;
                align-items: flex-start;
                gap: 12px;
            }

            .product-button {
                width: 100%;
                justify-content: center;
            }
        }

        /* Footer */
        .footer {
            background: var(--dark-gray);
            color: #fff;
            padding: 48px 0 24px 0;
            margin-top: 60px;
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
            justify-content: space-between;
            padding: 0 16px;
        }

        .footer-col {
            flex: 1 1 220px;
            min-width: 180px;
        }

        .footer-col h4 {
            font-size: 1.1rem;
            font-weight: 700;
            margin-bottom: 18px;
            color: #fff;
        }

        .footer-col ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-col ul li {
            margin-bottom: 10px;
        }

        .footer-col ul li a {
            color: #fff;
            text-decoration: none;
            transition: color 0.2s;
        }

        .footer-col ul li a:hover {
            color: var(--hover-accent);
        }

        .footer-social {
            margin-top: 18px;
        }

        .footer-social a {
            color: #fff;
            font-size: 1.3rem;
            margin-right: 18px;
            transition: color 0.2s;
        }

        .footer-social a:hover {
            color: var(--hover-accent);
        }

        .footer-bottom {
            text-align: center;
            color: #bbb;
            font-size: 0.98rem;
            margin-top: 32px;
        }

        /* Carousel Responsive */
        @media (max-width: 1200px) {
            .hero-carousel {
                min-height: 50vh;
            }

            .carousel-content {
                padding: 30px 24px;
                max-width: 500px;
            }

            .carousel-content h1 {
                font-size: 2.2rem;
            }

            .carousel-content p {
                font-size: 1.1rem;
            }
        }

        @media (max-width: 1024px) {
            .hero-carousel {
                min-height: 45vh;
            }

            .carousel-content {
                padding: 25px 20px;
                max-width: 450px;
            }

            .carousel-content h1 {
                font-size: 2rem;
            }

            .carousel-content p {
                font-size: 1rem;
                margin-bottom: 20px;
            }

            .carousel-arrow {
                width: 40px;
                height: 40px;
                font-size: 1.5rem;
            }

            .carousel-arrow.prev {
                left: 20px;
            }

            .carousel-arrow.next {
                right: 20px;
            }

            .footer-container {
                flex-direction: column;
                gap: 24px;
            }
        }

        @media (max-width: 768px) {
            .hero-carousel {
                min-height: 40vh;
            }

            .carousel-content {
                padding: 20px 16px;
                max-width: 400px;
            }

            .carousel-content h1 {
                font-size: 1.6rem;
                margin-bottom: 12px;
            }

            .carousel-content p {
                font-size: 0.95rem;
                margin-bottom: 18px;
            }

            .carousel-content .cta-btn {
                padding: 12px 30px;
                font-size: 1rem;
            }

            .carousel-arrow {
                width: 36px;
                height: 36px;
                font-size: 1.3rem;
            }

            .carousel-arrow.prev {
                left: 15px;
            }

            .carousel-arrow.next {
                right: 15px;
            }

            .carousel-dots {
                bottom: 20px;
                gap: 8px;
            }

            .carousel-dot {
                width: 12px;
                height: 12px;
            }
        }

        @media (max-width: 600px) {
            .hero-carousel {
                min-height: 35vh;
            }

            .carousel-content {
                padding: 18px 12px;
                max-width: 350px;
            }

            .carousel-content h1 {
                font-size: 1.4rem;
                margin-bottom: 10px;
            }

            .carousel-content p {
                font-size: 0.9rem;
                margin-bottom: 15px;
            }

            .carousel-content .cta-btn {
                padding: 10px 24px;
                font-size: 0.9rem;
            }

            .carousel-arrow {
                width: 32px;
                height: 32px;
                font-size: 1.1rem;
            }

            .carousel-arrow.prev {
                left: 10px;
            }

            .carousel-arrow.next {
                right: 10px;
            }

            .carousel-dots {
                bottom: 15px;
                gap: 6px;
            }

            .carousel-dot {
                width: 10px;
                height: 10px;
            }

            .footer-container {
                padding: 0 6px;
            }
        }
    </style>
</head>

<body>
    <!-- Top Header -->
    <div class="top-header">
        <div class="container">
            <div class="tagline">Reliable Tech Since 2005</div>
            <div class="account-links">
                <a href="#">My Account</a>
                <a href="login.php">Login</a>
                <a href="signup.php">Register</a>
            </div>
        </div>
    </div>
    <!-- Main Header -->
    <header class="main-header">
        <div class="container header-flex">
            <img src="images/favicon.jpg" style="width: 50px; height: 50px;" alt="Bawa Computers Logo" class="logo-img">
            &nbsp; &nbsp; &nbsp; &nbsp;
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
    <nav class="navbar" id="navbar-main">
        <div class="container nav-flex">
            <ul class="nav-menu" id="nav-menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="laptop.php">Laptops</a></li>
                <li><a href="desktop-pcs.php">Desktop PCs</a></li>
                <li><a href="drives.php">Drives</a></li>
                <li><a href="monitors.php">Monitor</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">Used <i
                            class="fas fa-angle-double-right dropdown-arrow"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="used-laptops.php">Laptops</a></li>
                        <li><a href="used-desktop-pcs.php">Desktop PCs</a></li>
                        <li><a href="used-accessories.php">Accessories</a></li>
                        <li><a href="used-lcds.php">LCDs</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">More <i class="fas fa-angle-right dropdown-arrow"></i></a>
                    <ul class="dropdown-menu more-menu">
                        <li><a href="graphic-cards.php">Graphic Cards</a></li>
                        <li><a href="headphones.php">Headphones</a></li>
                        <li><a href="laptop-memories.php">Laptop Memories</a></li>
                        <li><a href="desktop-memories.php">Desktop Memories</a></li>
                        <li><a href="motherboards.php">Motherboards</a></li>
                        <li><a href="mouse.php">Mouse</a></li>
                        <li><a href="pc-casing.php">PC Casing</a></li>
                        <li><a href="power-supply.php">Power Supply</a></li>
                        <li><a href="scanners.php">Scanners</a></li>
                        <li><a href="tv-box.php">TV Box</a></li>
                        <li><a href="toner-cartridges.php">Toner Cartridges</a></li>
                        <li><a href="ups.php">UPS</a></li>
                    </ul>
                </li>
            </ul>
            <div class="nav-social">
                <a href="wishlist.php" title="Wishlist" id="wishlist-link"><i class="far fa-heart"></i></a>
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
    <div class="nav-overlay"></div>
    <!-- Hero Carousel -->
    <section class="hero-carousel" id="hero-carousel">
        <div class="carousel-slide active"
            style="background-image:url('https://img.freepik.com/premium-photo/high-angle-view-laptop-table_1048944-2649379.jpg?w=1060');">
            <div class="carousel-content">
                <h1>Best Deals on Laptops</h1>
                <p>Upgrade your tech today with unbeatable prices and top brands.</p>
                <button class="cta-btn">Shop Now</button>
            </div>
        </div>
        <div class="carousel-slide"
            style="background-image:url('https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=1200&q=80');">
            <div class="carousel-content">
                <h1>Gaming PCs & Accessories</h1>
                <p>Power up your play with the latest hardware and gear.</p>
                <button class="cta-btn">Explore Gaming</button>
            </div>
        </div>
        <div class="carousel-slide"
            style="background-image:url('https://img.freepik.com/premium-photo/top-view-dark-gray-aluminum-case-laptop-concept-with-red-desk-concept-background-3d-rendering_626958-259.jpg?w=1380');">
            <div class="carousel-content">
                <h1>Business PCs</h1>
                <p>Reliable desktops and IT solutions for your office needs.</p>
                <button href="desktop-pcs.php" class="cta-btn">See products</button>
            </div>
        </div>
        <div class="carousel-slide"
            style="background-image:url('https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=1200&q=80');">
            <div class="carousel-content">
                <h1>Accessories & More</h1>
                <p>Find the perfect accessories to complete your setup.</p>
                <button class="cta-btn">Browse Accessories</button>
            </div>
        </div>
        <button class="carousel-arrow prev" id="carousel-prev"><i class="fas fa-chevron-left"></i></button>
        <button class="carousel-arrow next" id="carousel-next"><i class="fas fa-chevron-right"></i></button>
        <div class="carousel-dots" id="carousel-dots"></div>
    </section>

    <!-- Featured Headphones Section -->
    <section class="featured-headphones-section">
        <h2 class="section-title">Featured Headphones</h2>
        <div class="headphones-grid" id="headphones-grid">
            <!-- Headphones will be loaded dynamically -->
        </div>
    </section>

    <!-- Featured Laptops Section -->
    <section class="featured-laptops-section">
        <h2 class="section-title">Featured Laptops</h2>
        <div class="laptops-grid" id="laptops-grid">
            <!-- Laptops will be loaded dynamically -->
        </div>
    </section>

    <!-- Featured Desktop PCs Section -->
    <section class="featured-desktops-section">
        <h2 class="section-title">Featured Desktop PCs</h2>
        <div class="desktops-grid" id="desktops-grid">
            <!-- Desktop PCs will be loaded dynamically -->
        </div>
    </section>


    <!-- Featured Monitors Section -->
    <section class="featured-monitors-section">
        <h2 class="section-title">Featured Monitors</h2>
        <div class="monitors-grid" id="monitors-grid">
            <!-- Monitors will be loaded dynamically -->
        </div>
    </section>

    <!-- Footer -->
    <div id="footer"></div>

    <script src="js/script.js"></script>
    <script src="js/data.js"></script>
    <script src="js/main.js"></script>
    <script src="js/include.js"></script>
    <script>
        // Carousel functionality
        const slides = document.querySelectorAll('.carousel-slide');
        const prevBtn = document.getElementById('carousel-prev');
        const nextBtn = document.getElementById('carousel-next');
        const dotsContainer = document.getElementById('carousel-dots');
        let currentSlide = 0;
        let autoSlideInterval;

        function showSlide(idx) {
            slides.forEach((slide, i) => {
                slide.classList.toggle('active', i === idx);
            });
            document.querySelectorAll('.carousel-dot').forEach((dot, i) => {
                dot.classList.toggle('active', i === idx);
            });
            currentSlide = idx;
        }
        function nextSlide() {
            let idx = (currentSlide + 1) % slides.length;
            showSlide(idx);
        }
        function prevSlide() {
            let idx = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(idx);
        }
        function startAutoSlide() {
            autoSlideInterval = setInterval(nextSlide, 5000);
        }
        function stopAutoSlide() {
            clearInterval(autoSlideInterval);
        }
        // Dots
        slides.forEach((_, i) => {
            const dot = document.createElement('span');
            dot.className = 'carousel-dot' + (i === 0 ? ' active' : '');
            dot.addEventListener('click', () => {
                showSlide(i);
                stopAutoSlide();
                startAutoSlide();
            });
            dotsContainer.appendChild(dot);
        });
        prevBtn.addEventListener('click', () => {
            prevSlide();
            stopAutoSlide();
            startAutoSlide();
        });
        nextBtn.addEventListener('click', () => {
            nextSlide();
            stopAutoSlide();
            startAutoSlide();
        });
        // Start
        showSlide(0);
        startAutoSlide();



        // Laptops data
        const laptopsData = [
            {
                title: 'Apple MacBook Air MC6U4 M4',
                category: 'Business Laptop',
                description: 'Apple M4 10-Core Chip | 16GB RAM 512GB SSD | 13.6" Liquid Retina Display | 10-Core GPU True Tone Backlit Magic Keyboard | Touch ID MacOS | Sky Blue | International Warranty.',
                price: 'Rs. 375,000',
                oldPrice: 'Rs. 400,000',
                image: 'https://static.webx.pk/files/78721/Images/mba13-m4-skyblue-gallery1-scaled-78721-0-080425063632251.jpg',
                features: ['Intel i5', '8GB RAM', '256GB SSD'],
                badge: 'Premium',
                rating: 5,
                reviews: 89,
                stock: 'In Stock'
            },
            {
                title: 'Apple MacBook Air MW133 M4',
                category: 'Ultrabook',
                description: 'Apple M4 10-Core Chip | 16GB RAM512GB SSD | 13.6" Liquid Retina Display | 10-Core GPUTrue Tone Backlit Magic Keyboard | Touch IDMacOS | Midnight | International Warranty.',
                price: 'Rs. 375,000',
                oldPrice: 'Rs. 400,000',
                image: 'https://static.webx.pk/files/78721/Images/as-images.apple---2025-04-28t163041.103-78721-0-280425113810710.jpg',
                features: ['Intel i7', '16GB RAM', '512GB SSD'],
                badge: 'Premium',
                rating: 5,
                reviews: 156,
                stock: 'In Stock'
            },
            {
                title: 'Asus Vivobook 16 V3607VU-RP118',
                category: 'Business Laptop',
                description: 'Intel® Core™ 7 Processor | 16GB DDR5 1TB M.2 SSD | 16.0" WUXGA | NVIDIA RTX 4050 6GB Graphics Backlit Keyboard | Dos | Matte Black | Official Warranty.',
                price: 'Rs. 375,000',
                oldPrice: 'Rs. 380,000',
                image: 'https://static.webx.pk/files/78721/Images/unnamed-51-78721-0-070525072657761.png',
                features: ['Intel i7', '16GB RAM', '1TB SSD'],
                badge: 'Premium',
                rating: 5,
                reviews: 203,
                stock: 'In Stock'
            },
            {
                title: 'Apple MacBook Air MW103 M4 10',
                category: 'Professional Laptop',
                description: 'PApple M4 10-Core Chip | 16GB RAM 512GB SSD | 13.6" Liquid Retina Display | 10-Core GPU True Tone Backlit Magic Keyboard | Touch IDMacOS | Starlight | International Warranty.',
                price: 'Rs. 375,000',
                oldPrice: 'Rs. 480,000',
                image: 'https://static.webx.pk/files/78721/Images/as-images.apple---2025-06-25t172601.901-78721-0-250625122652050.jpg',
                features: ['M2 Chip', '16GB RAM', '512GB SSD'],
                badge: 'Premium',
                rating: 5,
                reviews: 312,
                stock: 'In Stock'
            },
            {
                title: 'Asus Vivobook Pro15 N6506MU-MA029 Ultra 7',
                category: 'Gaming Laptop',
                description: 'Core Ultra 7-155H Processor | 16GB DDR51 TB SSD | 15.6 OLED | Nvidia 6GB RTX 4050 GDDR6 Backlit Keyboard | Dos | Silver | 1 Year Official Warranty.',
                price: 'Rs. 280,000',
                oldPrice: 'Rs. 320,000',
                image: 'https://images.unsplash.com/photo-1496181133206-80ce9b88a853?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                features: ['Intel i7', '16GB RAM', 'RTX 4060'],
                badge: 'Gaming',
                rating: 5,
                reviews: 178,
                stock: 'In Stock'
            },
            {
                title: 'Dell XPS 13 9315',
                category: 'Budget Laptop',
                description: 'Intel Core i7 1250U 12th Gen | 16GB 5200MHz DDR5 512GB M.2 SSD | 13.4" FHD Display| Intel Iris Xe Graphics Backlit Keyboard | FingerPrint Reader Win11 | Sky Blue | International Warranty.',
                price: 'Rs. 379,000',
                oldPrice: 'Rs. 450,000',
                image: 'https://static.webx.pk/files/78721/Images/dell-xps-9315-78721-2191505-031024022003432.png',
                features: ['Intel i5', '8GB RAM', '512GB SSD'],
                badge: 'Value',
                rating: 4,
                reviews: 234,
                stock: 'In Stock'
            },
            {
                title: 'Dell Latitude 5440 Intel',
                category: 'Creator Laptop',
                description: 'Intel Core i7 1355U 13th Gen | 8GB 3200MHz DDR4 512GB M.2 SSD | 14" FHD Display| Intel UHD Graphics Backlit Keyboard | FingerPrint ReadernDos | Grey | 3 Years Official Warranty.',
                price: 'Rs. 380,000',
                oldPrice: 'Rs. 420,000',
                image: 'https://static.webx.pk/files/78721/Images/rsw-600,h-600-78721-2191501-090924080557362.jpg',
                features: ['Intel i9', '32GB RAM', 'RTX 4070'],
                badge: 'Professional',
                rating: 5,
                reviews: 95,
                stock: 'In Stock'
            },
            {
                title: 'HP OmniBook 7',
                category: 'Student Laptop',
                description: 'Intel Core Ultra 7 258V | 32GB DDR5 1TB M.2 SSD | 16" 3K X360 Touch Display Backlit Keyboard | Intel Arc Graphics | Wi-Fi 7 and Bluetooth 5.3 Windows 11 | Glacier Silver | International Warranty.',
                price: 'Rs. 395,000',
                oldPrice: 'Rs. 510,000',
                image: 'https://static.webx.pk/files/78721/Images/aa-4012-2375740-270525122431924-78721-0-090725081526189.webp',
                features: ['Intel i3', '8GB RAM', '256GB SSD'],
                badge: 'Value',
                rating: 4,
                reviews: 156,
                stock: 'In Stock'
            }
        ];

        // Desktop PCs data
        const desktopsData = [
            {
                title: 'Dell Vostro 3030 Tower',
                category: 'Business Desktop',
                description: 'Intel® Core™ i3 12100 Processor8GB DDR5 Memory | 512GB SSD Intel® UHD Graphics Keyboard, Mouse.',
                price: 'Rs. 108,000',
                oldPrice: 'Rs. 120,000',
                image: 'https://static.webx.pk/files/78721/Images/bf154190-42a6-4be1-a781-6987434e8628-1-1800x1800-78721-0-150425092259790.jpg',
                features: ['Intel i3', '8GB RAM', '512GB SSD'],
                badge: 'Value',
                rating: 4,
                reviews: 67,
                stock: 'In Stock'
            },
            {
                title: 'Asus ExpertCenter D5 Mini Tower',
                category: 'Workstation',
                description: 'Asus ExpertCenter D5 Mini Tower D500TC Intel Core i5-11400 11th Gen 8 GB 1 TB HDD WIN 11 Home - Official Warranty.',
                price: 'Rs. 108,000',
                oldPrice: 'Rs. 120,000',
                image: 'https://static.webx.pk/files/78721/Images/web.whatsapp-6-78721-2194410-161224014124270.jpg',
                features: ['Intel i5', '8GB RAM', '1TB HDD'],
                badge: 'Premium',
                rating: 5,
                reviews: 45,
                stock: 'In Stock'
            },
            {
                title: 'HP Pavilion 570-P045IN',
                category: 'Gaming Desktop',
                description: 'HP Pavilion 570-P045IN Intel Core i7 7th Gen 8GB 2TB NVIDIA GeForce GT 730 2GB GPU -30 Days Conditional Warranty.',
                price: 'Rs. 110,000',
                oldPrice: 'Rs. 140,000',
                image: 'https://static.webx.pk/files/78721/Images/045-1-78721-2195203-100924123410218.jpg',
                features: ['Intel i7', '16GB RAM', 'RTX 3060'],
                badge: 'Gaming',
                rating: 4,
                reviews: 123,
                stock: 'In Stock'
            },
            {
                title: 'HP Pro Tower 290 G9',
                category: 'All-in-One',
                description: 'HP Pro Tower 290 G9 Intel Core i3 14100 4GB 256GB DOS - 1 Year Warranty.',
                price: 'Rs. 115,000',
                oldPrice: 'Rs. 350,000',
                image: 'https://static.webx.pk/files/78721/Images/czone.com.pk-39-1540-18422-050625115313-78721-0-140625102218300.jpg',
                features: ['Core i3', '4GB RAM', '256GB DOS'],
                badge: 'Premium',
                rating: 5,
                reviews: 89,
                stock: 'In Stock'
            },
            {
                title: 'HP Pavilion TP01-1130JP ',
                category: 'Gaming Desktop',
                description: 'HP Pavilion TP01-1130JP Intel Core i3 10th Gen 8GB 1TB 30 Days Conditional Warranty.',
                price: 'Rs. 140,000',
                oldPrice: 'Rs. 500,000',
                image: 'https://static.webx.pk/files/78721/Images/1130-1-78721-2195204-100924123223785.jpg',
                features: ['Intel i3', '8GB RAM', '1TB HDD'],
                badge: 'Premium',
                rating: 5,
                reviews: 78,
                stock: 'In Stock'
            },
            {
                title: 'Asus ExpertCenter D7 SFF D700SC',
                category: 'Office Desktop',
                description: 'Asus ExpertCenter D7 SFF D700SC Intel Core i7-10700 10th Gen 16GB 512GB SSD - Official Warranty.',
                price: 'Rs. 138,000',
                oldPrice: 'Rs. 150,000',
                image: 'https://static.webx.pk/files/78721/Images/web.whatsapp-8-78721-2194413-161224014714692.jpg',
                features: ['Intel i7', '16GB RAM', '512GB SSD'],
                badge: 'Value',
                rating: 4,
                reviews: 145,
                stock: 'In Stock'
            },
            {
                title: 'Dell Optiplex 7010MT',
                category: 'Creator Desktop',
                description: 'Dell Optiplex 7010MT Intel Core i5 12500 12th Gen 8GB 512GB Dos - 1 Year Warranty.',
                price: 'Rs. 143,000',
                oldPrice: 'Rs. 160,000',
                image: 'https://static.webx.pk/files/78721/Images/desktop-optiplex-7010-mt-black-gallery-4-78721-0-150425091122572.png',
                features: ['Intel i5', '8GB RAM', '512GB SSD'],
                badge: 'Professional',
                rating: 5,
                reviews: 92,
                stock: 'In Stock'
            },
            {
                title: 'Asus ExpertCenter D500ME ',
                category: 'Business Desktop',
                description: 'Asus ExpertCenter D500ME Intel Core i5-13500 8GB 512GB SSD Dos - Official Warranty.',
                price: 'Rs. 150,000',
                oldPrice: 'Rs. 170,000',
                image: 'https://static.webx.pk/files/78721/Images/unnamed-28-78721-0-060525104403260.png',
                features: ['Intel i5', '16GB RAM', '512GB SSD'],
                badge: 'Professional',
                rating: 4,
                reviews: 67,
                stock: 'In Stock'
            }
        ];

        // Monitors data
        const monitorsData = [
            {
                title: 'EASE O19I10 19 Full HD Monitor',
                category: 'Gaming Monitor',
                description: 'EASE O19I10 19 Full HD Monitor- 1 Year Warranty | 1920×1080 | IPS Panel 100Hz Refresh Rate | 300 cd/m2 Brightness.',
                price: 'Rs. 24,000',
                oldPrice: 'Rs. 50,000',
                image: 'https://static.webx.pk/files/78721/Images/ease-o19i10-19-full-hd-monitor-1-78721-2192800-110924074744813.jpg',
                features: ['4K Resolution', '144Hz', '1ms Response'],
                badge: 'Gaming',
                rating: 5,
                reviews: 178,
                stock: 'In Stock'
            },
            {
                title: 'Samsung LS19A330NHMXUE 19″ Flat Monitor',
                category: 'Color Monitor',
                description: 'Samsung LS19A330NHMXUE 19″ Flat Monitor | All-day visual care |Essential connectivity | Game Mode.',
                price: 'Rs. 26,000',
                oldPrice: 'Rs. 35,000',
                image: 'https://static.webx.pk/files/78721/Images/samsung-19-inch-flat-led-monitor-1366x768-with-hdmi-1-78721-0-181224082845621.png',
                features: ['99% sRGB', 'HDR', 'USB-C'],
                badge: 'Professional',
                rating: 5,
                reviews: 94,
                stock: 'In Stock'
            },
            // from here
            {
                title: 'Samsung LS19A330NHMXZN 19 Flat Monitor',
                category: 'Wide Monitor',
                description: 'Samsung LS19A330NHMXZN 19 Flat Monitor - 1 Year Warranty | 19″ Inch | TN Panel | 60Hz | 1366 x 768 (HD)HDMI 1.4 × 1All-day visual care | Essential connectivity.',
                price: 'Rs. 27,000',
                oldPrice: 'Rs. 50,000',
                image: 'https://static.webx.pk/files/78721/Images/africa-en-s33a-482532-ls19a330nhmxzn-538685137-conv-78721-2192834-120924073522933.png',
                features: ['34" Curved', '1440p', '100Hz'],
                badge: 'Premium',
                rating: 5,
                reviews: 145,
                stock: 'In Stock'
            },
            {
                title: 'Dell E2020H 20 LCD Monitor',
                category: 'Office Monitor',
                description: 'Dell E2020H 20 LCD Monitor - 1 Year Warranty 20″ Screen | TN Panel | Brightness: 250cd/m² | Contrast Ratio: 1000:1 | Native Resolution: 1600 x 900 | LED-Backlit | Aspect Ratio: 16:9 | Input Connectors: VGA , Display Port.',
                price: 'Rs. 27,500',
                oldPrice: 'Rs. 30,000',
                image: 'https://static.webx.pk/files/78721/Images/dell-e2020h-20-lcd-monitor-1-78721-2192816-110924060920471.jpg',
                features: ['24" Display', '1080p', 'IPS Panel'],
                badge: 'Value',
                rating: 4,
                reviews: 89,
                stock: 'In Stock'
            },
            {
                title: 'EASE O24I10 24 Full HD Monitor',
                category: 'Gaming Monitor',
                description: 'EASE O24I10 24 Full HD Monitor - 1 Year Warranty | 24” Panel Size | IPS Panel | 100 Hz Refresh Rate | 1920 x 1080.',
                price: 'Rs. 30,000',
                oldPrice: 'Rs. 40,000',
                image: 'https://static.webx.pk/files/78721/Images/ease-024i10-24-full-hd-monitor-1-78721-2192802-120924022629896.jpg',
                features: ['27" Display', '165Hz', '1ms Response'],
                badge: 'Gaming',
                rating: 5,
                reviews: 234,
                stock: 'In Stock'
            },
            {
                title: 'Samsung LS24C360EAMXUE S3 S36C 24 Essential FHD 1800R Curved VA FHD 75Hz Monitor',
                category: 'Premium Monitor',
                description: 'Samsung LS24C360EAMXUE S3 S36C 24 Essential FHD 1800R Curved VA FHD 75Hz Monitor - 1 Year Warranty | Flat / Curved Curved | Screen Curvature 1800R | Panel Type VA, Refresh Rate Max 75Hz | Resolution 1,920 x 1,080.',
                price: 'Rs. 32,500',
                oldPrice: 'Rs. 50,000',
                image: 'https://static.webx.pk/files/78721/Images/11-4012-2115837-220624103348642-78721-0-081024092427680.jpg',
                features: ['4K HDR', '32" Display', 'USB-C'],
                badge: 'Premium',
                rating: 5,
                reviews: 67,
                stock: 'In Stock'
            },
            {
                title: 'Viewsonic VA2215-H 22 75Hz FHD Adaptive Sync Monitor',
                category: 'Mobile Monitor',
                description: 'Viewsonic VA2215-H 22 75Hz FHD Adaptive Sync Monitor | Eyecare technology | Eco-mode for low energy consumption | ViewMode color rendering options | 75Hz Adaptive sync',
                price: 'Rs. 32,500',
                oldPrice: 'Rs. 42,000',
                image: 'https://images.unsplash.com/photo-1527443224154-c4a3942d3acf?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                features: ['15.6" Display', 'USB-C', 'Portable'],
                badge: 'Value',
                rating: 4,
                reviews: 123,
                stock: 'In Stock'
            },
            {
                title: 'Asus VA24EHFR 23.8” FHD 100HZ Monitor - (Official Warranty)',
                category: 'Gaming Monitor',
                description: 'Asus VA24EHFR 23.8” FHD 100HZ Monitor - (Official Warranty) Panel Size (inch) : 23.8 | Aspect Ratio : 16:9 | Display Viewing Area (H x V) : 527.04 x 296.46 mm | Display Surface : Non-Glare | Backlight Type : LED | Panel Type : IPS.',
                price: 'Rs. 35,000',
                oldPrice: 'Rs. 85,000',
                image: 'https://static.webx.pk/files/78721/Images/fwebp-4-78721-0-261024093732617.png',
                features: ['32" Curved', '1440p', '144Hz'],
                badge: 'Gaming',
                rating: 5,
                reviews: 189,
                stock: 'In Stock'
            }
        ];

        // Headphones data
        const headphonesData = [
            {
                title: 'Sony WH-1000XM4',
                category: 'Wireless Headphones',
                description: 'Industry-leading noise canceling with Dual Noise Sensor technology.',
                price: 'Rs. 45,000',
                oldPrice: 'Rs. 55,000',
                image: 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                features: ['Noise Cancelling', '30hr Battery', 'Touch Controls'],
                badge: 'Premium',
                rating: 5,
                reviews: 1247,
                stock: 'In Stock'
            },
            {
                title: 'Bose QuietComfort 45',
                category: 'Wireless Headphones',
                description: 'Premium comfort with world-class noise cancellation technology.',
                price: 'Rs. 52,000',
                oldPrice: 'Rs. 62,000',
                image: 'https://images.unsplash.com/photo-1484704849700-f032a568e944?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                features: ['Active Noise Cancelling', '24hr Battery', 'Premium Audio'],
                badge: 'Premium',
                rating: 5,
                reviews: 892,
                stock: 'In Stock'
            },
            {
                title: 'Apple AirPods Max',
                category: 'Wireless Headphones',
                description: 'High-fidelity audio with computational audio and spatial audio.',
                price: 'Rs. 75,000',
                oldPrice: 'Rs. 85,000',
                image: 'https://images.unsplash.com/photo-1618366712010-f4ae9c647dcb?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                features: ['Spatial Audio', '20hr Battery', 'Active Noise Cancelling'],
                badge: 'Premium',
                rating: 5,
                reviews: 567,
                stock: 'In Stock'
            },
            {
                title: 'Sennheiser HD 660S',
                category: 'Open-Back Headphones',
                description: 'Reference-class open-back headphones for audiophiles.',
                price: 'Rs. 38,000',
                oldPrice: 'Rs. 45,000',
                image: 'https://images.unsplash.com/photo-1546435770-a3e426bf472b?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                features: ['Open-Back Design', 'Reference Sound', 'Comfortable'],
                badge: 'Audiophile',
                rating: 5,
                reviews: 234,
                stock: 'In Stock'
            },
            {
                title: 'Audio-Technica ATH-M50x',
                category: 'Studio Headphones',
                description: 'Professional studio monitor headphones with exceptional clarity.',
                price: 'Rs. 18,000',
                oldPrice: 'Rs. 22,000',
                image: 'https://images.unsplash.com/photo-1484704849700-f032a568e944?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                features: ['Studio Monitor', 'Collapsible', 'Detachable Cable'],
                badge: 'Professional',
                rating: 5,
                reviews: 1892,
                stock: 'In Stock'
            },
            {
                title: 'JBL Live 650BTNC',
                category: 'Wireless Headphones',
                description: 'Affordable wireless headphones with active noise cancellation.',
                price: 'Rs. 12,000',
                oldPrice: 'Rs. 15,000',
                image: 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                features: ['Wireless', 'Noise Cancelling', '30hr Battery'],
                badge: 'Value',
                rating: 4,
                reviews: 445,
                stock: 'In Stock'
            },
            {
                title: 'Beyerdynamic DT 770 Pro',
                category: 'Closed-Back Headphones',
                description: 'Professional closed-back headphones for studio and gaming.',
                price: 'Rs. 25,000',
                oldPrice: 'Rs. 30,000',
                image: 'https://images.unsplash.com/photo-1546435770-a3e426bf472b?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                features: ['Closed-Back', 'Studio Quality', 'Comfortable'],
                badge: 'Professional',
                rating: 5,
                reviews: 678,
                stock: 'In Stock'
            },
            {
                title: 'HyperX Cloud Alpha',
                category: 'Gaming Headphones',
                description: 'Dual chamber drivers for clear sound and reduced distortion.',
                price: 'Rs. 16,000',
                oldPrice: 'Rs. 20,000',
                image: 'https://images.unsplash.com/photo-1484704849700-f032a568e944?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                features: ['Gaming Optimized', 'Detachable Mic', 'Dual Chamber'],
                badge: 'Gaming',
                rating: 4,
                reviews: 1234,
                stock: 'In Stock'
            }
        ];

        function renderHeadphones() {
            const headphonesGrid = document.getElementById('headphones-grid');

            headphonesGrid.innerHTML = headphonesData.map(headphone => `
            <div class="product-card">
                <div class="product-badge">${headphone.badge}</div>
                <div class="product-tilt-effect">
                    <div class="product-image">
                        <img src="${headphone.image}" alt="${headphone.title}">
                    </div>
                </div>
                <div class="product-info">
                    <div class="product-category">${headphone.category}</div>
                    <h2 class="product-title">${headphone.title}</h2>
                    <div class="product-description">
                        <p>${headphone.description}</p>
                    </div>
                    <div class="product-features">
                        ${headphone.features.map(feature => `<span class="feature">${feature}</span>`).join('')}
                    </div>
                    <div class="product-bottom">
                        <div class="product-price">
                            <span class="price-was">${headphone.oldPrice}</span>
                            <span class="price-now">${headphone.price}</span>
                        </div>
                        <button class="product-button" onclick="addHeadphoneToCart('${headphone.title}')">
                            <span class="button-text">Add to Cart</span>
                            <svg class="button-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                <line x1="3" y1="6" x2="21" y2="6"></line>
                                <path d="M16 10a4 4 0 0 1-8 0"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="product-meta">
                        <div class="product-rating">
                            ${'<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="#FFD700" stroke="#FFD700" stroke-width="0.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>'.repeat(headphone.rating)}
                            <span class="rating-count">${headphone.reviews} Reviews</span>
                        </div>
                        <div class="product-stock">${headphone.stock}</div>
                    </div>
                </div>
            </div>
        `).join('');
        }

        function renderLaptops() {
            const laptopsGrid = document.getElementById('laptops-grid');

            laptopsGrid.innerHTML = laptopsData.map(laptop => `
            <div class="product-card">
                <div class="product-badge">${laptop.badge}</div>
                <div class="product-tilt-effect">
                    <div class="product-image">
                        <img src="${laptop.image}" alt="${laptop.title}">
                    </div>
                </div>
                <div class="product-info">
                    <div class="product-category">${laptop.category}</div>
                    <h2 class="product-title">${laptop.title}</h2>
                    <div class="product-description">
                        <p>${laptop.description}</p>
                    </div>
                    <div class="product-features">
                        ${laptop.features.map(feature => `<span class="feature">${feature}</span>`).join('')}
                    </div>
                    <div class="product-bottom">
                        <div class="product-price">
                            <span class="price-was">${laptop.oldPrice}</span>
                            <span class="price-now">${laptop.price}</span>
                        </div>
                        <button class="product-button" onclick="addLaptopToCart('${laptop.title}')">
                            <span class="button-text">Add to Cart</span>
                            <svg class="button-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                <line x1="3" y1="6" x2="21" y2="6"></line>
                                <path d="M16 10a4 4 0 0 1-8 0"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="product-meta">
                        <div class="product-rating">
                            ${'<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="#FFD700" stroke="#FFD700" stroke-width="0.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>'.repeat(laptop.rating)}
                            <span class="rating-count">${laptop.reviews} Reviews</span>
                        </div>
                        <div class="product-stock">${laptop.stock}</div>
                    </div>
                </div>
            </div>
        `).join('');
        }

        function renderDesktops() {
            const desktopsGrid = document.getElementById('desktops-grid');

            desktopsGrid.innerHTML = desktopsData.map(desktop => `
            <div class="product-card">
                <div class="product-badge">${desktop.badge}</div>
                <div class="product-tilt-effect">
                    <div class="product-image">
                        <img src="${desktop.image}" alt="${desktop.title}">
                    </div>
                </div>
                <div class="product-info">
                    <div class="product-category">${desktop.category}</div>
                    <h2 class="product-title">${desktop.title}</h2>
                    <div class="product-description">
                        <p>${desktop.description}</p>
                    </div>
                    <div class="product-features">
                        ${desktop.features.map(feature => `<span class="feature">${feature}</span>`).join('')}
                    </div>
                    <div class="product-bottom">
                        <div class="product-price">
                            <span class="price-was">${desktop.oldPrice}</span>
                            <span class="price-now">${desktop.price}</span>
                        </div>
                        <button class="product-button" onclick="addDesktopToCart('${desktop.title}')">
                            <span class="button-text">Add to Cart</span>
                            <svg class="button-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                <line x1="3" y1="6" x2="21" y2="6"></line>
                                <path d="M16 10a4 4 0 0 1-8 0"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="product-meta">
                        <div class="product-rating">
                            ${'<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="#FFD700" stroke="#FFD700" stroke-width="0.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>'.repeat(desktop.rating)}
                            <span class="rating-count">${desktop.reviews} Reviews</span>
                        </div>
                        <div class="product-stock">${desktop.stock}</div>
                    </div>
                </div>
            </div>
        `).join('');
        }

        function renderAccessories() {
            const accessoriesGrid = document.getElementById('accessories-grid');

            accessoriesGrid.innerHTML = accessoriesData.map(accessory => `
            <div class="product-card">
                <div class="product-badge">${accessory.badge}</div>
                <div class="product-tilt-effect">
                    <div class="product-image">
                        <img src="${accessory.image}" alt="${accessory.title}">
                    </div>
                </div>
                <div class="product-info">
                    <div class="product-category">${accessory.category}</div>
                    <h2 class="product-title">${accessory.title}</h2>
                    <div class="product-description">
                        <p>${accessory.description}</p>
                    </div>
                    <div class="product-features">
                        ${accessory.features.map(feature => `<span class="feature">${feature}</span>`).join('')}
                    </div>
                    <div class="product-bottom">
                        <div class="product-price">
                            <span class="price-was">${accessory.oldPrice}</span>
                            <span class="price-now">${accessory.price}</span>
                        </div>
                        <button class="product-button" onclick="addAccessoryToCart('${accessory.title}')">
                            <span class="button-text">Add to Cart</span>
                            <svg class="button-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                <line x1="3" y1="6" x2="21" y2="6"></line>
                                <path d="M16 10a4 4 0 0 1-8 0"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="product-meta">
                        <div class="product-rating">
                            ${'<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="#FFD700" stroke="#FFD700" stroke-width="0.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>'.repeat(accessory.rating)}
                            <span class="rating-count">${accessory.reviews} Reviews</span>
                        </div>
                        <div class="product-stock">${accessory.stock}</div>
                    </div>
                </div>
            </div>
        `).join('');
        }

        function renderMonitors() {
            const monitorsGrid = document.getElementById('monitors-grid');

            monitorsGrid.innerHTML = monitorsData.map(monitor => `
            <div class="product-card">
                <div class="product-badge">${monitor.badge}</div>
                <div class="product-tilt-effect">
                    <div class="product-image">
                        <img src="${monitor.image}" alt="${monitor.title}">
                    </div>
                </div>
                <div class="product-info">
                    <div class="product-category">${monitor.category}</div>
                    <h2 class="product-title">${monitor.title}</h2>
                    <div class="product-description">
                        <p>${monitor.description}</p>
                    </div>
                    <div class="product-features">
                        ${monitor.features.map(feature => `<span class="feature">${feature}</span>`).join('')}
                    </div>
                    <div class="product-bottom">
                        <div class="product-price">
                            <span class="price-was">${monitor.oldPrice}</span>
                            <span class="price-now">${monitor.price}</span>
                        </div>
                        <button class="product-button" onclick="addMonitorToCart('${monitor.title}')">
                            <span class="button-text">Add to Cart</span>
                            <svg class="button-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                <line x1="3" y1="6" x2="21" y2="6"></line>
                                <path d="M16 10a4 4 0 0 1-8 0"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="product-meta">
                        <div class="product-rating">
                            ${'<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="#FFD700" stroke="#FFD700" stroke-width="0.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>'.repeat(monitor.rating)}
                            <span class="rating-count">${monitor.reviews} Reviews</span>
                        </div>
                        <div class="product-stock">${monitor.stock}</div>
                    </div>
                </div>
            </div>
        `).join('');
        }

        function addHeadphoneToCart(headphoneTitle) {
            // Find the headphone in our data
            const headphone = headphonesData.find(h => h.title === headphoneTitle);
            if (!headphone) return;

            // Create cart item
            const cartItem = {
                id: Date.now(), // Generate unique ID
                name: headphone.title,
                price: headphone.price,
                image: headphone.image,
                category: headphone.category
            };

            // Get existing cart or create new one
            let cart = JSON.parse(localStorage.getItem('cart')) || [];

            // Check if product already exists
            const existingItem = cart.find(item => item.name === headphoneTitle);
            if (existingItem) {
                // Show error message
                showNotification(`${headphone.title} is already in your cart!`, 'error');
                return;
            }

            // Add to cart
            cart.push(cartItem);
            localStorage.setItem('cart', JSON.stringify(cart));

            // Show success message
            showNotification(`${headphone.title} added to cart successfully!`, 'success');

            // Update cart counter
            updateCartCounter();
        }

        function addLaptopToCart(laptopTitle) {
            const laptop = laptopsData.find(l => l.title === laptopTitle);
            if (!laptop) return;

            const cartItem = {
                id: Date.now(),
                name: laptop.title,
                price: laptop.price,
                image: laptop.image,
                category: laptop.category
            };

            let cart = JSON.parse(localStorage.getItem('cart')) || [];

            const existingItem = cart.find(item => item.name === laptopTitle);
            if (existingItem) {
                showNotification(`${laptop.title} is already in your cart!`, 'error');
                return;
            }

            cart.push(cartItem);
            localStorage.setItem('cart', JSON.stringify(cart));
            showNotification(`${laptop.title} added to cart successfully!`, 'success');
            updateCartCounter();
        }

        function addDesktopToCart(desktopTitle) {
            const desktop = desktopsData.find(d => d.title === desktopTitle);
            if (!desktop) return;

            const cartItem = {
                id: Date.now(),
                name: desktop.title,
                price: desktop.price,
                image: desktop.image,
                category: desktop.category
            };

            let cart = JSON.parse(localStorage.getItem('cart')) || [];

            const existingItem = cart.find(item => item.name === desktopTitle);
            if (existingItem) {
                showNotification(`${desktop.title} is already in your cart!`, 'error');
                return;
            }

            cart.push(cartItem);
            localStorage.setItem('cart', JSON.stringify(cart));
            showNotification(`${desktop.title} added to cart successfully!`, 'success');
            updateCartCounter();
        }

        function addAccessoryToCart(accessoryTitle) {
            const accessory = accessoriesData.find(a => a.title === accessoryTitle);
            if (!accessory) return;

            const cartItem = {
                id: Date.now(),
                name: accessory.title,
                price: accessory.price,
                image: accessory.image,
                category: accessory.category
            };

            let cart = JSON.parse(localStorage.getItem('cart')) || [];

            const existingItem = cart.find(item => item.name === accessoryTitle);
            if (existingItem) {
                showNotification(`${accessory.title} is already in your cart!`, 'error');
                return;
            }

            cart.push(cartItem);
            localStorage.setItem('cart', JSON.stringify(cart));
            showNotification(`${accessory.title} added to cart successfully!`, 'success');
            updateCartCounter();
        }

        function addMonitorToCart(monitorTitle) {
            const monitor = monitorsData.find(m => m.title === monitorTitle);
            if (!monitor) return;

            const cartItem = {
                id: Date.now(),
                name: monitor.title,
                price: monitor.price,
                image: monitor.image,
                category: monitor.category
            };

            let cart = JSON.parse(localStorage.getItem('cart')) || [];

            const existingItem = cart.find(item => item.name === monitorTitle);
            if (existingItem) {
                showNotification(`${monitor.title} is already in your cart!`, 'error');
                return;
            }

            cart.push(cartItem);
            localStorage.setItem('cart', JSON.stringify(cart));
            showNotification(`${monitor.title} added to cart successfully!`, 'success');
            updateCartCounter();
        }

        function showNotification(message, type) {
            // Create notification element
            const notification = document.createElement('div');
            notification.className = `notification ${type}`;
            notification.textContent = message;

            // Style the notification
            notification.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 15px 20px;
            border-radius: 8px;
            color: white;
            font-weight: 600;
            z-index: 1000;
            transform: translateX(100%);
            transition: transform 0.3s ease;
            ${type === 'success' ? 'background: #22C55E;' : 'background: #EF4444;'}
        `;

            // Add to page
            document.body.appendChild(notification);

            // Animate in
            setTimeout(() => {
                notification.style.transform = 'translateX(0)';
            }, 100);

            // Remove after 3 seconds
            setTimeout(() => {
                notification.style.transform = 'translateX(100%)';
                setTimeout(() => {
                    document.body.removeChild(notification);
                }, 300);
            }, 3000);
        }

        function updateCartCounter() {
            // Get cart from localStorage
            const cart = JSON.parse(localStorage.getItem('cart')) || [];

            // Update cart counter in navbar if it exists
            const cartCounter = document.querySelector('.cart-counter');
            if (cartCounter) {
                cartCounter.textContent = cart.length;
                cartCounter.style.display = cart.length > 0 ? 'block' : 'none';
            }
        }

        // Load all sections when page loads
        document.addEventListener('DOMContentLoaded', function () {
            renderHeadphones();
            renderLaptops();
            renderDesktops();
            renderAccessories();
            renderMonitors();
        });


    </script>
</body>

</html>