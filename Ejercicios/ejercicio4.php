<?php
$inicio = 25;
$fin = 95;
$contador_pares = 0;

for ($i = $inicio; $i <= $fin; $i++) {
    if ($i % 2 == 0) {
        $contador_pares++;
    }
}

echo "Entre $inicio y $fin hay exactamente $contador_pares números pares.";
?>