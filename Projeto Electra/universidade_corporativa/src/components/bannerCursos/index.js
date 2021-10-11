import React from "react";
import { Jumbotron, Container } from "reactstrap";


const BannerCursos = (props) => {
  return (
    <div>
      <Jumbotron fluid>
        <Container fluid>
          <h1 className="display-3">APERFEIÇOAMENTO DE TALENTOS</h1>
          <p className="lead">
            Evolução em técnicas para todos que querem se aprofundar no mundo de
            desenvolvimento e revoluções da Tecnologia de Informação.
          </p>
          <p className="lead">
            Com professores especialistas nas mais diversas áreas de tecnologia,
            a ELECTRA oferece cursos livres para quem deseja saber, compreender
            e colocar em prática em sua vida profissional.
          </p>
          <p className="lead">
          <strong>Nossos treinamentos são realizados nas modalidades presencial e online através de nossa moderna plataforma</strong>
          </p>
         
        </Container>
      </Jumbotron>
    </div>
  );
};

export default BannerCursos;
