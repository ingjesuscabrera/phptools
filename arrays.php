<?php
// Obtener la cantidad de elementos en un arreglo
$arreglo = [1, 2, 3, 4, 5];
$cantidad = count($arreglo);
echo $cantidad; // Salida: 5

// Ordenar un arreglo en orden ascendente
$arreglo = [3, 1, 4, 2, 5];
sort($arreglo);
print_r($arreglo); // Salida: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )

// Obtener las claves de un arreglo asociativo
$arreglo = ['nombre' => 'Juan', 'edad' => 30, 'ciudad' => 'México'];
$claves = array_keys($arreglo);
print_r($claves); // Salida: Array ( [0] => nombre [1] => edad [2] => ciudad )

?>