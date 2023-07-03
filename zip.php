<?php
$zip = new ZipArchive;

// Ruta al archivo ZIP
$archivoZip = 'ruta/archivo.zip';

if ($zip->open($archivoZip) === true) {
    // Obtener el número de archivos dentro del ZIP
    $numArchivos = $zip->numFiles;

    // Recorrer los archivos dentro del ZIP
    for ($i = 0; $i < $numArchivos; $i++) {
        // Obtener información del archivo
        $infoArchivo = $zip->statIndex($i);

        // Nombre del archivo
        $nombreArchivo = $infoArchivo['name'];

        // Tamaño del archivo
        $tamañoArchivo = $infoArchivo['size'];

        echo "Nombre del archivo: $nombreArchivo | Tamaño: $tamañoArchivo bytes<br>";
    }

    // Cerrar el archivo ZIP
    $zip->close();
} else {
    echo "No se pudo abrir el archivo ZIP.";
}
?>
