<?php
include './connection.php';
$adminUser = $_POST['user'];
$adminPassword = $_POST['password'];
$adminOlduser = $_POST['olduser'];




$sql = "select user from administradores where user = '$adminUser'";

$result = mysqli_query($con, $sql);

$row_cnt = mysqli_num_rows($result);

if ($row_cnt >= 1) {

    echo "Nombre de usuario ya existe!";
    mysqli_close($con);
} else {


    $sql2 ="UPDATE administradores SET password='$adminPassword' WHERE user='$adminOlduser'";


    $result2 = mysqli_query($con, $sql2);
    if ($result2) {
        echo "continuar";
    } else {
        echo" Se profujo un error";
    }
}


?>

