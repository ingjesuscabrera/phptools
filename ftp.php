<?php
// Configuración de conexión FTP
$ftpHost = 'ftp.example.com';
$ftpUsuario = 'usuario_ftp';
$ftpClave = 'clave_ftp';

// Conexión FTP
$connId = ftp_connect($ftpHost);
if ($connId) {
    // Inicio de sesión FTP
    $login = ftp_login($connId, $ftpUsuario, $ftpClave);
    if ($login) {
        echo "Conexión FTP y inicio de sesión exitosos.<br>";

        // Cambiar al directorio de trabajo en el servidor FTP
        $directorioFTP = '/directorio_remoto';
        ftp_chdir($connId, $directorioFTP);

        // Obtener lista de archivos en el directorio remoto
        $listaArchivos = ftp_nlist($connId, '.');

        echo "Archivos en el directorio remoto:<br>";
        foreach ($listaArchivos as $archivo) {
            echo "- $archivo<br>";
        }

        // Descargar un archivo del servidor FTP
        $archivoRemoto = 'archivo_remoto.txt';
        $archivoLocal = 'archivo_local.txt';
        if (ftp_get($connId, $archivoLocal, $archivoRemoto, FTP_BINARY)) {
            echo "Archivo descargado exitosamente.<br>";
        } else {
            echo "Error al descargar el archivo.<br>";
        }

        // Subir un archivo al servidor FTP
        $archivoLocal = 'archivo_local.txt';
        $archivoRemoto = 'archivo_remoto.txt';
        if (ftp_put($connId, $archivoRemoto, $archivoLocal, FTP_BINARY)) {
            echo "Archivo subido exitosamente al servidor FTP.<br>";
        } else {
            echo "Error al subir el archivo al servidor FTP.<br>";
        }

        // Cerrar la conexión FTP
        ftp_close($connId);
    } else {
        echo "Error al iniciar sesión en el servidor FTP.<br>";
    }
} else {
    echo "Error al conectar al servidor FTP.<br>";
}
?>
