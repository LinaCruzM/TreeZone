<?php

require '../conexion.php';

class Sector{

    public $Nombre;
    public $Ciudad;
    public $Longitud;
    public $Georeferenciador;
    public $id;
    const TABLA = 'sector';

    public function Obtener_Información($Nombre,$Ciudad,$Longitud,$Georeferenciador){

        echo "Nombre: ".$this->Nombre."<br>";
        echo "Ciudad: ".$this->Ciudad."<br>";
        echo "Longitud: ".$this->Longitud."<br>";
        echo "Georeferenciador: ".$this->Georeferenciador."<br>";

    }

    public function __construct($Nombre, $Ciudad, $Longitud, $Georeferenciador , $id=null) {

        $this->Nombre = $Nombre;

        $this->Ciudad = $Ciudad;

        $this->Longitud = $Longitud;

        $this->Georeferenciador = $Georeferenciador;

        $this->id = $id;

    }
    public static function mostrar(){
        $conexion = new Conexion();
        $consulta = $conexion->prepare("SELECT * FROM " . self::TABLA );
        $consulta->execute();

        $registros = $consulta->fetchAll();

    return $registros;
    }
    public function ver_CalidadAire() {

    }
    public function ver_CantidadArboles() {

    }
    public function ver_Gráficos() {

    }

}
?>