import Head from 'next/head'
import Image from 'next/image'
import Link from 'next/link'
import Divider from './divider'

const containerStyle = `
  container
  md:drop-shadow-xl
  md:border-1
  md:mx-auto
  sm:max-w-3xl
  mx-auto
  bg-white
  p-6
  md:my-8
`

export default function Layout({ dark, children }) {
  return (
    <>
      <Head>
        <link rel="icon" href="/favicon.ico" />
      </Head>
      <div className={containerStyle + 'dark:bg-secondary dark:border-2 dark:border-slate-800 dark:text-textDark'}>
        <header className='sm:flex sm:flex-row sm:justify-between flex flex-col items-center pb-2'>
          <Link href='/' passHref>
            <h1 className="hover:underline underline-offset-4 hover:cursor-pointer text-3xl font-black sm:pb-0 pb-2 dark:text-textLight">
              Paul Pires
            </h1>
          </Link>
          <ul className='flex flex-row gap-3'>
            <ImageLink image='/linkedin-white.svg' href={'https://www.linkedin.com/in/paulpires/'} alt='linkedin' />
            <ImageLink image="/github-white.svg" href='https://github.com/paulpires' alt='github' />
            <ImageLink image="/twitter-white.svg" href='https://twitter.com/paul_pires' alt='twitter' />
            <Link href={'/resume.pdf'} passHref><ImageLink image="/cv-white.svg" alt='cv' /></Link>
            <button>{dark ? 'dark' : 'light'}</button>
          </ul>
        </header>
        <Divider />
        <main>{children}</main>
      </div>
      <footer className='text-center relative pb-8'>
        <p className='text-xs text-gray-400/80'>Copyright © 2022, Paul Pires.</p>
      </footer>
    </>
  )
}

function isDark() {
  if (typeof window !== 'undefined')
  {
    return window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches
  }
  return false
}

function ImageLink(props) {
  return (
    <a href={props.href} target='_blank' rel='noreferrer' className=''>
      <Image
        className='fill-red-900'
        priority
        src={props.image}
        height={40}
        width={40}
        alt={props.alt}
      />
    </a>
  )
}