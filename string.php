
<?php
// Obtener la longitud de una cadena
$texto = 'Hola, mundo!';
$longitud = strlen($texto);
echo $longitud; // Salida: 12

// Convertir una cadena a minúsculas
$texto = 'Hola, Mundo!';
$textoMin = strtolower($texto);
echo $textoMin; // Salida: hola, mundo!

// Reemplazar parte de una cadena
$texto = 'Hola, mundo!';
$nuevoTexto = str_replace('mundo', 'amigo', $texto);
echo $nuevoTexto; // Salida: Hola, amigo!
?>