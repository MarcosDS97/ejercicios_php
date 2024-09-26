<?php
// Verificamos si los datos han sido enviados mediante el método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtenemos los valores del formulario
    $nombre = htmlspecialchars($_POST['nombre']);
    $apellido = htmlspecialchars($_POST['apellido']);

    // Mostramos el mensaje de bienvenida
    echo "<h1>¡Hola $nombre $apellido!</h1>";
} else {
    // Si se accede directamente sin enviar el formulario, se muestra un mensaje
    echo "<h1>Por favor, completa el formulario.</h1>";
}