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
      width: {
        '100': '400px',
        '120': '550px'
      },
      maxWidth: {
        '100': '400px',
        '120': '550px'
      },
      fontFamily: {
        hind: ['"Hind"', 'sans-serif'],
      },
      gridColumn: {
        '2/3': '2/3'
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

