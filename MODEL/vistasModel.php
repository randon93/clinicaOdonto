<?php /**
 *
 */
class VistasModel extends Modelo{

  function __construct()  {
    parent::__construct();
  }

  public function consultorios()  {
    $con = $this->bd->conectar();
    $consultorios = [];
    $sql = "SELECT * FROM colsultorio";
    $cosnultar = $con -> prepare($sql);
    $cosnultar -> execute();
    foreach ($cosnultar as $consultorio) {
      $consul = new Consultorio($consultorio['id'], $consultorio['nombre'], $consultorio['direccion'], $consultorio['correo'], $consultorio['telefono'], $consultorio['cedula_o']);
      array_push($consultorios, $consul);
    }
    return $consultorios;
  }

public function pacientes(){
    $con = $this->bd->conectar();
    $pacientes = [];
    $sql = "SELECT * FROM paciente";
    $consultar = $con -> prepare($sql);
    $consultar -> execute();
    foreach ( $consultar as $paciente){
        $sqll = "SELECT * FROM persona";
        $consultarr = $con -> prepare($sqll);
        $consultarr -> execute();
        foreach ($consultarr as $persona) {
          if ( strcmp($persona['cedula'], $paciente['cedula']) == 0 ) {
            $pacient = new Persona();
            $pacient->crearT($persona['cedula'], $persona['nombre'], $persona['correo'], $persona['telefono'], $paciente['id'] );
            array_push($pacientes, $pacient);
          }
        }
    }
    print_r($pacientes);
    return $pacientes;
}

public function buscarPa($cedula){
  $con = $this->bd->conectar();
  $consulta = $con->prepare("SELECT * FROM paciente WHERE cedula = :cedula");
  $consulta -> execute( array(":cedula"=>$cedula) );
  foreach ($consulta as $pac) {
    return true;
  }
  return false;
}

public function citas(){
  $con = $this->bd->conectar();
  $sql = "SELECT * FROM cita";
  $citas = [];
  $consultar = $con -> prepare($sql);
  $consultar -> execute();
  foreach ($consultar as $cita){
    $cit = new Cita();
    $cit->crear($cita['fecha_solicitud'], $cita['cedula_p'], $cita['id_consultorio'], $cita['fecha_asignada'], $cita['numero_cita']);
    array_push($citas, $cit);
  }
  return $citas;  
}


}
 ?>