import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                freigtNeo: ['Freight_Neo_Pro'],
                robotoLight: ['Roboto_Light']
            },
            colors:{
                mgblack: {
                    100: '#232221',
                    200: '#212529'
                },
                mggold: {
                    100:'#dcb38d'
                },
                mggrey: {
                    100: '#babbbb',
                    200: '#56565a'
                }
            }
        },
    },

    plugins: [forms, typography],
};
