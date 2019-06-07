<?php 
class OdontologoModel extends Modelo {
    function __construct(){
        parent::__construct();
    }

    public function historiaPaciente($cita)    {
        $con = $this->bd->conectar();
        $historias = [];
        $sql = "SELECT * FROM atencion_cita WHERE numero_cita = :cita";
        $consultar = $con -> prepare($sql);
        $consultar -> execute( array(":cita"=>$cita->gatNumero_cita) );
        foreach ($consultar as $historia) {                
            array_push($historias, $historia);
        }
        return $historias;
    }

    public function agregarHistoria($cita)    {
        $con = $this->bd->conectar();
        $sql = "INSERT INTO atencion_cita (numero_cita, fecha_asignada, descripcion) VALUES (:numero_cita, :fecha_asignada, descripcion)";
        
    }
}


?>