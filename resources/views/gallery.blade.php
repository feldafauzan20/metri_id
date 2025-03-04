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
                    <p class="text-lg text-white md:text-xl">A series of project and campaigns that we have worked on for
                        various
                        brands and clients.</p>
                </div>
            </div>
        </section>

        <section class="flex flex-col w-full lg:container">
            <div class="mx-4 md:mx-8">
                <div class="flex flex-row mb-4 flex-wrap gap-2">
                    <div
                        class="px-4 py-1 bg-white rounded-lg text-[#00413D] hover:bg-[#195350] hover:text-white transition-all duration-300 cursor-pointer">
                        <p>All Projects</p>
                    </div>
                    <div
                        class="px-4 py-1 bg-white/10 backdrop-blur-lg rounded-lg hover:bg-white hover:text-[#00413D] transition-all duration-300 cursor-pointer">
                        <p>metri entertainment</p>
                    </div>
                    <div
                        class="px-4 py-1 bg-white/10 backdrop-blur-lg rounded-lg hover:bg-white hover:text-[#00413D] transition-all duration-300 cursor-pointer">
                        <p>metri events</p>
                    </div>
                    <div
                        class="px-4 py-1 bg-white/10 backdrop-blur-lg rounded-lg hover:bg-white hover:text-[#00413D] transition-all duration-300 cursor-pointer">
                        <p>metri film</p>
                    </div>
                    <div
                        class="px-4 py-1 bg-white/10 backdrop-blur-lg rounded-lg hover:bg-white hover:text-[#00413D] transition-all duration-300 cursor-pointer">
                        <p>metri post</p>
                    </div>
                    <div
                        class="px-4 py-1 bg-white/10 backdrop-blur-lg rounded-lg hover:bg-white hover:text-[#00413D] transition-all duration-300 cursor-pointer">
                        <p>tang ting</p>
                    </div>
                    <div
                        class="px-4 py-1 bg-white/10 backdrop-blur-lg rounded-lg hover:bg-white hover:text-[#00413D] transition-all duration-300 cursor-pointer">
                        <p>metri digital</p>
                    </div>
                    <div
                        class="px-4 py-1 bg-white/10 backdrop-blur-lg rounded-lg hover:bg-white hover:text-[#00413D] transition-all duration-300 cursor-pointer">
                        <p>metri design</p>
                    </div>
                </div>
            </div>

            <div class="grid grid-flow-row-dense grid-cols-1 gap-6 mx-4 md:mx-8 mt-8 md:grid-cols-2 lg:grid-cols-3">
                @for ($i = 0; $i < 10; $i++)
                    <div class="relative overflow-hidden rounded-lg h-96 group">
                        <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp"
                            alt="Project Image" class="object-cover w-full h-full rounded-lg"
                            onload="this.naturalWidth > this.naturalHeight && this.parentElement.classList.add('col-span-2')">

                        <!-- Overlay -->
                        <div
                            class="absolute bottom-0 left-0 right-0 p-4 text-white bg-gradient-to-t from-black/60 to-transparent">
                            <div
                                class="flex flex-col items-start transition-all duration-300 translate-y-0 lg:translate-y-10 lg:group-hover:translate-y-0">
                                <p class="text-2xl font-medium text-center text-white">BEHIND THE STUDIO</p>
                                <h3 class="text-white text-[10px] font-extralight">A dynamic space where imagination
                                    knows
                                    no
                                    bounds and experimentation is celebrated.</h3>

                                <a href=""
                                    class="px-4 py-2 mt-2 text-white transition-all duration-300 bg-white bg-opacity-50 rounded-lg opacity-100 md:opacity-100 lg:opacity-0 lg:group-hover:opacity-100 font-ibm hover:bg-gray-500">
                                    VIEW PROJECT
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="relative overflow-hidden rounded-lg h-96 group">
                        <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp"
                            alt="Project Image" class="object-cover w-full h-full rounded-lg"
                            onload="this.naturalWidth > this.naturalHeight && this.parentElement.classList.add('col-span-2')">

                        <!-- Overlay -->
                        <div
                            class="absolute bottom-0 left-0 right-0 p-4 text-white bg-gradient-to-t from-black/60 to-transparent">
                            <div
                                class="flex flex-col items-start transition-all duration-300 translate-y-0 lg:translate-y-10 lg:group-hover:translate-y-0">
                                <p class="text-2xl font-medium text-center text-white">BEHIND THE STUDIO</p>
                                <h3 class="text-white text-[10px] font-extralight">A dynamic space where imagination
                                    knows
                                    no
                                    bounds and experimentation is celebrated.</h3>

                                <a href=""
                                    class="px-4 py-2 mt-2 text-white transition-all duration-300 bg-white bg-opacity-50 rounded-lg opacity-100 md:opacity-100 lg:opacity-0 lg:group-hover:opacity-100 font-ibm hover:bg-gray-500">
                                    VIEW PROJECT
                                </a>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="relative overflow-hidden rounded-lg h-96 group">
                        <img src="https://download.havecamerawilltravel.com/sample-images/webp/webp-example.webp"
                            alt="Project Image" class="object-cover w-full h-full rounded-lg"
                            onload="this.naturalWidth > this.naturalHeight && this.parentElement.classList.add('col-span-2')">

                        <!-- Overlay -->
                        <div
                            class="absolute bottom-0 left-0 right-0 p-4 text-white bg-gradient-to-t from-black/60 to-transparent">
                            <div
                                class="flex flex-col items-start transition-all duration-300 translate-y-0 lg:translate-y-10 lg:group-hover:translate-y-0">
                                <p class="text-2xl font-medium text-center text-white">BEHIND THE STUDIO</p>
                                <h3 class="text-white text-[10px] font-extralight">A dynamic space where imagination
                                    knows
                                    no
                                    bounds and experimentation is celebrated.</h3>

                                <a href=""
                                    class="px-4 py-2 mt-2 text-white transition-all duration-300 bg-white bg-opacity-50 rounded-lg opacity-100 md:opacity-100 lg:opacity-0 lg:group-hover:opacity-100 font-ibm hover:bg-gray-500">
                                    ABOUT US
                                </a>
                            </div>
                        </div>
                    </div> --}}
                @endfor

            </div>
        </section>
    </main>
</x-layouts.layout>
