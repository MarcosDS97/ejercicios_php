<?php
session_start(); // Inicia la sesión

// Verifica si la sesión de productos ya está iniciada, si no, inicialízala
if (!isset($_SESSION['productos'])) {
    $_SESSION['productos'] = [];
}

// Verifica si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtiene el producto del formulario y lo limpia
    $producto = trim($_POST['producto']);

    // Agrega el producto al array de productos
    if (!empty($producto)) {
        $_SESSION['productos'][] = $producto;
    }
}

// Muestra la lista completa de productos
if (!empty($_SESSION['productos'])) {
    echo "<h1 class='result'>Lista de Compras:</h1>";
    echo "<ul>";
    foreach ($_SESSION['productos'] as $item) {
        echo "<li>" . htmlspecialchars($item) . "</li>"; // Escapa caracteres especiales
    }
    echo "</ul>";
} else {
    echo "<h1 class='result'>No has agregado productos a la lista.</h1>";
}

// Proporciona un enlace para regresar al formulario
echo '<a href="lista_compras.html">Agregar más productos</a>';
echo ' | <a href="finalizar_lista.php">Finalizar lista</a>';
