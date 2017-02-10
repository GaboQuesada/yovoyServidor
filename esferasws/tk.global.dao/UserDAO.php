<?php

interface UserDao {

    public function createUser(User $user);

    public function getAllUser();

    public function getbyUserName($nombre);

    public function getByUserId($idUser);

    public function validateUserAccess($user, $password);

    public function validateUserCode($user, $code);

    public function updateUser(User $user);

    public function deleteUser($idUser);
}

?>
