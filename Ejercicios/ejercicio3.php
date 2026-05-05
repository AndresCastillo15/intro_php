<?php
$dias = [
    "Lunes" => 1, "Martes" => 2, "Miercoles" => 3, 
    "Jueves" => 4, "Viernes" => 5, "Sabado" => 6, "Domingo" => 7
];

foreach ($dias as $nombre => $posicion) {
    // substr(cadena, inicio, cantidad)
    echo "Día $posicion: " . substr($nombre, 0, 2) . "<br>";
/*<br> es una abreviatura de "break",
entonces al llegar a la letra 2 rompe el ciclo y sigue con el siguiente dia
*/
}
?>