<?php
require_once('database.php');
$database = new Database();
$resultados = $database->getAll();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/Style.css">
    <title>Document</title>
</head>

<body>
    <main>
        <a href="insert/create.php"><button class="Nuevo">Nueva Insercion</button></a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>MARCA</th>
                    <th>MODELO</th>
                    <th>PRECIO</th>
                    <th>DESCRIPCION</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($resultados as $row) {
                    print '<tr>
                        <td>' . $row['id_ordenador'] . '</td>
                        <td>' . $row['marca'] . '</td>
                        <td>' . $row['modelo'] . '</td>
                        <td>' . $row['precio'] . '</td>
                        <td class="descripcion">' . $row['descripcion'] . '</td>
                        <td class="acciones">
                            <a href="Update/edit.php?id=' . $row['id_ordenador'] . '"><button>UPDATE</button></a>
                            <a href="delete.php?id=' . $row['id_ordenador'] . '"><button>DELETE</button></a>
                        </td>
                    </tr>';
                }
                ?>
            </tbody>
        </table>
    </main>
</body>

</html>