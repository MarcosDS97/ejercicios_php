<?php
// Verificamos si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtenemos el número del formulario
    $numero = (int) $_POST['numero'];

    // Verificamos que el número esté entre 1 y 10
    if ($numero >= 1 && $numero <= 10) {
        echo "<h1 class='result'>Tabla de multiplicar del $numero:</h1>";
        echo "<ul>";
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "<li>$numero x $i = $resultado</li>";
        }
        echo "</ul>";
    } else {
        // Mensaje de error si el número está fuera de rango
        echo "<h1 class='result'>Error: El número debe estar entre 1 y 10.</h1>";
    }
} else {
    // Si se intenta acceder a este archivo sin enviar el formulario
    echo "<h1 class='result'>Por favor, ingresa un número en el formulario.</h1>";
}
