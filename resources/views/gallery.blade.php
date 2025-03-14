<x-layouts.layout>
    <x-slot:title>
        metri gallery | Project & Campaign Portfolio
    </x-slot:title>

    <x-slot:meta>
        <meta name="description"
            content="Explore Metri's gallery of diverse projects and campaigns. See our work in design, digital, entertainment, events, film, and post-production. View our portfolio today!">
        <meta name="keywords"
            content="Metri gallery, project portfolio, campaign portfolio, design projects, digital projects, entertainment projects, event projects, film projects, post-production projects, creative agency portfolio">
        <meta property="og:title" content="Metri Gallery | Project & Campaign Portfolio">
        <meta property="og:description"
            content="Explore Metri's gallery of diverse projects and campaigns. See our work in design, digital, entertainment, events, film, and post-production. View our portfolio today!">
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ request()->url() }}">
        <meta property="og:image" content="{{ asset('images/logo/logo-metri-design.webp') }}">
    </x-slot:meta>

    <x-slot:vite>
        @vite(['resources/js/service.js', 'resources/css/app.css'])
    </x-slot:vite>

    <main class="overflow-x-hidden">
        <x-layouts-service.navbar-services />

        <section class="flex flex-col justify-center w-full h-full my-40">
            <div class="mx-4 md:mx-8 h-full">
                <div class="flex flex-col gap-4">
                    <h1 class="text-3xl md:text-4xl text-white" itemprop="headline">Gallery</h1>
                    <p class="text-lg text-white md:text-xl" itemprop="description">A series of project and campaigns
                        that we have worked on for various brands and clients.</p>
                </div>
            </div>
        </section>

        <section class="flex flex-col w-full">
            <div class="mx-4 md:mx-8">
                <div class="flex flex-row mb-4 flex-wrap gap-2">
                    @php
                        $services = [
                            'metri_design_posts' => 'metri design',
                            'metri_digital_posts' => 'metri digital',
                            'metri_entertainment_posts' => 'metri entertainment',
                            'metri_event_posts' => 'metri events',
                            'metri_film_equipment_posts' => 'tang ting',
                            'metri_film_posts' => 'metri film',
                            'metri_post_posts' => 'metri post',
                        ];
                    @endphp

                    <a wire:navigate target="_self" href="{{ route('gallery') }}"
                        class="px-4 py-1 rounded-lg transition-all duration-300 cursor-pointer 
                            {{ request('filter') ? 'bg-white/10 text-white' : 'bg-white text-[#00413D]' }}"
                        itemprop="url">
                        All Projects
                    </a>

                    @foreach ($services as $key => $name)
                        <a wire:navigate target="_self" href="{{ route('gallery', ['filter' => $key]) }}"
                            class="px-4 py-1 rounded-lg transition-all duration-300 cursor-pointer 
                                {{ request('filter') == $key ? 'bg-white text-[#00413D]' : 'bg-white/10 text-white' }}"
                            itemprop="url">
                            {{ $name }}
                        </a>
                    @endforeach
                </div>
            </div>

            <div class="grid grid-cols-1 gap-6 mx-4 md:mx-8 mt-8 md:grid-cols-2 lg:grid-cols-3" itemprop="itemList"
                itemscope itemtype="http://schema.org/ItemList">
                @isset($projectsPaginated)
                    @forelse ($projectsPaginated as $project)
                        <div class="relative overflow-hidden rounded-lg h-96 group" itemprop="itemListElement" itemscope
                            itemtype="http://schema.org/ListItem">
                            <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}"
                                class="object-cover w-full h-full rounded-lg" itemprop="image">

                            <div
                                class="absolute bottom-0 left-0 right-0 p-4 text-white bg-gradient-to-t from-black/60 to-transparent">
                                <div
                                    class="flex flex-col items-start transition-all duration-300 translate-y-0 lg:translate-y-10 lg:group-hover:translate-y-0">
                                    <p class="text-2xl font-medium text-white" itemprop="name">{{ $project->title }}</p>
                                    <h3 class="text-white text-[10px] md:text-base font-extralight" itemprop="description">
                                        {{ strip_tags(Str::limit($project->content, 40)) }}
                                    </h3>
                                    <a target="_self" wire:navigate
                                        href="{{ route('detail', ['slug' => $project->slug]) }}"
                                        class="px-4 py-2 mt-2 text-white transition-all duration-300 bg-white bg-opacity-50 rounded-lg opacity-100 md:opacity-100 lg:opacity-0 lg:group-hover:opacity-100 font-ibm hover:bg-gray-500"
                                        itemprop="url">
                                        VIEW PROJECT
                                    </a>
                                </div>
                            </div>
                            <meta itemprop="position" content="{{ $loop->iteration }}" />
                        </div>
                    @empty
                        <p class="text-white text-center col-span-3">No projects available.</p>
                    @endforelse
                @endisset
            </div>

            @if ($projectsPaginated->lastPage() > 1)
                <div class="flex flex-col items-center mt-8 space-y-2">
                    <div>
                        {!! $projectsPaginated->links('pagination::tailwind') !!}
                    </div>
                    <p class="text-sm text-gray-400 text-center pt-2">
                        Showing
                        <span class="font-semibold">{{ $projectsPaginated->firstItem() }}</span>
                        to
                        <span class="font-semibold">{{ $projectsPaginated->lastItem() }}</span>
                        of
                        <span class="font-semibold">{{ $projectsPaginated->total() }}</span>
                        results
                    </p>
                </div>
            @endif
        </section>
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
