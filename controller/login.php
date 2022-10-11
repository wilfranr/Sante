<?php
include_once '../includes/scripts.php';
echo '<script src="../functions.js" type="text/javascript"></script>';

Consult($_POST['user'], $_POST['password']);
function Consult($user, $pass)
{
    include_once '../includes/conexion.php';
    $sentencia = "SELECT * FROM usuario WHERE user = '$user' AND password = '$pass'";
    $resultado = mysqli_query($conexion, $sentencia);
    $filas = mysqli_num_rows($resultado);
    if ($filas > 0) {
        while ($row = mysqli_fetch_assoc($resultado)) {
            $nombre = $row['nombre'];
            $apellido = $row['apellido'];
            $rol = $row['rol'];
            $id = $row['codUsuario'];
            $identificacion = $row['idUsuario'];
        }
        session_start();
        $_SESSION['user'] = $user;
        $_SESSION['nombre'] = $nombre;
        $_SESSION['apellido'] = $apellido;
        $_SESSION['rol'] = $rol;
        $_SESSION['codUsuario'] = $id;
        $_SESSION['idUsuario'] = $identificacion;
        header("location: ../view/panel.php");
    } else {
        echo '<script>
        WrongPassword()
        </script>';
    }
}

?>