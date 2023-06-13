<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/SIS-CONTROL-PRESUPUESTO/src/css/bootstrap.min.css">

    <title>Document</title>
</head>

<body>
    <?php
    require 'modelo/paginacion-modelo.php';

    foreach ($array as $resul) {
    ?>
        <tr>
            <th scope="row"><?PHP echo $resul['idContacto']  ?></th>
            <td class="text-secondary"><?php echo $resul['nombreContacto']; ?></td>
            <td class="text-secondary"><?php echo $resul['correoContacto']; ?></td>
            <td class="text-secondary"><?php echo $resul['numero']; ?></td>
            <form action="" method="post" id='enlace'>
                <td>
                    <a name='eliminar' id="eliminar" class="btn btn-danger" href="controlador/eliminar-controlador.php?id=<?php echo $resul['idContacto'] ?>">ELIMINAR</a>
                    <a name='actualizar' class="btn btn-warning" href="controlador/editar-controlador.php?id=<?php echo $resul['idContacto'] ?>">EDITAR</a>
                </td>
            </form>

        </tr>

    <?php
    }
    ?>
    <tr class="">
        <td class="border-0 pt-4"></td>
        <td class="border-0  pt-4"></td>
        <td class="border-0  pt-4"></td>
        <td class="border-0  pt-4">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <?php

                    for ($i = 1; $i <= $total_hojas; $i++) {
                    ?>
                        <li class="page-item"><a class="page-link" href="?h=<?php echo $i ?>"><?php echo $i; ?></a></li>
                    <?php
                    }
                    ?>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </td>
        <td class="border-0"></td>
    </tr>
    <script src="src/js/objetos-responsive.js"></script>
</body>

</html>