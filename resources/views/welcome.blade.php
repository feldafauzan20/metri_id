<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')

  {{-- google font start --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  {{-- google font end --}}

  {{-- my js start --}}
  @vite('resources/js/main.js')
  {{-- my js end --}}
</head>

<body class="min-h-screen overflow-x-hidden h-full bg-[#257c76]">
  <header class="absolute top-0 left-0 w-full px-[100px] py-[30px] flex justify-evenly items-center z-[100]">
    <div class="w-full">
      <a href="#" class="logo">
        <img src="{{ asset('images/logo/logo-putih-baru.png') }}" alt="" width="150" />
      </a>
    </div>
    <div class="w-full min-h-min">
      <nav class="navigation flex">
        <a href="" class="active a-nav">ABOUT</a>
        <a href="" class="a-nav">NETWORK</a>
        <a href="" class="a-nav">NEWS</a>
        <a href="" class="a-nav">CARRER</a>
        <a href="" class="a-nav">CONTACT</a>
      </nav>
    </div>
    <div class="w-full flex justify-end">
      <h1 class="tracking-wider font-ibm">PT. MEDIA TREN IDEA</h1>
    </div>
  </header>

  <section
    class="relative flex items-center justify-center min-h-screen overflow-hidden parallax-container will-change-transform bg-hero">
    <img src="{{ asset('images/efek-angin.png') }}" alt="" id="efek-angin" class="img-parallax opacity-15" />
    <img src="{{ asset('images/sun.png') }}" alt="" id="sun" class="img-parallax" />
    <img src="{{ asset('images/gunung4.png') }}" alt="" id="gunung4" class="img-parallax" />
    <img src="{{ asset('images/gunung3.png') }}" alt="" id="gunung3" class="img-parallax" />
    <img src="{{ asset('images/cloud.png') }}" alt="" id="cloud" class="img-parallax" />
    <img src="{{ asset('images/gunung2.png') }}" alt="" id="gunung2" class="img-parallax" />
    <img src="{{ asset('images/gunung1.png') }}" alt="" id="gunung1" class="img-parallax" />
    <img src="{{ asset('images/tanah3.png') }}" alt="" id="tanah3" class="img-parallax" />
    <img src="{{ asset('images/tanah1.png') }}" alt="" id="tanah1" class="img-parallax" />
    <img src="{{ asset('images/plant2.png') }}" alt="" id="plant2" class="img-parallax" />
    <img src="{{ asset('images/tanah2.png') }}" alt="" id="tanah2" class="img-parallax" />
    <img src="{{ asset('images/tree4.png') }}" alt="" id="tree" class="img-parallax" />
    {{-- <img src="{{ asset('images/leaf.png') }}" alt="" id="leaf" class="img-parallax" /> --}}
    {{-- <h2 id="text" class="absolute text-[5em] text-white font-semibold ">
      <span class="block textHero1">Elevate Your Experience</span>
      <span class="block text-center textHero2">with metri</span>
    </h2> --}}
    <img src="{{ asset('images/plant1.png') }}" alt="" id="plant1" class="img-parallax" />
  </section>

  <section class="relative w-full h-screen overflow-hidden steps bg-[#257c76]">
    <div class="step-counter w-full relative flex px-[2em] flex-row m-[2em] justify-between items-center">
      <div class="counter-title relative h-[150px] overflow-hidden w-full flex flex-col items-center">
        <h1
          class="w-max relative text-white font-jakarta font-normal text-xl will-change-transform text-center rounded-3xl outline outline-2 outline-[#E1E1E1] p-2 mt-2">
          Our services
        </h1>
        <p class="pt-8 text-3xl font-medium text-center text-white">Here’s <span class="text-[#67fbf8]">our services</span> that
          may helps</p>
        <p class="text-3xl font-medium text-center text-white">with ur business</p>
      </div>
    </div>

    <div
      class="cards absolute top-[25%] left-1/2 -translate-x-1/2 -translate-y-1/2 w-[150vw] h-[600px] will-change-transform mt-[300px]">
      <div
        class="card absolute w-[500px] h-[550px] left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 origin-center flex flex-col gap-4 will-change-transform">
        <div class="flex-1 overflow-hidden rounded-md card-img">
          <img src="{{ asset('images/service1.png') }}" alt="" class="object-contain w-full h-full img-card" />
        </div>
        <div class="card-content w-full h-[60px]">
          <p class="text-left text-white font-jakarta text-[16px] font-medium leading-tight">
            ‎
          </p>
        </div>
      </div>
      <div
        class="card absolute w-[500px] h-[550px] left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 origin-center flex flex-col gap-4 will-change-transform">
        <div class="flex-1 overflow-hidden rounded-md card-img">
          <img src="{{ asset('images/services2.png') }}" alt="" class="object-contain w-full h-full img-card" />
        </div>
        <div class="card-content w-full h-[60px]">
          <p class="text-left text-white font-jakarta text-[16px] font-medium leading-tight">
            ‎
          </p>
        </div>
      </div>
      <div
        class="card absolute w-[500px] h-[550px] left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 origin-center flex flex-col gap-4 will-change-transform">
        <div class="flex-1 overflow-hidden rounded-md card-img">
          <img src="{{ asset('images/services3.png') }}" alt="" class="object-contain w-full h-full img-card" />
        </div>
        <div class="card-content w-full h-[60px]">
          <p class="text-left text-white font-jakarta text-[16px] font-medium leading-tight">
            ‎
          </p>
        </div>
      </div>
      <div
        class="card absolute w-[500px] h-[550px] left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 origin-center flex flex-col gap-4 will-change-transform">
        <div class="flex-1 overflow-hidden rounded-md card-img">
          <img src="{{ asset('images/services2.png') }}" alt="" class="object-contain w-full h-full img-card" />
        </div>
        <div class="card-content w-full h-[60px]">
          <p class="text-left text-white font-jakarta text-[16px] font-medium leading-tight">
            ‎
          </p>
        </div>
      </div>
      <div
        class="card absolute w-[500px] h-[550px] left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 origin-center flex flex-col gap-4 will-change-transform">
        <div class="flex-1 overflow-hidden rounded-md card-img">
          <img src="{{ asset('images/service1.png') }}" alt="" class="object-contain w-full h-full img-card" />
        </div>
        <div class="card-content w-full h-[60px]">
          <p class="text-left text-white font-jakarta text-[16px] font-medium leading-tight">
            ‎
          </p>
        </div>
      </div>
      <div
        class="card absolute w-[500px] h-[550px] left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 origin-center flex flex-col gap-4 will-change-transform">
        <div class="flex-1 overflow-hidden rounded-md card-img">
          <img src="{{ asset('images/services3.png') }}" alt="" class="object-contain w-full h-full img-card" />
        </div>
        <div class="card-content w-full h-[60px]">
          <p class="text-left text-white font-jakarta text-[16px] font-medium leading-tight">
            ‎
          </p>
        </div>
      </div>
      <div
        class="card absolute w-[500px] h-[550px] left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 origin-center flex flex-col gap-4 will-change-transform">
        <div class="flex-1 overflow-hidden rounded-md card-img">
          <img src="{{ asset('images/services2.png') }}" alt="" class="object-contain w-full h-full img-card" />
        </div>
        <div class="card-content w-full h-[60px]">
          <p class="text-left text-white font-jakarta text-[16px] font-medium leading-tight">
            ‎
          </p>
        </div>
      </div>

      <div
        class="opacity-0 card empty absolute w-[500px] h-[550px] left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 origin-center flex flex-col gap-4 will-change-transform">
      </div>
      <div class="opacity-0 card empty"></div>
    </div>
  </section>

  <section class="bg-[#257c76] w-full">
    <div class="container max-h-screen overflow-hidden w-full flex flex-col items-center pt-4 pb-10">
      <div class="w-full flex flex-col items-center">
        <p
          class="text-white max-w-lg w-fit font-jakarta font-normal text-xl text-center rounded-3xl outline outline-2 outline-[#E1E1E1] p-2 mt-2">
          Customer support
        </p>
        <h1 class="text-4xl text-white pt-8 font-semibold">Manage customer queries</h1>
        <h1 class="text-4xl text-white font-semibold">in seconds with metri</h1>
      </div>
  
      <div class="container flex justify-center items-center h-full my-10">
        <div class="text-center mx-4">
          <h1 class="text-4xl font-semibold text-white">99.9%</h1>
          <p class="pt-4 text-white">Of customers said using Flinta helped them to better service clients.</p>
        </div>
        <div class="text-center mx-4">
          <h1 class="text-4xl font-semibold text-white">'24</h1>
          <p class="pt-4 text-white">Founded in 2024, we’re on a growth journey focused on innovation.</p>
        </div>
        <div class="text-center mx-4">
          <h1 class="text-4xl font-semibold text-white">20+</h1>
          <p class="pt-4 text-white">Average monthly clients since we launched in June 2023.</p>
        </div>
        <div class="text-center mx-4">
          <h1 class="text-4xl font-semibold text-white">0.05+</h1>
          <p class="pt-4 text-white">Of tickets left unresolved using metri’s advanced functionality.</p>
        </div>
      </div>

      <div class="w-full flex flex-col items-center">
        <h1 class="text-xl text-center text-white font-medium">Explore our Advance System Functionality and Experience the Difference</h1>
        <h1 class="text-xl text-center text-white font-medium">with metri.</h1>
      </div>
    </div>
  </section>
  


  {{-- cdn gsap & lenis start --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/TextPlugin.min.js"></script>
  <script src="https://unpkg.com/lenis@1.1.18/dist/lenis.min.js"></script>
  {{-- cdn gsap & lenis end --}}
</body>

</html>