import React from 'react'

const TopNavbar = () => {
  return (
    <div className='grid grid-cols-5 py-5'>
      <div className='col-span-1'></div>
      <div className="col-span-3">
        <div className='flex justify-between'>
          <div>
            <h1>CASALCO</h1>
          </div>
          <div>
            <h1>contact no. here</h1>
          </div>
          <div>
            <h1>My Account</h1>
          </div>
        </div>
      </div>
      <div className='col-span-1'></div>
    </div>
  )
}

export default TopNavbar