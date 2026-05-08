/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./public/resources/**/*.blade.php",
    "./public/resources/**/*.js",
    "./public/resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'maroon-deep': '#1A4D2E',  // Now Deep Forest Green
        'maroon-mid': '#4F7942',   // Now Fern Green
        'temple-red': '#8FBC8F',   // Now Sage Green (Accent)
        'gold-primary': '#C9952C',
        'gold-light': '#E8C46A',
        'gold-pale': '#F5E6A3',
        'ivory': '#F4F9F4',        // Mint Cream
        'ivory-dark': '#E2EBE2',
        'text-dark': '#1A2F23',    // Dark Green-Black
        'text-muted': '#5C7A63',
      },
      fontFamily: {
        'cinzel': ['Cinzel', 'serif'],
        'lato': ['Lato', 'sans-serif'],
      },
    },
  },
  plugins: [],
}

