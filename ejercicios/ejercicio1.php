Ejercicio 1:
Ingresar el tiempo de duración de una llamada telefónica y determinar la cantidad a pagar, de acuerdo con lo siguiente:
a. Toda llamada que dure tres minutos o menos tienen un costo de $300.
b. Cada minuto adicional cuesta $50.



<?php
$duracion = 5; 

if ($duracion <= 3) {
    $costo = 300;
} else {
    $minutos_adicionales = $duracion - 3;
    $costo = 300 + ($minutos_adicionales * 50);
}

echo "Duración: " . $duracion . " minutos<br>";
echo "Costo a pagar: $" . $costo;
?>
