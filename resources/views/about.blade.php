<x-layouts.layout>
    <x-slot:title>
        metri | About us
    </x-slot:title>

    <x-slot:vite>
        @vite(['resources/js/service.js', 'resources/css/app.css'])
    </x-slot:vite>
    <main class="overflow-x-hidden">
        <x-layouts-service.navbar-services />

        {{-- HERO START --}}
        <section class="relative min-h-screen w-full flex flex-col justify-center bg-black">
            <!-- Video Background -->
            <video autoplay muted loop class="absolute top-0 left-0 w-full h-full object-cover">
                <source src="{{ Vite::asset('resources/assets/placeholder.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>

            <!-- Overlay (Opsional, untuk efek gelap) -->
            <div class="absolute top-0 left-0 w-full h-full bg-black/40"></div>

            <div class="relative flex justify-center">
                <div class="w-fit md:w-3/4  h-fit mx-6 flex flex-col justify-center items-center">
                    <h2 class="self-stretch mb-2 text-white text-2xl md:text-4xl lg:text-5xl font-normal text-center">
                        Hello, we are metri
                    </h2>
                    <div class="lg:w-2/4">
                        <p class="text-white text-[10px] font-light block md:text-base lg:text-lg text-center">
                            We bring ideas to life with our 360 services. We craft, build, grow, and develop your brand
                            and
                            business.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Scroll Indicator -->
            <div class="absolute bottom-6 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2">
                <span class="text-white text-[10px] md:text-xs lg:text-xl font-medium font-ibm animate-bounce">
                    SCROLL
                </span>
                <div data-svg-wrapper class="relative">
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


        {{-- Who are we start --}}
        <section class="w-full h-full mx-4 lg:container">
            <div class="w-full h-full pt-10 pb-4">
                <p
                    class="text-white w-fit h-full font-jakarta font-normal text-lg text-center rounded-[50px] outline outline-2 outline-[#E1E1E1] py-2 px-5">
                    Who Are We?
                </p>
            </div>
            <div class="w-full md:w-4/5 pr-4 lg:w-1/2">
                <p class="text-white text-[10px] font-normal md:text-base lg:text-lg">We are people with experience in
                    the creative
                    field,
                    production house, post-production, and media for over a decade. Now, we are forming Metri to turn
                    your ideas into reality.</p>
            </div>
            <div class="w-full mt-3 lg:mt-8 pr-8 lg:pr-0">
                <img src="{{ asset('images/bg-about.webp') }}" alt="" class="object-cover rounded-sm">
            </div>
        </section>
        {{-- Who are we end --}}

        <div class="lg:hidden">

            <hr class="mt-10 mx-5 lg:mx-0 mb-5">
        </div>

        {{-- Brand Values start --}}
        <section class="md:mx-4 lg:container lg:mx-auto lg:mt-9 lg:w-full lg:h-full">
            <div class="w-full lg:h-full py-4 flex justify-center md:justify-start ">
                <p
                    class="text-white w-fit h-full font-jakarta font-normal text-lg lg:text-xl text-center rounded-[50px] outline outline-2 outline-[#E1E1E1] py-[5px] px-[14px]">
                    Brand Values
                </p>
            </div>

            <div class="grid w-full grid-cols-1 md:grid-cols-3 gap-4 pt-2 px-4">
                <div class="w-full md:h-[300px] h-[236px] p-6 bg-[#105650] flex flex-col justify-between">
                    <div data-svg-wrapper class="relative">
                        <svg width="56" height="56" viewBox="0 0 56 56" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M6.41759 28.0026C6.41759 26.161 6.93043 24.3557 7.89864 22.7891C8.86685 21.2225 10.2522 19.9565 11.8994 19.1329C13.5466 18.3093 15.3906 17.9606 17.2248 18.126C19.059 18.2914 20.8109 18.9643 22.2843 20.0693C22.6556 20.3481 23.1224 20.4679 23.5821 20.4025C24.0418 20.3371 24.4566 20.0917 24.7354 19.7204C25.0142 19.3491 25.1341 18.8823 25.0687 18.4226C25.0032 17.9629 24.7579 17.5481 24.3866 17.2693C22.686 15.9938 20.7066 15.1407 18.6116 14.7802C16.5165 14.4198 14.3659 14.5623 12.3367 15.196C10.3076 15.8298 8.45811 16.9366 6.94065 18.4254C5.42319 19.9141 4.2812 21.7421 3.60879 23.7588C2.93638 25.7754 2.75279 27.923 3.07315 30.0245C3.39351 32.126 4.20865 34.1214 5.4514 35.8461C6.69415 37.5707 8.32894 38.9755 10.2211 39.9444C12.1132 40.9134 14.2085 41.4189 16.3343 41.4193C18.1636 41.4193 19.7503 41.0856 21.1503 40.4043C22.5503 39.7229 23.6679 38.7383 24.6246 37.5693C26.1646 35.6933 27.4153 33.1499 28.7686 30.3966L29.5596 28.7889C29.7647 28.3718 29.7966 27.8906 29.6485 27.45C29.5003 27.0095 29.184 26.6453 28.7686 26.4369C28.5635 26.3339 28.34 26.2725 28.111 26.2563C27.8821 26.2401 27.6522 26.2694 27.4346 26.3425C27.217 26.4156 27.016 26.531 26.8433 26.6822C26.6706 26.8334 26.5295 27.0173 26.4283 27.2233L25.5743 28.9569C24.2116 31.7173 23.1779 33.8149 21.9179 35.3503C21.2016 36.2253 20.4619 36.8436 19.6173 37.2566C18.7726 37.6696 17.7273 37.9193 16.3343 37.9193C13.7042 37.9193 11.1819 36.8745 9.32211 35.0147C7.46238 33.155 6.41759 30.6327 6.41759 28.0026Z"
                                fill="white" />
                            <path opacity="0.5"
                                d="M29.5625 28.7843C29.7659 28.3674 29.7968 27.887 29.6482 27.4476C29.4997 27.0081 29.1838 26.6449 28.7691 26.4369C28.3763 26.2398 27.9235 26.1985 27.5015 26.3214C27.0795 26.4443 26.7196 26.7223 26.4941 27.0996C26.7461 26.5972 26.9919 26.1002 27.2315 25.6086C28.5848 22.8553 29.8378 20.3119 31.3755 18.4359C32.3321 17.2669 33.4521 16.2823 34.8521 15.6009C36.2521 14.9196 37.8388 14.5859 39.6658 14.5859C41.7917 14.5859 43.8872 15.0911 45.7795 16.0598C47.6719 17.0286 49.3069 18.4331 50.55 20.1577C51.793 21.8824 52.6084 23.8777 52.929 25.9793C53.2496 28.0808 53.0662 30.2285 52.394 32.2453C51.7217 34.2621 50.5798 36.0903 49.0624 37.5792C47.5449 39.0681 45.6954 40.1751 43.6662 40.809C41.637 41.4429 39.4862 41.5855 37.3911 41.225C35.296 40.8646 33.3165 40.0115 31.6158 38.7359C31.2445 38.4575 30.999 38.0429 30.9334 37.5834C30.8678 37.124 30.9873 36.6572 31.2658 36.2859C31.5443 35.9146 31.9589 35.6692 32.4183 35.6035C32.8778 35.5379 33.3445 35.6575 33.7158 35.9359C34.9729 36.8787 36.436 37.5093 37.9845 37.7757C39.5331 38.0421 41.1228 37.9367 42.6226 37.4682C44.1225 36.9997 45.4895 36.1815 46.6111 35.081C47.7327 33.9805 48.5767 32.6292 49.0736 31.1385C49.5705 29.6479 49.706 28.0604 49.4691 26.5071C49.2321 24.9537 48.6294 23.4789 47.7106 22.2042C46.7919 20.9295 45.5833 19.8914 44.1846 19.1754C42.7859 18.4593 41.2371 18.0859 39.6658 18.0859C38.2751 18.0859 37.2275 18.3356 36.3851 18.7486C35.5381 19.1593 34.7985 19.7799 34.0821 20.6526C32.8221 22.1926 31.7885 24.2879 30.4258 27.0483C30.1551 27.6005 29.8658 28.1792 29.5625 28.7843Z"
                                fill="white" />
                        </svg>
                    </div>
                    <div class="flex flex-col gap-3">
                        <div class="text-white text-sm font-normal lg:text-xl">Creativity Without Limits</div>
                        <div class="text-white text-[10px] font-normal lg:text-base">
                            We believe in breaking boundaries and exploring fresh, innovative ideas to craft unique and
                            unforgettable experiences. Every project is an opportunity to push creativity to new
                            heights.
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="w-full md:w-full h-[236px] md:h-[300px] p-6 bg-[#105650] flex flex-col justify-between">
                    <div data-svg-wrapper class="relative">
                        <svg width="56" height="56" viewBox="0 0 56 56" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.502 44.4994L13.1516 36.2511L34.5996 14.8008L41.2006 21.4018L19.7503 42.8498L11.502 44.4994Z"
                                fill="white" fill-opacity="0.16" />
                            <path
                                d="M34.5996 14.8005L41.2006 21.4015M42.5213 9.52246L46.481 13.4821C46.83 13.8321 47.0261 14.3062 47.0261 14.8005C47.0261 15.2947 46.83 15.7689 46.481 16.1188L19.7503 42.8518L11.502 44.5015L13.1516 36.2531L39.88 9.52012C40.0533 9.34657 40.2592 9.20889 40.4858 9.11495C40.7124 9.02101 40.9553 8.97266 41.2006 8.97266C41.4459 8.97266 41.6888 9.02101 41.9154 9.11495C42.1421 9.20889 42.3479 9.3489 42.5213 9.52246Z"
                                stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class="flex flex-col gap-3">
                        <div class="text-white text-sm font-normal lg:text-xl">Excellence in Every Detail</div>
                        <div class="text-white text-[10px] font-normal lg:text-base">
                            From concept to execution, we prioritize precision, quality, and innovation. Every element
                            is thoughtfully designed to ensure the highest level of craftsmanship.
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="w-full md:w-full h-[236px] md:h-[300px] p-6 bg-[#105650] flex flex-col justify-between">
                    <div data-svg-wrapper class="relative">
                        <svg width="54" height="54" viewBox="0 0 54 54" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0_931_1474" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="3" y="3"
                                width="48" height="48">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M9 13.5C10.1935 13.5 11.3381 13.0259 12.182 12.182C13.0259 11.3381 13.5 10.1935 13.5 9C13.5 7.80653 13.0259 6.66193 12.182 5.81802C11.3381 4.97411 10.1935 4.5 9 4.5C7.80653 4.5 6.66193 4.97411 5.81802 5.81802C4.97411 6.66193 4.5 7.80653 4.5 9C4.5 10.1935 4.97411 11.3381 5.81802 12.182C6.66193 13.0259 7.80653 13.5 9 13.5ZM11.25 47.25C13.0402 47.25 14.7571 46.5388 16.023 45.273C17.2888 44.0071 18 42.2902 18 40.5C18 38.7098 17.2888 36.9929 16.023 35.727C14.7571 34.4612 13.0402 33.75 11.25 33.75C9.45979 33.75 7.7429 34.4612 6.47703 35.727C5.21116 36.9929 4.5 38.7098 4.5 40.5C4.5 42.2902 5.21116 44.0071 6.47703 45.273C7.7429 46.5388 9.45979 47.25 11.25 47.25ZM42.75 49.5C44.5402 49.5 46.2571 48.7888 47.523 47.523C48.7888 46.2571 49.5 44.5402 49.5 42.75C49.5 40.9598 48.7888 39.2429 47.523 37.977C46.2571 36.7112 44.5402 36 42.75 36C40.9598 36 39.2429 36.7112 37.977 37.977C36.7112 39.2429 36 40.9598 36 42.75C36 44.5402 36.7112 46.2571 37.977 47.523C39.2429 48.7888 40.9598 49.5 42.75 49.5ZM24.75 31.5C27.1369 31.5 29.4261 30.5518 31.114 28.864C32.8018 27.1761 33.75 24.8869 33.75 22.5C33.75 20.1131 32.8018 17.8239 31.114 16.136C29.4261 14.4482 27.1369 13.5 24.75 13.5C22.3631 13.5 20.0739 14.4482 18.386 16.136C16.6982 17.8239 15.75 20.1131 15.75 22.5C15.75 24.8869 16.6982 27.1761 18.386 28.864C20.0739 30.5518 22.3631 31.5 24.75 31.5ZM38.25 13.5C39.4435 13.5 40.5881 13.0259 41.432 12.182C42.2759 11.3381 42.75 10.1935 42.75 9C42.75 7.80653 42.2759 6.66193 41.432 5.81802C40.5881 4.97411 39.4435 4.5 38.25 4.5C37.0565 4.5 35.9119 4.97411 35.068 5.81802C34.2241 6.66193 33.75 7.80653 33.75 9C33.75 10.1935 34.2241 11.3381 35.068 12.182C35.9119 13.0259 37.0565 13.5 38.25 13.5Z"
                                    fill="#555555" stroke="white" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M12.375 12.375L16.875 16.875M33.75 13.5L31.5 15.75M38.25 37.6875L31.5 29.25M15.75 34.875L20.25 30.375"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </mask>
                            <g mask="url(#mask0_931_1474)">
                                <path d="M0 0H54V54H0V0Z" fill="white" />
                            </g>
                        </svg>
                    </div>
                    <div class="flex flex-col gap-3">
                        <div class="text-white text-sm font-normal lg:text-xl">Meaningful Connections</div>
                        <div class="text-white text-[10px] font-normal lg:text-base">
                            More than just aesthetics, our work is about creating deep, emotional connections that
                            inspire, engage, and leave a lasting impact on audiences.
                        </div>
                    </div>
                </div>
            </div>

        </section>
        {{-- Brand Values end --}}

        {{-- Start your brand start --}}
        <section class="mx-4 md:flex my-5 md:my-0 md:mt-5 lg:container h-full mt-14 items-center justify-between">
            <div class="w-3/4 md:w-1/2 lg:overflow-hidden  text-white font-medium">
                <h2 class="md:text-xl lg:text-4xl">Start your brand experience transformation now</h2>
            </div>
            <div class="flex md:w-1/2 md:justify-end gap-4">
                <a href="/contact"
                    class="mt-3 text-xs lg:text-base font-normal text-white transition-all duration-300 ease-in-out bg-transparent border-2 border-white rounded-full py-2 px-8 font-ibm hover:text-black hover:bg-white">
                    CONTACT US
                </a>
                <a href="/contact"
                    class="mt-3 text-xs lg:text-base font-normal text-[#00413D] bg-white border-2 border-white rounded-full py-2 px-8 font-ibm transition-all duration-300 ease-in-out hover:text-white hover:bg-[#022C29]">
                    WHATSAPP US
                </a>
            </div>
        </section>
        {{-- Start your brand end --}}

    </main>
</x-layouts.layout>
