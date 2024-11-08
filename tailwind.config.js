/** @type {import('tailwindcss').Config} */


const colors = require('tailwindcss/colors');

module.exports = {
    content: [
        "./resources/**/*.{php,html,js}",
        './resources/**/*.blade.php',
        './resources/**/*.vue',
    ],
    darkMode: "class",
    theme: {
        fontFamily: {
            sans: ["Inter", "sans-serif"],
        },
        colors: {
            transparent: "transparent",
            current: "currentColor",
            light: colors.slate,
            dark: colors.slate,
            primary: colors.blue,
            complem: colors.emerald,
            danger: colors.red,
            alert: colors.amber,
            info: colors.sky,
            success: colors.green,
        },
        extend: {
            animation: {
                spin: 'spin 1s linear infinite',
                marquee: "marquee 15s linear infinite",
            },
            keyframes: {
                marquee: {
                    "0%": { transform: "translateX(0)" },
                    "100%": { transform: "translateX(-100%)" },
                },
            },
        },
    },
    plugins: [],
};
