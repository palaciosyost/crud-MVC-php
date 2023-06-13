<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body class="bg-secondary-subtle">
    <style>
        input {
            height: 50px;
        }

        ::placeholder {
            color: gray;
        }
    </style>
    <div class="container float-start mt-5 ms-3 w-50">
        <div class="row-cols-2">
            <div class="col-6 mb-5 mt-5 text-center ">
                <h1>Ingrese un registro nuevo</h1>
            </div>
            <div class="col-6">
                <form action="" method="post">
                    <?php
                    require_once 'controlador/nuevoContacto-controlador.php';
                    ?>
                    <div class="form mb-3">
                        <input type="text" name="nombre" class="form-control" id="" placeholder="nombre">
                        <label for="floatingInput"></label>
                    </div>
                    <div class="form mb-3">
                        <input type="text" name="correo" class="form-control" id="" placeholder="correo electronico">
                        <label for="floatingInput"></label>
                    </div>
                    <div class="form mb-3">
                        <input type="text" name="numero" class="form-control" id="" placeholder="numero">
                        <label for="floatingInput"> </label>
                    </div>
                    <div>
                        <input type="submit" name="añadir" class="btn btn-primary col-12">
                    </div>
                </form>

            </div>

            <div class="container position-absolute " style="width: 900px; top: 120px; right: 10px;">
                <div class="col">
                    <div class="text-center mb-5">
                        <h1>Registro de Contactos</h1>
                    </div>
                    <?php
                    ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Numero</th>
                                <th>Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require_once 'controlador/movimientos-controlador.php';
                            ?>
                        </tbody>
                    </table>

                </div>

            </div>

        </div>

    </div>


    <script src="src/js/objetos-responsive.js"></script>

</body>

</html>

<!-- <div class="container" style="top: 100px; width: 300px; height: 300px; position: absolute;">
    <div class="mt-3 text-end">
        <h2>REGISTRO EDITADO</h2>
    </div>
    <div class=" text-justify ms-3">
        <p>el registro se edito correctamente</p>
    </div>
    <div>
        <input type="button" value="confirmar" class="btn btn-primary">
    </div>
</div> -->
