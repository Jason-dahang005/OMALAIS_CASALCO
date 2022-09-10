import React from 'react'

const BottomNavbar = () => {
  return (
    <div className='grid grid-cols-5 bg-orange-500'>
      <div className='col-span-1'></div>
      <div className="col-span-3">
        <div className=''>
          <ul className='flex'>
            <li className='px-14'><a href="#">link</a></li>
            <li className='px-14'><a href="#">link</a></li>
            <li className='px-14'><a href="#">link</a></li>
            <li className='px-14'><a href="#">link</a></li>
            <li className='px-14'><a href="#">link</a></li>
            <li className='px-14'><a href="#">link</a></li>
          </ul>
        </div>
      </div>
      <div className='col-span-1'></div>
    </div>
  )
}

export default BottomNavbar