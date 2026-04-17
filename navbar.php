<?php
require_once('includes/db.php');
require_once('includes/functions.php');

$navBrands = getBrandsWithProducts($pdo);
?>
<style>
    .nav-link:hover{color: #fff !important;}
    .quotebtn:hover{color: #fff !important;}
    .text-warning{
        color: #f7df50 !important;
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
<nav class="navbar navbar-expand-lg" style="background-color: #3b3b3b;">
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

                <li class="nav-item dropdown hover-dropdown">
                    <a class="nav-link text-warning" href="second-life.php">
                        Second life
                    </a>
                </li>

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
                <a href="admin/login.php" class="btn btn-outline-light text-warning fw-medium">sign in</a>
                <!-- Shopping Cart Icon -->
                <button class="btn btn-outline-light ms-2">
                    <svg class="h-100 me-4" fill="#f7df50" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 287.755 287.755" xml:space="preserve" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M134.16,279.13c-15.24,0-26.715-12.31-26.715-27.544c0-15.162,11.475-26.638,26.715-26.638 c15.162,0,27.472,11.476,27.472,26.638C161.626,266.821,149.316,279.13,134.16,279.13z"></path> <path d="M265.515,176.575c-1.682,7.085-2.275,19.503-6.762,25.244c-2.708,3.465-6.773,5.626-11.943,5.626H92.21 c-9.962,0-18.056-8.022-18.056-18.003c0-6.461-18.507-98.199-25.497-132.633c-1.453-7.146-8.551-12.995-15.834-13.061 l-14.711-0.141c-19.786,0-18.075-18.774-18.075-18.774c0.384-6.626,2.642-10.581,5.434-12.911 c5.597-4.668,18.231-3.008,25.347-3.02l12.874-0.024c22.146,0,30.883,12.661,34.317,22.929c2.312,6.917,3.495,18.735,5.05,25.857 l22.104,100.829c1.561,7.122,8.737,12.893,16.021,12.893H222.31c7.29,0,14.412-5.771,15.907-12.91l16.507-78.486 c2.132-9.217,5.566-13.627,9.086-15.501c6.425-3.444,19.882,1.63,22.416,8.455c3.759,10.157-0.595,27.37-0.595,27.37 S272.691,146.484,265.515,176.575z"></path> <path d="M224.382,279.13c-15.18,0-26.649-12.31-26.649-27.544c0-15.162,11.47-26.638,26.649-26.638 c15.162,0,27.525,11.476,27.525,26.638C251.908,266.821,239.544,279.13,224.382,279.13z"></path> <path d="M135.085,153.335c-4.984,0-9.025-4.053-9.025-9.043c0-4.978,4.042-9.031,9.025-9.031c4.996,0,9.031,4.053,9.031,9.031 C144.116,149.283,140.087,153.335,135.085,153.335z"></path> <path d="M171.209,153.335c-4.983,0-9.024-4.053-9.024-9.043c0-4.978,4.041-9.031,9.024-9.031c4.979,0,9.031,4.053,9.031,9.031 C180.241,149.283,176.188,153.335,171.209,153.335z"></path> <path d="M207.323,153.335c-4.99,0-9.031-4.053-9.031-9.043c0-4.978,4.041-9.031,9.031-9.031c4.978,0,9.025,4.053,9.025,9.031 C216.348,149.283,212.3,153.335,207.323,153.335z"></path> <path d="M117.022,117.21c-4.972,0-9.037-4.035-9.037-9.021c0-4.981,4.065-9.035,9.037-9.035c5.008,0,9.043,4.053,9.043,9.035 C126.06,113.175,122.024,117.21,117.022,117.21z"></path> <path d="M153.147,99.161c4.984,0,9.025,4.044,9.025,9.028c0,4.986-4.041,9.028-9.025,9.028c-4.989,0-9.031-4.042-9.031-9.028 C144.116,103.205,148.158,99.161,153.147,99.161z"></path> <path d="M189.266,99.161c4.984,0,9.025,4.044,9.025,9.028c0,4.986-4.041,9.028-9.025,9.028c-4.99,0-9.031-4.042-9.031-9.028 C180.235,103.205,184.276,99.161,189.266,99.161z"></path> <path d="M225.379,99.161c4.983,0,9.024,4.044,9.024,9.028c0,4.986-4.041,9.028-9.024,9.028c-4.99,0-9.031-4.042-9.031-9.028 C216.348,103.205,220.389,99.161,225.379,99.161z"></path> <path d="M207.323,81.104c-4.99,0-9.031-4.053-9.031-9.022c0-4.993,4.041-9.031,9.031-9.031c4.978,0,9.025,4.032,9.025,9.031 C216.348,77.051,212.3,81.104,207.323,81.104z"></path> <path d="M171.209,81.104c-4.983,0-9.024-4.053-9.024-9.022c0-4.993,4.041-9.031,9.024-9.031c4.979,0,9.031,4.032,9.031,9.031 C180.241,77.051,176.188,81.104,171.209,81.104z"></path> <path d="M135.085,81.104c-4.984,0-9.025-4.053-9.025-9.022c0-4.993,4.042-9.031,9.025-9.031c4.996,0,9.031,4.032,9.031,9.031 C144.116,77.051,140.087,81.104,135.085,81.104z"></path> </g> </g></svg>
                </button>
            </div>
        </div>
    </div>
    </nav>