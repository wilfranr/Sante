<php
include_once 'includes/conexion.php';
include_once 'includes/scripts.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salud y Vida</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">`
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.css" />
    <script src="functions.js" type="text/javascript"></script>
    

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="img/logo.png" alt="logo" class="logo">
            </div>
            <div class="col mt-5">
                <h1 class="text-center text-info">Salud y vida</h1>
                <form class="border border-info p-4 bg-info form-inicio" action="controller/login.php" method="POST">
                    <div class="mb-3">
                        <label for="user">Usuario</label>
                        <input type="text" class="form-control" id="user" name="user" placeholder="Ingrese su usuario" required>

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                        <input type="password" class="form-control"  id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary" name="login">Iniciar sesión</button>

            </div>
        </div>
    </div>

</body>

</html>