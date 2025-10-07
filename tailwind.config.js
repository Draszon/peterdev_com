import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    safelist: [
        'animate-appear',
        'animate-disappear',
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
                dGreen: '#008758',
                orange: '#FF6E14',
                white: '#FFFFFF',
                darkGreen: '#082026',
                darkerGreen: '#15333B',
            },
            keyframes: {
                appear: {
                    '0%': {maxHeight: '0px'},
                    '100%': {maxHeight: '486px'},
                },
                disappear: {
                    '0%': {maxHeight: '486px'},
                    '100%': {maxHeight: '0px'},
                },
            },
            animation: {
                appear: 'appear .5s ease-in-out forwards',
                disappear: 'disappear .5s ease-in-out forwards',
            }
        },
    },

    plugins: [forms],
};
