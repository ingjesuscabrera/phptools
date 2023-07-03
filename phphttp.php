<?php
// Verificar si se ha enviado el encabezado de autenticación
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="Área restringida"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Autenticación requerida';
    exit;
} else {
    // Verificar las credenciales de autenticación
    $username = $_SERVER['PHP_AUTH_USER'];
    $password = $_SERVER['PHP_AUTH_PW'];

    // Aquí debes implementar la lógica para verificar las credenciales
    // por ejemplo, consultar una base de datos o validar en función de una lista de usuarios autorizados.
    // A continuación, se muestra un ejemplo simple de verificación de credenciales.
    $valid_username = 'usuario';
    $valid_password = 'contraseña';

    if ($username !== $valid_username || $password !== $valid_password) {
        header('WWW-Authenticate: Basic realm="Área restringida"');
        header('HTTP/1.0 401 Unauthorized');
        echo 'Credenciales inválidas';
        exit;
    }
}

// Si las credenciales son válidas, se puede acceder al contenido protegido
echo '¡Autenticación exitosa! Bienvenido ' . $username;
?>
