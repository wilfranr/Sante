<?php
include_once '../includes/scripts.php';
echo '<script src="../functions.js" type="text/javascript"></script>';

//crear familiar en base de datos
nuevoFamiliar($_POST['eps'], $_POST['arl'],$_POST['tipoSangre'], $_POST['alergias'], $_POST['enfermedades'], $_POST['medicamentos'], $_POST['observaciones'], $_POST['codFamiliar']);

function nuevoFamiliar($eps, $arl, $tipoSangre, $alergias, $enfermedades, $medicamentos, $observaciones, $codFamiliar)
{
    $eps = $_POST['eps'];
    $arl = $_POST['arl'];
    $tipoSangre = $_POST['tipoSangre'];
    $alergias = $_POST['alergias'];
    $enfermedades = $_POST['enfermedades'];
    $medicamentos = $_POST['medicamentos'];
    $observaciones = $_POST['observaciones'];
    $codFamiliar = $_POST['codFamiliar'];
    
    include_once '../includes/conexion.php';
    $query = " UPDATE familiar SET eps = '$eps', arl = '$arl', tipoSangre = '$tipoSangre', alergias = '$alergias', enfermedades = '$enfermedades', medicamentos = '$medicamentos', observaciones = '$observaciones' WHERE codFamiliar = '$codFamiliar' ";
    $result = mysqli_query($conexion, $query);
    if (!$result) {
        die("Query Failed");
    }
    echo '<script type="text/javascript">
    registroCreado();
    </script>';
}
