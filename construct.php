<?php
class Persona {
    public $nombre;
    public $edad;

    // Constructor de la clase
    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        echo "Se ha creado un objeto de la clase Persona con nombre '$nombre' y edad '$edad'.";
    }

    public function saludar() {
        echo "Hola, mi nombre es {$this->nombre} y tengo {$this->edad} años.";
    }
}

// Creación de un objeto utilizando el constructor
$persona1 = new Persona('Juan', 30);

// Llamada al método 'saludar()' del objeto
$persona1->saludar(); // Salida: Hola, mi nombre es Juan y tengo 30 años.
?>
