<?php

    $num1 = $_POST['txtnota01'];
    $num2 = $_POST['txtnota02'];
    $num3 = $_POST['txtnota03'];

    if ($num1>=0 && $num1<=20 && $num2>=0 && $num2<=20 && $num3>=0 && $num3<=20) {
        $promedio = round(($num1+$num2+$num3)/3);
        if ($promedio >= 13 ) {
            echo 'El promedio del alumno es: ' . $promedio . "<br>
            El estado del alumno es: Aprobado";
        } else {
            echo 'El promedio del alumno es: ' . $promedio . "<br>
            El estado del alumno es: Desaprobado";
        }
        
    } else {
       echo "Ingrese un número entre 0 y 20";
    }
    

    
    

?>