<?php
include_once '../includes/scripts.php';
echo '<script src="../functions.js" type="text/javascript"></script>';

//crear familiar en base de datos
nuevoFamiliar($_POST['nombre'], $_POST['apellido'],$_POST['tipoId'], $_POST['fecha_nacimiento'], $_POST['parentesco'], $_POST['idFamiliar'], $_POST['genero'], $_POST['telefono'], $_POST['correo'], $_POST['direccion']);

function nuevoFamiliar($nombre, $apellido, $parentesco, $idFamiliar, $genero, $telefono, $correo, $direccion)
{
    $edad = $_POST['fecha_nacimiento'];
    //calcular edad
    $fecha = new DateTime($edad);
    $fecha_actual = new DateTime();
    $edad = $fecha_actual->diff($fecha);
    $edad = $edad->y;
    
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $parentesco = $_POST['parentesco'];
    $idFamiliar = $_POST['idFamiliar'];
    $tipoId = $_POST['tipoId'];
    $genero = $_POST['genero'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $direccion = $_POST['direccion'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    
    include_once '../includes/conexion.php';
    $query = " SELECT * FROM familiar WHERE idFamiliar = '$idFamiliar' ";
    $result = mysqli_query($conexion, $query);
    if (mysqli_num_rows($result) > 0) {
        echo '<script type="text/javascript">
        familiarYaExiste();
        </script>';
    } else {
        $query = " INSERT INTO familiar (nombre, apellido, tipoId, idFamiliar, parentesco, fechaNacimiento, edad, genero, telefono, email, direccion, estado) VALUES ('$nombre', '$apellido', '$tipoId', '$idFamiliar', '$parentesco', '$fecha_nacimiento', '$edad', '$genero', '$telefono', '$correo', '$direccion', 1) ";
        $result = mysqli_query($conexion, $query);
        if (!$result) {
            die("Query Failed");
        }
        echo '<script type="text/javascript">
        familiarCreado();
        </script>';
    }
}
