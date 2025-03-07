<x-layouts.layout>
    <x-slot:title>
        metri | {{ $project->title }}
    </x-slot:title>

    <x-slot:vite>
        @vite(['resources/js/service.js', 'resources/css/app.css'])
    </x-slot:vite>
    <main class="overflow-x-hidden">
        <x-layouts-service.navbar-services />

        {{-- HERO START --}}
        <section class="relative h-full my-40 flex md:my-48 lg:min-h-[50rem] lg:my-0 items-center justify-center text-white">
            <div class="w-full h-full flex flex-col md:flex-row md:container md:mx-auto md:gap-8 mx-4">
                <!-- Bagian Kiri -->
                <div class="md:w-1/2 h-1/2 md:h-full flex items-end md:items-center p-6">
                    <h2 class="text-2xl font-light md:text-4xl">{{ $project->title }}</h2>
                </div>

                <!-- Bagian Kanan -->
                <div
                    class="md:w-1/2 h-1/2 md:h-full space-y-4 justify-end text-sm md:text-base flex flex-col md:justify-center p-6">
                    <div class="flex justify-between border-b border-white pb-3">
                        <span class="text-white">Client</span>
                        <span>{{ $project->client_name }}</span>
                    </div>
                    <div class="flex justify-between border-b border-white pb-3">
                        <span class="text-white">Year</span>
                        <span>{{ $project->year }}</span>
                    </div>
                    <div class="flex justify-between border-b border-white pb-3">
                        <span class="text-white">Category</span>
                        <span>{{ $project->category }}</span>
                    </div>
                    <div class="flex justify-between border-b border-white pb-3">
                        <span class="text-white">Industry</span>
                        <span>{{ $project->industry }}</span>
                    </div>
                </div>
            </div>
        </section>
        {{-- HERO END --}}

        {{-- Video start --}}
        @foreach ($videos as $video)
        <section class="w-full h-full" id="video">
            <video class="object-cover w-full px-4 lg:px-0 h-full" autoplay loop muted playsinline>
                <source src="{{ asset('storage/' . $video) }}" type="video/mp4">
            </video>
        </section>
        @endforeach
        {{-- Video end --}}

        {{-- Concept start --}}
        <section class="w-full h-full lg:container">
            <div class="w-full h-full py-10 px-4">
                <div class="md:flex md:w-full md:justify-center">
                    <a href="#"
                        class="border border-white px-6 py-2 rounded-full md:text-center text-white mb-4 text-sm md:text-lg lg:text-xl">
                        Concept
                    </a>
                </div>
                <div class="lg:w-full lg:flex lg:justify-center">
                    <div class="w-full lg:w-3/5">
                        <p class="mt-8 md:mt-0 text-white md:text-center text-justify text-sm md:text-xl lg:text-2xl">
                            {{ strip_tags($project->concept ?? '') }}
                        </p>
                    </div>
                </div>
            </div>
        </section>
        {{-- Concept end --}}

        {{-- img1 start --}}
        @foreach ($images1 as $image1)
        <section class="lg:container">
            <div class="w-full px-4">
                <img src="{{ asset('storage/' . $image1) }}" alt="" class="object-cover rounded-md w-full">
            </div>
        </section>
        @endforeach
        
        {{-- img1 end --}}

        {{-- Objective start --}}
        <section class="w-full h-full lg:container">
            <div class="w-full h-full md:flex py-10 px-4">
                <div class="md:w-1/2  md:mt-3">
                    <a href="#"
                        class="border border-white px-6 py-2 rounded-full text-white mb-4 text-sm md:text-lg lg:text-xl">
                        Objective
                    </a>
                </div>
                <div class="w-full">
                    <p class="mt-8 md:mt-0 md:text-base lg:text-lg text-white text-justify text-sm">
                        {{ strip_tags($project->objective ?? '') }}
                    </p>
                </div>
            </div>
        </section>
        {{-- Objective end --}}


        <hr class="mx-2 my-5 lg:mx-8">

        {{-- Challenge start --}}
        <section class="w-full h-full lg:container">
            <div class="w-full h-full md:flex py-10 px-4">
                <div class="md:w-1/2  md:mt-3">
                    <a href="#"
                        class="border border-white px-6 py-2 rounded-full text-white mb-4 text-sm md:text-lg lg:text-xl">
                        Challenge
                    </a>
                </div>
                <div class="w-full">
                    <p class="mt-8 md:mt-0 md:text-base lg:text-lg text-white text-justify text-sm">
                        {{ strip_tags($project->challenge ?? '') }}
                    </p>
                </div>
            </div>
        </section>
        {{-- Challenge end --}}

        {{-- img2 start --}}
        @foreach ($images2 as $image2)
        <section class="lg:mx-20">
            <div class="w-full px-4">
                <img src="{{ asset('storage/' . $image2) }}" alt="" class="object-cover rounded-md w-full">
            </div>
        </section>
        @endforeach
        {{-- img2 end --}}

        {{-- Results start --}}
        <section class="w-full h-full lg:container">
            <div class="w-full h-full  py-10 px-4">
                <div class="md:w-full md:flex md:justify-center">
                    <a href="#"
                        class="border border-white px-6 py-2 md:px-10 rounded-full text-white mb-4 md:mb-0 text-sm md:text-lg lg:text-xl">
                        Results
                    </a>
                </div>
                <div class="md:w-full md:flex md:justify-center">
                    <div class="w-full md:w-3/4 lg:3/5">
                        <p class="mt-8 md:mt-4 text-white md:text-center text-justify text-sm md:text-base lg:text-2xl">
                            {{ strip_tags($project->results ?? '') }}
                        </p>
                    </div>
                </div>
            </div>
        </section>
        {{-- Results end --}}

        {{-- Start your brand start --}}
        <section class="mx-4  md:my-0 md:mt-5 lg:flex lg:container h-full mt-6 items-center justify-between">
            <!-- Bagian Teks -->
            <div class="w-3/4 md:w-1/2  lg:overflow-hidden text-white font-medium">
                <h2 class="text-lg md:text-2xl lg:text-4xl">
                    Start your brand experience transformation now
                </h2>
            </div>

            <!-- Bagian Tombol -->
            <div class="flex  items-center gap-4  md:gap-2 lg:w-1/2 lg:max-w-screen-xl">
                <a href="/contact"
                    class="mt-3 md:mt-5 text-xs lg:text-base font-normal text-white transition-all duration-300 ease-in-out bg-transparent border-2 border-white rounded-full py-2 px-16 md:w-3/4 text-center font-ibm hover:text-black hover:bg-white">
                    CONTACT US
                </a>
                <a href="/contact"
                    class="mt-3 md:mt-5 text-xs lg:text-base font-normal text-[#00413D] bg-white border-2 border-white rounded-full py-2 px-16 md:w-3/4 text-center font-ibm transition-all duration-300 ease-in-out hover:text-white hover:bg-[#022C29]">
                    WHATSAPP US
                </a>
            </div>
        </section>

        {{-- Start your brand end --}}


    </main>
</x-layouts.layout>
