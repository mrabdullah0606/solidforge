<?php
require_once('includes/db.php');
require_once('includes/functions.php');

if (isCustomerLoggedIn()) {
    header("Location: index.php");
    exit();
}

$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $company = $_POST['company_name'] ?? '';
    $phone = $_POST['phone'] ?? '';
    
    // Simple validation
    if (empty($name) || empty($email) || empty($password)) {
        $error = "Name, email, and password are required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email format.";
    } else {
        // Check if email exists
        $stmt = $pdo->prepare("SELECT id FROM customers WHERE email = ?");
        $stmt->execute([$email]);
        if ($stmt->fetch()) {
            $error = "Email already registered.";
        } else {
            // Handle File Upload
            $uploadedFiles = [];
            if (!empty($_FILES['documents']['name'][0])) {
                $uploadDir = 'uploads/customers/';
                if (!is_dir($uploadDir)) mkdir($uploadDir, 0777, true);
                
                foreach ($_FILES['documents']['tmp_name'] as $key => $tmpName) {
                    $fileName = time() . '_' . basename($_FILES['documents']['name'][$key]);
                    $targetPath = $uploadDir . $fileName;
                    if (move_uploaded_file($tmpName, $targetPath)) {
                        $uploadedFiles[] = $targetPath;
                    }
                }
            }
            
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);
            $docsJson = json_encode($uploadedFiles);
            
            try {
                $stmt = $pdo->prepare("INSERT INTO customers (name, email, password, company_name, phone, documents_json, status) VALUES (?, ?, ?, ?, ?, ?, 'pending')");
                $stmt->execute([$name, $email, $passwordHash, $company, $phone, $docsJson]);
                $customerId = $pdo->lastInsertId();
                
                // Add Admin Notification
                addNotification($pdo, 'registration', $customerId);
                
                $success = "Registration submitted successfully! Your account is now under review. We will notify you once approved.";
            } catch (PDOException $e) {
                $error = "Registration failed: " . $e->getMessage();
            }
        }
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Customer Registration | Solidforge</title>
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
        .registration-container {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 50px 0;
        }
        .registration-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 40px;
            width: 100%;
            max-width: 600px;
            box-shadow: 0 25px 50px rgba(0,0,0,0.5);
        }
        .registration-card h2 {
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
        .btn-register {
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
        .btn-register:hover {
            background: #fff;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.3);
        }
        .login-link {
            text-align: center;
            margin-top: 20px;
            color: #ccc;
        }
        .login-link a {
            color: var(--accent-yellow);
            text-decoration: none;
            font-weight: 700;
        }
        /* Custom Upload Styling */
        .file-upload-wrapper {
            position: relative;
            width: 100%;
            height: 100px;
            border: 2px dashed rgba(255, 255, 255, 0.2);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .file-upload-wrapper:hover {
            border-color: var(--accent-yellow);
            background: rgba(247, 223, 80, 0.05);
        }
        .file-upload-wrapper i {
            font-size: 24px;
            margin-bottom: 5px;
            color: var(--accent-yellow);
        }
        #documents {
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <?php require_once('navbar.php'); ?>

    <div class="registration-container">
        <div class="registration-card">
            <h2>Join Solidforge</h2>
            
            <?php if ($error): ?>
                <div class="alert alert-danger"><?php echo $error; ?></div>
            <?php endif; ?>
            
            <?php if ($success): ?>
                <div class="alert alert-success">
                    <h4 class="alert-heading">Success!</h4>
                    <p><?php echo $success; ?></p>
                    <hr>
                    <p class="mb-0">You'll be able to access our exclusive features once an administrator approves your account.</p>
                </div>
                <div class="text-center mt-4">
                    <a href="index.php" class="btn btn-outline-light">Back to Home</a>
                </div>
            <?php else: ?>
                <form action="register.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" name="name" class="form-control" placeholder="John Doe" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Email Address</label>
                            <input type="email" name="email" class="form-control" placeholder="john@example.com" required>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="••••••••" required>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Company Name</label>
                            <input type="text" name="company_name" class="form-control" placeholder="Your Company">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Phone Number</label>
                            <input type="text" name="phone" class="form-control" placeholder="+1 (555) 000-0000">
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Registration Documents</label>
                        <div class="file-upload-wrapper">
                            <i class="fas fa-cloud-upload-alt"></i>
                            <span>Click or Drag documents here</span>
                            <input type="file" name="documents[]" id="documents" multiple>
                        </div>
                        <small class="text-muted">Upload any required verification documents (VAT, ID, etc.)</small>
                    </div>
                    
                    <button type="submit" class="btn btn-register">Request Access</button>
                    
                    <div class="login-link">
                        Already have an account? <a href="login.php">Sign In</a>
                    </div>
                </form>
            <?php endif; ?>
        </div>
    </div>

    <?php require_once('footer.php'); ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('documents').addEventListener('change', function(e) {
            const fileName = e.target.files.length > 1 ? `${e.target.files.length} files selected` : e.target.files[0].name;
            e.target.previousElementSibling.textContent = fileName;
        });
    </script>
</body>
</html>
