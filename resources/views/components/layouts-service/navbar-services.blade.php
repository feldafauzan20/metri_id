<div class="container">
    <header class="flex justify-between items-center">
        <div>
            <a href="#" class="logo">
                <img src="{{ asset('images/logo/logo-putih-baru.webp') }}" alt="" width="150" />
            </a>
        </div>
        <div class="min-h-min flex hover:cursor-pointer">
            <button id="menuBtn" class="flex flex-col gap-1.5">
                <p class="text-xs font-medium text-white md:text-base">III MENU</p>
            </button>
        </div>
        <div class="flex">
            <button
                class="w-full text-xl font-normal text-white bg-transparent rounded-full py-1 px-7 outline-white outline font-ibm outline-2 hover:outline-1 hover:bg-white hover:text-black transition-all duration-300 ease-in-out">
                CONTACT US
            </button>
        </div>
    </header>
</div>

<!-- Menu Dropdown -->
<div id="menuDropdown"
    class="fixed inset-0 z-40 bg-[#00413D] opacity-0 -translate-y-full transition-all duration-500 ease-in-out pointer-events-none">

    <div class="relative w-full h-max z-50 flex items-center justify-between px-6">
        <!-- Logo di kiri -->
        <a href="#" class="w-32">
            <img src="{{ asset('images/logo/logo-putih-baru.webp') }}" alt="Logo" class="w-full">
        </a>

        <!-- Tombol Close di tengah -->
        <button id="closeMenuBtn"
            class="w-12 h-12 flex items-center justify-center text-white border-2 border-white rounded-full transition-all duration-300 ease-in-out hover:text-black hover:border-white hover:bg-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <!-- Contact Us di kanan -->
        <button
            class="text-white border-2 border-white px-6 py-2 rounded-full transition-all duration-300 ease-in-out hover:bg-white hover:text-black">
            CONTACT US
        </button>
    </div>

    <!-- Radial Gradient -->
    <div
        class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[120%] h-[120%] 
bg-[radial-gradient(circle,_rgba(255,255,255,0.3)_0%,_rgba(255,255,255,0.1)_40%,_transparent_70%)] 
opacity-30 blur-3xl z-0">
    </div>

    <!-- Menu -->
    <div class="flex flex-col items-center justify-center h-5/6 relative z-10">
        <div class="flex flex-col gap-y-1 text-center">
            <a href="/" class="text-white hover:text-orange-200 font-bold text-8xl">HOME</a>
            <a href="#" class="text-white hover:text-orange-200 font-bold text-8xl">ABOUT
                US</a>
            <a href="#" class="text-white hover:text-orange-200 font-bold text-8xl">OUR
                SERVICES</a>
            <a href="#" class="text-white hover:text-orange-200 font-bold text-8xl">CONTACT</a>
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
