/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        morado: {
          100: "#D198C5",
          200: "#B96EB1",
          300: "#9169A5",
          400: "#7C4C96"
        }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
  plugins: [],
}
}