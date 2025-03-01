<section class="container my-20 text-white">
    <div class="flex items-start justify-between">
        <div class="w-4/5">
            <!-- Contact Form Button -->
            <a href="" class="border border-white px-6 py-2 rounded-full text-white mb-4">
                Contact form
            </a>
            <!-- Title -->
        </div>

        <!-- Right Side: Form -->
        <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6 w-full">
            @csrf

            <h2 class="text-xl font-light">
                We’d love to hear from you! Whether you have a question about our services, need assistance with
                a project, or just want to say hello, feel free to reach out.
            </h2>

            <!-- Name -->
            <div>
                <label class="block uppercase text-sm tracking-wider mb-2">NAME</label>
                <input type="text" name="name"
                    class="w-full bg-transparent border-b border-white focus:outline-none focus:border-gray-300 transition duration-300 py-2" required>
            </div>

            <!-- Email -->
            <div>
                <label class="block uppercase text-sm tracking-wider mb-2">EMAIL</label>
                <input type="email" name="email"
                    class="w-full bg-transparent border-b border-white focus:outline-none focus:border-gray-300 transition duration-300 py-2" required>
            </div>

            <!-- Phone Number -->
            <div>
                <label class="block uppercase text-sm tracking-wider mb-2">PHONE NUMBER</label>
                <input type="tel" name="phone"
                    class="w-full bg-transparent border-b border-white focus:outline-none focus:border-gray-300 transition duration-300 py-2">
            </div>

            <!-- Message -->
            <div>
                <label class="block uppercase text-sm tracking-wider mb-2">MESSAGE</label>
                <textarea name="message"
                    class="w-full bg-transparent border-b border-white focus:outline-none focus:border-gray-300 transition duration-300 py-2 h-20" required></textarea>
            </div>

            <div>
                <label class="block uppercase text-sm tracking-wider mb-2">Which Metri service do you need assistance with?</label>
                <span class="text-[#cbd5e1e3]">You can select multiple options. Feel free to choose all that apply!</span>
                <div class="flex flex-wrap gap-3 mt-2">
                    @foreach([
                        'metri entertainment' => '#F45353',
                        'metri design' => '#3C7AD3',
                        'metri digital' => '#44AC60',
                        'metri event' => '#db4d4d',
                        'metri film' => '#06B6D4',
                        'tang ting' => '#d7bd38',
                        'metri post' => '#F7931E'
                    ] as $service => $color)
                        <label class="group flex items-center space-x-2 backdrop-blur-md bg-white/20 px-4 py-2 rounded-md cursor-pointer transition-all duration-300 ease-in-out hover:bg-white/30 active:scale-95">
                            <input type="checkbox" class="hidden peer" name="services[]" value="{{ $service }}">
                            <span class="group-hover:scale-105 peer-checked:text-white peer-checked:font-bold peer-checked:px-3 peer-checked:py-1 peer-checked:rounded-md transition-all duration-300"
                                  data-color="{{ $color }}">
                                {{ $service }}
                            </span>
                        </label>
                    @endforeach
                </div>
            </div>

            <!-- Checkbox -->
            <div class="flex items-center space-x-2">
                <input type="checkbox" id="agree" class="w-4 h-4 border-gray-400 bg-transparent">
                <label for="agree" class="text-sm">By submitting, you agree to the use of your data</label>
            </div>

            <!-- Submit Button -->
            <button type="submit" id="submitBtn" class="flex items-center space-x-2 group text-gray-400 opacity-50 cursor-not-allowed" disabled>
                <span class="border-b border-white group-hover:border-gray-300 transition duration-300">Send message</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 group-hover:translate-x-1 transition duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>

            <!-- Notifikasi sukses -->
            <div id="successMessage" class="hidden font-bold mt-4">
                Email sent successfully!
            </div>
        </form>
    </div>
</section>

{{-- script padding services --}}
<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll("input[type='checkbox']").forEach((checkbox) => {
            checkbox.addEventListener("change", function () {
                let label = this.closest("label").querySelector("span");
                if (this.checked) {
                    label.style.backgroundColor = label.getAttribute("data-color");
                } else {
                    label.style.backgroundColor = "transparent";
                }
            });
        });
    });
</script>

{{-- script checkbox dan Notifikasi email sent successfully --}}
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const agreeCheckbox = document.getElementById("agree");
        const submitBtn = document.getElementById("submitBtn");
        const form = document.querySelector("form");
        const successMessage = document.getElementById("successMessage");

        // Enable/disable submit button based on checkbox state
        agreeCheckbox.addEventListener("change", function () {
            if (agreeCheckbox.checked) {
                submitBtn.disabled = false;
                submitBtn.classList.remove("cursor-not-allowed", "opacity-50", "text-gray-400");
                submitBtn.classList.add("cursor-pointer", "text-white");
            } else {
                submitBtn.disabled = true;
                submitBtn.classList.add("cursor-not-allowed", "opacity-50", "text-gray-400");
                submitBtn.classList.remove("cursor-pointer", "text-white");
            }
        });

        // Handle form submission
        form.addEventListener("submit", function () {
            submitBtn.disabled = true; // Mencegah double submit
            submitBtn.classList.add("cursor-not-allowed", "opacity-50");

            // Tampilkan notifikasi sukses setelah submit berhasil
            setTimeout(() => {
                successMessage.classList.remove("hidden");
                successMessage.classList.add("block");
            }, 500);
        });
    });
</script>
