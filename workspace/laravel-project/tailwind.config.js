/** @type {import('tailwindcss').Config} */
module.exports = {
  purge: [
    './resources/todolists/index.blade.php',
    // './resources/**/*.js',
    // './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
