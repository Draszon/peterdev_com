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
                //alapértelmezett az inter-font, amúgy 
                sans: ['Inter', 'sans-serif', ...defaultTheme.fontFamily.sans],
                inter: ['Inter', 'sans-serif'],
                ubuntu: ['Ubuntu', 'sans-serif'],
            },
            colors: {
                //saját színek
                green: '#00A96E',
                orange: '#FF6E14',
                white: 'FFFFFF',
                mainBg: '#082026',
                menuBg: '#15333B',
                font: '#082026',
                
            }
        },
    },

    plugins: [forms],
};
