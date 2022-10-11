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
                            <th scope="col">Familiar</th>
                            <th scope="col">EPS</th>
                            <th scope="col">ARL</th>
                            <th scope="col">Tipo de sangre.</th>
                            <th scope="col">Alergias</th>
                            <th scope="col">Enfermedades</th>
                            <th scope="col">Medicamentos</th>
                            <th scope="col">Observaciones</th>
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
                            <td><?php echo $row['eps'] ?></td>
                            <td><?php echo $row['arl'] ?></td>
                            <td><?php
                              if ($row['tipoSangre'] == 1) {
                                echo "A+";
                              } else if(
                                $row['tipoSangre'] == 2
                              ) {
                                echo "A-";
                              } else if(
                                $row['tipoSangre'] == 3
                              ) {
                                echo "B+";
                              } else if(
                                $row['tipoSangre'] == 4
                              ) {
                                echo "B-";
                              } else if(
                                $row['tipoSangre'] == 5
                              ) {
                                echo "AB+";
                              } else if(
                                $row['tipoSangre'] == 6
                              ) {
                                echo "AB-";
                              } else if(
                                $row['tipoSangre'] == 7
                              ) {
                                echo "O+";
                              } else if(
                                $row['tipoSangre'] == 8
                              ) {
                                echo "O-";
                              }
                              
                             
                             ?></td>
                            <td><?php echo $row['alergias'] ?></td>
                            <td><?php echo $row['enfermedades'] ?></td>
                            <td><?php echo $row['medicamentos'] ?></td>
                            <td><?php echo $row['observaciones'] ?></td>
                            
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
</body>
</html>