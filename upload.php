<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $targetDir = 'uploads/'; // Directorio de destino para guardar los archivos subidos
    $targetFile = $targetDir . basename($_FILES['file']['name']); // Ruta completa del archivo objetivo

    // Verificar si se ha seleccionado un archivo válido
    if (!empty($_FILES['file']['name'])) {
        // Mover el archivo subido al directorio de destino
        if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFile)) {
            echo 'El archivo se ha subido correctamente.';
        } else {
            echo 'Se produjo un error al subir el archivo.';
        }
    } else {
        echo 'No se ha seleccionado ningún archivo.';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Subir archivo</title>
</head>
<body>
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" value="Subir archivo">
    </form>
</body>
</html>
