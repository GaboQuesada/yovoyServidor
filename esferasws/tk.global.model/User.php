<?php

 Class user
{
    
     private $idUser;
     private $nombre;
     private $apellido1;
     private $apellido2;
     private $contrasena;
     private $direccion;
     private $carrera;
     private $usuario;
     private $fechanacimiento;
     private $codigo;
     private $faceid;
             
     function __construct() {
         
     }
     
     function getIdUser() {
         return $this->idUser;
     }

     function getNombre() {
         return $this->nombre;
     }

     function getApellido1() {
         return $this->apellido1;
     }

     function getApellido2() {
         return $this->apellido2;
     }

     function getContrasena() {
         return $this->contrasena;
     }

     function getDireccion() {
         return $this->direccion;
     }

     function getCarrera() {
         return $this->carrera;
     }

     function getUsuario() {
         return $this->usuario;
     }

     function getFechanacimiento() {
         return $this->fechanacimiento;
     }

     function getCodigo() {
         return $this->codigo;
     }

     function getFaceid() {
         return $this->faceid;
     }

     function setIdUser($idUser) {
         $this->idUser = $idUser;
     }

     function setNombre($nombre) {
         $this->nombre = $nombre;
     }

     function setApellido1($apellido1) {
         $this->apellido1 = $apellido1;
     }

     function setApellido2($apellido2) {
         $this->apellido2 = $apellido2;
     }

     function setContrasena($contrasena) {
         $this->contrasena = $contrasena;
     }

     function setDireccion($direccion) {
         $this->direccion = $direccion;
     }

     function setCarrera($carrera) {
         $this->carrera = $carrera;
     }

     function setUsuario($usuario) {
         $this->usuario = $usuario;
     }

     function setFechanacimiento($fechanacimiento) {
         $this->fechanacimiento = $fechanacimiento;
     }

     function setCodigo($codigo) {
         $this->codigo = $codigo;
     }

     function setFaceid($faceid) {
         $this->faceid = $faceid;
     }


     
    
    
}


?>

