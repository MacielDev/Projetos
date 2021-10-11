import React, { useState } from "react";
import {
  Collapse,
  Navbar,
  NavbarToggler,
  NavbarBrand,
  Nav,
  NavItem,
  NavLink,
  UncontrolledDropdown,
  DropdownToggle,
  DropdownMenu,
  DropdownItem,
  NavbarText,
} from "reactstrap";
import Registration from "../registration";
import logo from "./logo.png";
import Login from "../login"
import estilo from './estilo.css'


const Header = (props) => {
  const [isOpen, setIsOpen] = useState(false);

  const toggle = () => setIsOpen(!isOpen);

  return (
    <div>
      <Navbar color="light" light expand="md">
        <NavbarBrand href="https://electra.com.br/web/">
          <img src={logo}/>
        </NavbarBrand>
        <NavbarToggler onClick={toggle} />
        <Collapse isOpen={isOpen} navbar>
          <Nav className="mr-auto" navbar>
            <NavItem>
              <NavLink className="headerHoverEstilo" href="https://electra.com.br/web/">HOME</NavLink>
            </NavItem>
            <NavItem>
              <NavLink
              className="headerHoverEstilo" 
              href="https://electra.com.br/web/universidade-corporativa/">
                UNIVERSIDADE CORPORATIVA
              </NavLink>
            </NavItem>
            <NavItem>
              <NavLink
              className="headerHoverEstilo" 
              href="https://electra.com.br/web/#sobre-nos">
                SOBRE NÓS
              </NavLink>
            </NavItem>
            <UncontrolledDropdown nav inNavbar>
              <DropdownToggle
              className="headerHoverEstilo" 
              nav caret>
                CURSOS
              </DropdownToggle>
              <DropdownMenu right>
                <DropdownItem className="headerHoverEstilo" >FRONT-END
                </DropdownItem>
                <DropdownItem
                className="headerHoverEstilo" >BACK-END
                </DropdownItem>
                <DropdownItem
                className="headerHoverEstilo" >ENGENHARIA DE SOFTWARE
                </DropdownItem>
                <DropdownItem/>
              </DropdownMenu>
            </UncontrolledDropdown>
            <NavbarText>AINDA NÃO É NOSSO ALUNO?</NavbarText>
            <NavItem>
              <Registration/>
            </NavItem>
            <NavItem>
              <Login/>
            </NavItem>
          </Nav>
          
        </Collapse>
      </Navbar>
    </div>
  );
};

export default Header;