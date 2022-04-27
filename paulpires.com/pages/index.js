import Head from 'next/head'
import Image from 'next/image'
import styles from '../styles/Home.module.css'

export default function Home() {
  return (
    <>
      <Head>
        <link rel="icon" href="/favicon.ico" />
        <meta name="description" content="Paul Pires' website" />
        <meta name="og:title" content="Pauls website" />
      </Head>
      
      <div className='container shadow-xl border-1 bg-white mx-auto sm:max-w-none md:max-w-3xl lg:max-w-3x px-4 pt-6 mt-5'>
        <header className='flex justify-between pb-2'>
          <h1 className="text-3xl font-bold">
            Paul Pires
          </h1>
          <ul className='flex flex-row gap-3'>
            <Image
              priority
              src="/linkedin.svg"
              height={40}
              width={40}
            />
            <Image
              priority
              src="/github.svg"
              height={40}
              width={40}
            />
            <Image
              priority
              src="/email.svg"
              height={40}
              width={40}
            />
            <Image
              priority
              src="/cv.svg"
              height={40}
              width={40}
            />
          </ul>
        </header>
        <hr></hr>
      </div>
    </>
  )
}
