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
}
 ?>
