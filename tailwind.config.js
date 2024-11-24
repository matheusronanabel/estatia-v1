import defaultTheme from "tailwindcss/defaultTheme";

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
                "estatia" : {
                    "black" : "#252525",
                    "dark-blue" : "#184062",
                    "darker-blue" : "#0E2539",
                    "primary-blue" : "#2C74B3",
                    "secondary-blue" : "#205295",
                    "light-blue" : "#6CA7DB",
                    "light-blue-200" : "#EAF1FA",
                    "dark-grey" : "#CCCCCC",
                    "light-grey" : "#999999",
                    "light-grey-200" : "#E6E6E6",
                    "light-grey-300" : "#737373",
                    "grey" : "#595959",
                }
            }
        },
    },
    plugins: [],
};
