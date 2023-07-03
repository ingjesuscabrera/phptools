<?php
session_start(); // Inicia la sesión

// Destruye todas las variables de sesión
session_unset();

// Destruye la sesión
session_destroy();

echo 'Cierre de sesión exitoso';
?>
