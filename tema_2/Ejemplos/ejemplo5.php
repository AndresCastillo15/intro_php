<?php
$i = 1;
while ($i <= 5) {
    echo $i++; 
}

$j = 0;
do {
    echo "Se ejecuta una vez aunque la condición sea falsa";
} while ($j > 0);
```

### For
Estructura predilecta cuando se conoce de antemano el número exacto de repeticiones.

```php
<?php
for ($i = 1; $i <= 10; $i++) {
    echo "Iteración número: $i";
}
?>