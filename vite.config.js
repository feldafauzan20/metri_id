import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import livewire from "@defstudio/vite-livewire-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",
                "resources/js/main.js",
                "resources/js/service.js",
            ],
            refresh: true,
        }),

        livewire({
            refresh: ["resources/views/", "app/Http/Livewire/"],
        }),
    ],
});
