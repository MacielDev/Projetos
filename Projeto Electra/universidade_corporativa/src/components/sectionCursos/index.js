import React from 'react';
import {
  Card, Button, CardImg, CardTitle, CardText, CardGroup,
  CardSubtitle, CardBody
} from 'reactstrap';
import imageBackEnd from './img/back-end.png'
import imageFrontEnd from './img/front-end.png'
import imageEngSoftware from './img/engenhariaDeSoftware.png'


const SectionCursos = (props) => {
  return (
    <CardGroup >
      <Card>
        <CardImg top width="100%" src={imageBackEnd} alt="Card image cap" />
        <CardBody>
          <CardTitle tag="h5">Card title</CardTitle>
          <CardSubtitle tag="h6" className="mb-2 text-muted">Card subtitle</CardSubtitle>
          <CardText>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</CardText>
         
        </CardBody>
      </Card>
      <Card>
        <CardImg top width="100%" src={imageFrontEnd} alt="Card image cap" />
        <CardBody>
          <CardTitle tag="h5">Card title</CardTitle>
          <CardSubtitle tag="h6" className="mb-2 text-muted">Card subtitle</CardSubtitle>
          <CardText>This card has supporting text below as a natural lead-in to additional content.</CardText>
          
        </CardBody>
      </Card>
      <Card>
        <CardImg top width="100%" src={imageEngSoftware} alt="Card image cap" />
        <CardBody>
          <CardTitle tag="h5">Card title</CardTitle>
          <CardSubtitle tag="h6" className="mb-2 text-muted">Card subtitle</CardSubtitle>
          <CardText>This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</CardText>
         
        </CardBody>
      </Card>
    </CardGroup>
  );
};

export default SectionCursos;