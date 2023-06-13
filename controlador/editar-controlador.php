<?php
    require_once('../modelo/editar-modelo.php');
    $editardatos = new editarDatos();
    $id = $_GET['id'];
    $arrayDatos = $editardatos->get_datos($id);
    require_once('../vista/editar-vista.php');
?>