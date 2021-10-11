import React from "react";
import { Button, Form, FormGroup, Label, Input, FormText } from "reactstrap";
import estilo from "./estilo.css";

const FormContato = (props) => {
  return (
    <Form>
      <FormGroup>
        <Input
          className="form_Contato_Input"
          type="text"
          name="nome"
          id="campoNome"
          placeholder="Nome"
        />
      </FormGroup>
      <FormGroup>
        <Input
          className="form_Contato_Input"
          type="text"
          name="telefone"
          id="campoTelefone"
          placeholder="Telefone"
        />
      </FormGroup>
      <FormGroup>
        <Input
          className="form_Contato_Input"
          type="email"
          name="email"
          id="campoEmail"
          placeholder="E-mail"
        />
      </FormGroup>

      <FormGroup>
        <Input
          className="form_Contato_Input"
          type="textarea"
          name="text"
          id="exampleText"
          placeholder="Mensagem"
        />
      </FormGroup>

      <FormGroup check>
        <Input type="checkbox" />
        Eu autorizo a Electra a entrar em contato comigo
      </FormGroup>
      <Button className="form_contato_button">Enviar</Button>
    </Form>
  );
};

export default FormContato;
