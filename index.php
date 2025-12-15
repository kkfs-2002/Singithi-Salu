<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Singithi Salu - Premium Baby Products Store</title>
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

        /* Header Styles */
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

        .top-bar-left a {
            color: #666;
            text-decoration: none;
        }

        .top-bar-left a:hover {
            color: #ff69b4;
        }

        .top-bar-right a {
            color: #333;
            text-decoration: none;
            margin-left: 20px;
        }

        .top-bar-right a:hover {
            color: #ff69b4;
        }

        /* Main Header */
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

        /* Navigation */
        nav {
            position: relative;
        }

        nav > ul {
            list-style: none;
            display: flex;
            gap: 5px;
        }

        nav > ul > li {
            position: relative;
        }

        nav > ul > li > a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            padding: 10px 20px;
            display: block;
            transition: all 0.3s;
            border-radius: 5px;
        }

        nav > ul > li > a:hover,
        nav > ul > li.active > a {
            background-color: #ff69b4;
            color: white;
        }

        /* Header Icons Section */
        .header-icons {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        /* Search Bar Styling */
        .search-bar {
            position: relative;
            display: flex;
            align-items: center;
        }

        .search-bar input {
            padding: 10px 45px 10px 15px;
            border: 2px solid #e0e0e0;
            border-radius: 25px;
            width: 280px;
            font-size: 14px;
            transition: all 0.3s;
            outline: none;
        }

        .search-bar input:focus {
            border-color: #ff69b4;
            box-shadow: 0 0 0 3px rgba(255, 105, 180, 0.1);
        }

        .search-bar button {
            position: absolute;
            right: 5px;
            background-color: #ff69b4;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 20px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .search-bar button:hover {
            background-color: #ff1493;
        }

        /* Icon Buttons */
        .icon-btn {
            position: relative;
            background-color: transparent;
            border: 2px solid #e0e0e0;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            cursor: pointer;
            font-size: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s;
        }

        .icon-btn:hover {
            background-color: #ff69b4;
            border-color: #ff69b4;
            transform: translateY(-2px);
        }

        .cart-count {
            position: absolute;
            top: -5px;
            right: -5px;
            background-color: #ff1493;
            color: white;
            border-radius: 50%;
            width: 22px;
            height: 22px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 11px;
            font-weight: bold;
            border: 2px solid white;
        }

        /* Hero Section with Image Slider */
        .hero-slider {
            position: relative;
            height: 500px;
            overflow: hidden;
        }

        .slide {
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        .slide.active {
            opacity: 1;
        }

        .slide-content {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 40px;
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .slide-content::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(255, 255, 255, 0.3);
            z-index: 1;
        }

        .slide1 .slide-content {
            background-image: url('vecteezy_adorable-baby-with-blue-eyes-wearing-a-pink-pom-pom-hat-in-a_49332104.jpeg');
        }
        
        .slide2 .slide-content {
            background-image: url('beautiful-newborn-baby-smiling-on-white-cottony-background-photo.jpg');
        }
        
        .slide3 .slide-content {
            background-image: url('future-mother-doing-online-shopping-home.jpg');
        }

        .hero-text {
            position: relative;
            z-index: 2;
        }

        .hero-text h1 {
            font-size: 48px;
            color: #333;
            margin-bottom: 20px;
        }

        .hero-text p {
            font-size: 18px;
            color: #666;
            margin-bottom: 30px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .btn-primary {
            background-color: #ff69b4;
            color: white;
            padding: 15px 40px;
            border: none;
            border-radius: 25px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #ff1493;
        }

        .slider-dots {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 10px;
            z-index: 10;
        }

        .dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background-color: rgba(255,255,255,0.5);
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .dot.active {
            background-color: #ff69b4;
        }

        /* Categories Section */
        .categories {
            max-width: 1400px;
            margin: 60px auto;
            padding: 0 20px;
        }

        .section-title {
            text-align: center;
            font-size: 36px;
            margin-bottom: 40px;
            color: #333;
        }

        .category-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }

        .category-card {
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            cursor: pointer;
        }

        .category-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }

        .category-image {
            width: 100%;
            height: 200px;
            background-size: cover;
            background-position: center;
        }

        .category-info {
            padding: 20px;
            text-align: center;
        }

        .category-info h3 {
            font-size: 20px;
            margin-bottom: 10px;
            color: #333;
        }

        .category-info p {
            color: #666;
            font-size: 14px;
        }

        /* Featured Products */
        .featured-products {
            background-color: #f8f8f8;
            padding: 60px 20px;
        }

        .products-container {
            max-width: 1400px;
            margin: 0 auto;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .product-card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }

        .product-card:hover {
            transform: translateY(-5px);
        }

        .product-image {
            width: 100%;
            height: 280px;
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .product-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #ff69b4;
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
        }

        .product-info {
            padding: 20px;
        }

        .product-info h3 {
            font-size: 18px;
            margin-bottom: 10px;
            color: #333;
        }

        .product-rating {
            color: #ffa500;
            margin-bottom: 10px;
            font-size: 14px;
        }

        .product-price {
            font-size: 22px;
            color: #ff69b4;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .btn-add-cart {
            width: 100%;
            background-color: #87ceeb;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            font-weight: 500;
        }

        .btn-add-cart:hover {
            background-color: #5dade2;
        }

        /* New Arrivals Banner */
        .new-arrivals {
            max-width: 1400px;
            margin: 60px auto;
            padding: 0 20px;
        }

        .arrivals-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-top: 40px;
        }

        .arrival-card {
            position: relative;
            height: 250px;
            border-radius: 10px;
            overflow: hidden;
            cursor: pointer;
        }

        .arrival-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .arrival-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.7), transparent);
            padding: 20px;
            color: white;
        }

        .arrival-overlay h3 {
            font-size: 22px;
            margin-bottom: 5px;
        }

        /* Promotional Banner */
        .promo-banner {
            background: linear-gradient(135deg, #ff69b4 0%, #ff1493 100%);
            color: white;
            padding: 60px 20px;
            text-align: center;
            margin: 60px 0;
        }

        .promo-content {
            max-width: 800px;
            margin: 0 auto;
        }

        .promo-banner h2 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        .promo-banner p {
            font-size: 18px;
            margin-bottom: 30px;
        }

        .btn-secondary {
            background-color: white;
            color: #ff69b4;
            padding: 15px 40px;
            border: none;
            border-radius: 25px;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s;
        }

        .btn-secondary:hover {
            background-color: #f0f0f0;
        }

        /* Footer */
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
            transition: color 0.3s;
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

        /* Responsive Design */
        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                gap: 15px;
            }

            nav ul {
                flex-wrap: wrap;
                justify-content: center;
            }

            .search-bar input {
                width: 200px;
            }

            .hero-text h1 {
                font-size: 32px;
            }
        }
    </style>
</head>
<body>
    <!-- Top Bar -->
    <div class="top-bar">
        <div class="top-bar-content">
            <div class="top-bar-left">
                📞 +94 77 784 2982 | ✉ <a href="mailto:info@singithisalu.lk">info@singithisalu.lk</a>
            </div>
            <div class="top-bar-right">
                <a href="login.html">Login</a>
                <a href="register.html">Register</a>
            </div>
        </div>
    </div>

    <!-- Main Header -->
    <header>
        <div class="header-content">
            <div class="logo" onclick="window.location.href='index.html'">
                Singithi <span>Salu</span>
            </div>
            
            <nav>
                <ul>
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="product.html?category=new-arrivals">New Arrivals</a></li>
                    <li><a href="product.html?category=baby-essentials">Baby Essentials</a></li>
                    <li><a href="product.html?category=baby-gear">Baby Gear</a></li>
                    <li><a href="product.html?category=girls-clothing">Girls Clothing</a></li>
                    <li><a href="product.html?category=boys-clothing">Boys Clothing</a></li>
                    <li><a href="product.html?category=bedding">Bedding</a></li>
                </ul>
            </nav>

            <div class="header-icons">
                <div class="search-bar">
                    <input type="text" placeholder="Search products..." id="searchInput">
                    <button onclick="searchProducts()">🔍</button>
                </div>
                <button class="icon-btn" onclick="window.location.href='cart.html'">
                    🛒
                    <span class="cart-count">0</span>
                </button>
                <button class="icon-btn" onclick="window.location.href='profile.html'">
                    👤
                </button>
            </div>
        </div>
    </header>

    <!-- Hero Slider -->
    <section class="hero-slider">
        <div class="slide slide1 active">
            <div class="slide-content">
                <div class="hero-text">
                    <h1>Welcome to Singithi Salu</h1>
                    <p>Your trusted destination for premium baby products in Sri Lanka. Quality products for your little ones, delivered to your doorstep.</p>
                    <button class="btn-primary" onclick="window.location.href='products.html'">Shop Now</button>
                </div>
            </div>
        </div>
        <div class="slide slide2">
            <div class="slide-content">
                <div class="hero-text">
                    <h1>New Arrivals Collection</h1>
                    <p>Explore our latest baby clothing, toys, and essentials. Fresh styles for your precious little ones.</p>
                    <button class="btn-primary" onclick="window.location.href='new-arrivals.html'">Discover More</button>
                </div>
            </div>
        </div>
        <div class="slide slide3">
            <div class="slide-content">
                <div class="hero-text">
                    <h1>Special Offer - 20% OFF</h1>
                    <p>Get amazing discounts on selected baby products. Limited time offer!</p>
                    <button class="btn-primary" onclick="window.location.href='products.html'">Shop Sale</button>
                </div>
            </div>
        </div>
        <div class="slider-dots">
            <span class="dot active" onclick="currentSlide(0)"></span>
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="categories">
        <h2 class="section-title">Shop by Category</h2>
        <div class="category-grid">
            <div class="category-card" onclick="filterCategory('infant-clothing')">
                <div class="category-image" style="background-image: url('4648d5889571b7d89d1bae10070f8a1f.jpg_720x720q80.jpg');"></div>
                <div class="category-info">
                    <h3>Infant Clothing</h3>
                    <p>Soft & comfortable clothes for newborns</p>
                </div>
            </div>
            <div class="category-card" onclick="filterCategory('toys')">
                <div class="category-image" style="background-image: url('six-month-old-baby-toys.jpg');"></div>
                <div class="category-info">
                    <h3>Toys & Play</h3>
                    <p>Educational and fun toys</p>
                </div>
            </div>
            <div class="category-card" onclick="filterCategory('feeding')">
                <div class="category-image" style="background-image: url('baby_solid_feeding_essentials-5_30b7b9aa-55c2-408b-ba6c-42de13a41e4e.jpg');"></div>
                <div class="category-info">
                    <h3>Feeding Essentials</h3>
                    <p>Bottles, bibs & feeding accessories</p>
                </div>
            </div>
            <div class="category-card" onclick="filterCategory('bedding')">
                <div class="category-image" style="background-image: url('c6c7fbbd-86c8-4836-8211-a88f4f32b7e3_size1684x950_1024x1024.webp');"></div>
                <div class="category-info">
                    <h3>Bedding</h3>
                    <p>Comfortable bedding sets</p>
                </div>
            </div>
        </div>
    </section>

    <!-- New Arrivals -->
    <section class="new-arrivals">
        <h2 class="section-title">New Arrivals</h2>
        <div class="arrivals-grid">
            <div class="arrival-card" onclick="window.location.href='products.html?category=girls-dresses'">
                <img src="79ceff8e816c3836e2c813aebbc6cc65.jpg_960x960q80.jpg_.webp" alt="Girls Dresses">
                <div class="arrival-overlay">
                    <h3>Girls Dresses</h3>
                    <p>Beautiful new collection</p>
                </div>
            </div>
            <div class="arrival-card" onclick="window.location.href='products.html?category=boys-rompers'">
                <img src="8698df9a7fe9913cb5e31624f389c874.jpg_720x720q80.jpg" alt="Boys Rompers">
                <div class="arrival-overlay">
                    <h3>Boys Rompers</h3>
                    <p>Comfortable & stylish</p>
                </div>
            </div>
            <div class="arrival-card" onclick="window.location.href='products.html?category=baby-gear'">
                <img src="4-in-1-sit-to-stand-learning-walker-9447449.webp" alt="Baby Gear">
                <div class="arrival-overlay">
                    <h3>Baby Gear</h3>
                    <p>Latest strollers & carriers</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="featured-products">
        <div class="products-container">
            <h2 class="section-title">Featured Products</h2>
            <div class="product-grid">
                <div class="product-card">
                    <div class="product-image" style="background-image: url('How_to_Use_Reusable_Nappies.webp');">
                        <span class="product-badge">NEW</span>
                    </div>
                    <div class="product-info">
                        <h3>Baby Nappies </h3>
                        <div class="product-rating">⭐⭐⭐⭐⭐ (48 reviews)</div>
                        <div class="product-price">Rs. 585</div>
                        <button class="btn-add-cart" onclick="addToCart(1)">Add to Cart</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image" style="background-image: url('Foldable-Baby-Cribs-Iron-Material-Make-Travel-Use-Portable-Kids-Bed-Cot-on-Sale-in-Stock.avif');">
                        <span class="product-badge">SALE</span>
                    </div>
                    <div class="product-info">
                        <h3>Baby Cots</h3>
                        <div class="product-rating">⭐⭐⭐⭐⭐ (92 reviews)</div>
                        <div class="product-price">Rs. 38,900</div>
                        <button class="btn-add-cart" onclick="addToCart(2)">Add to Cart</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image" style="background-image: url('6dd19a63699e4e705cda6c345782120c.jpg');">
                    </div>
                    <div class="product-info">
                        <h3>Baby Horse</h3>
                        <div class="product-rating">⭐⭐⭐⭐⭐ (67 reviews)</div>
                        <div class="product-price">Rs. 7,400</div>
                        <button class="btn-add-cart" onclick="addToCart(3)">Add to Cart</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image" style="background-image: url('smile-baby-walker-609x684.jpg');">
                    </div>
                    <div class="product-info">
                        <h3>GoCarts</h3>
                        <div class="product-rating">⭐⭐⭐⭐⭐ (125 reviews)</div>
                        <div class="product-price">Rs. 3,900</div>
                        <button class="btn-add-cart" onclick="addToCart(4)">Add to Cart</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image" style="background-image: url('Hot-Sale-Kids-Scooter-Baby-Toy-3-Wheel-Baby-Bike-Foldable-Baby-Kick-Scooter.avif');">
                        <span class="product-badge">NEW</span>
                    </div>
                    <div class="product-info">
                        <h3>Scooters</h3>
                        <div class="product-rating">⭐⭐⭐⭐⭐ (56 reviews)</div>
                        <div class="product-price">Rs. 3,850</div>
                        <button class="btn-add-cart" onclick="addToCart(5)">Add to Cart</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image" style="background-image: url('1-600x600.jpg');">
                    </div>
                    <div class="product-info">
                        <h3>6-12 Month Velona Baby Suits</h3>
                        <div class="product-rating">⭐⭐⭐⭐⭐ (84 reviews)</div>
                        <div class="product-price">Rs. 1,750</div>
                        <button class="btn-add-cart" onclick="addToCart(6)">Add to Cart</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image" style="background-image: url('655b473c8ad411424a2536d9-royalbaby-bunny-16-inch-girl-s-bicycle.jpg');">
                    </div>
                    <div class="product-info">
                        <h3>Bicycles</h3>
                        <div class="product-rating">⭐⭐⭐⭐⭐ (110 reviews)</div>
                        <div class="product-price">Rs. 3,950</div>
                        <button class="btn-add-cart" onclick="addToCart(7)">Add to Cart</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image" style="background-image: url('601-pink-color-feeding-chair-1.jpg');">
                        <span class="product-badge">SALE</span>
                    </div>
                    <div class="product-info">
                        <h3>Feeding Chairs</h3>
                        <div class="product-rating">⭐⭐⭐⭐⭐ (73 reviews)</div>
                        <div class="product-price">Rs. 7,500</div>
                        <button class="btn-add-cart" onclick="addToCart(8)">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Promotional Banner -->
    <section class="promo-banner">
        <div class="promo-content">
            <h2>Special Offer - 20% OFF</h2>
            <p>Get 20% discount on all baby clothing items this week! Limited time offer.</p>
            <button class="btn-secondary" onclick="window.location.href='products.html'">Shop Now</button>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>About Singithi Salu</h3>
                <p>Your trusted partner for premium baby products in Sri Lanka. Quality assured, delivered with care.</p>
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
                    <li><a href="track-order.html">Track Order</a></li>
                    <li><a href="returns.html">Returns</a></li>
                    <li><a href="faq.html">FAQ</a></li>
                    <li><a href="shipping.html">Shipping Info</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Contact Us</h3>
                <p>📍 Ambalangoda, Sri Lanka</p>
                <p>📞 +94 77 784 2982</p>
                <p>✉ <a href="mailto:info@singithisalu.lk">info@singithisalu.lk</a></p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 Singithi Salu. All rights reserved.</p>
        </div>
    </footer>

    <script>
        // Hero Slider
        let slideIndex = 0;
        let slideTimer;

        function showSlide(n) {
            const slides = document.querySelectorAll('.slide');
            const dots = document.querySelectorAll('.dot');
            
            if (n >= slides.length) { slideIndex = 0; }
            if (n < 0) { slideIndex = slides.length - 1; }
            
            slides.forEach(slide => slide.classList.remove('active'));
            dots.forEach(dot => dot.classList.remove('active'));
            
            slides[slideIndex].classList.add('active');
            dots[slideIndex].classList.add('active');
        }

        function currentSlide(n) {
            clearInterval(slideTimer);
            slideIndex = n;
            showSlide(slideIndex);
            startSlideTimer();
        }

        function nextSlide() {
            slideIndex++;
            showSlide(slideIndex);
        }

        function startSlideTimer() {
            slideTimer = setInterval(nextSlide, 5000);
        }

        // Start auto-sliding
        startSlideTimer();

        // Cart management
        let cartCount = 0;

        function addToCart(productId) {
            cartCount++;
            document.querySelector('.cart-count').textContent = cartCount;
            
            // Show feedback
            const btn = event.target;
            const originalText = btn.textContent;
            btn.textContent = 'Added!';
            btn.style.backgroundColor = '#4CAF50';
            
            setTimeout(() => {
                btn.textContent = originalText;
                btn.style.backgroundColor = '';
            }, 1500);
        }

        function searchProducts() {
            const searchTerm = document.getElementById('searchInput').value;
            if(searchTerm) {
                window.location.href = 'products.html?search=' + encodeURIComponent(searchTerm);
            }
        }

        function filterCategory(category) {
            window.location.href = 'products.html?category=' + category;
        }

        // Allow search on Enter key
        document.getElementById('searchInput').addEventListener('keypress', function(e) {
            if(e.key === 'Enter') {
                searchProducts();
            }
        });
    </script>
</body>
</html>
