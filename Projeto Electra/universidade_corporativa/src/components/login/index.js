import React, { useState } from "react";
import { Button, Modal, ModalBody } from "reactstrap";
import FormLogin from "../formLogin";

const Login = (props) => {
  const [modal, setModal] = useState(false);

  const toggle = () => setModal(!modal);

  return (
    <div>
      <Button 
      size="sm" 
      outline color="primary"
      onClick={toggle}>
        Login
      </Button>
      <Modal 
      size ="ie"
      isOpen={modal} 
      toggle={toggle}>
        <ModalBody>
          <FormLogin/>
        </ModalBody>
       
      </Modal>
    </div>
  );
};

export default Login;
