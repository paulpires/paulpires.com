import Head from 'next/head'
import Image from 'next/image'
import Link from 'next/link'

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
export default function Layout({ children })
{
  return (
    <>
      <Head>
        <link rel="icon" href="/favicon.ico"/>
      </Head>
      <div className={containerStyle}>
        <header className='sm:flex sm:flex-row sm:justify-between flex flex-col items-center pb-2'>
          <Link href='/' passHref>
            <h1 className="hover:underline underline-offset-4 hover:cursor-pointer text-3xl font-black sm:pb-0 pb-2">
              Paul Pires
            </h1>
          </Link>
          <ul className='flex flex-row gap-3'>
            <ImageLink image="/linkedin.svg" href={'https://www.linkedin.com/in/paulpires/'} alt='linkedin' />
            <ImageLink image="/github.svg" href='https://github.com/paulpires' alt='github'/>
            <ImageLink image="/twitter.svg" href='https://twitter.com/paul_pires' alt='twitter'/>
            <Link href={'/resume.pdf'} passHref><ImageLink image="/cv.svg" alt='cv' /></Link>
          </ul>
        </header>
        <hr></hr>
        <main>{children}</main>
      </div>
      <footer className='text-center relative pb-8'>
        <p className='text-xs text-gray-400/80'>Copyright © 2022, Paul Pires.</p>
      </footer>
    </>
  )
}

function ImageLink(props) 
{
  return (
    <a href={props.href} target='_blank' rel='noreferrer'>
      <Image
        priority
        src={props.image}
        height={40}
        width={40}
        alt={props.alt}
      />
    </a>
  )
}