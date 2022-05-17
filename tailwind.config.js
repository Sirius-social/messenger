const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    theme: {
        fontFamily: {
            sans: ['Roboto', ...defaultTheme.fontFamily.sans],
        },
        borderRadius: {
            '4xl': '30px',
            ...defaultTheme.borderRadius,
        },
    },

    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
};
