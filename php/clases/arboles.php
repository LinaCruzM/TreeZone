<?php

require '../conexion.php';

class Arboles{

    public $Cantidad;
    public $Fecha;
    public $id;
    const TABLA = 'arboles';

    public function __construct($Cantidad, $Fecha, $id=null) {

        $this->Cantidad = $Cantidad;

        $this->Fecha = $Fecha;

        $this->id = $id;

    }
    public static function GenerarGráfico(){
        $conexion = new Conexion();
        $consulta = $conexion->prepare("SELECT sector.id, sector.arbol_id, arboles.id, arboles.cantidad FROM " . self::TABLA ." INNER JOIN sector where sector.arbol_id = arboles.id ORDER BY sector.id");
        $consulta->execute();
    
        $registros = $consulta->fetchAll();
    
        return $registros;
    }

}

?>