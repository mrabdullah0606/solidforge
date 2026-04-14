<!-- footer -->
<footer class="container-fluid px-0 bg-black py-5" data-aos="zoom-in" data-aos-duration="1500">
        <div class="col-12 col-lg-10 mx-auto border-bottom ">
            <div class="row">
                <div class="col-12 col-lg-4 text-center">
                    <div class="col-10 col-lg-7 mx-auto mx-lg-0">
                        <a class="navbar-brand col-6 col-md-4 col-lg-3 col-xl-2" href="index.html"><img src="images/logo.png" alt="SolidForgeLogo_RGB_Red" class="w-100"></a>
                        <div class="text text-white">
                          <p><span>Address:</span>Solidforge Ltd.</p>
                          <p>12 Avlonas Street</p>
                          <p>Suite 101, Kiti 7550</p>
                          <p>Larnaca, Cyprus.</p>
                      </div>
                    </div>
                </div>
                <div class="col-12 mx-auto text-center col-lg-4">
                    <div class="text">
                      <p><div class="text-white">Phone:</div> <a href="tel:+357 99 341589">+357 99 341589</a></p>
                      <p><div class="text-white">Whatsapp:</div> <a href="tel:+357 99 341589">+357 99 341589</a></p>
                      <p><div class="text-white">Email:</div> <a href="mailto:info@solid-forge.com">info@solid-forge.com</a></p>
                  </div>
                </div>
                <div class="col-12 mx-auto text-center col-lg-4">
                    <div class="text text-white">
                        <p><div>Working Days/Hours:</div><div class="mt-5">Monday-Friday 8:00am-6:00pm</div></p>
                        <p><div></div>Saturday 8:00am-1:00pm</p>
                    </div>
                </div>
               <!--  <div class="col-12 mx-auto text-center col-lg-2">
                    <h4 class="text-white font-1">SolidForge</h4>
                    <p class="mb-1"><a href="#" class="text-decoration-none text-white">About</a></p>
                    <p class="mb-1"><a href="#" class="text-decoration-none text-white">Blog</a></p>
                    <p class="mb-1"><a href="#" class="text-decoration-none text-white">Press</a></p>
                    <p class="mb-1"><a href="#" class="text-decoration-none text-white">Newsletter Signup</a></p>
                    <p class="mb-1"><a href="#" class="text-decoration-none text-white">Careers</a></p>
                </div> -->
            </div>
        </div>
        <div class="col-10 mx-auto pt-4">
            <div class="d-flex">
                <p class="mb-1"><a href="#" class="text-decoration-none text-white">©  2025 SolidForge</a></p>
                <p class="mb-1 mx-4"><a href="privacy.html" class="text-decoration-none text-white">Privacy</a></p>
                <p class="mb-1"><a href="terms.html" class="text-decoration-none text-white">Terms</a></p>
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