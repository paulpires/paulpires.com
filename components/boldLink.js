export default function BoldLink(props) {
  return (
    <a className='hover:underline underline-offset-4 decoration-dashed'
      href={props.href}
      target={props.newTab ? '_blank' : ''}
      rel='noreferrer'
    >
      <b className='font-extrabold'>
        {props.children}
      </b>
    </a>
  )
}