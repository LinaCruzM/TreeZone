<?php

class Usuarios{

    public $Nombre;
    private $Correo;
    private $Contraseña;

    public function Editar_usuario($Nombre,$Correo,$Contraseña){

        $this->Nombre = $nuevoNombre;
        $this->Correo = $nuevoCorreo;
        $this->Contraseña = $nuevaContraseña;
    }

    public function ver_Usuario($Nombre,$Correo,$Contraseña){

        echo "Nombre: ".$this->Nombre."<br>";
        echo "Correo: ".$this->Correo."<br>";
        echo "Contraseña: ".$this->Contraseña."<br>";

    }

        public function authenticate(){
        $sql = "SELECT * FROM users WHERE mail = '$this->mail' AND password = '$this->password'";
        return $sql;
    }

}

class Sector{

    public $Nombre;
    public $Ciudad;
    public $Longitud;
    public $Georeferenciador;

    public function Editar_Sector($Nombre,$Ciudad,$Longitud,$Georeferenciador){

        $this->Nombre = $nuevoNombre;
        $this->Ciudad = $nuevaCiudad;
        $this->Longitud = $nuevaLongitud;
        $this->Georeferenciador = $nuevoGeoreferenciador;
    }

    public function Obtener_Información($Nombre,$Ciudad,$Longitud,$Georeferenciador){

        echo "Nombre: ".$this->Nombre."<br>";
        echo "Ciudad: ".$this->Ciudad."<br>";
        echo "Longitud: ".$this->Longitud."<br>";
        echo "Georeferenciador: ".$this->Georeferenciador."<br>";

    }

}

class Ubicación{

    public $Nombre;
    public $Ubicación;

}

class Arboles{

    public $Cantidad;
    public $Fecha;

}

class Calidad_de_Aire{

    public $Nivel_de_contaminación;
    public $Fecha;

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
