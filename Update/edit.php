<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    //2.  Importar la clase Database para poder usar sus funciones
    require_once('../Database.php');

    // Realizar un nuevo objeto de la clase Database para usar la funcion getAll
    $database = new Database();
    $ordenador = $database->getByid($id);
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/form.css">
    <title>Document</title>
</head>

<body>
    <h1>Introduce los cambios correspondientes al ID <?php echo $ordenador['id_ordenador'] ?></h1>
    <form action="update.php" method="POST">
        <input type="hidden" value="<?php echo $ordenador['id_ordenador'] ?>" name="id">
        <input type="text" value="<?php echo $ordenador['marca'] ?>" name="marca" placeholder="introduce la marca">
        <input type="text" value="<?php echo $ordenador['modelo'] ?>" name="modelo" placeholder="introduce el modelo">
        <input type="number" value="<?php echo $ordenador['precio'] ?>" name="precio" placeholder="introduce la precio">
        <textarea name="descripcion" rows="5" placeholder="Introduce la descripcion"><?php echo $ordenador['descripcion'] ?></textarea>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>