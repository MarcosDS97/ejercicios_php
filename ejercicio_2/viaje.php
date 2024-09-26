<?php
// Verificamos si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtenemos los valores del formulario
    $distancia = (float) $_POST['distancia'];
    $velocidad = (float) $_POST['velocidad'];

    // Validamos que la velocidad no sea cero para evitar división por cero
    if ($velocidad > 0) {
        // Calculamos el tiempo (tiempo = distancia / velocidad)
        $tiempo = $distancia / $velocidad;

        // Mostramos el tiempo del viaje
        echo "<h1>El tiempo esperado de viaje es de " . number_format($tiempo, 2) . " horas.</h1>";
    } else {
        echo "<h1>La velocidad debe ser mayor que cero.</h1>";
    }
} else {
    // Si se intenta acceder a este archivo sin enviar el formulario
    echo "<h1>Por favor, ingresa los datos del formulario.</h1>";
}
