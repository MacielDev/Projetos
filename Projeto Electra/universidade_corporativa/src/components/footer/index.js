import React from "react";
import {
  Jumbotron,
  Container,
  Card,
  Button,
  CardImg,
  CardTitle,
  CardText,
  CardGroup,
  CardSubtitle,
  CardBody,
} from "reactstrap";
import FormContato from "../formContato";
import estilo from "./estilo.css";

const Footer = (props) => {
  return (
    <div>
      <Jumbotron className="footerBackGround" fluid>
        <Container fluid>
          <CardGroup className="footerBackGround" fluid>
            <Card className="footerBackGround" fluid>
              <CardBody>
                <CardTitle tag="h5">A ELECTRA</CardTitle>

                <CardText>
                  Somos especialistas em produção de software para WEB: Sistemas
                  de Gestão, Lojas Virtuais, APP Mobile, Sites institucionais,
                  Otimização para buscas de sites e muito mais. CNPJ:
                  03.997.131/0001-83
                </CardText>
              </CardBody>
            </Card>
            <Card className="footerBackGround" fluid>
              <CardBody>
                <CardTitle tag="h5">Contato</CardTitle>

                <CardText>
                  <p>
                    Núcleo de Produção: Av. Itamarati, 1616 - Pq. Jaçatuba Santo
                    André - SP
                  </p>
                  <p>
                    Universidade Corporativa: Av. Prestes Maia, 744 - B.
                    Campestre Santo André - SP
                  </p>
                  <p>
                  (11) 4472-9191 | (11) 2988-4680 | (11) 9-4386-1347
                  </p>
                  <p>
                  info@electra.com.br
                  </p>
                </CardText>
              </CardBody>
            </Card>
            <Card className="footerBackGround" fluid>
              <CardBody>
                <CardTitle tag="h5">FALE CONOSCO</CardTitle>
                <CardText>
                  <FormContato/>
                </CardText>
              </CardBody>
            </Card>
          </CardGroup>
        </Container>
      </Jumbotron>
    </div>
  );
};

export default Footer;
