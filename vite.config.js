import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite'

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
    server: {
        host: 'cubestars.local',
        port: 5173,
        strictPort: true,
        cors: {
            origin: 'http://cubestars.local',
            credentials: true,
        },
        hmr: {
            host: 'cubestars.local',
        },
    },
});
