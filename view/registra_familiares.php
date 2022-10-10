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
    <title>Familiares</title>
</head>
<body>
    <div class="container p-5">
        <div class="row">
            <h2 class="text-center">Registro de familiares</h2>
            <div class="col">
                <form action="../controller/crearFamiliar.php" method="POST" class="border border-info p-3">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre de su familiar">
                    </div>
                    <div class="mb-3">
                        <label for="apellido" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingrese el apellido de su familiar">
                    </div>
                    <div class="mb-3">
                        <label for="idFamiliar" class="form-label">Identificación</label>
                        <input type="text" class="form-control" id="idFamiliar" name="idFamiliar" placeholder="Ingrese la identificacion de su familiar">
                    </div>
                    <div class="mb-3">
                        <label for="fecha_nacimiento" class="form-label">Fecha de nacimiento</label>
                        <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="Fecha de nacimiento">
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
                        <input type="text" class="form-control" id="parentesco" name="parentesco" placeholder="Ingrese el parentesco">
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Telefono</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono">
                    </div>
                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo</label>
                        <input type="text" class="form-control" id="correo" name="correo" placeholder="Correo">
                    </div>
                    <div class="mb-3">
                        <label for="direccion" class="form-label">Direccion</label>
                        <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion">
                    </div>
                    <button type="submit" class="btn btn-primary">Registrar</button>
                    <a href="panel.php" type="button" class="btn btn-danger">Cancelar</a>
                </form>
            </div>
        </div>
    </div>

</form>
                    
</body>
</html>