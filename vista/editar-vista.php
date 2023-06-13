<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>


    <div class="container col-4 bg-secondary-subtle" style="margin-top: 100px;">
        <div class="row">
            <div class="text-center mt-3 mb-4">
                <h1>Editar un registro</h1>
            </div>
            <?php

            if (isset($_POST['actualizar'])) {
                $id = $_GET['id'];
                $nombre = $_POST['nombre'];
                $correo = $_POST['correo'];
                $numero = $_POST['numero'];
                if (
                    empty($nombre) or
                    empty($numero)
                ) {
            ?>
                    <div class="alert alert-danger text-center">
                        <p>
                            ERRROR espacios basios
                        </p>
                    </div>
            <?php
                } else {
                    $editardatos->editar_datos($id, $nombre, $correo, $numero);
                }
            }
            ?>
            <div class="">
                <form id="formeditar" method="post">
                    <?php
                    foreach ($arrayDatos as $row) {
                    ?>
                        <div class="form mb-3">
                            <input type="text" name="nombre" value="<?php echo $row['nombreContacto'] ?>" class="form-control" id="" placeholder="nombre">
                            <label for="floatingInput"></label>
                        </div>
                        <div class="form mb-3">
                            <input type="text" name="correo" class="form-control" value="<?php echo $row['correoContacto'] ?>" id="" placeholder="correo electronico">
                            <label for="floatingInput"></label>
                        </div>
                        <div class="form mb-3">
                            <input type="text" name="numero" value="<?php echo $row['numero'] ?>" class="form-control" id="" placeholder="numero">
                            <label for="floatingInput"> </label>
                        </div>
                    <?php
                    }
                    ?>


                    <div class="mb-5">
                        <input type="submit" id="actualizar" name="actualizar" class="btn btn-primary ">
                        <a href="../index.php" class="btn btn-secondary">Regresar</a>
                    </div>
                </form>

            </div>


        </div>

    </div>
    <script src="../src/js/objetos-responsive.js"></script>
</body>

</html>