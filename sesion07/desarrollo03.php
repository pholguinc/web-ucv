<?php

$n1 = $_POST['txtnum1'];
$n2 = $_POST['txtnum2'];

$operacion = $_POST['cbooperacion'];

/* else if */

/*if ($operacion == 'sumar') {
    
    $resultado = $n1+ $n2;
    echo "La suma de los números es: " . $resultado;
 } else if ($operacion == 'restar') {
    $resultado = $n1- $n2;
    echo "La resta de los números es: " . $resultado;
 }else if($operacion == 'multiplicar'){
    $resultado = $n1 * $n2;
    echo "La multiplicación de los números es: " . $resultado;
 }else if($operacion == 'dividir'){
    $resultado = $n1 / $n2;
    echo "La división de los números es: " . $resultado;
 }else{
    echo "Ingrese un valor válido";
 }   
*/

/* Switch case */

switch ($operacion) {
    case 1:
        $resultado = $n1 + $n2;
        echo "La suma de los números es: " . $resultado;
        break;
    case 2:
        $resultado = $n1 - $n2;
        echo "La resta de los números es: " . $resultado;
        break;

    case 3:
        $resultado = $n1 * $n2;
        echo "La multiplicación de los números es: " . $resultado;
        break;

    case 4:
        $resultado = $n1 / $n2;
        echo "La división de los números es: " . $resultado;
        break;

    default:
        echo "Ingrese un valor válido";
        break;
}
