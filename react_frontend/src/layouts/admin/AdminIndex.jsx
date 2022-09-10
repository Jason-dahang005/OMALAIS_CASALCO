import { useState } from "react"
import Sidebar from "./Sidebar"
import Topbar from "./Topbar"


const AdminIndex = () => {
  const [open, setOpen] = useState(true)

  const Menus = [
    { title: "Dashboard", src: "dashboard"},
    { title: "Membership Applications", src: "mem-app"},
    { title: "Members", src: "members"},
    { title: "Loan Applications", src: "loan"},
    { title: "Approved Loans", src: "approved"}
  ]

  return (
    <div className="flex">

      {/* FLEX LEFT */}
      <aside className={`${open ? "w-72" : "w-24"} duration-500 h-screen px-5 pt-2 bg-darkblue relative`}>
        {/* <img src="../img/member/arrow.png" 
             className={`absolute cursor-pointer rounded-full -right-3 bg-white top-9 w-7 border-2 border-darkblue ${!open && "rotate-180"}`}
             onClick={() => setOpen(!open)}
             alt="" /> */}
        <div className="flex gap-x-4 items-center">
          <img src="../img/member/casalco_logo2.png"
               className={`cursor-pointer duration-300`}
               alt="" />
          <h1 className={`text-white origin-left font-medium text-4xl duration-300 ${!open && "scale-0"}`}>CASALCO</h1>
        </div>
        <ul className="pt-6">
          {Menus.map((menu, index) => (
            <li key={index}
                className="text-gray-300 text-sm flex items-center gap-x-4 cursor-pointer p-2 hover:bg-gray-600 rounded-md ">
              <img src={`../img/member/${menu.src}.png`} alt="" />
              <span className={`${!open && "hidden"} origin-left duration-300`}>
                {menu.title}
                </span>
            </li>
          ))}
        </ul>
      </aside>

      {/*  FLEX RIGHT */}
      <div className="text-2xl font-semibold flex-1 h-screen">
        <header className="flex justify-between px-5 py-4 border">
          <div>
            <img src="../img/member/burger-menu.png" className="cursor-pointer" onClick={() => setOpen(!open)} alt="" />
          </div>
          <div className="flex basis-1/6 justify-around">
            <img src="../img/member/envelope.png" className="cursor-pointer" alt="" />
            <img src="../img/member/bell.png" className="cursor-pointer" alt="" />
            <img src="../img/member/profile.png" className="cursor-pointer" alt="" />
          </div>
        </header>
      </div>
    </div>
  )
}

export default AdminIndex
