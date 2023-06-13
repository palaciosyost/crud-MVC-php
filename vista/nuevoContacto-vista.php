<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

    require_once('modelo/nuevoContacto-modelo.php');
    
    if (isset($_POST['añadir'])) {
        if (
            empty($_POST['nombre']) or
            empty($_POST['correo']) or
            empty($_POST['numero'])
        ) {
    ?>
            <div class="alert alert-danger" role="alert">
                <div class="text-center">
                     error en ingresar registro
                </div>
            </div>
    <?php
        } else {
            $nuevoContacto = new nuevoContacto();
            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            $numero = $_POST['numero'];
            $nuevoContacto->set_contacto($nombre, $correo, $numero);
        }
    }
?>
    
</body>
</html>