<?php

include './connection.php';


$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$fechanacimiento = $_POST['fecha'];

$fecha1 = date_create($fechanacimiento);
$fecha2 = date_format($fecha1, 'Y-m-d');


$existepaciente = "select nombre from pacientes where nombre= '$nombre'";


$existe = mysqli_query($con, $existepaciente);

$rowcount = mysqli_num_rows($existe);

if ($rowcount >= 1) {

    echo"Paciente ya se encuentra registrado";
} else {


    $sql = "insert into pacientes (nombre,telefono,fechanacimiento,direccion)values('$nombre','$telefono','$fecha2','$direccion')";



    $result = mysqli_query($con, $sql);

    if ($result) {
        $sql2 = "select id from pacientes where nombre='$nombre'";
    $idobtenido = mysqli_query($con, $sql2);

    if ($fila = mysqli_fetch_row($idobtenido)) {
        echo $fila[0];
    };
       
    } else {
        echo"NO hubo un error ";
    }

    
}
?>

