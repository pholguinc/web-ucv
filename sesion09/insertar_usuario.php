<?php

    include_once './conexion.php';

    $nombre = $_POST['txtnombre'];
    $apellido = $_POST['txtapellido'];
    $dni = $_POST['txtdni'];
    $direccion = $_POST['txtdireccion'];
    $fecha_nac = $_POST['txtfecha_nac'];

    $insertar = "INSERT INTO usuario (nombre, apellido, dni, direccion, fecha_nac) 
    VALUES ('$nombre', '$apellido', '$dni', '$direccion', '$fecha_nac');";

    mysqli_query($conexion, $insertar);


?>