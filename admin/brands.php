<?php
// admin/brands.php
require_once('../includes/db.php');
require_once('../includes/functions.php');
require_once('auth.php');
requireLogin();

$action = $_GET['action'] ?? 'list';
$error = '';
$success = '';

// Handle Create/Update/Delete
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $slug = $_POST['slug'] ?: createSlug($name);
    $description = $_POST['description'] ?? '';
    $id = $_POST['id'] ?? 0;

    if (isset($_POST['add_brand'])) {
        $stmt = $pdo->prepare("INSERT INTO brands (name, slug, description) VALUES (?, ?, ?)");
        if ($stmt->execute([$name, $slug, $description])) {
            $success = "Brand added successfully.";
            $action = 'list';
        }
    } elseif (isset($_POST['update_brand']) && $id) {
        $stmt = $pdo->prepare("UPDATE brands SET name = ?, slug = ?, description = ? WHERE id = ?");
        if ($stmt->execute([$name, $slug, $description, $id])) {
            $success = "Brand updated successfully.";
            $action = 'list';
        }
    } elseif (isset($_POST['delete_brand']) && $id) {
        // Check if brand has products
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM products WHERE brand_id = ?");
        $stmt->execute([$id]);
        if ($stmt->fetchColumn() > 0) {
            $error = "Cannot delete brand because it has associated products.";
        } else {
            $stmt = $pdo->prepare("DELETE FROM brands WHERE id = ?");
            if ($stmt->execute([$id])) {
                $success = "Brand deleted successfully.";
            }
        }
    }
}

if ($action === 'list') {
    $brands = $pdo->query("SELECT * FROM brands ORDER BY id ASC")->fetchAll();
} elseif ($action === 'edit' || $action === 'add') {
    $id = $_GET['id'] ?? 0;
    if ($id) {
        $stmt = $pdo->prepare("SELECT * FROM brands WHERE id = ?");
        $stmt->execute([$id]);
        $brand = $stmt->fetch();
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manage Brands | Solidforge Admin</title>
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
        .table { color: #efefef; }
        .table thead { background-color: #333; }
        .form-control, .form-select { background-color: #333; border: 1px solid #444; color: #fff; }
        .form-control:focus, .form-select:focus { background-color: #3b3b3b; color: #fff; border-color: #f7df50; box-shadow: none; }
        .form-label, h4, h2 { color: #efefef; }
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
                    <a class="nav-link active" href="brands.php"><i class="bi bi-tags me-2"></i> Brands</a>
                    <hr>
                    <a class="nav-link text-danger" href="logout.php"><i class="bi bi-box-arrow-right me-2"></i> Logout</a>
                </nav>
            </div>

            <!-- Main Content -->
            <div class="col-md-10 main-content">
                <?php if ($action === 'list'): ?>
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h2>Manage Brands</h2>
                        <a href="brands.php?action=add" class="btn btn-warning"><i class="bi bi-plus-lg"></i> Add Brand</a>
                    </div>

                    <?php if ($success): ?>
                        <div class="alert alert-success"><?php echo $success; ?></div>
                    <?php endif; ?>
                    <?php if ($error): ?>
                        <div class="alert alert-danger"><?php echo $error; ?></div>
                    <?php endif; ?>

                    <div class="card p-0">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Brand Name</th>
                                    <th>Slug</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($brands as $b): ?>
                                <tr>
                                    <td><?php echo $b['id']; ?></td>
                                    <td><strong><?php echo htmlspecialchars($b['name']); ?></strong></td>
                                    <td><code><?php echo htmlspecialchars($b['slug']); ?></code></td>
                                    <td><?php echo htmlspecialchars(substr($b['description'], 0, 50)) . (strlen($b['description']) > 50 ? '...' : ''); ?></td>
                                    <td>
                                        <a href="brands.php?action=edit&id=<?php echo $b['id']; ?>" class="btn btn-sm btn-outline-info"><i class="bi bi-pencil"></i> Edit</a>
                                        <form method="POST" style="display:inline;" onsubmit="return confirm('Delete this brand? This will fail if products are attached.');">
                                            <input type="hidden" name="id" value="<?php echo $b['id']; ?>">
                                            <button type="submit" name="delete_brand" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                <?php elseif ($action === 'add' || $action === 'edit'): ?>
                    <div class="mb-4">
                        <a href="brands.php" class="text-warning text-decoration-none"><i class="bi bi-arrow-left"></i> Back to Brands</a>
                        <h2 class="mt-3"><?php echo $action === 'add' ? 'Add New Brand' : 'Edit Brand'; ?></h2>
                    </div>

                    <div class="card p-4">
                        <form method="POST">
                            <input type="hidden" name="id" value="<?php echo $brand['id'] ?? ''; ?>">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Brand Name</label>
                                    <input type="text" name="name" class="form-control" value="<?php echo htmlspecialchars($brand['name'] ?? ''); ?>" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Slug (Optional)</label>
                                    <input type="text" name="slug" class="form-control" value="<?php echo htmlspecialchars($brand['slug'] ?? ''); ?>">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label class="form-label">Description</label>
                                    <textarea name="description" class="form-control" rows="4"><?php echo htmlspecialchars($brand['description'] ?? ''); ?></textarea>
                                </div>
                            </div>
                            <button type="submit" name="<?php echo $action === 'add' ? 'add_brand' : 'update_brand'; ?>" class="btn btn-warning px-5 py-2">
                                <?php echo $action === 'add' ? 'Create Brand' : 'Save Changes'; ?>
                            </button>
                        </form>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
  </body>
</html>
