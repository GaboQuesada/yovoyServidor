<?php
echo "WEBSERVICE PROYECTO PROGRA 3 UNA CONSULTORIO";

include './connection.php';

if(mysqli_error($con)){
    echo "fallo al conectar".  mysqli_connect_error();
    
}else{ echo  "<br> testing database : successful";}


?>

