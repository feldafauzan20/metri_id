<x-layouts.layout>
    <x-slot:title>
        metri | event
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
                        <a href=""><img src="{{ asset('images/logo/logo-metri-event.webp') }}" alt=""
                                class="w-[300px] lg:w-[600px]"></a>
                        <h2 class="lg:text-5xl text-2xl md:text-3xl font-bold text-white pb-4">
                            Craft and Build Your Event Whilst Focusing on The Message of the Event
                        </h2>
                        <div class="w-full md:w-11/12 text-sm md:text-base lg:text-lg text-white">
                            <p>We ensure that your event runs smoothly and is well-packaged without overlooking the
                                message it carries.</p>
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
            @if((is_array($video) && !empty($video)) || (is_array($youtube_link) && !empty($youtube_link)))
                @if(is_array($youtube_link))
                    @foreach($youtube_link as $link)
                        {{-- Tampilkan Video YouTube --}}
                        <iframe class="w-full h-[500px] pb-10 object-contain" src="{{ $link }}" frameborder="0" allowfullscreen></iframe>
                    @endforeach
                @endif

                @if(is_array($video))
                    @foreach($video as $vid)
                        {{-- Tampilkan Video dari Database --}}
                        <video class="object-cover w-full h-full" autoplay loop playsinline muted>
                            <source src="{{ asset('storage/' . $vid) }}" type="video/mp4">
                        </video>
                    @endforeach
                @endif
            @else
                {{-- Jika tidak ada video di database, tampilkan placeholder --}}
                <p class="text-center text-gray-400">Tidak ada video tersedia.</p>
            @endif
        </section>
        {{-- Video end --}}



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
        <section class="container mx-auto my-32 px-4">
            <div class="grid grid-cols-1 gap-6 mx-4 md:mx-8 mt-8 md:grid-cols-2 lg:grid-cols-3">
                @forelse ($projects as $project)
                    <div class="relative overflow-hidden rounded-lg h-96 group">
                        <img src="{{ asset('storage/' . $project->image) }}" 
                            alt="{{ $project->title }}" 
                            class="object-cover w-full h-full rounded-lg">
        
                        <div class="absolute bottom-0 left-0 right-0 p-4 text-white bg-gradient-to-t from-black/60 to-transparent">
                            <div class="flex flex-col items-start transition-all duration-300 translate-y-0 lg:translate-y-10 lg:group-hover:translate-y-0">
                                <p class="text-2xl font-medium text-center text-white">{{ $project->title }}</p>
                                <h3 class="text-white text-[10px] font-extralight">{{ Str::limit($project->content, 80) }}</h3>
                                <a href="{{ route('detail', ['slug' => $project->slug]) }}"
                                    class="px-4 py-2 mt-2 text-white transition-all duration-300 bg-white bg-opacity-50 rounded-lg opacity-100 md:opacity-100 lg:opacity-0 lg:group-hover:opacity-100 font-ibm hover:bg-gray-500">
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
