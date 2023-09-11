<?php

//Clase ejemplo

class persona{

    public $nombre;
    public $apellido;
    public $edad;

    public function __construct($nombre, $apellido, $edad) {
        $this->nombre = $nombre;
        $this->apellido= $apellido;
        $this->edad = $edad;
    }

}

?>
