<?php
// Obtener la fecha actual
$fechaActual = date('Y-m-d');
echo $fechaActual; // Salida: 2023-07-03

// Obtener la diferencia en días entre dos fechas
$fecha1 = '2023-01-01';
$fecha2 = '2023-07-03';
$diferencia = (strtotime($fecha2) - strtotime($fecha1)) / (60 * 60 * 24);
echo $diferencia; // Salida: 183

// Formatear una fecha
$fecha = '2023-07-03';
$fechaFormateada = date('d/m/Y', strtotime($fecha));
echo $fechaFormateada; // Salida: 03/07/2023
?>