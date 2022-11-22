const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter var', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'dss-purple': '#5D35CF',
                'dss-purple-hover': '#784FED',
                'dss-light-purple': "#FAF4FF"
            }
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
