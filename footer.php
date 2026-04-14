<!-- footer -->
<style>
    .bg-grey{background-color: #3b3b3b !important;}
    .text-warning{
        color: #f7df50 !important;
    }
    .ms-6{margin-left: 4rem; text-align: left;}
    .ms-7{margin-left: 8rem; text-align: left;}
 </style>
<footer class="container-fluid px-0 bg-grey py-5" data-aos="zoom-in" data-aos-duration="1500">
    <div class="col-12 col-lg-10 mx-auto border-bottom">
        <div class="row">
            <div class="col-12 col-lg-4 text-center">
                <div class="col-10 col-lg-7 mx-auto mx-lg-0">
                    <a class="navbar-brand col-6 col-md-4 col-lg-3 col-xl-2" href="index.php">
                        <img src="images/logo.png" alt="SolidForgeLogo_RGB_Red" class="w-100">
                    </a>
                    <div class="text text-warning d-flex flex-column text-left ms-6">
                        <a href="about.php" class="text-warning fw-medium my-lg-1">Company About</a>
                        <a href="contact.php#contact-footer" class="text-warning fw-medium my-lg-1">Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="col-12 mx-auto text-center col-lg-4">
                <div class="text mt-4 ms-7">
                    <p class="text-warning">Products</p>
                    <p class="text-warning">3D Printers</p>
                    <p class="text-warning">Polishing Systems</p>
                    <p class="text-warning">Design Software</p>
                </div>
            </div>
            <div class="col-12 mx-auto text-center col-lg-4">
                <div class="text text-warning mt-4">
                    <p class="fw-medium">Community:</p> 
                    <div class="d-flex justify-content-center gap-3">
                        <a href="https://www.facebook.com" target="_blank">
                            <img src="images/facebook.png" alt="Facebook" width="30">
                        </a>
                        <a href="https://www.twitter.com" target="_blank">
                            <img src="images/twitter.png" alt="Twitter" width="30">
                        </a>
                        <a href="https://www.instagram.com" target="_blank">
                            <img src="images/instagram.png" alt="Instagram" width="30">
                        </a>
                        <a href="https://www.linkedin.com" target="_blank">
                            <img src="images/linkedin.png" alt="LinkedIn" width="30">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-10 mx-auto pt-4">
        <div class="d-flex">
            <p class="mb-1"><a href="#" class="text-decoration-none text-warning">© 2025 SolidForge</a></p>
            <p class="mb-1 mx-4"><a href="privacy.php" class="text-decoration-none text-warning">Privacy</a></p>
            <p class="mb-1"><a href="terms.php" class="text-decoration-none text-warning">Terms</a></p>
        </div>
    </div>
</footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <!-- AOS JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init();
         document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll(".submenu-toggle").forEach(function (submenu) {
            submenu.addEventListener("click", function (e) {
                e.preventDefault(); // Prevent link navigation
                
                let submenuDropdown = this.nextElementSibling;

                // Close all other submenus
                document.querySelectorAll(".dropdown-submenu .dropdown-menu").forEach(function (menu) {
                    if (menu !== submenuDropdown) {
                        menu.style.display = "none";
                    }
                });

                // Toggle visibility of the clicked submenu
                submenuDropdown.style.display = (submenuDropdown.style.display === "block") ? "none" : "block";

                // Stop event from closing the main menu
                e.stopPropagation();
            });
        });

        // Close submenu when clicking outside
        document.addEventListener("click", function (e) {
            if (!e.target.closest(".dropdown-submenu")) {
                document.querySelectorAll(".dropdown-submenu .dropdown-menu").forEach(function (menu) {
                    menu.style.display = "none";
                });
            }
        });
    });

    AOS.init();

    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>