import React, { useState } from "react";
import { Button, Modal, ModalHeader, ModalBody, ModalFooter } from "reactstrap";
import FormRegistration from "../formRegistration";
import estilo from './estilo.css'

const Registration = (props) => {
  const [modal, setModal] = useState(false);

  const toggle = () => setModal(!modal);

  return (
    <div>
    
        <Button
          className="registration_position_button"
          size="sm"
          color="primary"
          onClick={toggle}
        >
          MATRICULAR
        </Button>
     
      <Modal size="lg" isOpen={modal} toggle={toggle} className="">
        <ModalHeader toggle={toggle}>MATRICULA</ModalHeader>
        <ModalBody>
            <FormRegistration/>
        </ModalBody>
      </Modal>
    </div>
  );
};

export default Registration;
