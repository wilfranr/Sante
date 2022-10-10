<?php
include_once '../includes/scripts.php';
echo '<script src="../functions.js" type="text/javascript"></script>';

//crear familiar en base de datos
nuevoFamiliar($_POST['nombre'], $_POST['apellido'], $_POST['fecha_nacimiento'], $_POST['parentesco'], $_POST['idFamiliar'], $_POST['genero'], $_POST['telefono'], $_POST['correo'], $_POST['direccion']);

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
    $genero = $_POST['genero'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $direccion = $_POST['direccion'];
    
    include_once '../includes/conexion.php';
    $sentencia = "INSERT INTO familiar (nombre, apellido, edad, genero, parentesco, idFamiliar, telefono, email, direccion) VALUES ('$nombre', '$apellido', '$edad', '$genero', '$parentesco', '$idFamiliar', '$telefono', '$correo', '$direccion')";
    $resultado = mysqli_query($conexion, $sentencia);
    if ($resultado) {
        echo '<script>
        familiarCreado()
            </script>';
    } else {
        echo '<script>
            alert("Error al crear familiar");
            window.location = "../view/panel.php";
            </script>';
    }
}
