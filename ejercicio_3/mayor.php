<?php
// Verificamos si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtenemos los valores del formulario
    $numero1 = (float) $_POST['numero1'];
    $numero2 = (float) $_POST['numero2'];
    $numero3 = (float) $_POST['numero3'];

    // Encontramos el número mayor
    $mayor = $numero1; // Asumimos que el primer número es el mayor

    if ($numero2 > $mayor) {
        $mayor = $numero2; // Actualizamos si el segundo número es mayor
    }

    if ($numero3 > $mayor) {
        $mayor = $numero3; // Actualizamos si el tercer número es mayor
    }

    // Mostramos el resultado
    echo "<h1>El número mayor es: $mayor</h1>";
} else {
    // Si se intenta acceder a este archivo sin enviar el formulario
    echo "<h1>Por favor, ingresa los tres números en el formulario.</h1>";
}
