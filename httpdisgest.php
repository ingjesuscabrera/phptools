<?php
// Configuración de usuarios válidos
$valid_users = [
    'usuario1' => 'contraseña1',
    'usuario2' => 'contraseña2',
];

// Función para generar el hash de autenticación
function generateDigestHash($username, $password, $realm, $method, $uri, $nonce, $nc, $cnonce, $qop)
{
    $HA1 = md5("{$username}:{$realm}:{$password}");
    $HA2 = md5("{$method}:{$uri}");
    $response = md5("{$HA1}:{$nonce}:{$nc}:{$cnonce}:{$qop}:{$HA2}");
    return $response;
}

// Verificar si se ha enviado el encabezado de autenticación
if (!isset($_SERVER['PHP_AUTH_DIGEST'])) {
    header('HTTP/1.1 401 Unauthorized');
    header('WWW-Authenticate: Digest realm="Área restringida", qop="auth", nonce="' . uniqid() . '", opaque="' . md5('Área restringida') . '"');
    echo 'Autenticación requerida';
    exit;
} else {
    // Parsear los datos del encabezado de autenticación
    $digestData = [];
    $digestParts = explode(', ', $_SERVER['PHP_AUTH_DIGEST']);
    foreach ($digestParts as $part) {
        $part = explode('=', $part);
        $digestData[$part[0]] = str_replace(['"', "'"], '', $part[1]);
    }

    // Verificar las credenciales de autenticación
    $username = $digestData['username'];
    $realm = $digestData['realm'];
    $nonce = $digestData['nonce'];
    $uri = $digestData['uri'];
    $nc = $digestData['nc'];
    $cnonce = $digestData['cnonce'];
    $qop = $digestData['qop'];
    $response = $digestData['response'];

    // Verificar si el usuario y la contraseña son válidos
    if (isset($valid_users[$username])) {
        $password = $valid_users[$username];

        // Verificar el hash de autenticación
        $validResponse = generateDigestHash($username, $password, $realm, $_SERVER['REQUEST_METHOD'], $uri, $nonce, $nc, $cnonce, $qop);

        if ($response !== $validResponse) {
            header('HTTP/1.1 401 Unauthorized');
            echo 'Credenciales inválidas';
            exit;
        }
    } else {
        header('HTTP/1.1 401 Unauthorized');
        echo 'Credenciales inválidas';
        exit;
    }
}

// Si las credenciales son válidas, se puede acceder al contenido protegido
echo '¡Autenticación exitosa! Bienvenido ' . $username;
?>
