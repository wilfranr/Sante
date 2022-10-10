<?php
include_once '../scripts.php';
echo '<script src="../functions.js" type="text/javascript"></script>';

Consult($_POST['user'], $_POST['password']);
function Consult($user, $pass)
{
    include_once '../includes/conexion.php';
    $sentencia = "SELECT * FROM usuario WHERE user = '$user' AND password = '$pass'";
    $resultado = mysqli_query($conexion, $sentencia);
    $filas = mysqli_num_rows($resultado);
    if ($filas) {
        header("location: ../view/panel.php");
    } else {
        echo '<script>
        WrongPassword()
        </script>';
    }
}

?>