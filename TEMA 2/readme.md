### TEMA 2

// 1. IF básico: Ejecuta si la condición es verdadera
$edad = 20;
if ($edad >= 18) {
    echo "Eres mayor de edad.";

    // 2. IF...ELSE: Ejecuta una acción u otra
$hora = 14;
if ($hora < 12) {
    echo "Buenos días.";
} else {
    echo "Buenas tardes.";
}
// 3. IF...ELSEIF...ELSE: Evalúa múltiples condiciones secuencialmente
$nota = 85;
if ($nota >= 90) {
    echo "Excelente";
} elseif ($nota >= 70) {
    echo "Aprobado";
} else {
    echo "Reprobado";
}
?>

# los condicionales 

Los condicionales son estructuras que permiten tomar decisiones dentro de un programa. Gracias a ellos, el flujo de ejecución puede variar según se cumplan o no determinadas condiciones.

Un condicional evalúa una expresión lógica y, dependiendo de si el resultado es verdadero o falso, ejecuta diferentes bloques de instrucciones. Esto hace posible que el programa responda de manera dinámica a distintos escenarios.

Existen varias formas de usar condicionales en PHP:

## if:
se emplea para ejecutar un bloque de código únicamente cuando la condición es verdadera.

## if ... else: 
añade una alternativa, de modo que se ejecuta un bloque si la condición es verdadera y otro si es falsa.

## elseif: 
permite evaluar múltiples condiciones de manera secuencial, ofreciendo más de dos caminos posibles.

## switch: 
resulta útil cuando se necesita comparar una misma variable con varios valores posibles, simplificando la estructura en lugar de usar múltiples if.
