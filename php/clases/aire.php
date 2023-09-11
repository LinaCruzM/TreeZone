<?php

require '../conexion.php';

class Calidad_de_Aire{

    public $Nivel_de_contaminación;
    public $Fecha;
    public $id;

    public function __construct($Nivel_de_contaminación, $Fecha , $id=null) {

        $this->Nivel_de_contaminación = $Nivel_de_contaminación;

        $this->Fecha = $Fecha;

        $this->id = $id;

    }
    public function GenerarGráfico(){

    }

}

?>