import Link from 'next/link'
import Head from 'next/head'
import BoldLink from '../../components/boldLink'
import Layout from '../../components/layout'
import { getAllPostIds } from '../../lib/posts'
import { getPostData } from '../../lib/posts'
import Divider from '../../components/divider'

export async function getStaticPaths() {
  const paths = getAllPostIds()
  return {
    paths,
    fallback: false
  }
}

export async function getStaticProps({ params }) {
  const postData = await getPostData(params.id)
  return {
    props: {
      postData
    }
  }
}

export default function Post({ postData }) {
  return (
    <Layout>
      <Head>
        <title>{postData.title}</title>
      </Head>
      <article className='pt-10 relative'>
        <h1 className='text-4xl font-black dark:text-textLight'>{postData.title}</h1>
        <div className='font-mono pt-2 text-gray-400'>
          <p>{postData.date}</p>
        </div>
        <div
          className='pt-5 font-mono prose prose-lg prose-p:text-sm prose-li:text-sm dark:prose-invert'
          dangerouslySetInnerHTML={{ __html: postData.contentHtml }}
        />
      </article>
      <div className='mt-6'><Divider/></div>
      <div className='pt-4 text-center dark:text-white'>
        <Link href='/'>
          <span className='hover:underline underline-offset-4 decoration-dashed font-extrabold'>Back home</span>
        </Link>
      </div>
    </Layout>
  )
}