
import React, { useState } from 'react';
import { Button, Modal, ModalHeader, ModalBody} from 'reactstrap';
import FormMatricula from '../formMatricula'


const Matricular = (props) => {
  
  const [modal, setModal] = useState(false);

  const toggle = () => setModal(!modal);
  return (
    <div>
      <Button color="primary" onClick={toggle}>Matricular</Button>
      <Modal  size="lg" isOpen={modal} toggle={toggle}>
        <ModalHeader toggle={toggle}>Matricula</ModalHeader>
        <ModalBody>
            <FormMatricula/>
        </ModalBody>
      </Modal>
    </div>
  );
}

export default Matricular