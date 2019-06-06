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
    $this->getCtrVista()->render("administrador");
  }

  public function login()  {
    $this->getCtrVista()->render("login");
  }

  public function error()  {
    $this->getCtrVista()->render("error");
  }

  public function odontologo()  {
    $this->getCtrVista()->render("odontologo");
  }
     


}
 ?>
