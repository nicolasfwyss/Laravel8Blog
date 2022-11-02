/** @type {import('tailwindcss').Config} */

const colors = require('tailwindcss/colors')

module.exports = {
    mode: 'jit',
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors:{
                lime: colors.lime
            }
        },
    },
    plugins: [
        require('@tailwindcss/line-clamp'),
        // ...
    ],
}
