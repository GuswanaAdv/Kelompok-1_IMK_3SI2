const defaultTheme = require("tailwindcss/defaultTheme");
const colors = require("tailwindcss/colors");

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.css",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        darkgreen: '#006633',
        green: '#93C13D',
        lightgreen: '#DEFC2A',
        lightgrey: '#D9E8E1',
        grey: '#6C757D',
        greenleaves: '#D9F8A1',
        greenleaves2: '#D4FF82',
        lemon: '#CDED13',
        lemonlight: '#EBFFC6',
      },
      fontFamily: {
        raleway: ['Raleway', 'sans-serif'],
        roboto: ['Roboto', 'sans-serif'],
        inter: ['Inter', 'sans-serif'],
        plusjakartasans: ['Plus Jakarta Sans', 'sans-serif']
      },
    },
  },
  plugins: [
    require('daisyui'),
    // require('@tailwindcss/forms')
  ],
}

