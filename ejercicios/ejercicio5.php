Ejercicio 5:
Crear una función que permita calcular el cudrado, el cubo y la raiz cuadrada de un numero.
IntroduccionPhp_tema1.png
Imagen


<?php
function calcular($numero) {
    $cuadrado = $numero * $numero;
    $cubo = $numero * $numero * $numero;
    $raiz = sqrt($numero);

    echo "Número: $numero <br>";
    echo "Cuadrado: $cuadrado <br>";
    echo "Cubo: $cubo <br>";
    echo "Raíz cuadrada: $raiz <br>";
}

// Llamado de la función
calcular(9);
?>