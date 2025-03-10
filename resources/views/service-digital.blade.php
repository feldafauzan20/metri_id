<x-layouts.layout>
    <x-slot:title>
        metri | digital
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
                        <a href=""><img src="{{ asset('images/logo/logo-metri-digital.webp') }}" alt=""
                                class="w-[300px] lg:w-[600px]"></a>
                        <h2 class="lg:text-5xl text-2xl md:text-3xl font-bold text-white pb-4">
                            Grow and Develop Your Brand Visibility and Digital Presence with Our Meticulous Method
                        </h2>
                        <div class="w-full md:w-11/12 text-sm md:text-base text-white">
                            <p>With the right digital marketing strategy, we enhance your brand's digital presence and
                                visibility in the online community.</p>
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
                @if(isset($projects) && $projects->isNotEmpty())
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:auto-rows-fr bg-orange-600">
                        @foreach ($projects as $project)
                            <div class="card">
                                <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}">
                                <h3>{{ $project->title }}</h3>
                                <p>{{ Str::limit($project->content, 100) }}</p>
                                <a href="{{ url('/projects/' . $project->slug) }}">Read More</a>
                            </div>
                        @endforeach
                    </div>
                @else
                    {{-- Menengahkan teks secara vertikal & horizontal --}}
                    <div class="flex justify-center items-center h-[300px] md:h-[400px]">
                        <p class="text-center text-white text-lg font-semibold">Tidak ada project tersedia.</p>
                    </div>
                @endif
            </section>
            {{-- PROJECT END --}}

        {{-- CONTACT FORM START --}}
        <x-layouts.contact-form />

        {{-- CONTACT FORM END --}}






    </main>
</x-layouts.layout>
