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
        metri | contact
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

        
        <section class="relative min-h-screen w-full flex flex-col justify-center">
            <div class="md:block md:container md:w-full md:mx-28">

                <div
                    class="w-[348px] md:w-[727px] h-[94px] md:h-[133px] flex flex-col justify-start items-start gap-2 mx-4">
                    <h2 class="self-stretch text-white text-2xl md:text-4xl font-normal">Hello, we are metri</h2>
                    <p class="self-stretch text-white text-[10px] font-normal block md:w-[547px] md:text-base">
                        We craft, build, grow, and develop your brand and business with our 360 services.
                        If you have any inquiry about our 360 services, don’t hesitate to reach out to us.
                    </p>
                </div>
            </div>

            <div class="absolute bottom-6 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2">
                <span
                    class="text-white text-[10px] md:text-xs lg:text-xl font-medium font-ibm animate-bounce">SCROLL</span>
                <div data-svg-wrapper class="relative ">
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

        


        
        <section class="w-full" id="video">
            <video class="object-cover w-full h-full" autoplay loop muted>
                <source src="<?php echo e(Vite::asset('resources/assets/placeholder.mp4')); ?>" type="video/mp4">
            </video>
        </section>
        

        <div class="md:grid md:grid-cols-2 lg:grid-cols-4">
            
            <section class="w-full mx-4 py-8">
                <div class=" flex flex-col">
                    <h2 class="text-white text-2xl font-semibold pb-3">SOCIAL</h2>
                    <div class=" flex-col justify-start items-start gap-2 inline-flex">
                        <a href=""
                            class="self-stretch text-white text-[10px] font-normal font-['Plus Jakarta Sans']">INSTAGRAM</a>
                        <a href=""
                            class="self-stretch text-white text-[10px] font-normal font-['Plus Jakarta Sans']">LINKEDIN</a>
                        <a href=""
                            class="self-stretch text-white text-[10px] font-normal font-['Plus Jakarta Sans']">X</a>
                        <a href=""
                            class="self-stretch text-white text-[10px] font-normal font-['Plus Jakarta Sans']">Facebook</a>
                    </div>
                </div>
            </section>
            

            
            <section class="w-full mx-4 pb-6 pt-12 md:pt-8">
                <div class=" flex flex-col">
                    <h2 class="text-white text-2xl font-semibold pb-3">LOCATION</h2>
                    <div
                        class="w-48 text-white text-[10px] font-medium font-['Plus Jakarta Sans'] uppercase leading-snug">
                        Jl. Potlot I No.14, Duren Tiga, Kec. Pancoran, Kota Jakarta Selatan, Daerah Khusus Ibukota
                        Jakarta
                        12760</div>
                </div>
            </section>
            

            
            <section class="w-full mx-4 pb-6 pt-12 lg:pt-8">
                <div class=" flex flex-col">
                    <h2 class="text-white text-2xl font-semibold pb-3">PHONE</h2>
                    <div
                        class="w-48 text-white text-[10px] font-medium font-['Plus Jakarta Sans'] uppercase leading-snug">
                        <p>idn + 62 212-781-4039</p>
                    </div>
                </div>
            </section>
            

            
            <section class="w-full mx-4 pb-6 pt-12 lg:pt-8">
                <div class=" flex flex-col">
                    <h2 class="text-white text-2xl font-semibold pb-3">EMAIL</h2>
                    <div
                        class="w-48 text-white text-[10px] font-medium font-['Plus Jakarta Sans'] uppercase leading-snug">
                        <p>hello@metri.id</p>
                    </div>
                </div>
            </section>
            
        </div>


        <hr class="mx-2">

        
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

        

        
        <section class="container mx-auto mt-14 px-4 md:px-7">
            <div class="grid grid-cols-1 md:flex md:justify-center gap-6">
                <!-- Card 1 -->
                <div class="relative group overflow-hidden rounded-lg">
                    <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp"
                        alt="Project Image" class="w-full h-auto object-cover rounded-lg">

                    <!-- Overlay -->
                    <div
                        class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/60 to-transparent p-4 text-white">
                        <div
                            class="flex flex-col items-start transition-all duration-300 translate-y-0 lg:translate-y-10 lg:group-hover:translate-y-0">
                            <p class="text-center text-white text-2xl font-medium">BEHIND THE STUDIO</p>
                            <h3 class="text-white text-[10px] font-extralight">A dynamic space where imagination knows
                                no
                                bounds and experimentation is celebrated.</h3>

                            <a href=""
                                class="opacity-100 md:opacity-100 lg:opacity-0 lg:group-hover:opacity-100 transition-all duration-300 bg-white bg-opacity-50 px-4 py-2 mt-2 rounded-lg font-ibm text-white hover:bg-gray-500">
                                ABOUT US
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
                            class="flex flex-col items-start transition-all duration-300 translate-y-0 lg:translate-y-10 lg:group-hover:translate-y-0">
                            <p class="text-center text-white text-2xl font-medium">CASE STUDIES</p>
                            <h3 class="text-white text-[10px] font-extralight">A collective of visionary creators
                                dedicated to shaping the future through design.</h3>

                            <a href=""
                                class="opacity-100 md:opacity-100 lg:opacity-0 lg:group-hover:opacity-100 transition-all duration-300 bg-white bg-opacity-50 px-4 py-2 mt-2 rounded-lg font-ibm text-white hover:bg-gray-500">
                                OUR SERVICES
                            </a>
                        </div>
                    </div>
                </div>
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
<?php /**PATH E:\laragon\www\metri_id\resources\views/contact.blade.php ENDPATH**/ ?>