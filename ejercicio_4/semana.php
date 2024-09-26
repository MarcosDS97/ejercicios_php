<?php
// Verificamos si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtenemos el número del formulario
    $numero = (int) $_POST['numero'];

    // Creamos un array con los días de la semana
    $dias = [
        1 => "Lunes",
        2 => "Martes",
        3 => "Miércoles",
        4 => "Jueves",
        5 => "Viernes",
        6 => "Sábado",
        7 => "Domingo"
    ];

    // Verificamos si el número está en el rango de 1 a 7
    if (array_key_exists($numero, $dias)) {
        // Mostramos el día de la semana correspondiente
        echo "<h1 class='result'>El día correspondiente es: " . $dias[$numero] . "</h1>";
    } else {
        // Mensaje de error si el número está fuera de rango
        echo "<h1 class='result'>Error: El número debe estar entre 1 y 7.</h1>";
    }
} else {
    // Si se intenta acceder a este archivo sin enviar el formulario
    echo "<h1 class='result'>Por favor, ingresa un número en el formulario.</h1>";
}
