Ejercicio 3:
Mostrar las dos primeras letras de los dias de la semana, usando for y un array asociativo.

<?php
$dias = array(
    "lunes" => "Lunes",
    "martes" => "Martes",
    "miercoles" => "Miercoles",
    "jueves" => "Jueves",
    "viernes" => "Viernes",
    "sabado" => "Sabado",
    "domingo" => "Domingo"
);

$keys = array_keys($dias);

for ($i = 0; $i < count($dias); $i++) {
    $dia = $dias[$keys[$i]];
    echo substr($dia, 0, 2) . "<br>";
}
?>