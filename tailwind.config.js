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

            colors:{
                'verde': {
                    '50': '#f3f6f3',
                    '100': '#e4e8e3',
                    '200': '#c8d2c8',
                    '300': '#a2b3a3',
                    '400': '#788f7b',
                    '500': '#526855',//original
                    '600': '#435846',
                    '700': '#364639',
                    '800': '#2c392e',
                    '900': '#252f27',
                    '950': '#141a16',
                },

                'oro': {
                    '50': '#f9f6ed',
                    '100': '#f1e9d0',
                    '200': '#e4d1a4',
                    '300': '#d4b370',
                    '400': '#ca9e52', //original
                    '500': '#b8843a',
                    '600': '#9e6830',
                    '700': '#7f4e29',
                    '800': '#6a4029',
                    '900': '#5c3727',
                    '950': '#351c13',
                },

                'gris': {
                    '50': '#f8f8f8',
                    '100': '#ececec', //original
                    '200': '#dcdcdc',
                    '300': '#bdbdbd',
                    '400': '#989898',
                    '500': '#7c7c7c',
                    '600': '#656565',
                    '700': '#525252',
                    '800': '#464646',
                    '900': '#3d3d3d',
                    '950': '#292929',
                },
            },

            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
};
