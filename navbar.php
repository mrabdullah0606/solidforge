<?php require_once('includes/session_init.php'); ?>
<?php
// navbar.php
$navBrands = getBrandsWithProducts($pdo);
?>
<style>
    .nav-link:hover{color: #fff !important;}
    .quotebtn:hover{color: #fff !important;}
    .text-warning{
        color: #f7df50 !important;
    }
    
    /* Navbar background - unified dark theme */
    .navbar {
        background-color: #3b3b3b !important;
    }
    
    /* Global Dropdown Transition Styling */
    .dropdown-menu {
        transition: all 0.3s ease;
        transform: translateY(10px);
        visibility: hidden;
        display: block;
        opacity: 0;
    }

    /* Open main menu on hover */
    .hover-dropdown:hover > .dropdown-menu,
    .dropdown-menu.show {
        visibility: visible !important;
        opacity: 1 !important;
        transform: translateY(0) !important;
    }

    /* Open sub-menus on hover */
    .dropdown-submenu:hover > .dropdown-menu {
        visibility: visible !important;
        opacity: 1 !important;
        display: block !important;
        transform: translateY(0) !important;
    }

    /* Ensure sub-menus are positioned correctly and hidden when not active */
    .dropdown-submenu .dropdown-menu {
        left: 100%;
        top: 0;
        margin-top: 0;
        transform: translateX(10px); /* Slide in from side on desktop */
    }

    .dropdown-submenu:hover > .dropdown-menu {
        transform: translateX(0) !important;
    }

    /* Handle mobile adjustments (no hover, use .show class) */
    @media (max-width: 991px) {
        .dropdown-menu {
            transform: translateY(0);
        }
        .dropdown-submenu .dropdown-menu {
            left: 0;
            position: relative;
            transform: translateY(0);
        }
    }
</style>
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand col-6 col-md-4 col-lg-3 col-xl-2" href="index.php"><img src="images/logo.png" alt="SolidForgeLogo_RGB_Red" class="w-100"></a>
        <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Center the navbar items -->
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <!-- Home Item (No Dropdown) -->
                <li class="nav-item">
                    <a class="nav-link text-warning" aria-current="page" href="index.php">Home</a>
                </li>
                    <!-- Products -->
                <li class="nav-item dropdown hover-dropdown" data-bs-auto-close="outside">
                    <a class="nav-link text-warning dropdown-toggle" href="index.php#products" id="navbarDropdownManufacturing" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Products
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownManufacturing">
                        <?php foreach($navBrands as $brand): ?>
                        <li class="dropdown-submenu">
                            <a class="dropdown-item submenu-toggle" href="#"><?php echo htmlspecialchars($brand['name']); ?> Brand</a>
                            <ul class="dropdown-menu">
                                <?php if (!empty($brand['categories'])): ?>
                                    <?php foreach($brand['categories'] as $cat): ?>
                                        <li><a class="dropdown-item bg-warning disabled" href="#"><?php echo htmlspecialchars($cat['name']); ?></a></li>
                                        <?php 
                                        // For now, if we don't have sub-filtering in DB, we just list products under the brand
                                        // But we can filter by category if the DB is set up that way.
                                        ?>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                                
                                <?php foreach($brand['products'] as $prod): ?>
                                    <li><a class="dropdown-item" href="product.php?slug=<?php echo urlencode($prod['slug']); ?>"><?php echo htmlspecialchars($prod['name']); ?></a></li>
                                <?php endforeach; ?>

                                <?php if (empty($brand['products'])): ?>
                                    <li><a class="dropdown-item disabled" href="#">Coming Soon</a></li>
                                <?php endif; ?>
                            </ul>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </li>

                <li class="nav-item dropdown hover-dropdown">
                    <a class="nav-link text-warning" href="installation.php">
                        Installation & Training
                    </a>
                </li>

                <!-- <li class="nav-item dropdown hover-dropdown">
                    <a class="nav-link text-warning" href="second-life.php">
                        Second life
                    </a>
                </li> -->

                <li class="nav-item dropdown hover-dropdown">
                    <a class="nav-link text-warning" href="support.php">
                        Support
                    </a>
                </li>
                
                
                <!-- Manufacturing Dropdown -->
                <!-- <li class="nav-item dropdown hover-dropdown">
                    <a class="nav-link text-white" href="#" id="navbarDropdownManufacturing" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Manufacturing
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownManufacturing">
                        <li><a class="dropdown-item" href="#">Option 1</a></li>
                        <li><a class="dropdown-item" href="#">Option 2</a></li>
                        <li><a class="dropdown-item" href="#">Option 3</a></li>
                    </ul>
                </li> -->

                <!-- Materials Dropdown -->
                <!--   <li class="nav-item dropdown hover-dropdown">
                    <a class="nav-link text-white" href="#" id="navbarDropdownMaterials" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Materials
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMaterials">
                        <li><a class="dropdown-item" href="#">Material 1</a></li>
                        <li><a class="dropdown-item" href="#">Material 2</a></li>
                        <li><a class="dropdown-item" href="#">Material 3</a></li>
                    </ul>
                </li> -->

                <!-- Industries Dropdown -->
                <!-- <li class="nav-item dropdown hover-dropdown">
                    <a class="nav-link text-white" href="#" id="navbarDropdownIndustries" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Industries
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownIndustries">
                        <li><a class="dropdown-item" href="#">Industry 1</a></li>
                        <li><a class="dropdown-item" href="#">Industry 2</a></li>
                        <li><a class="dropdown-item" href="#">Industry 3</a></li>
                    </ul>
                </li> -->

                
            </ul>
            <!-- Align buttons to the right -->
            <div class="d-flex ms-auto align-items-center"> 
                <a class="btn bg-silver quotebtn mx-3 text-warning fw-medium" href="contact.php">Get In Touch</a>
                
                <?php if (isAdminLoggedIn()): ?>
                    <div class="dropdown me-2">
                        <button class="btn btn-warning fw-medium dropdown-toggle" type="button" data-bs-toggle="dropdown">
                            <i class="bi bi-shield-lock me-1"></i> Admin Panel
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark shadow">
                            <li><a class="dropdown-item" href="admin/index.php"><i class="bi bi-speedometer2 me-2"></i>Dashboard</a></li>
                            <li><a class="dropdown-item" href="admin/customers.php"><i class="bi bi-people me-2"></i>Manage Users</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-danger" href="admin/logout.php"><i class="bi bi-box-arrow-right me-2"></i>Sign Out</a></li>
                        </ul>
                    </div>
                <?php elseif (isCustomerLoggedIn()): ?>
                    <div class="dropdown me-2">
                        <button class="btn btn-outline-light text-warning fw-medium dropdown-toggle" type="button" data-bs-toggle="dropdown">
                            <i class="bi bi-person-circle me-1"></i> <?php echo htmlspecialchars($_SESSION['customer_name'] ?? 'User'); ?>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark shadow">
                            <li><a class="dropdown-item" href="logout.php"><i class="bi bi-box-arrow-right me-2"></i>Sign Out</a></li>
                        </ul>
                    </div>
                <?php else: ?>
                    <a href="login.php" class="btn btn-outline-light text-warning fw-medium">sign in</a>
                <?php endif; ?>

            </div>
            </div>
        </div>
    </div>
    </nav>