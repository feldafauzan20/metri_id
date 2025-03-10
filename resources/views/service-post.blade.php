<x-layouts.layout>
    <x-slot:title>
        metri | post
    </x-slot:title>

    <x-slot:vite>
        @vite(['resources/js/service.js', 'resources/css/app.css'])
    </x-slot:vite>
    <main>
        <x-layouts-service.navbar-services />

        {{-- HERO START --}}
        <section>
            <div class="hero min-h-screen">
                <div class="hero-content text-center">
                    <div class="w-full flex flex-col items-center">
                        <a href=""><img src="{{ asset('images/logo/logo-metri-post.webp') }}" alt=""
                                class="w-[300px] lg:w-[600px]"></a>
                        <h2 class="lg:text-5xl text-2xl md:text-3xl font-bold text-white pb-4">
                            Refining Your Audio and Visual Story to Make It Even More Stand Out
                        </h2>
                        <div class="w-full md:w-11/12 text-sm md:text-base lg:text-xl text-white">
                            <p>We refine your audiovisual work to make it more impactful and enjoyable.</p>
                        </div>
                        <div class="w-full justify-center text-base flex text-white py-6 font-ibm font-medium">
                            <div class="flex items-center">
                                <p class="px-4">LEARN MORE</p>
                            </div>
                            <a href="#video"
                                class="w-12 h-12 flex items-center justify-center border-2 border-white rounded-full text-white hover:bg-white hover:text-gray-600 transition-all duration-300 ease-in-out">
                                <i class="fas fa-arrow-down text-lg"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- HERO END --}}

        {{-- Video start --}}
        <section class="w-full" id="video">
            <video class="object-cover w-full h-full" autoplay loop muted>
                <source src="{{ asset('storage/' . $video) }}" type="video/mp4">
            </video>
        </section>
        {{-- Video end --}}

        {{-- TAGLINE START --}}
        {{-- <section class="container lg:py-20 pt-5">
            <div class="lg:w-[60%] mx-4">
                <h2 class="lg:text-4xl md:text-2xl text-lg text-white">A Fusion of Form and Function in Customers’ Needs
                </h2>
                <p class="lg:pt-5 pt-2 text-white text-sm md:text-base font-extralight">We ensures products seamlessly
                    integrate into
                    users’
                    needs. Form
                    evokes emotions and aesthetic appeal, while function ensures efficiency and usability.</p>
            </div>
        </section> --}}
        {{-- TAGLINE END --}}

        {{-- PORTO START --}}
        <section class="container">
            <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-4 lg:mx-auto mx-4 lg:py-20 py-10">
                <img src="{{ asset('storage/' . $photo_1) }}" alt="Airplane"
                    class="col-span-1 row-span-2 w-full h-full object-cover rounded-lg">

                <img src="{{ asset('storage/' . $photo_2) }}" alt="Mountain"
                    class="col-span-1 row-span-1 w-full h-full object-cover rounded-lg">

                <img src="{{ asset('storage/' . $photo_3) }}" alt="Piano"
                    class="col-span-1 row-span-2 w-full h-full object-cover rounded-lg">

                <img src="{{ asset('storage/' . $photo_4) }}" alt="Sunset"
                    class="col-span-1 row-span-2 w-full h-full object-cover rounded-lg">

                <img src="{{ asset('storage/' . $photo_5) }}" alt="Portrait"
                    class="col-span-1 row-span-2 w-full h-full object-cover rounded-lg">
            </div>

        </section>
        {{-- PORTO END --}}

        {{-- PROJECT START --}}
        <section class="container mx-auto mt-14 px-4 md:px-7">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:auto-rows-fr">
                <!-- Card 1 -->
                <div class="relative group overflow-hidden rounded-lg">
                    <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp"
                        alt="Project Image" class="w-full h-auto object-cover rounded-lg">
                    <div
                        class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/60 to-transparent p-4 text-white">
                        <div
                            class="flex flex-col items-start transition-all duration-300 translate-y-0 lg:translate-y-10 lg:group-hover:translate-y-0">
                            <p class="text-center text-white text-xs font-medium">Brand Ipsum</p>
                            <h3 class="text-white text-2xl font-extralight">Ipsum Ad</h3>
                            <a href=""
                                class="opacity-100 md:opacity-100 lg:opacity-0 lg:group-hover:opacity-100 transition-all duration-300 bg-white bg-opacity-50 px-4 py-2 mt-2 rounded-lg font-ibm text-white hover:bg-gray-500">
                                VIEW PROJECT
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="relative group overflow-hidden rounded-lg">
                    <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp"
                        alt="Project Image" class="w-full h-auto object-cover rounded-lg">
                    <div
                        class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/60 to-transparent p-4 text-white">
                        <div
                            class="flex flex-col items-start transition-all duration-300 translate-y-0 lg:translate-y-10 lg:group-hover:translate-y-0">
                            <p class="text-center text-white text-xs font-medium">Brand Ipsum</p>
                            <h3 class="text-white text-2xl font-extralight">Ipsum Ad</h3>
                            <a href=""
                                class="opacity-100 md:opacity-100 lg:opacity-0 lg:group-hover:opacity-100 transition-all duration-300 bg-white bg-opacity-50 px-4 py-2 mt-2 rounded-lg font-ibm text-white hover:bg-gray-500">
                                VIEW PROJECT
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="relative group overflow-hidden rounded-lg">
                    <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp"
                        alt="Project Image" class="w-full h-auto object-cover rounded-lg">
                    <div
                        class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/60 to-transparent p-4 text-white">
                        <div
                            class="flex flex-col items-start transition-all duration-300 translate-y-0 lg:translate-y-10 lg:group-hover:translate-y-0">
                            <p class="text-center text-white text-xs font-medium">Brand Ipsum</p>
                            <h3 class="text-white text-2xl font-extralight">Ipsum Ad</h3>
                            <a href=""
                                class="opacity-100 md:opacity-100 lg:opacity-0 lg:group-hover:opacity-100 transition-all duration-300 bg-white bg-opacity-50 px-4 py-2 mt-2 rounded-lg font-ibm text-white hover:bg-gray-500">
                                VIEW PROJECT
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        {{-- PROJECT END --}}

        {{-- CONTACT FORM START --}}
        <x-layouts.contact-form />

        {{-- CONTACT FORM END --}}






    </main>
</x-layouts.layout>
