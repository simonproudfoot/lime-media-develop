
// postcss.confing.js

const colors = require('tailwindcss/colors')
module.exports = {
    mode: 'jit',
    future: {
        removeDeprecatedGapUtilities: true,
        purgeLayersByDefault: true,
    },
    purge: ["./src/**/*.svelte", "./src/**/*.php", "./*php", "./plugins/**/*.svelte", "./partials/*.php", "./partials/imagesPopup.php", '*.php', '*./.php', "./plugins/**/*.svelte", "./footer.php", "./header.php", "./single-shows.php"],
    prefix: '',
    important: false,
    separator: ':',
    theme: {
        container: {
            center: true,
            padding: {
                DEFAULT: '1rem',
                sm: '2rem',
                lg: '4rem',
                xl: '5rem',
                '2xl': '6rem',
            },
        },
        colors: {
            black: colors.black,
            white: colors.white,
            gray: colors.gray,
            'blacktransparent': 'rgba(0,0,0, 0.7)',
            'dark': '#252525',
            'greentransparent': 'rgba(0, 167, 157, 0.8)',
            'brandgrey': '#2B3137',
            'lime': '#8DC63F',
            'yellow': '#FBB040',
            'accent': '#D03D8F',
            'accentDark': '#AF367A',
            'turq': '#00A79D',
            'turqDark': '#2B3137',
            'turqTransparent': 'rgba(255,167 157, 0.8)',
        },
        extend: {
            fontFamily: {
                'Comfortaa': ['Comfortaa', 'cursive']
            },

            fontSize: {
                xxs: '0.575rem',
            },
            lineHeight: {
                tighter: '1.125',
            },
        }
    },

    plugins: [

    ]
};
