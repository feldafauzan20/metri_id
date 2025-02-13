<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')

  {{-- google font start --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  {{-- google font end --}}

  


  {{-- my js start --}}
  @vite('resources/js/main.js')
  {{-- my js end --}}
</head>
<body class="bg-[#f9f9f9] min-h-screen overflow-x-hidden h-full">
    <header
      class="absolute top-0 left-0 w-full px-[100px] py-[30px] flex justify-start items-center z-[100]"
    >
      <a href="#" class="logo mr-[270px]">
        <img src="{{ asset('images/logo-metri.png') }}" alt="" width="150" />
      </a>

      <nav class="navigation">
        <a href="" class="active a-nav">Home</a>
        <a href="" class="a-nav">About</a>
        <a href="" class="a-nav">Services</a>
        <a href="" class="a-nav">Contact</a>
      </nav>
    </header>

    <section class="relative flex justify-center items-center h-screen parallax-container will-change-transform">
      <img
        src="{{ asset('images/hill1.png') }}"
        alt=""
        id="hill1"
        class="img-parallax"
      />
      <img
        src="{{ asset('images/hill2.png') }}"
        alt=""
        id="hill2"
        class="img-parallax"
      />
      <img
        src="{{ asset('images/hill3.png') }}"
        alt=""
        id="hill3"
        class="img-parallax"
      />
      <img
        src="{{ asset('images/hill4.png') }}"
        alt=""
        id="hill4"
        class="img-parallax"
      />
      <img
        src="{{ asset('images/hill5.png') }}"
        alt=""
        id="hill5"
        class="img-parallax"
      />
      <img
        src="{{ asset('images/tree3.png') }}"
        alt=""
        id="tree"
        class="img-parallax"
      />
      <img
        src="{{ asset('images/leaf.png') }}"
        alt=""
        id="leaf"
        class="img-parallax"
      />
      <h2 id="text" class="absolute text-[5em] text-white font-semibold ">
        <span class="block textHero1"></span>
        <span class="block text-center textHero2"></span>
      </h2>
      <img
        src="{{ asset('images/plant.png') }}"
        alt=""
        id="plant"
        class="img-parallax"
      />
    </section>

    <section class="relative bg-[#003329] p-[50px] min-h-screen">
      <h2 class="text-[3em] text-white mb-[10px]">Testing Parallax</h2>
      <p class="p-section2">
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet nulla
        animi, commodi explicabo quibusdam molestiae, minus, sequi blanditiis
        eveniet vel corporis dolorum. Quod, mollitia eum aliquam error tenetur
        laborum quaerat nulla accusantium provident odio similique aut ad.
        Suscipit exercitationem explicabo illo iure a delectus quis magnam
        voluptatibus velit laborum cum sit, soluta reiciendis eaque repellat
        accusamus expedita totam molestias? Laboriosam minus voluptates facere,
        saepe illo error porro laborum. Saepe, unde, minus ex non velit
        recusandae maiores quod fugiat obcaecati eaque ratione accusamus id
        dignissimos natus iusto, pariatur corrupti quos mollitia voluptatum
        voluptas ducimus veniam est ea? Ex tempora fugiat sit esse maiores,
        aperiam mollitia eveniet iure quia non ratione quos neque nulla. Maxime
        itaque nesciunt magni dicta at perferendis saepe debitis corporis
        reprehenderit exercitationem culpa nemo, perspiciatis adipisci quae
        necessitatibus?<br /><br />
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet nulla
        animi, commodi explicabo quibusdam molestiae, minus, sequi blanditiis
        eveniet vel corporis dolorum. Quod, mollitia eum aliquam error tenetur
        laborum quaerat nulla accusantium provident odio similique aut ad.
        Suscipit exercitationem explicabo illo iure a delectus quis magnam
        voluptatibus velit laborum cum sit, soluta reiciendis eaque repellat
        accusamus expedita totam molestias? Laboriosam minus voluptates facere,
        saepe illo error porro laborum. Saepe, unde, minus ex non velit
        recusandae maiores quod fugiat obcaecati eaque ratione accusamus id
        dignissimos natus iusto, pariatur corrupti quos mollitia voluptatum
        voluptas ducimus veniam est ea? Ex tempora fugiat sit esse maiores,
        aperiam mollitia eveniet iure quia non ratione quos neque nulla. Maxime
        itaque nesciunt magni dicta at perferendis saepe debitis corporis
        reprehenderit exercitationem culpa nemo, perspiciatis adipisci quae
        necessitatibus?<br /><br />
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet nulla
        animi, commodi explicabo quibusdam molestiae, minus, sequi blanditiis
        eveniet vel corporis dolorum. Quod, mollitia eum aliquam error tenetur
        laborum quaerat nulla accusantium provident odio similique aut ad.
        Suscipit exercitationem explicabo illo iure a delectus quis magnam
        voluptatibus velit laborum cum sit, soluta reiciendis eaque repellat
        accusamus expedita totam molestias? Laboriosam minus voluptates facere,
        saepe illo error porro laborum. Saepe, unde, minus ex non velit
        recusandae maiores quod fugiat obcaecati eaque ratione accusamus id
        dignissimos natus iusto, pariatur corrupti quos mollitia voluptatum
        voluptas ducimus veniam est ea? Ex tempora fugiat sit esse maiores,
        aperiam mollitia eveniet iure quia non ratione quos neque nulla. Maxime
        itaque nesciunt magni dicta at perferendis saepe debitis corporis
        reprehenderit exercitationem culpa nemo, perspiciatis adipisci quae
        necessitatibus?<br /><br />
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet nulla
        animi, commodi explicabo quibusdam molestiae, minus, sequi blanditiis
        eveniet vel corporis dolorum. Quod, mollitia eum aliquam error tenetur
        laborum quaerat nulla accusantium provident odio similique aut ad.
        Suscipit exercitationem explicabo illo iure a delectus quis magnam
        voluptatibus velit laborum cum sit, soluta reiciendis eaque repellat
        accusamus expedita totam molestias? Laboriosam minus voluptates facere,
        saepe illo error porro laborum. Saepe, unde, minus ex non velit
        recusandae maiores quod fugiat obcaecati eaque ratione accusamus id
        dignissimos natus iusto, pariatur corrupti quos mollitia voluptatum
        voluptas ducimus veniam est ea? Ex tempora fugiat sit esse maiores,
        aperiam mollitia eveniet iure quia non ratione quos neque nulla. Maxime
        itaque nesciunt magni dicta at perferendis saepe debitis corporis
        reprehenderit exercitationem culpa nemo, perspiciatis adipisci quae
        necessitatibus?<br /><br />
      </p>
    </section>


  {{-- cdn gsap start --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/TextPlugin.min.js"></script>
  {{-- cdn gsap end --}}
  </body>
</html>