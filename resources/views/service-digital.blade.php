<x-layouts.layout>
    <x-slot:title>
        Metri Digital | Grow Your Brand Visibility & Digital Presence
    </x-slot:title>

    <x-slot:vite>
        @vite(['resources/js/service.js', 'resources/css/app.css'])
    </x-slot:vite>

    <main>
        <x-layouts-service.navbar-services />

        {{-- HERO START --}}
        <section aria-label="Main Section: Grow Your Digital Presence">
            <div class="hero min-h-screen">
                <div class="hero-content text-center">
                    <div class="w-full flex flex-col items-center">
                        <a wire:navigate href="/" target="_self"
                            aria-label="Metri Digital Logo - Digital Marketing Agency">
                            <img src="{{ asset('images/logo/logo-metri-digital.webp') }}"
                                alt="Metri Digital Logo - Digital Marketing Agency" class="w-[300px] lg:w-[600px]">
                        </a>
                        <h1 class="lg:text-5xl text-2xl md:text-3xl font-bold text-white pb-4">
                            Grow and Develop Your Brand Visibility and Digital Presence with Our Meticulous Method
                        </h1>
                        <div class="w-full md:w-11/12 text-sm md:text-base text-white">
                            <p>With the right digital marketing strategy, we enhance your brand's digital presence and
                                visibility in the online community.</p>
                        </div>
                        <div class="w-full justify-center text-base flex text-white py-6 font-ibm font-medium">
                            <div class="flex items-center">
                                <p class="px-4">LEARN MORE</p>
                            </div>
                            <a wire:navigate href="#video"
                                class="w-12 h-12 flex items-center justify-center border-2 border-white rounded-full text-white hover:bg-white hover:text-gray-600 transition-all duration-300 ease-in-out"
                                aria-label="Scroll to Video Section">
                                <i class="fas fa-arrow-down text-lg"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- HERO END --}}

        {{-- Video start --}}
        <section class="w-full" id="video" aria-label="Video Section: Metri Digital Showcase">
            @if ((is_array($video) && !empty($video)) || (is_array($youtube_link) && !empty($youtube_link)))
                @if (is_array($youtube_link))
                    @foreach ($youtube_link as $link)
                        {{-- Display YouTube Video --}}
                        <div class="w-full h-[500px] pb-10">
                            <iframe class="w-full h-full object-contain" src="{{ $link }}"
                                title="Metri Digital Marketing Video" frameborder="0" allowfullscreen></iframe>
                        </div>
                    @endforeach
                @endif

                @if (is_array($video))
                    @foreach ($video as $vid)
                        {{-- Display Video from Database --}}
                        <video class="object-cover w-full h-full" autoplay loop playsinline muted
                            title="Metri Digital Services Video">
                            <source src="{{ asset('storage/' . $vid) }}" type="video/mp4">
                        </video>
                    @endforeach
                @endif
            @else
                {{-- If no video in database, display placeholder --}}
                <p class="text-center text-gray-400">No video available.</p>
            @endif
        </section>
        {{-- Video end --}}

        {{-- PORTO START --}}
        <section class="lg:mx-4" id="portfolio" aria-label="Portfolio Section: Metri Digital's Best Works">
            <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-4 lg:mx-auto mx-4 lg:py-20 py-10">
                <img src="{{ asset('storage/' . $photo_1) }}" alt="Portfolio: Airplane - Metri Digital"
                    class="col-span-1 row-span-2 w-full h-full object-cover rounded-lg" loading="lazy">

                <img src="{{ asset('storage/' . $photo_2) }}" alt="Portfolio: Mountain - Metri Digital"
                    class="col-span-1 row-span-1 w-full h-full object-cover rounded-lg" loading="lazy">

                <img src="{{ asset('storage/' . $photo_3) }}" alt="Portfolio: Piano - Metri Digital"
                    class="col-span-1 row-span-2 w-full h-full object-cover rounded-lg" loading="lazy">

                <img src="{{ asset('storage/' . $photo_4) }}" alt="Portfolio: Sunset - Metri Digital"
                    class="col-span-1 row-span-2 w-full h-full object-cover rounded-lg" loading="lazy">

                <img src="{{ asset('storage/' . $photo_5) }}" alt="Portfolio: Portrait - Metri Digital"
                    class="col-span-1 row-span-2 w-full h-full object-cover rounded-lg" loading="lazy">
            </div>
        </section>
        {{-- PORTO END --}}

        {{-- PROJECT START --}}
        <section class="my-32 px-4" id="proyek" aria-label="Projects Section: Metri Digital's Recent Projects">
            <div class="w-full px-4 md:px-8 lg:flex lg:justify-end">
                <a wire:navigate href="/gallery" target="_self" class="flex items-center space-x-2 group text-white"
                    aria-label="See More Projects">
                    <span class=" group-hover:border-gray-300 transition duration-300">See more...</span>
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-4 h-4 group-hover:translate-x-1 transition duration-300" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>

            <div class="grid grid-cols-1 gap-6 mx-4 md:mx-8 mt-8 md:grid-cols-2 lg:grid-cols-3">
                @forelse ($projects as $project)
                    <div class="relative overflow-hidden rounded-lg h-96 group"
                        aria-label="Project: {{ $project->title }}">
                        <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}"
                            class="object-cover w-full h-full rounded-lg">

                        <div
                            class="absolute bottom-0 left-0 right-0 p-4 text-white bg-gradient-to-t from-black/60 to-transparent">
                            <div
                                class="flex flex-col items-start transition-all duration-300 translate-y-0 lg:translate-y-10 lg:group-hover:translate-y-0">
                                <p class="text-2xl font-medium text-center text-white">{{ $project->title }}</p>
                                <h3 class="text-white text-[10px] font-extralight">
                                    {{ Str::limit(strip_tags($project->content), 80) }}
                                </h3>
                                <a wire:navigate href="{{ route('detail', ['slug' => $project->slug]) }}"
                                    target="_self"
                                    class="px-4 py-2 mt-2 text-white transition-all duration-300 bg-white bg-opacity-50 rounded-lg opacity-100 md:opacity-100 lg:opacity-0 lg:group-hover:opacity-100 font-ibm hover:bg-gray-500"
                                    aria-label="View Project {{ $project->title }}">
                                    VIEW PROJECT
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-white text-center col-span-3">No projects available.</p>
                @endforelse
            </div>
        </section>
        {{-- PROJECT END --}}

        {{-- CONTACT FORM START --}}
        <x-layouts.contact-form />
        {{-- CONTACT FORM END --}}

    </main>
</x-layouts.layout>
<!-- Google Analytics 4 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXX"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-XXXXXX');
</script>
