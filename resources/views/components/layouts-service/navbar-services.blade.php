<div class="container">
    <header class="flex justify-between items-center px-6 py-4">
        <!-- Logo -->
        <a href="#" class="logo">
            <img src="{{ asset('images/logo/logo-putih-baru.webp') }}" alt="Logo" width="150">
        </a>

        <!-- Menu Button -->
        <div class="min-h-min flex hover:cursor-pointer">
            <button id="menuBtn" class="flex flex-col gap-1.5">
                <p class="text-xs font-medium text-white md:text-base">III MENU</p>
            </button>
        </div>

        <!-- Contact Us Button -->
        <button
            class="text-xl font-normal text-white bg-transparent rounded-full py-1 px-7 outline-white outline font-ibm outline-2 hover:outline-1 hover:bg-white hover:text-black transition-all duration-300 ease-in-out">
            CONTACT US
        </button>
    </header>
</div>

<!-- Menu Dropdown -->
<div id="menuDropdown"
    class="fixed inset-0 z-40 bg-[#00413D] opacity-0 -translate-y-full transition-all duration-500 ease-in-out pointer-events-none flex flex-col items-center justify-center
    bg-[radial-gradient(circle,_rgba(255,255,255,0.2)_0%,_rgba(0,65,61,1)_70%)]">

    <!-- Header dalam Menu -->
    <div class="absolute top-0 left-0 w-full flex justify-between items-center px-6 py-4 z-50">
        <!-- Logo -->
        <a href="#" class="w-32">
            <img src="{{ asset('images/logo/logo-putih-baru.webp') }}" alt="Logo" class="w-full">
        </a>

        <!-- Tombol Close -->
        <button id="closeMenuBtn"
            class="w-12 h-12 flex items-center justify-center text-white border-2 border-white rounded-full transition-all duration-300 ease-in-out hover:text-black hover:border-white hover:bg-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <!-- Contact Us di kanan -->
        <a href=""
            class="text-white border-2 border-white px-6 py-2 rounded-full transition-all duration-300 ease-in-out hover:bg-white hover:text-black">
            CONTACT US
        </a>
    </div>

    <!-- Wrapper Menu -->
    <div class="relative w-full h-full flex items-center overflow-hidden">
        <!-- Menu utama -->
        <div id="mainMenu"
            class="absolute justify-center flex flex-col w-full h-full transition-all duration-500 ease-in-out transform translate-x-0 text-center">

            <a href="/" class="text-white hover:text-orange-200 font-bold text-6xl md:text-8xl">HOME</a>
            <a href="#" class="text-white hover:text-orange-200 font-bold text-6xl md:text-8xl">ABOUT US</a>
            <button id="servicesBtn"
                class="text-white hover:text-orange-200 font-bold text-6xl md:text-8xl focus:outline-none">
                OUR SERVICES
            </button>
            <a href="#" class="text-white hover:text-orange-200 font-bold text-6xl md:text-8xl">CONTACT</a>
        </div>

        <!-- Sub-menu services -->
        <div id="servicesDropdown"
            class="absolute flex flex-col justify-center right-0 translate-x-full opacity-0 transition-all duration-500 ease-in-out w-2/5">
            <a href="#" class="text-white hover:text-orange-200 font-bold text-3xl md:text-5xl">metri
                entertainment</a>
            <a href="#" class="text-white hover:text-orange-200 font-bold text-3xl md:text-5xl">metri film</a>
            <a href="#" class="text-white hover:text-orange-200 font-bold text-3xl md:text-5xl">metri post</a>
            <a href="#" class="text-white hover:text-orange-200 font-bold text-3xl md:text-5xl">tang ting</a>
            <a href="#" class="text-white hover:text-orange-200 font-bold text-3xl md:text-5xl">metri event</a>
            <a href="#" class="text-white hover:text-orange-200 font-bold text-3xl md:text-5xl">metri digital</a>
            <a href="#" class="text-white hover:text-orange-200 font-bold text-3xl md:text-5xl">metri design</a>
        </div>
    </div>

    <!-- Footer Menu Dropdown -->
    <div class="absolute bottom-6 w-full px-6 flex justify-between text-white text-sm">
        <p>&copy;2025 METRI DESIGN</p>
        <div class="flex gap-4">
            <a href="#" class="hover:text-gray-300">INSTAGRAM</a>
            <a href="#" class="hover:text-gray-300">LINKEDIN</a>
            <a href="#" class="hover:text-gray-300">X</a>
        </div>
    </div>
</div>
