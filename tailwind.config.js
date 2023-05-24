/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
    colors:{
      transparent: 'transparent',
      current: 'currentColor',
      'neutral' : {
        50: '#FAFAFA',
        100: '#F4F4F5',
        200: '#E4E4E7',
        300: '#D4D4D8',
        400: '#A1A1AA',
        500: '#71717A',
        600: '#52525B',
        700: '#3F3F46',
        800: '#27272A',
        900: '#18181B',
      },
      'primary' : {
        50: '#FFFFEA',
        100: '#FFFCC5',
        200: '#FFFA85',
        300: '#FFF046',
        400: '#FFE21B',
        500: '#FFC300',
        600: '#E29700',
        700: '#BB6B02',
        800: '#985308',
        900: '#7C430B',
      },
    },
    fontFamily: {
      'lora' : ['Lora', 'serif'],
      'work-sans' : ['"Work Sans"', 'sans-serif'],
    }
  },
  plugins: [],
}

