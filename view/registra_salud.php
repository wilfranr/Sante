<?php
include_once '../includes/scripts.php';
include_once '../includes/header.php';
echo '<script src="../functions.js" type="text/javascript"></script>';
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
                            <input type="hidden" name="codFamiliar" id="codFamiliar" value="<?php echo $_SESSION['idUsuario'] ?>">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $_SESSION['nombre'] ?>" disabled>
                        </div>
                        <div class="col">
                            <label for="apellido">Apellido</label>
                            <input type="text" name="apellido" id="apellido" class="form-control" value="<?php echo $_SESSION['apellido'] ?>" disabled>
                        </div>
                    
                    <div class="mb-3">
                        <label for="eps" class="form-label">EPS</label>
                        <input type="text" class="form-control" id="eps" name="eps">
                    </div>
                    <div class="mb-3">
                        <label for="arl" class="form-label">ARL</label>
                        <input type="text" class="form-control" id="arl" name="arl">
                    </div>
                    <div class="mb-3">
                        <label for="tipoSangre" class="form-label">Tipo de sangre</label>
                        <select name="tipoSangre" id="tipoSangre">
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
                        <input type="text" class="form-control" id="alergias" name="alergias">
                    </div>
                    <div class="mb-3">
                        <label for="enfermedades" class="form-label">Enfermedades</label>
                        <input type="text" class="form-control" id="enfermedades" name="enfermedades">
                    </div>
                    <div class="mb-3">
                        <label for="medicamentos" class="form-label">Medicamentos</label>
                        <input type="text" class="form-control" id="medicamentos" name="medicamentos">
                    </div>
                    <div class="mb-3">
                        <label for="observaciones" class="form-label">Observaciones</label>
                        <input type="text" class="form-control" id="observaciones" name="observaciones">
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