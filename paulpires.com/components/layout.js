import Head from 'next/head'
import Image from 'next/image'
import Link from 'next/link'

export default function Layout({ children }) {
  return (
    <>
      <Head>
        <link rel="icon" href="/favicon.ico" />
      </Head>
      <div className='container shadow-xl border-1 bg-white mx-auto sm:max-w-none md:max-w-3xl lg:max-w-3x px-4 pt-6 mt-5'>
        <header className='flex justify-between pb-2'>
          <h1 className="text-3xl font-black">
            Paul Pires
          </h1>
          <ul className='flex flex-row gap-3'>
            <ImageLink image="/linkedin.svg" href={'https://www.linkedin.com/in/paulpires/'} />
            <ImageLink image="/github.svg" href='https://github.com/paulpires' />
            <ImageLink image="/twitter.svg" href='https://twitter.com/paul_pires' />
            <Link href={'/resume.pdf'} passHref><ImageLink image="/cv.svg"/></Link>
          </ul>
        </header>
        <hr></hr>
        <main>{children}</main>
      </div>
      <footer className='text-center mt-2'>
        <p className='text-xs text-gray-400/80'>Copyright © 2022, Paul Pires.</p>
      </footer>
    </>
  )
}

function ImageLink(props) {
  return (
      <a href={props.href} target='_blank'>
        <Image
          priority
          src={props.image}
          height={40}
          width={40}
        />
      </a>
  )
}