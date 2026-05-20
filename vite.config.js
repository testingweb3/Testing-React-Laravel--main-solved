import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/js/main.jsx'],
            refresh: true,
        }),
        react({
            fastRefresh: true,
            jsxRuntime: 'automatic',
        }),
    ],
    server: {
        host: '127.0.0.1',
        port: 5174,
        strictPort: true,
        cors: true,
        hmr: {
            host: '127.0.0.1',
            protocol: 'ws',
            port: 5174,
        },
        watch: {
            usePolling: true,
            interval: 1000,
        },
    },
    resolve: {
        alias: {
            '@': '/resources/js',
        },
    },
    optimizeDeps: {
        include: ['react', 'react-dom', 'react-router-dom'],
        esbuildOptions: {
            target: 'es2020',
        },
    },
    build: {
        outDir: 'public/build',
        // Vite 5 integration: Explicitly write/output manifest to manifest.json (instead of .vite/manifest.json)
        // to make it compatible with older Laravel framework asset helpers
        manifest: 'manifest.json',
        rollupOptions: {
            input: 'resources/js/main.jsx',
        },
    },
});