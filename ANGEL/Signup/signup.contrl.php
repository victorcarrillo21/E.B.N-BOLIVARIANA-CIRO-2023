<?php

class signupContrl extends Signup{

    private $usuario;
    private $gmail;
    private $clave;
    private $confirm_clave;

    public function __construct ($usuario, $gmail, $clave, $confirm_clave) {
    
        $this->usuario = $usuario;
        $this->gmail = $gmail;
        $this->clave = $clave;
        $this->confirm_clave = $confirm_clave;
        
    }

    public function singupUser(){
        if($this->emptyInput() == false){
            header("location: ../login.php?error=emptyInput");
            exit();
        }
        if($this->invalidUsuario() == false){
            header("location: ../login.php?error=invalidUsuario");
            exit();
        }
        if($this->invalidGmail() == false){
            header("location: ../login.php?error=invalidGmail");
            exit();
        }
        if($this->invalidClave() == false){
            header("location: ../login.php?error=invalidClave");
            exit();
        }
        if($this->usuarioTakeCheck() == false){
            header("location: ../login.php?error=usuarioTakeCheck");
            exit();
        }

        $this->setUser( $this->usuario, $this->gmail, $this->clave);
    }

    private function emptyInput(){
        $result;
        if (empty($this->usuario) || empty($this->gmail) || empty($this->clave) || empty($this->confirm_clave)){
            $result = false;
        } else {
            $result = true;
        } 
        return $result;
    }

    private function invalidUsuario(){
        $result;
        if (!preg_match("/[a-zA-Z9-0]*$/", $this->usuario)){
            $result = false;
        } else {
            $result = true;
        }
    }

    private function invalidGmail(){
        $result;
        if (!filter_var($this->gmail, FILTER_VALIDATE_EMAIL)){
            $result = false;
        } else {
            $result = true;
        }
    }

    private function invalidClave(){
        $result;
        if ($this->confirm_clave !== $this->clave = $clave){
            $result = false;
        } else {
            $result = true;
        }
    }

    private function usuarioTakeCheck(){
        $result;
        if (!$this->$resultCheck($this->usuario, $this->gmail)){
            $result = false;
        } else {
            $result = true;
        }
    }

}