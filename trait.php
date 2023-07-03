<?php
// Definición del trait 'SaludarTrait'
trait SaludarTrait {
    public function saludar() {
        echo "¡Hola, soy un {$this->tipo}!";
    }
}

// Clase 'Persona' que utiliza el trait 'SaludarTrait'
class Persona {
    use SaludarTrait;
    private $tipo = 'persona';
}

// Clase 'Animal' que utiliza el trait 'SaludarTrait'
class Animal {
    use SaludarTrait;
    private $tipo = 'animal';
}

// Creación de objetos y llamada al método 'saludar()'
$persona = new Persona();
$persona->saludar(); // Salida: ¡Hola, soy un persona!

$animal = new Animal();
$animal->saludar(); // Salida: ¡Hola, soy un animal!
?>
