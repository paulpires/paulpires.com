import Layout from '../components/layout'

export default function Home() {
  return (
    <Layout>
      <section className='py-4 font-mono text-sm'>
        <p>
          Hey, I'm Paul - a software engineer working remote in London 🇬🇧 with
          a particular interest in mobile and web technologies. I currently
          specialize in iOS and am working @ Lloyds Banking Group.
        </p>
        <br></br>
        <p>
          Feel free to contact me at <ExtraBold>paulpires101@gmail.com</ExtraBold> or connect with me 
          on LinkedIn
        </p>
      </section>
    </Layout>
  )
}

function ExtraBold({children}) 
{
  return (
    <b className='font-extrabold'>
      {children}
    </b>
  )
}