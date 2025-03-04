<footer class="relative text-white py-12 overflow-hidden flex justify-center items-center h-screen">
    <!-- Tree Background -->
    <img src="{{ asset('images/tree-footer.webp') }}" alt="" id="tree-footer"
        class="absolute bottom-0 left-0 w-full max-w-none h-auto" loading="lazy" />

    <div class="container mx-auto px-8 relative z-10 flex flex-col justify-center items-center text-center">
        <div class="flex flex-wrap justify-between gap-8 w-full">
            <!-- Logo & Description -->
            <div class="max-w-sm text-left">
                <img src="{{ asset('images/logo/logo-putih-baru.webp') }}" alt="metri Logo" width="150">
                <p class="text-sm text-gray-400">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus dolorum, sit distinctio
                    perferendis cumque, praesentium inventore aliquid consequuntur aliquam modi quibusdam vel suscipit
                    possimus tempora
                </p>
            </div>

            <!-- Quick Links -->
            <div class="text-left">
                <h4 class="text-lg font-semibold mb-3">QUICK LINK</h4>
                <ul class="text-gray-400 space-y-2">
                    <li><a href="/" class="hover:text-white">Home</a></li>
                    <li><a href="/about" class="hover:text-white">About Us</a></li>
                    <li><a href="/contact" class="hover:text-white">Contact Us</a></li>
                </ul>
            </div>

            <!-- Sub Company -->
            <div class="text-left ">
                <h4 class="text-lg font-semibold mb-3">SUB COMPANY</h4>
                <ul class="text-gray-400 space-y-2">
                    <li><a href="/metri-entertainment" class="hover:text-white">metri entertainment</a></li>
                    <li><a href="/metri-film" class="hover:text-white">metri film</a></li>
                    <li><a href="/metri-post" class="hover:text-white">metri post</a></li>
                    <li><a href="/metri-tang-ting" class="hover:text-white">tang ting</a></li>
                    <li><a href="/metri-event" class="hover:text-white">metri event</a></li>
                    <li><a href="/metri-digital" class="hover:text-white">metri digital</a></li>
                    <li><a href="/metri-design" class="hover:text-white">metri design</a></li>
                </ul>
            </div>
        </div>

        <!-- Copyright & Social Icons -->
        <div class="mt-10 border-t border-white pt-6 flex justify-between items-center w-full">
            <p class="text-gray-400 text-sm">© 2024 Metri. All Rights Reserved.</p>
            <div class="flex space-x-4">
                <!-- Facebook -->
                <a href="https://www.facebook.com/metri.id/" target="_blank"
                    class="w-8 h-8 flex items-center justify-center rounded-full border border-gray-500 hover:border-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400 hover:text-white"
                        viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M22 12.06C22 6.485 17.523 2 12 2S2 6.485 2 12.06c0 4.99 3.657 9.127 8.438 9.88v-6.988H7.897v-2.892h2.54V9.47c0-2.506 1.492-3.89 3.777-3.89 1.095 0 2.24.195 2.24.195v2.46h-1.263c-1.244 0-1.632.775-1.632 1.568v1.885h2.773l-.443 2.892h-2.33v6.988C18.343 21.187 22 17.05 22 12.06z" />
                    </svg>
                </a>

                <!-- X (Twitter) -->
                <a href="#" target="_blank"
                    class="w-8 h-8 flex items-center justify-center rounded-full border border-gray-500 hover:border-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400 hover:text-white"
                        viewBox="0 0 24 24" fill="currentColor">
                        <path d="M17.7 3H21l-7.5 8.5L22 21h-6l-5-6.5L5.3 21H2l8.2-9.2L2 3h6l4.7 6L17.7 3z" />
                    </svg>
                </a>

                <!-- Instagram (Terbaru) -->
                <a href="https://www.instagram.com/metri_id/" target="_blank"
                    class="w-8 h-8 flex items-center justify-center rounded-full border border-gray-500 hover:border-white">
                    <svg class="w-5 h-5 text-gray-400 hover:text-white" viewBox="0 0 24 24" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M12 18C15.3137 18 18 15.3137 18 12C18 8.68629 15.3137 6 12 6C8.68629 6 6 8.68629 6 12C6 15.3137 8.68629 18 12 18ZM12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16Z" />
                        <path
                            d="M18 5C17.4477 5 17 5.44772 17 6C17 6.55228 17.4477 7 18 7C18.5523 7 19 6.55228 19 6C19 5.44772 18.5523 5 18 5Z" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M1.65396 4.27606C1 5.55953 1 7.23969 1 10.6V13.4C1 16.7603 1 18.4405 1.65396 19.7239C2.2292 20.8529 3.14708 21.7708 4.27606 22.346C5.55953 23 7.23969 23 10.6 23H13.4C16.7603 23 18.4405 23 19.7239 22.346C20.8529 21.7708 21.7708 20.8529 22.346 19.7239C23 18.4405 23 16.7603 23 13.4V10.6C23 7.23969 23 5.55953 22.346 4.27606C21.7708 3.14708 20.8529 2.2292 19.7239 1.65396C18.4405 1 16.7603 1 13.4 1H10.6C7.23969 1 5.55953 1 4.27606 1.65396C3.14708 2.2292 2.2292 3.14708 1.65396 4.27606ZM13.4 3H10.6C8.88684 3 7.72225 3.00156 6.82208 3.0751C5.94524 3.14674 5.49684 3.27659 5.18404 3.43597C4.43139 3.81947 3.81947 4.43139 3.43597 5.18404C3.27659 5.49684 3.14674 5.94524 3.0751 6.82208C3.00156 7.72225 3 8.88684 3 10.6V13.4C3 15.1132 3.00156 16.2777 3.0751 17.1779C3.14674 18.0548 3.27659 18.5032 3.43597 18.816C3.81947 19.5686 4.43139 20.1805 5.18404 20.564C5.49684 20.7234 5.94524 20.8533 6.82208 20.9249C7.72225 20.9984 8.88684 21 10.6 21H13.4C15.1132 21 16.2777 20.9984 17.1779 20.9249C18.0548 20.8533 18.5032 20.7234 18.816 20.564C19.5686 20.1805 20.1805 19.5686 20.564 18.816C20.7234 18.5032 20.8533 18.0548 20.9249 17.1779C20.9984 16.2777 21 15.1132 21 13.4V10.6C21 8.88684 20.9984 7.72225 20.9249 6.82208C20.8533 5.94524 20.7234 5.49684 20.564 5.18404C20.1805 4.43139 19.5686 3.81947 18.816 3.43597C18.5032 3.27659 18.0548 3.14674 17.1779 3.0751C16.2777 3.00156 15.1132 3 13.4 3Z" />
                    </svg>
                </a>


                <!-- LinkedIn -->
                <a href="https://www.linkedin.com/company/pt-media-tren-idea-metri-id/?originalSubdomain=id"
                    target="_blank"
                    class="w-8 h-8 flex items-center justify-center rounded-full border border-gray-500 hover:border-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400 hover:text-white"
                        viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M21 21h-4v-6c0-1.3-.7-2-1.7-2s-2.3.8-2.3 2v6H9V9h4v1.5A4.6 4.6 0 0117 9c2.8 0 4 1.7 4 4.9V21zM5 21H1V9h4v12zM3 7A2 2 0 113 3a2 2 0 010 4z" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</footer>
