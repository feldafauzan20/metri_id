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
        metri | gallery
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

        <section class="flex flex-col justify-center w-full min-h-screen lg:container">
            <div class="mx-4 md:mx-8">
                <div class="flex flex-col gap-4">
                    <h2 class="text-3xl md:text-4xl text-white">Gallery</h2>
                    <p class="text-lg text-white md:text-xl">A series of project and campaigns that we have worked on for various brands and clients.</p>
                </div>
            </div>
        </section>

        <section class="flex flex-col w-full lg:container">
            <div class="mx-4 md:mx-8">
                <div class="flex flex-row mb-4 flex-wrap gap-2">
                    <?php
                        $services = [
                            'metri_design_posts' => 'Metri Design',
                            'metri_digital_posts' => 'Metri Digital',
                            'metri_entertainment_posts' => 'Metri Entertainment',
                            'metri_event_posts' => 'Metri Events',
                            'metri_film_equipment_posts' => 'Tang Ting',
                            'metri_film_posts' => 'Metri Film',
                            'metri_post_posts' => 'Metri Post'
                        ];
                    ?>
            
                    <!-- Tombol Semua Projects -->
                    <a href="<?php echo e(route('gallery')); ?>" 
                        class="px-4 py-1 rounded-lg transition-all duration-300 cursor-pointer 
                            <?php echo e(request('filter') ? 'bg-white/10 text-white' : 'bg-white text-[#00413D]'); ?>">
                        All Projects
                    </a>
            
                    <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(route('gallery', ['filter' => $key])); ?>" 
                            class="px-4 py-1 rounded-lg transition-all duration-300 cursor-pointer 
                                <?php echo e(request('filter') == $key ? 'bg-white text-[#00413D]' : 'bg-white/10 text-white'); ?>">
                            <?php echo e($name); ?>

                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            <div class="grid grid-flow-row-dense grid-cols-1 gap-6 mx-4 md:mx-8 mt-8 md:grid-cols-2 lg:grid-cols-3">
                <?php if(isset($projects)): ?>
                    <?php $__empty_1 = true; $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div class="relative overflow-hidden rounded-lg h-96 group">
                            <img src="<?php echo e(asset('storage/' . $project->image)); ?>" 
                                alt="<?php echo e($project->title); ?>" 
                                class="object-cover w-full h-full rounded-lg"
                                onload="this.naturalWidth > this.naturalHeight && this.parentElement.classList.add('col-span-2')">

                            <!-- Overlay -->
                            <div class="absolute bottom-0 left-0 right-0 p-4 text-white bg-gradient-to-t from-black/60 to-transparent">
                                <div class="flex flex-col items-start transition-all duration-300 translate-y-0 lg:translate-y-10 lg:group-hover:translate-y-0">
                                    <p class="text-2xl font-medium text-center text-white"><?php echo e($project->title); ?></p>
                                    <h3 class="text-white text-[10px] font-extralight">
                                        <?php echo e(Str::limit($project->content, 80)); ?>

                                    </h3>

                                    <a href="<?php echo e(route('detail', ['slug' => $project->slug])); ?>"
                                        class="px-4 py-2 mt-2 text-white transition-all duration-300 bg-white bg-opacity-50 rounded-lg opacity-100 md:opacity-100 lg:opacity-0 lg:group-hover:opacity-100 font-ibm hover:bg-gray-500">
                                        VIEW PROJECT
                                    </a>                                    

                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <p class="text-white text-center col-span-3">No projects available.</p>
                    <?php endif; ?>
                <?php endif; ?>
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
<?php /**PATH C:\xampp\htdocs\metri_id\resources\views/gallery.blade.php ENDPATH**/ ?>