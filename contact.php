<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Bawa Computers</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" type="image/png" href="images/favicon.jpg">

     <!-- favicon  -->
  <link rel="icon" type="image/png" href="images/favicon.jpg">
  
    <style>
        body {
            background: linear-gradient(135deg, #e0e0e0 60%, #f7fafd 100%);
            color: #3a3a3a;
            font-family: 'Poppins', Arial, sans-serif;
            margin: 0;
        }
        .contact-hero {
            text-align: center;
            padding: 48px 10px 24px 10px;
        }
        .contact-hero h1 {
            font-size: 2.6rem;
            color: #32658a;
            font-weight: 700;
            margin-bottom: 10px;
        }
        .contact-hero p {
            font-size: 1.15rem;
            color: #3a3a3a;
            margin-bottom: 0;
        }
        .contact-section {
            max-width: 1100px;
            margin: 0 auto 48px auto;
            display: flex;
            gap: 40px;
            align-items: stretch;
            justify-content: center;
            flex-wrap: wrap;
        }
        .contact-form-card {
            background: #32658a;
            color: #fff;
            border-radius: 18px;
            box-shadow: 0 4px 32px rgba(50,101,138,0.13);
            padding: 40px 32px 32px 32px;
            flex: 1 1 340px;
            min-width: 280px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .contact-form-card h2 {
            color: #fff;
            font-size: 2rem;
            margin-bottom: 18px;
            font-weight: 700;
        }
        .contact-form-card form {
            display: flex;
            flex-direction: column;
            gap: 18px;
        }
        .contact-form-card input,
        .contact-form-card textarea {
            padding: 12px 14px;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-family: inherit;
            resize: none;
            background: #f7fafd;
            color: #222;
            box-shadow: 0 1px 4px #e0e7ef;
        }
        .contact-form-card input:focus,
        .contact-form-card textarea:focus {
            outline: 2px solid #0099ff;
        }
        .contact-form-card button {
            background: #0099ff;
            color: #fff;
            border: none;
            padding: 14px 0;
            border-radius: 24px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
            margin-top: 8px;
        }
        .contact-form-card button:hover {
            background: #fff;
            color: #32658a;
        }
        .contact-info-card {
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 4px 32px rgba(50,101,138,0.10);
            padding: 40px 32px 32px 32px;
            flex: 1 1 320px;
            min-width: 260px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .contact-info-card h3 {
            color: #32658a;
            font-size: 1.3rem;
            margin-bottom: 18px;
            font-weight: 700;
        }
        .contact-info-card ul {
            list-style: none;
            padding: 0;
            margin: 0 0 18px 0;
        }
        .contact-info-card ul li {
            margin-bottom: 12px;
            font-size: 1.05rem;
            color: #3a3a3a;
        }
        .contact-info-card .info-icon {
            color: #32658a;
            margin-right: 10px;
        }
        .contact-info-card .contact-social a {
            color: #32658a;
            font-size: 1.3rem;
            margin-right: 16px;
            transition: color 0.2s;
        }
        .contact-info-card .contact-social a:hover {
            color: #0099ff;
        }
        .contact-info-card .contact-map {
            width: 100%;
            min-height: 180px;
            border-radius: 12px;
            overflow: hidden;
            margin-top: 18px;
            box-shadow: 0 2px 8px #e0e0e0;
        }
        @media (max-width: 900px) {
            .contact-section {
                flex-direction: column;
                gap: 24px;
                padding: 0 8px;
            }
            .contact-form-card, .contact-info-card {
                padding: 32px 12px 24px 12px;
            }
        }
        /* Footer Styles (inline for contact page) */
        .footer {
            background: #3a3a3a;
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
            color: #0099ff;
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
            color: #0099ff;
        }
        .footer-bottom {
            text-align: center;
            color: #bbb;
            font-size: 0.98rem;
            margin-top: 32px;
        }
        @media (max-width: 1024px) {
            .footer-container {
                flex-direction: column;
                gap: 24px;
            }
        }
        @media (max-width: 600px) {
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
    <div class="nav-overlay"></div>
    <!-- Contact Section -->
    <div class="contact-hero">
        <h1>Contact Us</h1>
        <p>We'd love to hear from you! Reach out for product inquiries, support, or feedback.</p>
    </div>
    <section class="contact-section content-centered">
        <div class="contact-form-card">
            <h2>Send a Message</h2>
            <form autocomplete="off">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <input type="text" name="subject" placeholder="Subject" required>
                <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
                <button type="submit">Send Message</button>
            </form>
        </div>
        <div class="contact-info-card">
            <h3>Contact Information</h3>
            <ul>
                <li><span class="info-icon"><i class="fas fa-map-marker-alt"></i></span>123 Tech Street, Karachi, Pakistan</li>
                <li><span class="info-icon"><i class="fas fa-phone"></i></span>(021) 123-4567</li>
                <li><span class="info-icon"><i class="fas fa-envelope"></i></span>info@bawacomputers.com</li>
            </ul>
            <div class="contact-social">
                <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="#" title="YouTube"><i class="fab fa-youtube"></i></a>
                <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
            </div>
            <div class="contact-map">
                <iframe src="https://www.google.com/maps?q=karachi%20pakistan&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="180" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <div id="footer"></div>
    <script src="js/script.js"></script>
    <script src="js/include.js"></script>
</body>
</html> 