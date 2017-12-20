<?php
class BodegaController{

    private $conectar;
    private $conexion;

    public function __construct() {
		require_once  __DIR__ . "/../core/Conectar.php";
        require_once  __DIR__ . "/../model/Bodega.php";
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
            case "nueva" :
                $this->nueva();
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
    * bodetas que consigue del modelo.
    *
    */ 
    public function index(){
        
        //Creamos el objeto empleado
        $bodega=new Bodega($this->conexion);
        
        //Conseguimos todos los empleados
        $bodegas=$bodega->getAll();
       
        //Cargamos la vista index y le pasamos valores
        $this->view("index",array(
            "bodegas"=>$bodegas,
            "titulo" => "PHP MVC - Gestión de Bodegas"
        ));
    }

    /**
    * Carga la página principal de bodegas con la lista de
    * bodegas que consigue del modelo.
    *
    */ 
    public function detalle(){
        
        //Creamos el objeto bodega
        $bodega= new Bodega($this->conexion);
        //Recuperamos de BBDD el bodega
        $bodega = $bodega->getById($_GET["id"]);
        //Cargamos la vista detalle y le pasamos valores

        $vino = new Vino($this->conexion);
        $vinos = $vino->getAllByBodega($_GET["id"]);

        $this->view("detalleBodega",array(
            "bodega" => $bodega,
            "vinos" => $vinos,
            "titulo" => "Detalle Bodega"
        ));
    }

    public function nueva(){
        $this->view("nuevaBodega",array(
            "titulo" => "Nueva Bodega"
        ));
    }

    public function borrar(){
        
        //Creamos el objeto bodega
        $bodega=new Bodega($this->conexion);
        //Recuperamos de BBDD la bodega
        $bodega = $bodega->deleteById($_GET["id"]);
        
        $this->run("index");
    }
    
   /**
    * Crea una nuevo bodega a partir de los parámetros POST 
    * y vuelve a cargar el index.php.
    *
    */
    public function crear(){
        if(isset($_POST["nombre"])){
            
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
    * Actualiza bodega a partir de los parámetros POST 
    * y vuelve a cargar el index.php.
    *
    */
    public function actualizar(){
        if(isset($_POST["id"])){
            
            //Creamos una bodega
            $bodega=new Bodega($this->conexion);
            $bodega->setId($_POST["id"]);
            $bodega->setNombre($_POST["nombre"]);
            $bodega->setDireccion($_POST["direccion"]);
            $bodega->setEmail($_POST["email"]);
            $bodega->setTelefono($_POST["telefono"]);
            $bodega->setContacto($_POST["contacto"]);
            $bodega->setFecha($_POST["fecha"]);
            $bodega->setRestaurante($_POST["restaurante"]);
            $bodega->setHotel($_POST["hotel"]);
            $save=$bodega->actualizar();
        }
        header("Location: index.php?controller=bodega&action=detalle&id=" . $_POST["id"]);
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
