<?php
$conexion = mysqli_connect("localhost","root","","saludyvida");//Datos de base de datos
if (mysqli_connect_errno()) {//Si no se puede conectar a la base de datos
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}
?>
