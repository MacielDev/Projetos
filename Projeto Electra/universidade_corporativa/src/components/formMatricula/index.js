import React from 'react';
import { Button, Form, FormGroup, Label, Input} from 'reactstrap';

const FormMatricula = (props) => {
  return (
    <Form size="lg">
      <FormGroup>
        <Label for="nomeCompletoMatricula">Nome Completo</Label>
        <Input type="text" name="nomeCompleto" id="nomeCompletoMatricula" placeholder="Informe seu nome completo" />
      </FormGroup>
      <FormGroup>
        <Label for="cpfMatricula">CPF</Label>
        <Input type="text" name="nomeCompleto" id="cpfMatricula" placeholder="000.000.000-00" />
      </FormGroup>
      <FormGroup>
        <Label for="emailMatricula">Email</Label>
        <Input type="email" name="email" id="emailMatricula" placeholder="Informe um e-mail valido" />
      </FormGroup>
      <FormGroup>
        <Label for="senhaMatricula">Cadastre uma senha</Label>
        <Input type="password" name="senha" id="senhaMatricula" placeholder="Informe a senha desejada" />
      </FormGroup>
      <Button color="primary" size="lg" block>Confirmar</Button>
    </Form>
  );
}
export default FormMatricula