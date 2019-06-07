<?php /**
 *
 */
class VistasControlador extends Controlador{

  function __construct()  {
    parent::__construct();
  }

  public function paciente()  {
    $this->getCtrVista()->consultorios = $this->getCtrModel()->consultorios();
    $this->getCtrVista()->render("paciente");
  }

  public function inicio()  {
    $this->getCtrVista()->render("inicio");
  }

  public function administrador()  {
    $this->getCtrVista()->citas = $this->getCtrModel()->citas();
    $this->getCtrVista()->pacientes = $this->getCtrModel()->pacientes();
    $this->getCtrVista()->consultorios = $this->getCtrModel()->consultorios();
    $this->getCtrVista()->odontologos = $this->getCtrModel()->odontologos();
    $this->getCtrVista()->render("administrador");
  }

  public function login()  {
    $this->getCtrVista()->render("login");
  }

  public function error()  {
    $this->getCtrVista()->render("error");
  }

  public function odontologo()  {
    $consultorios = $this->getCtrModel()->consultorios();
    $citasA = [];
    foreach ($consultorios as $consultorio) { //echo "entre-- ";
      if ( strcmp($consultorio->getCedula_o(), $_SESSION['USER']->getId()) == 0 ) {//echo "**entre 2" ;
        $citas = $this->getCtrModel()->citas();
        foreach ($citas as $cita) {//echo "entre 3";
          if ( strcmp($cita->getId_consultorio(), $consultorio->getId()) == 0 ) {//echo "entre 4";
            array_push($citasA, $cita);
          }
        }        
      }
       // break;
    }
    $this->getCtrVista()->citass = $citasA; 
    $this->getCtrVista()->pacientes = $this->getCtrModel()->pacientes();   
    $this->getCtrVista()->render("odontologo");
  }
     


}
 ?>
