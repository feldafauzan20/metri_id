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
  {{-- google font end --}}

  {{-- my js start --}}
  @vite('resources/js/main.js')
  {{-- my js end --}}
</head>

<body class="bg-[#f9f9f9] min-h-screen overflow-x-hidden h-full">
  <header class="absolute top-0 left-0 w-full px-[100px] py-[30px] flex justify-start items-center z-[100]">
      <a href="#" class="logo">
        <img src="{{ asset('images/logo/logo-metri.png') }}" alt="" width="150" />
      </a>
      <div class="flex w-full justify-center">
      <nav class="navigation">
        <a href="" class="active a-nav">Home</a>
        <a href="" class="a-nav">About</a>
        <a href="" class="a-nav">Services</a>
        <a href="" class="a-nav">Contact</a>
      </nav>
    </div>
  </header>

  <section class="relative flex items-center justify-center min-h-screen parallax-container will-change-transform">
    <img src="{{ asset('images/hill1.png') }}" alt="" id="hill1" class="img-parallax" />
    <img src="{{ asset('images/hill2.png') }}" alt="" id="hill2" class="img-parallax" />
    <img src="{{ asset('images/hill3.png') }}" alt="" id="hill3" class="img-parallax" />
    <img src="{{ asset('images/hill4.png') }}" alt="" id="hill4" class="img-parallax" />
    <img src="{{ asset('images/hill5.png') }}" alt="" id="hill5" class="img-parallax" />
    <img src="{{ asset('images/tree3.png') }}" alt="" id="tree" class="img-parallax" />
    <img src="{{ asset('images/leaf.png') }}" alt="" id="leaf" class="img-parallax" />
    <h2 id="text" class="absolute text-[5em] text-white font-semibold ">
      <span class="block textHero1">Elevate Your Experience</span>
      <span class="block text-center textHero2">with metri</span>
    </h2>
    <img src="{{ asset('images/plant.png') }}" alt="" id="plant" class="img-parallax" />
  </section>

  {{-- <section class="relative w-full h-screen bg-white overflow-hidden steps">
    <div class="step-counter w-full relative flex px-[2em] flex-row m-[2em] justify-between items-center ">
      <div
        class="counter-title relative h-[150px] overflow-hidden w-full flex flex-col items-center">
        <h1
          class="w-max relative text-black font-jakarta font-normal text-xl will-change-transform text-center rounded-3xl outline outline-2 outline-[#E1E1E1] p-2 mt-2">
          Our services
        </h1>
        <p class="text-center font-medium text-3xl pt-8">Here’s <span class="text-[#44AC60]">our services</span> that may helps</p>
        <p class="text-center font-medium text-3xl">with ur business</p>
      </div>
    </div>

    <div
      class="cards absolute top-[25%] left-1/2 -translate-x-1/2 -translate-y-1/2 w-[150vw] h-[600px] will-change-transform mt-[300px]">
      <div
        class="card absolute w-[500px] h-[550px] left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 origin-center flex flex-col gap-4 will-change-transform">
        <div class="flex-1 overflow-hidden bg-white rounded-md card-img">
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
        <div class="flex-1 overflow-hidden bg-white rounded-md card-img">
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
        <div class="flex-1 overflow-hidden bg-white rounded-md card-img">
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
        <div class="flex-1 overflow-hidden bg-white rounded-md card-img">
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
        <div class="flex-1 overflow-hidden bg-white rounded-md card-img">
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
        <div class="flex-1 overflow-hidden bg-white rounded-md card-img">
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
        <div class="flex-1 overflow-hidden bg-white rounded-md card-img">
          <img src="{{ asset('images/services2.png') }}" alt="" class="object-contain w-full h-full img-card" />
        </div>
        <div class="card-content w-full h-[60px]">
          <p class="text-left text-white font-jakarta text-[16px] font-medium leading-tight">
            ‎ 
          </p>
        </div>
      </div>

      <div class="opacity-0 card empty absolute w-[500px] h-[550px] left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 origin-center flex flex-col gap-4 will-change-transform"></div>
      <div class="opacity-0 card empty"></div>
    </div>
  </section> --}}

  {{-- cdn gsap start --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/TextPlugin.min.js"></script>
  <script src="https://unpkg.com/lenis@1.1.18/dist/lenis.min.js"></script>
  {{-- cdn gsap end --}}
</body>

</html>
