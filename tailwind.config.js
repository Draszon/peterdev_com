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
                //alapértelmezett az inter-font, a többit pedig váltogatom
                sans: ['Inter', 'sans-serif', ...defaultTheme.fontFamily.sans],
                ubuntu: ['Ubuntu', 'sans-serif'],
            },
            colors: {
                //saját színek
                green: '#00A96E',
                orange: '#FF6E14',
                white: '#FFFFFF',
                darkGreen: '#082026',
                darkerGreen: '#15333B',
            },
            keyframes: {
                appear: {
                    '0%': {opacity: '0'},
                    '100%': {opacity: '1'},
                },
                disappear: {
                    '0%': {opacity: '1'},
                    '100%': {opacity: '0'},
                },
            },
            animation: {
                appear: '.2s ease forwards',
                disappear: '.2s ease forwards',
            }
        },
    },

    plugins: [forms],
};
