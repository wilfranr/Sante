<?php
include_once '../includes/scripts.php';
echo '<script src="../functions.js" type="text/javascript"></script>';

//Eliminar familiares
Delete_familiar($_GET['id']);
$id = $_GET['id'];
function Delete_familiar($id)
{
    include_once '../includes/conexion.php';
    $query = " UPDATE familiar SET estado = 0 WHERE codFamiliar = '$id' ";
    $result = mysqli_query($conexion, $query); 
    if (!$result) {
        die("Query Failed");
    }
    echo '<script type="text/javascript">
    familiarEliminado();
    </script>';
}

?>