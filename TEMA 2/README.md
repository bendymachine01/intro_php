# intro_php

1. Comentarios en PHP
5

Sirven para explicar el código y no se ejecutan.

Tipos:

// Comentario de una línea

# Comentario de una línea

/* Comentario
   de varias líneas */
2. Variables en PHP
10

Son espacios donde se guardan datos.

Reglas:

Empiezan con $
No llevan tipo (PHP es dinámico)

Ejemplo:

$nombre = "Juan";
$edad = 17;

echo $nombre;
3. Constantes en PHP
6

Son valores que no cambian.

Ejemplo:

define("PI", 3.1416);

echo PI;
4. Operadores en PHP
5
Tipos principales:

Aritméticos

$a + $b;
$a - $b;
$a * $b;
$a / $b;

Comparación

$a == $b;
$a != $b;
$a > $b;

Lógicos

$a && $b; // AND
$a || $b; // OR
!$a;      // NOT
5. Arrays en PHP
7

Son listas de datos.

Ejemplo:

$colores = array("rojo", "azul", "verde");

echo $colores[0]; // rojo
6. Arrays Asociativos
7

Son arrays con clave → valor.

Ejemplo:

$persona = array(
    "nombre" => "Juan",
    "edad" => 17
);

echo $persona["nombre"]; // Juan


![PHP](img/phpconceptosbasicos.png)

