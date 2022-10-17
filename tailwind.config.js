/**
 * https://css-tricks.com/adding-tailwind-css-to-wordpress-themes/
 */
module.exports = {
  content: ["./**/*.php"],
  theme: {
    screens: {
      sm: '480px',
      md: '768px',
      lg: '976px',
      xl: '1440px'
    },
    extend: {},
  },
  plugins: [],
}