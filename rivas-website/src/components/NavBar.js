import React, {useState} from 'react'
import { Link } from 'react-router-dom'
import './NavBar.css'

function NavBar() {
  const [click, setClick] = useState(false)

  const handleClick = () => setClick(!click)
  const closeMobileMenu = () => setClick(false)

  return (
    <>
      <nav className="navbar">
        <div className="navbar-container">
          <Link to="/home" className="navbar-main" onClick={closeMobileMenu}>
            RIVAS Lands
          </Link>

          <div className='menu-icon' onClick={handleClick}>
            <i className={click ? 'fas fa-times' : 'fas fa-bars'} />
          </div>

          <ul className={click ? 'nav-menu active' : 'nav-menu'}>
            <li className='nav-item'>
              <Link to="/about" className='nav-links'
                  onClick={closeMobileMenu}>
                  About Us
                </Link>
            </li>
            <li className='nav-item'>
              <Link to="/order" className='nav-links'
                  onClick={closeMobileMenu}>
                  Order
                </Link>
            </li>
            <li className='nav-item'>
              <Link to="/checklist" className='nav-links'
                  onClick={closeMobileMenu}>
                  Check List
                </Link>
            </li>
            <li className='nav-item'>
              <Link to="/contact" className='nav-links'
                  onClick={closeMobileMenu}>
                  Contact Us
                </Link>
              </li>
          </ul>
          <div className="menu-icon" onClick={handleClick}>
            <i className={click ? 'fas fa-times' : 'fas fa-bars'} />         </div>
        </div>
      </nav>
    </>
  )
}

export default NavBar
