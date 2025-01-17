/** @type {import('tailwindcss').Config} */


import { slate, blue, emerald, red, amber, sky, green } from 'tailwindcss/colors';

export const content = [
    "./resources/**/*.{php,html,js}",
    './resources/**/*.blade.php',
    './resources/**/*.vue',
];
export const darkMode = "class";
export const theme = {
    fontFamily: {
        sans: ["Inter", "sans-serif"],
    },
    colors: {
        transparent: "transparent",
        current: "currentColor",
        light: slate,
        dark: slate,
        primary: blue,
        complem: emerald,
        danger: red,
        alert: amber,
        info: sky,
        success: green,
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
};
export const plugins = [];
