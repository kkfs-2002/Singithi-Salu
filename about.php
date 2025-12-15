<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Singithi Salu</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
        }

        .top-bar {
            background-color: #f8f8f8;
            padding: 10px 0;
            font-size: 14px;
            border-bottom: 1px solid #e0e0e0;
        }

        .top-bar-content {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .top-bar-left {
            color: #666;
        }

        .top-bar-right a {
            color: #333;
            text-decoration: none;
            margin-left: 20px;
        }

        header {
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .header-content {
            max-width: 1400px;
            margin: 0 auto;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 28px;
            font-weight: bold;
            color: #ff69b4;
            cursor: pointer;
        }

        .logo span {
            color: #87ceeb;
        }

        .hero-banner {
            background: linear-gradient(135deg, #ff69b4 0%, #87ceeb 100%);
            color: white;
            padding: 80px 20px;
            text-align: center;
        }

        .hero-banner h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }

        .hero-banner p {
            font-size: 18px;
            max-width: 800px;
            margin: 0 auto;
        }

        .container {
            max-width: 1200px;
            margin: 60px auto;
            padding: 0 20px;
        }

        .section {
            margin-bottom: 60px;
        }

        .section h2 {
            font-size: 32px;
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }

        .section p {
            font-size: 16px;
            color: #666;
            line-height: 1.8;
            margin-bottom: 15px;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .feature-card {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 3px 15px rgba(0,0,0,0.1);
            text-align: center;
        }

        .feature-icon {
            font-size: 48px;
            margin-bottom: 20px;
        }

        .feature-card h3 {
            font-size: 22px;
            color: #ff69b4;
            margin-bottom: 15px;
        }

        .feature-card p {
            color: #666;
            font-size: 14px;
        }

        .values-section {
            background-color: #f8f8f8;
            padding: 60px 20px;
            margin: 60px 0;
        }

        .values-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-top: 40px;
        }

        .value-item {
            text-align: center;
        }

        .value-item h3 {
            font-size: 24px;
            color: #ff69b4;
            margin-bottom: 15px;
        }

        .value-item p {
            color: #666;
        }

        .founder-section {
            background-color: #fff;
            padding: 60px 20px;
            margin: 60px 0;
        }

        .founder-container {
            max-width: 1000px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 50px;
            align-items: center;
        }

        .founder-image-wrapper {
            text-align: center;
        }

        .founder-image {
            width: 100%;
            max-width: 300px;
            height: 350px;
            border-radius: 10px;
            object-fit: cover;
            box-shadow: 0 5px 20px rgba(0,0,0,0.15);
            border: 5px solid #ff69b4;
        }

        .founder-image-placeholder {
            width: 100%;
            max-width: 300px;
            height: 350px;
            background: linear-gradient(135deg, #ff69b4 0%, #87ceeb 100%);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 48px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.15);
            border: 5px solid #ff69b4;
            margin: 0 auto;
        }

        .founder-info h2 {
            font-size: 32px;
            color: #ff69b4;
            margin-bottom: 10px;
        }

        .founder-info h3 {
            font-size: 20px;
            color: #87ceeb;
            margin-bottom: 20px;
        }

        .founder-info p {
            color: #666;
            line-height: 1.8;
            margin-bottom: 15px;
        }

        @media (max-width: 768px) {
            .founder-container {
                grid-template-columns: 1fr;
                gap: 30px;
            }
        }

        footer {
            background-color: #333;
            color: white;
            padding: 40px 20px 20px;
        }

        .footer-content {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 30px;
        }

        .footer-section h3 {
            margin-bottom: 20px;
            color: #ff69b4;
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section ul li {
            margin-bottom: 10px;
        }

        .footer-section a {
            color: #ccc;
            text-decoration: none;
        }

        .footer-section a:hover {
            color: #ff69b4;
        }

        .footer-bottom {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid #555;
            color: #999;
        }
    </style>
</head>
<body>
    <div class="top-bar">
        <div class="top-bar-content">
            <div class="top-bar-left">
                📞 +94 77 784 2982 | ✉ info@singithisalu.lk
            </div>
            <div class="top-bar-right">
                <a href="login.html">Login</a>
                <a href="register.html">Register</a>
            </div>
        </div>
    </div>

    <header>
        <div class="header-content">
            <div class="logo" onclick="window.location.href='index.html'">
                Singithi <span>Salu</span>
            </div>
        </div>
    </header>

    <div class="hero-banner">
        <h1>About Singithi Salu</h1>
        <p>Founded by Mr. N.P. Ranasinghe - 20 Years of Excellence in Baby Care</p>
    </div>

    <div class="founder-image-placeholder">
    <img src="WhatsApp Image 2025-10-04 at 22.05.47_6c6e2e15.jpg" alt="Mr. N.P. Ranasinghe - Founder" class="founder-image">
    </div>

    <div class="container">
        <div class="section">
            <h2>Our Story</h2>
            <p>
                Singithi Salu was founded by <strong>Mr. N.P. Ranasinghe</strong> with a simple yet powerful mission: to provide Sri Lankan parents with access to high-quality, safe, and affordable baby products. For the past <strong>20 years</strong>, we have been serving families across Sri Lanka with dedication, expertise, and unwavering commitment to excellence.
            </p>
            <p>
                Our journey began two decades ago when our founder, Mr. N.P. Ranasinghe, himself a parent, recognized the need for a reliable source of premium baby products in Sri Lanka. Understanding the concerns and aspirations of every parent, he set out to create a store that would not just sell products, but build trust and lasting relationships with families.
            </p>
            <p>
                Over the past 20 years, we have grown from a small venture into one of the most trusted names in baby care across Sri Lanka. Our success is built on a foundation of exceptional customer service, quality products, and the trust of thousands of satisfied families who have made us part of their parenting journey.
            </p>
            <p>
                Today, we continue to uphold the values established by our founder - commitment to quality, dedication to customer satisfaction, and a deep understanding of what parents need for their children. Every product we offer is carefully selected and tested to meet international safety standards, ensuring that your little one gets nothing but the best.
            </p>
        </div>

        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">🏆</div>
                <h3>20 Years of Excellence</h3>
                <p>Two decades of trusted service and customer satisfaction since our founding by Mr. N.P. Ranasinghe.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🛡️</div>
                <h3>Quality Assured</h3>
                <p>All our products meet international safety standards and are carefully inspected for quality.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🚚</div>
                <h3>Fast Delivery</h3>
                <p>Quick and reliable delivery across Sri Lanka, bringing products right to your doorstep.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">💝</div>
                <h3>Customer Care</h3>
                <p>Dedicated support team with decades of experience, ready to help you with any questions.</p>
            </div>
        </div>
    </div>

    <div class="values-section">
        <div class="values-container">
            <h2>Our Values</h2>
            <div class="values-grid">
                <div class="value-item">
                    <h3>Safety First</h3>
                    <p>We never compromise on the safety of your child. Every product is thoroughly vetted for safety compliance.</p>
                </div>
                <div class="value-item">
                    <h3>Trust</h3>
                    <p>Building lasting relationships with our customers through transparency and reliability for 20 years.</p>
                </div>
                <div class="value-item">
                    <h3>Quality</h3>
                    <p>Only the finest products make it to our shelves, ensuring your baby gets the best.</p>
                </div>
                <div class="value-item">
                    <h3>Experience</h3>
                    <p>Two decades of expertise in baby care products and exceptional customer service.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="section">
            <h2>Why Choose Us?</h2>
            <p>
                At Singithi Salu, we believe that every parent deserves access to the best products for their children. With <strong>20 years of experience</strong> in the industry, here's what sets us apart:
            </p>
            <p>
                <strong>Extensive Selection:</strong> From clothing and toys to feeding essentials and nursery furniture, we offer a comprehensive range of baby products under one roof.
            </p>
            <p>
                <strong>Expert Guidance:</strong> Our team, backed by two decades of experience, is always ready to help you choose the right products for your baby's specific needs.
            </p>
            <p>
                <strong>Proven Track Record:</strong> Twenty years of serving families across Sri Lanka speaks to our commitment to quality and customer satisfaction.
            </p>
            <p>
                <strong>Affordable Excellence:</strong> We believe quality shouldn't break the bank. Our pricing strategy ensures premium products remain accessible to all families.
            </p>
            <p>
                <strong>Community Focus:</strong> We're more than just a store - we're a community of parents supporting each other through the beautiful journey of parenthood.
            </p>
        </div>
    </div>

    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>About Singithi Salu</h3>
                <p>Your trusted partner for premium baby products in Sri Lanka.</p>
            </div>
            <div class="footer-section">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="privacy.html">Privacy Policy</a></li>
                    <li><a href="terms.html">Terms & Conditions</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Customer Service</h3>
                <ul>
                    <li><a href="#">Track Order</a></li>
                    <li><a href="#">Returns</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Shipping Info</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Contact Us</h3>
                <p>📍 Ambalangoda, Sri Lanka</p>
                <p>📞 +94 77 784 2982</p>
                <p>✉ info@singithisalu.lk</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 Singithi Salu. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>