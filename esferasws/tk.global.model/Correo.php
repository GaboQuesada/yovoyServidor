<?php
include './User.php';


Class Telefono{
    
    private $idCorreo;
    private $User;
    private $correo;
    private $principal;
    
    function __construct() {
        
    }
    
    function getIdCorreo() {
        return $this->idCorreo;
    }

    function getUser() {
        return $this->User;
    }

    function getCorreo() {
        return $this->correo;
    }

    function getPrincipal() {
        return $this->principal;
    }

    function setIdCorreo($idCorreo) {
        $this->idCorreo = $idCorreo;
    }

    function setUser($User) {
        $this->User = $User;
    }

    function setCorreo($correo) {
        $this->correo = $correo;
    }

    function setPrincipal($principal) {
        $this->principal = $principal;
    }


    
}