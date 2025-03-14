<!-- Google Analytics 4 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXX"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-XXXXXX');
</script>

<x-layouts.layout>
    <x-slot:title>
        metri | Home
    </x-slot:title>

    <x-slot:meta>
        <meta name="description"
            content="Transform your brand with metri's 360 creative services including entertainment, design, digital, film, media post, and event management. PT. MEDIA TREN IDEA.">
        <meta name="keywords"
            content="metri, creative agency, design services, digital marketing, film production, post-production, event management, creative services, PT. MEDIA TREN IDEA">
        <meta name="author" content="PT. MEDIA TREN IDEA">
        <meta property="og:title" content="metri | 360 Creative Services for Your Business">
        <meta property="og:description"
            content="Craft, build, grow, and develop your brand with our comprehensive 360 creative services.">
        <meta property="og:image" content="{{ asset('images/logo/logo-putih-baru.webp') }}">
        <meta property="og:url" content="{{ url('/') }}">
        <meta property="og:type" content="website">
        <meta name="twitter:card" content="summary_large_image">
        <link rel="canonical" href="{{ url('/') }}">
    </x-slot:meta>

    <x-slot:vite>
        @vite(['resources/js/main.js', 'resources/css/app.css'])
    </x-slot:vite>

    <main class="h-full min-h-screen overflow-x-hidden">
        <header class="absolute top-0 left-0 w-full px-6 md:px-10 pt-4 flex justify-between items-center z-[100]">
            <!-- Logo -->
            <div>
                <a wire:navigate href="/" target="_self" class="logo" aria-label="metri.id homepage">
                    <img src="{{ asset('images/logo/logo-putih-baru.webp') }}" alt="metri.id - PT. MEDIA TREN IDEA Logo"
                        loading="lazy" class="w-[150px] lg:w-[300px]" width="300" height="auto" />
                </a>
            </div>

            <!-- Hamburger Button -->
            <button id="hamburger" type="button" class="lg:hidden relative z-50" aria-label="Menu"
                aria-expanded="false" aria-controls="nav-menu">
                <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                <span class="hamburger-line transition duration-300 ease-in-out"></span>
                <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
            </button>

            <!-- Navbar -->
            <nav id="nav-menu" aria-label="Main navigation"
                class="hidden absolute lg:relative top-full left-0 w-full lg:flex lg:justify-center  rounded-lg py-5 text-white lg:bg-transparent lg:shadow-none lg:w-full lg:rounded-none px-4 lg:px-0">
                <ul
                    class="block lg:flex lg:space-x-6 lg:max-w-4xl lg:w-full lg:justify-center lg:text-black bg-[#359381] bg-opacity-50 backdrop-blur-md shadow-lg lg:bg-transparent rounded-lg lg:rounded-none lg:backdrop-blur-none lg:shadow-none">
                    <p class="text-center py-2 tracking-wider text-white md:text-base font-ibm lg:hidden">PT. MEDIA TREN
                        IDEA</p>
                    <hr class="mx-4">
                    <li class="group">
                        <a wire:navigate href="/about" target="_self" title="About metri"
                            class="block px-4 py-2 hover:bg-[#359381] lg:hover:bg-[#359381] lg:hover:text-white lg:rounded-lg">ABOUT</a>
                    </li>

                    <!-- Our Services -->
                    <li class="relative group">
                        <button id="our-services-btn" aria-haspopup="true" aria-expanded="false"
                            class="flex items-center justify-start gap-2 w-full lg:w-auto px-4 py-2 hover:backdrop-blur-lg lg:hover:backdrop-blur-none">
                            OUR SERVICES
                            <svg class="w-4 h-4 transition-transform lg:group-hover:rotate-180" id="dropdownSimbol"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <!-- List of Services -->
                        <ul id="services-menu" aria-label="Services submenu"
                            class="hidden lg:absolute mx-2 py-2 my-2 lg:my-0 rounded-lg lg:left-0 bg-[#359381] lg:top-full lg:bg-[#359381] lg:bg-opacity-50  lg:backdrop-blur-md lg:shadow-lg lg:rounded-lg lg:w-48 space-y-2 text-white
                            lg:group-hover:block">

                            <li><a wire:navigate href="/metri-entertainment" target="_self"
                                    title="metri entertainment services"
                                    class="block px-4 py-1 hover:bg-white hover:text-[#359381]">metri
                                    entertainment</a></li>
                            <li><a wire:navigate href="/metri-design" target="_self" title="metri design services"
                                    class="block px-4 py-1 hover:bg-white hover:text-[#359381]">metri
                                    design</a></li>
                            <li><a wire:navigate href="/metri-digital" target="_self" title="metri digital services"
                                    class="block px-4 py-1 hover:bg-white hover:text-[#359381]">metri
                                    digital</a></li>
                            <li><a wire:navigate href="/metri-film" target="_self" title="metri film services"
                                    class="block px-4 py-1 hover:bg-white hover:text-[#359381]">metri
                                    film</a></li>
                            <li><a wire:navigate href="/metri-post" target="_self"
                                    title="metri media post services"
                                    class="block px-4 py-1 hover:bg-white hover:text-[#359381]">metri
                                    post</a></li>
                            <li><a wire:navigate href="/metri-tang-ting" target="_self" title="tang ting services"
                                    class="block px-4 py-1 hover:bg-white hover:text-[#359381]">tang
                                    ting</a></li>
                            <li><a wire:navigate href="/metri-event" target="_self" title="metri event services"
                                    class="block px-4 py-1 hover:bg-white hover:text-[#359381]">metri
                                    event</a></li>
                        </ul>
                    </li>

                    <li class="group"><a wire:navigate href="#partners" title="View our partners"
                            class="block px-4 py-2 hover:bg-[#359381] lg:hover:bg-[#359381] lg:rounded-lg lg:hover:text-white">OUR
                            PARTNERS</a>
                    </li>
                    <li class="group"><a wire:navigate href="#contact" title="Contact us"
                            class="block px-4 py-2 hover:bg-[#359381] lg:hover:bg-[#359381] lg:rounded-lg lg:hover:text-white">CONTACT</a>
                    </li>
                    <li class="group"><a wire:navigate href="/gallery" target="_self" title="View our gallery"
                            class="block px-4 py-2 hover:bg-[#359381] lg:hover:bg-[#359381] rounded-b-lg lg:rounded-lg lg:hover:text-white">GALLERY</a>
                    </li>
                </ul>
            </nav>

            <!-- Nama Perusahaan -->
            <div class="hidden lg:block text-center lg:w-1/5 lg:ml-auto lg:items-center lg:justify-end">
                <h1 class="tracking-wider text-black md:text-base text-xs font-ibm">PT. MEDIA TREN IDEA</h1>
            </div>

        </header>

        <section
            class="relative flex items-center justify-center min-h-screen overflow-hidden bg-hero parallax-container will-change-transform">
            <img src="{{ asset('images/sun.webp') }}" alt="Sun in metri landscape" id="sun"
                class="img-parallax" loading="eager" width="700" height="700" />
            <img src="{{ asset('images/bg-showcase.webp') }}" alt="metri background showcase" id=""
                class="img-parallax h-[105%]" loading="eager" width="1920" height="1080" />
            <img src="{{ asset('images/bird2.webp') }}" alt="Flying bird" id="bird2" class="img-parallax"
                loading="eager" width="100" height="50" />
            <img src="{{ asset('images/bird1.webp') }}" alt="Flying bird" id="bird1" class="img-parallax"
                loading="eager" width="100" height="50" />
            <img src="{{ asset('images/plant2.webp') }}" alt="Plant decoration" id="plant2" class="img-parallax"
                loading="eager" width="300" height="500" />
            <img src="{{ asset('images/tree4.webp') }}" alt="Tree decoration" id="tree" class="img-parallax"
                loading="eager" width="400" height="600" />
            <img src="{{ asset('images/plant1.webp') }}" alt="Plant decoration" id="plant1" class="img-parallax"
                loading="eager" width="300" height="500" />
            <div class="absolute flex flex-col items-center bottom-10 left-1/2 -translate-x-1/2" id="scroll">
                <p class="pb-2 font-medium tracking-wide text-white text-xs font-ibm animate-bounce">SCROLL</p>
                <div class="relative flex items-start justify-center w-8 h-12 border-2 border-white rounded-full">
                    <div class="w-1 h-5 bg-white rounded-full"></div>
                </div>
            </div>
        </section>


        <section class="relative bg-[#124F45] lg:bg-transparent w-full h-screen -mt-10 overflow-hidden mysteps"
            id="services" aria-label="Our Services">
            <div class="step-counter w-full relative flex px-8 flex-row my-8  justify-between items-center">
                <div class="counter-title relative h-full overflow-hidden w-full flex flex-col items-center">
                    <h2
                        class="w-max relative text-white font-jakarta font-normal text-xl will-change-transform text-center rounded-3xl outline outline-2 outline-[#E1E1E1] p-2 mt-2">
                        Our Services
                    </h2>
                    <div class=" md:w-3/4">
                        <p class="pt-8 md:pt-4 lg:text-3xl md:text-2xl font-medium text-center text-white">
                            Craft, build, grow, and develop your brand and business with our 360 services.
                        </p>
                    </div>

                </div>
            </div>

            <!-- Tambah margin top agar kartu tidak bertumpuk dengan teks -->
            <div
                class="cards absolute top-[25%] md:top-[10%] left-1/2 -translate-x-1/2 -translate-y-1/2 w-[90vw] md:w-[150vw] h-fit will-change-transform mt-[300px] md:mt-[400px]">
                @foreach ([['link' => '/metri-entertainment', 'image' => 'service1.webp', 'alt' => 'metri entertainment services', 'title' => 'Entertainment Services'], ['link' => '/metri-design', 'image' => 'service2.webp', 'alt' => 'metri design services', 'title' => 'Design Services'], ['link' => '/metri-digital', 'image' => 'service3.webp', 'alt' => 'metri digital services', 'title' => 'Digital Services'], ['link' => '/metri-film', 'image' => 'service4.webp', 'alt' => 'metri film services', 'title' => 'Film Services'], ['link' => '/metri-post', 'image' => 'service5.webp', 'alt' => 'metri media post services', 'title' => 'Media Post Services'], ['link' => '/metri-tang-ting', 'image' => 'service6.webp', 'alt' => 'metri tang ting services', 'title' => 'Tang Ting Services'], ['link' => '/metri-event', 'image' => 'service7.webp', 'alt' => 'metri event services', 'title' => 'Event Services']] as $service)
                    <a wire:navigate href="{{ $service['link'] }}" target="_self" title="{{ $service['title'] }}">
                        <div
                            class="card absolute w-[80vw] sm:w-[300px] md:w-[400px] lg:w-[500px] h-[450px] md:h-[550px] left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 origin-center flex flex-col gap-4 will-change-transform">
                            <div class="flex-1 overflow-hidden rounded-md card-img h-[50vh] md:h-[60vh]">
                                <img src="{{ asset('images/' . $service['image']) }}" loading="lazy"
                                    alt="{{ $service['alt'] }}" class="object-contain w-full h-full img-card"
                                    width="500" height="500" />
                            </div>
                            <div class="card-content w-full h-[60px]">
                                <p
                                    class="text-left text-white font-jakarta text-[14px] sm:text-[16px] font-medium leading-tight hidden">
                                    {{ $service['title'] }}
                                </p>
                            </div>
                        </div>
                    </a>
                @endforeach

                <div
                    class="opacity-0 card empty absolute w-[500px] h-[550px] left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 origin-center flex flex-col gap-4 will-change-transform">
                </div>
                <div class="opacity-0 card empty"></div>
            </div>
        </section>

        <div id="overlay"
            class="fixed top-0 left-0 w-full h-full bg-[#124F45] lg:bg-[#00413D] opacity-0 pointer-events-none z-50">
        </div>

        <section
            class="items-center bg-[#124F45] lg:bg-transparent justify-center w-full pb-28 customer-support h-[450px] md:h-[600px]"
            aria-label="Customer Support">
            <div class="container flex flex-col items-center justify-center  w-full pt-4 h-full overflow-hidden">
                <div class="flex flex-col items-center w-full h-fit rounded-2xl py-20">
                    <p
                        class="text-white max-w-lg w-fit font-jakarta font-normal text-xl md:text-2xl text-center rounded-3xl outline outline-2 outline-[#E1E1E1] p-2 mt-2">
                        Customer Support
                    </p>
                    <h2
                        class="pt-8 lg:text-4xl md:text-2xl text-center lg:font-semibold font-extralight text-lg text-white block md:w-3/4 w-3/4">
                        Contact us at
                        <a wire:navigate href="mailto:hello@metri.id" title="Email metri">hello@metri.id</a>
                        for
                        any inquiry
                        regarding our 360 services.
                    </h2>
                </div>

            </div>
        </section>

        {{-- Video start --}}
        <section class="w-full" id="video">
            @if (!empty($youtube_links) || !empty($videos))
                @foreach ($youtube_links as $link)
                    <iframe class="w-full h-[500px] pb-10 object-contain" src="{{ $link }}" frameborder="0"
                        allowfullscreen></iframe>
                @endforeach

                @foreach ($videos as $vid)
                    <video class="object-cover w-full h-full" autoplay loop playsinline muted>
                        <source src="{{ asset('storage/' . $vid) }}" type="video/mp4">
                    </video>
                @endforeach
            @else
                <p class="text-center text-gray-400">No video available.</p>
            @endif
        </section>
        {{-- Video end --}}

        <div class="flex flex-row items-center w-full bg-[#056251] overflow-hidden" id="partners"
            aria-label="Our Partners">
            <p class="px-4 md:px-10 text-base md:text-lg font-thin text-white whitespace-nowrap">
                Our Partners
            </p>
            <div class="w-auto overflow-hidden fade bg-white rounded-lg">
                <div class="flex flex-row items-center animate-scroll w-max gap-4 md:gap-6 py-2 md:py-3">
                    <!-- 12 gambar unik -->
                    <img src="{{ asset('images/partners/partner1.webp') }}"
                        class="w-32 h-16 md:w-52 md:h-24 object-contain" alt="Partner logo" width="208"
                        height="96">
                    <img src="{{ asset('images/partners/partner2.webp') }}"
                        class="w-32 h-16 md:w-52 md:h-24 object-contain" alt="Partner logo" width="208"
                        height="96">
                    <img src="{{ asset('images/partners/partner3.webp') }}"
                        class="w-32 h-16 md:w-52 md:h-24 object-contain" alt="Partner logo" width="208"
                        height="96">
                    <img src="{{ asset('images/partners/partner4.webp') }}"
                        class="w-32 h-16 md:w-52 md:h-24 object-contain" alt="Partner logo" width="208"
                        height="96">
                    <img src="{{ asset('images/partners/partner5.webp') }}"
                        class="w-32 h-16 md:w-52 md:h-24 object-contain" alt="Partner logo" width="208"
                        height="96">
                    <img src="{{ asset('images/partners/partner6.webp') }}"
                        class="w-32 h-16 md:w-52 md:h-24 object-contain" alt="Partner logo" width="208"
                        height="96">
                    <img src="{{ asset('images/partners/partner7.webp') }}"
                        class="w-32 h-16 md:w-52 md:h-24 object-contain" alt="Partner logo" width="208"
                        height="96">
                    <img src="{{ asset('images/partners/partner8.webp') }}"
                        class="w-32 h-16 md:w-52 md:h-24 object-contain" alt="Partner logo" width="208"
                        height="96">
                    <img src="{{ asset('images/partners/partner9.webp') }}"
                        class="w-32 h-16 md:w-52 md:h-24 object-contain" alt="Partner logo" width="208"
                        height="96">
                    <img src="{{ asset('images/partners/partner10.webp') }}"
                        class="w-32 h-16 md:w-52 md:h-24 object-contain" alt="Partner logo" width="208"
                        height="96">
                    <img src="{{ asset('images/partners/partner11.webp') }}"
                        class="w-32 h-16 md:w-52 md:h-24 object-contain" alt="Partner logo" width="208"
                        height="96">
                    <img src="{{ asset('images/partners/partner12.webp') }}"
                        class="w-32 h-16 md:w-52 md:h-24 object-contain" alt="Partner logo" width="208"
                        height="96">
                    <img src="{{ asset('images/partners/logo-vnc.webp') }}"
                        class="w-32 h-16 md:w-52 md:h-24 object-contain" alt="VNC partner logo" width="208"
                        height="96">

                    <!-- Duplikat untuk efek loop -->
                    <img src="{{ asset('images/partners/partner1.webp') }}"
                        class="w-32 h-16 md:w-52 md:h-24 object-contain" alt="Partner logo" width="208"
                        height="96">
                    <img src="{{ asset('images/partners/partner2.webp') }}"
                        class="w-32 h-16 md:w-52 md:h-24 object-contain" alt="Partner logo" width="208"
                        height="96">
                    <img src="{{ asset('images/partners/partner3.webp') }}"
                        class="w-32 h-16 md:w-52 md:h-24 object-contain" alt="Partner logo" width="208"
                        height="96">
                    <img src="{{ asset('images/partners/partner4.webp') }}"
                        class="w-32 h-16 md:w-52 md:h-24 object-contain" alt="Partner logo" width="208"
                        height="96">
                    <img src="{{ asset('images/partners/partner5.webp') }}"
                        class="w-32 h-16 md:w-52 md:h-24 object-contain" alt="Partner logo" width="208"
                        height="96">
                    <img src="{{ asset('images/partners/partner6.webp') }}"
                        class="w-32 h-16 md:w-52 md:h-24 object-contain" alt="Partner logo" width="208"
                        height="96">
                    <img src="{{ asset('images/partners/partner7.webp') }}"
                        class="w-32 h-16 md:w-52 md:h-24 object-contain" alt="Partner logo" width="208"
                        height="96">
                    <img src="{{ asset('images/partners/partner8.webp') }}"
                        class="w-32 h-16 md:w-52 md:h-24 object-contain" alt="Partner logo" width="208"
                        height="96">
                    <img src="{{ asset('images/partners/partner9.webp') }}"
                        class="w-32 h-16 md:w-52 md:h-24 object-contain" alt="Partner logo" width="208"
                        height="96">
                    <img src="{{ asset('images/partners/partner10.webp') }}"
                        class="w-32 h-16 md:w-52 md:h-24 object-contain" alt="Partner logo" width="208"
                        height="96">
                    <img src="{{ asset('images/partners/partner11.webp') }}"
                        class="w-32 h-16 md:w-52 md:h-24 object-contain" alt="Partner logo" width="208"
                        height="96">
                    <img src="{{ asset('images/partners/partner12.webp') }}"
                        class="w-32 h-16 md:w-52 md:h-24 object-contain" alt="Partner logo" width="208"
                        height="96">
                    <img src="{{ asset('images/partners/logo-vnc.webp') }}"
                        class="w-32 h-16 md:w-52 md:h-24 object-contain" alt="VNC partner logo" width="208"
                        height="96">
                </div>
            </div>
        </div>

        <section class="w-full pt-6 md:pt-10 bg-[#124F45] lg:bg-transparent" aria-label="Our Clients">
            <div class="flex flex-col gap-4 md:gap-5 px-5 md:px-10 justify-center h-full">
                <div class="flex w-full">
                    <div class="flex items-center w-full">
                        <h2
                            class="py-1 text-sm md:text-base font-thin text-white px-5 md:px-7 w-max font-jakarta rounded-3xl outline outline-1">
                            Our Clients
                        </h2>
                    </div>
                    <div class="flex flex-row items-center justify-end w-full overflow-hidden gap-x-2 md:gap-x-3">
                        <button class="btn btn-circle btn-outline button-prev w-12 h-12"
                            aria-label="Previous clients">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" md:width="16"
                                md:height="16" fill="white" class="bi bi-chevron-left" viewBox="0 0 16 16"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" />
                            </svg>
                        </button>
                        <button class="btn btn-circle btn-outline button-next w-12 h-12" aria-label="Next clients">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" md:width="16"
                                md:height="16" fill="white" class="bi bi-chevron-right" viewBox="0 0 16 16"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="w-full swiper bg-white backdrop-blur-2xl shadow-lg border border-white/50 rounded-lg">
                    <div class="swiper-wrapper my-6 md:my-10 p-3">
                        @foreach (array_chunk(range(1, 21), 11) as $group)
                            <div class="swiper-slide flex justify-center items-center h-[250px] md:h-[300px]">
                                <div
                                    class="grid grid-cols-3 lg:grid-cols-5 sm:grid-cols-4 md:grid-cols-3 gap-4 md:gap-6 place-items-center">
                                    @foreach ($group as $i)
                                        <img src="{{ asset('images/clients/client-' . $i . '.webp') }}"
                                            class="w-16 h-16 sm:w-20 sm:h-20 md:w-28 md:h-28 object-contain"
                                            alt="Client {{ $i }} logo" width="112" height="112">
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>


        <section class="w-full bg-[#124F45] lg:bg-transparent" id="contact" aria-label="Contact Us">
            <div class="flex flex-col md:flex-row w-full p-5 md:p-7 gap-5 md:gap-0">
                <div
                    class="w-full md:w-1/2 lg:w-4/6 px-2 text-lg md:text-xl lg:text-4xl font-medium text-white text-center md:text-left">
                    <h2>Transform your brand and business with our 360 services.</h2>
                </div>
                <div class="flex w-full md:w-1/2 lg:w-full justify-center md:justify-end">
                    <div class="flex w-full md:w-full lg:w-3/5 gap-3 ">
                        <a wire:navigate href="/contact" target="_self" title="Contact metri for services"
                            class="flex items-center justify-center w-1/2 md:w-1/2 text-base md:text-lg font-normal text-white transition-all duration-300 ease-in-out bg-transparent rounded-full btn outline-white outline font-ibm outline-2 hover:text-black hover:border-white hover:bg-white">
                            CONTACT US
                        </a>
                        <a wire:navigate href="https://wa.me/6287784945201" target="_blank" rel="noopener"
                            title="Contact metri via WhatsApp"
                            class="flex items-center justify-center w-1/2 md:w-1/2 text-base md:text-lg font-normal text-[#00413D] bg-white outline-white outline outline-2 rounded-full btn font-ibm hover:text-white transition-all duration-300 ease-in-out hover:border-white hover:bg-[#022C29]">
                            WHATSAPP US
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <div id="toTopBtn" aria-label="Scroll to top"
        class="fixed px-4 py-2 text-white transition-opacity duration-300 bg-gray-800 rounded-full shadow-lg opacity-0 bottom-5 right-5 hover:bg-gray-700">
        ↑
    </div>

    <x-slot:structured-data>
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": ["Organization", "LocalBusiness"],
                "name": "PT. MEDIA TREN IDEA",
                "alternateName": "metri",
                "url": "{{ url('/') }}",
                "logo": "{{ asset('images/logo/logo-putih-baru.webp') }}",
                "sameAs": [
                    "https://www.instagram.com/metri.id/",
                    "https://www.youtube.com/channel/metri.id"
                ],
                "contactPoint": {
                    "@type": "ContactPoint",
                    "telephone": "+6287784945201",
                    "contactType": "customer service",
                    "email": "hello@metri.id",
                    "availableLanguage": ["en", "id"]
                },
                "address": {
                    "@type": "PostalAddress",
                    "streetAddress": "Your Street Address",
                    "addressLocality": "Jakarta",
                    "addressRegion": "DKI Jakarta",
                    "postalCode": "Your Postal Code",
                    "addressCountry": "ID"
                },
                "geo": {
                    "@type": "GeoCoordinates",
                    "latitude": "-6.2088",
                    "longitude": "106.8456"
                },
                "openingHoursSpecification": {
                    "@type": "OpeningHoursSpecification",
                    "dayOfWeek": [
                        "Monday",
                        "Tuesday",
                        "Wednesday",
                        "Thursday",
                        "Friday"
                    ],
                    "opens": "09:00",
                    "closes": "17:00"
                },
                "priceRange": "$$",
                "currenciesAccepted": "IDR",
                "paymentAccepted": "Cash, Credit Card, Bank Transfer",
                "description": "metri provides 360 creative services in Jakarta, Indonesia including entertainment, design, digital marketing, film production, media post, and event management for businesses and brands.",
                "areaServed": {
                    "@type": "GeoCircle",
                    "geoMidpoint": {
                        "@type": "GeoCoordinates",
                        "latitude": "-6.2088",
                        "longitude": "106.8456"
                    },
                    "geoRadius": "50000"
                },
                "service": [
                    {
                        "@type": "Service",
                        "name": "Entertainment Services",
                        "url": "{{ url('/metri-entertainment') }}",
                        "description": "Comprehensive entertainment solutions including talent management, event entertainment, and creative performances."
                    },
                    {
                        "@type": "Service",
                        "name": "Design Services",
                        "url": "{{ url('/metri-design') }}",
                        "description": "Professional graphic design, branding, packaging, and visual identity development for businesses of all sizes."
                    },
                    {
                        "@type": "Service",
                        "name": "Digital Marketing",
                        "url": "{{ url('/metri-digital') }}",
                        "description": "Strategic digital marketing services including social media management, content creation, and online advertising campaigns."
                    },
                    {
                        "@type": "Service",
                        "name": "Film Production",
                        "url": "{{ url('/metri-film') }}",
                        "description": "End-to-end film and video production services for commercials, corporate videos, and creative content."
                    },
                    {
                        "@type": "Service",
                        "name": "Post Production",
                        "url": "{{ url('/metri-post') }}",
                        "description": "Professional video editing, color grading, visual effects, and audio post-production services."
                    },
                    {
                        "@type": "Service",
                        "name": "Event Management",
                        "url": "{{ url('/metri-event') }}",
                        "description": "Full-service event planning, management, and execution for corporate, private, and public events."
                    },
                    {
                        "@type": "Service",
                        "name": "Film Equipment Rental",
                        "url": "{{ url('/metri-tang-ting') }}",
                        "description": "Professional film and video equipment rental services for productions of any size."
                    }
                ]
            }
            </script>
            
            <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "BreadcrumbList",
                "itemListElement": [{
                    "@type": "ListItem",
                    "position": 1,
                    "name": "Home",
                    "item": "{{ url('/') }}"
                }]
            }
            </script>
    </x-slot:structured-data>
</x-layouts.layout>
