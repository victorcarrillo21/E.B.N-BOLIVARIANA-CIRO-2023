<?php

class loginContrl extends Login{

    private $usuario;
    private $clave;
  

    public function __construct ($usuario, $clave) {
    
        $this->usuario = $usuario;
        $this->clave = $clave;
        
    }

    public function loginUser(){
        if($this->emptyInput() == false){
            header("location: ../login.php?error=emptyInput");
            exit();

        $this->getUser( $this->usuario, $this->clave);
        }
    }

    private function emptyInput(){
        $result;
        if (empty($this->usuario) ||  empty($this->clave)){
            $result = false;
        } else {
            $result = true;
        } 
        return $result;
    }

}