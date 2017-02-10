<?php

Interface CorreoDAO {

    public function createCorreo(Correo $correo);

    public function getAllCorreoByUserId($idCorreo);

    public function updateCorreo(Correo $correo);

    public function deleteCorreo($idCorreo);
}
?>

