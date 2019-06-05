<?php /**
 *
 */
class PacienteModel extends Modelo{

  function __construct()  {
    parent::__construct();
    echo "<h3>Inicio modelo</h3>";
  }

  public function buscarPersona($cedula)  {
    $per = [];
    $sql = "SELECT * FROM persona WHERE cedula = :cedula";
    $con = $this->bd->conectar();
    $consulta = $con -> prepare($sql);
    $consulta -> execute( array(":cedula"->$cedula) );
    foreach ($consulta as $persona) {
      $pe = new Persona($persona['cedula'], $persona['nombre'], $persona['correo'], $persona['telefono']);
      array_push($per, $pe);
      return $per;
    }
    return $per;
  }

  public function registrarPersona($cedula, $nombre, $correo, $telefono)  {
    $sql = "INSERT INTO persona (cedula, nombre, correo, telefono) VALUES ( $cedula, $nombre, $correo, $telefono )";
    $con = $this->bd->conectar();
    $consulta = $con -> prepare($sql);
    $consulta -> execute();
    if ( !empty( $this->buscarPersona($persona->getCedula) ) ) {
      return true;
    }
    return false;
  }

  public function resgistrarPaciente($cedula, $nombre, $correo, $telefono)  {
    if ( $this->registrarPersona($cedula, $nombre, $correo, $telefono) ) {
        $sql = "INSERT INTO paciente (cedula) VALUES ( $cedula )";
        $con = $this->bd->conectar();


        $consultar = $con -> prepare($sql);
        $consultar -> execute();
        $con =  $this->cerrarCon();
    }
  }

  public function agregarCita($fecha_solicitud, $cedula_p, $id_consultorio, $fecha_asiganda)  {
                             // `fecha_solicitud`, `cedula_p`, `id_consultorio`, `fecha_asignada`
    $sql = "INSERT INTO cita (fecha_solicitud, cedula_p, id_consultorio, fecha_asignada) VALUES (:fecha_soli, :cedula_p, :id_consultorio, :fecha_asig)";
    $con = $this->bd->conectar();
    $cosnultar = $con -> prepare($sql);
    $cosnultar -> execute( array( ":fecha_soli"=>$fecha_solicitud, ":cedula_p"=>$cedula_p, ":id_consultorio"=>$id_consultorio, ":fecha_asig"=>$fecha_asiganda ) );
  }


}
 ?>
