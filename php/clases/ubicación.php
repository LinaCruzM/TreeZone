<?php

require '../conexion.php';

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
    public static function mostrar(){
        $conexion = new Conexion();
        $id = $_SESSION['id'];
        $consulta = $conexion->prepare("SELECT * FROM " . self::TABLA ." WHERE usua_id = '$id'");
        $consulta->execute();

        $registros = $consulta->fetchAll();

    return $registros;
    }
    public static function mostrar2() {
        $conexion = new Conexion();
        $id = $_SESSION['sect_id'];
        $consulta = $conexion->prepare("SELECT ubicación.sect_id, sector.id, sector.nombre FROM " . self::TABLA ." INNER JOIN sector where ubicación.sect_id AND sector.id = '$id' LIMIT 1");
        $consulta->execute();
    
        $registros = $consulta->fetchAll();
    
        return $registros;
    }
    public static function mostrar3(){
        $conexion = new Conexion();
        $id = $_SESSION['sect_id'];
        $consulta = $conexion->prepare("SELECT * FROM " . self::TABLA ." WHERE id = :id)");
        $consulta->bindParam(':id',$id);
        $consulta->execute();
        
        $registros = $consulta->fetch();
        if($registro){
            return new self($registro['*'],$id);
        }else{
            return false;
        }

    return $registros;
    }
    
    public function Editar_LugarFrecuente(){

        $conexion = new Conexion();
        $id = $_SESSION['idE'];
        $nombre = $_SESSION['nombre'];
        $sector = $_SESSION['sector'];
        $consulta = $conexion->prepare("UPDATE " . self::TABLA ." SET frecuente = :nombre, sect_id = :sector WHERE id = :id");  
        $consulta->bindParam(':id',$id);
        $consulta->bindParam(':nombre',$nombre);
        $consulta->bindParam(':sector',$sector);
        $consulta->execute();
    }
    public function Eliminar_LugarFrecuente(){
        $conexion = new Conexion();
        $consulta = $conexion->prepare("DELETE FROM " . self::TABLA ." WHERE id = :id");  
                $consulta->bindParam(':id',$id);
        $consulta->execute();

    }

} 

?>