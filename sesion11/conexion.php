<?php


    $conexion = mysqli_connect("localhost", "root", "root", "bd_examen");
    //servidor - usuario del server -contraseña del server - nombre de la BD

    if (!$conexion) {
        echo "¡Error de conexión!";
    } else {
        echo "¡Conexión exitosa!";
    }
    

?>
