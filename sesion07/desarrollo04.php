<?php

$num = $_POST['txtnumero'];

$i = 0;

$suma = 0;


/* For */

for ($i=0; $i <= $num ; $i++) { 
    $suma += $i;
    echo $i. "<br>";
}


/*While*/

/*while($num >= $i){
    $suma += $i;
    echo $i. "<br>";
    $i++;
}*/

echo "La suma es: " . $suma;

?>