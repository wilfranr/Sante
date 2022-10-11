<?php
include_once '../includes/scripts.php';
echo '<script src="../functions.js" type="text/javascript"></script>';

//editar familiar
editaFamiliar($_POST['nombre'], $_POST['apellido'], $_POST['tipoId'], $_POST['fecha_nacimiento'], $_POST['parentesco'], $_POST['idFamiliar'], $_POST['genero'], $_POST['telefono'], $_POST['correo'], $_POST['direccion'], $_POST['codFamiliar']);
function editaFamiliar($nombre, $apellido, $parentesco, $idFamiliar, $genero, $telefono, $correo, $direccion, $codFamiliar)
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
    $codFamiliar = $_POST['codFamiliar'];
    
    $query = " UPDATE familiar SET nombre = '$nombre', apellido = '$apellido', tipoId = '$tipoId', idFamiliar = '$idFamiliar', parentesco = '$parentesco', fechaNacimiento = '$fecha_nacimiento', edad = '$edad', genero = '$genero', telefono = '$telefono', email = '$correo', direccion = '$direccion' WHERE codFamiliar = '$codFamiliar' ";
    include_once '../includes/conexion.php';
    $result = mysqli_query($conexion, $query);
    if (!$result) {
        die("Query Failed");
    }
    echo '<script type="text/javascript">
    familiarModificado();
    </script>';
}
?>