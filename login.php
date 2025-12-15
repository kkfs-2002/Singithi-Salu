<?php
session_start();

// Database configuration - Replace with your actual credentials
// Consider moving to config.php for security
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
$redirectTo = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $remember = isset($_POST['remember']);

    // Server-side validation
    $errors = [];

    if (empty($email) || empty($password)) {
        $errors[] = 'Email and password are required.';
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Invalid email format.';
    }

    if (empty($errors)) {
        // Check if user exists and verify password
        $stmt = $pdo->prepare("SELECT id, first_name, email, password FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            // Login successful
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_email'] = $user['email'];
            $_SESSION['user_first_name'] = $user['first_name'];

            if ($remember) {
                // Set remember me cookie (simple, expires in 30 days)
                // In production, use secure tokens instead
                setcookie('remember_user', $user['email'], time() + (30 * 24 * 60 * 60), '/', '', true, true);
            }

            $successMessage = 'Login successful! Welcome back, ' . htmlspecialchars($user['first_name']) . '!';
            // Redirect after a short delay to show message
            $redirectTo = 'index.php';
        } else {
            $errors[] = 'Invalid email or password.';
        }
    }

    if (!empty($errors)) {
        $errorMessage = implode('<br>', array_map('htmlspecialchars', $errors));
    }
}

// Check if already logged in
if (isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Singithi Salu</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #ff69b4 0%, #87ceeb 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .login-container {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            width: 100%;
            max-width: 450px;
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
        .login-subtitle {
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
        input[type="email"],
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
        .remember-forgot {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            font-size: 14px;
        }
        .remember-me {
            display: flex;
            align-items: center;
            gap: 5px;
        }
        .forgot-password {
            color: #ff69b4;
            text-decoration: none;
        }
        .forgot-password:hover {
            text-decoration: underline;
        }
        .login-btn {
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
        .login-btn:hover {
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
        .register-link {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #666;
        }
        .register-link a {
            color: #ff69b4;
            text-decoration: none;
            font-weight: bold;
        }
        .register-link a:hover {
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
    </style>
</head>
<body>
    <div class="login-container">
        <div class="logo" onclick="window.location.href='index.php'">
            Singithi <span>Salu</span>
        </div>
        <p class="login-subtitle">Premium Baby Products Store</p>
        
        <h2>Welcome Back!</h2>
        
        <?php if ($successMessage): ?>
            <div class="message success-message"><?php echo $successMessage; ?></div>
            <?php if ($redirectTo): ?>
                <script>
                    setTimeout(() => {
                        window.location.href = '<?php echo htmlspecialchars($redirectTo); ?>';
                    }, 1500);
                </script>
            <?php endif; ?>
        <?php endif; ?>
        
        <?php if ($errorMessage): ?>
            <div class="message error-message"><?php echo $errorMessage; ?></div>
        <?php endif; ?>
        
        <?php if (!$successMessage): ?>
        <form id="loginForm" method="POST">
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>" required placeholder="Enter your email">
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required placeholder="Enter your password">
            </div>
            
            <div class="remember-forgot">
                <label class="remember-me">
                    <input type="checkbox" name="remember" <?php echo isset($_POST['remember']) ? 'checked' : ''; ?>>
                    <span>Remember me</span>
                </label>
                <a href="forgot-password.php" class="forgot-password">Forgot Password?</a>
            </div>
            
            <button type="submit" class="login-btn">Login</button>
        </form>
        <?php endif; ?>
        
        <div class="divider">
            <span>OR</span>
        </div>
        
        <div class="register-link">
            Don't have an account? <a href="register.php">Register Now</a>
        </div>
        
        <div class="back-home">
            <a href="index.php">← Back to Home</a>
        </div>
    </div>
    <script>
        // Optional: Basic client-side validation
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            
            if (!email || !password) {
                alert('Please fill in all fields.');
                event.preventDefault();
                return false;
            }
            
            if (!email.includes('@')) {
                alert('Please enter a valid email.');
                event.preventDefault();
                return false;
            }
            
            return true;
        });
    </script>
</body>
</html>