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
        $sql = "SELECT * FROM "
        $pacient = new Persona($paciente['nombre'],$paciente['id'], $paciente['password'] );
        array_push($pacientes, $pacient);
    }
    return $pacientes;
}
}
 ?>
