const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    mode: 'jit',
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                'tkdBlue': {
                    '50': '#f5fbff',
                    '100': '#eaf8ff',
                    '200': '#cbedff',
                    '300': '#abe3ff',
                    '400': '#6dcdff',
                    '500': '#2eb8ff',
                    '600': '#29a6e6',
                    '700': '#238abf',
                    '800': '#1c6e99',
                    '900': '#175a7d'
                }
            },
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
