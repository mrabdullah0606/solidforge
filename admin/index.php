<?php
// admin/index.php
require_once('../includes/db.php');
require_once('../includes/functions.php');
require_once('auth.php');
requireLogin();

// Fetch some stats
$brandCount = $pdo->query("SELECT COUNT(*) FROM brands")->fetchColumn();
$productCount = $pdo->query("SELECT COUNT(*) FROM products")->fetchColumn();
$pendingCustomers = $pdo->query("SELECT COUNT(*) FROM customers WHERE status = 'pending'")->fetchColumn();
$newQuotes = $pdo->query("SELECT COUNT(*) FROM quotes WHERE status = 'new'")->fetchColumn();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard | Solidforge Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body { background-color: #1b1b1b; color: #fff; }
        .sidebar { background-color: #2a2a2a; min-height: 100vh; padding: 20px; }
        .nav-link { color: #aaa; margin-bottom: 10px; border-radius: 5px; }
        .nav-link:hover, .nav-link.active { background-color: #3b3b3b; color: #f7df50; }
        .card { background-color: #2a2a2a; border: none; }
        .text-warning { color: #f7df50 !important; }
        .text-muted { color: #aaaaaa !important; }
        .main-content { padding: 30px; }
        h5, .h5 { color: #efefef; }
        .badge-notify { font-size: 0.7rem; vertical-align: middle; }
    </style>
  </head>
  <body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2 sidebar d-none d-md-block">
                <div class="text-center mb-5">
                    <img src="../images/logo.png" width="150" alt="Logo">
                </div>
                <nav class="nav flex-column">
                    <a class="nav-link active" href="index.php"><i class="bi bi-speedometer2 me-2"></i> Dashboard</a>
                    <a class="nav-link" href="products.php"><i class="bi bi-box-seam me-2"></i> Products</a>
                    <a class="nav-link" href="brands.php"><i class="bi bi-tags me-2"></i> Brands</a>
                    <a class="nav-link" href="customers.php"><i class="bi bi-people me-2"></i> Customers 
                        <?php if($pendingCustomers > 0): ?><span class="badge bg-danger badge-notify"><?php echo $pendingCustomers; ?></span><?php endif; ?>
                    </a>
                    <a class="nav-link" href="quotes.php"><i class="bi bi-chat-left-quote me-2"></i> Quotes
                        <?php if($newQuotes > 0): ?><span class="badge bg-danger badge-notify"><?php echo $newQuotes; ?></span><?php endif; ?>
                    </a>
                    <hr>
                    <a class="nav-link text-danger" href="logout.php"><i class="bi bi-box-arrow-right me-2"></i> Logout</a>
                </nav>
            </div>

            <!-- Main Content -->
            <div class="col-md-10 main-content">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2>Admin Dashboard</h2>
                    <div>Welcome, <?php echo htmlspecialchars($_SESSION['admin_username']); ?></div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="card p-4 mb-4 text-center">
                            <h5 class="text-muted">Products</h5>
                            <h2 class="text-warning"><?php echo $productCount; ?></h2>
                            <i class="bi bi-box-seam fs-4 text-muted"></i>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-4 mb-4 text-center">
                            <h5 class="text-muted">Pending Reg.</h5>
                            <h2 class="<?php echo $pendingCustomers > 0 ? 'text-danger' : 'text-success'; ?>"><?php echo $pendingCustomers; ?></h2>
                            <i class="bi bi-people fs-4 text-muted"></i>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-4 mb-4 text-center">
                            <h5 class="text-muted">New Quotes</h5>
                            <h2 class="<?php echo $newQuotes > 0 ? 'text-danger' : 'text-success'; ?>"><?php echo $newQuotes; ?></h2>
                            <i class="bi bi-chat-left-quote fs-4 text-muted"></i>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-4 mb-4 text-center">
                            <h5 class="text-muted">Brands</h5>
                            <h2 class="text-warning"><?php echo $brandCount; ?></h2>
                            <i class="bi bi-award fs-4 text-muted"></i>
                        </div>
                    </div>
                </div>
                
                <div class="card p-4">
                    <h5>Quick Actions</h5>
                    <div class="mt-3">
                        <a href="products.php?action=add" class="btn btn-warning me-2">Add New Product</a>
                        <a href="../index.php" target="_blank" class="btn btn-outline-light">View Website</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>
