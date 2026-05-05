Ejercicio 4:
Dado un rango de números enteros obtener la cantidad de números pares que contiene.


<?php
$inicio = 1;
$fin = 50;
$contador = 0;

for ($i = $inicio; $i <= $fin; $i++) {
    if ($i % 2 == 0) {
        $contador++;
    }
}

echo "Cantidad de números pares: " . $contador;
?>