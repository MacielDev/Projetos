import React, { useState } from "react";
import estiloHeader from './estilo.css'
import logoElectra from './imagens/logo.png'
import {
  Collapse,
  Navbar,
  NavbarToggler,
  Nav,
  NavItem,
  NavLink,
  UncontrolledDropdown,
  DropdownToggle,
  DropdownMenu,
  DropdownItem,
  NavbarText,
  Button
} from "reactstrap";
import Matricular from '../matricular'


/*Dispara processo de matricular
function _matricular(evento){
  const matricula = Matricular()
}
*/
//Dispara o processo de Login
function _logar(evento){
  console.log('O botão de login foi clicado')
  
}

const HeaderPrincipal = (props) => {
  
  const [isOpen, setIsOpen] = useState(false);

  const toggle = () => setIsOpen(!isOpen);

  return (
    <div className="headerPrincipal-conteiner">
      <Navbar color="light" light expand="md">
        <img className="headerPrincipal_logo" src={logoElectra} alt="logo-Electra-informatica" />
        <NavbarToggler onClick={toggle} />
        <Collapse isOpen={isOpen} navbar>
          <Nav className="mr-auto" navbar>
          <NavItem>
              <NavLink
                href="https://electra.com.br/web/"
                target="_blank"
              >
                HOME
              </NavLink>
            </NavItem>
            <NavItem>
              <NavLink
                href="https://electra.com.br/web/#sobre-nos"
                target="_blank"
              >
                SOBRE NÓS
              </NavLink>
            </NavItem>
            <NavItem>
              <NavLink
                href="https://electra.com.br/web/universidade-corporativa/"
                target="_blank"
              >
                UNIVERSIDADE CORPORATIVA
              </NavLink>
            </NavItem>
            
            <UncontrolledDropdown nav inNavbar>
              <DropdownToggle nav caret>
                TREINAMENTOS
              </DropdownToggle>
              <DropdownMenu right>
                <DropdownItem>FRONT-END</DropdownItem>
                <DropdownItem>BACK-END</DropdownItem>
                <DropdownItem>CIÊNCIAS DE DADOS</DropdownItem>
                <DropdownItem divider />
                <DropdownItem>ENGENHARIA DE SOFTWARE</DropdownItem>
                <DropdownItem>GESTÃO ÁGIL</DropdownItem>
              </DropdownMenu>
            </UncontrolledDropdown>
          </Nav>
          <NavbarText>Ainda não é nosso aluno?</NavbarText>
          
          <Matricular/>
          
          <Button outline color="primary"
          onClick={_logar}>
            LOGIN
          </Button>
        </Collapse>
      </Navbar>
    </div>
  );
};

export default HeaderPrincipal;
