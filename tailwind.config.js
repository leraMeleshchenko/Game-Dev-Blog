import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            keyframes: {
                float: {
                  '0%': { transform: 'translateY(0)', opacity: '0.4' },
                  '100%': { transform: 'translateY(-200px)', opacity: '0' },
                },
              },
              animation: {
                float: 'float 8s ease-in-out infinite',
                'float-slow': 'float 12s ease-in-out infinite',
                'float-fast': 'float 5s ease-in-out infinite',
              },
        },
    },

    plugins: [forms],
};
