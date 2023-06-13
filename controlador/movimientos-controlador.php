<?php
    
    require_once 'modelo/movimiento-model.php';

    $arrayMovimientos = new movimientos_model();
    $array = $arrayMovimientos->get_movimientos();

    require_once 'vista/movimientos-vista.php';
?>