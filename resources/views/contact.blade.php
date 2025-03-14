<x-layouts.layout>
    <x-slot:title>
        metri | contact
    </x-slot:title>

    <x-slot:vite>
        @vite(['resources/js/service.js', 'resources/css/app.css'])
    </x-slot:vite>
    <main class="overflow-x-hidden">
        <x-layouts-service.navbar-services />

        {{-- HERO START --}}
        <section class="relative lg:min-h-[30rem] md:min-h-0 h-full my-40 lg:my-0 m w-full flex flex-col justify-center">
            <div class="md:block md:container md:w-full md:mx-28">

                <div
                    class="w-[348px] md:w-[727px] h-[94px] md:h-[133px] flex flex-col justify-start items-center gap-2 mx-4">
                    <h2 class="self-stretch text-white text-2xl md:text-4xl font-normal">Hello, we are metri</h2>
                    <p class="self-stretch text-white text-[10px] font-normal block md:w-[547px] md:text-base">
                        We craft, build, grow, and develop your brand and business with our 360 services.
                        If you have any inquiry about our 360 services, don’t hesitate to reach out to us.
                    </p>
                </div>
            </div>

            <div
                class="hidden absolute bottom-6 left-1/2 -translate-x-1/2 lg:flex flex-col items-center justify-end gap-2">
                <span
                    class="text-white text-[10px] md:text-xs lg:text-xl font-medium font-ibm animate-bounce">SCROLL</span>
                <div data-svg-wrapper class="relative ">
                    <svg width="24" class="md:w-12 md:h-12" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M6 9C6 7.4087 6.63214 5.88258 7.75736 4.75736C8.88258 3.63214 10.4087 3 12 3C13.5913 3 15.1174 3.63214 16.2426 4.75736C17.3679 5.88258 18 7.4087 18 9V15C18 16.5913 17.3679 18.1174 16.2426 19.2426C15.1174 20.3679 13.5913 21 12 21C10.4087 21 8.88258 20.3679 7.75736 19.2426C6.63214 18.1174 6 16.5913 6 15V9Z"
                            stroke="white" stroke-width="2" stroke-linejoin="round" />
                        <path d="M12 7V11" stroke="white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </div>
            </div>
        </section>

        {{-- HERO END --}}

        {{-- Video start --}}
        <section class="w-full" id="video">
            @if (!empty($youtube_link) || !empty($video))
                @foreach ($youtube_link as $link)
                    <div class="pb-10">
                        <iframe class="w-full h-[50rem] object-contain" src="{{ $link }}" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                    </div>
                @endforeach

                @foreach ($video as $vid)
                    <div class="pb-10">
                        <video class="object-cover w-full h-full" autoplay loop playsinline muted>
                            <source src="{{ asset('storage/' . $vid) }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                @endforeach
            @else
                <p class="text-center text-gray-400">No video available.</p>
            @endif
        </section>
        {{-- Video end --}}

        <div class="md:grid md:grid-cols-2 lg:grid-cols-4 lg:pl-64">
            {{-- SOCIAL START --}}
            <section class="w-full mx-4 py-8">
                <div class=" flex flex-col">
                    <h2 class="text-white text-2xl lg:text-4xl font-semibold pb-3">SOCIAL</h2>
                    <div class=" flex-col justify-start items-start gap-2 inline-flex">
                        <a wire:navigate target="_self" href="https://www.instagram.com/metri_id/" target="_blank"
                            class="self-stretch text-white text-[10px] lg:text-sm font-normal font-['Plus Jakarta Sans']">INSTAGRAM</a>
                        <a wire:navigate target="_self"
                            href="https://www.linkedin.com/company/pt-media-tren-idea-metri-id/" target="_blank"
                            class="self-stretch text-white text-[10px] lg:text-sm font-normal font-['Plus Jakarta Sans']">LINKEDIN</a>
                        <a wire:navigate target="_self" href="https://x.com/metri_id/" target="_blank"
                            class="self-stretch text-white text-[10px] lg:text-sm font-normal font-['Plus Jakarta Sans']">X</a>
                        <a wire:navigate target="_self" href="https://web.facebook.com/metri.id/" target="_blank"
                            class="self-stretch text-white text-[10px] lg:text-sm font-normal font-['Plus Jakarta Sans']">Facebook</a>
                    </div>
                </div>
            </section>
            {{-- SOCIAL END --}}

            {{-- LOCATION START --}}
            <section class="w-full mx-4 pb-6 pt-12 md:pt-8">
                <div class=" flex flex-col">
                    <h2 class="text-white text-2xl lg:text-4xl  font-semibold pb-3">LOCATION</h2>
                    <div
                        class="w-48 text-white text-[10px] lg:text-sm font-medium font-['Plus Jakarta Sans'] uppercase leading-snug">
                        Jl. Potlot I No.14, Duren Tiga, Kec. Pancoran, Kota Jakarta Selatan, Daerah Khusus Ibukota
                        Jakarta
                        12760</div>
                </div>
            </section>
            {{-- LOCATION END --}}

            {{-- PHONE START --}}
            <section class="w-full mx-4 pb-6 pt-12 lg:pt-8">
                <div class=" flex flex-col">
                    <h2 class="text-white text-2xl lg:text-4xl font-semibold pb-3">PHONE</h2>
                    <div
                        class="w-48 text-white text-[10px] lg:text-sm font-medium font-['Plus Jakarta Sans'] uppercase leading-snug">
                        <p>idn + 62 212-781-4039</p>
                    </div>
                </div>
            </section>
            {{-- PHONE END --}}

            {{-- EMAIL START --}}
            <section class="w-full mx-4 lg:mx-0 pb-6 pt-12 lg:pt-8">
                <div class=" flex flex-col">
                    <h2 class="text-white text-2xl lg:text-4xl font-semibold pb-3">E-MAIL</h2>
                    <p
                        class="text-white text-[10px] lg:text-sm font-medium font-['Plus Jakarta Sans'] uppercase leading-snug">
                        hello@metri.id</p>

                </div>
            </section>
            {{-- EMAIL END --}}
        </div>


        <hr class="mx-2 lg:my-10">

        {{-- CONTACT FORM START --}}
        <x-layouts.contact-form />

        {{-- CONTACT FORM END --}}

        {{-- PROJECT START --}}
        <section class=" mt-14 px-4 md:px-7">
            <div class="grid grid-cols-1 md:flex md:justify-center gap-6">
                <!-- Card 1 -->
                <div class="relative group overflow-hidden rounded-lg">
                    <img src="{{ asset('images/Group-131.png') }}" alt="Project Image"
                        class="w-full h-full relative object-cover rounded-lg">

                    <!-- Overlay -->
                    <div
                        class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/60 to-transparent p-4 text-white">
                        <div
                            class="flex flex-col items-start transition-all duration-300 translate-y-0 lg:translate-y-10 lg:group-hover:translate-y-0">
                            <p class="text-center text-white text-2xl font-medium">BEHIND THE STUDIO</p>
                            <h3 class="text-white text-[10px] md:text-sm font-extralight">A dynamic space where
                                imagination knows
                                no
                                bounds and experimentation is celebrated.</h3>

                            <a wire:navigate target="_self" href="/about"
                                class="opacity-100 md:opacity-100 lg:opacity-0 lg:group-hover:opacity-100 transition-all duration-300 bg-white bg-opacity-50 px-4 py-2 mt-2 rounded-lg font-ibm text-white hover:bg-gray-500">
                                ABOUT US
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="relative group overflow-hidden rounded-lg">
                    <img src="{{ asset('images/Group-132.png') }}" alt="Project Image"
                        class="w-full h-full object-cover rounded-lg">

                    <!-- Overlay -->
                    <div
                        class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/60 to-transparent p-4 text-white">
                        <div
                            class="flex flex-col items-start transition-all duration-300 translate-y-0 lg:translate-y-10 lg:group-hover:translate-y-0">
                            <p class="text-center text-white text-2xl font-medium">CASE STUDIES</p>
                            <h3 class="text-white text-[10px] md:text-sm font-extralight">A collective of visionary
                                creators
                                dedicated to shaping the future through design.</h3>

                            <a wire:navigate target="_self" href="/#services"
                                class="opacity-100 md:opacity-100 lg:opacity-0 lg:group-hover:opacity-100 transition-all duration-300 bg-white bg-opacity-50 px-4 py-2 mt-2 rounded-lg font-ibm text-white hover:bg-gray-500">
                                OUR SERVICES
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- PROJECT END --}}

    </main>
</x-layouts.layout>


<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-MTPPE6EK3F"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-MTPPE6EK3F');
</script>
