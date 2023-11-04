import Link from 'next/link'
import Layout from '../components/layout'
import BoldLink from '../components/boldLink'
import Divider from '../components/divider'
import { getSortedPostsData } from '../lib/posts'
import { parseISO, format } from 'date-fns'

export async function getStaticProps() {
  const posts = getSortedPostsData()
  return {
    props: {
      posts
    }
  }
}

export default function Home(props) {
  return (
    <Layout id='root'>
      <div className='prose dark:prose-invert prose-lg prose-p:text-sm font-mono relative'>
        <section>
          <p>
            Welcome 👋 I&apos;m Paul, a software engineer in London 🇬🇧
            specializing in <b className='font-extrabold'>iOS</b> but have a general interest in mobile + web tech.
          </p>
          <p>
          I&apos;m currently working @&nbsp;
            <BoldLink href='https://withplum.com' newTab>Plum</BoldLink> - helping people automate their finances.
          </p>
          <p>
            Wanna get in touch? Message me
            on <BoldLink href='https://www.linkedin.com/in/paulpires/' newTab>LinkedIn</BoldLink>
            &nbsp;or on <BoldLink href='https://www.x.com/paul_pires' newTab>X</BoldLink>.
          </p>
        </section>
        <section>
          <Posts posts={props.posts} />
        </section>
      </div>
    </Layout>
  )
}

function Posts(props) {
  return (
    props.posts.length > 0 ? (
      <>
        <Divider />
        <h5 className='font-bold text-m py-4'>
          blog archive:
        </h5>
        <ul className='font-mono text-sm p-0 m-0 prose-li:p-0 prose-li:m-0'>
          {
            props.posts.map(post => {
              return (
                <Link key={post.id} href={`/posts/${post.id}`} passHref>
                  <li className='pb-2 sm:pb-0.5 flex flex-row justify-between hover:cursor-pointer hover:underline underline-offset-4 decoration-dashed active:bg-orange-50 dark:active:bg-black'>
                    <div>-&nbsp;</div>
                    <div className='flex-1'>{post.title}</div>
                    <div className='text-gray-400 ml-4'>
                      <Date dateString={post.date} />
                    </div>
                  </li>
                </Link>
              )
            })
          }
        </ul>
      </>
    ) : (<></>)
  )
}

function Date({ dateString }) {
  const date = parseISO(dateString)
  return (
    <time dateTime={dateString}>
      {format(date, 'dd MMM yyyy')}
    </time>
  )
}