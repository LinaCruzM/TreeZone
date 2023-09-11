<?php

require '../conexion.php';

class Arboles{

    public $Cantidad;
    public $Fecha;
    public $id;

    public function __construct($Cantidad, $Fecha, $id=null) {

        $this->Cantidad = $Cantidad;

        $this->Fecha = $Fecha;

        $this->id = $id;

    }
    public function GenerarGráfico(){

    }

}

?>