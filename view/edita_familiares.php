<?php 
include_once '../includes/header.php';
include_once '../includes/conexion.php';
include_once '../includes/scripts.php';
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
    $tipoId = $row['tipoId'];
    $idFamiliar = $row['idFamiliar'];
    $parentesco = $row['parentesco'];
    $fecha_nacimiento = $row['fechaNacimiento'];
    $edad = $row['edad'];
    $genero = $row['genero'];
    $telefono = $row['telefono'];
    $correo = $row['email'];
    $direccion = $row['direccion'];
    $codFamiliar = $row['codFamiliar'];
}
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
            <h2 class="text-center">Registro de familiares</h2>
            <div class="col">
                <form action="../controller/editaFamiliar.php" method="POST" class="border border-info p-3">
                    <div class="mb-3">
                        <input type="hidden" name="codFamiliar" id="codFamiliar" value=" <?php echo $codFamiliar ?> ">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value=" <?php echo $nombre ?> ">
                    </div>
                    <div class="mb-3">
                        <label for="apellido" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="apellido" name="apellido" value=" <?php echo $apellido ?> ">
                    </div>
                    <div class="mb-3">
                        <label for="tipoId">Tipo de id.</label>
                        <select name="tipoId" id="tipoId">
                            <option value="1">Cédula</option>
                            <option value="2">Tarjeta de identidad</option>
                            <option value="3">Nuip</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="idFamiliar" class="form-label">Identificación</label>
                        <input type="text" class="form-control" id="idFamiliar" name="idFamiliar" value=" <?php echo $idFamiliar ?> ">
                    </div>
                    <div class="mb-3">
                        <label for="fecha_nacimiento" class="form-label">Fecha de nacimiento</label>
                        <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" value=" <?php echo $fecha_nacimiento ?> ">
                    </div>
                    <div class="mb-3">
                        <label for="genero">Género</label><br>
                        <select name="genero" id="genero">
                            <option value="1">Masculino</option>
                            <option value="2">Femenino</option>
                        </select>
                        
                    </div>
                    <div class="mb-3">
                        <label for="parentesco" class="form-label">Parentesco</label>
                        <input type="text" class="form-control" id="parentesco" name="parentesco" value=" <?php echo $parentesco ?> ">
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Telefono</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" value=" <?php echo $telefono ?> ">
                    </div>
                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo</label>
                        <input type="text" class="form-control" id="correo" name="correo" value=" <?php echo $correo ?> ">
                    </div>
                    <div class="mb-3">
                        <label for="direccion" class="form-label">Direccion</label>
                        <input type="text" class="form-control" id="direccion" name="direccion" value=" <?php echo $direccion ?> ">
                    </div>
                    <button type="submit" class="btn btn-primary">Modificar</button>
                    <a href="panel.php" type="button" class="btn btn-danger">Cancelar</a>
                </form>
            </div>
        </div>
    </div>

</form>
                    
</body>
</html>