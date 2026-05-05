# PHP
## Comentarios, variables, constantes
### Comentarios

-----

Son notas dentro del código que el servidor ignora por completo; sirven para explicar, documentar o aclarar qué hace el programa.

Una sola línea: Se usan dos barras // o una almohadilla #.

Varias líneas: Se encierran entre /* y */.


## Variables y Constantes

Ambas sirven para guardar informacion, pero funcionan de forma distinta:

- Variables: Son "Contenedores" para datos que puedan cambiar durante la ejecucion.

Siempre empiezan con el signo peso ($) seguido del nombre de la variable. (ejemplo: `$edad = 25;` )

## Constantes

son valores fijos que NO pueden eliminarse ni modificarse una vez definidos.
se crean usando la funcion "define()" o la palabra clave "const", y a diferencia de las variables, no llevan el signo $ antes de su nombre.

## Arrays y Arrays Asociativos
Un array permite almacenar múltiples valores en una sola variable, funcionando como una lista potente.

Arrays (Indexados): Los datos se organizan por posiciones numéricas (índices), que automáticamente empiezan desde el 0.
Por ejemplo, en una lista de frutas, la primera sería la posición 0, la segunda la 1, y así sucesivamente.

Arrays Asociativos: En lugar de usar números, utilizas nombres o "claves" personalizadas para guardar y encontrar los datos.

Se escriben en formato clave → valor (ejemplo: "nombre" => "Ana"). 

Son ideales cuando quieres asociar etiquetas con significado a los valores, como los detalles de un usuario.

## Operadores

Los operadores son símbolos que le indican a PHP que debe realizar acciones específicas con uno o más valores.

### 1. Operadores Aritméticos
Se usan para realizar operaciones matemáticas comunes.

| Operación | Operador | Ejemplo |
| :--- | :---: | :--- |
| Suma | `+` | `$a + $b` |
| Resta | `-` | `$a - $b` |
| Multiplicación | `*` | `$a * $b` |
| División | `/` | `$a / $b` |
| Módulo (Resto) | `%` | `$a % $b` |
| Exponenciación | `**` | `$a ** $b` |

### 2. Operadores de Asignación
Se utilizan para escribir o actualizar valores en las variables.

* **Asignación simple (`=`):** `$x = 10;`
* **Sumar y asignar (`+=`):** `$x += 5;` (Equivale a `$x = $x + 5`)
* **Restar y asignar (`-=`):** `$x -= 3;` (Equivale a `$x = $x - 3`)

### 3. Operadores de Comparación
Se usan para comparar dos valores y devuelven un booleano (`true` o `false`).

* **Igualdad (`==`):** `$a == $b` (Verifica valor).
* **Identidad (`===`):** `$a === $b` (Verifica valor y tipo de dato).
* **Diferente (`!=` o `<>`):** `$a != $b` (Verifica si no son iguales).
* **Mayor que (`>`):** `$a > $b`.
* **Menor que (`<`):** `$a < $b`.

### 4. Operadores Lógicos
Permiten combinar varias condiciones.

* **And (Y):** `&&` o `and`. Cierto si ambos son ciertos. Ejemplo: `($edad > 18 && $tiene_licencia)`.
* **Or (O):** `||` o `or`. Cierto si al menos uno es cierto.
* **Not (No):** `!`. Invierte el valor lógico.

### 5. Operadores de Incremento y Decremento
Aumentan o disminuyen el valor de una variable en una unidad.

* **Incremento:** `++$x` (pre-incremento) o `$x++` (post-incremento).
* **Decremento:** `--$x` (pre-decremento) o `$x--` (post-decremento).

# magen explicativa con IA
![ImagenIA2](img/Explicacion_tema1.png)