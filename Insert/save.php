<?php

/**
 * Fichero que gestiona los datos del formulario para insertar un coche nuevo
 */


 $valores = [$_POST['marca'], $_POST['modelo'], $_POST['precio'], $_POST['descripcion']];

require_once('../database.php');

$database = new Database();

$database -> save($valores);

header('Location: ../index.php')
 ?>