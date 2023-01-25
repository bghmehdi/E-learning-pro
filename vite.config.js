import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/css/app.css',
                'resources/css/welcome.css',
                'resources/js/app.js',
                'resources/js/accesses.js',
                'resources/js/selectOptions.js',
                'resources/js/tableHours.js',
            ],
            refresh: true,
        }),
    ],
});
