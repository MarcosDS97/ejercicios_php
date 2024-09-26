<?php
session_start(); // Inicia la sesión

// Muestra la lista completa de productos si hay alguno
if (!empty($_SESSION['productos'])) {
    echo "<h1 class='result'>Gracias por usar la Lista de Compras. Aquí está tu lista final:</h1>";
    echo "<ul>";
    foreach ($_SESSION['productos'] as $item) {
        echo "<li>" . htmlspecialchars($item) . "</li>"; // Escapa caracteres especiales
    }
    echo "</ul>";
} else {
    echo "<h1 class='result'>No has agregado productos a la lista.</h1>";
}

// Proporciona un enlace para regresar al formulario o para reiniciar
echo '<a href="lista_compras.html">Agregar más productos</a>';

// Destruye la sesión para limpiar la lista
session_destroy();
