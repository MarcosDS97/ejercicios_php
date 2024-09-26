<?php
// Verificamos si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtenemos la edad del formulario
    $edad = (int) $_POST['edad'];

    // Determinamos la clasificación según la edad
    if ($edad < 12) {
        $clasificacion = "Infante";
    } elseif ($edad >= 12 && $edad <= 17) {
        $clasificacion = "Adolescente";
    } elseif ($edad >= 18 && $edad <= 60) {
        $clasificacion = "Adulto";
    } else {
        $clasificacion = "Anciano";
    }

    // Mostramos el resultado
    echo "<h1 class='result'>Tu clasificación es: $clasificacion</h1>";
} else {
    // Si se intenta acceder a este archivo sin enviar el formulario
    echo "<h1 class='result'>Por favor, ingresa tu edad en el formulario.</h1>";
}
