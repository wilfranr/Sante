<?php
    include_once '../includes/header.php';
    include_once '../includes/conexion.php';
    include_once '../includes/scripts.php';
    echo '<script src="../functions.js" type="text/javascript"></script>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Familiares</title>
</head>
<body>
    <div class="container p-5">
        <div class="row">
            <div class="col">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Tipo Id.</th>
                            <th scope="col">Numero Id.</th>
                            <th scope="col">Parentesco</th>
                            <th scope="col">Fecha de Nacimiento</th>
                            <th scope="col">Edad</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "SELECT * FROM familiar WHERE estado = 1";
                            $result = mysqli_query($conexion, $sql);
                            while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <tr>
                            <td><?php echo $row['nombre'] ?></td>
                            <td><?php echo $row['apellido'] ?></td>
                            <td><?php
                              if ($row['tipoId'] == 1) {
                                echo "Cedula";
                              } else if ($row['tipoId'] == 2) {
                                echo "Tarjeta de identidad";
                              } else {
                                echo "Nuip";
                              }
                             
                             ?></td>
                            <td><?php echo $row['idFamiliar'] ?></td>
                            <td><?php echo $row['parentesco'] ?></td>
                            <td><?php echo $row['fechaNacimiento'] ?></td>
                            <td><?php echo $row['edad'] . " años" ?></td>
                            <td>
                                <a href="registrar_salud_familiar.php?id=<?php echo $row['codFamiliar'] ?>" class="btn btn-primary">Registrar salud</a>
                                <a href="edita_familiares.php?id=<?php echo $row['codFamiliar'] ?>" class="btn btn-success">
                                  Editar
                                </a>
                                <a href="../controller/elimina_familiares.php?id=<?php echo $row['codFamiliar'] ?>" class="btn btn-danger">
                                Eliminar
                                </a>
                            </td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
                <a href="registra_familiares.php" class="btn btn-info">Crear Familiar</a>
            </div>
        </div>
</body>
</html>