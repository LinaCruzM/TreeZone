<?php

require_once 'conexion.php';

class Usuarios{

    public $Nombre;
    private $Correo;
    private $Contrasena;
    private $Residencia;
    private $id;
    const TABLA = 'usuarios';

    public function Editar_usuario($Nombre,$Correo,$Contrasena){

        $this->Nombre = $Nombre;
        $this->Correo = $Correo;
        $this->Contrasena = $Contrasena;
    }

    public function ver_Usuario($Nombre,$Correo,$Contrasena){

        echo "Nombre: ".$this->Nombre."<br>";
        echo "Correo: ".$this->Correo."<br>";
        echo "Contraseña: ".$this->Contrasena."<br>";

    }


    public function __construct($Nombre, $Correo, $Contrasena, $Residencia , $id=null) {

        $this->Nombre = $Nombre;

        $this->Correo = $Correo;

        $this->Contrasena = $Contrasena;

        $this->Residencia = $Residencia;

        $this->id = $id;

    }

    public function guardar(){

        $conexion = new Conexion();
    {

        $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA .' (nombre, correo, contraseña, residencia) VALUES(:nombre, :correo, :contrasena, :residencia)');

        $consulta->bindParam(':nombre', $this->Nombre);

        $consulta->bindParam(':correo', $this->Correo);

        $consulta->bindParam(':contrasena', $this->Contrasena);

        $consulta->bindParam(':residencia', $this->Residencia);

        $consulta->execute();

        $this->id = $conexion->lastInsertId();

        }

        $conexion = null;

    }
    public function iniciar(){
        $conexion = new Conexion();
        $consulta = $conexion->prepare("SELECT * FROM usuarios WHERE correo = '$this->Correo' AND contraseña = '$this->Contrasena'");
        $consulta->execute();
        return $consulta;
        
    }
    public function Ver_Ubicación(){

    }

    public function Ver_LugaresFrecuentes(){
        
    }

}


class Sector{

    public $Nombre;
    public $Ciudad;
    public $Longitud;
    public $Georeferenciador;
    public $id;

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
    public function ver_CalidadAire() {

    }
    public function ver_CantidadArboles() {

    }
    public function ver_Gráficos() {

    }

}

class Ubicación{

    public $Nombre;
    public $Usuario;
    public $Sector;
    public $id;
    const TABLA = 'ubicación';

    public function __construct($Nombre,$Usuario,$Sector, $id=null) {

        $this->Nombre = $Nombre;

        $this->Usuario = $Usuario;

        $this->Sector = $Sector;

        $this->id = $id;

    }
    public function guardar(){

        $conexion = new Conexion();
    {

        $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA .' (frecuente, usua_id, sect_id) VALUES(:frecuente, :usua_id, :sect_id)');

        $consulta->bindParam(':frecuente', $this->Nombre);

        $consulta->bindParam(':usua_id',$this->Usuario );

        $consulta->bindParam(':sect_id',$this->Sector );


        $consulta->execute();

        $this->id = $conexion->lastInsertId();

        }

        $conexion = null;

    }
    public function Editar_LugarFrecuente($Nombre){

        $this->Nombre = $Nombre;
    }
    public function Eliminar_LugarFrecuente(){

    }

}

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
