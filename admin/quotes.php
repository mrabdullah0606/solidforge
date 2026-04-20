<?php
// admin/quotes.php
require_once('../includes/db.php');
require_once('../includes/functions.php');
require_once('auth.php');
requireLogin();

$statusFilter = $_GET['status'] ?? '';
$success = '';

// Handle Status Updates
if (isset($_POST['action']) && isset($_POST['quote_id'])) {
    $qId = $_POST['quote_id'];
    $newStatus = $_POST['action']; // e.g., 'pending', 'completed'
    
    $stmt = $pdo->prepare("UPDATE quotes SET status = ? WHERE id = ?");
    if ($stmt->execute([$newStatus, $qId])) {
        $success = "Quote status updated to " . ucfirst($newStatus) . ".";
    }
}

// Fetch Quotes with Product names
$query = "SELECT q.*, p.name as product_name FROM quotes q LEFT JOIN products p ON q.product_id = p.id";
if ($statusFilter) {
    $query .= " WHERE q.status = " . $pdo->quote($statusFilter);
}
$query .= " ORDER BY q.created_at DESC";
$quotes = $pdo->query($query)->fetchAll();

// Mark notifications as read for quotes
$pdo->exec("UPDATE notifications SET is_read = 1 WHERE type = 'quote'");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quote Requests | Solidforge Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body { background-color: #1b1b1b; color: #fff; }
        .sidebar { background-color: #2a2a2a; min-height: 100vh; padding: 20px; }
        .nav-link { color: #aaa; margin-bottom: 10px; border-radius: 5px; }
        .nav-link:hover, .nav-link.active { background-color: #3b3b3b; color: #f7df50; }
        .card { background-color: #2a2a2a; border: none; }
        .text-warning { color: #f7df50 !important; }
        .main-content { padding: 30px; }
        .table { color: #efefef; }
        .table thead { background-color: #333; }
        .badge-new { background-color: #0dcaf0; color: #000; }
        .badge-pending { background-color: #ffc107; color: #000; }
        .badge-completed { background-color: #198754; }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2 sidebar">
                <div class="text-center mb-5">
                    <img src="../images/logo.png" width="150" alt="Logo">
                </div>
                <nav class="nav flex-column">
                    <a class="nav-link" href="index.php"><i class="bi bi-speedometer2 me-2"></i> Dashboard</a>
                    <a class="nav-link" href="products.php"><i class="bi bi-box-seam me-2"></i> Products</a>
                    <a class="nav-link" href="brands.php"><i class="bi bi-tags me-2"></i> Brands</a>
                    <a class="nav-link" href="customers.php"><i class="bi bi-people me-2"></i> Customers</a>
                    <a class="nav-link active" href="quotes.php"><i class="bi bi-chat-left-quote me-2"></i> Quotes</a>
                    <hr>
                    <a class="nav-link text-danger" href="logout.php"><i class="bi bi-box-arrow-right me-2"></i> Logout</a>
                </nav>
            </div>

            <!-- Main Content -->
            <div class="col-md-10 main-content">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2>Quote Requests</h2>
                    <div class="btn-group">
                        <a href="quotes.php" class="btn btn-sm btn-outline-light <?php echo !$statusFilter ? 'active' : ''; ?>">All</a>
                        <a href="quotes.php?status=new" class="btn btn-sm btn-outline-info <?php echo $statusFilter === 'new' ? 'active' : ''; ?>">New</a>
                        <a href="quotes.php?status=pending" class="btn btn-sm btn-outline-warning <?php echo $statusFilter === 'pending' ? 'active' : ''; ?>">In Progress</a>
                        <a href="quotes.php?status=completed" class="btn btn-sm btn-outline-success <?php echo $statusFilter === 'completed' ? 'active' : ''; ?>">Completed</a>
                    </div>
                </div>

                <?php if ($success): ?>
                    <div class="alert alert-success"><?php echo $success; ?></div>
                <?php endif; ?>

                <div class="card p-0">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Contact Info</th>
                                <th>Product</th>
                                <th>Message</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($quotes as $q): ?>
                            <tr>
                                <td><?php echo date('M d, Y', strtotime($q['created_at'])); ?></td>
                                <td>
                                    <strong><?php echo htmlspecialchars($q['name']); ?></strong><br>
                                    <small><?php echo htmlspecialchars($q['email']); ?></small><br>
                                    <small><?php echo htmlspecialchars($q['phone']); ?></small><br>
                                    <small class="text-muted"><?php echo htmlspecialchars($q['company']); ?></small>
                                </td>
                                <td>
                                    <span class="text-dark"><?php echo htmlspecialchars($q['product_name'] ?: 'General Inquiry'); ?></span>
                                </td>
                                <td>
                                    <div style="max-width: 300px; font-size: 0.9rem;">
                                        <?php echo nl2br(htmlspecialchars($q['message'])); ?>
                                    </div>
                                </td>
                                <td>
                                    <span class="badge badge-<?php echo $q['status']; ?>">
                                        <?php echo ucfirst($q['status']); ?>
                                    </span>
                                </td>
                                <td>
                                    <form method="POST" style="display:inline;">
                                        <input type="hidden" name="quote_id" value="<?php echo $q['id']; ?>">
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-outline-dark dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                                Status
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-dark">
                                                <li><button type="submit" name="action" value="new" class="dropdown-item">Mark New</button></li>
                                                <li><button type="submit" name="action" value="pending" class="dropdown-item">Mark In Progress</button></li>
                                                <li><button type="submit" name="action" value="completed" class="dropdown-item">Mark Completed</button></li>
                                            </ul>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            <?php if (empty($quotes)): ?>
                                <tr><td colspan="6" class="text-center py-4">No quote requests found.</td></tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
