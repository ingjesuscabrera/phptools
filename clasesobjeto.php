<?php
// Definición de la clase 'Persona'
class Persona {
    // Propiedades de la clase
    public $nombre;
    public $edad;

    // Método de la clase
    public function saludar() {
        echo "Hola, mi nombre es {$this->nombre} y tengo {$this->edad} años.";
    }
}

// Creación de objetos
$persona1 = new Persona();
$persona1->nombre = 'Juan';
$persona1->edad = 30;

$persona2 = new Persona();
$persona2->nombre = 'María';
$persona2->edad = 25;

// Llamada al método 'saludar()' de los objetos
$persona1->saludar(); // Salida: Hola, mi nombre es Juan y tengo 30 años.
echo "<br>";
$persona2->saludar(); // Salida: Hola, mi nombre es María y tengo 25 años.
?>
