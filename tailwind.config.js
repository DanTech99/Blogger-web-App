const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require("tailwindcss/colors");

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                transparent: "transparent",
                current: "currentColor",
                amber: colors.amber,
                black: colors.black,
                blue: colors.blue,
                cyan: colors.cyan,
                emerald: colors.emerald,
                fuchsia: colors.fuchsia,
                gray: colors.trueGray,
                blueGray: colors.blueGray,
                coolGray: colors.coolGray,
                trueGray: colors.trueGray,
                warmGray: colors.warmGray,
                green: colors.green,
                indigo: colors.indigo,
                lime: colors.lime,
                orange: colors.orange,
                pink: colors.pink,
                purple: colors.purple,
                red: {
                    50: '#fef2f2',
                    100: '#fee2e2',
                    200: '#fecaca',
                    300: '#fca5a5',


                },
                rose: colors.rose,
                sky: colors.sky,//warn - As of Tailwind CSS v2.2, `lightBlue` has been renamed to `sky`.
                teal: colors.teal,
                violet: colors.violet,
                yellow: colors.amber,
                white: colors.white,
            },
            fontSize: {
                'xs': '.75rem',
                'sm': '.875rem',
                'tiny': '.875rem',
                'base': '1rem',
                'lg': '1.125rem',
                'xl': '1.25rem',
                '2xl': '1.5rem',
                '3xl': '1.875rem',
                '4xl': '2.25rem',
                '5xl': '3rem',
                '6xl': '4rem',
                '7xl': '5rem',
            },
            screens: {
                'sm': '640px',
                // => @media (min-width: 640px) { ... }

                'md': '768px',
                // => @media (min-width: 768px) { ... }

                'lg': '1024px',
                // => @media (min-width: 1024px) { ... }

                'xl': '1280px',
                // => @media (min-width: 1280px) { ... }

                '2xl': '1536px',
                // => @media (min-width: 1536px) { ... }
            },
            listStyleType: {
                none: 'none',
                disc: 'disc',
                decimal: 'decimal',
                square: 'square',
                roman: 'upper-roman',
            },
            backgroundImage: {
                'hero-pattern': "url('/img/hero-pattern.svg')",
                'footer-texture': "url('/img/footer-texture.png')",
              }

        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
