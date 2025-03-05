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
        metri | <?php echo e($project->title); ?>

     <?php $__env->endSlot(); ?>

     <?php $__env->slot('vite', null, []); ?> 
        <?php echo app('Illuminate\Foundation\Vite')(['resources/js/service.js', 'resources/css/app.css']); ?>
     <?php $__env->endSlot(); ?>
    <main class="overflow-x-hidden">
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

        
        <section class="relative min-h-screen flex items-center justify-center text-white">
            <div class="w-full h-screen flex flex-col md:flex-row md:container md:mx-auto md:gap-8 mx-4">
                <!-- Bagian Kiri -->
                <div class="md:w-1/2 h-1/2 md:h-full flex items-end md:items-center p-6">
                    <h2 class="text-2xl font-light md:text-4xl"><?php echo e($project->title); ?></h2>
                </div>

                <!-- Bagian Kanan -->
                <div
                    class="md:w-1/2 h-1/2 md:h-full space-y-4 justify-end text-sm md:text-base flex flex-col md:justify-center p-6">
                    <div class="flex justify-between border-b border-white pb-3">
                        <span class="text-white">Client</span>
                        <span><?php echo e($project->client_name); ?></span>
                    </div>
                    <div class="flex justify-between border-b border-white pb-3">
                        <span class="text-white">Year</span>
                        <span><?php echo e($project->year); ?></span>
                    </div>
                    <div class="flex justify-between border-b border-white pb-3">
                        <span class="text-white">Category</span>
                        <span><?php echo e($project->category); ?></span>
                    </div>
                    <div class="flex justify-between border-b border-white pb-3">
                        <span class="text-white">Industry</span>
                        <span><?php echo e($project->industry); ?></span>
                    </div>
                </div>
            </div>
        </section>
        

        
        <?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <section class="w-full h-full" id="video">
            <video class="object-cover w-full px-4 lg:px-0 h-full" autoplay loop muted playsinline>
                <source src="<?php echo e(asset('storage/' . $video)); ?>" type="video/mp4">
            </video>
        </section>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        

        
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
                            <?php echo e(strip_tags($project->concept ?? '')); ?>

                        </p>
                    </div>
                </div>
            </div>
        </section>
        

        
        <?php $__currentLoopData = $images1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <section class="lg:container">
            <div class="w-full px-4">
                <img src="<?php echo e(asset('storage/' . $image1)); ?>" alt="" class="object-cover rounded-md w-full">
            </div>
        </section>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
        

        
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
                        <?php echo e(strip_tags($project->objective ?? '')); ?>

                    </p>
                </div>
            </div>
        </section>
        


        <hr class="mx-2 my-5 lg:mx-8">

        
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
                        <?php echo e(strip_tags($project->challenge ?? '')); ?>

                    </p>
                </div>
            </div>
        </section>
        

        
        <?php $__currentLoopData = $images2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <section class="lg:mx-20">
            <div class="w-full px-4">
                <img src="<?php echo e(asset('storage/' . $image2)); ?>" alt="" class="object-cover rounded-md w-full">
            </div>
        </section>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        

        
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
                            <?php echo e(strip_tags($project->results ?? '')); ?>

                        </p>
                    </div>
                </div>
            </div>
        </section>
        

        
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
<?php /**PATH C:\xampp\htdocs\metri_id\resources\views/detail.blade.php ENDPATH**/ ?>