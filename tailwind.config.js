const defaultTheme = require("tailwindcss/defaultTheme");
module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
    backgroundColor: theme => ({
      ...theme('colors'),
      'bg-dark': '#273444',
      'bg-rating':'#febe42',
      'bg-template': '#3e416d',
      'bg-submenu':'#475260',
      'oranges550': "#ff5a1f",
      'oranges650': "#d03801",
      'blue750': "#31367a",
      'blue850': "#3e416d",
    }),
    container: {
        center: true,
    },
    textColor: theme => ({
        ...theme('colors'),
        'start':'#febe42',
        'oranges500':'#ed8936',
        'oranges550': "#ff5a1f",
        'oranges650': "#d03801",
    }),
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
