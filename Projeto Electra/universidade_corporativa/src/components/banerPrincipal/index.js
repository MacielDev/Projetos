import React from "react";
import { Jumbotron, Container } from "reactstrap";
import banerPrincipal from "./imagens/banerPrincipal .png";
import estilo from'./estilo.css'
const BanerPrincipal = () => {
  return (
    <div>
      <Jumbotron fluid>
        <Container fluid>
          <img id="imagemPrincipal"
            src={banerPrincipal}
            alt="Imagem sobre  T.I Principal"
            className="imagemPrincipal"
          />
        </Container>
      </Jumbotron>
    </div>
  );
};

export default BanerPrincipal;
