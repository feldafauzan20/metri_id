<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    {{-- google font start --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    {{-- google font end --}}

    {{-- my js start --}}
    @vite('resources/js/main.js')
    {{-- my js end --}}
</head>

<body class="min-h-screen overflow-x-hidden h-full bg-[#257c76]">
    <header class="absolute top-0 left-0 w-full px-[100px] py-[30px] flex justify-evenly items-center z-[100]">
        <div class="w-full">
            <a href="#" class="logo">
                <img src="{{ asset('images/logo/logo-putih-baru.png') }}" alt="" width="150" />
            </a>
        </div>
        <div class="w-full min-h-min">
            <nav class="flex navigation">
                <a href="" class="active a-nav">ABOUT</a>
                <a href="" class="a-nav">NETWORK</a>
                <a href="" class="a-nav">NEWS</a>
                <a href="" class="a-nav">CARRER</a>
                <a href="" class="a-nav">CONTACT</a>
            </nav>
        </div>
        <div class="flex justify-end w-full">
            <h1 class="tracking-wider font-ibm">PT. MEDIA TREN IDEA</h1>
        </div>
    </header>

    <section
        class="relative flex items-center justify-center min-h-screen overflow-hidden parallax-container will-change-transform bg-hero">
        <img src="{{ asset('images/efek-angin.webp') }}" alt="" id="efek-angin"
            class="img-parallax opacity-15" />
        <img src="{{ asset('images/sun.webp') }}" alt="" id="sun" class="img-parallax" />
        <img src="{{ asset('images/gunung4.webp') }}" alt="" id="gunung4" class="img-parallax" />
        <img src="{{ asset('images/gunung3.webp') }}" alt="" id="gunung3" class="img-parallax" />
        <img src="{{ asset('images/cloud.webp') }}" alt="" id="cloud" class="img-parallax" />
        <img src="{{ asset('images/gunung2.webp') }}" alt="" id="gunung2" class="img-parallax" />
        <img src="{{ asset('images/gunung1.webp') }}" alt="" id="gunung1" class="img-parallax" />
        <img src="{{ asset('images/tanah3.webp') }}" alt="" id="tanah3" class="img-parallax" />
        <img src="{{ asset('images/tanah1.webp') }}" alt="" id="tanah1" class="img-parallax" />
        <img src="{{ asset('images/plant2.webp') }}" alt="" id="plant2" class="img-parallax" />
        <img src="{{ asset('images/tanah2.webp') }}" alt="" id="tanah2" class="img-parallax" />
        <img src="{{ asset('images/tree4.webp') }}" alt="" id="tree" class="img-parallax" />
        {{-- <img src="{{ asset('images/leaf.webp') }}" alt="" id="leaf" class="img-parallax" /> --}}
        {{-- <h2 id="text" class="absolute text-[5em] text-white font-semibold ">
      <span class="block textHero1">Elevate Your Experience</span>
      <span class="block text-center textHero2">with metri</span>
    </h2> --}}
        <img src="{{ asset('images/plant1.webp') }}" alt="" id="plant1" class="img-parallax" />
    </section>

    <section class="bg-[#257c76] relative w-full h-screen overflow-hidden steps -mt-10">
        <div class="step-counter w-full relative flex px-[2em] flex-row m-[2em] justify-between items-center">
            <div class="counter-title relative h-[150px] overflow-hidden w-full flex flex-col items-center">
                <h1
                    class="w-max relative text-white font-jakarta font-normal text-xl will-change-transform text-center rounded-3xl outline outline-2 outline-[#E1E1E1] p-2 mt-2">
                    Our services
                </h1>
                <p class="pt-8 text-3xl font-medium text-center text-white">Here's <span class="text-[#67fbf8]">our
                        services</span> that
                    may helps</p>
                <p class="text-3xl font-medium text-center text-white">with ur business</p>
            </div>
        </div>

        <div
            class="cards absolute top-[25%] left-1/2 -translate-x-1/2 -translate-y-1/2 w-[150vw] h-[600px] will-change-transform mt-[300px]">
            <div
                class="card absolute w-[500px] h-[550px] left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 origin-center flex flex-col gap-4 will-change-transform">
                <div class="flex-1 overflow-hidden rounded-md card-img">
                    <img src="{{ asset('images/service1.png') }}" alt=""
                        class="object-contain w-full h-full img-card" />
                </div>
                <div class="card-content w-full h-[60px]">
                    <p class="text-left text-white font-jakarta text-[16px] font-medium leading-tight">
                        ‎
                        ‎
                    </p>
                </div>
            </div>
            <div
                class="card absolute w-[500px] h-[550px] left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 origin-center flex flex-col gap-4 will-change-transform">
                <div class="flex-1 overflow-hidden rounded-md card-img">
                    <img src="{{ asset('images/services2.png') }}" alt=""
                        class="object-contain w-full h-full img-card" />
                </div>
                <div class="card-content w-full h-[60px]">
                    <p class="text-left text-white font-jakarta text-[16px] font-medium leading-tight">
                        ‎
                        ‎
                    </p>
                </div>
            </div>
            <div
                class="card absolute w-[500px] h-[550px] left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 origin-center flex flex-col gap-4 will-change-transform">
                <div class="flex-1 overflow-hidden rounded-md card-img">
                    <img src="{{ asset('images/services3.png') }}" alt=""
                        class="object-contain w-full h-full img-card" />
                </div>
                <div class="card-content w-full h-[60px]">
                    <p class="text-left text-white font-jakarta text-[16px] font-medium leading-tight">
                        ‎
                    </p>
                </div>
            </div>
            <div
                class="card absolute w-[500px] h-[550px] left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 origin-center flex flex-col gap-4 will-change-transform">
                <div class="flex-1 overflow-hidden rounded-md card-img">
                    <img src="{{ asset('images/services2.png') }}" alt=""
                        class="object-contain w-full h-full img-card" />
                </div>
                <div class="card-content w-full h-[60px]">
                    <p class="text-left text-white font-jakarta text-[16px] font-medium leading-tight">
                        ‎
                    </p>
                </div>
            </div>
            <div
                class="card absolute w-[500px] h-[550px] left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 origin-center flex flex-col gap-4 will-change-transform">
                <div class="flex-1 overflow-hidden rounded-md card-img">
                    <img src="{{ asset('images/service1.png') }}" alt=""
                        class="object-contain w-full h-full img-card" />
                </div>
                <div class="card-content w-full h-[60px]">
                    <p class="text-left text-white font-jakarta text-[16px] font-medium leading-tight">
                        ‎
                    </p>
                </div>
            </div>
            <div
                class="card absolute w-[500px] h-[550px] left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 origin-center flex flex-col gap-4 will-change-transform">
                <div class="flex-1 overflow-hidden rounded-md card-img">
                    <img src="{{ asset('images/services3.png') }}" alt=""
                        class="object-contain w-full h-full img-card" />
                </div>
                <div class="card-content w-full h-[60px]">
                    <p class="text-left text-white font-jakarta text-[16px] font-medium leading-tight">
                        ‎
                    </p>
                </div>
            </div>
            <div
                class="card absolute w-[500px] h-[550px] left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 origin-center flex flex-col gap-4 will-change-transform">
                <div class="flex-1 overflow-hidden rounded-md card-img">
                    <img src="{{ asset('images/services2.png') }}" alt=""
                        class="object-contain w-full h-full img-card" />
                </div>
                <div class="card-content w-full h-[60px]">
                    <p class="text-left text-white font-jakarta text-[16px] font-medium leading-tight">
                        ‎
                    </p>
                </div>
            </div>

            <div
                class="opacity-0 card empty absolute w-[500px] h-[550px] left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 origin-center flex flex-col gap-4 will-change-transform">
            </div>
            <div class="opacity-0 card empty"></div>
        </div>
    </section>

    <section class="bg-[#257c76] w-full h-screen items-center justify-center customer-support">
        <div class="container flex flex-col items-center w-full max-h-screen pt-4 pb-10 overflow-hidden">
            <div class="flex flex-col items-center w-full">
                <p
                    class="text-white max-w-lg w-fit font-jakarta font-normal text-xl text-center rounded-3xl outline outline-2 outline-[#E1E1E1] p-2 mt-2">
                    Customer support
                </p>
                <h1 class="pt-8 text-4xl font-semibold text-white">Manage customer queries</h1>
                <h1 class="text-4xl font-semibold text-white">in seconds with metri</h1>
            </div>

            <div class="container flex items-center justify-center h-full my-10">
                <div class="mx-4 text-center">
                    <h1 class="text-4xl font-semibold text-white"><span class="cs-text1">‎</span>%</h1>
                    <p class="pt-4 text-white">Of customers said using Flinta helped them to better service clients.
                    </p>
                </div>
                <div class="mx-4 text-center">
                    <h1 class="text-4xl font-semibold text-white">'<span class="cs-text2">‎</span></h1>
                    <p class="pt-4 text-white">Founded in 2024, we're on a growth journey focused on innovation.</p>
                </div>
                <div class="mx-4 text-center">
                    <h1 class="text-4xl font-semibold text-white"><span class="cs-text3">‎</span>+</h1>
                    <p class="pt-4 text-white">Average monthly clients since we launched in June 2023.</p>
                </div>
                <div class="mx-4 text-center">
                    <h1 class="text-4xl font-semibold text-white"><span class="cs-text4">‎</span>+</h1>
                    <p class="pt-4 text-white">Of tickets left unresolved using metri's advanced functionality.</p>
                </div>
            </div>

            <div class="flex flex-col items-center w-full">
                <h1 class="text-xl font-medium text-center text-white">Explore our Advance System Functionality and
                    Experience
                    the Difference</h1>
                <h1 class="text-xl font-medium text-center text-white">with metri.</h1>
            </div>
        </div>
    </section>

    <section class="w-full h-full">
        <video autoplay loop muted controls>
            <source src="{{ asset('videos/placeholder.mp4') }}" type="video/mp4">
        </video>
    </section>

    <div class="relative flex flex-row items-center w-full bg-[#045F50]">
        <p class="px-10 text-lg font-thin text-white whitespace-nowrap">
            Our partners
        </p>

        <!-- Container dengan efek fade -->
        <div class="relative w-auto overflow-hidden">
            <!-- Efek fade kiri & kanan -->
            <div
                class="absolute inset-y-0 left-0 w-32 bg-gradient-to-r from-[#045F50] to-transparent pointer-events-none">
            </div>
            <div
                class="absolute inset-y-0 right-0 w-32 bg-gradient-to-l from-[#045F50] to-transparent pointer-events-none">
            </div>

            <!-- Logo berjalan -->
            <div class="flex flex-row animate-scroll w-max">
                <img src="{{ asset('images/logo/logo-metri-baru.png') }}" class="w-52">
                <img src="{{ asset('images/logo/logo-putih-baru.png') }}" class="w-52">
                <img src="{{ asset('images/logo/logo-putih-baru.png') }}" class="w-52">
                <img src="{{ asset('images/logo/logo-putih-baru.png') }}" class="w-52">
                <img src="{{ asset('images/logo/logo-putih-baru.png') }}" class="w-52">
                <img src="{{ asset('images/logo/logo-putih-baru.png') }}" class="w-52">
                <img src="{{ asset('images/logo/logo-putih-baru.png') }}" class="w-52">

                <!-- Duplikat logo untuk efek loop -->
                <img src="{{ asset('images/logo/logo-metri-baru.png') }}" class="w-52">
                <img src="{{ asset('images/logo/logo-putih-baru.png') }}" class="w-52">
                <img src="{{ asset('images/logo/logo-putih-baru.png') }}" class="w-52">
                <img src="{{ asset('images/logo/logo-putih-baru.png') }}" class="w-52">
                <img src="{{ asset('images/logo/logo-putih-baru.png') }}" class="w-52">
                <img src="{{ asset('images/logo/logo-putih-baru.png') }}" class="w-52">
                <img src="{{ asset('images/logo/logo-putih-baru.png') }}" class="w-52">
            </div>
        </div>
    </div>


    <section class="bg-[#257c76] w-full h-screen">
        <div class="flex flex-col justify-center h-full gap-5 px-10">
            <h2 class="py-1 font-thin text-white px-7 w-max font-jakarta rounded-3xl outline outline-1">
                Our clients
            </h2>
            <p class="w-1/2 text-3xl text-white font-jakarta">
                See what our clients have to say about partnering with us on several projects
            </p>
            <div class="w-full swiper">
                <div class="swiper-wrapper">
                    <div class="w-full swiper-slide">
                        <div class="flex flex-row items-center gap-5">
                            <img src="{{ asset('images/card-1.jpg') }}"
                                class="w-20 h-20 bg-white rounded-full aspect-square">
                            <p class="w-full text-justify text-white uppercase font-jakarta">
                                Lorem ipsum dolor sit amet consectetur adipisicing.
                            </p>
                        </div>
                        <div class="flex flex-col gap-3 my-14">
                            <p class="text-justify text-white font-jakarta">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae laboriosam et libero
                                inventore
                                provident nostrum possimus quidem culpa dolorum dolorem?
                            </p>
                            <p class="text-white font-jakarta text-end">
                                Lorem, ipsum dolor.
                            </p>
                        </div>
                        <div class="my-5 border-t-4 border-white"></div>
                        <div class="relative">
                            <p class="absolute bottom-0 left-0 p-5 text-xl font-bold text-white font-jakarta">
                                VINCERE STUDIO
                            </p>
                            <img src="{{ asset('images/card-1.jpg') }}" class="object-cover w-full h-28 photo-card">
                        </div>
                    </div>
                    <div class="w-full swiper-slide">
                        <div class="flex flex-row items-center gap-5">
                            <img src="{{ asset('images/card-1.jpg') }}"
                                class="w-20 h-20 bg-white rounded-full aspect-square">
                            <p class="w-full text-justify text-white uppercase font-jakarta">
                                Lorem ipsum dolor sit amet consectetur adipisicing.
                            </p>
                        </div>
                        <div class="flex flex-col gap-3 my-14">
                            <p class="text-justify text-white font-jakarta">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae laboriosam et libero
                                inventore
                                provident nostrum possimus quidem culpa dolorum dolorem?
                            </p>
                            <p class="text-white font-jakarta text-end">
                                Lorem, ipsum dolor.
                            </p>
                        </div>
                        <div class="my-5 border-t-4 border-white"></div>
                        <div class="relative">
                            <p class="absolute bottom-0 left-0 p-5 text-xl font-bold text-white font-jakarta">
                                VINCERE STUDIO
                            </p>
                            <img src="{{ asset('images/card-1.jpg') }}" class="object-cover w-full h-28 photo-card">
                        </div>
                    </div>
                    <div class="w-full swiper-slide">
                        <div class="flex flex-row items-center gap-5">
                            <img src="{{ asset('images/card-1.jpg') }}"
                                class="w-20 h-20 bg-white rounded-full aspect-square">
                            <p class="w-full text-justify text-white uppercase font-jakarta">
                                Lorem ipsum dolor sit amet consectetur adipisicing.
                            </p>
                        </div>
                        <div class="flex flex-col gap-3 my-14">
                            <p class="text-justify text-white font-jakarta">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae laboriosam et libero
                                inventore
                                provident nostrum possimus quidem culpa dolorum dolorem?
                            </p>
                            <p class="text-white font-jakarta text-end">
                                Lorem, ipsum dolor.
                            </p>
                        </div>
                        <div class="my-5 border-t-4 border-white"></div>
                        <div class="relative">
                            <p class="absolute bottom-0 left-0 p-5 text-xl font-bold text-white font-jakarta">
                                VINCERE STUDIO
                            </p>
                            <img src="{{ asset('images/card-1.jpg') }}" class="object-cover w-full h-28 photo-card">
                        </div>
                    </div>
                    <div class="w-full swiper-slide">
                        <div class="flex flex-row items-center gap-5">
                            <img src="{{ asset('images/card-1.jpg') }}"
                                class="w-20 h-20 bg-white rounded-full aspect-square">
                            <p class="w-full text-justify text-white uppercase font-jakarta">
                                Lorem ipsum dolor sit amet consectetur adipisicing.
                            </p>
                        </div>
                        <div class="flex flex-col gap-3 my-14">
                            <p class="text-justify text-white font-jakarta">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae laboriosam et libero
                                inventore
                                provident nostrum possimus quidem culpa dolorum dolorem?
                            </p>
                            <p class="text-white font-jakarta text-end">
                                Lorem, ipsum dolor.
                            </p>
                        </div>
                        <div class="my-5 border-t-4 border-white"></div>
                        <div class="relative">
                            <p class="absolute bottom-0 left-0 p-5 text-xl font-bold text-white font-jakarta">
                                VINCERE STUDIO
                            </p>
                            <img src="{{ asset('images/card-1.jpg') }}" class="object-cover w-full h-28 photo-card">
                        </div>
                    </div>
                    <div class="w-full swiper-slide">
                        <div class="flex flex-row items-center gap-5">
                            <img src="{{ asset('images/card-1.jpg') }}"
                                class="w-20 h-20 bg-white rounded-full aspect-square">
                            <p class="w-full text-justify text-white uppercase font-jakarta">
                                Lorem ipsum dolor sit amet consectetur adipisicing.
                            </p>
                        </div>
                        <div class="flex flex-col gap-3 my-14">
                            <p class="text-justify text-white font-jakarta">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae laboriosam et libero
                                inventore
                                provident nostrum possimus quidem culpa dolorum dolorem?
                            </p>
                            <p class="text-white font-jakarta text-end">
                                Lorem, ipsum dolor.
                            </p>
                        </div>
                        <div class="my-5 border-t-4 border-white"></div>
                        <div class="relative">
                            <p class="absolute bottom-0 left-0 p-5 text-xl font-bold text-white font-jakarta">
                                VINCERE STUDIO
                            </p>
                            <img src="{{ asset('images/card-1.jpg') }}" class="object-cover w-full h-28 photo-card">
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-row justify-center gap-5 overflow-hidden">
                <div class="p-2 bg-gray-800 border border-gray-700 rounded-full button-prev">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white"
                        class="bi bi-chevron-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" />
                    </svg>
                </div>
                <div class="p-2 bg-gray-800 border border-gray-700 rounded-full button-next">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white"
                        class="bi bi-chevron-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <footer class="w-full py-10 bg-center bg-no-repeat bg-cover shadow-[0_-15px_40px_-15px_rgba(0,0,0,0.3)]"
        style="background-image: url('{{ asset('images/footer.png') }}')">
        <div class="flex flex-row gap-20 px-10">
            <div class="flex flex-col pr-20">
                <img src="{{ asset('images/logo/logo-putih.png') }}" class="w-28">
                <p class="font-thin text-white">
                    &copy; 2025 Metri. All rights reserved.
                </p>
            </div>
            <div class="flex flex-col max-w-xs gap-3">
                <p class="font-bold text-white">
                    Address:
                </p>
                <p class="text-white">
                    Jl. Tebet Raya No. 42, RT.5/RW.9, Tebet Timur, Kec. Tebet, Kota Jakarta Selatan, DKI Jakarta 12820
                </p>
                <p class="font-bold text-white">
                    Office Hours:
                </p>
                <p class="text-white">
                    Mon - Fri: 08:00 - 17:00 <br>
                    Sat - Sun: 08:00 - 12:00
                </p>
            </div>
            <div class="flex flex-col gap-3">
                <a href="#" class="text-white">
                    About
                </a>
                <a href="#" class="text-white">
                    Projects
                </a>
                <a href="#" class="text-white">
                    Team
                </a>
                <a href="#" class="text-white">
                    Contact Us
                </a>
            </div>
            <div class="flex flex-col gap-3">
                <a href="#" class="text-white">
                    Instagram
                </a>
                <a href="#" class="text-white">
                    X
                </a>
                <a href="#" class="text-white">
                    Facebook
                </a>
            </div>
        </div>
    </footer>



    {{-- cdn gsap & lenis start --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/TextPlugin.min.js"></script>
    <script src="https://unpkg.com/lenis@1.1.18/dist/lenis.min.js"></script>
    {{-- cdn gsap & lenis end --}}
</body>

</html>
