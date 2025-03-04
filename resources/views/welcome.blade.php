<x-layouts.layout>
    <x-slot:title>
        metri | Home
    </x-slot:title>

    <x-slot:vite>
        @vite(['resources/js/main.js', 'resources/css/app.css'])
    </x-slot:vite>

    <main class="h-full min-h-screen overflow-x-hidden">
        <section class="absolute top-0 left-0 w-full px-[100px] py-[30px] flex justify-between items-center z-[100]">
            <div>
                <a href="/" class="logo">
                    <img src="{{ asset('images/logo/logo-putih-baru.webp') }}" alt="" width="150" />
                </a>
            </div>
            <div class="min-h-min">
                <nav class="flex navigation relative">
                    <a href="/about" class="a-nav">ABOUT</a>
                    <div class="relative group">
                        <a href="#services" class="text-black h-full flex items-center gap-2">
                            OUR SERVICES
                            <svg class="w-4 h-4 transition-transform group-hover:rotate-180"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </a>
                        <div
                            class="absolute left-0 top-full mt-0 hidden group-hover:block bg-[#359381] bg-opacity-50 backdrop-blur-md shadow-lg rounded-lg w-48">
                            <ul class="py-2">
                                <li><a href="/metri-entertainment"
                                        class="block px-4 py-2 hover:backdrop-blur-lg text-white">metri
                                        entertainment</a></li>
                                <li><a href="/metri-design"
                                        class="block px-4 py-2 hover:backdrop-blur-lg text-white">metri design</a></li>
                                <li><a href="/metri-digital"
                                        class="block px-4 py-2 hover:backdrop-blur-lg text-white">metri digital</a></li>
                                <li><a href="/metri-film"
                                        class="block px-4 py-2 hover:backdrop-blur-lg text-white">metri film</a></li>
                                <li><a href="/metri-post"
                                        class="block px-4 py-2 hover:backdrop-blur-lg text-white">metri post</a></li>
                                <li><a href="/metri-tang-ting"
                                        class="block px-4 py-2 hover:backdrop-blur-lg text-white">tang ting</a></li>
                                <li><a href="/metri-event"
                                        class="block px-4 py-2 hover:backdrop-blur-lg text-white">metri event</a></li>
                            </ul>
                        </div>
                    </div>
                    <a href="#partners" class="a-nav">OUR PARTNERS</a>
                    <a href="#contact" class="a-nav">CONTACT</a>
                </nav>
            </div>
            <div class="flex justify-end">
                <h1 class="tracking-wider text-black font-ibm">PT. MEDIA TREN IDEA</h1>
            </div>
        </section>

        <section
            class="relative flex items-center justify-center min-h-screen overflow-hidden parallax-container will-change-transform bg-hero">
            <img src="{{ asset('images/sun.webp') }}" alt="" id="sun" class="img-parallax"
                loading="eager" />
            <img src="{{ asset('images/bg-showcase.webp') }}" alt="" id="" class="img-parallax"
                loading="eager" />
            <img src="{{ asset('images/bird2.webp') }}" alt="" id="bird2" class="img-parallax"
                loading="eager" />
            <img src="{{ asset('images/bird1.webp') }}" alt="" id="bird1" class="img-parallax"
                loading="eager" />
            <img src="{{ asset('images/plant2(2).webp') }}" alt="" id="plant2" class="img-parallax"
                loading="eager" />
            <img src="{{ asset('images/tree4.webp') }}" alt="" id="tree" class="img-parallax"
                loading="eager" />
            <img src="{{ asset('images/plant1.webp') }}" alt="" id="plant1" class="img-parallax"
                loading="eager" />
            <div class="absolute flex flex-col items-center -translate-x-1/2 bottom-10 left-1/2" id="scroll">
                <p class="pb-2 font-medium tracking-wide text-white text-XS font-ibm animate-bounce">SCROLL</p>
                <div class="relative flex items-start justify-center w-8 h-12 border-2 border-white rounded-full">
                    <div class="w-1 h-5 bg-white rounded-full"></div>
                </div>
            </div>
        </section>

        <section class="relative w-full h-screen -mt-10 overflow-hidden mysteps" id="services">
            <div class="step-counter w-full relative flex px-[2em] flex-row m-[2em] justify-between items-center">
                <div class="counter-title relative h-[150px] overflow-hidden w-full flex flex-col items-center">
                    <h2
                        class="w-max relative text-white font-jakarta font-normal text-xl will-change-transform text-center rounded-3xl outline outline-2 outline-[#E1E1E1] p-2 mt-2">
                        Our Services
                    </h2>
                    <p class="pt-8 text-3xl font-medium text-center text-white">Craft, build, grow, and develop your
                        brand and business
                    <p class="text-3xl font-medium text-center text-white">with our 360 services.</p>
                </div>
            </div>

            <div
                class="cards absolute top-[25%] left-1/2 -translate-x-1/2 -translate-y-1/2 w-[150vw] h-fit will-change-transform mt-[300px]">
                <a href="/metri-entertainment">
                    <div
                        class="card absolute w-[500px] h-[550px] left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 origin-center flex flex-col gap-4 will-change-transform">
                        <div class="flex-1 overflow-hidden rounded-md card-img h-[60vh]">
                            <img src="{{ asset('images/service1.webp') }}" loading="lazy" alt=""
                                class="object-contain w-full h-full img-card" />
                        </div>
                        <div class="card-content w-full h-[60px]">
                            <p class="text-left text-white font-jakarta text-[16px] font-medium leading-tight">
                                ‎
                            </p>
                        </div>
                    </div>
                </a>
                <a href="/metri-design">
                    <div
                        class="card absolute w-[500px] h-[550px] left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 origin-center flex flex-col gap-4 will-change-transform">
                        <div class="flex-1 overflow-hidden rounded-md card-img">
                            <img src="{{ asset('images/service2.webp') }}" loading="lazy" alt=""
                                class="object-contain w-full h-full img-card" />
                        </div>
                        <div class="card-content w-full h-[60px]">
                            <p class="text-left text-white font-jakarta text-[16px] font-medium leading-tight">
                                ‎
                            </p>
                        </div>
                    </div>
                </a>
                <a href="/metri-digital">
                    <div
                        class="card absolute w-[500px] h-[550px] left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 origin-center flex flex-col gap-4 will-change-transform">
                        <div class="flex-1 overflow-hidden rounded-md card-img">
                            <img src="{{ asset('images/service3.webp') }}" loading="lazy" alt=""
                                class="object-contain w-full h-full img-card" />
                        </div>
                        <div class="card-content w-full h-[60px]">
                            <p class="text-left text-white font-jakarta text-[16px] font-medium leading-tight">
                                ‎
                            </p>
                        </div>
                    </div>
                </a>
                <a href="/metri-film">
                    <div
                        class="card absolute w-[500px] h-[550px] left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 origin-center flex flex-col gap-4 will-change-transform">
                        <div class="flex-1 overflow-hidden rounded-md card-img">
                            <img src="{{ asset('images/service4.webp') }}" loading="lazy" alt=""
                                class="object-contain w-full h-full img-card" />
                        </div>
                        <div class="card-content w-full h-[60px]">
                            <p class="text-left text-white font-jakarta text-[16px] font-medium leading-tight">
                                ‎
                            </p>
                        </div>
                    </div>
                </a>
                <a href="/metri-post">
                    <div
                        class="card absolute w-[500px] h-[550px] left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 origin-center flex flex-col gap-4 will-change-transform">
                        <div class="flex-1 overflow-hidden rounded-md card-img">
                            <img src="{{ asset('images/service5.webp') }}" loading="lazy" alt=""
                                class="object-contain w-full h-full img-card" />
                        </div>
                        <div class="card-content w-full h-[60px]">
                            <p class="text-left text-white font-jakarta text-[16px] font-medium leading-tight">
                                ‎
                            </p>
                        </div>
                    </div>
                </a>
                <a href="/metri-tang-ting">
                    <div
                        class="card absolute w-[500px] h-[550px] left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 origin-center flex flex-col gap-4 will-change-transform">
                        <div class="flex-1 overflow-hidden rounded-md card-img">
                            <img src="{{ asset('images/service6.webp') }}" loading="lazy" alt=""
                                class="object-contain w-full h-full img-card" />
                        </div>
                        <div class="card-content w-full h-[60px]">
                            <p class="text-left text-white font-jakarta text-[16px] font-medium leading-tight">
                                ‎
                            </p>
                        </div>
                    </div>
                </a>
                <a href="/metri-event">
                    <div
                        class="card absolute w-[500px] h-[550px] left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 origin-center flex flex-col gap-4 will-change-transform">
                        <div class="flex-1 overflow-hidden rounded-md card-img">
                            <img src="{{ asset('images/service7.webp') }}" loading="lazy" alt=""
                                class="object-contain w-full h-full img-card" />
                        </div>
                        <div class="card-content w-full h-[60px]">
                            <p class="text-left text-white font-jakarta text-[16px] font-medium leading-tight">
                                ‎
                            </p>
                        </div>
                    </div>
                </a>

                <div
                    class="opacity-0 card empty absolute w-[500px] h-[550px] left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 origin-center flex flex-col gap-4 will-change-transform">
                </div>
                <div class="opacity-0 card empty"></div>
            </div>
        </section>

        <div id="overlay" class="fixed top-0 left-0 w-full h-full bg-[#00413D] opacity-0 pointer-events-none z-50">
        </div>

        <section class="items-center justify-center w-full pb-28 customer-support h-[450px] md:h-[600px]">
            <div class="container flex flex-col items-center justify-center  w-full pt-4 h-full overflow-hidden">
                <div
                    class="flex flex-col items-center w-full h-fit rounded-2xl py-20 bg-[#00413D]/30 backdrop-blur-3xl">
                    <p
                        class="text-white max-w-lg w-fit font-jakarta font-normal text-xl text-center rounded-3xl outline outline-2 outline-[#E1E1E1] p-2 mt-2">
                        Customer Support
                    </p>
                    <h2 class="pt-8 text-4xl font-semibold text-white">Contact us at hello@metri.id for any inquiry
                    </h2>
                    <h2 class="text-4xl font-semibold text-white">regarding our 360 services.</h2>
                </div>

            </div>
        </section>


        <section class="w-full h-full">
            <video class="object-fill w-full h-full" autoplay loop muted>
                <source src="{{ asset('storage/' . $video) }}" type="video/mp4">
            </video>
        </section>

        <div class="flex flex-row items-center w-full bg-[#056251]" id="partners">
            <p class="px-10 text-lg font-thin text-white whitespace-nowrap">
                Our Partners
            </p>
            <div class="w-auto overflow-hidden fade bg-white rounded-lg">
                <div class="flex flex-row items-center animate-scroll w-max gap-6 py-3">
                    <!-- 12 gambar unik -->
                    <img src="{{ asset('images/partners/partner1.webp') }}" class="w-52 h-24 object-contain">
                    <img src="{{ asset('images/partners/partner2.webp') }}" class="w-52 h-24 object-contain">
                    <img src="{{ asset('images/partners/partner3.webp') }}" class="w-52 h-24 object-contain">
                    <img src="{{ asset('images/partners/partner4.webp') }}" class="w-52 h-24 object-contain">
                    <img src="{{ asset('images/partners/partner5.webp') }}" class="w-52 h-24 object-contain">
                    <img src="{{ asset('images/partners/partner6.webp') }}" class="w-52 h-24 object-contain">
                    <img src="{{ asset('images/partners/partner7.webp') }}" class="w-52 h-24 object-contain">
                    <img src="{{ asset('images/partners/partner8.webp') }}" class="w-52 h-24 object-contain">
                    <img src="{{ asset('images/partners/partner9.webp') }}" class="w-52 h-24 object-contain">
                    <img src="{{ asset('images/partners/partner10.webp') }}" class="w-52 h-24 object-contain">
                    <img src="{{ asset('images/partners/partner11.webp') }}" class="w-52 h-24 object-contain">
                    <img src="{{ asset('images/partners/partner12.webp') }}" class="w-52 h-24 object-contain">

                    <!-- Duplikat untuk efek loop -->
                    <img src="{{ asset('images/partners/partner1.webp') }}" class="w-52 h-24 object-contain">
                    <img src="{{ asset('images/partners/partner2.webp') }}" class="w-52 h-24 object-contain">
                    <img src="{{ asset('images/partners/partner3.webp') }}" class="w-52 h-24 object-contain">
                    <img src="{{ asset('images/partners/partner4.webp') }}" class="w-52 h-24 object-contain">
                    <img src="{{ asset('images/partners/partner5.webp') }}" class="w-52 h-24 object-contain">
                    <img src="{{ asset('images/partners/partner6.webp') }}" class="w-52 h-24 object-contain">
                    <img src="{{ asset('images/partners/partner7.webp') }}" class="w-52 h-24 object-contain">
                    <img src="{{ asset('images/partners/partner8.webp') }}" class="w-52 h-24 object-contain">
                    <img src="{{ asset('images/partners/partner9.webp') }}" class="w-52 h-24 object-contain">
                    <img src="{{ asset('images/partners/partner10.webp') }}" class="w-52 h-24 object-contain">
                    <img src="{{ asset('images/partners/partner11.webp') }}" class="w-52 h-24 object-contain">
                    <img src="{{ asset('images/partners/partner12.webp') }}" class="w-52 h-24 object-contain">
                </div>
            </div>
        </div>


        <section class="w-full pt-10 ">
            <div class="flex flex-col gap-5 px-10 justify-center h-full">
                <div class="flex w-full">
                    <div class="flex items-center w-full">
                        <h2 class="py-1 font-thin text-white px-7 w-max font-jakarta rounded-3xl outline outline-1">
                            Our Clients
                        </h2>
                    </div>
                    <div class="flex flex-row items-center justify-end w-full overflow-hidden gap-x-3">
                        <button class="btn btn-circle btn-outline button-prev">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white"
                                class="bi bi-chevron-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" />
                            </svg>
                        </button>
                        <button class="btn btn-circle btn-outline button-next">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white"
                                class="bi bi-chevron-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="w-full swiper bg-white backdrop-blur-2xl shadow-lg border border-white/50  rounded-lg">
                    <div class="swiper-wrapper my-10 p-3">
                        @foreach (array_chunk(range(1, 21), 11) as $group)
                            <div class="swiper-slide flex justify-center items-center h-[300px]">
                                <div class="grid grid-cols-5 gap-6 place-items-center">
                                    @foreach ($group as $i)
                                        <img src="{{ asset('images/clients/client-' . $i . '.webp') }}"
                                            class="w-28 h-28 object-contain">
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <section class="w-full" id="contact">
            <div class="flex w-full p-7">
                <div class="w-1/2 px-2 text-4xl font-medium text-white">
                    <h2>Transform your brand and business with our 360 services.</h2>
                </div>
                <div class="flex items-center justify-end w-1/2 gap-x-5">
                    <a href="/contact"
                        class="w-1/3 text-xl font-normal text-white transition-all duration-300 ease-in-out bg-transparent rounded-full btn outline-white outline font-ibm outline-2 hover:text-black hover:border-white hover:bg-white">CONTACT
                        US</a>
                    <a href="/contact"
                        class="w-1/3 text-xl font-normal text-[#00413D] bg-white outline-white outline outline-2 rounded-full btn font-ibm hover:text-white transition-all duration-300 ease-in-out  hover:border-white hover:bg-[#022C29]
">CONTACT
                        US</a>
                </div>
            </div>

        </section>
    </main>

    <div id="toTopBtn"
        class="fixed px-4 py-2 text-white transition-opacity duration-300 bg-gray-800 rounded-full shadow-lg opacity-0 bottom-5 right-5 hover:bg-gray-700">
        ↑
    </div>

</x-layouts.layout>
