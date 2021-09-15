module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      gridTemplateRows: {
        '3': 'auto 1fr auto'
      },
      outline: {
        blue: '4px solid rgb(17, 24, 39)'
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
