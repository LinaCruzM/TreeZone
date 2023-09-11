<?php

require '../conexion.php';

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
    public static function iniciar(){
        $conexion = new Conexion();
        $Correo = $_SESSION['correo'];
        $Contraseña = $_SESSION['contraseña'];  
        $consulta = $conexion->prepare("SELECT * FROM " . self::TABLA ." WHERE correo = '$Correo' AND contraseña = '$Contraseña'");
        $consulta->execute();

        $registros = $consulta->fetchAll();

    return $registros;
        
    }
    public function Ver_Ubicación(){

    }

    public function Ver_LugaresFrecuentes(){
        
    }

}
?>