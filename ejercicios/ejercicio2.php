Ejercicio 2:
Mostrar los numeros del 1 al 100, usando la instrucción for y una array indexado.



<?php
// Crear array vacío
$numeros = array();

// Llenar el array con números del 1 al 100
for ($i = 1; $i <= 100; $i++) {
    $numeros[] = $i;
}

// Mostrar los números
for ($i = 0; $i < count($numeros); $i++) {
    echo $numeros[$i] . "<br>";
}
?>