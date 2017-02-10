<?php

Interface TelefonoDAO
{
    
    public function createTelefono(Telefono $telefono);

    public function getAllTelefonoByUserId($idTelefono);

    public function updateTelefono(Telefono $telefono);

    public function deleteTefono($idTelefono);
}
