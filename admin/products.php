<?php
// admin/products.php
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
    $brand_id = $_POST['brand_id'] ?? 0;
    $subtitle = $_POST['subtitle'] ?? '';
    $is_active = isset($_POST['is_active']) ? 1 : 0;
    $id = $_POST['id'] ?? 0;

    if ($action === 'add') {
        $stmt = $pdo->prepare("INSERT INTO products (name, slug, brand_id, subtitle, is_active) VALUES (?, ?, ?, ?, ?)");
        if ($stmt->execute([$name, $slug, $brand_id, $subtitle, $is_active])) {
            header("Location: products.php?success=Product added successfully");
            exit();
        }
    } elseif ($action === 'edit' && $id) {
        $stmt = $pdo->prepare("UPDATE products SET name = ?, slug = ?, brand_id = ?, subtitle = ?, is_active = ? WHERE id = ?");
        if ($stmt->execute([$name, $slug, $brand_id, $subtitle, $is_active, $id])) {
            $success = "Product updated successfully.";
        }
    } elseif ($action === 'delete' && isset($_POST['id'])) {
        $delete_id = $_POST['id'];
        $pdo->beginTransaction();
        try {
            $stmt = $pdo->prepare("DELETE FROM sections WHERE product_id = ?");
            $stmt->execute([$delete_id]);
            $stmt = $pdo->prepare("DELETE FROM products WHERE id = ?");
            $stmt->execute([$delete_id]);
            $pdo->commit();
            header("Location: products.php?success=Product deleted successfully");
            exit();
        } catch (Exception $e) {
            $pdo->rollBack();
            $error = "Failed to delete product: " . $e->getMessage();
        }
    }
}

$brands = $pdo->query("SELECT id, name FROM brands")->fetchAll();

if ($action === 'list') {
    $products = $pdo->query("SELECT p.*, b.name as brand_name FROM products p JOIN brands b ON p.brand_id = b.id ORDER BY p.id DESC")->fetchAll();
} elseif ($action === 'edit') {
    $id = $_GET['id'] ?? 0;
    $stmt = $pdo->prepare("SELECT * FROM products WHERE id = ?");
    $stmt->execute([$id]);
    $product = $stmt->fetch();
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manage Products | Solidforge Admin</title>
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
        .form-label { color: #efefef; font-weight: 500; }
    </style>
  </head>
  <body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar (Mobile toggle omitted for brevity) -->
            <div class="col-md-2 sidebar">
                <div class="text-center mb-5">
                    <img src="../images/logo.png" width="150" alt="Logo">
                </div>
                <nav class="nav flex-column">
                    <a class="nav-link" href="index.php"><i class="bi bi-speedometer2 me-2"></i> Dashboard</a>
                    <a class="nav-link active" href="products.php"><i class="bi bi-box-seam me-2"></i> Products</a>
                    <a class="nav-link" href="brands.php"><i class="bi bi-tags me-2"></i> Brands</a>
                    <hr>
                    <a class="nav-link text-danger" href="logout.php"><i class="bi bi-box-arrow-right me-2"></i> Logout</a>
                </nav>
            </div>

            <!-- Main Content -->
            <div class="col-md-10 main-content">
                <?php if ($action === 'list'): ?>
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h2>Manage Products</h2>
                        <a href="products.php?action=add" class="btn btn-warning"><i class="bi bi-plus-lg"></i> Add Product</a>
                    </div>

                    <?php if (isset($_GET['success']) || $success): ?>
                        <div class="alert alert-success"><?php echo $success ?: $_GET['success']; ?></div>
                    <?php endif; ?>

                    <div class="card p-0">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Product Name</th>
                                    <th>Brand</th>
                                    <th>Slug</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($products as $p): ?>
                                <tr>
                                    <td><?php echo $p['id']; ?></td>
                                    <td><strong><?php echo htmlspecialchars($p['name']); ?></strong></td>
                                    <td><?php echo htmlspecialchars($p['brand_name']); ?></td>
                                    <td><code>/product.php?slug=<?php echo $p['slug']; ?></code></td>
                                    <td>
                                        <span class="badge <?php echo $p['is_active'] ? 'bg-success' : 'bg-secondary'; ?>">
                                            <?php echo $p['is_active'] ? 'Active' : 'Inactive'; ?>
                                        </span>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="products.php?action=edit&id=<?php echo $p['id']; ?>" class="btn btn-sm btn-outline-info"><i class="bi bi-pencil"></i></a>
                                            <a href="sections.php?product_id=<?php echo $p['id']; ?>" class="btn btn-sm btn-warning"><i class="bi bi-layout-text-window-reverse"></i></a>
                                            <form method="POST" action="products.php?action=delete" style="display:inline;" onsubmit="return confirm('WARNING: This will permanently delete the product and ALL its content sections. Proceed?');">
                                                <input type="hidden" name="id" value="<?php echo $p['id']; ?>">
                                                <button type="submit" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                <?php elseif ($action === 'add' || $action === 'edit'): ?>
                    <div class="mb-4">
                        <a href="products.php" class="text-warning text-decoration-none"><i class="bi bi-arrow-left"></i> Back to Products</a>
                        <h2 class="mt-3"><?php echo $action === 'add' ? 'Add New Product' : 'Edit Product'; ?></h2>
                    </div>

                    <div class="card p-4">
                        <form method="POST">
                            <input type="hidden" name="id" value="<?php echo $product['id'] ?? ''; ?>">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Product Name</label>
                                    <input type="text" name="name" class="form-control" value="<?php echo htmlspecialchars($product['name'] ?? ''); ?>" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Brand</label>
                                    <select name="brand_id" class="form-select" required>
                                        <option value="">Select Brand</option>
                                        <?php foreach($brands as $b): ?>
                                            <option value="<?php echo $b['id']; ?>" <?php echo ($product['brand_id'] ?? '') == $b['id'] ? 'selected' : ''; ?>>
                                                <?php echo htmlspecialchars($b['name']); ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Slug (Optional - will be auto-generated)</label>
                                    <input type="text" name="slug" class="form-control" value="<?php echo htmlspecialchars($product['slug'] ?? ''); ?>">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Subtitle / Tagline</label>
                                    <input type="text" name="subtitle" class="form-control" value="<?php echo htmlspecialchars($product['subtitle'] ?? ''); ?>">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="is_active" id="isActive" <?php echo ($product['is_active'] ?? 1) ? 'checked' : ''; ?>>
                                        <label class="form-check-label" for="isActive">
                                            Product is active and visible on website
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-warning px-5 py-2"><?php echo $action === 'add' ? 'Create Product' : 'Save Changes'; ?></button>
                        </form>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
  </body>
</html>
