<?php 
 function obtenerServicio(){
    try {
        //Importar conexion
        require 'database.php';

        //Realizar consulta
        $sql = "SELECT * FROM servicios;";
        $consulta = mysqli_query($db, $sql);
        
        
        //Mostrar resultado
        echo '<pre>';
        var_dump(mysqli_fetch_assoc($consulta));//assoc para un solo registro otros para mas resultados
        echo '</pre>';


    } catch (\Throwable $th) {
        var_dump($th);
    }
 }
 obtenerServicio();