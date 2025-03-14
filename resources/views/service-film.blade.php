<x-layouts.layout>
    <x-slot:title>
        Metri Films | Crafting Cinematic Stories for Every Audience
    </x-slot:title>

    <x-slot:vite>
        @vite(['resources/js/service.js', 'resources/css/app.css'])
    </x-slot:vite>

    <main>
        <x-layouts-service.navbar-services />

        {{-- HERO START --}}
        <section aria-label="Main Section: Film Production and Storytelling">
            <div class="hero min-h-screen">
                <div class="hero-content text-center">
                    <div class="w-full flex flex-col items-center">
                        <a wire:navigate href="/" target="_self" aria-label="Metri Films Logo">
                            <img src="{{ asset('images/logo/logo-metri-film.webp') }}"
                                alt="Metri Films Logo - Professional Film Production Services"
                                class="w-[300px] lg:w-[600px]">
                        </a>
                        <h1 class="lg:text-5xl text-2xl md:text-3xl font-bold text-white pb-4">
                            Every Frame is A Painting; We Meticulously Build Stories for Wide genres and Audiences
                        </h1>
                        <div class="w-full md:w-11/12 text-sm md:text-base lg:text-lg text-white">
                            <p>We don’t just write stories; we build stories into their own worlds, loved by a wide
                                audience.</p>
                        </div>
                        <div class="w-full justify-center text-base flex text-white py-6 font-ibm font-medium">
                            <div class="flex items-center">
                                <p class="px-4">LEARN MORE</p>
                            </div>
                            <a wire:navigate href="#video"
                                class="w-12 h-12 flex items-center justify-center border-2 border-white rounded-full text-white hover:bg-white hover:text-gray-600 transition-all duration-300 ease-in-out"
                                aria-label="Scroll to Film Showcase Video">
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
            @if ((is_array($video) && !empty($video)) || (is_array($youtube_link) && !empty($youtube_link)))
                {{-- YouTube Embed Videos --}}
                @if (is_array($youtube_link))
                    @foreach ($youtube_link as $link)
                        {{-- Tampilkan Video YouTube --}}
                        <div itemprop="video" itemscope itemtype="http://schema.org/VideoObject">
                            <meta itemprop="name" content="Metri Film Showcase Video">
                            <meta itemprop="description" content="Showcase of Metri Film's creative design videos.">
                            <meta itemprop="uploadDate" content="{{ now()->toIso8601String() }}">
                            <meta itemprop="embedUrl" content="{{ $link }}">

                            {{-- Add autoplay to YouTube embed link --}}
                            <iframe class="w-full h-[50rem] pb-10 object-contain"
                                src="{{ $link }}?autoplay=1&modestbranding=1&rel=0&mute=1&playsinline=1"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen>
                            </iframe>
                        </div>
                    @endforeach
                @endif

                {{-- Local Videos from Database --}}
                @if (is_array($video))
                    @foreach ($video as $vid)
                        {{-- Tampilkan Video dari Database --}}
                        <div itemprop="video" itemscope itemtype="http://schema.org/VideoObject">
                            <meta itemprop="name" content="Metri Film Showcase Video">
                            <meta itemprop="description" content="Showcase of Metri Film's creative design videos.">
                            <meta itemprop="uploadDate" content="{{ now()->toIso8601String() }}">
                            <meta itemprop="contentUrl" content="{{ asset('storage/' . $vid) }}">

                            <video class="object-cover w-full h-full" autoplay loop playsinline muted>
                                <source src="{{ asset('storage/' . $vid) }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    @endforeach
                @endif
            @else
                {{-- Jika tidak ada video di database, tampilkan placeholder --}}
                <p class="text-center text-gray-400">No video available.</p>
            @endif
        </section>
        {{-- Video end --}}

        {{-- PORTO START --}}
        <section class="lg:mx-4" id="portfolio" aria-label="Film Portfolio Section">
            <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-4 lg:mx-auto mx-4 lg:py-20 py-10">
                <img src="{{ asset('storage/' . $photo_1) }}" alt="Film Portfolio: Project 1"
                    class="col-span-1 row-span-2 w-full h-full object-cover rounded-lg" loading="lazy">

                <img src="{{ asset('storage/' . $photo_2) }}" alt="Film Portfolio: Project 2"
                    class="col-span-1 row-span-1 w-full h-full object-cover rounded-lg" loading="lazy">

                <img src="{{ asset('storage/' . $photo_3) }}" alt="Film Portfolio: Project 3"
                    class="col-span-1 row-span-2 w-full h-full object-cover rounded-lg" loading="lazy">

                <img src="{{ asset('storage/' . $photo_4) }}" alt="Film Portfolio: Project 4"
                    class="col-span-1 row-span-2 w-full h-full object-cover rounded-lg" loading="lazy">

                <img src="{{ asset('storage/' . $photo_5) }}" alt="Film Portfolio: Project 5"
                    class="col-span-1 row-span-2 w-full h-full object-cover rounded-lg" loading="lazy">
            </div>
        </section>
        {{-- PORTO END --}}

        {{-- PROJECT START --}}
        <section class="my-32 px-4" id="proyek" aria-label="Recent Film Projects Section">
            <div class="w-full px-4 md:px-8 lg:flex lg:justify-end">
                <a wire:navigate href="/gallery" target="_self" class="flex items-center space-x-2 group text-white"
                    aria-label="View More Film Projects">
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
                        aria-label="Film Project: {{ $project->title }}">
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
                                    aria-label="View Film Project: {{ $project->title }}">
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
