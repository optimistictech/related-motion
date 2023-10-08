/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}"],
  theme: {
    extend: {
      colors: {
        'main-bg': '#000'

      },
      fontFamily: {
        'kaleko': ['Kaleko 105'],
        'nunito': ['Nunito Sans'],



      },
      backgroundImage: {
        'videoBg': "url('./img/video.png')",
      }
    },
  },
  plugins: [],
}

