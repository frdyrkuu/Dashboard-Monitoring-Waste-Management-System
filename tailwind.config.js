/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}", "*.html", "./admin/*.php"],
  theme: {
    extend: {
      keyframes: {
        wave: {
          '0%': { transform: 'rotate(0.0deg)' },
          '10%': { transform: 'rotate(14deg)' },
          '20%': { transform: 'rotate(-8deg)' },
          '30%': { transform: 'rotate(14deg)' },
          '40%': { transform: 'rotate(-4deg)' },
          '50%': { transform: 'rotate(10.0deg)' },
          '60%': { transform: 'rotate(0.0deg)' },
          '100%': { transform: 'rotate(0.0deg)' },
        },
        slowspin: {
          '0%': {
            transform: 'rotate(0deg)'
          },
          '100': {
            transform: 'rotate(360deg)'
          },
        },
        reveal: {
          '0%': {
            transform: 'translateY(-20%)'
          },
          '100%': {
            transform: 'translateY(0%)'
          },
        },
      },

      animation: {
        'waving-hand': 'wave 2s linear infinite',
        'slowspin': 'slowspin 5s linear infinite',
        reveal: 'reveal 1s',
      },



    },
  },
  plugins: [],
}