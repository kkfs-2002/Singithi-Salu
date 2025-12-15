<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details - Singithi Salu</title>
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

        .top-bar-left { color: #666; }
        
        .top-bar-right a {
            color: #333;
            text-decoration: none;
            margin-left: 20px;
        }

        .top-bar-right a:hover { color: #ff69b4; }

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

        .logo span { color: #87ceeb; }

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

        nav a:hover { color: #ff69b4; }

        .header-icons {
            display: flex;
            gap: 20px;
            align-items: center;
        }

        .icon-btn {
            background: none;
            border: none;
            cursor: pointer;
            font-size: 20px;
            color: #333;
            position: relative;
        }

        .cart-count {
            position: absolute;
            top: -8px;
            right: -8px;
            background-color: #ff69b4;
            color: white;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            font-size: 11px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .breadcrumb {
            max-width: 1400px;
            margin: 20px auto;
            padding: 0 20px;
            font-size: 14px;
            color: #666;
        }

        .breadcrumb a {
            color: #ff69b4;
            text-decoration: none;
        }

        .product-detail {
            max-width: 1400px;
            margin: 40px auto;
            padding: 0 20px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
        }

        .main-image {
            width: 100%;
            height: 500px;
            background-size: cover;
            background-position: center;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }

        .product-info {
            display: flex;
            flex-direction: column;
        }

        .product-badge {
            display: inline-block;
            background-color: #ff69b4;
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
            margin-bottom: 15px;
            width: fit-content;
        }

        .product-title {
            font-size: 32px;
            color: #333;
            margin-bottom: 15px;
        }

        .product-rating {
            color: #ffa500;
            font-size: 16px;
            margin-bottom: 20px;
        }

        .product-price {
            font-size: 36px;
            color: #ff69b4;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .product-category-tag {
            color: #87ceeb;
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            margin-bottom: 20px;
        }

        .product-description {
            color: #666;
            line-height: 1.8;
            margin-bottom: 30px;
            padding-bottom: 30px;
            border-bottom: 1px solid #e0e0e0;
        }

        .quantity-selector {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 30px;
        }

        .qty-label {
            font-weight: 600;
        }

        .qty-btn {
            width: 40px;
            height: 40px;
            border: 2px solid #e0e0e0;
            background: white;
            cursor: pointer;
            border-radius: 5px;
            font-size: 18px;
            transition: all 0.3s;
        }

        .qty-btn:hover {
            border-color: #ff69b4;
            color: #ff69b4;
        }

        .qty-input {
            width: 60px;
            height: 40px;
            text-align: center;
            border: 2px solid #e0e0e0;
            border-radius: 5px;
            font-size: 16px;
        }

        .action-buttons {
            display: flex;
            gap: 15px;
        }

        .btn-add-cart,
        .btn-buy-now {
            flex: 1;
            padding: 15px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
        }

        .btn-add-cart {
            background-color: #87ceeb;
            color: white;
        }

        .btn-add-cart:hover {
            background-color: #5dade2;
        }

        .btn-buy-now {
            background-color: #ff69b4;
            color: white;
        }

        .btn-buy-now:hover {
            background-color: #ff1493;
        }

        .product-features {
            margin-top: 30px;
            padding-top: 30px;
            border-top: 1px solid #e0e0e0;
        }

        .feature-item {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 15px;
            color: #666;
        }

        .feature-icon {
            font-size: 24px;
        }

        .related-products {
            max-width: 1400px;
            margin: 80px auto;
            padding: 0 20px;
        }

        .section-title {
            font-size: 28px;
            margin-bottom: 40px;
            text-align: center;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }

        .product-card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            transition: transform 0.3s;
            cursor: pointer;
        }

        .product-card:hover {
            transform: translateY(-5px);
        }

        .product-card-image {
            width: 100%;
            height: 250px;
            background-size: cover;
            background-position: center;
        }

        .product-card-info {
            padding: 20px;
        }

        .product-card-info h3 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .product-card-price {
            font-size: 20px;
            color: #ff69b4;
            font-weight: bold;
        }

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
            .product-detail {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="top-bar">
        <div class="top-bar-content">
            <div class="top-bar-left">
                +94 77 784 2982 | info@singithisalu.lk
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
            
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="products.html">All Products</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>

            <div class="header-icons">
                <button class="icon-btn" onclick="window.location.href='cart.html'">
                    🛒
                    <span class="cart-count" id="cartCount">0</span>
                </button>
                <button class="icon-btn" onclick="window.location.href='profile.html'">
                    👤
                </button>
            </div>
        </div>
    </header>

    <div class="breadcrumb">
        <a href="index.html">Home</a> / <a href="products.html">Products</a> / <span id="breadcrumbCat">Category</span> / <span id="breadcrumbProd">Product</span>
    </div>

    <section class="product-detail">
        <div class="product-images">
            <div class="main-image" id="mainImage"></div>
        </div>

        <div class="product-info">
            <span class="product-badge" id="productBadge" style="display: none;"></span>
            <div class="product-category-tag" id="productCategoryTag"></div>
            <h1 class="product-title" id="productTitle">Product Name</h1>
            <div class="product-rating" id="productRating"></div>
            <div class="product-price" id="productPrice">Rs. 0.00</div>
            <p class="product-description" id="productDescription"></p>

            <div class="quantity-selector">
                <span class="qty-label">Quantity:</span>
                <button class="qty-btn" onclick="decreaseQty()">-</button>
                <input type="number" class="qty-input" id="quantity" value="1" min="1">
                <button class="qty-btn" onclick="increaseQty()">+</button>
            </div>

            <div class="action-buttons">
                <button class="btn-add-cart" onclick="addToCart()">Add to Cart</button>
                <button class="btn-buy-now" onclick="buyNow()">Buy Now</button>
            </div>

            <div class="product-features">
                <div class="feature-item">
                    <span class="feature-icon">🚚</span>
                    <span>Free delivery on orders over Rs. 5,000</span>
                </div>
                <div class="feature-item">
                    <span class="feature-icon">✓</span>
                    <span>100% Quality Assured Products</span>
                </div>
                <div class="feature-item">
                    <span class="feature-icon">↩</span>
                    <span>7 Days Return Policy</span>
                </div>
                <div class="feature-item">
                    <span class="feature-icon">💳</span>
                    <span>Secure Payment Options</span>
                </div>
            </div>
        </div>
    </section>

    <section class="related-products">
        <h2 class="section-title">You May Also Like</h2>
        <div class="product-grid" id="relatedProducts"></div>
    </section>

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
                </ul>
            </div>
            <div class="footer-section">
                <h3>Contact Us</h3>
                <p>Ambalangoda, Sri Lanka</p>
                <p>+94 77 784 2982</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 Singithi Salu. All rights reserved.</p>
        </div>
    </footer>

    <script>
        const allProducts = {
            101: { name: 'Floral Newborn Frock', price: 1850, cat: 'Infant Clothing', sub: 'Newborn Frocks', rating: 45, img: '1-600x600.jpg', badge: 'NEW', desc: 'Beautiful floral patterned newborn frock made from soft, breathable cotton fabric. Perfect for special occasions or daily wear.' },
            102: { name: 'Cotton Lace Frock', price: 2100, cat: 'Infant Clothing', sub: 'Newborn Frocks', rating: 52, img: '1-600x600.jpg', desc: 'Elegant cotton frock with lace detailing. Soft on baby skin and easy to wash.' },
            103: { name: 'Cotton Baby Vest Pack', price: 950, cat: 'Infant Clothing', sub: 'Baby Vests', rating: 67, img: '1-600x600.jpg', desc: 'Pack of 3 comfortable cotton vests. Essential daily wear for babies.' },
            107: { name: 'Velona Baby Suit 6-12M', price: 1750, cat: 'Infant Clothing', sub: 'Bodysuits', rating: 84, img: '1-600x600.jpg', desc: 'Premium Velona baby suit for 6-12 months. Made from 100% organic cotton.' },
            201: { name: 'Soft Baby Bath Towel', price: 1250, cat: 'Bathing & Grooming', sub: 'Bath Towels', rating: 56, img: 'How_to_Use_Reusable_Nappies.webp', desc: 'Ultra-soft and highly absorbent bath towel. Made from premium cotton.' },
            203: { name: 'Animal Hooded Towel', price: 1850, cat: 'Bathing & Grooming', sub: 'Hooded Towels', rating: 91, img: 'How_to_Use_Reusable_Nappies.webp', badge: 'NEW', desc: 'Adorable animal-themed hooded towel. Keeps baby warm after bath.' },
            301: { name: 'Anti-Colic Bottle Set', price: 2500, cat: 'Feeding', sub: 'Bottles', rating: 95, img: '601-pink-color-feeding-chair-1.jpg', desc: 'Advanced anti-colic bottle set with venting system. BPA-free.' },
            303: { name: 'Waterproof Bib Set', price: 850, cat: 'Feeding', sub: 'Baby Bibs', rating: 73, img: 'How_to_Use_Reusable_Nappies.webp', desc: 'Set of waterproof bibs with adjustable neck. Easy to clean.' },
            305: { name: 'Adjustable Feeding Chair', price: 7500, cat: 'Feeding', sub: 'High Chairs', rating: 73, img: '601-pink-color-feeding-chair-1.jpg', badge: 'SALE', desc: 'Multi-position high chair with adjustable height. 5-point safety harness.' },
            401: { name: 'Reusable Cloth Nappies', price: 585, cat: 'Diapering', sub: 'Cloth Nappies', rating: 48, img: 'How_to_Use_Reusable_Nappies.webp', badge: 'NEW', desc: 'Eco-friendly reusable cloth nappies. Highly absorbent and comfortable.' },
            501: { name: 'Plush Teddy Bear', price: 2500, cat: 'Toys & Play', sub: 'Soft Toys', rating: 89, img: '6dd19a63699e4e705cda6c345782120c.jpg', desc: 'Cuddly plush teddy bear made from soft, hypoallergenic materials.' },
            503: { name: 'Learning Activity Set', price: 4500, cat: 'Toys & Play', sub: 'Educational Toys', rating: 92, img: '6dd19a63699e4e705cda6c345782120c.jpg', desc: 'Interactive learning toy set that promotes cognitive development.' },
            601: { name: 'Lightweight Stroller', price: 15900, cat: 'Baby Gear', sub: 'Strollers', rating: 87, img: 'smile-baby-walker-609x684.jpg', badge: 'SALE', desc: 'Compact lightweight stroller perfect for city life. Easy one-hand fold.' },
            603: { name: 'Infant Car Seat', price: 18900, cat: 'Baby Gear', sub: 'Car Seats', rating: 96, img: 'smile-baby-walker-609x684.jpg', desc: 'Safety-tested infant car seat with side-impact protection.' },
            605: { name: 'Ergonomic Baby Carrier', price: 5900, cat: 'Baby Gear', sub: 'Baby Carriers', rating: 88, img: 'smile-baby-walker-609x684.jpg', desc: 'Ergonomic baby carrier with lumbar support. Multiple carrying positions.' },
            701: { name: 'Floral Smocked Dress', price: 3200, cat: 'Girls Clothing', sub: 'Smocked Dresses', rating: 78, img: '1-600x600.jpg', badge: 'NEW', desc: 'Charming hand-smocked dress with floral embroidery. Classic design.' },
            703: { name: 'Winter Dress', price: 2800, cat: 'Girls Clothing', sub: 'Long Sleeved Dresses', rating: 65, img: '1-600x600.jpg', desc: 'Warm long-sleeved dress perfect for cooler months.' },
            801: { name: 'Cotton Romper', price: 1850, cat: 'Boys Clothing', sub: 'Rompers', rating: 67, img: '1-600x600.jpg', desc: 'Comfortable cotton romper for active boys. Easy snap closure.' },
            803: { name: 'Formal Shirt', price: 2200, cat: 'Boys Clothing', sub: 'Shirts', rating: 71, img: '1-600x600.jpg', desc: 'Smart formal shirt for special occasions. Quality fabric.' },
            901: { name: 'Daisy Dream Bundle', price: 8500, cat: 'Bedding', sub: 'Bedding Bundles', rating: 92, img: 'Foldable-Baby-Cribs-Iron-Material-Make-Travel-Use-Portable-Kids-Bed-Cot-on-Sale-in-Stock.avif', badge: 'SALE', desc: 'Complete bedding set with daisy theme. High-quality cotton fabric.' },
            903: { name: 'Cotton Cot Sheet', price: 1850, cat: 'Bedding', sub: 'Cot Sheet', rating: 76, img: 'Foldable-Baby-Cribs-Iron-Material-Make-Travel-Use-Portable-Kids-Bed-Cot-on-Sale-in-Stock.avif', desc: '100% cotton cot sheet with elastic edges. Perfect fit for standard cots.' },
            1001: { name: 'Wooden Baby Cot', price: 38900, cat: 'Furniture', sub: 'Baby Cots', rating: 92, img: 'Foldable-Baby-Cribs-Iron-Material-Make-Travel-Use-Portable-Kids-Bed-Cot-on-Sale-in-Stock.avif', badge: 'SALE', desc: 'Premium wooden cot with adjustable mattress height. Sturdy construction.' },
            1003: { name: 'Baby Wardrobe', price: 25000, cat: 'Furniture', sub: 'Wardrobes', rating: 78, img: 'Foldable-Baby-Cribs-Iron-Material-Make-Travel-Use-Portable-Kids-Bed-Cot-on-Sale-in-Stock.avif', desc: 'Spacious wardrobe with hanging rail and shelves. Durable construction.' }
        };

        function getProductId() {
            const params = new URLSearchParams(window.location.search);
            return parseInt(params.get('id'));
        }

        function loadProduct() {
            const id = getProductId();
            const p = allProducts[id];

            if (!p) {
                alert('Product not found!');
                window.location.href = 'index.html';
                return;
            }

            document.getElementById('mainImage').style.backgroundImage = 'url(' + p.img + ')';
            document.getElementById('productTitle').textContent = p.name;
            document.getElementById('productCategoryTag').textContent = p.sub;
            document.getElementById('productRating').textContent = '⭐⭐⭐⭐⭐ (' + p.rating + ' reviews)';
            document.getElementById('productPrice').textContent = 'Rs. ' + p.price.toLocaleString();
            document.getElementById('productDescription').textContent = p.desc;
            document.getElementById('breadcrumbCat').textContent = p.cat;
            document.getElementById('breadcrumbProd').textContent = p.name;

            if (p.badge) {
                document.getElementById('productBadge').textContent = p.badge;
                document.getElementById('productBadge').style.display = 'inline-block';
            }

            loadRelated(id, p.cat);
        }

        function loadRelated(currentId, cat) {
            const container = document.getElementById('relatedProducts');
            let count = 0;

            for (let id in allProducts) {
                if (parseInt(id) !== currentId && allProducts[id].cat === cat && count < 4) {
                    const p = allProducts[id];
                    const card = document.createElement('div');
                    card.className = 'product-card';
                    card.onclick = function() { window.location.href = 'product-detail.html?id=' + id; };

                    card.innerHTML = '<div class="product-card-image" style="background-image: url(' + p.img + ');"></div><div class="product-card-info"><h3>' + p.name + '</h3><div class="product-card-price">Rs. ' + p.price.toLocaleString() + '</div></div>';

                    container.appendChild(card);
                    count++;
                }
            }
        }

        function increaseQty() {
            const input = document.getElementById('quantity');
            input.value = parseInt(input.value) + 1;
        }

        function decreaseQty() {
            const input = document.getElementById('quantity');
            if (parseInt(input.value) > 1) {
                input.value = parseInt(input.value) - 1;
            }
        }

        function addToCart() {
            const qty = parseInt(document.getElementById('quantity').value);
            const name = document.getElementById('productTitle').textContent;
            alert('Added ' + qty + ' x ' + name + ' to cart!');
        }

        function buyNow() {
            const name = document.getElementById('productTitle').textContent;
            alert('Proceeding to checkout with ' + name);
        }

        window.onload = loadProduct;
    </script>
</body>
</html>