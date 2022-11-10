/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      backgroundImage: {
        'gradient-radial': 'radial-gradient(var(--tw-gradient-stops))',
      },
      colors: {
        gray: {
          888: '#3D3B3B',
          889: '#4E4E4E'
        }
      },
      fontFamily: {
        sansation: 'sansation'
      }
    },
  },
  plugins: [],
}
