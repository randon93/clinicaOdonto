<?php
class AdministradorModel extends Modelo{

  function __construct()  {
    parent::__construct();
    echo "<h3>Inicio modelo</h3>";
  }

  public function buscarPersona($cedula)  {
    $per = [];
    $sql = "SELECT * FROM persona WHERE cedula = :cedula";
    $con = $this->bd->conectar();
    $consulta = $con -> prepare($sql);
    $consulta -> execute( array(":cedula"=>$cedula) );
    foreach ($consulta as $persona) {
      $pe = new Persona();
      $pe->crear($persona['cedula'], $persona['nombre'], $persona['correo'], $persona['telefono']);
      array_push($per, $pe);
      $con = $this->cerrarCon();
      return $per;
    }
    $con = $this->cerrarCon();
    return $per;
  }

  public function registrarPersona($cedula, $nombre, $correo, $telefono)  {
    $sql = "INSERT INTO persona(cedula, nombre, correo, telefono) VALUES ( :cedula, :nombre, :correo, :telefono )";
    $con = $this->bd->conectar();
    $consulta = $con -> prepare($sql);
    $consulta -> execute( array( ":cedula"=>$cedula, ":nombre"=>$nombre, ":correo"=>$correo, ":telefono"=>$telefono ) );
    if ( !empty( $this->buscarPersona($cedula) ) ) {
      $con = $this->cerrarCon();
      return true;
    }
    $con = $this->cerrarCon();
    return false;
  }

  public function resgistrarPaciente($cedula, $nombre, $correo, $telefono, $password)  {
    if ( $this->registrarPersona($cedula, $nombre, $correo, $telefono) ) {
        $sql = "INSERT INTO paciente (cedula, password) VALUES ( $cedula, $password )";
        $con = $this->bd->conectar();
        $consultar = $con -> prepare($sql);
        $consultar -> execute();
        $con =  $this->cerrarCon();
    }
  }

  public function resgistrarOdontologo($cedula, $nombre, $correo, $telefono, $password)  {
    if ( $this->registrarPersona($cedula, $nombre, $correo, $telefono) ) {
        $sql = "INSERT INTO odontologo (cedula, password) VALUES ( $cedula, $password )";
        $con = $this->bd->conectar();
        $consultar = $con -> prepare($sql);
        $consultar -> execute();
        $con =  $this->cerrarCon();
    }
  }

  public function resgistrarConsultorio($odonto, $nombre, $correo, $direccion, $telefono)  {
    // if ( $this->registrarPersona($cedula, $nombre, $correo, $telefono) ) {
        $sql = "INSERT INTO `colsultorio`(`nombre`, `direccion`, `correo`, `telefono`, `cedula_o`) VALUES ( :nombre, :direccion, :correo, :telefono, :cedula)";
        $con = $this->bd->conectar();
        $consultar = $con -> prepare($sql);
        $consultar -> execute( array(":nombre"=>$nombre, ":direccion"=>$direccion, ":correo"=>$correo, ":telefono"=>$telefono, ":cedula"=>$odonto) );
        $con =  $this->cerrarCon();
    // }
  }

  public function agregarCita($fecha_solicitud, $cedula_p, $id_consultorio, $fecha_asignada)  {
    $sql = "INSERT INTO cita (fecha_solicitud, cedula_p, id_consultorio, fecha_asignada) VALUES (:fecha_soli, :cedula_p, :id_consultorio, :fecha_asig)";
    $con = $this->bd->conectar();
    $cosnultar = $con -> prepare($sql);
    $consultar -> execute( array( ":fecha_soli"->$fecha_solicitud, ":cedula_p"->$cedula_p, ":id_consultorio"->$id_consultorio, ":fecha_asig"->$fecha_asiganda ) );
    $con = $this->cerrarCon();
  }

  public function eliminar($paciente)  {
    $sql = "DELETE FROM paciente WHERE id = :id";
    $con = $this->bd->conectar();
    $consultar = $con -> prepare($sql);
    $consultar -> execute( array(":id"=>$paciente) );
    $con = $this->cerrarCon();
  }

  public function eliminarCita($numero_cita){ echo $numero_cita;
  //$numero_cita = $_GET['cita'];
  $sql = "DELETE FROM cita WHERE numero_cita = :cita";
  $con = $this->bd->conectar();
  $consultar = $con -> prepare($sql);
  $consultar -> execute( array(":cita"=>$numero_cita) );
}

}
 ?>
