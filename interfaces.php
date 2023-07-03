<?php
// Definición de la interfaz 'Mascota'
interface Mascota {
    public function emitirSonido();
}

// Implementación de la interfaz 'Mascota' en la clase 'Perro'
class Perro implements Mascota {
    public function emitirSonido() {
        echo "Guau guau!";
    }
}

// Implementación de la interfaz 'Mascota' en la clase 'Gato'
class Gato implements Mascota {
    public function emitirSonido() {
        echo "Miau miau!";
    }
}

// Creación de objetos y llamada al método 'emitirSonido()'
$perro = new Perro();
$perro->emitirSonido(); // Salida: Guau guau!

$gato = new Gato();
$gato->emitirSonido(); // Salida: Miau miau!
?>
