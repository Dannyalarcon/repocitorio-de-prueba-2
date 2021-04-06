<?php

    $host = '127.0.0.1:3308';
    $user = 'root';
    $password = '';
    $db = 'tarea1';

    $conection = @mysqli_connect($host, $user, $password, $db);

    //mysqli_close($conection);

    if(!$conection){
        echo "Error en la conexion";
    }

?>
