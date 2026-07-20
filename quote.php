<?php require_once('includes/session_init.php'); ?>
<?php
require_once('includes/db.php');
require_once('includes/functions.php');

$productId = $_GET['product_id'] ?? null;
$product = null;

if ($productId) {
    $stmt = $pdo->prepare("SELECT * FROM products WHERE id = ?");
    $stmt->execute([$productId]);
    $product = $stmt->fetch();
}

$customer = getLoggedInCustomer($pdo);
$success = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pId = $_POST['product_id'] ?: null;
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $company = $_POST['company'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $message = $_POST['message'] ?? '';
    $cId = $customer ? $customer['id'] : null;
    
    if (empty($name) || empty($email) || empty($message)) {
        $error = "Name, email, and message are required.";
    } else {
        try {
            $stmt = $pdo->prepare("INSERT INTO quotes (customer_id, product_id, name, email, company, phone, message) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $stmt->execute([$cId, $pId, $name, $email, $company, $phone, $message]);
            $quoteId = $pdo->lastInsertId();
            
            // Add Admin Notification
            addNotification($pdo, 'quote', $quoteId);
            
            $success = "Your quote request has been submitted successfully. Our team will contact you shortly with a manually issued quotation.";
        } catch (PDOException $e) {
            $error = "Failed to submit request: " . $e->getMessage();
        }
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Request a Quotation | Solidforge</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@400;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="dropdown.css">
    <style>
        :root {
            --primary-red: #cc0000;
            --dark-grey: #1a1a1a;
            --accent-yellow: #f7df50;
        }
        body {
            font-family: 'Karla', sans-serif;
            background: linear-gradient(135deg, #0f0f0f 0%, #2c2c2c 100%);
            color: #fff;
            min-height: 100vh;
        }
        .navbar { background: #000 !important; }
        .quote-container {
            padding: 80px 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .quote-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 40px;
            width: 100%;
            max-width: 800px;
            box-shadow: 0 25px 50px rgba(0,0,0,0.5);
        }
        .quote-card h1 {
            font-weight: 800;
            color: var(--accent-yellow);
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 30px;
        }
        .form-control, .form-select {
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
        .form-label { font-weight: 600; color: #ccc; }
        .btn-submit {
            background: var(--accent-yellow);
            border: none;
            color: #000;
            font-weight: 800;
            padding: 15px 30px;
            border-radius: 10px;
            transition: all 0.3s ease;
            text-transform: uppercase;
        }
        .btn-submit:hover {
            background: #fff;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.3);
        }
        .product-preview {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 30px;
            display: flex;
            align-items: center;
        }
        .product-preview img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 5px;
            margin-right: 15px;
        }
    </style>
</head>
<body>
    <?php require_once('navbar.php'); ?>

    <div class="quote-container">
        <div class="quote-card">
            <h1>Request a Quotation</h1>
            
            <?php if ($success): ?>
                <div class="alert alert-success py-4 text-center">
                    <i class="fas fa-check-circle fs-1 mb-3 d-block"></i>
                    <h4><?php echo $success; ?></h4>
                    <a href="index.php" class="btn btn-outline-light mt-3">Return Home</a>
                </div>
            <?php else: ?>
                <p class="lead text-light mb-4 text-center">Please provide your details and our team will issue a customized quotation for your specific needs.</p>
                
                <?php if ($error): ?>
                    <div class="alert alert-danger"><?php echo $error; ?></div>
                <?php endif; ?>

                <?php if ($product): ?>
                    <div class="product-preview">
                        <div>
                            <small class="text-white d-block text-uppercase">Requesting quote for:</small>
                            <h5 class="mb-0"><?php echo htmlspecialchars($product['name']); ?></h5>
                        </div>
                    </div>
                <?php endif; ?>

                <form method="POST">
                    <input type="hidden" name="product_id" value="<?php echo $productId; ?>">
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" name="name" class="form-control" value="<?php echo htmlspecialchars($customer['name'] ?? ''); ?>" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Email Address</label>
                            <input type="email" name="email" class="form-control" value="<?php echo htmlspecialchars($customer['email'] ?? ''); ?>" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Company Name</label>
                            <input type="text" name="company" class="form-control" value="<?php echo htmlspecialchars($customer['company_name'] ?? ''); ?>">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Phone Number</label>
                            <input type="text" name="phone" class="form-control" value="<?php echo htmlspecialchars($customer['phone'] ?? ''); ?>">
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Your message or specific requirements</label>
                        <textarea name="message" class="form-control" rows="5" placeholder="Tell us more about your application, volume requirements, etc." required></textarea>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn-submit px-5">Submit Quote Request</button>
                    </div>
                </form>
            <?php endif; ?>
        </div>
    </div>

    <?php require_once('footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
