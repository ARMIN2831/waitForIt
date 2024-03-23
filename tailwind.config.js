/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            keyframes: {
                slider: {
                    '0%': { transform: 'translateX(0)' },
                    '100%': { transform: 'translateX(-100%)' },
                },
                slider2: {
                    '0%': { transform: 'translateX(100%)' },
                    '100%': { transform: 'translateX(0%)' },
                },
                feature: {
                    '0%': { transform: 'translateX(0)' },
                    '100%': { transform: 'translateX(100%)' },
                },
                feature2: {
                    '0%': { transform: 'translateX(-100%)' },
                    '100%': { transform: 'translateX(0)' },
                },
            },
            animation: {
                'sliderAnimate': 'slider 80s linear infinite',
                'sliderAnimate2': 'slider2 80s linear infinite',
                'featuresAnimate': 'feature 40s linear infinite',
                'featuresAnimate2': 'feature2 40s linear infinite',
                'featuresAnimateRight': 'slider 40s linear infinite',
                'featuresAnimateRight2': 'slider2 40s linear infinite',
            },
            fontFamily: {
                'arial': 'Arial',
            }
        }
    },
    plugins: [],
}
