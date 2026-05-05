<?php
$numeros = [];

// Llenamos el array
for ($i = 1; $i <= 100; $i++) {
    $numeros[] = $i;
}

// Mostramos el contenido
foreach ($numeros as $num) {
    echo $num . " ";
}
?>