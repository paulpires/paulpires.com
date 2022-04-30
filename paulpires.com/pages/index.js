import Layout from '../components/layout'

export default function Home() 
{
  return (
    <Layout>
      <section className='pt-6 font-mono text-sm relative'>
        <p>
          Hey, I'm Paul - a software engineer working remote in London 🇬🇧 with
          a particular interest in mobile and web technologies. I currently
          specialize in iOS and am working @ Lloyds Banking Group.
        </p>
        <br></br>
        <p>
          Feel free to contact me at 
          <ExtraBold href='mailto:paulpires101@gmail.com'> paulpires101@gmail.com </ExtraBold> 
          or connect with me on 
          <ExtraBold href='https://www.linkedin.com/in/paulpires/'> LinkedIn</ExtraBold>.
        </p>
      </section>
    </Layout>
  )
}

function ExtraBold(props)
{
  return (
    <a href={props.href} target='_blank'>
      <b className='font-extrabold'>
        {props.children}
      </b>
    </a>
  )
}