<?php

class editarDatos
{

    private $base;
    private $datos;

    public function __construct()
    {
        require_once('../modelo/conexion.php');
        $this->base = db2::conexionDB();
        $this->datos = array();
    }
    public function get_datos($id)
    {
        try {
            $sql = "SELECT * FROM contactosguardados WHERE idContacto = :id";
            $query = $this->base->prepare($sql);
            $query->bindValue(':id', $id);
            $query->execute();
            while ($resul = $query->fetch(PDO::FETCH_ASSOC)) {
                $this->datos[] = $resul;
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
        return $this->datos;
    }

    public function editar_datos($id, $nombre, $correo, $numero)
    {
        try {
            $sql2 = "UPDATE `contactosguardados` SET
                    `nombreContacto`= :nombre,
                        `correoContacto`= :correo,
                            `numero`= :numero WHERE idContacto = :id ";
            $query = $this->base->prepare($sql2);
            $query->bindValue(':id', $id);
            $query->bindValue(':nombre', $nombre);
            $query->bindValue('correo', $correo);
            $query->bindValue('numero', $numero);
            $query->execute();

?>
            <div class="alert alert-success text-center">
                <p>ACTUALIZASTE un registro</p>
            </div>
<?php

        } catch (\Throwable $th) {
            //throw $th;
        }
        return $query;
    }
}
?>