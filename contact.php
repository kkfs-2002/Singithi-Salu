<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Singithi Salu</title>
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
            background-color: #f8f8f8;
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

        nav ul {
            list-style: none;
            display: flex;
            gap: 30px;
        }

        nav a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: color 0.3s;
        }

        nav a:hover {
            color: #ff69b4;
        }

        /* Contact Section */
        .contact-hero {
            background: linear-gradient(135deg, #ff69b4 0%, #ff1493 100%);
            color: white;
            padding: 60px 20px;
            text-align: center;
        }

        .contact-hero h1 {
            font-size: 48px;
            margin-bottom: 15px;
        }

        .contact-hero p {
            font-size: 18px;
            max-width: 600px;
            margin: 0 auto;
        }

        .contact-container {
            max-width: 1200px;
            margin: -50px auto 60px;
            padding: 0 20px;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            margin-bottom: 40px;
        }

        .contact-card {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }

        .contact-info h2 {
            color: #ff69b4;
            margin-bottom: 30px;
            font-size: 28px;
        }

        .info-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 25px;
            padding: 20px;
            background-color: #f8f8f8;
            border-radius: 10px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .info-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .info-icon {
            font-size: 30px;
            margin-right: 20px;
            min-width: 40px;
        }

        .info-content h3 {
            color: #333;
            margin-bottom: 8px;
            font-size: 18px;
        }

        .info-content p {
            color: #666;
            margin-bottom: 5px;
        }

        .info-content a {
            color: #ff69b4;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }

        .info-content a:hover {
            color: #ff1493;
        }

        .contact-form h2 {
            color: #ff69b4;
            margin-bottom: 30px;
            font-size: 28px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-weight: 500;
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 15px;
            transition: border-color 0.3s;
        }

        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            outline: none;
            border-color: #ff69b4;
        }

        .form-group textarea {
            resize: vertical;
            min-height: 120px;
        }

        .btn-submit {
            background-color: #ff69b4;
            color: white;
            padding: 15px 40px;
            border: none;
            border-radius: 25px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
            width: 100%;
            font-weight: 600;
        }

        .btn-submit:hover {
            background-color: #ff1493;
        }

        .social-links {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            text-align: center;
        }

        .social-links h2 {
            color: #ff69b4;
            margin-bottom: 25px;
            font-size: 28px;
        }

        .social-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .social-btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 15px 30px;
            border-radius: 10px;
            text-decoration: none;
            font-weight: 600;
            transition: transform 0.3s, box-shadow 0.3s;
            font-size: 16px;
        }

        .social-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        .whatsapp-btn {
            background-color: #25D366;
            color: white;
        }

        .facebook-btn {
            background-color: #1877F2;
            color: white;
        }

        .map-section {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            margin-top: 40px;
        }

        .map-section h2 {
            color: #ff69b4;
            margin-bottom: 20px;
            font-size: 28px;
            text-align: center;
        }

        .map-placeholder {
            background-color: #f0f0f0;
            height: 400px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #666;
        }

        /* Footer */
        footer {
            background-color: #333;
            color: white;
            padding: 40px 20px 20px;
            margin-top: 60px;
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

        @media (max-width: 768px) {
            .contact-grid {
                grid-template-columns: 1fr;
            }

            .contact-hero h1 {
                font-size: 32px;
            }

            .social-buttons {
                flex-direction: column;
            }

            .social-btn {
                width: 100%;
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    <!-- Top Bar -->
    <div class="top-bar">
        <div class="top-bar-content">
            <div class="top-bar-left">
                📞 0777 842982 | 📱 WhatsApp: 0711 040024
            </div>
            <div class="top-bar-right">
                <a href="login.php">Login</a>
                <a href="register.php">Register</a>
            </div>
        </div>
    </div>

    <!-- Main Header -->
    <header>
        <div class="header-content">
            <div class="logo" onclick="window.location.href='index.php'">
                Singithi <span>Salu</span>
            </div>
            
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="products.php">Products</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Contact Hero -->
    <section class="contact-hero">
        <h1>Get In Touch</h1>
        <p>Have questions? We'd love to hear from you. Send us a message and we'll respond as soon as possible.</p>
    </section>

    <!-- Contact Content -->
    <div class="contact-container">
        <div class="contact-grid">
            <!-- Contact Information -->
            <div class="contact-card contact-info">
                <h2>Contact Information</h2>
                
                <div class="info-item">
                    <div class="info-icon">📞</div>
                    <div class="info-content">
                        <h3>Phone</h3>
                        <p><a href="tel:+94777842982">0777 842982</a></p>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-icon">💬</div>
                    <div class="info-content">
                        <h3>WhatsApp</h3>
                        <p><a href="https://wa.me/94711040024" target="_blank">0711 040024</a></p>
                        <p style="font-size: 13px; color: #999;">Click to chat with us</p>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-icon">✉️</div>
                    <div class="info-content">
                        <h3>Email</h3>
                        <p><a href="mailto:info@singithisalu.lk">info@singithisalu.lk</a></p>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-icon">📍</div>
                    <div class="info-content">
                        <h3>Location</h3>
                        <p>Ambalangoda, Sri Lanka</p>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-icon">⏰</div>
                    <div class="info-content">
                        <h3>Business Hours</h3>
                        <p>Monday - Sunday: 8:30 AM - 7:00 PM</p>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-card contact-form">
                <h2>Send Us a Message</h2>
                <form id="contactForm">
                    <div class="form-group">
                        <label for="name">Full Name *</label>
                        <input type="text" id="name" name="name" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address *</label>
                        <input type="email" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone">
                    </div>

                    <div class="form-group">
                        <label for="subject">Subject *</label>
                        <select id="subject" name="subject" required>
                            <option value="">Select a subject</option>
                            <option value="product-inquiry">Product Inquiry</option>
                            <option value="order-status">Order Status</option>
                            <option value="returns">Returns & Exchanges</option>
                            <option value="feedback">Feedback</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="message">Message *</label>
                        <textarea id="message" name="message" required></textarea>
                    </div>

                    <button type="submit" class="btn-submit">Send Message</button>
                </form>
            </div>
        </div>

        <!-- Social Links -->
        <div class="social-links">
            <h2>Connect With Us</h2>
            <div class="social-buttons">
                <a href="https://wa.me/94711040024" target="_blank" class="social-btn whatsapp-btn">
                    <span>💬</span>
                    <span>Chat on WhatsApp</span>
                </a>
                <a href="https://www.facebook.com/share/17NLXmqHWw/?mibextid=wwXIfr" target="_blank" class="social-btn facebook-btn">
                    <span>📘</span>
                    <span>Follow on Facebook</span>
                </a>
            </div>
        </div>


    </div>

<!-- footer -->
<?php include __DIR__ . '/footer.php'; ?>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = {
                name: document.getElementById('name').value,
                email: document.getElementById('email').value,
                phone: document.getElementById('phone').value,
                subject: document.getElementById('subject').value,
                message: document.getElementById('message').value
            };

            // Show success message
            alert('Thank you for contacting us! We will get back to you soon.');
            
            // Reset form
            this.reset();
            
            // In a real application, you would send this data to your server
            console.log('Form submitted:', formData);
        });
    </script>
</body>
</html>