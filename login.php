<?php require_once('includes/session_init.php'); ?>
<?php
require_once('includes/db.php');
require_once('includes/functions.php');

if (isCustomerLoggedIn()) {
    header("Location: index.php");
    exit();
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    
    if (empty($email) || empty($password)) {
        $error = "Email and password are required.";
    } else {
        $stmt = $pdo->prepare("SELECT * FROM customers WHERE email = ?");
        $stmt->execute([$email]);
        $customer = $stmt->fetch();
        
        if ($customer && password_verify($password, $customer['password'])) {
            if ($customer['status'] === 'pending') {
                $error = "Your account is still under review. We will notify you once it is approved.";
            } elseif ($customer['status'] === 'rejected') {
                $error = "Your registration request has been declined. Please contact support for more information.";
            } else {
                $_SESSION['customer_id'] = $customer['id'];
                $_SESSION['customer_name'] = $customer['name'];
                header("Location: index.php");
                exit();
            }
        } else {
            $error = "Invalid email or password.";
        }
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Customer Sign In | Solidforge</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@300;400;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-red: #cc0000;
            --dark-grey: #1a1a1a;
            --light-grey: #f4f4f4;
            --accent-yellow: #f7df50;
        }
        body {
            font-family: 'Karla', sans-serif;
            background: linear-gradient(135deg, #0f0f0f 0%, #2c2c2c 100%);
            color: #fff;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .navbar { background: #000 !important; }
        .login-container {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 50px 0;
        }
        .login-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 40px;
            width: 100%;
            max-width: 450px;
            box-shadow: 0 25px 50px rgba(0,0,0,0.5);
        }
        .login-card h2 {
            font-weight: 800;
            color: var(--accent-yellow);
            margin-bottom: 30px;
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        .form-control {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: #fff;
            padding: 12px 15px;
            border-radius: 10px;
        }
        .form-control:focus {
            background: rgba(255, 255, 255, 0.15);
            border-color: var(--accent-yellow);
            box-shadow: 0 0 10px rgba(247, 223, 80, 0.3);
            color: #fff;
        }
        .form-label {
            font-weight: 600;
            color: #ccc;
            margin-bottom: 8px;
        }
        .btn-login {
            background: var(--accent-yellow);
            border: none;
            color: #000;
            font-weight: 800;
            padding: 15px;
            border-radius: 10px;
            width: 100%;
            margin-top: 20px;
            transition: all 0.3s ease;
            text-transform: uppercase;
        }
        .btn-login:hover {
            background: #fff;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.3);
        }
        .register-link {
            text-align: center;
            margin-top: 20px;
            color: #ccc;
        }
        .register-link a {
            color: var(--accent-yellow);
            text-decoration: none;
            font-weight: 700;
        }
    </style>
</head>
<body>
    <?php require_once('navbar.php'); ?>

    <div class="login-container">
        <div class="login-card">
            <h2>Sign In</h2>
            
            <?php if ($error): ?>
                <div class="alert alert-danger"><?php echo $error; ?></div>
            <?php endif; ?>
            
            <form action="login.php" method="POST">
                <div class="mb-3">
                    <label class="form-label">Email Address</label>
                    <input type="email" name="email" class="form-control" placeholder="john@example.com" required>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="••••••••" required>
                </div>
                
                <button type="submit" class="btn-login">Login to Platform</button>
                
                <div class="register-link">
                    Don't have an account? <a href="register.php">Request Access</a>
                </div>
            </form>
        </div>
    </div>

    <?php require_once('footer.php'); ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
