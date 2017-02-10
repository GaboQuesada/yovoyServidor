<?php

include './connection.php';
$adminUser =$_POST['user'];
$adminPassword= $_POST['password'];



$sql = "select password from administradores where user = '$adminUser'";

$result = mysqli_query($con, $sql);

$row_cnt = mysqli_num_rows($result);

if ($row_cnt >= 1) {

    $pass;
    while ($fila = mysqli_fetch_row($result)) {

        $pass = $fila[0];
    }


    if ($pass == $adminPassword) {
        echo "continuar";
    } else {
        echo "Contraseña incorrecta!";
    }
} else {

    echo "Nombre de usuario no  existe!";
}

mysqli_close($con);
?>
