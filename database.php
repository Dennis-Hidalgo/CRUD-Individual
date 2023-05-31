<?php

class Database
{

    public function conectar()
    {
        $driver = "mysql"; // Que tipo de base de datos voy a utilizar.
        $host = 'localhost'; // 127.0.0.1
        $port = '3306';
        $bd = 'practicaordenadores';
        $user = 'Dennis'; // Esto tiene que cambiar, se crea uno nuevo con permisos.
        $password = "123456"; // Esto tambien cambia

        /* Conectar a una base de datos de MySQL invocando al controlador */
        $dsn = "$driver:dbname=$bd;host=$host;port=$port";
        try {
            $gbd = new PDO($dsn, $user, $password);

        } catch (PDOException $e) {
            echo 'Falló la conexión: ' . $e->getMessage();
        }

        return $gbd;
    }

    public function getAll()
    {
        $sql = "SELECT * FROM ordenadores;";
        $resultados = self::conectar()->query($sql);
        return $resultados;
    }

    /**
     * Funcion que recibe un $id y borra el elemento
     * que tiene dicho $id
     */
    public function delete($tabla, $id)
    {
        $sql = "DELETE FROM $tabla WHERE id_ordenador = $id";
        self::conectar()->query($sql);
    }

    public function save($valores){

        $sql="INSERT INTO ordenadores(marca, modelo, precio, descripcion) VALUES('$valores[0]', '$valores[1]', $valores[2], '$valores[3]')";
        self::conectar()->query($sql);
    }

    public function getById($id){
        $sql = "SELECT * FROM ordenadores WHERE id_ordenador = $id";
        $resultados = self::conectar()->query($sql);
        return $resultados->fetch(PDO::FETCH_ASSOC);
    }

    public function update($valores){
        $sql = "UPDATE ordenadores SET marca='$valores[1]', modelo='$valores[2]', precio='$valores[3]', descripcion='$valores[4]' WHERE id_ordenador = $valores[0]";
        self::conectar()->query($sql);
    }
}

?>