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
        metri | entertainment
     <?php $__env->endSlot(); ?>

     <?php $__env->slot('vite', null, []); ?> 
        <?php echo app('Illuminate\Foundation\Vite')(['resources/js/service.js', 'resources/css/app.css']); ?>
     <?php $__env->endSlot(); ?>
    <main>
        <?php if (isset($component)) { $__componentOriginalf554860691b0db475faae1a0c55e5119 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf554860691b0db475faae1a0c55e5119 = $attributes; } ?>
<?php $component = App\View\Components\LayoutsService\NavbarServices::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts-service.navbar-services'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\LayoutsService\NavbarServices::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf554860691b0db475faae1a0c55e5119)): ?>
<?php $attributes = $__attributesOriginalf554860691b0db475faae1a0c55e5119; ?>
<?php unset($__attributesOriginalf554860691b0db475faae1a0c55e5119); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf554860691b0db475faae1a0c55e5119)): ?>
<?php $component = $__componentOriginalf554860691b0db475faae1a0c55e5119; ?>
<?php unset($__componentOriginalf554860691b0db475faae1a0c55e5119); ?>
<?php endif; ?>

        
        <section>
            <div class="hero min-h-screen">
                <div class="hero-content text-center">
                    <div class="w-full flex flex-col items-center">
                        <a href=""><img src="<?php echo e(asset('images/logo/logo-metri-entertainment.webp')); ?>"
                                alt="" width="300"></a>
                        <h2 class="py-6 text-5xl text-white">
                            Tailored to Your Needs to Enhance Digital Products
                        </h2>
                        <div class="w-3/4 text-base text-white">
                            <p>We prioritize understanding user needs to create products that are efficient and
                                enjoyable.
                                Our
                                goal is to exceed expectations with captivating visuals, seamless navigation, and
                                optimal
                                usability.</p>
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
        

        
        <section class="w-full" id="video">
            <video class="object-cover w-full h-full" autoplay loop muted>
                <source src="<?php echo e(asset('storage/' . $video)); ?>" type="video/mp4">
            </video>
        </section>
        

        
        <section class="container py-20">
            <div class="w-[60%]">
                <h2 class="text-4xl text-white">A fusion of form and function in customer’s daily life</h2>
                <p class="pt-5 text-white text-base">We ensures products seamlessly integrate into users’ lives. Form
                    evokes
                    emotions and
                    aesthetic
                    appeal, while function ensures efficiency and usability. Together, they create products that enhance
                    daily routines with intuitive interfaces and visually pleasing designs.</p>
            </div>
        </section>
        

        
        <section class="container">
            <h2 class="text-center text-4xl text-white">Seamless adoption in omni-channels</h2>

            <div class="grid grid-cols-4 gap-4 mx-auto py-20">
                <img src="<?php echo e(asset('storage/' . $photo_1)); ?>" alt="Airplane"
                    class="col-span-1 row-span-2 w-full h-full object-cover rounded-lg">

                <img src="<?php echo e(asset('storage/' . $photo_2)); ?>" alt="Mountain"
                    class="col-span-1 row-span-1 w-full h-full object-cover rounded-lg">

                <img src="<?php echo e(asset('storage/' . $photo_3)); ?>" alt="Piano"
                    class="col-span-1 row-span-2 w-full h-full object-cover rounded-lg">

                <img src="<?php echo e(asset('storage/' . $photo_4)); ?>" alt="Sunset"
                    class="col-span-1 row-span-2 w-full h-full object-cover rounded-lg">

                <img src="<?php echo e(asset('storage/' . $photo_5)); ?>" alt="Portrait"
                    class="col-span-1 row-span-2 w-full h-full object-cover rounded-lg">
            </div>

        </section>
        

        
        <section class="container flex">
            <div class="w-[60%] h-full flex items-center px-4">
                <h2 class="text-4xl text-white font-normal">10+ Years proven formula for exceptional entertainment</h2>
            </div>
            <div class="w-3/4 grid grid-cols-2 gap-x-7 gap-y-10">
                <div class="">
                    <h3 class="text-white text-xl">Tailored to Goals</h3>
                    <p>Various styles tailored to your brand's unique identity and target audience.</p>
                </div>
                <div class="">
                    <h3 class="text-white text-xl">Differentiation</h3>
                    <p>Stand out from competitors with visually stunning designs and intuitive user experiences that
                        leave a lasting impression.</p>
                </div>
                <div class="">
                    <h3 class="text-white text-xl">Tailored to Goals</h3>
                    <p>Engaging interfaces that captivate users, keeping them invested and increasing interaction rates.
                    </p>
                </div>
                <div class="">
                    <h3 class="text-white text-xl">Boosted Conversion</h3>
                    <p>Optimized user journeys and streamlined interfaces lead to higher conversion rates and increased
                        revenue.</p>
                </div>
            </div>
        </section>
        

        
        <section class="container mx-auto my-32 px-4">
            <h2 class="text-4xl text-white mb-10">Discover Latest Case Studies</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <div class="relative group overflow-hidden rounded-lg">
                    <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp"
                        alt="Project Image" class="w-full h-auto object-cover rounded-lg">

                    <!-- Overlay -->
                    <div
                        class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/60 to-transparent p-4 text-white">
                        <div
                            class="flex flex-col items-start transition-all duration-300 translate-y-10 group-hover:translate-y-0">
                            <p class="text-xs">Brand Ipsum</p>
                            <h3 class="text-lg font-semibold">Project Ipsum</h3>

                            <a href=""
                                class="opacity-0 group-hover:opacity-100 transition-all duration-300 bg-white bg-opacity-50 px-4 py-2 mt-2 rounded-lg font-ibm text-white hover:bg-gray-500">
                                VIEW PROJECT
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="relative group overflow-hidden rounded-lg">
                    <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp"
                        alt="Project Image" class="w-full h-auto object-cover rounded-lg">

                    <!-- Overlay -->
                    <div
                        class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/60 to-transparent p-4 text-white">
                        <div
                            class="flex flex-col items-start transition-all duration-300 translate-y-10 group-hover:translate-y-0">
                            <p class="text-xs">Brand Ipsum</p>
                            <h3 class="text-lg font-semibold">Project Ipsum</h3>

                            <a href=""
                                class="opacity-0 group-hover:opacity-100 transition-all duration-300 bg-white bg-opacity-50 px-4 py-2 mt-2 rounded-lg font-ibm text-white hover:bg-gray-500">
                                VIEW PROJECT
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="relative group overflow-hidden rounded-lg">
                    <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp"
                        alt="Project Image" class="w-full h-auto object-cover rounded-lg">

                    <!-- Overlay -->
                    <div
                        class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/60 to-transparent p-4 text-white">
                        <div
                            class="flex flex-col items-start transition-all duration-300 translate-y-10 group-hover:translate-y-0">
                            <p class="text-xs">Brand Ipsum</p>
                            <h3 class="text-lg font-semibold">Project Ipsum</h3>

                            <a href=""
                                class="opacity-0 group-hover:opacity-100 transition-all duration-300 bg-white bg-opacity-50 px-4 py-2 mt-2 rounded-lg font-ibm text-white hover:bg-gray-500">
                                VIEW PROJECT
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        

        
        <?php if (isset($component)) { $__componentOriginalba2f26e1a9ff9a4266405ba1ab7d3ee9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalba2f26e1a9ff9a4266405ba1ab7d3ee9 = $attributes; } ?>
<?php $component = App\View\Components\Layouts\ContactForm::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.contact-form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Layouts\ContactForm::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalba2f26e1a9ff9a4266405ba1ab7d3ee9)): ?>
<?php $attributes = $__attributesOriginalba2f26e1a9ff9a4266405ba1ab7d3ee9; ?>
<?php unset($__attributesOriginalba2f26e1a9ff9a4266405ba1ab7d3ee9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalba2f26e1a9ff9a4266405ba1ab7d3ee9)): ?>
<?php $component = $__componentOriginalba2f26e1a9ff9a4266405ba1ab7d3ee9; ?>
<?php unset($__componentOriginalba2f26e1a9ff9a4266405ba1ab7d3ee9); ?>
<?php endif; ?>

        






    </main>
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
<?php /**PATH E:\laragon\www\metri_id\resources\views/service-entertainment.blade.php ENDPATH**/ ?>