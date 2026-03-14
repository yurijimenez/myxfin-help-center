import jigsaw from '@tighten/jigsaw-vite-plugin';
import tailwindcss from '@tailwindcss/postcss'; // Update this line
import { defineConfig } from 'vite';

export default defineConfig({
    plugins: [
        jigsaw({
            input: [
                'source/_assets/js/main.js',
                'source/_assets/css/main.css',
                'source/_assets/css/home.css',
            ],
        }),
        tailwindcss(), // Ensure this matches the new import above
    ],
});