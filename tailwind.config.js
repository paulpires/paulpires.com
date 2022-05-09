module.exports = {
  content: [
    "./pages/**/*.{js,ts,jsx,tsx}",
    "./components/**/*.{js,ts,jsx,tsx}",
  ],
  theme: {
    extend: {
      colors: {
        primary: '#0E141B',
        secondary: '#20262E',
        textLight: '#E4E6EB',
        textDark: '#B0B3B8'
      }
    }
  },
  plugins: [
    require('@tailwindcss/typography')
  ],
}