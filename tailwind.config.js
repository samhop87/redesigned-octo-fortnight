const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    theme: {
        extend: {
            fontFamily: {
                'display': ['"Barrio"', 'cursive'],
                'player': ['"Press Start 2P"','cursive'],
            },
            colors: {
                'turquoise': 'rgb(79, 209, 197)',
                'deepgreen': 'rgba(9,114,102,255)',
                'cleomagenta': 'rgb(219,65,99)',
                'offblack': 'rgb(71,78,100)',
                'colman': 'rgb(215,163,53)',
                'github': '#6e5494',
                'linkedIn': '#0072b1',
                'neongreen': '#00FF00',
                'neonred': '#FD1C03',
                'neonpurple': '#CC00FF',
                'darkpurple': '#6E0DD0',
                'neonblue': '#0062FF'
            },
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
