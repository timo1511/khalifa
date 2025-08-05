import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.js',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                serif: ['Playfair Display', 'Georgia', 'serif'],
                'serif-elegant': ['Playfair Display', 'serif'],
            },
            colors: {
                'maroon-dark': '#4A2C2A',
                'gold': '#D4A017',
                'beige-light': '#F5F5F5',
                'maroon-medium': '#6B4E4A',
            },
            boxShadow: {
                'xl': '0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05)',
                'nav': '0 2px 4px 0 rgba(0, 0, 0, 0.1)',
            },
            transitionProperty: {
                'transform-opacity': 'transform, opacity',
            },
            animation: {
                scroll: 'scroll 20s linear infinite',
            },
            keyframes: {
                scroll: {
                    'from': { transform: 'translateX(0)' },
                    'to': { transform: 'translateX(calc(-100% - 2rem))' },
                },
            },
        },
    },
    plugins: [forms, typography],
};