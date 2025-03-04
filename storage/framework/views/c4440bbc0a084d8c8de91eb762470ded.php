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
                <?php for($i = 0; $i < 10; $i++): ?>
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
                    
                <?php endfor; ?>

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
<?php /**PATH E:\laragon\www\metri_id\resources\views/gallery.blade.php ENDPATH**/ ?>