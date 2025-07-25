/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    darkMode: "class", // Enable class-based dark mode
    theme: {
        extend: {
            colors: {
                primary: {
                    DEFAULT: "#5F0055",
                    light: "#ede9fe",
                },
                secondary: {
                    DEFAULT: "#3B82F6",
                    light: "#DBEAFE",
                },
                accent: {
                    DEFAULT: "#F59E0B",
                    light: "#FEF3C7",
                },
                success: {
                    DEFAULT: "#10B981",
                    light: "#D1FAE5",
                },
                warning: {
                    DEFAULT: "#F59E0B",
                    light: "#FEF3C7",
                },
                error: {
                    DEFAULT: "#EF4444",
                    light: "#FEE2E2",
                },
            },
            fontFamily: {
                sans: [
                    "Instrument Sans",
                    "ui-sans-serif",
                    "system-ui",
                    "sans-serif",
                ],
            },
            borderRadius: {
                DEFAULT: "0.375rem",
            },
            boxShadow: {
                DEFAULT:
                    "0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06)",
            },
            transitionProperty: {
                DEFAULT: "all",
            },
            transitionDuration: {
                DEFAULT: "200ms",
            },
            transitionTimingFunction: {
                DEFAULT: "ease-in-out",
            },
        },
    },
    plugins: [],
};
