import '../styles/globals.css'
import 'prism-themes/themes/prism-vsc-dark-plus.css'
import { ThemeProvider } from 'next-themes'

export default function MyApp({ Component, pageProps }) {
  return (
    <ThemeProvider>
      <Component {...pageProps} />
    </ThemeProvider>
  )
}