<?php /**
 *
 */
class PacienteControlador extends Controlador{

  function __construct()  {
    parent::__construct();
    echo "<h3>Hola Controlador</h3>";
  }

  public function AgregarOdontolodo()  {
    // code...
  }

  public function AgregarPaciente()  {
    $nombre = $_GET['nombre'];
    $cedula = $_GET['cedula'];
    $correo = $_GET['correo'];
    $telefono = $_GET['telefono'];
    $persona = $this->buscarPersona($cedula);
    if ( empty( $persona ) ) {
      $this->getCtrModel()->resgistrarPaciente($cedula, $nombre, $correo, $telefono);
    }else {
      echo "<H1> EL PACIENTE YA EXISTE </H1>";
    }
  }

  public function AgregarAuxiliar()  {
    // code...
  }

  public function AgregarCita()  {
    $fecha_Solicitud = $_GET['fecha_solicitud'];
    $cedula_p = $_GET['cedula_p'];
    $id_consultorio = $_GET['id_consultorio'];
    $fecha_asiganda = $_GET['fecha_asignada'];

    $this->getCtrModel()->AgregarCita($fecha_solicitud, $cedula_p, $id_consultorio, $fecha_asignada);

  }

  public function buscarPersona($cedudla)  {
    return  $this->getCtrModel()->buscarPersona($cedula);
  }
}
 ?>
