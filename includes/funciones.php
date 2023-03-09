<?php 
 function obtenerServicio(){
    try {
        //Importar conexion
        require 'database.php';

        //Realizar consulta
        $sql = "SELECT * FROM servicios;";
        $consultas = mysqli_query($db, $sql);
        
        
        //Mostrar resultado
        // while($row = mysqli_fetch_assoc($consultas)){//While para iterar
        // echo '<pre>';
        // var_dump($row);
        // echo '</pre>';
        // }


        //Crear un arreglo
        $servicios = array();
        while ($row = mysqli_fetch_assoc($consultas)){
            $servicios[] = $row ;
        }
        echo '<pre>';
        var_dump(json_encode($servicios));
        echo '</pre>';

    } catch (\Throwable $th) {
        var_dump($th);
    }
 }
 obtenerServicio();