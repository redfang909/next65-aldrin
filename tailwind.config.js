const plugin = require('tailwindcss/plugin');

module.exports = {
  purge: [],
  theme: {
    extend: {
        fontFamily: {
            'display': ['Oswald'],
            'body': ['Open Sans'],
        },
        colors: {
            black: '#090979'
        }
    },
  },
  variants: {},
  plugins: [
    plugin(function({ addComponents }) {
        const buttons = {
          '.btnx': {
            padding: '.5rem 1rem',
            borderRadius: '.25rem',
            fontWeight: '600',
          },
          '.btn-bluex': {
            backgroundColor: '#3490dc',
            color: '#fff',
            '&:hover': {
              backgroundColor: '#742a2a'
            },
          },
          '.btn-red': {
            backgroundColor: '#e3342f',
            color: '#fff',
            '&:hover': {
              backgroundColor: '#cc1f1a'
            },
          },
        }

        addComponents(buttons)
    })
  ],
}
