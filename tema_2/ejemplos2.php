<?php
$user_data = ["id" => 1, "name" => "Senior Dev"];

// Iteración con Clave y Valor
foreach ($user_data as $key => $value) {
    echo "Campo: $key, Valor: $value";
}

// Modificación por referencia
$nums = [1, 2, 3];
foreach ($nums as &$value) {
    $value = $value * 2; // Duplica el valor en el array original
}
unset($value); // PRÁCTICA SENIOR: Eliminar la referencia para evitar errores lógicos

?>