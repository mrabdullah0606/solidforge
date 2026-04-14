<?php
// admin/sections.php
require_once('../includes/db.php');
require_once('../includes/functions.php');
require_once('auth.php');
requireLogin();

$product_id = $_GET['product_id'] ?? 0;
if (!$product_id) { header("Location: products.php"); exit(); }

$stmt = $pdo->prepare("SELECT name FROM products WHERE id = ?");
$stmt->execute([$product_id]);
$productName = $stmt->fetchColumn();

$action = $_GET['action'] ?? 'list';
$error = '';
$success = '';

// Handle Crud
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add_section'])) {
        $type = $_POST['type'];
        $content = $_POST['content'];
        $sort = $_POST['sort_order'] ?? 0;
        
        $stmt = $pdo->prepare("INSERT INTO sections (product_id, type, content, sort_order) VALUES (?, ?, ?, ?)");
        if ($stmt->execute([$product_id, $type, $content, $sort])) {
            header("Location: sections.php?product_id=$product_id&success=Section added successfully");
            exit();
        }
    } elseif (isset($_POST['update_section'])) {
        $id = $_POST['id'];
        $type = $_POST['type'];
        $content = $_POST['content'];
        $sort = $_POST['sort_order'] ?? 0;
        
        $stmt = $pdo->prepare("UPDATE sections SET type = ?, content = ?, sort_order = ? WHERE id = ?");
        if ($stmt->execute([$type, $content, $sort, $id])) {
            header("Location: sections.php?product_id=$product_id&success=Section updated successfully");
            exit();
        }
    } elseif (isset($_POST['delete_section'])) {
        $id = $_POST['id'];
        $stmt = $pdo->prepare("DELETE FROM sections WHERE id = ?");
        if ($stmt->execute([$id])) {
            header("Location: sections.php?product_id=$product_id&success=Section deleted");
            exit();
        }
    }
}

// Handle messages from GET
if(isset($_GET['success'])) $success = $_GET['success'];
if(isset($_GET['error'])) $error = $_GET['error'];

$sections = getProductSections($pdo, $product_id);

// If editing a specific section
$editSection = null;
if ($action === 'edit') {
    $section_id = $_GET['id'] ?? 0;
    $stmt = $pdo->prepare("SELECT * FROM sections WHERE id = ?");
    $stmt->execute([$section_id]);
    $editSection = $stmt->fetch();
    if($editSection) {
        $editSection['content'] = json_decode($editSection['content'], true);
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Section Builder | <?php echo htmlspecialchars($productName); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
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
        .form-control, .form-select { background-color: #333; border: 1px solid #444; color: #fff; }
        .form-control:focus { background-color: #3b3b3b; color: #fff; border-color: #f7df50; box-shadow: none; }
        .section-item { border-left: 4px solid #f7df50; margin-bottom: 15px; }
        .form-label, h4, h6 { color: #efefef; }
        .visual-form-card { border: 1px dashed #444; padding: 15px; margin-bottom: 15px; border-radius: 8px; }
        .btn-add { color: #f7df50; border: 1px dashed #f7df50; width: 100%; margin-top: 10px; }
        .btn-add:hover { background: rgba(247, 223, 80, 0.1); color: #f7df50; }
        .media-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(120px, 1fr)); gap: 15px; }
        .media-item { cursor: pointer; border: 2px solid transparent; transition: all 0.2s; background: #333; height: 120px; display: flex; align-items: center; justify-content: center; overflow: hidden; position: relative; }
        .media-item:hover { border-color: #f7df50; }
        .media-item.active { border-color: #f7df50; }
        .media-item img, .media-item video { max-width: 100%; max-height: 100%; object-fit: cover; }
        .media-item .delete-btn { position: absolute; top: 5px; right: 5px; background: rgba(255,0,0,0.7); color: #fff; border: none; border-radius: 3px; padding: 2px 6px; font-size: 10px; z-index: 10; display: none; }
        .media-item:hover .delete-btn { display: block; }
        .progress { height: 10px; background-color: #333; }
        .progress-bar { background-color: #f7df50; }
    </style>
  </head>
  <body>
    <div class="container-fluid">
        <div class="row">
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

            <div class="col-md-10 main-content">
                <div class="mb-4 d-flex justify-content-between">
                    <div>
                        <a href="products.php" class="text-warning text-decoration-none"><i class="bi bi-arrow-left"></i> Back to Products</a>
                        <h2 class="mt-2">Building Content for: <span class="text-warning"><?php echo htmlspecialchars($productName); ?></span></h2>
                    </div>
                </div>

                <?php if ($success): ?>
                    <div class="alert alert-success"><?php echo $success; ?></div>
                <?php endif; ?>

                <div class="row">
                    <!-- Section List -->
                    <div class="col-md-8">
                        <h4 class="mb-3">Existing Sections</h4>
                        <?php if (empty($sections)): ?>
                            <div class="alert alert-dark">No sections yet. Add your first section from the panel!</div>
                        <?php else: ?>
                            <?php foreach($sections as $s): ?>
                                <div class="card section-item p-3 mb-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <span class="badge bg-warning text-dark me-2">Order: <?php echo $s['sort_order']; ?></span>
                                            <span class="text-uppercase fw-bold"><?php echo $s['type']; ?></span>
                                        </div>
                                        <div>
                                            <a href="sections.php?product_id=<?php echo $product_id; ?>&action=edit&id=<?php echo $s['id']; ?>" class="btn btn-sm btn-outline-info me-2">Edit</a>
                                            <form method="POST" style="display:inline;" onsubmit="return confirm('Delete this section?');">
                                                <input type="hidden" name="id" value="<?php echo $s['id']; ?>">
                                                <button type="submit" name="delete_section" class="btn btn-sm btn-outline-danger">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="mt-2 small text-info">
                                        <?php 
                                        $c = $s['content'];
                                        if($s['type'] === 'hero') echo "<strong>Banner:</strong> " . htmlspecialchars($c['title'] ?? 'Untitled');
                                        elseif($s['type'] === 'cards') echo "<strong>Cards:</strong> " . count($c['cards'] ?? []) . " items - " . htmlspecialchars($c['title'] ?? '');
                                        elseif($s['type'] === 'specs') echo "<strong>Table:</strong> " . count($c['rows'] ?? []) . " rows - " . htmlspecialchars($c['title'] ?? '');
                                        else echo "<strong>Content:</strong> " . htmlspecialchars(substr(json_encode($c), 0, 80)) . "...";
                                        ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>

                    <!-- Editor Panel -->
                    <?php
                    $initialContent = $editSection ? $editSection['content'] : [
                        'title' => '', 
                        'subtitle' => '', 
                        'bg_image' => '',
                        'product_image' => '',
                        'video_url' => '',
                        'cards' => [], 
                        'columns' => ['Param', 'Value'], 
                        'rows' => [['', '']]
                    ];
                    $initialType = $editSection['type'] ?? 'hero';
                    ?>
                    <div class="col-md-4" 
                         x-data='{ 
                            type: <?php echo json_encode($initialType); ?>,
                            content: <?php echo json_encode($initialContent); ?>,
                            init() {
                                // Ensure all possible keys exist so Alpine can track them
                                const defaults = {
                                    title: "", subtitle: "", bg_image: "", product_image: "", 
                                    video_url: "", button_text: "Watch Video", cards: [], tabs: [], columns: ["Param","Value"], rows: [["",""]]
                                };
                                this.content = { ...defaults, ...this.content };

                                this.$watch("type", val => {
                                    // Only reset if it looks like we are switching a brand new, empty section
                                    if(!this.content.title && !this.content.bg_image && this.content.cards.length === 0) {
                                      if(val === "cards") this.content.cards = [{title: "", text: "", image: ""}];
                                      if(val === "specs") { this.content.columns = ["Param","Value"]; this.content.rows = [["",""]]; }
                                      if(val === "tabs") { this.content.tabs = [{title: "Tab 1", content: ""}]; }
                                    }
                                });
                            },
                            openPicker(obj, field) {
                                window.dispatchEvent(new CustomEvent("open-media-picker", { detail: { obj: obj, field: field } }));
                            }
                        }'>
                        <div class="card p-4">
                            <h4><?php echo $editSection ? 'Edit Section' : 'Add New Section'; ?></h4>
                            <form method="POST">
                                <?php if($editSection): ?>
                                    <input type="hidden" name="id" value="<?php echo $editSection['id']; ?>">
                                <?php endif; ?>
                                
                                <!-- Hidden field to store serialized JSON -->
                                <input type="hidden" name="content" :value="JSON.stringify(content)">

                                <div class="mb-3">
                                    <label class="form-label">Section Type</label>
                                    <select name="type" class="form-select" x-model="type" required>
                                        <option value="hero">Hero Banner</option>
                                        <option value="cards">Feature Cards</option>
                                        <option value="specs">Technical Specs Table</option>
                                        <option value="video_banner">Video Banner</option>
                                        <option value="tabs">Tabbed Content</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Sort Order</label>
                                    <input type="number" name="sort_order" class="form-control" value="<?php echo $editSection['sort_order'] ?? 0; ?>">
                                </div>

                                <hr class="border-secondary mt-4 mb-4">

                                <!-- VISUAL FIELDS SECTION -->
                                <div id="visual-fields">
                                    
                                    <!-- HERO FIELDS -->
                                    <template x-if="type === 'hero'">
                                        <div>
                                            <div class="mb-3">
                                                <label class="form-label">Main Title</label>
                                                <input type="text" class="form-control" x-model="content.title">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Subtitle</label>
                                                <textarea class="form-control" rows="3" x-model="content.subtitle"></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Background Image</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" x-model="content.bg_image" placeholder="images/hero-bg.jpg">
                                                    <button class="btn btn-outline-warning" type="button" @click="openPicker(content, 'bg_image')"><i class="bi bi-folder2-open"></i></button>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Product Image (Foreground)</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" x-model="content.product_image" placeholder="images/waxjet.png">
                                                    <button class="btn btn-outline-warning" type="button" @click="openPicker(content, 'product_image')"><i class="bi bi-folder2-open"></i></button>
                                                </div>
                                                <small class="text-muted">Use a transparent PNG for best results.</small>
                                            </div>
                                        </div>
                                    </template>

                                    <!-- CARDS FIELDS -->
                                    <template x-if="type === 'cards'">
                                        <div>
                                            <div class="mb-3">
                                                <label class="form-label">Section Title</label>
                                                <input type="text" class="form-control" x-model="content.title">
                                            </div>
                                            <label class="form-label">Cards List</label>
                                            <template x-for="(card, index) in content.cards" :key="index">
                                                <div class="visual-form-card">
                                                    <div class="d-flex justify-content-between mb-2">
                                                        <span class="text-warning small text-uppercase">Card #<span x-text="index + 1"></span></span>
                                                        <button type="button" class="btn btn-sm btn-outline-danger border-0" @click="content.cards.splice(index, 1)"><i class="bi bi-x-lg"></i></button>
                                                    </div>
                                                    <input type="text" class="form-control mb-2" x-model="card.title" placeholder="Card Title">
                                                    <textarea class="form-control mb-2" x-model="card.text" placeholder="Card Description"></textarea>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" x-model="card.image" placeholder="Image Path">
                                                        <button class="btn btn-outline-warning" type="button" @click="openPicker(content.cards[index], 'image')"><i class="bi bi-folder2-open"></i></button>
                                                    </div>
                                                </div>
                                            </template>
                                            <button type="button" class="btn btn-add btn-sm" @click="content.cards.push({title:'', text:'', image:''})">
                                                <i class="bi bi-plus-circle me-1"></i> Add Another Card
                                            </button>
                                        </div>
                                    </template>

                                    <!-- SPECS FIELDS -->
                                    <template x-if="type === 'specs'">
                                        <div>
                                            <div class="mb-3">
                                                <label class="form-label">Table Title</label>
                                                <input type="text" class="form-control" x-model="content.title">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Columns (comma separated)</label>
                                                <input type="text" class="form-control" :value="content.columns ? content.columns.join(',') : ''" @input="content.columns = $event.target.value.split(',')">
                                            </div>
                                            <label class="form-label">Rows</label>
                                            <div class="table-responsive">
                                                <table class="table table-sm border-secondary">
                                                    <template x-for="(row, rIndex) in content.rows" :key="rIndex">
                                                        <tr>
                                                            <template x-for="(cell, cIndex) in row" :key="cIndex">
                                                                <td><input type="text" class="form-control form-control-sm" x-model="content.rows[rIndex][cIndex]"></td>
                                                            </template>
                                                            <td><button type="button" class="btn btn-sm text-danger" @click="content.rows.splice(rIndex, 1)"><i class="bi bi-trash"></i></button></td>
                                                        </tr>
                                                    </template>
                                                </table>
                                            </div>
                                            <button type="button" class="btn btn-add btn-sm" @click="content.rows.push(new Array(content.columns.length).fill(''))">
                                                <i class="bi bi-plus-circle me-1"></i> Add Row
                                            </button>
                                        </div>
                                    </template>

                                    <!-- VIDEO BANNER FIELDS -->
                                    <template x-if="type === 'video_banner'">
                                        <div>
                                            <div class="mb-3">
                                                <label class="form-label">Title</label>
                                                <input type="text" class="form-control" x-model="content.title">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Subtitle</label>
                                                <textarea class="form-control" rows="2" x-model="content.subtitle"></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Video URL/Path</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" x-model="content.video_url" placeholder="uploads/media/video.mp4">
                                                    <button class="btn btn-outline-warning" type="button" @click="openPicker(content, 'video_url')"><i class="bi bi-folder2-open"></i></button>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Poster Image (Fallback)</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" x-model="content.bg_image" placeholder="images/hero.jpg">
                                                    <button class="btn btn-outline-warning" type="button" @click="openPicker(content, 'bg_image')"><i class="bi bi-folder2-open"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </template>

                                    <!-- TABS FIELDS -->
                                    <template x-if="type === 'tabs'">
                                        <div>
                                            <div class="mb-3">
                                                <label class="form-label">Section Title</label>
                                                <input type="text" class="form-control" x-model="content.title">
                                            </div>
                                            <label class="form-label">Tabs List</label>
                                            <template x-for="(tab, index) in content.tabs" :key="index">
                                                <div class="visual-form-card">
                                                    <div class="d-flex justify-content-between mb-2">
                                                        <span class="text-warning small text-uppercase">Tab #<span x-text="index + 1"></span></span>
                                                        <button type="button" class="btn btn-sm btn-outline-danger border-0" @click="content.tabs.splice(index, 1)"><i class="bi bi-x-lg"></i></button>
                                                    </div>
                                                    <input type="text" class="form-control mb-2" x-model="tab.title" placeholder="Tab Title">
                                                    <textarea class="form-control mb-2" rows="3" x-model="tab.content" placeholder="Tab Content"></textarea>
                                                    <div class="row g-2">
                                                        <div class="col-6">
                                                            <div class="input-group input-group-sm">
                                                                <input type="text" class="form-control" x-model="tab.image" placeholder="Image Path">
                                                                <button class="btn btn-outline-warning" type="button" @click="openPicker(content.tabs[index], 'image')"><i class="bi bi-folder"></i></button>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="input-group input-group-sm">
                                                                <input type="text" class="form-control" x-model="tab.video_url" placeholder="Video URL">
                                                                <button class="btn btn-outline-warning" type="button" @click="openPicker(content.tabs[index], 'video_url')"><i class="bi bi-folder"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </template>
                                            <button type="button" class="btn btn-add btn-sm" @click="content.tabs.push({title:'New Tab', content:''})">
                                                <i class="bi bi-plus-circle me-1"></i> Add Another Tab
                                            </button>
                                        </div>
                                    </template>

                                </div>

                                <button type="submit" name="<?php echo $editSection ? 'update_section' : 'add_section'; ?>" class="btn btn-warning w-100 mt-4">
                                    <?php echo $editSection ? 'Update Section' : 'Add Section'; ?>
                                </button>
                                <?php if($editSection): ?>
                                    <a href="sections.php?product_id=<?php echo $product_id; ?>" class="btn btn-outline-light w-100 mt-2">Cancel</a>
                                <?php endif; ?>
                            </form>
                        </div>
                        
                        <div class="mt-4 p-3 bg-dark border border-secondary rounded">
                            <h6><i class="bi bi-info-circle"></i> Help Tips</h6>
                            <ul class="small text-muted ps-3 mb-0">
                                <li><strong>Hero</strong>: bg_image, title, subtitle</li>
                                <li><strong>Cards</strong>: title, cards[{image, title, text}]</li>
                                <li><strong>Specs</strong>: title, columns[], rows[[]]</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- MEDIA PICKER MODAL -->
    <div x-data="mediaStore" 
         @open-media-picker.window="show($event.detail)" 
         class="modal fade" id="mediaModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content bg-dark text-white border-secondary">
                <div class="modal-header border-secondary">
                    <h5 class="modal-title">Media Library</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <!-- Upload Area -->
                        <div class="col-md-3 border-end border-secondary">
                            <h6>Upload New Media</h6>
                            <div class="mb-3">
                                <input type="file" id="fileInput" class="form-control form-control-sm mb-2" @change="uploadFile">
                                <div x-show="uploading" class="mt-3">
                                    <div class="d-flex justify-content-between small mb-1">
                                        <span x-text="uploadStatus"></span>
                                        <span x-text="progress + '%'"></span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" :style="'width: ' + progress + '%'"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Library Area -->
                        <div class="col-md-9">
                            <div class="d-flex justify-content-between mb-3">
                                <h6 x-text="'All Files (' + totalFiles + ')'"></h6>
                                <div class="btn-group btn-group-sm">
                                    <button class="btn btn-outline-light" @click="prevPage" :disabled="page <= 1">Prev</button>
                                    <button class="btn btn-outline-light" @click="nextPage" :disabled="page >= totalPages">Next</button>
                                </div>
                            </div>
                            <div class="media-grid" x-show="!loading">
                                <template x-for="item in items" :key="item.id">
                                    <div class="media-item" @click="selectItem(item)">
                                        <button type="button" class="delete-btn" @click.stop="deleteItem(item)"><i class="bi bi-trash"></i></button>
                                        <template x-if="item.file_type.includes('image')">
                                            <img :src="'../' + item.file_path" alt="">
                                        </template>
                                        <template x-if="item.file_type.includes('video')">
                                            <video :src="'../' + item.file_path" muted @mouseover="$el.play()" @mouseleave="$el.pause()"></video>
                                        </template>
                                    </div>
                                </template>
                            </div>
                            <div class="text-center py-5" x-show="loading">
                                <div class="spinner-border text-warning" role="status"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('mediaStore', () => ({
            items: [],
            page: 1,
            totalPages: 1,
            totalFiles: 0,
            loading: false,
            uploading: false,
            progress: 0,
            uploadStatus: '',
            activeTarget: null,
            activeField: null,
            modal: null,

            init() {
                this.modal = new bootstrap.Modal(document.getElementById('mediaModal'));
            },

            async show(detail) {
                this.activeTarget = detail.obj;
                this.activeField = detail.field;
                this.modal.show();
                this.loadMedia();
            },

            async loadMedia() {
                this.loading = true;
                const res = await fetch('ajax_media.php?page=' + this.page);
                const data = await res.json();
                this.items = data.items;
                this.totalPages = data.pages;
                this.totalFiles = data.total;
                this.loading = false;
            },

            nextPage() { this.page++; this.loadMedia(); },
            prevPage() { this.page--; this.loadMedia(); },

            selectItem(item) {
                this.activeTarget[this.activeField] = item.file_path;
                this.modal.hide();
            },

            async deleteItem(item) {
                if (!confirm('Are you sure you want to delete this file? This cannot be undone and may break pages using this file.')) return;
                
                const formData = new FormData();
                formData.append('id', item.id);
                
                try {
                    const res = await fetch('ajax_media_delete.php', { method: 'POST', body: formData });
                    const result = await res.json();
                    if (result.success) {
                        this.loadMedia();
                    } else {
                        alert('Delete failed: ' + result.error);
                    }
                } catch (err) {
                    alert('Error: ' + err.message);
                }
            },

            async uploadFile(e) {
                const file = e.target.files[0];
                if (!file) return;

                const chunkSize = 5 * 1024 * 1024; // 5MB
                const totalChunks = Math.ceil(file.size / chunkSize);
                const fileId = Date.now().toString(36) + Math.random().toString(36).substr(2);
                
                this.uploading = true;
                this.progress = 0;
                this.uploadStatus = 'Starting upload...';

                for (let i = 0; i < totalChunks; i++) {
                    const start = i * chunkSize;
                    const end = Math.min(start + chunkSize, file.size);
                    const chunk = file.slice(start, end);

                    const formData = new FormData();
                    formData.append('chunk', chunk);
                    formData.append('fileName', file.name);
                    formData.append('fileId', fileId);
                    formData.append('index', i);
                    formData.append('total', totalChunks);

                    this.uploadStatus = `Uploading chunk ${i+1}/${totalChunks}...`;
                    
                    try {
                        const res = await fetch('ajax_upload.php', { method: 'POST', body: formData });
                        const result = await res.json();
                        
                        if (result.error) throw new Error(result.error);
                        
                        this.progress = Math.round(((i + 1) / totalChunks) * 100);

                        if (result.success && result.file_path) {
                            this.uploadStatus = 'Complete!';
                            this.loadMedia();
                            setTimeout(() => { this.uploading = false; }, 2000);
                        }
                    } catch (err) {
                        alert('Upload failed: ' + err.message);
                        this.uploading = false;
                        return;
                    }
                }
            }
        }));
    });
    </script>
  </body>
</html>
