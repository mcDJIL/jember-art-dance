const flowbite = require("flowbite-react/tailwind");

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./index.html",
    "./src/**/*.{js,ts,jsx,tsx}",
    flowbite.content(),
  ],
  theme: {
    extend: {
      maxWidth: {
        'screen-default': '1440px',
      },
      width: {
        '120': '480px',
        '132': '520px'
      },
      flex: {
        '2': '2'
      },
      fontFamily: {
        hind: ['"Hind"', 'sans-serif'],
      }
    },
  },
  plugins: [
    flowbite.plugin(),
  ],
}

