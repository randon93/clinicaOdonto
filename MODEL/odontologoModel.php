<?php
class OdontologoModel extends Modelo {
    function __construct(){
        parent::__construct();
    }

    public function historiaPaciente($cedula_p)    {
        $con = $this->bd->conectar();
        $historias = [];
        $sql = "SELECT * FROM cita WHERE cedula_p = :cedula";
        $consultar = $con -> prepare($sql);
        $consultar -> execute( array(":cedula"=>$cedula_p) );
        foreach ($consultar as $cita) {
          $sqll = "SELECT * FROM atencion_cita WHERE numero_cita = :numeroC";
          $consultarr = $con -> prepare($sqll);
          $consultarr -> execute( array(":numeroC"=>$cita['numero_cita']) );
          foreach ($consultarr as $historia) {
              array_push($historias, $historia);
          }
        }
        return $historias;
    }

    public function agregarHistoria($cita, $descripcion)    {
      $fecha_actual = new DateTime(date("d-m-Y"));
      $fecha_entrada = new DateTime( $cita->getFecha_asignada() );
      if ($fecha_actual->diff($fecha_entrada) == 0) {
        $con = $this->bd->conectar();
        $sql = "INSERT INTO atencion_cita (numero_cita, fecha_asignada, descripcion) VALUES (:numero_cita, :fecha_asignada, :descripcion)";
        $consultar = $con->prepare($sql);
        $cosnultar->execute( array(":numero_cita"=>$cita->getNumero_cita(), ":fecha_asignada"=>$cita->getFecha_asignada(), ":descripcion"=>$descripcion) );

      }

    }
}
// $fecha_actual = strtotime(date("d-m-Y H:i:00",time()));
// $fecha_entrada = strtotime("19-11-2008 21:00:00");
//
// if($fecha_actual > $fecha_entrada){
//         echo "La fecha entrada ya ha pasado";
// }else{
//         echo "Aun falta algun tiempo";
// }

// $datetime1 = new DateTime('2009-10-11');
// $datetime2 = new DateTime('2009-10-13');
// $interval = $datetime1->diff($datetime2);
// echo $interval->format('%R%a días'); -> 2dias
?>
