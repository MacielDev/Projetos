import React from "react";
import { Button, Form, FormGroup, Label, Input } from "reactstrap";
import estilo from "./estilo.css";

const FormRegistration = (props) => {
  return (
    <Form>
      <FormGroup>
        <Label for="exampleEmail">NOME COMPLETO</Label>
        <Input
          type="text"
          name="nomeAluno"
          id="nomeAlunoCompleto"
          placeholder="INFORME SEU NOME COMPLETO"
        />
      </FormGroup>
      <FormGroup>
        <Label for="exampleEmail">EMAIL</Label>
        <Input
          type="email"
          name="email"
          id="exampleEmail"
          placeholder="INFORME SEU E-MAIL"
        />
      </FormGroup>
      <FormGroup>
        <Label for="examplePassword">SENHA</Label>
        <Input
          type="password"
          name="password"
          id="examplePassword"
          placeholder="INFORME UMA SENHA"
        />
      </FormGroup>
      <Button 
      color="primary"
      className="formRegistration_position">ENVIAR</Button>
    </Form>
  );
};

export default FormRegistration;
