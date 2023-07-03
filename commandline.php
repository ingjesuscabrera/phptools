<?php
// Ejecutar un comando y obtener la salida
$command = 'ls -l';
$output = shell_exec($command);

// Imprimir la salida del comando
echo "<pre>$output</pre>";

// Obtener el código de salida del comando
$exitCode = null;
exec($command, $outputLines, $exitCode);

echo "Código de salida: $exitCode\n";

// Mostrar las líneas de salida como una lista
echo "<ul>";
foreach ($outputLines as $line) {
    echo "<li>$line</li>";
}
echo "</ul>";
?>
