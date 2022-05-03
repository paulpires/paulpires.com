import Head from 'next/head'
import Layout from '../../components/layout'
import { getAllPostIds } from '../../lib/posts'
import { getPostData } from '../../lib/posts'

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
      <article className='pt-10'>
        <h1 className='text-4xl font-black'>{postData.title}</h1>
        <div className='font-mono pt-2 text-gray-400'>
          <p>{postData.date}</p>
        </div>
        <div
         className='pt-5 font-mono prose prose-p:text-sm prose-li:text-sm'
         dangerouslySetInnerHTML={{ __html: postData.contentHtml }}
         />
      </article>
    </Layout>
  )
}