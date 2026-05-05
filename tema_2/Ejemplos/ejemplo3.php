<?php
// Ejemplo de Match para manejo de identidades
$food = 'cake';

$result = match ($food) {
    'apple' => 'Esto es una manzana',
    'cake'  => 'Esto es un pastel',
    default => 'Comida desconocida',
};

// Match con rangos lógicos
$age = 23;
$category = match (true) {
    $age >= 65 => 'senior',
    $age >= 18 => 'adulto',
    default    => 'niño',
};
?>