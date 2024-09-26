<?php
// Verificamos si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtenemos el número N del formulario
    $n = (int) $_POST['numero'];

    // Calculamos la suma de los números desde 1 hasta N
    $suma = 0;
    for ($i = 1; $i <= $n; $i++) {
        $suma += $i;
    }

    // Mostramos el resultado
    echo "<h1 class='result'>La suma de los números desde 1 hasta $n es: $suma</h1>";
} else {
    // Si se intenta acceder a este archivo sin enviar el formulario
    echo "<h1 class='result'>Por favor, ingresa un número en el formulario.</h1>";
}
