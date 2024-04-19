/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,js,php, .php}"],
  theme: {
    extend: {},
  },
  plugins: [require('tailwind-scrollbar-hide')],
}