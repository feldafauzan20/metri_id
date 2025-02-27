<?php if (isset($component)) { $__componentOriginalf2b16bc3883246ba4659aff94e382522 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf2b16bc3883246ba4659aff94e382522 = $attributes; } ?>
<?php $component = App\View\Components\Layouts\Layout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Layouts\Layout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('title', null, []); ?> 
        metri | Home
     <?php $__env->endSlot(); ?>

     <?php $__env->slot('vite', null, []); ?> 
        <?php echo app('Illuminate\Foundation\Vite')(['resources/js/main.js', 'resources/css/app.css']); ?>
     <?php $__env->endSlot(); ?>

    <main class="h-full min-h-screen overflow-x-hidden">
        <section class="absolute top-0 left-0 w-full px-[100px] py-[30px] flex justify-between items-center z-[100]">
            <div>
                <a href="/" class="logo">
                    <img src="<?php echo e(asset('images/logo/logo-putih-baru.webp')); ?>" alt="" width="150" />
                </a>
            </div>
            <div class="min-h-min">
                <nav class="flex navigation">
                    <a href="" class="active a-nav">ABOUT</a>
                    <a href="#services" class="a-nav">OUR SERVICES</a>
                    <a href="#partners" class="a-nav">OUR PARTNERS</a>
                    <a href="" class="a-nav">CONTACT</a>
                </nav>
            </div>
            <div class="flex justify-end">
                <h1 class="tracking-wider text-black font-ibm">PT. MEDIA TREN IDEA</h1>
            </div>
        </section>

        <section
            class="relative flex items-center justify-center min-h-screen overflow-hidden parallax-container will-change-transform bg-hero">
            <img src="<?php echo e(asset('images/sun.webp')); ?>" alt="" id="sun" class="img-parallax"
                loading="eager" />
            <img src="<?php echo e(asset('images/bg-showcase.webp')); ?>" alt="" id="" class="img-parallax"
                loading="eager" />
            <img src="<?php echo e(asset('images/bird2.webp')); ?>" alt="" id="bird2" class="img-parallax"
                loading="eager" />
            <img src="<?php echo e(asset('images/bird1.webp')); ?>" alt="" id="bird1" class="img-parallax"
                loading="eager" />
            <img src="<?php echo e(asset('images/plant2(2).webp')); ?>" alt="" id="plant2" class="img-parallax"
                loading="eager" />
            <img src="<?php echo e(asset('images/tree4.webp')); ?>" alt="" id="tree" class="img-parallax"
                loading="eager" />
            <img src="<?php echo e(asset('images/plant1.webp')); ?>" alt="" id="plant1" class="img-parallax"
                loading="eager" />
            <div class="absolute flex flex-col items-center -translate-x-1/2 bottom-10 left-1/2" id="scroll">
                <p class="pb-2 font-medium tracking-wide text-white text-XS font-ibm animate-bounce">SCROLL</p>
                <div class="relative flex items-start justify-center w-8 h-12 border-2 border-white rounded-full">
                    <div class="w-1 h-5 bg-white rounded-full"></div>
                </div>
            </div>
        </section>


        <section class="relative w-full h-screen -mt-10 overflow-hidden mysteps" id="services">
            <div class="step-counter w-full relative flex px-[2em] flex-row m-[2em] justify-between items-center">
                <div class="counter-title relative h-[150px] overflow-hidden w-full flex flex-col items-center">
                    <h2
                        class="w-max relative text-white font-jakarta font-normal text-xl will-change-transform text-center rounded-3xl outline outline-2 outline-[#E1E1E1] p-2 mt-2">
                        Our Services
                    </h2>
                    <p class="pt-8 text-3xl font-medium text-center text-white">Craft, build, grow, and develop your
                        brand and business
                    <p class="text-3xl font-medium text-center text-white">with our 360 services.</p>
                </div>
            </div>

            <div
                class="cards absolute top-[25%] left-1/2 -translate-x-1/2 -translate-y-1/2 w-[150vw] h-fit will-change-transform mt-[300px]">
                <a href="/metri-entertainment">
                    <div
                        class="card absolute w-[500px] h-[550px] left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 origin-center flex flex-col gap-4 will-change-transform">
                        <div class="flex-1 overflow-hidden rounded-md card-img h-[60vh]">
                            <img src="<?php echo e(asset('images/service1.webp')); ?>" loading="lazy" alt=""
                                class="object-contain w-full h-full img-card" />
                        </div>
                        <div class="card-content w-full h-[60px]">
                            <p class="text-left text-white font-jakarta text-[16px] font-medium leading-tight">
                                ‎
                            </p>
                        </div>
                    </div>
                </a>
                <a href="/metri-design">
                    <div
                        class="card absolute w-[500px] h-[550px] left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 origin-center flex flex-col gap-4 will-change-transform">
                        <div class="flex-1 overflow-hidden rounded-md card-img">
                            <img src="<?php echo e(asset('images/service2.webp')); ?>" loading="lazy" alt=""
                                class="object-contain w-full h-full img-card" />
                        </div>
                        <div class="card-content w-full h-[60px]">
                            <p class="text-left text-white font-jakarta text-[16px] font-medium leading-tight">
                                ‎
                            </p>
                        </div>
                    </div>
                </a>
                <a href="/metri-digital">
                    <div
                        class="card absolute w-[500px] h-[550px] left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 origin-center flex flex-col gap-4 will-change-transform">
                        <div class="flex-1 overflow-hidden rounded-md card-img">
                            <img src="<?php echo e(asset('images/service3.webp')); ?>" loading="lazy" alt=""
                                class="object-contain w-full h-full img-card" />
                        </div>
                        <div class="card-content w-full h-[60px]">
                            <p class="text-left text-white font-jakarta text-[16px] font-medium leading-tight">
                                ‎
                            </p>
                        </div>
                    </div>
                </a>
                <a href="/metri-film">
                    <div
                        class="card absolute w-[500px] h-[550px] left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 origin-center flex flex-col gap-4 will-change-transform">
                        <div class="flex-1 overflow-hidden rounded-md card-img">
                            <img src="<?php echo e(asset('images/service4.webp')); ?>" loading="lazy" alt=""
                                class="object-contain w-full h-full img-card" />
                        </div>
                        <div class="card-content w-full h-[60px]">
                            <p class="text-left text-white font-jakarta text-[16px] font-medium leading-tight">
                                ‎
                            </p>
                        </div>
                    </div>
                </a>
                <a href="/metri-post">
                    <div
                        class="card absolute w-[500px] h-[550px] left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 origin-center flex flex-col gap-4 will-change-transform">
                        <div class="flex-1 overflow-hidden rounded-md card-img">
                            <img src="<?php echo e(asset('images/service5.webp')); ?>" loading="lazy" alt=""
                                class="object-contain w-full h-full img-card" />
                        </div>
                        <div class="card-content w-full h-[60px]">
                            <p class="text-left text-white font-jakarta text-[16px] font-medium leading-tight">
                                ‎
                            </p>
                        </div>
                    </div>
                </a>
                <a href="/metri-tang-ting">
                    <div
                        class="card absolute w-[500px] h-[550px] left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 origin-center flex flex-col gap-4 will-change-transform">
                        <div class="flex-1 overflow-hidden rounded-md card-img">
                            <img src="<?php echo e(asset('images/service6.webp')); ?>" loading="lazy" alt=""
                                class="object-contain w-full h-full img-card" />
                        </div>
                        <div class="card-content w-full h-[60px]">
                            <p class="text-left text-white font-jakarta text-[16px] font-medium leading-tight">
                                ‎
                            </p>
                        </div>
                    </div>
                </a>
                <a href="/metri-event">
                    <div
                        class="card absolute w-[500px] h-[550px] left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 origin-center flex flex-col gap-4 will-change-transform">
                        <div class="flex-1 overflow-hidden rounded-md card-img">
                            <img src="<?php echo e(asset('images/service7.webp')); ?>" loading="lazy" alt=""
                                class="object-contain w-full h-full img-card" />
                        </div>
                        <div class="card-content w-full h-[60px]">
                            <p class="text-left text-white font-jakarta text-[16px] font-medium leading-tight">
                                ‎
                            </p>
                        </div>
                    </div>
                </a>

                <div
                    class="opacity-0 card empty absolute w-[500px] h-[550px] left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 origin-center flex flex-col gap-4 will-change-transform">
                </div>
                <div class="opacity-0 card empty"></div>
            </div>
        </section>

        <div id="overlay" class="fixed top-0 left-0 w-full h-full bg-[#00413D] opacity-0 pointer-events-none z-50">
        </div>

        <section class="items-center justify-center w-full pb-28 customer-support">
            <div class="container flex flex-col items-center w-full pt-4 overflow-hidden">
                <div class="flex flex-col items-center w-full">
                    <p
                        class="text-white max-w-lg w-fit font-jakarta font-normal text-xl text-center rounded-3xl outline outline-2 outline-[#E1E1E1] p-2 mt-2">
                        Customer Support
                    </p>
                    <h2 class="pt-8 text-4xl font-semibold text-white">Contact us at hello@metri.id for any inquiry
                    </h2>
                    <h2 class="text-4xl font-semibold text-white">regarding our 360 services.</h2>
                </div>

                <div class="container flex items-center justify-center h-full my-10">
                    <div class="mx-4 text-center">
                        <h2 class="text-4xl font-semibold text-white">
                            <span class="cs-text1" data-value="<?php echo e($counter_1); ?>">0</span>%
                        </h2>
                        <p class="pt-4 text-white">Of customers said using Flinta helped them to better service clients.</p>
                    </div>
                    <div class="mx-4 text-center">
                        <h2 class="text-4xl font-semibold text-white">
                            <span class="cs-text2" data-value="<?php echo e($counter_2); ?>">0</span>
                        </h2>
                        <p class="pt-4 text-white">Founded in 2024, we're on a growth journey focused on innovation.</p>
                    </div>
                    <div class="mx-4 text-center">
                        <h2 class="text-4xl font-semibold text-white">
                            <span class="cs-text3" data-value="<?php echo e($counter_3); ?>">0</span>+
                        </h2>
                        <p class="pt-4 text-white">Average monthly clients since we launched in June 2023.</p>
                    </div>
                    <div class="mx-4 text-center">
                        <h2 class="text-4xl font-semibold text-white">
                            <span class="cs-text4" data-value="<?php echo e($counter_4); ?>">0</span>+
                        </h2>
                        <p class="pt-4 text-white">Of tickets left unresolved using metri's advanced functionality.</p>
                    </div>
                </div>                

                <div class="flex flex-col items-center w-full">
                    <h2 class="text-xl font-medium text-center text-white">Explore our Advance System Functionality and
                        Experience
                        the Difference</h2>
                    <h2 class="text-xl font-medium text-center text-white">with metri.</h2>
                </div>
            </div>
        </section>

        <section class="w-full h-full">
            <video class="object-fill w-full h-full" autoplay loop muted>
                <source src="<?php echo e(asset('storage/' . $video)); ?>" type="video/mp4">
            </video>
        </section>        

        <div class="flex flex-row items-center w-full bg-[#056251]" id="partners">
            <p class="px-10 text-lg font-thin text-white whitespace-nowrap">
                Our Partners
            </p>
            <div class="w-auto overflow-hidden fade">
                <div class="flex flex-row animate-scroll w-max">
                    <img src="<?php echo e(asset('images/logo/logo-metri-baru.png')); ?>" class="w-52">
                    <img src="<?php echo e(asset('images/logo/logo-putih-baru.png')); ?>" class="w-52">
                    <img src="<?php echo e(asset('images/logo/logo-putih-baru.png')); ?>" class="w-52">
                    <img src="<?php echo e(asset('images/logo/logo-putih-baru.png')); ?>" class="w-52">
                    <img src="<?php echo e(asset('images/logo/logo-putih-baru.png')); ?>" class="w-52">
                    <img src="<?php echo e(asset('images/logo/logo-putih-baru.png')); ?>" class="w-52">
                    <img src="<?php echo e(asset('images/logo/logo-putih-baru.png')); ?>" class="w-52">
                    <!-- Duplikat logo untuk efek loop -->
                    <img src="<?php echo e(asset('images/logo/logo-metri-baru.png')); ?>" class="w-52">
                    <img src="<?php echo e(asset('images/logo/logo-putih-baru.png')); ?>" class="w-52">
                    <img src="<?php echo e(asset('images/logo/logo-putih-baru.png')); ?>" class="w-52">
                    <img src="<?php echo e(asset('images/logo/logo-putih-baru.png')); ?>" class="w-52">
                    <img src="<?php echo e(asset('images/logo/logo-putih-baru.png')); ?>" class="w-52">
                    <img src="<?php echo e(asset('images/logo/logo-putih-baru.png')); ?>" class="w-52">
                    <img src="<?php echo e(asset('images/logo/logo-putih-baru.png')); ?>" class="w-52">
                </div>
            </div>
        </div>

        <section class="w-full pt-10 ">
            <div class="flex flex-col gap-5 px-10 justify-centerh-full">

                <div class="flex w-full">
                    <div class="flex items-center w-full">
                        <h2 class="py-1 font-thin text-white px-7 w-max font-jakarta rounded-3xl outline outline-1">
                            Our Clients
                        </h2>
                    </div>
                    <div class="flex flex-row items-center justify-end w-full overflow-hidden gap-x-3">
                        <button class="btn btn-circle btn-outline button-prev">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white"
                                class="bi bi-chevron-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" />
                            </svg>
                        </button>
                        <button class="btn btn-circle btn-outline button-next">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white"
                                class="bi bi-chevron-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="w-full swiper">
                    <div class="swiper-wrapper my-14">
                        <?php $__currentLoopData = range(1, 60); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="flex justify-center swiper-slide">
                                <div class="flex flex-col items-center w-full gap-5">
                                    <img src="<?php echo e(asset('images/service2.webp')); ?>"
                                        class="w-20 h-20 bg-white rounded-full aspect-square">
                                    <img src="<?php echo e(asset('images/service2.webp')); ?>"
                                        class="w-20 h-20 bg-white rounded-full aspect-square">
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>


            </div>
        </section>

        <section class="w-full" id="contact">
            <div class="flex w-full p-7">
                <div class="w-1/2 px-2 text-4xl font-medium text-white">
                    <h2>Transform your brand and business with our 360 services.</h2>
                </div>
                <div class="flex items-center justify-end w-1/2 gap-x-5">
                    <button
                        class="w-1/3 text-xl font-normal text-white transition-all duration-300 ease-in-out bg-transparent rounded-full btn outline-white outline font-ibm outline-2 hover:text-black hover:border-white hover:bg-white">CONTACT
                        US</button>
                    <button
                        class="w-1/3 text-xl font-normal text-[#00413D] bg-white outline-white outline outline-2 rounded-full btn font-ibm hover:text-white transition-all duration-300 ease-in-out  hover:border-white hover:bg-[#022C29]
">CONTACT
                        US</button>
                </div>
            </div>

        </section>
    </main>

    <div id="toTopBtn"
        class="fixed px-4 py-2 text-white transition-opacity duration-300 bg-gray-800 rounded-full shadow-lg opacity-0 bottom-5 right-5 hover:bg-gray-700">
        ↑
    </div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf2b16bc3883246ba4659aff94e382522)): ?>
<?php $attributes = $__attributesOriginalf2b16bc3883246ba4659aff94e382522; ?>
<?php unset($__attributesOriginalf2b16bc3883246ba4659aff94e382522); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf2b16bc3883246ba4659aff94e382522)): ?>
<?php $component = $__componentOriginalf2b16bc3883246ba4659aff94e382522; ?>
<?php unset($__componentOriginalf2b16bc3883246ba4659aff94e382522); ?>
<?php endif; ?>
<?php /**PATH E:\laragon\www\metri_id\resources\views/welcome.blade.php ENDPATH**/ ?>