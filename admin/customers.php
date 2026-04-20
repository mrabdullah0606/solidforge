<?php
// admin/customers.php
require_once('../includes/db.php');
require_once('../includes/functions.php');
require_once('auth.php');
requireLogin();

$statusFilter = $_GET['status'] ?? '';
$error = '';
$success = '';

// Handle Status Updates
if (isset($_POST['action']) && isset($_POST['customer_id'])) {
    $cId = $_POST['customer_id'];
    $newStatus = $_POST['action'] === 'approve' ? 'approved' : 'rejected';
    
    $stmt = $pdo->prepare("UPDATE customers SET status = ? WHERE id = ?");
    if ($stmt->execute([$newStatus, $cId])) {
        $success = "Customer " . ucfirst($newStatus) . " successfully.";
    } else {
        $error = "Failed to update customer status.";
    }
}

// Fetch Customers
$query = "SELECT * FROM customers";
if ($statusFilter) {
    $query .= " WHERE status = " . $pdo->quote($statusFilter);
}
$query .= " ORDER BY created_at DESC";
$customers = $pdo->query($query)->fetchAll();

// Mark notifications as read for registrations
$pdo->exec("UPDATE notifications SET is_read = 1 WHERE type = 'registration'");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Customer Management | Solidforge Admin</title>
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
        .badge-pending { background-color: #ffc107; color: #000; }
        .badge-approved { background-color: #198754; }
        .badge-rejected { background-color: #dc3545; }
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
                    <a class="nav-link active" href="customers.php"><i class="bi bi-people me-2"></i> Customers</a>
                    <a class="nav-link" href="quotes.php"><i class="bi bi-chat-left-quote me-2"></i> Quotes</a>
                    <hr>
                    <a class="nav-link text-danger" href="logout.php"><i class="bi bi-box-arrow-right me-2"></i> Logout</a>
                </nav>
            </div>

            <!-- Main Content -->
            <div class="col-md-10 main-content">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2>Customer Management</h2>
                    <div class="btn-group">
                        <a href="customers.php" class="btn btn-sm btn-outline-light <?php echo !$statusFilter ? 'active' : ''; ?>">All</a>
                        <a href="customers.php?status=pending" class="btn btn-sm btn-outline-warning <?php echo $statusFilter === 'pending' ? 'active' : ''; ?>">Pending</a>
                        <a href="customers.php?status=approved" class="btn btn-sm btn-outline-success <?php echo $statusFilter === 'approved' ? 'active' : ''; ?>">Approved</a>
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
                                <th>Name / Company</th>
                                <th>Email / Phone</th>
                                <th>Documents</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($customers as $c): ?>
                            <tr>
                                <td><?php echo date('M d, Y', strtotime($c['created_at'])); ?></td>
                                <td>
                                    <strong><?php echo htmlspecialchars($c['name']); ?></strong><br>
                                    <small class="text-muted"><?php echo htmlspecialchars($c['company_name']); ?></small>
                                </td>
                                <td>
                                    <?php echo htmlspecialchars($c['email']); ?><br>
                                    <small><?php echo htmlspecialchars($c['phone']); ?></small>
                                </td>
                                <td>
                                    <?php 
                                    $docs = json_decode($c['documents_json'], true);
                                    if (!empty($docs)):
                                        foreach($docs as $i => $doc):
                                            $ext = pathinfo($doc, PATHINFO_EXTENSION);
                                            $icon = in_array($ext, ['jpg', 'jpeg', 'png', 'webp']) ? 'bi-image' : 'bi-file-earmark-pdf';
                                    ?>
                                        <a href="../<?php echo $doc; ?>" target="_blank" class="btn btn-sm btn-outline-dark me-1" title="View Document">
                                            <i class="bi <?php echo $icon; ?>"></i>
                                        </a>
                                    <?php 
                                        endforeach;
                                    else:
                                        echo '<span class="text-muted">No docs</span>';
                                    endif;
                                    ?>
                                </td>
                                <td>
                                    <span class="badge badge-<?php echo $c['status']; ?>">
                                        <?php echo ucfirst($c['status']); ?>
                                    </span>
                                </td>
                                <td>
                                    <?php if ($c['status'] === 'pending'): ?>
                                        <form method="POST" style="display:inline;">
                                            <input type="hidden" name="customer_id" value="<?php echo $c['id']; ?>">
                                            <button type="submit" name="action" value="approve" class="btn btn-sm btn-success" onclick="return confirm('Approve this customer?')">Approve</button>
                                            <button type="submit" name="action" value="reject" class="btn btn-sm btn-outline-danger" onclick="return confirm('Reject this customer?')">Reject</button>
                                        </form>
                                    <?php else: ?>
                                        <span class="text-muted">Processed</span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            <?php if (empty($customers)): ?>
                                <tr><td colspan="6" class="text-center py-4">No customers found.</td></tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
