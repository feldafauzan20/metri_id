<section class="container mx-auto my-20 px-4 text-white">
    <div class="flex flex-col md:flex-row items-start justify-between gap-6">
        <!-- Left Side -->
        <div class="w-full md:w-2/5">
            <!-- Contact Form Button -->
            <div class="flex justify-center md:justify-start">
                <a href="#" class="border border-white px-6 py-2 rounded-full text-white mb-4 text-sm md:text-base">
                    Contact Form
                </a>
            </div>
        </div>

        <!-- Right Side: Form -->
        <form class="w-full md:w-3/5 space-y-6">
            <h2 class="text-lg md:text-xl font-light text-center md:text-left">
                We’d love to hear from you! Whether you have a question about our services, need assistance with
                a project, or just want to say hello, feel free to reach out.
            </h2>

            <!-- Form Fields -->
            <div class="space-y-4">
                <div>
                    <label class="block uppercase text-xs md:text-sm tracking-wider mb-2">NAME</label>
                    <input type="text"
                        class="w-full bg-transparent border-b border-white focus:outline-none focus:border-gray-300 transition duration-300 py-2 text-sm">
                </div>

                <div>
                    <label class="block uppercase text-xs md:text-sm tracking-wider mb-2">EMAIL</label>
                    <input type="email"
                        class="w-full bg-transparent border-b border-white focus:outline-none focus:border-gray-300 transition duration-300 py-2 text-sm">
                </div>

                <div>
                    <label class="block uppercase text-xs md:text-sm tracking-wider mb-2">PHONE NUMBER</label>
                    <input type="number"
                        class="w-full bg-transparent border-b border-white focus:outline-none focus:border-gray-300 transition duration-300 py-2 text-sm">
                </div>

                <div>
                    <label class="block uppercase text-xs md:text-sm tracking-wider mb-2">MESSAGE</label>
                    <textarea
                        class="w-full bg-transparent border-b border-white focus:outline-none focus:border-gray-300 transition duration-300 py-2 text-sm h-24"></textarea>
                </div>
            </div>

            <!-- Checkbox Options -->
            <div>
                <label class="block uppercase text-xs md:text-sm tracking-wider mb-2">Which metri service do you need
                    assistance with?</label>
                <span class="text-[#cbd5e1e3] text-xs md:text-sm">You can select multiple options. Feel free to choose
                    all that apply!</span>
                <div class="flex flex-wrap gap-2 mt-2">
                    <label
                        class="group flex items-center space-x-2 bg-white/20 px-4 py-2 rounded-md cursor-pointer hover:bg-white/30 transition-all duration-300">
                        <input type="checkbox" class="hidden peer">
                        <span class="peer-checked:bg-[#F45353] peer-checked:text-white px-3 py-1 rounded-md">metri
                            entertainment</span>
                    </label>
                    <label
                        class="group flex items-center space-x-2 bg-white/20 px-4 py-2 rounded-md cursor-pointer hover:bg-white/30 transition-all duration-300">
                        <input type="checkbox" class="hidden peer">
                        <span class="peer-checked:bg-[#3C7AD3] peer-checked:text-white px-3 py-1 rounded-md">metri
                            design</span>
                    </label>
                    <label
                        class="group flex items-center space-x-2 bg-white/20 px-4 py-2 rounded-md cursor-pointer hover:bg-white/30 transition-all duration-300">
                        <input type="checkbox" class="hidden peer">
                        <span class="peer-checked:bg-[#44AC60] peer-checked:text-white px-3 py-1 rounded-md">metri
                            digital</span>
                    </label>
                    <label
                        class="group flex items-center space-x-2 bg-white/20 px-4 py-2 rounded-md cursor-pointer hover:bg-white/30 transition-all duration-300">
                        <input type="checkbox" class="hidden peer">
                        <span class="peer-checked:bg-[#db4d4d] peer-checked:text-white px-3 py-1 rounded-md">metri
                            event</span>
                    </label>
                    <label
                        class="group flex items-center space-x-2 bg-white/20 px-4 py-2 rounded-md cursor-pointer hover:bg-white/30 transition-all duration-300">
                        <input type="checkbox" class="hidden peer">
                        <span class="peer-checked:bg-[#F5D63F] peer-checked:text-white px-3 py-1 rounded-md">tang
                            ting</span>
                    </label>
                    <label
                        class="group flex items-center space-x-2 bg-white/20 px-4 py-2 rounded-md cursor-pointer hover:bg-white/30 transition-all duration-300">
                        <input type="checkbox" class="hidden peer">
                        <span class="peer-checked:bg-[#F7931E] peer-checked:text-white px-3 py-1 rounded-md">metri
                            post</span>
                    </label>
                    <label
                        class="group flex items-center space-x-2 bg-white/20 px-4 py-2 rounded-md cursor-pointer hover:bg-white/30 transition-all duration-300">
                        <input type="checkbox" class="hidden peer">
                        <span class="peer-checked:bg-cyan-400 peer-checked:text-white px-3 py-1 rounded-md">metri
                            film</span>
                    </label>
                </div>
            </div>

            <!-- Agreement Checkbox -->
            <div class="flex items-center space-x-2">
                <input type="checkbox" id="agree" class="w-4 h-4 border-gray-400 bg-transparent">
                <label for="agree" class="text-xs md:text-sm">By submitting, you agree to the use of your
                    data</label>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="flex items-center space-x-2 group text-sm md:text-base">
                <span class="border-b border-white group-hover:border-gray-300 transition duration-300">Send
                    message</span>
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-4 h-4 group-hover:translate-x-1 transition duration-300" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>
        </form>
    </div>
</section>
