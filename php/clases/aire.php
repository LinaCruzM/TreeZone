<?php

require '../conexion.php';

class Calidad_de_Aire{

    public $Nivel_de_contaminación;
    public $Fecha;
    public $id;
    const TABLA = 'aire';

    public function __construct($Nivel_de_contaminación, $Fecha , $id=null) {

        $this->Nivel_de_contaminación = $Nivel_de_contaminación;

        $this->Fecha = $Fecha;

        $this->id = $id;

    }
    public static function GenerarGráfico(){
        $conexion = new Conexion();
        $consulta = $conexion->prepare("SELECT sector.id, sector.aire_id, aire.id, aire.nivel FROM " . self::TABLA ." INNER JOIN sector where sector.aire_id = aire.id ORDER BY sector.id");
        $consulta->execute();
    
        $registros = $consulta->fetchAll();
    
        return $registros;
    }

}

?>