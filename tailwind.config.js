/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
      './resources/**/*.blade.php',
      './resources/**/*.vue',
      './resources/**/*.js',
  ],
  theme: {
    extend: {
      fontFamily: {

        cuaderno: ['"Indie Flower"','cursive'],

      }

    },
  },
  plugins: [],
}