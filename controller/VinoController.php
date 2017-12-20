<?php
class VinoController{

    private $conectar;
    private $conexion;

    public function __construct() {
		require_once  __DIR__ . "/../core/Conectar.php";
        require_once  __DIR__ . "/../model/Vino.php";
        
        $this->conectar=new Conectar();
        $this->conexion=$this->conectar->conexion();

    }

   /**
    * Ejecuta la acción correspondiente.
    *
    */
    public function run($accion){
        switch($accion)
        { 
            case "index" :
                $this->index();
                break;
            case "nuevo" :
                $this->nuevo();
                break;
            case "alta" :
                $this->crear();
                break;
            case "detalle" :
                $this->detalle();
                break;
            case "actualizar" :
                $this->actualizar();
                break;
            case "borrar" :
                $this->borrar();
                break;
            default:
                $this->index();
                break;
        }
    }

    /**
    * Carga la página principal de bodegas con la lista de
    * bodegas que consigue del modelo.
    *
    */ 
    public function detalle(){


        $vino = new Vino($this->conexion);
        $vinos = $vino ->getById($_GET["id"]);

        $this->view("detalleVino",array(
            "vino" => $vino,
            "titulo" => "Detalle Vino"
        ));
    }

    public function nuevo(){
        $this->view("nuevoVino",array(
            "bodega" => $_GET["bodega"],
            "titulo" => "Nuevo Vino"
        ));
    }

    public function borrar(){
        
        //Creamos el objeto bodega
        $vino = new Vino($this->conexion);
        //Recuperamos de BBDD la bodega
        $vino = $vino->deleteById($_GET["id"]);
        
        header("Location: index.php?controller=bodega&action=detalle&id=" . $_GET["bodega"]);
    }
    
   /**
    * Crea una nuevo bodega a partir de los parámetros POST 
    * y vuelve a cargar el index.php.
    *
    */
    public function crear(){
        if(isset($_POST["nombre"])){
            
            //Creamos una bodega
            $vino=new Vino($this->conexion);
            $vino->setNombre($_POST["nombre"]);
            $vino->setDescripcion($_POST["descripcion"]);
            $vino->setBodega($_POST["bodega"]);
            $vino->setTipo($_POST["tipo"]);
            $vino->setAno($_POST["ano"]);
            $vino->setAlcohol($_POST["alcohol"]);

            $save = $vino->guardar();
        }
        header("Location:index.php?controller=bodega&action=detalle&id=".$_POST["bodega"]);
    }

   /**
    * Actualiza bodega a partir de los parámetros POST 
    * y vuelve a cargar el index.php.
    *
    */
    public function actualizar(){
        if(isset($_POST["id"])){
            
            //Creamos una bodega
            $bodega=new Bodega($this->conexion);
            $bodega->setNombre($_POST["nombre"]);
            $bodega->setDireccion($_POST["direccion"]);
            $bodega->setEmail($_POST["email"]);
            $bodega->setTelefono($_POST["telefono"]);
            $bodega->setContacto($_POST["contacto"]);
            $bodega->setFecha($_POST["fecha"]);
            $bodega->setRestaurante($_POST["restaurante"]);
            $bodega->setHotel($_POST["hotel"]);
            $save=$bodega->guardar();
        }
        $this->run("index");
    }
    
    
   /**
    * Crea la vista que le pasemos con los datos indicados.
    *
    */
    public function view($vista,$datos){
        $data = $datos;  
        require_once  __DIR__ . "/../view/" . $vista . "View.php";

    }

}
?>
