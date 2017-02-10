<?php

include './connection.php';
//$adminUser = $_POST['user'];
$adminUser = "admin";




    $sql2 = "DELETE FROM administradores WHERE user='$adminUser'";

    $result2 = mysqli_query($con, $sql2);
    if ($result2) {
        echo "continuar";
    } else {
        echo"error";
    }

    





?>