module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/assets/css/**/*.css',
  ],
  theme: {
    extend: {
      colors: {
        'green-demo'       : '#00b200',
        'grey-demo'        : '#223339',
        'grey-demo-1c'     : '#1c2224',
        'color-diners-club': '#1b3887',
        'color-derco'      : '#c23239',
        'color-copec'      : '#ffffff',
        'title-diners-club': '#ffffff',
        'title-derco'      : '#ffffff',
        'title-copec'      : '#000',
        'bgbtn-diners-club': '#ffffff',
        'bgbtn-derco'      : '#ffffff',
        'bgbtn-copec'      : '#c23239',
      }
    }
  },
  variants: {
    borderStyle: ['responsive', 'hover', 'focus'],
  },
  plugins: [
    require('@tailwindcss/ui'),
  ]
}
