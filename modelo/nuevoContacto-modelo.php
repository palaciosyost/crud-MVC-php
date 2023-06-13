<?php

class nuevoContacto
{
    private $base;

    public function __construct()
    {
        require_once 'modelo/conexion.php';
        $this->base = db2::conexionDB();
    }

    public function set_contacto($nombre, $correo, $numero)
    {
        try {
            $sql = "INSERT INTO contactosguardados
                        (nombreContacto,correoContacto,numero) 
                                VALUE(:nombre,:correo,:numero) ";
            $query = $this->base->prepare($sql);
            $query->bindValue(':nombre', $nombre);
            $query->bindValue(':correo', $correo);
            $query->bindValue(':numero', $numero);

            $query->execute();
?>
            <div class="alert alert-success " role="alert">
                <div class="text-center">
                    nuevo registro ingresado
                </div>
            </div>

<?php
        } catch (Exception $e) {
            echo 'error en insertar datos ' . $e->getMessage();
            die('error en la linea ' . $e->getLine());
        }
        return $query;
    }
}
