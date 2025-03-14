<section class=" my-20 px-4 text-white">
    <div class="flex flex-col md:flex-row items-start justify-between gap-6">
        <!-- Left Side -->
        <div class="w-full md:w-2/5">
            <!-- Contact Form Button -->
            <a class="border border-white px-6 py-2 rounded-full text-white mb-4">
                Contact Form
            </a>
        </div>

        <!-- Right Side: Form -->
        <form id="contactForm" action="{{ route('contact.submit') }}" method="POST" class="w-full">
            @csrf

            <h2 class="text-xl font-light mb-6 lg:w-10/12">
                We’d love to hear it from you. If you have any inquiry about our 360 services, don’t hesitate to reach
                out to us.
            </h2>

            <!-- Name -->
            <div>
                <label class="block uppercase text-sm tracking-wider mb-2">NAME</label>
                <input type="text" name="name"
                    class="w-full bg-transparent border-b border-white focus:outline-none focus:border-gray-300 transition duration-300 py-2"
                    required>
            </div>

            <!-- Email -->
            <div>
                <label class="block uppercase text-sm tracking-wider my-6">EMAIL</label>
                <input type="email" name="email"
                    class="w-full bg-transparent border-b border-white focus:outline-none focus:border-gray-300 transition duration-300 py-2"
                    required>
            </div>

            <!-- Phone Number -->
            <div>
                <label class="block uppercase text-sm tracking-wider my-6">PHONE NUMBER</label>
                <input type="tel" name="phone"
                    class="w-full bg-transparent border-b border-white focus:outline-none focus:border-gray-300 transition duration-300 py-2">
            </div>

            <!-- Message -->
            <div>
                <label class="block uppercase text-sm tracking-wider my-6">MESSAGE</label>
                <textarea name="message"
                    class="w-full bg-transparent border-b border-white focus:outline-none focus:border-gray-300 transition duration-300 py-2 h-20"
                    required></textarea>
            </div>

            <!-- Services -->
            <div>
                <label class="block uppercase text-sm tracking-wider mt-6">Which Metri service do you need assistance
                    with?</label>
                <span class="text-[#cbd5e1e3]">You can select multiple options. Feel free to choose all that
                    apply!</span>
                <div class="flex flex-wrap gap-3 mt-2">
                    @foreach ([
        'metri entertainment' => '#F45353',
        'metri design' => '#3C7AD3',
        'metri digital' => '#44AC60',
        'metri event' => '#db4d4d',
        'metri film' => '#06B6D4',
        'tang ting' => '#d7bd38',
        'metri post' => '#F7931E',
    ] as $service => $color)
                        <label
                            class="group flex items-center space-x-2 backdrop-blur-md bg-white/20 px-4 py-2 rounded-md cursor-pointer transition-all duration-300 ease-in-out hover:bg-white/30 active:scale-95">
                            <input type="checkbox" class="hidden peer" name="services[]" value="{{ $service }}">
                            <span
                                class="group-hover:scale-105 peer-checked:text-white peer-checked:font-bold peer-checked:px-3 peer-checked:py-1 peer-checked:rounded-md transition-all duration-300"
                                data-color="{{ $color }}">
                                {{ $service }}
                            </span>
                        </label>
                    @endforeach
                </div>
            </div>

            <!-- Agreement -->
            <div class="flex items-center space-x-2 my-3">
                <input type="checkbox" id="agree" class="w-4 h-4 border-gray-400 bg-transparent">
                <label for="agree" class="text-xs md:text-sm">By submitting, you agree to the use of your
                    data</label>
            </div>

            <!-- Submit Button -->
            <button type="submit" id="submitBtn"
                class="flex items-center space-x-2 group text-gray-400 opacity-50 cursor-not-allowed" disabled>
                <span class="border-b border-white group-hover:border-gray-300 transition duration-300">Send
                    message</span>
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-4 h-4 group-hover:translate-x-1 transition duration-300" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>

            <!-- Notifikasi sukses -->
            <div role="alert" id="successMessage" class="alert alert-success my-5 hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current text-white"
                    fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span class="text-white">Email sent successfully!</span>
            </div>
        </form>
    </div>
</section>

<!-- Meta Pixel -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const form = document.getElementById("contactForm");
        const successMessage = document.getElementById("successMessage");

        form.addEventListener("submit", async function(e) {
            e.preventDefault();

            const formData = new FormData(form);

            const response = await fetch(form.action, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
                body: formData
            });

            if (response.ok) {
                successMessage.classList.remove("hidden");

                // Facebook Pixel Event
                fbq('track', 'Lead');

                // Google Analytics Event
                gtag('event', 'contact_form_submission', {
                    'email': formData.get('email'),
                    'services': formData.getAll('services[]').join(", "),
                    'message': formData.get('message')
                });
            }
        });
    });
</script>

{{-- script padding services --}}
<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll("input[type='checkbox']").forEach((checkbox) => {
            checkbox.addEventListener("change", function() {
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
    document.addEventListener("DOMContentLoaded", function() {
        const agreeCheckbox = document.getElementById("agree");
        const submitBtn = document.getElementById("submitBtn");
        const form = document.querySelector("form");
        const successMessage = document.getElementById("successMessage");

        // Enable/disable submit button based on checkbox state
        agreeCheckbox.addEventListener("change", function() {
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
        form.addEventListener("submit", function() {
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
