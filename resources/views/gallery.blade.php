<x-layouts.layout>
    <x-slot:title>
        metri | gallery
    </x-slot:title>

    <x-slot:vite>
        @vite(['resources/js/service.js', 'resources/css/app.css'])
    </x-slot:vite>

    <main class="overflow-x-hidden">
        <x-layouts-service.navbar-services />

        <section class="flex flex-col justify-center w-full min-h-screen lg:container">
            <div class="mx-4 md:mx-8">
                <div class="flex flex-col gap-4">
                    <h2 class="text-3xl md:text-4xl text-white">Gallery</h2>
                    <p class="text-lg text-white md:text-xl">A series of project and campaigns that we have worked on for various brands and clients.</p>
                </div>
            </div>
        </section>

        <section class="flex flex-col w-full lg:container">
            <div class="mx-4 md:mx-8">
                <div class="flex flex-row mb-4 flex-wrap gap-2">
                    @php
                        $services = [
                            'metri_design_posts' => 'Metri Design',
                            'metri_digital_posts' => 'Metri Digital',
                            'metri_entertainment_posts' => 'Metri Entertainment',
                            'metri_event_posts' => 'Metri Events',
                            'metri_film_equipment_posts' => 'Tang Ting',
                            'metri_film_posts' => 'Metri Film',
                            'metri_post_posts' => 'Metri Post'
                        ];
                    @endphp
            
                    <!-- Tombol Semua Projects -->
                    <a href="{{ route('gallery') }}" 
                        class="px-4 py-1 rounded-lg transition-all duration-300 cursor-pointer 
                            {{ request('filter') ? 'bg-white/10 text-white' : 'bg-white text-[#00413D]' }}">
                        All Projects
                    </a>
            
                    @foreach ($services as $key => $name)
                        <a href="{{ route('gallery', ['filter' => $key]) }}" 
                            class="px-4 py-1 rounded-lg transition-all duration-300 cursor-pointer 
                                {{ request('filter') == $key ? 'bg-white text-[#00413D]' : 'bg-white/10 text-white' }}">
                            {{ $name }}
                        </a>
                    @endforeach
                </div>
            </div>
            <!-- Grid Projects -->
            <div class="grid grid-cols-1 gap-6 mx-4 md:mx-8 mt-8 md:grid-cols-2 lg:grid-cols-3">
                @isset($projectsPaginated)
                    @forelse ($projectsPaginated as $project)
                        <div class="relative overflow-hidden rounded-lg h-96 flex flex-col bg-gray-900 group">
                            <!-- Image -->
                            <div class="w-full h-2/3">
                                <img src="{{ asset('storage/' . $project->image) }}" 
                                    alt="{{ $project->title }}" 
                                    class="object-cover w-full h-full rounded-t-lg aspect-[4/3]">
                            </div>

                            <!-- Overlay & Content -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-100"></div>
                            
                            <div class="p-2.5 absolute bottom-0 left-0 right-0">
                                <h2 class="text-lg font-semibold text-white">{{ $project->title }}</h2>
                                <p class="text-sm text-gray-300">{{ Str::limit(strip_tags($project->content), 80) }}</p>
                                <a href="{{ route('detail', ['slug' => $project->slug]) }}"
                                    class="inline-block px-4 py-2 mt-3 text-sm text-white transition bg-white bg-opacity-20 rounded-lg hover:bg-gray-500">
                                    VIEW PROJECT
                                </a>
                            </div>
                        </div>
                    @empty
                        <p class="text-white text-center col-span-3">No projects available.</p>
                    @endforelse
                @endisset
            </div>

            <!-- Pagination -->
            @if ($projectsPaginated->lastPage() > 1)
                <div class="flex flex-col items-center mt-8 space-y-2">
                    <!-- Tombol Pagination -->
                    <div>
                        {!! $projectsPaginated->links('pagination::tailwind') !!}
                    </div>

                    <!-- Info Pagination -->
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
