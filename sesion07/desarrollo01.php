<?php

    $nombre = $_POST['txtnombre'];
    $apellido = $_POST['txtapellido'];
    $edad = $_POST['txtedad'];
    $carrera = $_POST['cbocarrera'];
    $estado = $_POST['rbtestado'];


    echo "<h2>DATOS DEL STUDIANTE</h2>";
    echo "El alumno registrado se llama: " . $nombre . " <br>";
    echo "El alumno" . $nombre . "se apellida" . $apellido . " <br>";
    echo $apellido . " tiene " . $edad . " años <br>";
    echo $apellido. "le gusta la carrera de: " . $carrera. " <br>";
    echo $apellido. " su estado es de: " . $estado;

?>