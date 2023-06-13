<?php

class movimientos_model
{

    private $base;
    private $contactos;

    public function __construct()
    {
        require_once 'modelo/conexion.php';
        $this->base = db2::conexionDB();
        $this->contactos = array();
    }

    public function get_movimientos()
    {
        require_once 'paginacion-modelo.php';
        try {
            $sql = "SELECT * FROM contactosguardados limit $inicio_datos,$cantidad_datos ORDER BY ";
            $salida = $this->base->query($sql);

            while ($fila = $salida->fetch(PDO::FETCH_ASSOC)) {
                $this->contactos[] = $fila;
            }
        } catch (Exception $e) {
            die('error ' . $e->getMessage());
        }

        return $this->contactos;
    }
}
