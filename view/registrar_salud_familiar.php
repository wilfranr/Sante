<?php
include_once '../includes/scripts.php';
include_once '../includes/header.php';
echo '<script src="../functions.js" type="text/javascript"></script>';
//consultar datos de la tabla familiar
if(empty($_GET['id'])){
    header('location: ../view/familiares.php');
}
$id = $_GET['id'];
$query = " SELECT * FROM familiar WHERE codFamiliar = '$id' ";
$result = mysqli_query($conexion, $query);
if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $nombre = $row['nombre'];
    $apellido = $row['apellido'];
    $eps = $row['eps'];
    $arl = $row['arl'];
    $tipoSangre = $row['tipoSangre'];
    if ($tipoSangre == 1){
        $tipoSangre = "A+";
    } else if ($tipoSangre == 2){
        $tipoSangre = "A-";
    } else if ($tipoSangre == 3){
        $tipoSangre = "B+";
    } else if ($tipoSangre == 4){
        $tipoSangre = "B-";
    } else if ($tipoSangre == 5){
        $tipoSangre = "AB+";
    } else if ($tipoSangre == 6){
        $tipoSangre = "AB-";
    } else if ($tipoSangre == 7){
        $tipoSangre = "O+";
    } else if ($tipoSangre == 8){
        $tipoSangre = "O-";
    }
    $alergias = $row['alergias'];
    $enfermedades = $row['enfermedades'];
    $medicamentos = $row['medicamentos'];
    $observaciones = $row['observaciones'];
    $codFamiliar = $row['codFamiliar'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Salud</title>
</head>
<body>
    <div class="container p-5">
        <div class="row">
            <h2 class="text-center">Registro de salud</h2>
            <div class="col">
                <form action="../controller/registraSalud.php" method="POST" class="border border-info p-3">
                    <div class="row">
                        <div class="col">
                            <input type="hidden" name="codFamiliar" value="<?php echo $codFamiliar ?>">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $nombre ?>" required disabled>
                        </div>
                        <div class="col">
                            <label for="apellido">Apellido</label>
                            <input type="text" name="apellido" id="apellido" class="form-control" value="<?php echo $apellido ?>" required disabled>
                        </div>
                    
                    <div class="mb-3">
                        <label for="eps" class="form-label">EPS</label>
                        <input type="text" class="form-control" id="eps" name="eps" value="<?php echo $eps ?>">
                    </div>
                    <div class="mb-3">
                        <label for="arl" class="form-label">ARL</label>
                        <input type="text" class="form-control" id="arl" name="arl" value="<?php echo $arl ?>">
                    </div>
                    <div class="mb-3">
                        <label for="tipoSangre" class="form-label">Tipo de sangre</label>
                        <select name="tipoSangre" id="tipoSangre">
                            <option selected value="<?php echo $tipoSangre ?>"><?php echo $tipoSangre ?></option>
                            <option value="1">A+</option>
                            <option value="2">A-</option>
                            <option value="3">B+</option>
                            <option value="4">B-</option>
                            <option value="5">AB+</option>
                            <option value="6">AB-</option>
                            <option value="7">O+</option>
                            <option value="8">O-</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="alergias" class="form-label">Alergias</label>
                        <input type="text" class="form-control" id="alergias" name="alergias" value="<?php echo $alergias ?>">
                    </div>
                    <div class="mb-3">
                        <label for="enfermedades" class="form-label">Enfermedades</label>
                        <input type="text" class="form-control" id="enfermedades" name="enfermedades" value="<?php echo $enfermedades ?>">
                    </div>
                    <div class="mb-3">
                        <label for="medicamentos" class="form-label">Medicamentos</label>
                        <input type="text" class="form-control" id="medicamentos" name="medicamentos" value="<?php echo $medicamentos ?>">
                    </div>
                    <div class="mb-3">
                        <label for="observaciones" class="form-label">Observaciones</label>
                        <input type="text" class="form-control" id="observaciones" name="observaciones" value="<?php echo $observaciones ?>">
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-primary" value="Registrar">
                    </div>
                </form>
            </div>
        </div>
    </div>

    
</body>
</html>