document.addEventListener("DOMContentLoaded", () => {
    const menuBtn = document.getElementById("menuBtn");
    const menuDropdown = document.getElementById("menuDropdown");
    const closeMenuBtn = document.getElementById("closeMenuBtn");

    function toggleMenu() {
        const isHidden = menuDropdown.classList.contains("opacity-0");

        if (isHidden) {
            // Tampilkan menu dengan animasi
            menuDropdown.classList.remove(
                "opacity-0",
                "-translate-y-full",
                "pointer-events-none"
            );
            menuDropdown.classList.add("opacity-100", "translate-y-0");
        } else {
            // Sembunyikan menu dengan animasi
            menuDropdown.classList.remove("opacity-100", "translate-y-0");
            menuDropdown.classList.add(
                "opacity-0",
                "-translate-y-full",
                "pointer-events-none"
            );
        }
    }

    menuBtn.addEventListener("click", toggleMenu);
    closeMenuBtn.addEventListener("click", toggleMenu);
});
