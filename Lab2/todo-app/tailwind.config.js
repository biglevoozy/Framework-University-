/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
    theme: {
        extend: {
            gridTemplateRows: {
                layout: "auto 1fr auto",
            },
            fontFamily: {
                main: ["Roboto Mono"],
            },
        },
    },
    plugins: [],
};
