<?php
include_once '../includes/header.php';
include_once '../includes/conexion.php';
include_once '../includes/scripts.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salud y Vida</title>



</head>

<body>
    <div class="container p-5">
        <div class="row">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="../img/usuarios.png" class="card-img-top" alt="usuarios">
                    <div class="card-body">
                        <h5 class="card-title">Registrar familiares </h5>
                        <p class="card-text">Registrar sus familiares para controlar estado de salud.</p>
                        <a href="registra_familiares.php" class="btn btn-primary">Ir...</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="../img/registra_estado.png" class="card-img-top" alt="registra">
                    <div class="card-body">
                        <h5 class="card-title">Registrar estado de salud </h5>
                        <p class="card-text">Registrar su estado de salud y el de sus familiares</p>
                        <a href="registra_salud.php" class="btn btn-primary">Ir...</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="../img/ver_salud.png" class="card-img-top" alt="ver_salud">
                    <div class="card-body">
                        <h5 class="card-title">Ver estado de salud </h5>
                        <p class="card-text">Vea su estado de salud y el de sus familiares</p>
                        <a href="ver_salud.php" class="btn btn-primary">Ir...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>