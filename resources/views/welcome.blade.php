<x-layouts.layout>
    @section('vite')
        @vite(['resources/js/main.js', 'resources/css/app.css'])
    @endsection

    <main class="h-full min-h-screen overflow-x-hidden">
        <section class="absolute top-0 left-0 w-full px-[100px] py-[30px] flex justify-between items-center z-[100]">
            <div>
                <a href="#" class="logo">
                    <img src="{{ asset('images/logo/logo-putih-baru.webp') }}" alt="" width="150" />
                </a>
            </div>
            <div class="min-h-min">
                <nav class="flex navigation">
                    <a href="" class="active a-nav">ABOUT</a>
                    <a href="" class="a-nav">COMMUNITY</a>
                    <a href="" class="a-nav">OUR PARTNERS</a>
                    <a href="" class="a-nav">CONTACT</a>
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
        </section>

        <section class="relative w-full h-screen -mt-10 overflow-hidden  mysteps">
            <div class="step-counter w-full relative flex px-[2em] flex-row m-[2em] justify-between items-center">
                <div class="counter-title relative h-[150px] overflow-hidden w-full flex flex-col items-center">
                    <h2
                        class="w-max relative text-white font-jakarta font-normal text-xl will-change-transform text-center rounded-3xl outline outline-2 outline-[#E1E1E1] p-2 mt-2">
                        Our services
                    </h2>
                    <p class="pt-8 text-3xl font-medium text-center text-white">Here's <span class="text-[#67fbf8]">our
                            services</span> that
                        may helps</p>
                    <p class="text-3xl font-medium text-center text-white">with ur business</p>
                </div>
            </div>

            <div
                class="cards absolute top-[25%] left-1/2 -translate-x-1/2 -translate-y-1/2 w-[150vw] h-fit will-change-transform mt-[300px]">
                <a href="">
                    <div
                        class="card absolute w-[500px] h-[550px] left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 origin-center flex flex-col gap-4 will-change-transform">
                        <div class="flex-1 overflow-hidden rounded-md card-img">
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
                <a href="">
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
                <a href="">
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
                <a href="">
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
                <a href="">
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
                <a href="">
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
                <a href="">
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

        <section class="items-center justify-center w-full  pb-28 customer-support">
            <div class="container flex flex-col items-center w-full pt-4 overflow-hidden">
                <div class="flex flex-col items-center w-full">
                    <p
                        class="text-white max-w-lg w-fit font-jakarta font-normal text-xl text-center rounded-3xl outline outline-2 outline-[#E1E1E1] p-2 mt-2">
                        Customer support
                    </p>
                    <h2 class="pt-8 text-4xl font-semibold text-white">Manage customer queries</h2>
                    <h2 class="text-4xl font-semibold text-white">in seconds with metri</h2>
                </div>

                <div class="container flex items-center justify-center h-full my-10">
                    <div class="mx-4 text-center">
                        <h2 class="text-4xl font-semibold text-white"><span class="cs-text1">‎</span>%</h2>
                        <p class="pt-4 text-white">Of customers said using Flinta helped them to better service
                            clients.
                        </p>
                    </div>
                    <div class="mx-4 text-center">
                        <h2 class="text-4xl font-semibold text-white">'<span class="cs-text2">‎</span></h2>
                        <p class="pt-4 text-white">Founded in 2024, we're on a growth journey focused on innovation.
                        </p>
                    </div>
                    <div class="mx-4 text-center">
                        <h2 class="text-4xl font-semibold text-white"><span class="cs-text3">‎</span>+</h2>
                        <p class="pt-4 text-white">Average monthly clients since we launched in June 2023.</p>
                    </div>
                    <div class="mx-4 text-center">
                        <h2 class="text-4xl font-semibold text-white"><span class="cs-text4">‎</span>+</h2>
                        <p class="pt-4 text-white">Of tickets left unresolved using metri's advanced functionality.</p>
                    </div>
                </div>

                <div class="flex flex-col items-center w-full">
                    <h2 class="text-xl font-medium text-center text-white">Explore our Advance System Functionality and
                        Experience
                        the Difference</h2>
                    <h2 class="text-xl font-medium text-center text-white">with metri.</h2>
                </div>
            </div>
        </section>

        <section class="w-full h-[500px]">
            <video class="object-fill w-full h-full" autoplay loop muted>
                <source src="{{ Vite::asset('resources/assets/placeholder.mp4') }}" type="video/mp4">
            </video>
        </section>

        <div class="flex flex-row items-center w-full bg-[#056251]">
            <p class="px-10 text-lg font-thin text-white whitespace-nowrap">
                Our partners
            </p>
            <div class="w-auto overflow-hidden fade">
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

        <section class="w-full pt-10 ">
            <div class="flex flex-col justify-center h-full gap-5 px-10">
                <h2 class="py-1 font-thin text-white px-7 w-max font-jakarta rounded-3xl outline outline-1">
                    Our clients
                </h2>
                <div class="flex w-full">
                    <p class="w-1/2 text-3xl text-white font-jakarta">
                        See what our clients have to say about partnering with us on several projects
                    </p>
                    <div class="flex flex-row items-center justify-end w-1/2 overflow-hidden gap-x-3">
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
                <div class="w-full swiper">
                    <div class="swiper-wrapper my-14">
                        @foreach (range(1, 60) as $i)
                            <div class="flex justify-center swiper-slide">
                                <div class="flex flex-col items-center w-full gap-5">
                                    <img src="{{ asset('images/service2.webp') }}"
                                        class="w-20 h-20 bg-white rounded-full aspect-square">
                                    <img src="{{ asset('images/service2.webp') }}"
                                        class="w-20 h-20 bg-white rounded-full aspect-square">
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
                    <h2>Start your brand experience transformation now</h2>
                </div>
                <div class="flex items-center justify-end w-1/2 gap-x-5">
                    <button
                        class="w-1/3 text-xl font-normal text-white bg-transparent rounded-full btn outline-white outline font-ibm outline-2 hover:outline-1">CONTACT
                        US</button>
                    <button
                        class="w-1/3 text-xl font-normal text-[#00413D] bg-white rounded-full btn font-ibm hover:text-white">CONTACT
                        US</button>
                </div>
            </div>

        </section>
    </main>
</x-layouts.layout>
