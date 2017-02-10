<?php
include './User.php';


Class Telefono{
    
    private $idTelefono;
    private $User;
    private $tipo;
    private $telefono;
    
    function __construct() {
        
    }

    function getIdTelefono() {
        return $this->idTelefono;
    }

    function getUser() {
        return $this->User;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function setIdTelefono($idTelefono) {
        $this->idTelefono = $idTelefono;
    }

    function setUser($User) {
        $this->User = $User;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }


    
}


?>

