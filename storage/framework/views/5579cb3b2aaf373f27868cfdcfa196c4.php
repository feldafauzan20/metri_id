<nav class="fixed top-0 left-0 w-full bg-[#00413D] z-50">

    <div class="container">
        <header class="flex justify-between items-center px-4 sm:px-6 py-3 sm:py-4">
            <!-- Logo -->
            <a href="#" class="logo">
                <img src="<?php echo e(asset('images/logo/logo-putih-baru.webp')); ?>" alt="Logo" class="w-24 sm:w-32 md:w-40">
            </a>

            <!-- Menu Button -->
            <div class="flex hover:cursor-pointer">
                <button id="menuBtn" class="flex flex-col gap-1.5">
                    <p class="text-xs sm:text-sm md:text-base font-medium text-white">III MENU</p>
                </button>
            </div>

            <!-- Contact Us Button -->
            <a href="/contact"
                class="text-sm sm:text-lg md:text-xl font-normal text-white bg-transparent rounded-full py-1 px-5 sm:px-7 border border-white outline-none hover:bg-white hover:text-black transition-all duration-300">
                CONTACT US
            </a>
        </header>
    </div>

    <!-- Menu Dropdown -->
    <div id="menuDropdown"
        class="fixed inset-0 z-40 bg-[#00413D] opacity-0 -translate-y-full transition-all duration-500 ease-in-out pointer-events-none flex flex-col items-center justify-center
        bg-[radial-gradient(circle,_rgba(255,255,255,0.2)_0%,_rgba(0,65,61,1)_70%)]">

        <!-- Header dalam Menu -->
        <div class="absolute top-0 left-0 w-full flex justify-between items-center px-4 sm:px-6 py-3 sm:py-4 z-50">
            <!-- Logo -->
            <a href="#" class="w-24 sm:w-32">
                <img src="<?php echo e(asset('images/logo/logo-putih-baru.webp')); ?>" alt="Logo" class="w-full">
            </a>

            <!-- Tombol Close -->
            <button id="closeMenuBtn"
                class="w-10 h-10 sm:w-12 sm:h-12 flex items-center justify-center text-white border-2 border-white rounded-full transition-all duration-300 hover:bg-white hover:text-black">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 sm:w-6 sm:h-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <!-- Contact Us di kanan -->
            <a href="/contact"
                class="text-white border-2 border-white px-4 sm:px-6 py-1 sm:py-2 rounded-full transition-all duration-300 hover:bg-white hover:text-black">
                CONTACT US
            </a>
        </div>

        <!-- Wrapper Menu -->
        <div class="relative w-full h-full flex items-center overflow-hidden">
            <!-- Menu utama -->
            <div id="mainMenu"
                class="absolute flex flex-col justify-center items-center w-full h-full transition-all duration-500 ease-in-out text-center gap-4 sm:gap-6">

                <a href="/"
                    class="text-white hover:text-orange-200 font-bold text-4xl sm:text-5xl md:text-8xl">HOME</a>
                <a href="#"
                    class="text-white hover:text-orange-200 font-bold text-4xl sm:text-5xl md:text-8xl">ABOUT
                    US</a>
                <button id="servicesBtn"
                    class="text-white hover:text-orange-200 font-bold text-4xl sm:text-5xl md:text-8xl focus:outline-none">
                    OUR SERVICES
                </button>
                <a href="#"
                    class="text-white hover:text-orange-200 font-bold text-4xl sm:text-5xl md:text-8xl">CONTACT</a>
            </div>

            <div id="servicesDropdown"
                class="absolute top-0 left-0 w-full h-full flex flex-col justify-center items-center bg-gradient-to-r from-[#00332E] to-[#00413D] opacity-0 pointer-events-none transition-all duration-500 ease-in-out z-50">

                <div
                    class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-x-8 gap-y-4 sm:gap-y-6 text-center text-white text-base sm:text-lg md:text-2xl font-light">
                    <a href="/metri-entertainment" class="hover:text-orange-200 transition">metri entertainment</a>
                    <a href="/metri-film" class="hover:text-orange-200 transition">metri film</a>
                    <a href="/metri-post" class="hover:text-orange-200 transition">metri post</a>
                    <a href="/metri-tang-ting" class="hover:text-orange-200 transition">tang ting</a>
                    <a href="/metri-event" class="hover:text-orange-200 transition">metri event</a>
                    <a href="/metri-digital" class="hover:text-orange-200 transition">metri digital</a>
                    <a href="/metri-design" class="hover:text-orange-200 transition">metri design</a>
                </div>

                <!-- Tombol Back to Menu -->
                <div class="mt-8 flex flex-col items-center">
                    <button id="backToMenu"
                        class="flex flex-col items-center text-white text-sm sm:text-base hover:text-orange-200 transition">
                        <span>BACK TO MENU</span>
                        <span
                            class="mt-2 w-8 h-8 sm:w-10 sm:h-10 flex items-center justify-center border border-white rounded-full">
                            ←
                        </span>
                    </button>
                </div>

                <!-- Footer -->
                <div class="absolute bottom-6 w-full text-center text-white text-xs sm:text-sm font-light">
                    <p>©2025 METRI DESIGN</p>
                    <div class="mt-2 flex justify-center space-x-4">
                        <a href="#" class="hover:text-orange-200 transition">INSTAGRAM ↗</a>
                        <a href="#" class="hover:text-orange-200 transition">LINKEDIN ↗</a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Footer Menu Dropdown -->
        <div class="absolute bottom-6 w-full px-4 sm:px-6 flex justify-between text-white text-xs sm:text-sm">
            <p>&copy;2025 METRI DESIGN</p>
            <div class="flex gap-3 sm:gap-4">
                <a href="#" class="hover:text-gray-300">INSTAGRAM</a>
                <a href="#" class="hover:text-gray-300">LINKEDIN</a>
                <a href="#" class="hover:text-gray-300">X</a>
            </div>
        </div>
    </div>
</nav>
<?php /**PATH E:\laragon\www\metri_id\resources\views/components/layouts-service/navbar-services.blade.php ENDPATH**/ ?>