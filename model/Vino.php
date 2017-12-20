<?php
require_once  __DIR__ . "/GenericModel.php";

class Vino extends GenericModel{
    

    private $nombre;
    private $bodega;
    private $descripcion;
    private $año;
    private $tipo;
    private $alcohol;

    public function __construct($conexion) {
		parent::__construct($conexion);
        $this->table = TABLE_VINOS;
    }

    
    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getBodega() {
        return $this->bodega;
    }

    public function setBodega($bodega) {
        $this->bodega = $bodega;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function getAno() {
        return $this->ano;
    }

    public function setAno($ano) {
        $this->ano = $ano;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function getAlcohol() {
        return $this->alcohol;
    }

    public function setAlcohol($alcohol) {
        $this->alcohol = $alcohol;
    }

    public function getAllByBodega($id) {
        return $this->getByColumn("bodega",$id);
    }

    public function guardar(){

        $consulta = $this->conexion->prepare("INSERT INTO " . $this->table . " (nombre, bodega, descripcion, tipo, ano, alcohol)
                                        VALUES (:nombre, :bodega, :descripcion, :tipo, :ano, :alcohol)");
        $result = $consulta->execute(array(
            "nombre" => $this->nombre,
            "bodega" => $this->bodega,
            "descripcion" => $this->descripcion,
            "tipo" => $this->tipo,
            "ano" => $this->ano,
            "alcohol" => $this->alcohol
        ));
        $this->conexion = null;

        return $result; //true if OK.
    }

    public function actualizar(){

        $consulta = $this->conexion->prepare("
            UPDATE " . $this->table . " 
            SET 
                nombre = :nombre,
                bodega = :bodega, 
                descripcion = :descripcion,
                tipo = :tipo,
                ano = :ano,
                alcohol = :alcohol

            WHERE id = :id 
        ");

        $resultado = $consulta->execute(array(
            "nombre" => $this->nombre,
            "bodega" => $this->bodega,
            "descripcion" => $this->descripcion,
            "tipo" => $this->tipo,
            "ano" => $this->ano,
            "alcohol" => $this->alcohol,
            "id" => $this->id
        ));
        $this->conexion = null;

        return $resultado; //true if OK.
    }
        
    
    
    
}
?>
