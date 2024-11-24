import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                transparent: 'transparent',
                mermud: {
                    300: "#f9a8d4"
                },
                mermuda: {
                    50: "#fdf2f8"
                },
                stonemud: {
                    50: "#fafaf9"
                },
            },
            fontFamily: {
                montserrat: ['Montserrat'],
                poppins: ['Poppins'],
                berkshire: ['Berkshire Swash'],
                windsong: ['WindSong'],
                parisienne: ['Parisienne'],
                nautigal : ['The Nautigal'],
                sans3 : ['Source Sans 3']
            },
        },
    },
    plugins: [],
};
