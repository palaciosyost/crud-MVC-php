<?php
class DContacto
{
    private $base;

    public function __construct()
    {
        require_once '../modelo/conexion.php';
        $this->base = db2::conexionDB();
    }

    public function deleteContacto($id)
    {
        try {
            $sql = "DELETE FROM contactosguardados where idContacto = :id_contacto";
            $query = $this->base->prepare($sql);

            $query->bindValue(':id_contacto', $id);

            $query->execute();

            header('location: ../index.php');
        } catch (Exception $e) {
            die('error en eliminar datos ' . $e->getMessage());
        }
        return $query;
    }
}
