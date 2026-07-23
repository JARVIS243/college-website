
// ======================================================
// COLLEGE WEBSITE - MAIN.JS
// ======================================================


// ======================================================
// 1. MOBILE NAVBAR DROPDOWN & SUBMENU SUPPORT
// ======================================================

document.addEventListener("DOMContentLoaded", function () {

    // Run only on Mobile & Tablet

    if (window.innerWidth < 1200) {

        // --------------------------------------------------
        // SUBMENU TOGGLE
        // --------------------------------------------------

        document.querySelectorAll(".submenu-toggle").forEach(function (element) {

            element.addEventListener("click", function (e) {

                e.preventDefault();
                e.stopPropagation();

                let submenu = this.nextElementSibling;

                if (submenu) {

                    // Close other opened submenus

                    document.querySelectorAll(".submenu").forEach(function (menu) {

                        if (menu !== submenu) {
                            menu.classList.remove("show");
                        }

                    });

                    // Open / Close current submenu

                    submenu.classList.toggle("show");
                }

            });

        });


        // --------------------------------------------------
        // MAIN DROPDOWN TOGGLE
        // --------------------------------------------------

        document.querySelectorAll(".dropdown-toggle").forEach(function (dropdown) {

            dropdown.addEventListener("click", function (e) {

                e.preventDefault();
                e.stopPropagation();

                let parent = this.parentElement;
                let menu = parent.querySelector(".dropdown-menu");

                if (menu) {

                    menu.classList.toggle("show");

                }

            });

        });

    }

});


// ======================================================
// 2. SMOOTH SCROLL
// ======================================================

document.addEventListener("DOMContentLoaded", function () {

    document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {

        anchor.addEventListener("click", function (e) {

            // Ignore Bootstrap collapse and modal links
            if (
                this.hasAttribute("data-bs-toggle") ||
                this.classList.contains("news-toggle") ||
                this.classList.contains("portal-btn")
            ) {
                return;
            }

            const target = this.getAttribute("href");

            if (target && target !== "#") {

                const element = document.querySelector(target);

                if (element) {

                    e.preventDefault();

                    element.scrollIntoView({
                        behavior: "smooth",
                        block: "start"
                    });

                }

            }

        });

    });

});


// ======================================================
// 3. CLOSE MENUS WHEN CLICKING OUTSIDE
// ======================================================

document.addEventListener("click", function (e) {

    // If click is outside any dropdown

    if (!e.target.closest(".dropdown")) {

        // Close all dropdown menus

        document.querySelectorAll(".dropdown-menu").forEach(function (menu) {

            menu.classList.remove("show");

        });

        // Close all submenus

        document.querySelectorAll(".submenu").forEach(function (submenu) {

            submenu.classList.remove("show");

        });

    }

});


// ======================================================
// END OF FILE
// ======================================================
