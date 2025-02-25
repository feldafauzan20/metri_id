document.addEventListener("DOMContentLoaded", () => {
    const menuBtn = document.getElementById("menuBtn");
    const menuDropdown = document.getElementById("menuDropdown");
    const closeMenuBtn = document.getElementById("closeMenuBtn");
    const servicesBtn = document.getElementById("servicesBtn");
    const servicesDropdown = document.getElementById("servicesDropdown");
    const mainMenu = document.getElementById("mainMenu");

    function toggleMenu() {
        const isHidden = menuDropdown.classList.contains("opacity-0");

        if (isHidden) {
            menuDropdown.classList.remove(
                "opacity-0",
                "-translate-y-full",
                "pointer-events-none"
            );
            menuDropdown.classList.add(
                "opacity-100",
                "translate-y-0",
                "pointer-events-auto"
            );
        } else {
            menuDropdown.classList.remove(
                "opacity-100",
                "translate-y-0",
                "pointer-events-auto"
            );
            menuDropdown.classList.add(
                "opacity-0",
                "-translate-y-full",
                "pointer-events-none"
            );

            // Reset submenu saat menu utama ditutup
            hideServicesDropdown();
        }
    }

    function toggleServices() {
        const isHidden = servicesDropdown.classList.contains("opacity-0");

        if (isHidden) {
            // Geser menu utama ke kiri
            mainMenu.classList.remove("-translate-x-1/2");
            mainMenu.classList.add("-translate-x-[85%]");

            // Munculkan submenu services
            servicesDropdown.classList.remove(
                "translate-x-full",
                "opacity-0",
                "pointer-events-none"
            );
            servicesDropdown.classList.add(
                "translate-x-[-3%]",
                "opacity-100",
                "pointer-events-auto"
            );
        } else {
            hideServicesDropdown();
        }
    }

    function hideServicesDropdown() {
        // Kembalikan menu utama ke tengah
        mainMenu.classList.remove("-translate-x-[85%]");
        mainMenu.classList.add("-translate-x-1/2");

        // Sembunyikan submenu services & matikan interaksi
        servicesDropdown.classList.remove(
            "translate-x-[-3%]",
            "opacity-100",
            "pointer-events-auto"
        );
        servicesDropdown.classList.add(
            "translate-x-full",
            "opacity-0",
            "pointer-events-none"
        );
    }

    menuBtn.addEventListener("click", toggleMenu);
    closeMenuBtn.addEventListener("click", toggleMenu);
    servicesBtn.addEventListener("click", toggleServices);
});
