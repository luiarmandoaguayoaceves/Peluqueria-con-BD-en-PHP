<?php

$db = mysqli_connect('localhost', 'root', '', 'appsalon');
if (!$db):
    echo "No conectado";
    exit; //terminar cualquier proceso al no conectarse con la BD (seguridad)
endif;
//echo "Ya la hiciste prro";