
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
    