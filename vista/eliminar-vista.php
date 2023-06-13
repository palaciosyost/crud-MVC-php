<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>xd</title>
</head>

<body>

    <?php
    require('../modelo/eliminar-modelo.php');

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $eliminar = new DContacto();
        $eliminar->deleteContacto($id);
    }
    

    ?>
</body>

</html>