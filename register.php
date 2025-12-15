<?php
// Database configuration - Replace with your actual credentials
$host = 'localhost';
$dbname = 'singithi_salu';
$username = 'root'; // Change to your DB username
$password = '';     // Change to your DB password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Handle form submission
$successMessage = '';
$errorMessage = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstName = trim($_POST['firstName'] ?? '');
    $lastName = trim($_POST['lastName'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirmPassword = $_POST['confirmPassword'] ?? '';
    $terms = isset($_POST['terms']);

    // Server-side validation
    $errors = [];

    if (empty($firstName) || empty($lastName) || empty($email) || empty($phone) || empty($password)) {
        $errors[] = 'All fields are required.';
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Invalid email format.';
    }

    if (strlen($password) < 8) {
        $errors[] = 'Password must be at least 8 characters long.';
    }

    if ($password !== $confirmPassword) {
        $errors[] = 'Passwords do not match.';
    }

    if (!$terms) {
        $errors[] = 'You must agree to the Terms & Conditions and Privacy Policy.';
    }

    // Check password strength (basic server-side check)
    $strength = 0;
    if (strlen($password) >= 8) $strength++;
    if (preg_match('/[a-z]/', $password)) $strength++;
    if (preg_match('/[A-Z]/', $password)) $strength++;
    if (preg_match('/[0-9]/', $password)) $strength++;
    if (preg_match('/[$@#&!]/', $password)) $strength++;
    if ($strength < 3) {
        $errors[] = 'Password is too weak. Please use a stronger password.';
    }

    // Check if email already exists
    if (empty($errors)) {
        $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ?");
        $stmt->execute([$email]);
        if ($stmt->fetch()) {
            $errors[] = 'Email already registered. Please use a different email.';
        }
    }

    // Validate phone (basic Sri Lankan format check, adjust as needed)
    if (!preg_match('/^\+94\d{9}$/', $phone)) {
        $errors[] = 'Invalid phone number format. Use +94 followed by 9 digits.';
    }

    if (empty($errors)) {
        // Hash password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Insert user
        $stmt = $pdo->prepare("INSERT INTO users (first_name, last_name, email, phone, password, created_at) VALUES (?, ?, ?, ?, ?, NOW())");
        if ($stmt->execute([$firstName, $lastName, $email, $phone, $hashedPassword])) {
            $successMessage = 'Registration successful! Welcome, ' . htmlspecialchars($firstName) . '!';
            // Optionally, send welcome email here
            // Clear form data
            $_POST = [];
        } else {
            $errors[] = 'Registration failed. Please try again.';
        }
    }

    if (!empty($errors)) {
        $errorMessage = implode('<br>', array_map('htmlspecialchars', $errors));
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Singithi Salu</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #87ceeb 0%, #ff69b4 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .register-container {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            width: 100%;
            max-width: 500px;
        }
        .logo {
            text-align: center;
            font-size: 32px;
            font-weight: bold;
            color: #ff69b4;
            margin-bottom: 10px;
            cursor: pointer;
        }
        .logo span {
            color: #87ceeb;
        }
        .register-subtitle {
            text-align: center;
            color: #666;
            margin-bottom: 30px;
            font-size: 14px;
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
            font-size: 24px;
        }
        .message {
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 8px;
            text-align: center;
            font-weight: bold;
        }
        .success-message {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        .error-message {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-weight: 500;
        }
        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="password"] {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 14px;
            transition: border-color 0.3s;
        }
        input:focus {
            outline: none;
            border-color: #ff69b4;
        }
        .name-group {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }
        .terms-checkbox {
            display: flex;
            align-items: flex-start;
            gap: 8px;
            margin-bottom: 20px;
            font-size: 14px;
            color: #666;
        }
        .terms-checkbox input {
            margin-top: 3px;
        }
        .terms-checkbox a {
            color: #ff69b4;
            text-decoration: none;
        }
        .terms-checkbox a:hover {
            text-decoration: underline;
        }
        .register-btn {
            width: 100%;
            background-color: #ff69b4;
            color: white;
            padding: 15px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .register-btn:hover {
            background-color: #ff1493;
        }
        .divider {
            text-align: center;
            margin: 25px 0;
            position: relative;
        }
        .divider::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 1px;
            background-color: #ddd;
        }
        .divider span {
            background: white;
            padding: 0 15px;
            position: relative;
            color: #666;
            font-size: 14px;
        }
        .login-link {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #666;
        }
        .login-link a {
            color: #ff69b4;
            text-decoration: none;
            font-weight: bold;
        }
        .login-link a:hover {
            text-decoration: underline;
        }
        .back-home {
            text-align: center;
            margin-top: 20px;
        }
        .back-home a {
            color: #87ceeb;
            text-decoration: none;
            font-size: 14px;
        }
        .back-home a:hover {
            text-decoration: underline;
        }
        .password-strength {
            font-size: 12px;
            margin-top: 5px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <div class="logo" onclick="window.location.href='index.php'">
            Singithi <span>Salu</span>
        </div>
        <p class="register-subtitle">Premium Baby Products Store</p>
        
        <h2>Create Account</h2>
        
        <?php if ($successMessage): ?>
            <div class="message success-message"><?php echo $successMessage; ?></div>
        <?php endif; ?>
        
        <?php if ($errorMessage): ?>
            <div class="message error-message"><?php echo $errorMessage; ?></div>
        <?php endif; ?>
        
        <?php if (!$successMessage): ?>
        <form id="registerForm" method="POST" onsubmit="return handleRegister(event)">
            <div class="name-group">
                <div class="form-group">
                    <label for="firstName">First Name</label>
                    <input type="text" id="firstName" name="firstName" value="<?php echo htmlspecialchars($_POST['firstName'] ?? ''); ?>" required placeholder="John">
                </div>
                
                <div class="form-group">
                    <label for="lastName">Last Name</label>
                    <input type="text" id="lastName" name="lastName" value="<?php echo htmlspecialchars($_POST['lastName'] ?? ''); ?>" required placeholder="Doe">
                </div>
            </div>
            
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>" required placeholder="john.doe@example.com">
            </div>
            
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" value="<?php echo htmlspecialchars($_POST['phone'] ?? ''); ?>" required placeholder="+94 77 123 4567">
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required placeholder="Minimum 8 characters" minlength="8">
                <div class="password-strength" id="passwordStrength"></div>
            </div>
            
            <div class="form-group">
                <label for="confirmPassword">Confirm Password</label>
                <input type="password" id="confirmPassword" name="confirmPassword" required placeholder="Re-enter password">
            </div>
            
            <div class="terms-checkbox">
                <input type="checkbox" id="terms" name="terms" <?php echo isset($_POST['terms']) ? 'checked' : ''; ?> required>
                <label for="terms">
                    I agree to the <a href="terms.php">Terms & Conditions</a> and <a href="privacy.php">Privacy Policy</a>
                </label>
            </div>
            
            <button type="submit" class="register-btn">Create Account</button>
        </form>
        <?php endif; ?>
        
        <div class="divider">
            <span>OR</span>
        </div>
        
        <div class="login-link">
            Already have an account? <a href="login.php">Login Here</a>
        </div>
        
        <div class="back-home">
            <a href="index.php">← Back to Home</a>
        </div>
    </div>
    <script>
        const passwordInput = document.getElementById('password');
        const passwordStrength = document.getElementById('passwordStrength');
        if (passwordInput) {
            passwordInput.addEventListener('input', function() {
                const password = this.value;
                let strength = 0;
                
                if (password.length >= 8) strength++;
                if (password.match(/[a-z]+/)) strength++;
                if (password.match(/[A-Z]+/)) strength++;
                if (password.match(/[0-9]+/)) strength++;
                if (password.match(/[$@#&!]+/)) strength++;
                
                switch(strength) {
                    case 0:
                    case 1:
                        passwordStrength.textContent = 'Weak password';
                        passwordStrength.style.color = '#ff4444';
                        break;
                    case 2:
                    case 3:
                        passwordStrength.textContent = 'Medium strength';
                        passwordStrength.style.color = '#ffa500';
                        break;
                    case 4:
                    case 5:
                        passwordStrength.textContent = 'Strong password';
                        passwordStrength.style.color = '#4CAF50';
                        break;
                }
            });
        }
        function handleRegister(event) {
            // Client-side validation (optional, since server handles it)
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;
            
            if (password !== confirmPassword) {
                alert('Passwords do not match!');
                event.preventDefault();
                return false;
            }
            // Allow form to submit normally now
            return true;
        }
    </script>
</body>
</html>