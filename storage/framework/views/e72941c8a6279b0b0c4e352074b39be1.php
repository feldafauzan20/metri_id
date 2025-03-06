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
                                alt="" class="w-[300px] lg:w-[600px]"></a>
                        <h2 class="lg:text-5xl text-2xl md:text-3xl text-white pb-4">
                            Tailored to Your Needs to Enhance Digital Products
                        </h2>
                        <div class="w-full md:w-11/12 text-sm md:text-base text-white">
                            <p>We craft, build, grow, and develop your brand and business with our 360 services. If you
                                have any inquiry about our 360 services, don't hesitate to reach out to us.</p>
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
        

        
        <section class="container lg:py-20 pt-5">
            <div class="lg:w-[60%] mx-4">
                <h2 class="lg:text-4xl md:text-2xl text-lg text-white">A Fusion of Form and Function in Customers’ Needs
                </h2>
                <p class="lg:pt-5 pt-2 text-white text-sm md:text-base font-extralight">We ensures products seamlessly
                    integrate into
                    users’
                    needs. Form
                    evokes emotions and aesthetic appeal, while function ensures efficiency and usability.</p>
            </div>
        </section>
        

        
        <section class="container">
            <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-4 lg:mx-auto mx-4 lg:py-20 py-10">
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
        

        
        <section class="container mx-auto mt-14 px-4 md:px-7">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:auto-rows-fr">
                <!-- Card 1 -->
                <div class="relative group overflow-hidden rounded-lg">
                    <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp"
                        alt="Project Image" class="w-full h-auto object-cover rounded-lg">
                    <div
                        class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/60 to-transparent p-4 text-white">
                        <div
                            class="flex flex-col items-start transition-all duration-300 translate-y-0 lg:translate-y-10 lg:group-hover:translate-y-0">
                            <p class="text-center text-white text-xs font-medium">Brand Ipsum</p>
                            <h3 class="text-white text-2xl font-extralight">Ipsum Ad</h3>
                            <a href=""
                                class="opacity-100 md:opacity-100 lg:opacity-0 lg:group-hover:opacity-100 transition-all duration-300 bg-white bg-opacity-50 px-4 py-2 mt-2 rounded-lg font-ibm text-white hover:bg-gray-500">
                                VIEW PROJECT
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="relative group overflow-hidden rounded-lg">
                    <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp"
                        alt="Project Image" class="w-full h-auto object-cover rounded-lg">
                    <div
                        class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/60 to-transparent p-4 text-white">
                        <div
                            class="flex flex-col items-start transition-all duration-300 translate-y-0 lg:translate-y-10 lg:group-hover:translate-y-0">
                            <p class="text-center text-white text-xs font-medium">Brand Ipsum</p>
                            <h3 class="text-white text-2xl font-extralight">Ipsum Ad</h3>
                            <a href=""
                                class="opacity-100 md:opacity-100 lg:opacity-0 lg:group-hover:opacity-100 transition-all duration-300 bg-white bg-opacity-50 px-4 py-2 mt-2 rounded-lg font-ibm text-white hover:bg-gray-500">
                                VIEW PROJECT
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="relative group overflow-hidden rounded-lg">
                    <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp"
                        alt="Project Image" class="w-full h-auto object-cover rounded-lg">
                    <div
                        class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/60 to-transparent p-4 text-white">
                        <div
                            class="flex flex-col items-start transition-all duration-300 translate-y-0 lg:translate-y-10 lg:group-hover:translate-y-0">
                            <p class="text-center text-white text-xs font-medium">Brand Ipsum</p>
                            <h3 class="text-white text-2xl font-extralight">Ipsum Ad</h3>
                            <a href=""
                                class="opacity-100 md:opacity-100 lg:opacity-0 lg:group-hover:opacity-100 transition-all duration-300 bg-white bg-opacity-50 px-4 py-2 mt-2 rounded-lg font-ibm text-white hover:bg-gray-500">
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