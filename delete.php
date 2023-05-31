<?php


     // 1. GET['id'] 
     if(isset( $_GET['id'])){
        $id = $_GET['id'];
        echo 'HEMOS RECOGIDO EL VALOR ' . $id;
   
        //2.  Importar la clase Database para poder usar sus funciones
       require_once ('Database.php');
   
       // Realizar un nuevo objeto de la clase Database para usar la funcion getAll
       $database = new Database();
       $database->delete('ordenadores', $id);
   
       //3. Redireccionar al index
       header('Location: index.php');
     }else{
        echo 'Error 404';
     }
     
?>