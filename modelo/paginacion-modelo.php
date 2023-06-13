<?php
require_once('conexion.php');
$conexion = db2::conexionDB();

try {
    $sql1 = 'SELECT * from contactosguardados';
    $sql1 = $conexion->prepare($sql1);
    $sql1->execute();
    $resul = $sql1->rowCount();

    if (isset($_GET['h'])) {
        if ($_GET['h'] == 1) {
            header('location:index.php');
        } else {
            $pagina = $_GET['h'];
        }
    } else {
        $pagina = 1;
    }

    $cantidad_datos = 3;
    $total_hojas = ceil($resul / $cantidad_datos);
    $inicio_datos = ($pagina - 1) * $cantidad_datos;
} catch (Exception $e) {
    die('error en la paginacion ' . $e->getMessage());
}
