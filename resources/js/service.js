document.addEventListener("DOMContentLoaded", () => {
    const menuBtn = document.getElementById("menuBtn");
    const menuDropdown = document.getElementById("menuDropdown");
    const mainMenu = document.getElementById("mainMenu");
    const closeMenuBtn = document.getElementById("closeMenuBtn");
    const servicesBtn = document.getElementById("servicesBtn");
    const servicesDropdown = document.getElementById("servicesDropdown");
    const backToMenu = document.getElementById("backToMenu");

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

        // Pastikan menu utama terlihat dan submenu tersembunyi saat pertama kali dibuka
        mainMenu.classList.remove("hidden");
        servicesDropdown.classList.add("hidden");

        // Pastikan submenu juga dalam keadaan opacity 0 ketika baru membuka menu utama
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

        // Reset semua submenu saat menu utama ditutup
        mainMenu.classList.remove("hidden");
        servicesDropdown.classList.add("hidden");

        // Pastikan submenu juga dalam keadaan opacity 0 saat menu utama ditutup
        servicesDropdown.classList.remove("opacity-100", "pointer-events-auto");
        servicesDropdown.classList.add("opacity-0", "pointer-events-none");
    }

    function openServices() {
        mainMenu.classList.add("hidden"); // Sembunyikan menu utama
        servicesDropdown.classList.remove("hidden"); // Tampilkan submenu

        // Gunakan opacity agar transisi lebih smooth
        setTimeout(() => {
            servicesDropdown.classList.add(
                "opacity-100",
                "pointer-events-auto"
            );
            servicesDropdown.classList.remove(
                "opacity-0",
                "pointer-events-none"
            );
        }, 50); // Delay kecil untuk menghindari animasi yang tidak smooth
    }

    function backToMainMenu() {
        servicesDropdown.classList.remove("opacity-100", "pointer-events-auto");
        servicesDropdown.classList.add("opacity-0", "pointer-events-none");

        setTimeout(() => {
            servicesDropdown.classList.add("hidden");
            mainMenu.classList.remove("hidden");
        }, 500); // Delay ini harus sesuai dengan transition CSS (500ms)
    }

    // Event Listeners
    menuBtn.addEventListener("click", openMenu);
    closeMenuBtn.addEventListener("click", closeMenu);
    servicesBtn.addEventListener("click", openServices);
    backToMenu.addEventListener("click", backToMainMenu);
});
