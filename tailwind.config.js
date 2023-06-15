/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    darkMode: "class",
    theme: {
        extend: {
            fontFamily: {
                nevada: ['"Nevada"', "sans-serif"],
                poppins: ['"Poppins"', "sans-serif"],
            },
            spacing: {
                128: "32rem",
                144: "36rem",
                18: "4.5rem",
            },
            fontSize: {
                heading1: [
                    "3rem",
                    {
                        lineHeight: "4.5rem",
                        fontWeight: "600",
                    },
                ],
                heading2: [
                    "2.25rem",
                    {
                        fontWeight: "600",
                    },
                ],
                heading3: "2rem",
                heading4: "1.5rem",
                paragraph1: "1.25rem",
                paragraph2: "1rem",
            },
            colors: {
                "background-primary": "#ffffff",
                "background-secondary": "#3f4531",
                "background-tertiary": "#499167",
                primary: "#5fdd9d",
                secondary: "#76f7bf",
                button: "#91f9e5",
            },
        },
    },
    variants: {
        extend: {
            lineclamp: ["hover"],
            backgroundColor: ["active"],
        },
    },
    // plugins: [require("@tailwindcss/line-clamp")],
};
