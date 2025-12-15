<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart - Singithi Salu</title>
    <link rel="stylesheet" href="css/cart.css">

    <style>

    </style>
</head>
<body>
    <div class="top-bar">
        <div class="top-bar-content">
            <div class="top-bar-left">
                📞 +94 77 784 2982 | ✉ info@singithisalu.lk
            </div>
            <div class="top-bar-right">
                <a href="login.php">Login</a>
                <a href="register.php">Register</a>
            </div>
        </div>
    </div>

    <header>
        <div class="header-content">
            <div class="logo" onclick="window.location.href='index.php'">
                Singithi <span>Salu</span>
            </div>
        </div>
    </header>

    <div class="container">
        <h1 class="page-title">Shopping Cart</h1>
        
        <div class="cart-content" id="cartContent">
            <div class="cart-items" id="cartItems">
                <!-- Cart items will be dynamically added here -->
            </div>

            <div class="cart-summary">
                <h3>Order Summary</h3>
                <div class="summary-row">
                    <span>Subtotal:</span>
                    <span id="subtotal">Rs. 0</span>
                </div>
                <div class="summary-row">
                    <span>Shipping:</span>
                    <span id="shipping">Rs. 500</span>
                </div>
                <div class="summary-row total">
                    <span>Total:</span>
                    <span id="total">Rs. 500</span>
                </div>
                <button class="checkout-btn" id="checkoutBtn" onclick="proceedToCheckout()">Proceed to Checkout</button>
                <a href="index.php" class="continue-shopping">Continue Shopping</a>
            </div>
        </div>
    </div>

<!-- footer -->
<?php include __DIR__ . '/footer.php'; ?>


    <script>
        // Cart management functions
        function getCart() {
            const cart = JSON.parse(localStorage.getItem('cart') || '[]');
            return cart;
        }

        function saveCart(cart) {
            localStorage.setItem('cart', JSON.stringify(cart));
        }

        function addToCart(product) {
            const cart = getCart();
            const existingItem = cart.find(item => item.id === product.id);
            
            if (existingItem) {
                existingItem.quantity += 1;
            } else {
                cart.push({
                    id: product.id,
                    name: product.name,
                    price: product.price,
                    quantity: 1,
                    image: product.image
                });
            }
            
            saveCart(cart);
            renderCart();
        }

        function renderCart() {
            const cartItems = getCart();
            const cartItemsContainer = document.getElementById('cartItems');
            const checkoutBtn = document.getElementById('checkoutBtn');
            
            if (cartItems.length === 0) {
                cartItemsContainer.innerHTML = `
                    <div class="empty-cart">
                        <div class="empty-cart-icon">🛒</div>
                        <h3>Your cart is empty</h3>
                        <p>Add some products to get started!</p>
                        <button class="checkout-btn" onclick="window.location.href='index.php'" style="max-width: 300px; margin: 20px auto 0;">
                            Continue Shopping
                        </button>
                    </div>
                `;
                checkoutBtn.disabled = true;
                updateSummary();
                return;
            }

            checkoutBtn.disabled = false;

            cartItemsContainer.innerHTML = cartItems.map((item, index) => `
                <div class="cart-item">
                    <div class="item-image" style="background-image: url('${item.image}');"></div>
                    <div class="item-details">
                        <h3>${item.name}</h3>
                        <div class="item-price">Rs. ${item.price.toLocaleString()}</div>
                        <div class="quantity-control">
                            <button onclick="updateQuantity(${index}, -1)">-</button>
                            <span>${item.quantity}</span>
                            <button onclick="updateQuantity(${index}, 1)">+</button>
                        </div>
                    </div>
                    <div class="item-actions">
                        <div class="item-total">Rs. ${(item.price * item.quantity).toLocaleString()}</div>
                        <button class="remove-btn" onclick="removeItem(${index})">Remove</button>
                    </div>
                </div>
            `).join('');

            updateSummary();
        }

        function updateQuantity(index, change) {
            const cartItems = getCart();
            cartItems[index].quantity += change;
            
            if (cartItems[index].quantity < 1) {
                cartItems[index].quantity = 1;
            }
            
            saveCart(cartItems);
            renderCart();
        }

        function removeItem(index) {
            if (confirm('Remove this item from cart?')) {
                const cartItems = getCart();
                cartItems.splice(index, 1);
                saveCart(cartItems);
                renderCart();
            }
        }

        function updateSummary() {
            const cartItems = getCart();
            const subtotal = cartItems.reduce((sum, item) => sum + (item.price * item.quantity), 0);
            const shipping = cartItems.length > 0 ? 500 : 0;
            const total = subtotal + shipping;

            document.getElementById('subtotal').textContent = `Rs. ${subtotal.toLocaleString()}`;
            document.getElementById('shipping').textContent = `Rs. ${shipping.toLocaleString()}`;
            document.getElementById('total').textContent = `Rs. ${total.toLocaleString()}`;
        }

        function proceedToCheckout() {
            const cartItems = getCart();
            if (cartItems.length === 0) {
                alert('Your cart is empty!');
                return;
            }
            alert('Checkout functionality will be implemented soon!');
        }

        function clearCart() {
            if (confirm('Are you sure you want to clear your cart?')) {
                localStorage.removeItem('cart');
                renderCart();
            }
        }

        // Initialize cart on page load
        renderCart();
    </script>
</body>
</html>
