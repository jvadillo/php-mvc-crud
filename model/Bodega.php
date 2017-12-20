<?php
require_once  __DIR__ . "/GenericModel.php";

class Bodega extends GenericModel{
    

    private $nombre;
    private $direccion;
    private $email;
    private $telefono;
    private $contacto;
    private $fecha;
    private $restaurante;
    private $hotel;

    public function __construct($conexion) {
		parent::__construct($conexion);
        $this->table = TABLE_BODEGAS;
    }

    
    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function getContacto() {
        return $this->contacto;
    }

    public function setContacto($contacto) {
        $this->contacto = $contacto;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    public function isRestaurante() {
        return $this->restaurante;
    }

    public function setRestaurante($restaurante) {
        $this->restaurante = $restaurante;
    }

    public function isHotel() {
        return $this->hotel;
    }

    public function setHotel($hotel) {
        $this->hotel = $hotel;
    }

    public function guardar(){

        $consulta = $this->conexion->prepare("INSERT INTO " . $this->table . " (nombre,direccion,email,telefono, contacto, fecha, restaurante, hotel)
                                        VALUES (:nombre,:direccion,:email,:telefono, :contacto, :fecha, :restaurante, :hotel)");
        $result = $consulta->execute(array(
            "nombre" => $this->nombre,
            "direccion" => $this->direccion,
            "email" => $this->email,
            "telefono" => $this->telefono,
            "contacto" => $this->contacto,
            "fecha" => $this->fecha,
            "restaurante" => $this->restaurante,
            "hotel" => $this->hotel
        ));
        $this->conexion = null;

        return $result; //true if OK.
    }

    public function actualizar(){

        $consulta = $this->conexion->prepare("
            UPDATE " . $this->table . "  
            SET 
                nombre = :nombre,  
                direccion = :direccion,  
                email = :email, 
                telefono = :telefono, 
                contacto = :contacto, 
                fecha = :telefono, 
                restaurante = :restaurante, 
                hotel = :hotel 

            WHERE id = :id 
        ");

        $resultado = $consulta->execute(array(
            "nombre" => $this->nombre,
            "direccion" => $this->direccion,
            "email" => $this->email,
            "telefono" => $this->telefono,
            "contacto" => $this->contacto,
            "fecha" => $this->fecha,
            "restaurante" => $this->restaurante,
            "hotel" => $this->hotel, 
            "id" => $this->id
        ));
        $this->conexion = null;

        return $resultado; //true if OK.
    }
        
    
    
    
}
?>
