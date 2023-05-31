<?php

?>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/form.css">
    <title>Document</title>
</head>
<body>
    <h1>Introduce los datos del nuevo registro</h1>
    <form action="save.php" method="POST">
        <input type="text" name="marca" placeholder="introduce la marca">
        <input type="text" name="modelo" placeholder="introduce el modelo">
        <input type="number" name="precio" placeholder="introduce el precio">
        <textarea name="descripcion" rows="5" placeholder="Introduce la descripcion"></textarea>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>