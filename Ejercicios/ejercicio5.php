<?php
    // Crear una función que permita calcular el cudrado, el cubo y la raiz cuadrada de un numero.

    $num = 3;

    function calculos($num){
        echo "El cuadrdo de " . $num . " es: " . $num**2;
        echo "<br> El cubo de " . $num . " es: " . $num**3;
        echo "<br> La raiz cuadrda de " . $num . " es: " . sqrt($num);
    }

    calculos($num);
?>
