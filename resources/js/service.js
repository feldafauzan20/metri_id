document.addEventListener("DOMContentLoaded", () => {
    const menuBtn = document.getElementById("menuBtn");
    const menuDropdown = document.getElementById("menuDropdown");
    const mainMenu = document.getElementById("mainMenu");
    const closeMenuBtn = document.getElementById("closeMenuBtn");
    const servicesBtn = document.getElementById("servicesBtn");
    const servicesDropdown = document.getElementById("servicesDropdown");
    const backToMenu = document.getElementById("backToMenu");
    const navbar = document.querySelector("nav"); // Navbar utama

    function openMenu() {
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

        mainMenu.classList.remove("hidden");
        servicesDropdown.classList.add("hidden");

        servicesDropdown.classList.remove("opacity-100", "pointer-events-auto");
        servicesDropdown.classList.add("opacity-0", "pointer-events-none");
    }

    function closeMenu() {
        menuDropdown.classList.add(
            "opacity-0",
            "-translate-y-full",
            "pointer-events-none"
        );
        menuDropdown.classList.remove(
            "opacity-100",
            "translate-y-0",
            "pointer-events-auto"
        );

        mainMenu.classList.remove("hidden");
        servicesDropdown.classList.add("hidden");

        servicesDropdown.classList.remove("opacity-100", "pointer-events-auto");
        servicesDropdown.classList.add("opacity-0", "pointer-events-none");
    }

    function openServices() {
        mainMenu.classList.add("hidden");
        servicesDropdown.classList.remove("hidden");

        setTimeout(() => {
            servicesDropdown.classList.add(
                "opacity-100",
                "pointer-events-auto"
            );
            servicesDropdown.classList.remove(
                "opacity-0",
                "pointer-events-none"
            );
        }, 50);
    }

    function backToMainMenu() {
        servicesDropdown.classList.remove("opacity-100", "pointer-events-auto");
        servicesDropdown.classList.add("opacity-0", "pointer-events-none");

        setTimeout(() => {
            servicesDropdown.classList.add("hidden");
            mainMenu.classList.remove("hidden");
        }, 500);
    }

    function handleScroll() {
        if (window.scrollY > 50) {
            navbar.classList.remove("bg-transparent");
            navbar.classList.add("bg-[#00413D]", "shadow-md");
        } else {
            navbar.classList.remove("bg-[#00413D]", "shadow-md");
        }
    }

    // Event Listeners
    menuBtn.addEventListener("click", openMenu);
    closeMenuBtn.addEventListener("click", closeMenu);
    servicesBtn.addEventListener("click", openServices);
    backToMenu.addEventListener("click", backToMainMenu);
    window.addEventListener("scroll", handleScroll);
});
