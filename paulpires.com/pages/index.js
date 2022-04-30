import Head from 'next/head'
import Image from 'next/image'
import Layout from '../components/layout'

export default function Home() {
  return (
    <Layout>
      <section className='py-4'>
        <p>
          Hey, I'm Paul - a software engineer working remote in London 🇬🇧 with
          a particular interest in mobile and web technologies. I currently
          specialize in iOS and am working @ Lloyds Banking Group.
        </p>
        <br></br>
        <p>
          Feel free to contact me at paulpires101@gmail.com or connect with me 
          on LinkedIn
        </p>
      </section>
    </Layout>
  )
}
