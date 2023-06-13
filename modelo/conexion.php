<?php

class db2
{
    public static function conexionDB()
    {

        try {
            $conexion = new PDO('mysql:host=localhost; dbname=db-agenda', 'root', '');
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conexion->exec('set character set utf8');
        } catch (Exception $e) {
            die('error ' . $e->getMessage());
            echo 'linea del error ' . $e->getLine();
        }
        return $conexion;
    }
}
?>